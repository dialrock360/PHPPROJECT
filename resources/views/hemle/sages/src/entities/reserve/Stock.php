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
    /*==================Classe creer par Samane samane_ui_admin le 17-11-2019 15:57:52=====================*/
        class Stock
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_service;
             private  $nom_stock;
             private  $type_stock;
             private  $nbrarticle;
             private  $valeur;


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

             public function getNom_stock()
                 {
                     return $this->nom_stock;
                 }

             public function getType_stock()
                 {
                     return $this->type_stock;
                 }

             public function getNbrarticle()
                 {
                     return $this->nbrarticle;
                 }

             public function getValeur()
                 {
                     return $this->valeur;
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

             public function setNom_stock($nom_stock)
                 {
                      $this->nom_stock = $nom_stock;
                 }

             public function setType_stock($type_stock)
                 {
                      $this->type_stock = $type_stock;
                 }

             public function setNbrarticle($nbrarticle)
                 {
                      $this->nbrarticle = $nbrarticle;
                 }

             public function setValeur($valeur)
                 {
                      $this->valeur = $valeur;
                 }



             public function setService($service)
                 {
                      $this->service = $service;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



