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
    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:19=====================*/
        class Fiche_de_presense
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


             private  $fiche_paie;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                 $this->fiche_paie = new Fiche_paie();
                 }


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


             public function getFiche_paie()
                 {
                     return $this->fiche_paie;
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



             public function setFiche_paie($fiche_paie)
                 {
                      $this->fiche_paie = $fiche_paie;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



