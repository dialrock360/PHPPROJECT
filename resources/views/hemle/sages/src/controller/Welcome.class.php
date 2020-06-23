<?php
/*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    POUR TOUTE MODIFICATION VISANT A AMELIORER
    CE MODELE.
    VOUS ETES LIBRE DE TOUTE UTILISATION.
  ===================================================*/
    use libs\system\Controller;
use src\entities\Account as AccountEntity;

use src\model\DB;
    class Welcome extends Controller{
        private $db;

        public function __construct(){
            parent::__construct();
            $this->db = new DB();
        }
        //methode ou url
        public function index(){
			//view
            $this->db->setTablename("service");
            $lsservices  =$this->db->getRows(array('order_by'=>'nom_service','return_type'=>'many'));
            $data["services"] = $lsservices;
            return $this->view->load("welcome/login", $data);

         // echo  $this->user->getNbrFailledConexion();
        }

        public function deconnexion(){
			//view
            $this->db->setTablename("service");
            $lsservices  =$this->db->getRows(array('order_by'=>'nom_service','return_type'=>'many'));
            $data["services"] = $lsservices;
            $this->logout();

          // return $this->view->load("welcome/login", $data);
            header("Location:".$this->lbase_url);

        }
        public function profile(){
			//view
            $data["services"] = $this->service->listeService();
            $data["view"] = 'Utilisateur';
            $data["curenview"] = 'Profile';
            $data["vewContent"] = 'formprofile';
            $data["vewContenttype"] = 'form';
            $data["pageheader"] = 'Profile Utilisateur';
            $data["pageoverview"] = (isset($_SESSION["user"]))?$_SESSION["user"]["nom"]:'';
            $data["active"] = 10;
//print_r($data["pageoverview"]);
             return $this->view->load("welcome/profile", $data);

        }

        public function connexion(){
			//view

            extract($_POST);
            $connect = FALSE;
            $idservice =(isset($service) && !empty($service))? $service:0;
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                $data["user"] = 0;
                $ok=null;
                if(!empty($login) && !empty($password) && $idservice>0) {

                    try
                    {
                        $connect =  $this->user->login($login,$password,$service);
                    }
                    catch (Exception $e)
                    {
                        echo $e->getMessage();
                        die();
                    }

                    if ($connect==true)
                    {

                        $this->login();
                        $data["active"] = 1;
                        $data["view"] = 'Accueil';
                        $data["curenview"] = 'Home';
                        $data["vewContent"] = 'viewdasboard';
                        $data["vewContenttype"] = 'share';
                        $data["pageheader"] = 'Page de garde';
                        $data["pageoverview"] ='Aperçu et Statistiques';
                       // return $this->view->load("welcome/dashboard", $data);
                        header("Location:".$this->lbase_url);
                    }




                }
            }
            if ($connect==false){

              //  $this->logout();

                $this->db->setTablename("service");
                $lsservices  =$this->db->getRows(array('order_by'=>'nom_service','return_type'=>'many'));
                $data["ok"] = ( $idservice<=0)?'Veillez choisir un service svp !':'Erreur de matricul ou mot de passe !';
                $data["services"] = $lsservices;
               return $this->view->load("welcome/login", $data);


            }

            //Récupération des données qui viennent du formulaire view/test/add.html (à créer)
          /*  if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["user"] = 0;
                $ok=null;
                if(!empty($login) && !empty($password) && isset($service)) {


                    $ok =  $this->user->getConnexion($login,$password);
                    $this->login($ok);
                }
                if ($ok!=null){
                    $data["active"] = 1;
                    $data["view"] = 'Accueil';
                    $data["curenview"] = 'Home';
                    $data["vewContent"] = 'viewdasboard';
                    $data["vewContenttype"] = 'share';
                    $data["pageheader"] = 'Page de garde';
                    $data["pageoverview"] ='Aperçu et Statistiques';
                    return $this->view->load("welcome/dashboard", $data);
                }
                else{

                    $data["ok"] = (!isset($service))?'Veillez choisir un service svp !':'Erreur de matricul ou mot de passe !';

                    return $this->view->load("welcome/login", $data);
                }

            }else{
               return $this->view->load("welcome/login", $data);
            }*/

        }

    }
?>