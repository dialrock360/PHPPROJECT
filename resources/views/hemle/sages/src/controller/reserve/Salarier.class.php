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
  use src\entities\Salarier as SalarierEntity;
  use src\model\SalarierDB;

  class Salarier extends Controller{

            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("salarier/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("salarier/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new SalarierDB();
                    $data["salarier"] = $tdb->getSalarier($id);
                    return $this->view->load("salarier/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new SalarierDB();
                    $data["salariers"] = $tdb->listeSalarier();
                    return $this->view->load("salarier/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new SalarierDB();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($type_salaire)) {
                    $salarierObject  = new SalarierEntity();
                    $salarierObject ->setType_salaire($type_salaire);
                    $salarierObject ->setSalaire_base($salaire_base);
                    $salarierObject ->setNature_salaire_base($nature_salaire_base);
                    $salarierObject ->setTemps_travail($temps_travail);
                    $salarierObject ->setNbr_heur_travail($nbr_heur_travail);
                    $salarierObject ->setFreq_travail($freq_travail);
                    $salarierObject ->setPrix_heur_sup($prix_heur_sup);
                    $salarierObject ->setContrat_id($contrat_id);
                    $salarierObject ->setPoste_id($poste_id);
                    $ok = $tdb->addSalarier($salarierObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("salarier/add", $data);
            }else{
                return $this->view->load("salarier/add");
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new SalarierDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($type_salaire)) {
                    $salarierObject  = new SalarierEntity();
                    $salarierObject ->setId($id);
                    $salarierObject ->setType_salaire($type_salaire);
                    $salarierObject ->setSalaire_base($salaire_base);
                    $salarierObject ->setNature_salaire_base($nature_salaire_base);
                    $salarierObject ->setTemps_travail($temps_travail);
                    $salarierObject ->setNbr_heur_travail($nbr_heur_travail);
                    $salarierObject ->setFreq_travail($freq_travail);
                    $salarierObject ->setPrix_heur_sup($prix_heur_sup);
                    $salarierObject ->setContrat_id($contrat_id);
                    $salarierObject ->setPoste_id($poste_id);
                    $ok = $tdb->updateSalarier($salarierObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new SalarierDB();
            			//Supression
            			$tdb->deleteSalarier($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new SalarierDB();
            			//Supression
            			$data["salarier"] = $tdb->getSalarier($id);
            			//chargement de la vue edit.html
                    return $this->view->load("salarier/edit", $data);
                   }




                   



               }


            ?>

