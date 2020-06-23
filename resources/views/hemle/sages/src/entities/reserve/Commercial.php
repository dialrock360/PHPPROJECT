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
    /*==================Classe creer par Samane samane_ui_admin le 04-11-2019 21:46:58=====================*/
        class Commercial
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_service;
             private  $avatar_commercial;
             private  $nom_commercial;
             private  $tel_commercial;
             private  $email_commercial;
             private  $adresse_commercial;
             private  $localisation_commercial;
             private  $info_commercial;
             private  $flag_commercial;


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

             public function getAvatar_commercial()
                 {
                     return $this->avatar_commercial;
                 }

             public function getNom_commercial()
                 {
                     return $this->nom_commercial;
                 }

             public function getTel_commercial()
                 {
                     return $this->tel_commercial;
                 }

             public function getEmail_commercial()
                 {
                     return $this->email_commercial;
                 }

             public function getAdresse_commercial()
                 {
                     return $this->adresse_commercial;
                 }

             public function getLocalisation_commercial()
                 {
                     return $this->localisation_commercial;
                 }

             public function getInfo_commercial()
                 {
                     return $this->info_commercial;
                 }

             public function getFlag_commercial()
                 {
                     return $this->flag_commercial;
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

             public function setAvatar_commercial($avatar_commercial)
                 {
                      $this->avatar_commercial = $avatar_commercial;
                 }

             public function setNom_commercial($nom_commercial)
                 {
                      $this->nom_commercial = $nom_commercial;
                 }

             public function setTel_commercial($tel_commercial)
                 {
                      $this->tel_commercial = $tel_commercial;
                 }

             public function setEmail_commercial($email_commercial)
                 {
                      $this->email_commercial = $email_commercial;
                 }

             public function setAdresse_commercial($adresse_commercial)
                 {
                      $this->adresse_commercial = $adresse_commercial;
                 }

             public function setLocalisation_commercial($localisation_commercial)
                 {
                      $this->localisation_commercial = $localisation_commercial;
                 }

             public function setInfo_commercial($info_commercial)
                 {
                      $this->info_commercial = $info_commercial;
                 }

             public function setFlag_commercial($flag_commercial)
                 {
                      $this->flag_commercial = $flag_commercial;
                 }



             public function setService($service)
                 {
                      $this->service = $service;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



