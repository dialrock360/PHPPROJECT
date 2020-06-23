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
  use src\entities\Type_conger as Type_congerEntity;
  use src\model\Type_congerDB;

  class Type_conger extends Controller{

            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("type_conger/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("type_conger/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new Type_congerDB();
                    $data["type_conger"] = $tdb->getType_conger($id);
                    return $this->view->load("type_conger/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new Type_congerDB();
                    $data["type_congers"] = $tdb->listeType_conger();
                    return $this->view->load("type_conger/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new Type_congerDB();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($nom_type_conger)) {
                    $type_congerObject  = new Type_congerEntity();
                    $type_congerObject ->setNom_type_conger($nom_type_conger);
                    $type_congerObject ->setCategirie_type_conger($categirie_type_conger);
                    $type_congerObject ->setCouleur_type_conger($couleur_type_conger);
                    $ok = $tdb->addType_conger($type_congerObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("type_conger/add", $data);
            }else{
                return $this->view->load("type_conger/add");
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new Type_congerDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($nom_type_conger)) {
                    $type_congerObject  = new Type_congerEntity();
                    $type_congerObject ->setId($id);
                    $type_congerObject ->setNom_type_conger($nom_type_conger);
                    $type_congerObject ->setCategirie_type_conger($categirie_type_conger);
                    $type_congerObject ->setCouleur_type_conger($couleur_type_conger);
                    $ok = $tdb->updateType_conger($type_congerObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new Type_congerDB();
            			//Supression
            			$tdb->deleteType_conger($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new Type_congerDB();
            			//Supression
            			$data["type_conger"] = $tdb->getType_conger($id);
            			//chargement de la vue edit.html
                    return $this->view->load("type_conger/edit", $data);
                   }




                   



               }


            ?>

