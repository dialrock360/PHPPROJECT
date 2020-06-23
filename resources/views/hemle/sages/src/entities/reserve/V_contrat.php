<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



     namespace src\entities;
    /*==================Classe creer par Samane samane_ui_admin le 14-11-2019 20:58:53=====================*/
        class V_contrat
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $metier;
             private  $cv_contrat;
             private  $statut_contrat;
             private  $numsecu_sire;
             private  $datedebut;
             private  $datefin;
             private  $duree_essai;
             private  $avantages_contrat;
             private  $preavie_demande_conger;
             private  $nbr_jr_conge_par_mois_tavail;
             private  $etat_contrat;
             private  $type_contrat_id;
             private  $personne_id;
             private  $departement_id;
             private  $modalite_contrat_id;
             private  $flag_contract;
             private  $nom_type_contrat;
             private  $details;
             private  $nom_personne;
             private  $prenom_personne;
             private  $genre_personne;
             private  $date_naiss_personne;
             private  $lieu_naiss_personne;
             private  $nationalite_personne;
             private  $typepiece_personne;
             private  $numpiece_personne;
             private  $photo_personne;
             private  $flag_personne;
             private  $adress;
             private  $tel;
             private  $codepostal;
             private  $info_personne;
             private  $flag_contact;
             private  $status_id;
             private  $nom_status;
             private  $id_service;
             private  $nom_departement;
             private  $nbr_employee;
             private  $jour_ouvrable;
             private  $id_chefdepartement;
             private  $info_departement;
             private  $flag_departement;
             private  $nom_modalite;
             private  $clause_modalite;


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getMetier()
                 {
                     return $this->metier;
                 }

             public function getCv_contrat()
                 {
                     return $this->cv_contrat;
                 }

             public function getStatut_contrat()
                 {
                     return $this->statut_contrat;
                 }

             public function getNumsecu_sire()
                 {
                     return $this->numsecu_sire;
                 }

             public function getDatedebut()
                 {
                     return $this->datedebut;
                 }

             public function getDatefin()
                 {
                     return $this->datefin;
                 }

             public function getDuree_essai()
                 {
                     return $this->duree_essai;
                 }

             public function getAvantages_contrat()
                 {
                     return $this->avantages_contrat;
                 }

             public function getPreavie_demande_conger()
                 {
                     return $this->preavie_demande_conger;
                 }

             public function getNbr_jr_conge_par_mois_tavail()
                 {
                     return $this->nbr_jr_conge_par_mois_tavail;
                 }

             public function getEtat_contrat()
                 {
                     return $this->etat_contrat;
                 }

             public function getType_contrat_id()
                 {
                     return $this->type_contrat_id;
                 }

             public function getPersonne_id()
                 {
                     return $this->personne_id;
                 }

             public function getDepartement_id()
                 {
                     return $this->departement_id;
                 }

             public function getModalite_contrat_id()
                 {
                     return $this->modalite_contrat_id;
                 }

             public function getFlag_contract()
                 {
                     return $this->flag_contract;
                 }

             public function getNom_type_contrat()
                 {
                     return $this->nom_type_contrat;
                 }

             public function getDetails()
                 {
                     return $this->details;
                 }

             public function getNom_personne()
                 {
                     return $this->nom_personne;
                 }

             public function getPrenom_personne()
                 {
                     return $this->prenom_personne;
                 }

             public function getGenre_personne()
                 {
                     return $this->genre_personne;
                 }

             public function getDate_naiss_personne()
                 {
                     return $this->date_naiss_personne;
                 }

             public function getLieu_naiss_personne()
                 {
                     return $this->lieu_naiss_personne;
                 }

             public function getNationalite_personne()
                 {
                     return $this->nationalite_personne;
                 }

             public function getTypepiece_personne()
                 {
                     return $this->typepiece_personne;
                 }

             public function getNumpiece_personne()
                 {
                     return $this->numpiece_personne;
                 }

             public function getPhoto_personne()
                 {
                     return $this->photo_personne;
                 }

             public function getFlag_personne()
                 {
                     return $this->flag_personne;
                 }

             public function getAdress()
                 {
                     return $this->adress;
                 }

             public function getTel()
                 {
                     return $this->tel;
                 }

             public function getCodepostal()
                 {
                     return $this->codepostal;
                 }

             public function getInfo_personne()
                 {
                     return $this->info_personne;
                 }

             public function getFlag_contact()
                 {
                     return $this->flag_contact;
                 }

             public function getStatus_id()
                 {
                     return $this->status_id;
                 }

             public function getNom_status()
                 {
                     return $this->nom_status;
                 }

             public function getId_service()
                 {
                     return $this->id_service;
                 }

             public function getNom_departement()
                 {
                     return $this->nom_departement;
                 }

             public function getNbr_employee()
                 {
                     return $this->nbr_employee;
                 }

             public function getJour_ouvrable()
                 {
                     return $this->jour_ouvrable;
                 }

             public function getId_chefdepartement()
                 {
                     return $this->id_chefdepartement;
                 }

             public function getInfo_departement()
                 {
                     return $this->info_departement;
                 }

             public function getFlag_departement()
                 {
                     return $this->flag_departement;
                 }

             public function getNom_modalite()
                 {
                     return $this->nom_modalite;
                 }

             public function getClause_modalite()
                 {
                     return $this->clause_modalite;
                 }


    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setMetier($metier)
                 {
                      $this->metier = $metier;
                 }

             public function setCv_contrat($cv_contrat)
                 {
                      $this->cv_contrat = $cv_contrat;
                 }

             public function setStatut_contrat($statut_contrat)
                 {
                      $this->statut_contrat = $statut_contrat;
                 }

             public function setNumsecu_sire($numsecu_sire)
                 {
                      $this->numsecu_sire = $numsecu_sire;
                 }

             public function setDatedebut($datedebut)
                 {
                      $this->datedebut = $datedebut;
                 }

             public function setDatefin($datefin)
                 {
                      $this->datefin = $datefin;
                 }

             public function setDuree_essai($duree_essai)
                 {
                      $this->duree_essai = $duree_essai;
                 }

             public function setAvantages_contrat($avantages_contrat)
                 {
                      $this->avantages_contrat = $avantages_contrat;
                 }

             public function setPreavie_demande_conger($preavie_demande_conger)
                 {
                      $this->preavie_demande_conger = $preavie_demande_conger;
                 }

             public function setNbr_jr_conge_par_mois_tavail($nbr_jr_conge_par_mois_tavail)
                 {
                      $this->nbr_jr_conge_par_mois_tavail = $nbr_jr_conge_par_mois_tavail;
                 }

             public function setEtat_contrat($etat_contrat)
                 {
                      $this->etat_contrat = $etat_contrat;
                 }

             public function setType_contrat_id($type_contrat_id)
                 {
                      $this->type_contrat_id = $type_contrat_id;
                 }

             public function setPersonne_id($personne_id)
                 {
                      $this->personne_id = $personne_id;
                 }

             public function setDepartement_id($departement_id)
                 {
                      $this->departement_id = $departement_id;
                 }

             public function setModalite_contrat_id($modalite_contrat_id)
                 {
                      $this->modalite_contrat_id = $modalite_contrat_id;
                 }

             public function setFlag_contract($flag_contract)
                 {
                      $this->flag_contract = $flag_contract;
                 }

             public function setNom_type_contrat($nom_type_contrat)
                 {
                      $this->nom_type_contrat = $nom_type_contrat;
                 }

             public function setDetails($details)
                 {
                      $this->details = $details;
                 }

             public function setNom_personne($nom_personne)
                 {
                      $this->nom_personne = $nom_personne;
                 }

             public function setPrenom_personne($prenom_personne)
                 {
                      $this->prenom_personne = $prenom_personne;
                 }

             public function setGenre_personne($genre_personne)
                 {
                      $this->genre_personne = $genre_personne;
                 }

             public function setDate_naiss_personne($date_naiss_personne)
                 {
                      $this->date_naiss_personne = $date_naiss_personne;
                 }

             public function setLieu_naiss_personne($lieu_naiss_personne)
                 {
                      $this->lieu_naiss_personne = $lieu_naiss_personne;
                 }

             public function setNationalite_personne($nationalite_personne)
                 {
                      $this->nationalite_personne = $nationalite_personne;
                 }

             public function setTypepiece_personne($typepiece_personne)
                 {
                      $this->typepiece_personne = $typepiece_personne;
                 }

             public function setNumpiece_personne($numpiece_personne)
                 {
                      $this->numpiece_personne = $numpiece_personne;
                 }

             public function setPhoto_personne($photo_personne)
                 {
                      $this->photo_personne = $photo_personne;
                 }

             public function setFlag_personne($flag_personne)
                 {
                      $this->flag_personne = $flag_personne;
                 }

             public function setAdress($adress)
                 {
                      $this->adress = $adress;
                 }

             public function setTel($tel)
                 {
                      $this->tel = $tel;
                 }

             public function setCodepostal($codepostal)
                 {
                      $this->codepostal = $codepostal;
                 }

             public function setInfo_personne($info_personne)
                 {
                      $this->info_personne = $info_personne;
                 }

             public function setFlag_contact($flag_contact)
                 {
                      $this->flag_contact = $flag_contact;
                 }

             public function setStatus_id($status_id)
                 {
                      $this->status_id = $status_id;
                 }

             public function setNom_status($nom_status)
                 {
                      $this->nom_status = $nom_status;
                 }

             public function setId_service($id_service)
                 {
                      $this->id_service = $id_service;
                 }

             public function setNom_departement($nom_departement)
                 {
                      $this->nom_departement = $nom_departement;
                 }

             public function setNbr_employee($nbr_employee)
                 {
                      $this->nbr_employee = $nbr_employee;
                 }

             public function setJour_ouvrable($jour_ouvrable)
                 {
                      $this->jour_ouvrable = $jour_ouvrable;
                 }

             public function setId_chefdepartement($id_chefdepartement)
                 {
                      $this->id_chefdepartement = $id_chefdepartement;
                 }

             public function setInfo_departement($info_departement)
                 {
                      $this->info_departement = $info_departement;
                 }

             public function setFlag_departement($flag_departement)
                 {
                      $this->flag_departement = $flag_departement;
                 }

             public function setNom_modalite($nom_modalite)
                 {
                      $this->nom_modalite = $nom_modalite;
                 }

             public function setClause_modalite($clause_modalite)
                 {
                      $this->clause_modalite = $clause_modalite;
                 }



    /*==================Methode list=====================*/
           }
  
   



   ?>



