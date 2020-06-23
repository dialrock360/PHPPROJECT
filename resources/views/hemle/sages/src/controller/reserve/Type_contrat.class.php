<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:24=====================*/
 use libs\system\Controller;
  use src\entities\Type_contrat as Type_contratEntity;
  use src\model\Type_contratDB;

  class Type_contrat extends Controller{

            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("type_contrat/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("type_contrat/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new Type_contratDB();
                    $data["type_contrat"] = $tdb->getType_contrat($id);
                    return $this->view->load("type_contrat/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new Type_contratDB();
                    $data["type_contrats"] = $tdb->listeType_contrat();
                    return $this->view->load("type_contrat/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new Type_contratDB();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($nom_type_contrat)) {
                    $type_contratObject  = new Type_contratEntity();
                    $type_contratObject ->setNom_type_contrat($nom_type_contrat);
                    $type_contratObject ->setDetails($details);
                    $ok = $tdb->addType_contrat($type_contratObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("type_contrat/add", $data);
            }else{
                return $this->view->load("type_contrat/add");
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new Type_contratDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($nom_type_contrat)) {
                    $type_contratObject  = new Type_contratEntity();
                    $type_contratObject ->setId($id);
                    $type_contratObject ->setNom_type_contrat($nom_type_contrat);
                    $type_contratObject ->setDetails($details);
                    $ok = $tdb->updateType_contrat($type_contratObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new Type_contratDB();
            			//Supression
            			$tdb->deleteType_contrat($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new Type_contratDB();
            			//Supression
            			$data["type_contrat"] = $tdb->getType_contrat($id);
            			//chargement de la vue edit.html
                    return $this->view->load("type_contrat/edit", $data);
                   }




                   



               }


            ?>

