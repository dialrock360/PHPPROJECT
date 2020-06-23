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
    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:17=====================*/
        class Caisse
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_service;
             private  $date_caisse;
             private  $solde_caisse;
             private  $depense_caisse;
             private  $gain_caisse;
             private  $flag_caisse;


             private  $service;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                 $this->service = new Service();
                 }


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_service()
                 {
                     return $this->id_service;
                 }

             public function getDate_caisse()
                 {
                     return $this->date_caisse;
                 }

             public function getSolde_caisse()
                 {
                     return $this->solde_caisse;
                 }

             public function getDepense_caisse()
                 {
                     return $this->depense_caisse;
                 }

             public function getGain_caisse()
                 {
                     return $this->gain_caisse;
                 }

             public function getFlag_caisse()
                 {
                     return $this->flag_caisse;
                 }


             public function getService()
                 {
                     return $this->service;
                 }
     

    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_service($id_service)
                 {
                      $this->id_service = $id_service;
                 }

             public function setDate_caisse($date_caisse)
                 {
                      $this->date_caisse = $date_caisse;
                 }

             public function setSolde_caisse($solde_caisse)
                 {
                      $this->solde_caisse = $solde_caisse;
                 }

             public function setDepense_caisse($depense_caisse)
                 {
                      $this->depense_caisse = $depense_caisse;
                 }

             public function setGain_caisse($gain_caisse)
                 {
                      $this->gain_caisse = $gain_caisse;
                 }

             public function setFlag_caisse($flag_caisse)
                 {
                      $this->flag_caisse = $flag_caisse;
                 }



             public function setService($service)
                 {
                      $this->service = $service;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



