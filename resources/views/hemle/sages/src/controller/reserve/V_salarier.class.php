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
  use src\entities\V_salarier as V_salarierEntity;
  use src\model\V_salarierDB;

  class V_salarier extends Controller{

            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("v_salarier/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("v_salarier/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get(){
                    //Instanciation du model
                    $tdb = new V_salarierDB();
                    $data["v_salarier"] = $tdb->getV_salarier();
                    return $this->view->load("v_salarier/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new V_salarierDB();
                    $data["v_salariers"] = $tdb->listeV_salarier();
                    return $this->view->load("v_salarier/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new V_salarierDB();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($type_salaire)) {
                    $v_salarierObject  = new V_salarierEntity();
                    $v_salarierObject ->setType_salaire($type_salaire);
                    $v_salarierObject ->setSalaire_base($salaire_base);
                    $v_salarierObject ->setNature_salaire_base($nature_salaire_base);
                    $v_salarierObject ->setTemps_travail($temps_travail);
                    $v_salarierObject ->setNbr_heur_travail($nbr_heur_travail);
                    $v_salarierObject ->setFreq_travail($freq_travail);
                    $v_salarierObject ->setPrix_heur_sup($prix_heur_sup);
                    $v_salarierObject ->setContrat_id($contrat_id);
                    $v_salarierObject ->setPoste_id($poste_id);
                    $v_salarierObject ->setEtat_contrat($etat_contrat);
                    $v_salarierObject ->setType_contrat_id($type_contrat_id);
                    $v_salarierObject ->setPersonne_id($personne_id);
                    $v_salarierObject ->setDepartement_id($departement_id);
                    $v_salarierObject ->setModalite_contrat_id($modalite_contrat_id);
                    $v_salarierObject ->setNom_type_contrat($nom_type_contrat);
                    $v_salarierObject ->setNom_personne($nom_personne);
                    $v_salarierObject ->setPrenom_personne($prenom_personne);
                    $v_salarierObject ->setGenre_personne($genre_personne);
                    $v_salarierObject ->setDate_naiss_personne($date_naiss_personne);
                    $v_salarierObject ->setLieu_naiss_personne($lieu_naiss_personne);
                    $v_salarierObject ->setNationalite_personne($nationalite_personne);
                    $v_salarierObject ->setTypepiece_personne($typepiece_personne);
                    $v_salarierObject ->setNumpiece_personne($numpiece_personne);
                    $v_salarierObject ->setPhoto_personne($photo_personne);
                    $v_salarierObject ->setAdress($adress);
                    $v_salarierObject ->setTel($tel);
                    $v_salarierObject ->setCodepostal($codepostal);
                    $v_salarierObject ->setInfo_personne($info_personne);
                    $v_salarierObject ->setStatus_id($status_id);
                    $v_salarierObject ->setNom_status($nom_status);
                    $v_salarierObject ->setId_service($id_service);
                    $v_salarierObject ->setNom_departement($nom_departement);
                    $v_salarierObject ->setNom_modalite($nom_modalite);
                    $v_salarierObject ->setNom_poste($nom_poste);
                    $v_salarierObject ->setCategorie_proffessionelle($categorie_proffessionelle);
                    $v_salarierObject ->setSalaire_base_poste($salaire_base_poste);
                    $ok = $tdb->addV_salarier($v_salarierObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("v_salarier/add", $data);
            }else{
                return $this->view->load("v_salarier/add");
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new V_salarierDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($type_salaire)) {
                    $v_salarierObject  = new V_salarierEntity();
                    $v_salarierObject ->setId($id);
                    $v_salarierObject ->setType_salaire($type_salaire);
                    $v_salarierObject ->setSalaire_base($salaire_base);
                    $v_salarierObject ->setNature_salaire_base($nature_salaire_base);
                    $v_salarierObject ->setTemps_travail($temps_travail);
                    $v_salarierObject ->setNbr_heur_travail($nbr_heur_travail);
                    $v_salarierObject ->setFreq_travail($freq_travail);
                    $v_salarierObject ->setPrix_heur_sup($prix_heur_sup);
                    $v_salarierObject ->setContrat_id($contrat_id);
                    $v_salarierObject ->setPoste_id($poste_id);
                    $v_salarierObject ->setEtat_contrat($etat_contrat);
                    $v_salarierObject ->setType_contrat_id($type_contrat_id);
                    $v_salarierObject ->setPersonne_id($personne_id);
                    $v_salarierObject ->setDepartement_id($departement_id);
                    $v_salarierObject ->setModalite_contrat_id($modalite_contrat_id);
                    $v_salarierObject ->setNom_type_contrat($nom_type_contrat);
                    $v_salarierObject ->setNom_personne($nom_personne);
                    $v_salarierObject ->setPrenom_personne($prenom_personne);
                    $v_salarierObject ->setGenre_personne($genre_personne);
                    $v_salarierObject ->setDate_naiss_personne($date_naiss_personne);
                    $v_salarierObject ->setLieu_naiss_personne($lieu_naiss_personne);
                    $v_salarierObject ->setNationalite_personne($nationalite_personne);
                    $v_salarierObject ->setTypepiece_personne($typepiece_personne);
                    $v_salarierObject ->setNumpiece_personne($numpiece_personne);
                    $v_salarierObject ->setPhoto_personne($photo_personne);
                    $v_salarierObject ->setAdress($adress);
                    $v_salarierObject ->setTel($tel);
                    $v_salarierObject ->setCodepostal($codepostal);
                    $v_salarierObject ->setInfo_personne($info_personne);
                    $v_salarierObject ->setStatus_id($status_id);
                    $v_salarierObject ->setNom_status($nom_status);
                    $v_salarierObject ->setId_service($id_service);
                    $v_salarierObject ->setNom_departement($nom_departement);
                    $v_salarierObject ->setNom_modalite($nom_modalite);
                    $v_salarierObject ->setNom_poste($nom_poste);
                    $v_salarierObject ->setCategorie_proffessionelle($categorie_proffessionelle);
                    $v_salarierObject ->setSalaire_base_poste($salaire_base_poste);
                    $ok = $tdb->updateV_salarier($v_salarierObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete(){
              //Instanciation du model
                    $tdb = new V_salarierDB();
            			//Supression
            			$tdb->deleteV_salarier();
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit(){
                        //Instanciation du model
                       $tdb = new V_salarierDB();
            			//Supression
            			$data["v_salarier"] = $tdb->getV_salarier();
            			//chargement de la vue edit.html
                    return $this->view->load("v_salarier/edit", $data);
                   }




                   



               }


            ?>

