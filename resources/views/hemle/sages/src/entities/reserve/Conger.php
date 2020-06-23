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
        class Conger
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $date_debut;
             private  $date_fin;
             private  $status_conger;
             private  $justificatif;
             private  $conger_payer;
             private  $salarier_id;
             private  $type_conger_id;


             private  $salarier;
             private  $type_conger;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                 $this->salarier = new Salarier();
                 $this->type_conger = new Type_conger();
                 }


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getDate_debut()
                 {
                     return $this->date_debut;
                 }

             public function getDate_fin()
                 {
                     return $this->date_fin;
                 }

             public function getStatus_conger()
                 {
                     return $this->status_conger;
                 }

             public function getJustificatif()
                 {
                     return $this->justificatif;
                 }

             public function getConger_payer()
                 {
                     return $this->conger_payer;
                 }

             public function getSalarier_id()
                 {
                     return $this->salarier_id;
                 }

             public function getType_conger_id()
                 {
                     return $this->type_conger_id;
                 }


             public function getSalarier()
                 {
                     return $this->salarier;
                 }
             public function getType_conger()
                 {
                     return $this->type_conger;
                 }
     

    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setDate_debut($date_debut)
                 {
                      $this->date_debut = $date_debut;
                 }

             public function setDate_fin($date_fin)
                 {
                      $this->date_fin = $date_fin;
                 }

             public function setStatus_conger($status_conger)
                 {
                      $this->status_conger = $status_conger;
                 }

             public function setJustificatif($justificatif)
                 {
                      $this->justificatif = $justificatif;
                 }

             public function setConger_payer($conger_payer)
                 {
                      $this->conger_payer = $conger_payer;
                 }

             public function setSalarier_id($salarier_id)
                 {
                      $this->salarier_id = $salarier_id;
                 }

             public function setType_conger_id($type_conger_id)
                 {
                      $this->type_conger_id = $type_conger_id;
                 }



             public function setSalarier($salarier)
                 {
                      $this->salarier = $salarier;
                 }

             public function setType_conger($type_conger)
                 {
                      $this->type_conger = $type_conger;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



