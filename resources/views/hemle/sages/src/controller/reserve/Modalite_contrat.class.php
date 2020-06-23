<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:21=====================*/
 use libs\system\Controller;
  use src\entities\Modalite_contrat as Modalite_contratEntity;
  use src\model\Modalite_contratDB;

  class Modalite_contrat extends Controller{

            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("modalite_contrat/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("modalite_contrat/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new Modalite_contratDB();
                    $data["modalite_contrat"] = $tdb->getModalite_contrat($id);
                    return $this->view->load("modalite_contrat/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new Modalite_contratDB();
                    $data["modalite_contrats"] = $tdb->listeModalite_contrat();
                    return $this->view->load("modalite_contrat/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new Modalite_contratDB();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($nom_modalite)) {
                    $modalite_contratObject  = new Modalite_contratEntity();
                    $modalite_contratObject ->setNom_modalite($nom_modalite);
                    $modalite_contratObject ->setClause_modalite($clause_modalite);
                    $ok = $tdb->addModalite_contrat($modalite_contratObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("modalite_contrat/add", $data);
            }else{
                return $this->view->load("modalite_contrat/add");
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new Modalite_contratDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($nom_modalite)) {
                    $modalite_contratObject  = new Modalite_contratEntity();
                    $modalite_contratObject ->setId($id);
                    $modalite_contratObject ->setNom_modalite($nom_modalite);
                    $modalite_contratObject ->setClause_modalite($clause_modalite);
                    $ok = $tdb->updateModalite_contrat($modalite_contratObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new Modalite_contratDB();
            			//Supression
            			$tdb->deleteModalite_contrat($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new Modalite_contratDB();
            			//Supression
            			$data["modalite_contrat"] = $tdb->getModalite_contrat($id);
            			//chargement de la vue edit.html
                    return $this->view->load("modalite_contrat/edit", $data);
                   }




                   



               }


            ?>

