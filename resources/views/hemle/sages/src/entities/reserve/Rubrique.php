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
        class Rubrique
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_model;
             private  $id_service;
             private  $nom_rubrique;
             private  $valeur_rubrique;


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

             public function getId_model()
                 {
                     return $this->id_model;
                 }

             public function getId_service()
                 {
                     return $this->id_service;
                 }

             public function getNom_rubrique()
                 {
                     return $this->nom_rubrique;
                 }

             public function getValeur_rubrique()
                 {
                     return $this->valeur_rubrique;
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

             public function setId_model($id_model)
                 {
                      $this->id_model = $id_model;
                 }

             public function setId_service($id_service)
                 {
                      $this->id_service = $id_service;
                 }

             public function setNom_rubrique($nom_rubrique)
                 {
                      $this->nom_rubrique = $nom_rubrique;
                 }

             public function setValeur_rubrique($valeur_rubrique)
                 {
                      $this->valeur_rubrique = $valeur_rubrique;
                 }



             public function setService($service)
                 {
                      $this->service = $service;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



