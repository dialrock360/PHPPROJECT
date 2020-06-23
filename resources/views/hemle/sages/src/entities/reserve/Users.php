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
        class Users
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_service;
             private  $login;
             private  $password;
             private  $levelsecurity;


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

             public function getLogin()
                 {
                     return $this->login;
                 }

             public function getPassword()
                 {
                     return $this->password;
                 }

             public function getLevelsecurity()
                 {
                     return $this->levelsecurity;
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

             public function setLogin($login)
                 {
                      $this->login = $login;
                 }

             public function setPassword($password)
                 {
                      $this->password = $password;
                 }

             public function setLevelsecurity($levelsecurity)
                 {
                      $this->levelsecurity = $levelsecurity;
                 }



             public function setService($service)
                 {
                      $this->service = $service;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



