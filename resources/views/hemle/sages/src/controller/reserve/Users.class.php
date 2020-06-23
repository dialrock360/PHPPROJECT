<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 13-09-2019 23:41:42=====================*/
 use libs\system\Controller;
  use src\entities\Users as UsersEntity;
  use src\model\UsersDB;

  use src\entities\Service as ServiceEntity;
  use src\model\ServiceDB;


  class Users extends Controller{

    /*==================Attribut list=====================*/
             private  $service;
             private  $servicedb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->service = new ServiceEntity();
                 $this->servicedb = new ServiceDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("users/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id_service){
                    $data["id_service"] = $id_service;
                    return $this->view->load("users/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id,$id_service){
                    //Instanciation du model
                    $tdb = new UsersDB();
                    $data["users"] = $tdb->getUsers($id,$id_service);
                    return $this->view->load("users/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new UsersDB();
                    $data["userss"] = $tdb->listeUsers();
                    return $this->view->load("users/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new UsersDB();
    /*==================Foreign list=====================*/
                    $data["services"] = $this->servicedb->listeService();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_service)) {
                    $usersObject  = new UsersEntity();
                    $usersObject ->setId($id);
                    $usersObject ->setId_service($id_service);
                    $usersObject ->setLogin($login);
                    $usersObject ->setPassword($password);
                    $usersObject ->setLevelsecurity($levelsecurity);
                    $ok = $tdb->addUsers($usersObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("users/add", $data);
            }else{
                return $this->view->load("users/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new UsersDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_service)) {
                    $usersObject  = new UsersEntity();
                    $usersObject ->setId($id);
                    $usersObject ->setId_service($id_service);
                    $usersObject ->setLogin($login);
                    $usersObject ->setPassword($password);
                    $usersObject ->setLevelsecurity($levelsecurity);
                    $ok = $tdb->updateUsers($usersObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id,$id_service){
              //Instanciation du model
                    $tdb = new UsersDB();
            			//Supression
            			$tdb->deleteUsers($id,$id_service);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id,$id_service){
                        //Instanciation du model
                       $tdb = new UsersDB();
    /*==================Foreign list=====================*/
                    $data["services"] = $this->servicedb->listeService();
            			//Supression
            			$data["users"] = $tdb->getUsers($id,$id_service);
            			//chargement de la vue edit.html
                    return $this->view->load("users/edit", $data);
                   }




                   



               }


            ?>

