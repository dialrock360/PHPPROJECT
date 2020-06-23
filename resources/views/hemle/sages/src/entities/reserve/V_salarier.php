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
        class V_salarier
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $type_salaire;
             private  $salaire_base;
             private  $nature_salaire_base;
             private  $temps_travail;
             private  $nbr_heur_travail;
             private  $freq_travail;
             private  $prix_heur_sup;
             private  $contrat_id;
             private  $poste_id;
             private  $etat_contrat;
             private  $type_contrat_id;
             private  $personne_id;
             private  $departement_id;
             private  $modalite_contrat_id;
             private  $nom_type_contrat;
             private  $nom_personne;
             private  $prenom_personne;
             private  $genre_personne;
             private  $date_naiss_personne;
             private  $lieu_naiss_personne;
             private  $nationalite_personne;
             private  $typepiece_personne;
             private  $numpiece_personne;
             private  $photo_personne;
             private  $adress;
             private  $tel;
             private  $codepostal;
             private  $info_personne;
             private  $status_id;
             private  $nom_status;
             private  $id_service;
             private  $nom_departement;
             private  $nom_modalite;
             private  $nom_poste;
             private  $categorie_proffessionelle;
             private  $salaire_base_poste;


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getType_salaire()
                 {
                     return $this->type_salaire;
                 }

             public function getSalaire_base()
                 {
                     return $this->salaire_base;
                 }

             public function getNature_salaire_base()
                 {
                     return $this->nature_salaire_base;
                 }

             public function getTemps_travail()
                 {
                     return $this->temps_travail;
                 }

             public function getNbr_heur_travail()
                 {
                     return $this->nbr_heur_travail;
                 }

             public function getFreq_travail()
                 {
                     return $this->freq_travail;
                 }

             public function getPrix_heur_sup()
                 {
                     return $this->prix_heur_sup;
                 }

             public function getContrat_id()
                 {
                     return $this->contrat_id;
                 }

             public function getPoste_id()
                 {
                     return $this->poste_id;
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

             public function getNom_type_contrat()
                 {
                     return $this->nom_type_contrat;
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

             public function getNom_modalite()
                 {
                     return $this->nom_modalite;
                 }

             public function getNom_poste()
                 {
                     return $this->nom_poste;
                 }

             public function getCategorie_proffessionelle()
                 {
                     return $this->categorie_proffessionelle;
                 }

             public function getSalaire_base_poste()
                 {
                     return $this->salaire_base_poste;
                 }


    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setType_salaire($type_salaire)
                 {
                      $this->type_salaire = $type_salaire;
                 }

             public function setSalaire_base($salaire_base)
                 {
                      $this->salaire_base = $salaire_base;
                 }

             public function setNature_salaire_base($nature_salaire_base)
                 {
                      $this->nature_salaire_base = $nature_salaire_base;
                 }

             public function setTemps_travail($temps_travail)
                 {
                      $this->temps_travail = $temps_travail;
                 }

             public function setNbr_heur_travail($nbr_heur_travail)
                 {
                      $this->nbr_heur_travail = $nbr_heur_travail;
                 }

             public function setFreq_travail($freq_travail)
                 {
                      $this->freq_travail = $freq_travail;
                 }

             public function setPrix_heur_sup($prix_heur_sup)
                 {
                      $this->prix_heur_sup = $prix_heur_sup;
                 }

             public function setContrat_id($contrat_id)
                 {
                      $this->contrat_id = $contrat_id;
                 }

             public function setPoste_id($poste_id)
                 {
                      $this->poste_id = $poste_id;
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

             public function setNom_type_contrat($nom_type_contrat)
                 {
                      $this->nom_type_contrat = $nom_type_contrat;
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

             public function setNom_modalite($nom_modalite)
                 {
                      $this->nom_modalite = $nom_modalite;
                 }

             public function setNom_poste($nom_poste)
                 {
                      $this->nom_poste = $nom_poste;
                 }

             public function setCategorie_proffessionelle($categorie_proffessionelle)
                 {
                      $this->categorie_proffessionelle = $categorie_proffessionelle;
                 }

             public function setSalaire_base_poste($salaire_base_poste)
                 {
                      $this->salaire_base_poste = $salaire_base_poste;
                 }



    /*==================Methode list=====================*/
           }
  
   



   ?>



