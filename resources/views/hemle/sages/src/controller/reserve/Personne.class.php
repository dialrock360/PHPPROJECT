<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:22=====================*/
 use libs\system\Controller;
  use src\entities\Personne as PersonneEntity;
  use src\model\PersonneDB;

  class Personne extends Controller{

            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("personne/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("personne/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new PersonneDB();
                    $data["personne"] = $tdb->getPersonne($id);
                    return $this->view->load("personne/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new PersonneDB();
                    $data["personnes"] = $tdb->listePersonne();
                    return $this->view->load("personne/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new PersonneDB();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($nom_personne)) {
                    $personneObject  = new PersonneEntity();
                    $personneObject ->setNom_personne($nom_personne);
                    $personneObject ->setPrenom_personne($prenom_personne);
                    $personneObject ->setGenre_personne($genre_personne);
                    $personneObject ->setDate_naiss_personne($date_naiss_personne);
                    $personneObject ->setLieu_naiss_personne($lieu_naiss_personne);
                    $personneObject ->setNationalite_personne($nationalite_personne);
                    $personneObject ->setTypepiece_personne($typepiece_personne);
                    $personneObject ->setNumpiece_personne($numpiece_personne);
                    $personneObject ->setPhoto_personne($photo_personne);
                    $personneObject ->setDetails_personne($details_personne);
                    $personneObject ->setFlag_personne($flag_personne);
                    $ok = $tdb->addPersonne($personneObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("personne/add", $data);
            }else{
                return $this->view->load("personne/add");
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new PersonneDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($nom_personne)) {
                    $personneObject  = new PersonneEntity();
                    $personneObject ->setId($id);
                    $personneObject ->setNom_personne($nom_personne);
                    $personneObject ->setPrenom_personne($prenom_personne);
                    $personneObject ->setGenre_personne($genre_personne);
                    $personneObject ->setDate_naiss_personne($date_naiss_personne);
                    $personneObject ->setLieu_naiss_personne($lieu_naiss_personne);
                    $personneObject ->setNationalite_personne($nationalite_personne);
                    $personneObject ->setTypepiece_personne($typepiece_personne);
                    $personneObject ->setNumpiece_personne($numpiece_personne);
                    $personneObject ->setPhoto_personne($photo_personne);
                    $personneObject ->setDetails_personne($details_personne);
                    $personneObject ->setFlag_personne($flag_personne);
                    $ok = $tdb->updatePersonne($personneObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new PersonneDB();
            			//Supression
            			$tdb->deletePersonne($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new PersonneDB();
            			//Supression
            			$data["personne"] = $tdb->getPersonne($id);
            			//chargement de la vue edit.html
                    return $this->view->load("personne/edit", $data);
                   }




                   



               }


            ?>

