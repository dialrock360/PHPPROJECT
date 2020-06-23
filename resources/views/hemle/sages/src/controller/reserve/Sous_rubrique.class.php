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
  use src\entities\Sous_rubrique as Sous_rubriqueEntity;
  use src\model\Sous_rubriqueDB;

  use src\entities\Rubrique as RubriqueEntity;
  use src\model\RubriqueDB;


  class Sous_rubrique extends Controller{

    /*==================Attribut list=====================*/
             private  $rubrique;
             private  $rubriquedb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->rubrique = new RubriqueEntity();
                 $this->rubriquedb = new RubriqueDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("sous_rubrique/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("sous_rubrique/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new Sous_rubriqueDB();
                    $data["sous_rubrique"] = $tdb->getSous_rubrique($id);
                    return $this->view->load("sous_rubrique/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new Sous_rubriqueDB();
                    $data["sous_rubriques"] = $tdb->listeSous_rubrique();
                    return $this->view->load("sous_rubrique/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new Sous_rubriqueDB();
    /*==================Foreign list=====================*/
                    $data["rubriques"] = $this->rubriquedb->listeRubrique();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_rubrique)) {
                    $sous_rubriqueObject  = new Sous_rubriqueEntity();
                    $sous_rubriqueObject ->setId_rubrique($id_rubrique);
                    $sous_rubriqueObject ->setId_model($id_model);
                    $sous_rubriqueObject ->setNom_sous_rubrique($nom_sous_rubrique);
                    $sous_rubriqueObject ->setValeur_sous_rubrique($valeur_sous_rubrique);
                    $ok = $tdb->addSous_rubrique($sous_rubriqueObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("sous_rubrique/add", $data);
            }else{
                return $this->view->load("sous_rubrique/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new Sous_rubriqueDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_rubrique)) {
                    $sous_rubriqueObject  = new Sous_rubriqueEntity();
                    $sous_rubriqueObject ->setId($id);
                    $sous_rubriqueObject ->setId_rubrique($id_rubrique);
                    $sous_rubriqueObject ->setId_model($id_model);
                    $sous_rubriqueObject ->setNom_sous_rubrique($nom_sous_rubrique);
                    $sous_rubriqueObject ->setValeur_sous_rubrique($valeur_sous_rubrique);
                    $ok = $tdb->updateSous_rubrique($sous_rubriqueObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new Sous_rubriqueDB();
            			//Supression
            			$tdb->deleteSous_rubrique($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new Sous_rubriqueDB();
    /*==================Foreign list=====================*/
                    $data["rubriques"] = $this->rubriquedb->listeRubrique();
            			//Supression
            			$data["sous_rubrique"] = $tdb->getSous_rubrique($id);
            			//chargement de la vue edit.html
                    return $this->view->load("sous_rubrique/edit", $data);
                   }




                   



               }


            ?>

