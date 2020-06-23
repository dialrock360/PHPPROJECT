<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:25=====================*/
 use libs\system\Controller;
  use src\entities\V_fiche_de_presense as V_fiche_de_presenseEntity;
  use src\model\V_fiche_de_presenseDB;

  class V_fiche_de_presense extends Controller{

            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("v_fiche_de_presense/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("v_fiche_de_presense/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get(){
                    //Instanciation du model
                    $tdb = new V_fiche_de_presenseDB();
                    $data["v_fiche_de_presense"] = $tdb->getV_fiche_de_presense();
                    return $this->view->load("v_fiche_de_presense/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new V_fiche_de_presenseDB();
                    $data["v_fiche_de_presenses"] = $tdb->listeV_fiche_de_presense();
                    return $this->view->load("v_fiche_de_presense/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new V_fiche_de_presenseDB();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($present)) {
                    $v_fiche_de_presenseObject  = new V_fiche_de_presenseEntity();
                    $v_fiche_de_presenseObject ->setPresent($present);
                    $v_fiche_de_presenseObject ->setAnne_fiche($anne_fiche);
                    $v_fiche_de_presenseObject ->setDate_fiche($date_fiche);
                    $v_fiche_de_presenseObject ->setHeur_arrive($heur_arrive);
                    $v_fiche_de_presenseObject ->setHeur_depart($heur_depart);
                    $v_fiche_de_presenseObject ->setNbr_heur($nbr_heur);
                    $v_fiche_de_presenseObject ->setFiche_paie_id($fiche_paie_id);
                    $v_fiche_de_presenseObject ->setContrat_id($contrat_id);
                    $v_fiche_de_presenseObject ->setPoste_id($poste_id);
                    $v_fiche_de_presenseObject ->setType_contrat_id($type_contrat_id);
                    $v_fiche_de_presenseObject ->setPersonne_id($personne_id);
                    $v_fiche_de_presenseObject ->setDepartement_id($departement_id);
                    $v_fiche_de_presenseObject ->setNom_personne($nom_personne);
                    $v_fiche_de_presenseObject ->setPrenom_personne($prenom_personne);
                    $v_fiche_de_presenseObject ->setGenre_personne($genre_personne);
                    $v_fiche_de_presenseObject ->setNumpiece_personne($numpiece_personne);
                    $v_fiche_de_presenseObject ->setPhoto_personne($photo_personne);
                    $v_fiche_de_presenseObject ->setTel($tel);
                    $v_fiche_de_presenseObject ->setStatus_id($status_id);
                    $v_fiche_de_presenseObject ->setNom_status($nom_status);
                    $v_fiche_de_presenseObject ->setId_service($id_service);
                    $v_fiche_de_presenseObject ->setNom_departement($nom_departement);
                    $v_fiche_de_presenseObject ->setNom_poste($nom_poste);
                    $ok = $tdb->addV_fiche_de_presense($v_fiche_de_presenseObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("v_fiche_de_presense/add", $data);
            }else{
                return $this->view->load("v_fiche_de_presense/add");
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new V_fiche_de_presenseDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($present)) {
                    $v_fiche_de_presenseObject  = new V_fiche_de_presenseEntity();
                    $v_fiche_de_presenseObject ->setId($id);
                    $v_fiche_de_presenseObject ->setPresent($present);
                    $v_fiche_de_presenseObject ->setAnne_fiche($anne_fiche);
                    $v_fiche_de_presenseObject ->setDate_fiche($date_fiche);
                    $v_fiche_de_presenseObject ->setHeur_arrive($heur_arrive);
                    $v_fiche_de_presenseObject ->setHeur_depart($heur_depart);
                    $v_fiche_de_presenseObject ->setNbr_heur($nbr_heur);
                    $v_fiche_de_presenseObject ->setFiche_paie_id($fiche_paie_id);
                    $v_fiche_de_presenseObject ->setContrat_id($contrat_id);
                    $v_fiche_de_presenseObject ->setPoste_id($poste_id);
                    $v_fiche_de_presenseObject ->setType_contrat_id($type_contrat_id);
                    $v_fiche_de_presenseObject ->setPersonne_id($personne_id);
                    $v_fiche_de_presenseObject ->setDepartement_id($departement_id);
                    $v_fiche_de_presenseObject ->setNom_personne($nom_personne);
                    $v_fiche_de_presenseObject ->setPrenom_personne($prenom_personne);
                    $v_fiche_de_presenseObject ->setGenre_personne($genre_personne);
                    $v_fiche_de_presenseObject ->setNumpiece_personne($numpiece_personne);
                    $v_fiche_de_presenseObject ->setPhoto_personne($photo_personne);
                    $v_fiche_de_presenseObject ->setTel($tel);
                    $v_fiche_de_presenseObject ->setStatus_id($status_id);
                    $v_fiche_de_presenseObject ->setNom_status($nom_status);
                    $v_fiche_de_presenseObject ->setId_service($id_service);
                    $v_fiche_de_presenseObject ->setNom_departement($nom_departement);
                    $v_fiche_de_presenseObject ->setNom_poste($nom_poste);
                    $ok = $tdb->updateV_fiche_de_presense($v_fiche_de_presenseObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete(){
              //Instanciation du model
                    $tdb = new V_fiche_de_presenseDB();
            			//Supression
            			$tdb->deleteV_fiche_de_presense();
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit(){
                        //Instanciation du model
                       $tdb = new V_fiche_de_presenseDB();
            			//Supression
            			$data["v_fiche_de_presense"] = $tdb->getV_fiche_de_presense();
            			//chargement de la vue edit.html
                    return $this->view->load("v_fiche_de_presense/edit", $data);
                   }




                   



               }


            ?>

