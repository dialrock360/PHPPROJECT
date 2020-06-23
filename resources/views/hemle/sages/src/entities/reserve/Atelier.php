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
    /*==================Classe creer par Samane samane_ui_admin le 23-10-2019 06:10:58=====================*/
        class Atelier
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_service;
             private  $nom_atelier;
             private  $ls_employee_atelier;
             private  $coutmaindoeuve_atelier;
             private  $flag_atelier;


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

             public function getNom_atelier()
                 {
                     return $this->nom_atelier;
                 }

             public function getLs_employee_atelier()
                 {
                     return $this->ls_employee_atelier;
                 }

             public function getCoutmaindoeuve_atelier()
                 {
                     return $this->coutmaindoeuve_atelier;
                 }

             public function getFlag_atelier()
                 {
                     return $this->flag_atelier;
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

             public function setNom_atelier($nom_atelier)
                 {
                      $this->nom_atelier = $nom_atelier;
                 }

             public function setLs_employee_atelier($ls_employee_atelier)
                 {
                      $this->ls_employee_atelier = $ls_employee_atelier;
                 }

             public function setCoutmaindoeuve_atelier($coutmaindoeuve_atelier)
                 {
                      $this->coutmaindoeuve_atelier = $coutmaindoeuve_atelier;
                 }

             public function setFlag_atelier($flag_atelier)
                 {
                      $this->flag_atelier = $flag_atelier;
                 }



             public function setService($service)
                 {
                      $this->service = $service;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



