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
    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:20=====================*/
        class Frontend
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_service;
             private  $libele;
             private  $slidebar;
             private  $id_slidebar;
             private  $classe_slidebar;
             private  $nmain;
             private  $vmain;
             private  $skin;
             private  $theme;
             private  $cible;
             private  $section;


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

             public function getLibele()
                 {
                     return $this->libele;
                 }

             public function getSlidebar()
                 {
                     return $this->slidebar;
                 }

             public function getId_slidebar()
                 {
                     return $this->id_slidebar;
                 }

             public function getClasse_slidebar()
                 {
                     return $this->classe_slidebar;
                 }

             public function getNmain()
                 {
                     return $this->nmain;
                 }

             public function getVmain()
                 {
                     return $this->vmain;
                 }

             public function getSkin()
                 {
                     return $this->skin;
                 }

             public function getTheme()
                 {
                     return $this->theme;
                 }

             public function getCible()
                 {
                     return $this->cible;
                 }

             public function getSection()
                 {
                     return $this->section;
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

             public function setLibele($libele)
                 {
                      $this->libele = $libele;
                 }

             public function setSlidebar($slidebar)
                 {
                      $this->slidebar = $slidebar;
                 }

             public function setId_slidebar($id_slidebar)
                 {
                      $this->id_slidebar = $id_slidebar;
                 }

             public function setClasse_slidebar($classe_slidebar)
                 {
                      $this->classe_slidebar = $classe_slidebar;
                 }

             public function setNmain($nmain)
                 {
                      $this->nmain = $nmain;
                 }

             public function setVmain($vmain)
                 {
                      $this->vmain = $vmain;
                 }

             public function setSkin($skin)
                 {
                      $this->skin = $skin;
                 }

             public function setTheme($theme)
                 {
                      $this->theme = $theme;
                 }

             public function setCible($cible)
                 {
                      $this->cible = $cible;
                 }

             public function setSection($section)
                 {
                      $this->section = $section;
                 }



             public function setService($service)
                 {
                      $this->service = $service;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



