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
    /*==================Classe creer par Samane samane_ui_admin le 13-09-2019 23:41:08=====================*/
        class Service
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $nom_service;
             private  $sigle_service;
             private  $ninea_service;
             private  $nrc_service;
             private  $activitecommercial_service;
             private  $ca_service;
             private  $logo_service;
             private  $theme_service;
             private  $flag_service;


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getNom_service()
                 {
                     return $this->nom_service;
                 }

             public function getSigle_service()
                 {
                     return $this->sigle_service;
                 }

             public function getNinea_service()
                 {
                     return $this->ninea_service;
                 }

             public function getNrc_service()
                 {
                     return $this->nrc_service;
                 }

             public function getActivitecommercial_service()
                 {
                     return $this->activitecommercial_service;
                 }

             public function getCa_service()
                 {
                     return $this->ca_service;
                 }

             public function getLogo_service()
                 {
                     return $this->logo_service;
                 }

             public function getTheme_service()
                 {
                     return $this->theme_service;
                 }

             public function getFlag_service()
                 {
                     return $this->flag_service;
                 }


    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setNom_service($nom_service)
                 {
                      $this->nom_service = $nom_service;
                 }

             public function setSigle_service($sigle_service)
                 {
                      $this->sigle_service = $sigle_service;
                 }

             public function setNinea_service($ninea_service)
                 {
                      $this->ninea_service = $ninea_service;
                 }

             public function setNrc_service($nrc_service)
                 {
                      $this->nrc_service = $nrc_service;
                 }

             public function setActivitecommercial_service($activitecommercial_service)
                 {
                      $this->activitecommercial_service = $activitecommercial_service;
                 }

             public function setCa_service($ca_service)
                 {
                      $this->ca_service = $ca_service;
                 }

             public function setLogo_service($logo_service)
                 {
                      $this->logo_service = $logo_service;
                 }

             public function setTheme_service($theme_service)
                 {
                      $this->theme_service = $theme_service;
                 }

             public function setFlag_service($flag_service)
                 {
                      $this->flag_service = $flag_service;
                 }



    /*==================Methode list=====================*/
           }
  
   



   ?>



