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
    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:23=====================*/
        class Salarier
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



    /*==================Methode list=====================*/
           }
  
   



   ?>



