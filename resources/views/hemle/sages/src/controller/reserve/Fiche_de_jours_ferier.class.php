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
  use src\entities\Fiche_de_jours_ferier as Fiche_de_jours_ferierEntity;
  use src\model\Fiche_de_jours_ferierDB;

  class Fiche_de_jours_ferier extends Controller{

            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("fiche_de_jours_ferier/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("fiche_de_jours_ferier/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new Fiche_de_jours_ferierDB();
                    $data["fiche_de_jours_ferier"] = $tdb->getFiche_de_jours_ferier($id);
                    return $this->view->load("fiche_de_jours_ferier/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new Fiche_de_jours_ferierDB();
                    $data["fiche_de_jours_feriers"] = $tdb->listeFiche_de_jours_ferier();
                    return $this->view->load("fiche_de_jours_ferier/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new Fiche_de_jours_ferierDB();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($annee_exercice)) {
                    $fiche_de_jours_ferierObject  = new Fiche_de_jours_ferierEntity();
                    $fiche_de_jours_ferierObject ->setAnnee_exercice($annee_exercice);
                    $fiche_de_jours_ferierObject ->setNbr_jour_ferie($nbr_jour_ferie);
                    $ok = $tdb->addFiche_de_jours_ferier($fiche_de_jours_ferierObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("fiche_de_jours_ferier/add", $data);
            }else{
                return $this->view->load("fiche_de_jours_ferier/add");
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new Fiche_de_jours_ferierDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($annee_exercice)) {
                    $fiche_de_jours_ferierObject  = new Fiche_de_jours_ferierEntity();
                    $fiche_de_jours_ferierObject ->setId($id);
                    $fiche_de_jours_ferierObject ->setAnnee_exercice($annee_exercice);
                    $fiche_de_jours_ferierObject ->setNbr_jour_ferie($nbr_jour_ferie);
                    $ok = $tdb->updateFiche_de_jours_ferier($fiche_de_jours_ferierObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new Fiche_de_jours_ferierDB();
            			//Supression
            			$tdb->deleteFiche_de_jours_ferier($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new Fiche_de_jours_ferierDB();
            			//Supression
            			$data["fiche_de_jours_ferier"] = $tdb->getFiche_de_jours_ferier($id);
            			//chargement de la vue edit.html
                    return $this->view->load("fiche_de_jours_ferier/edit", $data);
                   }




                   



               }


            ?>

