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
    /*==================Classe creer par Samane samane_ui_admin le 15-11-2019 04:31:01=====================*/
        class Famille
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_service;
             private  $nom_famille;
             private  $color_famille;
             private  $nbr_categorie_famille;
             private  $valeur_famille;
             private  $flag_famille;


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

             public function getNom_famille()
                 {
                     return $this->nom_famille;
                 }

             public function getColor_famille()
                 {
                     return $this->color_famille;
                 }

             public function getNbr_categorie_famille()
                 {
                     return $this->nbr_categorie_famille;
                 }

             public function getValeur_famille()
                 {
                     return $this->valeur_famille;
                 }

             public function getFlag_famille()
                 {
                     return $this->flag_famille;
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

             public function setNom_famille($nom_famille)
                 {
                      $this->nom_famille = $nom_famille;
                 }

             public function setColor_famille($color_famille)
                 {
                      $this->color_famille = $color_famille;
                 }

             public function setNbr_categorie_famille($nbr_categorie_famille)
                 {
                      $this->nbr_categorie_famille = $nbr_categorie_famille;
                 }

             public function setValeur_famille($valeur_famille)
                 {
                      $this->valeur_famille = $valeur_famille;
                 }

             public function setFlag_famille($flag_famille)
                 {
                      $this->flag_famille = $flag_famille;
                 }



             public function setService($service)
                 {
                      $this->service = $service;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



