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
    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:21=====================*/
        class Modepaie
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $typepaie;
             private  $domiciliation;
             private  $iban;
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

             public function getTypepaie()
                 {
                     return $this->typepaie;
                 }

             public function getDomiciliation()
                 {
                     return $this->domiciliation;
                 }

             public function getIban()
                 {
                     return $this->iban;
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

             public function setTypepaie($typepaie)
                 {
                      $this->typepaie = $typepaie;
                 }

             public function setDomiciliation($domiciliation)
                 {
                      $this->domiciliation = $domiciliation;
                 }

             public function setIban($iban)
                 {
                      $this->iban = $iban;
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



