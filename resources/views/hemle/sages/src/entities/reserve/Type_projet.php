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
    /*==================Classe creer par Samane samane_ui_admin le 08-11-2019 11:59:42=====================*/
        class Type_projet
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_service;
             private  $nom_type_projet;


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

             public function getNom_type_projet()
                 {
                     return $this->nom_type_projet;
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

             public function setNom_type_projet($nom_type_projet)
                 {
                      $this->nom_type_projet = $nom_type_projet;
                 }



             public function setService($service)
                 {
                      $this->service = $service;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



