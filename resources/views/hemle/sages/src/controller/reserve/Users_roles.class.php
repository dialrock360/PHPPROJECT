<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:25=====================*/
 use libs\system\Controller;
  use src\entities\Users_roles as Users_rolesEntity;
  use src\model\Users_rolesDB;

  class Users_roles extends Controller{

            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("users_roles/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id_user){
                    $data["id_user"] = $id_user;
                    return $this->view->load("users_roles/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id_user,$id_role){
                    //Instanciation du model
                    $tdb = new Users_rolesDB();
                    $data["users_roles"] = $tdb->getUsers_roles($id_user,$id_role);
                    return $this->view->load("users_roles/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new Users_rolesDB();
                    $data["users_roless"] = $tdb->listeUsers_roles();
                    return $this->view->load("users_roles/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new Users_rolesDB();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_role)) {
                    $users_rolesObject  = new Users_rolesEntity();
                    $users_rolesObject ->setId_user($id_user);
                    $users_rolesObject ->setId_role($id_role);
                    $ok = $tdb->addUsers_roles($users_rolesObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("users_roles/add", $data);
            }else{
                return $this->view->load("users_roles/add");
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new Users_rolesDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_role)) {
                    $users_rolesObject  = new Users_rolesEntity();
                    $users_rolesObject ->setId_user($id_user);
                    $users_rolesObject ->setId_role($id_role);
                    $ok = $tdb->updateUsers_roles($users_rolesObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id_user,$id_role){
              //Instanciation du model
                    $tdb = new Users_rolesDB();
            			//Supression
            			$tdb->deleteUsers_roles($id_user,$id_role);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id_user,$id_role){
                        //Instanciation du model
                       $tdb = new Users_rolesDB();
            			//Supression
            			$data["users_roles"] = $tdb->getUsers_roles($id_user,$id_role);
            			//chargement de la vue edit.html
                    return $this->view->load("users_roles/edit", $data);
                   }




                   



               }


            ?>

