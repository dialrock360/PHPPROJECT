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
        class V_fiche_de_presense
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $present;
             private  $anne_fiche;
             private  $date_fiche;
             private  $heur_arrive;
             private  $heur_depart;
             private  $nbr_heur;
             private  $fiche_paie_id;
             private  $contrat_id;
             private  $poste_id;
             private  $type_contrat_id;
             private  $personne_id;
             private  $departement_id;
             private  $nom_personne;
             private  $prenom_personne;
             private  $genre_personne;
             private  $numpiece_personne;
             private  $photo_personne;
             private  $tel;
             private  $status_id;
             private  $nom_status;
             private  $id_service;
             private  $nom_departement;
             private  $nom_poste;


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getPresent()
                 {
                     return $this->present;
                 }

             public function getAnne_fiche()
                 {
                     return $this->anne_fiche;
                 }

             public function getDate_fiche()
                 {
                     return $this->date_fiche;
                 }

             public function getHeur_arrive()
                 {
                     return $this->heur_arrive;
                 }

             public function getHeur_depart()
                 {
                     return $this->heur_depart;
                 }

             public function getNbr_heur()
                 {
                     return $this->nbr_heur;
                 }

             public function getFiche_paie_id()
                 {
                     return $this->fiche_paie_id;
                 }

             public function getContrat_id()
                 {
                     return $this->contrat_id;
                 }

             public function getPoste_id()
                 {
                     return $this->poste_id;
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

             public function getNumpiece_personne()
                 {
                     return $this->numpiece_personne;
                 }

             public function getPhoto_personne()
                 {
                     return $this->photo_personne;
                 }

             public function getTel()
                 {
                     return $this->tel;
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

             public function getNom_poste()
                 {
                     return $this->nom_poste;
                 }


    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setPresent($present)
                 {
                      $this->present = $present;
                 }

             public function setAnne_fiche($anne_fiche)
                 {
                      $this->anne_fiche = $anne_fiche;
                 }

             public function setDate_fiche($date_fiche)
                 {
                      $this->date_fiche = $date_fiche;
                 }

             public function setHeur_arrive($heur_arrive)
                 {
                      $this->heur_arrive = $heur_arrive;
                 }

             public function setHeur_depart($heur_depart)
                 {
                      $this->heur_depart = $heur_depart;
                 }

             public function setNbr_heur($nbr_heur)
                 {
                      $this->nbr_heur = $nbr_heur;
                 }

             public function setFiche_paie_id($fiche_paie_id)
                 {
                      $this->fiche_paie_id = $fiche_paie_id;
                 }

             public function setContrat_id($contrat_id)
                 {
                      $this->contrat_id = $contrat_id;
                 }

             public function setPoste_id($poste_id)
                 {
                      $this->poste_id = $poste_id;
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

             public function setNumpiece_personne($numpiece_personne)
                 {
                      $this->numpiece_personne = $numpiece_personne;
                 }

             public function setPhoto_personne($photo_personne)
                 {
                      $this->photo_personne = $photo_personne;
                 }

             public function setTel($tel)
                 {
                      $this->tel = $tel;
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

             public function setNom_poste($nom_poste)
                 {
                      $this->nom_poste = $nom_poste;
                 }



    /*==================Methode list=====================*/
           }
  
   



   ?>



