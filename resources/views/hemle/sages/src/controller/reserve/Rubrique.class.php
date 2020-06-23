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
  use src\entities\Rubrique as RubriqueEntity;
  use src\model\RubriqueDB;

  use src\entities\Service as ServiceEntity;
  use src\model\ServiceDB;


  class Rubrique extends Controller{

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
                    return $this->view->load("rubrique/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("rubrique/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new RubriqueDB();
                    $data["rubrique"] = $tdb->getRubrique($id);
                    return $this->view->load("rubrique/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new RubriqueDB();
                    $data["rubriques"] = $tdb->listeRubrique();
                    return $this->view->load("rubrique/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new RubriqueDB();
    /*==================Foreign list=====================*/
                    $data["services"] = $this->servicedb->listeService();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_model)) {
                    $rubriqueObject  = new RubriqueEntity();
                    $rubriqueObject ->setId_model($id_model);
                    $rubriqueObject ->setId_service($id_service);
                    $rubriqueObject ->setNom_rubrique($nom_rubrique);
                    $rubriqueObject ->setValeur_rubrique($valeur_rubrique);
                    $ok = $tdb->addRubrique($rubriqueObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("rubrique/add", $data);
            }else{
                return $this->view->load("rubrique/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new RubriqueDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_model)) {
                    $rubriqueObject  = new RubriqueEntity();
                    $rubriqueObject ->setId($id);
                    $rubriqueObject ->setId_model($id_model);
                    $rubriqueObject ->setId_service($id_service);
                    $rubriqueObject ->setNom_rubrique($nom_rubrique);
                    $rubriqueObject ->setValeur_rubrique($valeur_rubrique);
                    $ok = $tdb->updateRubrique($rubriqueObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new RubriqueDB();
            			//Supression
            			$tdb->deleteRubrique($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new RubriqueDB();
    /*==================Foreign list=====================*/
                    $data["services"] = $this->servicedb->listeService();
            			//Supression
            			$data["rubrique"] = $tdb->getRubrique($id);
            			//chargement de la vue edit.html
                    return $this->view->load("rubrique/edit", $data);
                   }




                   



               }


            ?>

