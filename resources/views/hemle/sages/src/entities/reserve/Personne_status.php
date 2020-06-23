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
    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:22=====================*/
        class Personne_status
            {

    /*==================Attribut list=====================*/
                
             private  $personne_id;
             private  $status_id;


             private  $personne;
             private  $status;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                 $this->personne = new Personne();
                 $this->status = new Status();
                 }


    /*==================Getter list=====================*/
                
             public function getPersonne_id()
                 {
                     return $this->personne_id;
                 }

             public function getStatus_id()
                 {
                     return $this->status_id;
                 }


             public function getPersonne()
                 {
                     return $this->personne;
                 }
             public function getStatus()
                 {
                     return $this->status;
                 }
     

    /*==================Setter list=====================*/
                
             public function setPersonne_id($personne_id)
                 {
                      $this->personne_id = $personne_id;
                 }

             public function setStatus_id($status_id)
                 {
                      $this->status_id = $status_id;
                 }



             public function setPersonne($personne)
                 {
                      $this->personne = $personne;
                 }

             public function setStatus($status)
                 {
                      $this->status = $status;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



