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
    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:20=====================*/
        class Fiche_paie
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $date_fiche_paie;
             private  $mois_payer;
             private  $est_payer;
             private  $salarier_id;


             private  $salarier;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                 $this->salarier = new Salarier();
                 }


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getDate_fiche_paie()
                 {
                     return $this->date_fiche_paie;
                 }

             public function getMois_payer()
                 {
                     return $this->mois_payer;
                 }

             public function getEst_payer()
                 {
                     return $this->est_payer;
                 }

             public function getSalarier_id()
                 {
                     return $this->salarier_id;
                 }


             public function getSalarier()
                 {
                     return $this->salarier;
                 }
     

    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setDate_fiche_paie($date_fiche_paie)
                 {
                      $this->date_fiche_paie = $date_fiche_paie;
                 }

             public function setMois_payer($mois_payer)
                 {
                      $this->mois_payer = $mois_payer;
                 }

             public function setEst_payer($est_payer)
                 {
                      $this->est_payer = $est_payer;
                 }

             public function setSalarier_id($salarier_id)
                 {
                      $this->salarier_id = $salarier_id;
                 }



             public function setSalarier($salarier)
                 {
                      $this->salarier = $salarier;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



