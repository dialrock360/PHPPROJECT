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
    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:24=====================*/
        class Type_contrat
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $nom_type_contrat;
             private  $details;


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getNom_type_contrat()
                 {
                     return $this->nom_type_contrat;
                 }

             public function getDetails()
                 {
                     return $this->details;
                 }


    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setNom_type_contrat($nom_type_contrat)
                 {
                      $this->nom_type_contrat = $nom_type_contrat;
                 }

             public function setDetails($details)
                 {
                      $this->details = $details;
                 }



    /*==================Methode list=====================*/
           }
  
   



   ?>



