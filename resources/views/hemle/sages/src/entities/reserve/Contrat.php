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
    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:18=====================*/
        class Contrat
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


             private  $modalite_contrat;
             private  $personne;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                 $this->modalite_contrat = new Modalite_contrat();
                 $this->personne = new Personne();
                 }


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


             public function getModalite_contrat()
                 {
                     return $this->modalite_contrat;
                 }
             public function getPersonne()
                 {
                     return $this->personne;
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



             public function setModalite_contrat($modalite_contrat)
                 {
                      $this->modalite_contrat = $modalite_contrat;
                 }

             public function setPersonne($personne)
                 {
                      $this->personne = $personne;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



