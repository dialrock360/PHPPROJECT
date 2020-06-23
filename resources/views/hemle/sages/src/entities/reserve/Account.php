<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



     namespace src\entities;
    /*==================Classe creer par Samane samane_ui_admin le 15-11-2019 06:17:03=====================*/

use src\model\DB;

class Account
            {

    /*==================Attribut list=====================*/

    /* Class properties (variables) */

    /* The ID of the logged in account (or NULL if there is no logged in account) */
    private $id;

    /* The name of the logged in account (or NULL if there is no logged in account) */
    private $login;
    private $token;
    private $nbr_failled_conexion;
    private  $db;

    /* TRUE if the user is authenticated, FALSE otherwise */
    private $authenticated;


    /* Public class methods (functions) */

    /* Constructor */
    public function __construct()
    {
        /* Initialize the $id and $login variables to NULL */
        require_once 'src/controller/tools/functions.php';
        $this->id = NULL;
        $this->login = NULL;
        $this->authenticated = FALSE;
        $this->db = new DB();
        $this->db->setTablename("accounts");
    }

    /* Destructor */
    public function __destruct()
    {

    }

    /**
     * @return mixed
     */
    public function initNbrFailledConexion()
    {
        $this->nbr_failled_conexion = $this->getAcount_NbrFailledConexion();
    }
    public function getNbrFailledConexion()
    {
        return $this->nbr_failled_conexion;
    }

    /* "Getter" function for the $id variable */
    public function getId(): ?int
    {
        return $this->id;
    }

    /* "Getter" function for the $login variable */
    public function getLogin(): ?string
    {
        return $this->login;
    }

    /* "Getter" function for the $authenticated variable */
    public function isAuthenticated(): bool
    {
        return $this->authenticated;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /* Add a new account to the system and return its ID (the account_id column of the accounts table) */
    public function addAccount( string $finame,string $nom,int $id_service,string $login, string $passwd): int
    {
        /* Global $pdo object */

        $this->db->setTablename("accounts");

        /* Trim the strings to remove extra spaces */
        $nom = trim($nom);
        $avatar = trim(filename(trim($finame),NOW(),str_replace(' ','-',trim($login))));
        $login = trim($login);
        $passwd = trim($passwd);


        /* Check if the user name is valid. If not, throw an exception */
        if (!$this->isLoginValid($login))
        {
            throw new Exception('Invalid user name');
        }

        /* Check if the password is valid. If not, throw an exception */
        if (!$this->isPasswdValid($passwd))
        {
            throw new Exception('Invalid password');
        }

        /* Check if an account having the same name already exists. If it does, throw an exception */
        if (!is_null($this->getIdFromLogin($login)))
        {
            throw new Exception('User name not available');
        }

        /* Finally, add the new account */

        /* Password hash */
        $hash = password_hash($passwd, PASSWORD_DEFAULT);

        /* Values array for PDO INSERT INTO ``(`id`, ``, ``, ``, ``, ``, ``, ``)  */

        $Account = array(
            'id' => "null",
            'id_service' => $id_service,
            'nom' => $nom,
            'avatar' => $avatar,
            'login' => $login,
            'password' => $hash,
            'enabled' => 1,
            'levelsecurity' => 0
        );

        /* Return the new ID */
        return $this->db->insertTable($Account);
    }

    /* Delete an account (selected by its ID) */
    public function deleteAccount(int $id)
    {
        /* Global $pdo object */

        $this->db->setTablename("accounts");

        /* Check if the ID is valid */
        if (!$this->isIdValid($id))
        {
            throw new Exception('Invalid account ID');
        }



        /* Values array for PDO */
        $condition = array('id' => $id);



        /* If there is no logged in user, do nothing */
        if (is_null($this->id))
        {
            return;
        }

        /* Reset the account-related properties */
        $this->id = NULL;
        $this->login = NULL;
        $this->authenticated = FALSE;

        $ok=$this->db->deleteTable(array('where'=>$condition));
        if ($ok>0)
        {
            $this->db->setTablename("account_sessions");
            $condition = array('account_id' => $id);
            $this->db->deleteTable(array('where'=>$condition));

        }
    }

    /* Edit an account (selected by its ID). The name, the password and the status (enabled/disabled) can be changed */
    public function editAccount(int $id, string $nom,string $avatar,string $login, string $passwd, bool $enabled)
    {
        /* Global $pdo object */
        global $pdo;

        /* Trim the strings to remove extra spaces */
        $login = trim($login);
        $passwd = trim($passwd);

        /* Check if the ID is valid */
        if (!$this->isIdValid($id))
        {
            throw new Exception('Invalid account ID');
        }

        /* Check if the user name is valid. */
        if (!$this->isLoginValid($login))
        {
            throw new Exception('Invalid user name');
        }

        /* Check if the password is valid. */
        if (!$this->isPasswdValid($passwd))
        {
            throw new Exception('Invalid password');
        }

        /* Check if an account having the same name already exists (except for this one). */
        $idFromLogin = $this->getIdFromLogin($login);

        if (!is_null($idFromLogin) && ($idFromLogin != $id))
        {
            throw new Exception('User name already used');
        }
        $condition = array('id' =>$id);
        $this->db->setTablename("accounts");




        /* Password hash */
        $hash = password_hash($passwd, PASSWORD_DEFAULT);

        /* Int value for the $enabled variable (0 = false, 1 = true) */
        $intEnabled = $enabled ? 1 : 0;

        /* Values array for PDO */
        $rows = array(
            'nom' => $nom,
            'avatar' => $avatar,
            'login' => $login,
            'password' => $hash,
            'enabled' => $intEnabled
        );


        /* Execute the query */
        $this->db->updateTable($rows,array('where'=>$condition));
    }

    /* Login with username and password */
    public function login(string $login, string $passwd,int $id_service): bool
    {
        /* Global $pdo object */


        sleep(2); // Une pause de 1 sec

        /* Trim the strings to remove extra spaces */
        $login = trim(htmlspecialchars($login));
        $passwd = trim($passwd);

        /* Check if the user name is valid. If not, return FALSE meaning the authentication failed */
        if (!$this->isLoginValid($login))
        {
            return FALSE;
        }

        /* Check if the password is valid. If not, return FALSE meaning the authentication failed */
        if (!$this->isPasswdValid($passwd))
        {
            return FALSE;
        }
        $Isvalid=false;
        if($this->nbr_failled_conexion<10){
            //SELECT `id`, `id_service`, `nom`, `avatar`, `login`, `password`, `enabled`, `levelsecurity` FROM `accounts` WHERE 1
            /* Look for the account in the db. Note: the account must be enabled (account_enabled = 1) */
            //$condition = array('login' => $login,'password' => $passwd,'id_service' => $id_service,'enabled' => 1);
            $this->db->setTablename("accounts");
            $condition = array('login' => $login,'id_service' => $id_service,'enabled' => 1);
            $getlogin =$this->db->getRows(array('where'=>$condition,'return_type'=>'single'));
            /*
            print_r($getlogin);*/
            /* If there is a result, we must check if the password matches using password_verify() */
            if ($getlogin!=null)
            {

                if (password_verify($passwd, $getlogin['password']))
                {
                    /* Authentication succeeded. Set the class properties (id and name) */
                    $this->id = intval($getlogin['id'], 10);
                    $this->login = $login;
                    $this->authenticated = TRUE;
                    // echo $login.' '.$passwd.' '.$id_service;
                    /* Register the current Sessions on the database */
                    $this->registerLoginSession($getlogin);
                    $Isvalid=true;
                    /* Finally, Return TRUE */
                    return TRUE;
                }
            }
        }

        if (  $Isvalid==false){
            $this->update_nbr_failled_conexion();
        }
        /* If we are here, it means the authentication failed: return FALSE */
        return FALSE;


    }

    /* A sanitization check for the account username */
    public function isLoginValid(string $login): bool
    {
        /* Initialize the return variable */
        $valid = TRUE;

        /* Example check: the length must be between 8 and 16 chars */
        $len = mb_strlen(htmlspecialchars($login));

        if (($len < 3) || ($len > 26))
        {
            $valid = FALSE;
        }

        /* You can add more checks here */

        return $valid;
    }

    /* A sanitization check for the account password */
    public function isPasswdValid(string $passwd): bool
    {
        /* Initialize the return variable */
        $valid = TRUE;

        /* Example check: the length must be between 8 and 16 chars */
        $len = mb_strlen(htmlspecialchars($passwd));

        if (($len < 3) || ($len > 26))
        {
            $valid = FALSE;
        }

        /* You can add more checks here */

        return $valid;
    }

    /* A sanitization check for the account ID */
    public function isIdValid(int $id): bool
    {
        /* Initialize the return variable */
        $valid = TRUE;

        /* Example check: the ID must be between 1 and 1000000 */

        if (($id < 1) || ($id > 1000000))
        {
            $valid = FALSE;
        }

        /* You can add more checks here */

        return $valid;
    }

    /* Login using Sessions */
    public function sessionLoginq2()
    {
        /* Global $pdo object */
        //SELECT `session_id`, `account_id`, `login_time` FROM `account_sessions` WHERE 1
        $token= bin2hex(random_bytes ( 64 ) );
        $ret= 0;

        $this->db->setTablename("account_sessions");
        $condition = array('enabled' => 1,'session_id' => session_id());
        $this->db->setTablename("v_account_sessions");
        $account_session =$this->db->getRows(array('where'=>$condition, 'return_type'=>'single'));

        /* Check that the Session has been started */
           if (isset($_SESSION['token']) AND !empty($_SESSION['token']) ) {
               $token=$_SESSION['token'];

           }
        if ($account_session!=null AND $account_session['account_token']==$token) {

               /*
                   Query template to look for the current session ID on the account_sessions table.
                   The query also make sure the Session is not older than 7 days
               */
              // echo   $query ="SELECT * FROM  account_sessions,  accounts WHERE (account_sessions.session_id =  '".session_id()."' ) AND (account_sessions.login_time >= (NOW() - INTERVAL 3 DAY)) AND (account_sessions.account_id = accounts.id) AND (account_sessions.account_token = '".$token."') AND (accounts.enabled = 1)";




               /* Values array for PDO */

               /* Execute the query */

              // $row = $this->db->getspecificQuery($query,'single');

            /* Authentication succeeded. Set the class properties (id and name) and return TRUE*/
            /* $this->id = intval($account_session['account_id'], 10);
             $this->login = $account_session['login'];
             $this->authenticated = TRUE;*/
            //   $_SESSION['token']=$this->update_Token();
             if (isset($_SESSION['user']) AND !empty($_SESSION['user']) ) {
                 $_SESSION['token']=$this->update_Token();

                 $ret= 1;

            }
           }


        /* If we are here, the authentication failed */
        return $ret;
    }
 public function sessionLogin()
    {

        $ret= 0;
        $token=(isset($_SESSION['token']) AND !empty($_SESSION['token']) )?$_SESSION['token']:"";
        $this->db->setTablename("account_sessions");
        $condition = array('enabled' => 1,'session_id' => session_id(),'account_token' => $token);
        $this->db->setTablename("v_account_sessions");
        $account_session =$this->db->getRows(array('where'=>$condition, 'return_type'=>'single'));


        if ($account_session!=null AND !empty($_SESSION['user'])) {

            $ret= 1;
           }


        /* If we are here, the authentication failed */
        return $ret;
    }

    /* Logout the current user */
    public function logout()
    {
        /* Global $pdo object */
        $condition = array('session_id' => session_id());
        $this->db->setTablename("account_sessions");



        /* If there is no logged in user, do nothing */
        if (is_null($this->id))
        {
            return;
        }

        /* Reset the account-related properties */
        $this->id = NULL;
        $this->login = NULL;
        $this->authenticated = FALSE;

        /* If there is an open Session, remove it from the account_sessions table */
        if (session_status() == PHP_SESSION_ACTIVE)
        {
            /* Delete query */
            $this->db->deleteTable(array('where'=>$condition));

        }
    }

    /* Close all account Sessions except for the current one (aka: "logout from other devices") */
    public function closeOtherSessions()
    {

        //SELECT `session_id`, `account_id`, `login_time` FROM `account_sessions` WHERE 1
        /* If there is no logged in user, do nothing */
        if (is_null($this->id))
        {
            return;
        }
        $condition = array('account_id' => $this->id);
        $this->db->setTablename("account_sessions");

        /* Check that a Session has been started */
        if (session_status() == PHP_SESSION_ACTIVE)
        {
            /* Delete all account Sessions with session_id different from the current one */

            $this->db->deleteTable(array('where'=>$condition));
        }
    }

    /* Returns the account id having $login as name, or NULL if it's not found */
    public function getIdFromLogin(string $login): ?int
    {


        /* Since this method is public, we check $login again here */
        if (!$this->isLoginValid($login))
        {
            throw new Exception('Invalid user name');
        }

        /* Initialize the return value. If no account is found, return NULL */
        $id = NULL;


        $condition = array('login' => $login);
        $this->db->setTablename("accounts");
        $getlogin =$this->db->getRows(array('where'=>$condition, 'return_type'=>'single'));


        /* There is a result: get it's ID */
        if ($getlogin!=null)
        {
            $id = intval($getlogin['id'], 10);
        }

        return $id;
    }

    public function getAcount() {
//SELECT ``, `id_service`, `nom`, `avatar`, `login`, `password`, `enabled`, `levelsecurity` FROM `` WHERE 1
        $this->db->setTablename("accounts");
        $condition = array('id' => $this->id);
        return  $this->db->getRows(array('where' => $condition, 'return_type' => 'single'));

    }
    /* Private class methods */

    public function deleteAccountSession()
    {
        /* Global $pdo object */
        $this->db->setTablename("account_sessions");
        $condition = array('session_id' => session_id());

        if (isset($_SESSION['token']) AND !empty($_SESSION['token'])) {
            $condition = array('session_id' => session_id(),'account_token' => $_SESSION['token']);
        }
        $this->db->deleteTable(array('where'=>$condition));
        $this->db->setTablename("connexion_filter");
        $condition = array('ip' =>$_SERVER['REMOTE_ADDR']);
        $this->db->deleteTable(array('where'=>$condition));

    }
    /* Saves the current Session ID with the account ID */
    private function registerLoginSession(array $logUser)
    {
        /* Global $pdo object */

        $this->db->setTablename("account_sessions");
        //SELECT ``, `account_id`, `login_time` FROM `account_sessions` WHERE 1
        /* Check that a Session has been started */
        if (!empty(session_id()))
        {

            /* 	Use a REPLACE statement to:
                - insert a new row with the session id, if it doesn't exist, or...
                - update the row having the session id, if it does exist.
            */
            $ip =
            $account_session= $this->getAcount_session($logUser['id']);
            if ($account_session==null){
                $this->token=bin2hex(random_bytes ( 64 ) );
                $this->id=$logUser['id'];
                $this->login=$logUser['login'];
                //  $query = "REPLACE INTO account_sessions (`session_id`, `account_id`, `account_token`, `login_time`)  VALUES ('".session_id()."', ".$logUser['id'].",'". $this->token."',  NOW())";
             //(`session_id`, `account_id`, `account_token`, `ip`, ``, `login_time`)
                $account_session = array(
                    'session_id' => session_id(),
                    'account_id' => $logUser['id'],
                    'account_token' => $this->token,
                    'login_time' =>  'NOW()'
                );
                $this->db->insertTable($account_session);
                $this->set_connexion_filter();
                // $this->db->update($query);
            }else{
                $this->token=bin2hex(random_bytes ( 64 ) );
                $this->id=$logUser['id'];
                $this->login=$logUser['login'];
                //  $query = "REPLACE INTO account_sessions (`session_id`, `account_id`, `account_token`, `login_time`)  VALUES ('".session_id()."', ".$logUser['id'].",'". $this->token."',  NOW())";
                $account_session = array(
                    'session_id' => session_id(),
                    'account_id' => $logUser['id'],
                    'account_token' => $this->token,
                    'login_time' =>  'NOW()'
                );
                $this->db->replaceTable($account_session);
                // $this->db->update($query);
            }


        }
    }

    public function update_Token() {
     //   SELECT `session_id`, `account_id`, `account_token`, `login_time` FROM `account_sessions` WHERE 1
        $this->token=bin2hex(random_bytes ( 64 ) );
        $this->db->setTablename("account_sessions");
        $condition = array('session_id' => session_id());
        $rows = array('account_token' => $this->token);
        $this->db->updateTable($rows,array('where'=>$condition));

        return $this->token;

    }
    private function update_nbr_failled_conexion() {

        $this->db->setTablename("connexion_filter");
        $condition = array('ip' =>$_SERVER['REMOTE_ADDR']);
        $account_sessions= $this->getAcount_sessionByIP() ;
        if ($account_sessions==null){

            $this->set_connexion_filter();
            $account_sessions= $this->getAcount_sessionByIP() ;
        }
        $rows = array('nbr_failled_conexion' => $account_sessions['nbr_failled_conexion']+1);

        return $this->db->updateTable($rows,array('where'=>$condition));

    }
    private function set_connexion_filter() {

        $this->db->setTablename("connexion_filter");
        $account_session = array(
            'ip' => $_SERVER['REMOTE_ADDR'],
            'nbr_failled_conexion' => 0
        );


        return     $this->db->replaceTable($account_session);

    }
    private function getAcount_sessionByIP() {

         $this->db->setTablename("connexion_filter");
        $condition = array('ip' =>$_SERVER['REMOTE_ADDR']);
        $connexion_filter=  $this->db->getRows(array('where' => $condition, 'return_type' => 'single'));
        return $connexion_filter;

    }

    private function ifAcount_IPIsvalid() {
        return ($this->getNbrFailledConexion()>10)?true:false;

    }
    private function getAcount_session($account_id) {

        $this->db->setTablename("account_sessions");
        $condition = array('session_id' => session_id(),'account_id' => $account_id);
        return  $this->db->getRows(array('where' => $condition, 'return_type' => 'single'));

    }

    private function savefiles($files,$path) {

        $fileName    = $files['avatar']['name'];
        $fileSize    = $files['avatar']['size'];
        $fileTmp_dir  = $files['avatar']['tmp_name'];

        $upload  ='';
        $upload_target = 'public/assets/images/avatars/'; // upload directory
        if(!empty($fileName) && !empty($fileTmp_dir)){
            $upload= fichier($fileName,$fileTmp_dir,$fileSize,$upload_target,str_replace(' ','-',trim($this->login)),$path);
        }


        return $upload;



    }

    private function getAcount_NbrFailledConexion() {

        $this->db->setTablename("connexion_filter");
        $condition = array('ip' =>$_SERVER['REMOTE_ADDR']);
        $connexion_filter=  $this->db->getRows(array('where' => $condition, 'return_type' => 'single'));

        return ($connexion_filter!=null)?$connexion_filter ['nbr_failled_conexion']:0 ;

    }
    /*==================Methode list=====================*/
           }
  
   



   ?>



