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
  use src\entities\V_fiche_paie as V_fiche_paieEntity;
  use src\model\V_fiche_paieDB;

  class V_fiche_paie extends Controller{

            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("v_fiche_paie/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("v_fiche_paie/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get(){
                    //Instanciation du model
                    $tdb = new V_fiche_paieDB();
                    $data["v_fiche_paie"] = $tdb->getV_fiche_paie();
                    return $this->view->load("v_fiche_paie/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new V_fiche_paieDB();
                    $data["v_fiche_paies"] = $tdb->listeV_fiche_paie();
                    return $this->view->load("v_fiche_paie/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new V_fiche_paieDB();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($date_fiche_paie)) {
                    $v_fiche_paieObject  = new V_fiche_paieEntity();
                    $v_fiche_paieObject ->setDate_fiche_paie($date_fiche_paie);
                    $v_fiche_paieObject ->setMois_payer($mois_payer);
                    $v_fiche_paieObject ->setEst_payer($est_payer);
                    $v_fiche_paieObject ->setSalarier_id($salarier_id);
                    $v_fiche_paieObject ->setType_salaire($type_salaire);
                    $v_fiche_paieObject ->setSalaire_base($salaire_base);
                    $v_fiche_paieObject ->setNature_salaire_base($nature_salaire_base);
                    $v_fiche_paieObject ->setTemps_travail($temps_travail);
                    $v_fiche_paieObject ->setNbr_heur_travail($nbr_heur_travail);
                    $v_fiche_paieObject ->setFreq_travail($freq_travail);
                    $v_fiche_paieObject ->setPrix_heur_sup($prix_heur_sup);
                    $v_fiche_paieObject ->setContrat_id($contrat_id);
                    $v_fiche_paieObject ->setPoste_id($poste_id);
                    $v_fiche_paieObject ->setEtat_contrat($etat_contrat);
                    $v_fiche_paieObject ->setType_contrat_id($type_contrat_id);
                    $v_fiche_paieObject ->setPersonne_id($personne_id);
                    $v_fiche_paieObject ->setDepartement_id($departement_id);
                    $v_fiche_paieObject ->setNom_type_contrat($nom_type_contrat);
                    $v_fiche_paieObject ->setNom_personne($nom_personne);
                    $v_fiche_paieObject ->setPrenom_personne($prenom_personne);
                    $v_fiche_paieObject ->setGenre_personne($genre_personne);
                    $v_fiche_paieObject ->setDate_naiss_personne($date_naiss_personne);
                    $v_fiche_paieObject ->setLieu_naiss_personne($lieu_naiss_personne);
                    $v_fiche_paieObject ->setNationalite_personne($nationalite_personne);
                    $v_fiche_paieObject ->setTypepiece_personne($typepiece_personne);
                    $v_fiche_paieObject ->setNumpiece_personne($numpiece_personne);
                    $v_fiche_paieObject ->setPhoto_personne($photo_personne);
                    $v_fiche_paieObject ->setAdress($adress);
                    $v_fiche_paieObject ->setTel($tel);
                    $v_fiche_paieObject ->setCodepostal($codepostal);
                    $v_fiche_paieObject ->setInfo_personne($info_personne);
                    $v_fiche_paieObject ->setStatus_id($status_id);
                    $v_fiche_paieObject ->setNom_status($nom_status);
                    $v_fiche_paieObject ->setId_service($id_service);
                    $v_fiche_paieObject ->setNom_departement($nom_departement);
                    $v_fiche_paieObject ->setNom_modalite($nom_modalite);
                    $v_fiche_paieObject ->setNom_poste($nom_poste);
                    $v_fiche_paieObject ->setCategorie_proffessionelle($categorie_proffessionelle);
                    $v_fiche_paieObject ->setSalaire_base_poste($salaire_base_poste);
                    $ok = $tdb->addV_fiche_paie($v_fiche_paieObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("v_fiche_paie/add", $data);
            }else{
                return $this->view->load("v_fiche_paie/add");
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new V_fiche_paieDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($date_fiche_paie)) {
                    $v_fiche_paieObject  = new V_fiche_paieEntity();
                    $v_fiche_paieObject ->setId($id);
                    $v_fiche_paieObject ->setDate_fiche_paie($date_fiche_paie);
                    $v_fiche_paieObject ->setMois_payer($mois_payer);
                    $v_fiche_paieObject ->setEst_payer($est_payer);
                    $v_fiche_paieObject ->setSalarier_id($salarier_id);
                    $v_fiche_paieObject ->setType_salaire($type_salaire);
                    $v_fiche_paieObject ->setSalaire_base($salaire_base);
                    $v_fiche_paieObject ->setNature_salaire_base($nature_salaire_base);
                    $v_fiche_paieObject ->setTemps_travail($temps_travail);
                    $v_fiche_paieObject ->setNbr_heur_travail($nbr_heur_travail);
                    $v_fiche_paieObject ->setFreq_travail($freq_travail);
                    $v_fiche_paieObject ->setPrix_heur_sup($prix_heur_sup);
                    $v_fiche_paieObject ->setContrat_id($contrat_id);
                    $v_fiche_paieObject ->setPoste_id($poste_id);
                    $v_fiche_paieObject ->setEtat_contrat($etat_contrat);
                    $v_fiche_paieObject ->setType_contrat_id($type_contrat_id);
                    $v_fiche_paieObject ->setPersonne_id($personne_id);
                    $v_fiche_paieObject ->setDepartement_id($departement_id);
                    $v_fiche_paieObject ->setNom_type_contrat($nom_type_contrat);
                    $v_fiche_paieObject ->setNom_personne($nom_personne);
                    $v_fiche_paieObject ->setPrenom_personne($prenom_personne);
                    $v_fiche_paieObject ->setGenre_personne($genre_personne);
                    $v_fiche_paieObject ->setDate_naiss_personne($date_naiss_personne);
                    $v_fiche_paieObject ->setLieu_naiss_personne($lieu_naiss_personne);
                    $v_fiche_paieObject ->setNationalite_personne($nationalite_personne);
                    $v_fiche_paieObject ->setTypepiece_personne($typepiece_personne);
                    $v_fiche_paieObject ->setNumpiece_personne($numpiece_personne);
                    $v_fiche_paieObject ->setPhoto_personne($photo_personne);
                    $v_fiche_paieObject ->setAdress($adress);
                    $v_fiche_paieObject ->setTel($tel);
                    $v_fiche_paieObject ->setCodepostal($codepostal);
                    $v_fiche_paieObject ->setInfo_personne($info_personne);
                    $v_fiche_paieObject ->setStatus_id($status_id);
                    $v_fiche_paieObject ->setNom_status($nom_status);
                    $v_fiche_paieObject ->setId_service($id_service);
                    $v_fiche_paieObject ->setNom_departement($nom_departement);
                    $v_fiche_paieObject ->setNom_modalite($nom_modalite);
                    $v_fiche_paieObject ->setNom_poste($nom_poste);
                    $v_fiche_paieObject ->setCategorie_proffessionelle($categorie_proffessionelle);
                    $v_fiche_paieObject ->setSalaire_base_poste($salaire_base_poste);
                    $ok = $tdb->updateV_fiche_paie($v_fiche_paieObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete(){
              //Instanciation du model
                    $tdb = new V_fiche_paieDB();
            			//Supression
            			$tdb->deleteV_fiche_paie();
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit(){
                        //Instanciation du model
                       $tdb = new V_fiche_paieDB();
            			//Supression
            			$data["v_fiche_paie"] = $tdb->getV_fiche_paie();
            			//chargement de la vue edit.html
                    return $this->view->load("v_fiche_paie/edit", $data);
                   }




                   



               }


            ?>

