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
      use libs\system\Entitie;
    /*==================Classe creer par Samane samane_ui_admin le 05-12-2019 02:38:06=====================*/

        class Accounts extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_service;
        private  $nom;
        private  $avatar;
        private  $login;
        private  $password;
        private  $enabled;
        private  $levelsecurity;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="accounts";
                 $this->id = 'null' ;
                 $this->id_service = 0 ;
                 $this->nom = "" ;
                 $this->avatar = "" ;
                 $this->login = "" ;
                 $this->password = "" ;
                 $this->enabled = 0 ;
                 $this->levelsecurity = "" ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_service()
                 {
                     return $this->id_service;
                 }

             public function getNom()
                 {
                     return $this->nom;
                 }

             public function getAvatar()
                 {
                     return $this->avatar;
                 }

             public function getLogin()
                 {
                     return $this->login;
                 }

             public function getPassword()
                 {
                     return $this->password;
                 }

             public function getEnabled()
                 {
                     return $this->enabled;
                 }

             public function getLevelsecurity()
                 {
                     return $this->levelsecurity;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_service($id_service)
                 {
                      $this->id_service = $id_service;
                 }

             public function setNom($nom)
                 {
                      $this->nom = $nom;
                 }

             public function setAvatar($avatar)
                 {
                      $this->avatar = $avatar;
                 }

             public function setLogin($login)
                 {
                      $this->login = $login;
                 }

             public function setPassword($password)
                 {
                      $this->password = $password;
                 }

             public function setEnabled($enabled)
                 {
                      $this->enabled = $enabled;
                 }

             public function setLevelsecurity($levelsecurity)
                 {
                      $this->levelsecurity = $levelsecurity;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count accounts =====================*/
					public function countAccounts(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get accounts =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste accounts =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("accounts");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("accounts");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("accounts");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_accounts = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If accounts existe =====================*/
					public function ifAccountsexiste($condition){
					    $this->db->setTablename($this->tablename);
	$existe=$this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					if($existe != null)
					      {
					                 return 1;
					      } 
					return 0;
					                }
					  public function setPost($post,$file=array()){
					     extract($post);
                                                       $this->id = (!isset($id) || empty($id) )  ? 0: $id;
                       $this->id_service = (!isset($id_service) || empty($id_service) )  ? 0: $id_service;
                       $this->nom = (!isset($nom) || empty($nom) )  ? '': $nom;
                       $this->avatar = (!isset($avatar) || empty($avatar) )  ? '': $avatar;
                       $this->login = (!isset($login) || empty($login) )  ? '': $login;
                       $this->password = (!isset($password) || empty($password) )  ? '': $password;
                       $this->enabled = (!isset($enabled) || empty($enabled) )  ? 0: $enabled;
                       $this->levelsecurity = (!isset($levelsecurity) || empty($levelsecurity) )  ? '': $levelsecurity;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'id_service'=>($this->id_service == 0 )  ? $OldTable['id_service']:$this->id_service,
                                  'nom'=>(!isset($this->nom) || empty($this->nom) )  ? $OldTable['nom']:$this->nom,
                                  'avatar'=>(!isset($this->avatar) || empty($this->avatar) )  ? $OldTable['avatar']:$this->avatar,
                                  'login'=>(!isset($this->login) || empty($this->login) )  ? $OldTable['login']:$this->login,
                                  'password'=>(!isset($this->password) || empty($this->password) )  ? $OldTable['password']:$this->password,
                                  'enabled'=>($this->enabled == 0 )  ? $OldTable['enabled']:$this->enabled,
                                  'levelsecurity'=>(!isset($this->levelsecurity) || empty($this->levelsecurity) )  ? $OldTable['levelsecurity']:$this->levelsecurity					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'id_service'=>0,
                                  'nom'=>"",
                                  'avatar'=>"",
                                  'login'=>"",
                                  'password'=>"",
                                  'enabled'=>0,
                                  'levelsecurity'=>""					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



