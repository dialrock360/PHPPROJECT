<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:23=====================*/
 use libs\system\Controller;
  use src\entities\Roles as RolesEntity;
  use src\model\RolesDB;

  class Roles extends Controller{

            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("roles/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("roles/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get(){
                    //Instanciation du model
                    $tdb = new RolesDB();
                    $data["roles"] = $tdb->getRoles();
                    return $this->view->load("roles/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new RolesDB();
                    $data["roless"] = $tdb->listeRoles();
                    return $this->view->load("roles/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new RolesDB();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($nom_role)) {
                    $rolesObject  = new RolesEntity();
                    $rolesObject ->setNom_role($nom_role);
                    $rolesObject ->setNbr_users($nbr_users);
                    $ok = $tdb->addRoles($rolesObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("roles/add", $data);
            }else{
                return $this->view->load("roles/add");
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new RolesDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($nom_role)) {
                    $rolesObject  = new RolesEntity();
                    $rolesObject ->setId($id);
                    $rolesObject ->setNom_role($nom_role);
                    $rolesObject ->setNbr_users($nbr_users);
                    $ok = $tdb->updateRoles($rolesObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete(){
              //Instanciation du model
                    $tdb = new RolesDB();
            			//Supression
            			$tdb->deleteRoles();
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit(){
                        //Instanciation du model
                       $tdb = new RolesDB();
            			//Supression
            			$data["roles"] = $tdb->getRoles();
            			//chargement de la vue edit.html
                    return $this->view->load("roles/edit", $data);
                   }




                   



               }


            ?>

