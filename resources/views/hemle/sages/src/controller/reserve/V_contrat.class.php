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
  use src\entities\V_contrat as V_contratEntity;
  use src\model\V_contratDB;

  class V_contrat extends Controller{

            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("v_contrat/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("v_contrat/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get(){
                    //Instanciation du model
                    $tdb = new V_contratDB();
                    $data["v_contrat"] = $tdb->getV_contrat();
                    return $this->view->load("v_contrat/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new V_contratDB();
                    $data["v_contrats"] = $tdb->listeV_contrat();
                    return $this->view->load("v_contrat/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new V_contratDB();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($metier)) {
                    $v_contratObject  = new V_contratEntity();
                    $v_contratObject ->setMetier($metier);
                    $v_contratObject ->setCv_contrat($cv_contrat);
                    $v_contratObject ->setStatut_contrat($statut_contrat);
                    $v_contratObject ->setNumsecu_sire($numsecu_sire);
                    $v_contratObject ->setDatedebut($datedebut);
                    $v_contratObject ->setDatefin($datefin);
                    $v_contratObject ->setDuree_essai($duree_essai);
                    $v_contratObject ->setAvantages_contrat($avantages_contrat);
                    $v_contratObject ->setPreavie_demande_conger($preavie_demande_conger);
                    $v_contratObject ->setNbr_jr_conge_par_mois_tavail($nbr_jr_conge_par_mois_tavail);
                    $v_contratObject ->setEtat_contrat($etat_contrat);
                    $v_contratObject ->setType_contrat_id($type_contrat_id);
                    $v_contratObject ->setPersonne_id($personne_id);
                    $v_contratObject ->setDepartement_id($departement_id);
                    $v_contratObject ->setModalite_contrat_id($modalite_contrat_id);
                    $v_contratObject ->setFlag_contract($flag_contract);
                    $v_contratObject ->setNom_type_contrat($nom_type_contrat);
                    $v_contratObject ->setDetails($details);
                    $v_contratObject ->setNom_personne($nom_personne);
                    $v_contratObject ->setPrenom_personne($prenom_personne);
                    $v_contratObject ->setGenre_personne($genre_personne);
                    $v_contratObject ->setDate_naiss_personne($date_naiss_personne);
                    $v_contratObject ->setLieu_naiss_personne($lieu_naiss_personne);
                    $v_contratObject ->setNationalite_personne($nationalite_personne);
                    $v_contratObject ->setTypepiece_personne($typepiece_personne);
                    $v_contratObject ->setNumpiece_personne($numpiece_personne);
                    $v_contratObject ->setPhoto_personne($photo_personne);
                    $v_contratObject ->setFlag_personne($flag_personne);
                    $v_contratObject ->setAdress($adress);
                    $v_contratObject ->setTel($tel);
                    $v_contratObject ->setCodepostal($codepostal);
                    $v_contratObject ->setInfo_personne($info_personne);
                    $v_contratObject ->setFlag_contact($flag_contact);
                    $v_contratObject ->setStatus_id($status_id);
                    $v_contratObject ->setNom_status($nom_status);
                    $v_contratObject ->setId_service($id_service);
                    $v_contratObject ->setNom_departement($nom_departement);
                    $v_contratObject ->setNbr_employee($nbr_employee);
                    $v_contratObject ->setJour_ouvrable($jour_ouvrable);
                    $v_contratObject ->setId_chefdepartement($id_chefdepartement);
                    $v_contratObject ->setInfo_departement($info_departement);
                    $v_contratObject ->setFlag_departement($flag_departement);
                    $v_contratObject ->setNom_modalite($nom_modalite);
                    $v_contratObject ->setClause_modalite($clause_modalite);
                    $ok = $tdb->addV_contrat($v_contratObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("v_contrat/add", $data);
            }else{
                return $this->view->load("v_contrat/add");
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new V_contratDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($metier)) {
                    $v_contratObject  = new V_contratEntity();
                    $v_contratObject ->setId($id);
                    $v_contratObject ->setMetier($metier);
                    $v_contratObject ->setCv_contrat($cv_contrat);
                    $v_contratObject ->setStatut_contrat($statut_contrat);
                    $v_contratObject ->setNumsecu_sire($numsecu_sire);
                    $v_contratObject ->setDatedebut($datedebut);
                    $v_contratObject ->setDatefin($datefin);
                    $v_contratObject ->setDuree_essai($duree_essai);
                    $v_contratObject ->setAvantages_contrat($avantages_contrat);
                    $v_contratObject ->setPreavie_demande_conger($preavie_demande_conger);
                    $v_contratObject ->setNbr_jr_conge_par_mois_tavail($nbr_jr_conge_par_mois_tavail);
                    $v_contratObject ->setEtat_contrat($etat_contrat);
                    $v_contratObject ->setType_contrat_id($type_contrat_id);
                    $v_contratObject ->setPersonne_id($personne_id);
                    $v_contratObject ->setDepartement_id($departement_id);
                    $v_contratObject ->setModalite_contrat_id($modalite_contrat_id);
                    $v_contratObject ->setFlag_contract($flag_contract);
                    $v_contratObject ->setNom_type_contrat($nom_type_contrat);
                    $v_contratObject ->setDetails($details);
                    $v_contratObject ->setNom_personne($nom_personne);
                    $v_contratObject ->setPrenom_personne($prenom_personne);
                    $v_contratObject ->setGenre_personne($genre_personne);
                    $v_contratObject ->setDate_naiss_personne($date_naiss_personne);
                    $v_contratObject ->setLieu_naiss_personne($lieu_naiss_personne);
                    $v_contratObject ->setNationalite_personne($nationalite_personne);
                    $v_contratObject ->setTypepiece_personne($typepiece_personne);
                    $v_contratObject ->setNumpiece_personne($numpiece_personne);
                    $v_contratObject ->setPhoto_personne($photo_personne);
                    $v_contratObject ->setFlag_personne($flag_personne);
                    $v_contratObject ->setAdress($adress);
                    $v_contratObject ->setTel($tel);
                    $v_contratObject ->setCodepostal($codepostal);
                    $v_contratObject ->setInfo_personne($info_personne);
                    $v_contratObject ->setFlag_contact($flag_contact);
                    $v_contratObject ->setStatus_id($status_id);
                    $v_contratObject ->setNom_status($nom_status);
                    $v_contratObject ->setId_service($id_service);
                    $v_contratObject ->setNom_departement($nom_departement);
                    $v_contratObject ->setNbr_employee($nbr_employee);
                    $v_contratObject ->setJour_ouvrable($jour_ouvrable);
                    $v_contratObject ->setId_chefdepartement($id_chefdepartement);
                    $v_contratObject ->setInfo_departement($info_departement);
                    $v_contratObject ->setFlag_departement($flag_departement);
                    $v_contratObject ->setNom_modalite($nom_modalite);
                    $v_contratObject ->setClause_modalite($clause_modalite);
                    $ok = $tdb->updateV_contrat($v_contratObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete(){
              //Instanciation du model
                    $tdb = new V_contratDB();
            			//Supression
            			$tdb->deleteV_contrat();
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit(){
                        //Instanciation du model
                       $tdb = new V_contratDB();
            			//Supression
            			$data["v_contrat"] = $tdb->getV_contrat();
            			//chargement de la vue edit.html
                    return $this->view->load("v_contrat/edit", $data);
                   }




                   



               }


            ?>

