<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:19=====================*/
 use libs\system\Controller;
  use src\entities\Domaine_programme as Domaine_programmeEntity;
  use src\model\Domaine_programmeDB;

  class Domaine_programme extends Controller{

            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("domaine_programme/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("domaine_programme/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new Domaine_programmeDB();
                    $data["domaine_programme"] = $tdb->getDomaine_programme($id);
                    return $this->view->load("domaine_programme/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new Domaine_programmeDB();
                    $data["domaine_programmes"] = $tdb->listeDomaine_programme();
                    return $this->view->load("domaine_programme/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new Domaine_programmeDB();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($nom_domaine_programme)) {
                    $domaine_programmeObject  = new Domaine_programmeEntity();
                    $domaine_programmeObject ->setNom_domaine_programme($nom_domaine_programme);
                    $ok = $tdb->addDomaine_programme($domaine_programmeObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("domaine_programme/add", $data);
            }else{
                return $this->view->load("domaine_programme/add");
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new Domaine_programmeDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($nom_domaine_programme)) {
                    $domaine_programmeObject  = new Domaine_programmeEntity();
                    $domaine_programmeObject ->setId($id);
                    $domaine_programmeObject ->setNom_domaine_programme($nom_domaine_programme);
                    $ok = $tdb->updateDomaine_programme($domaine_programmeObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new Domaine_programmeDB();
            			//Supression
            			$tdb->deleteDomaine_programme($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new Domaine_programmeDB();
            			//Supression
            			$data["domaine_programme"] = $tdb->getDomaine_programme($id);
            			//chargement de la vue edit.html
                    return $this->view->load("domaine_programme/edit", $data);
                   }




                   



               }


            ?>

