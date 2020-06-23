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
        class Groupe
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_service;
             private  $nom_groupe;
             private  $nbr_membre_groupe;
             private  $info_groupe;
             private  $flag_groupe;


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

             public function getNom_groupe()
                 {
                     return $this->nom_groupe;
                 }

             public function getNbr_membre_groupe()
                 {
                     return $this->nbr_membre_groupe;
                 }

             public function getInfo_groupe()
                 {
                     return $this->info_groupe;
                 }

             public function getFlag_groupe()
                 {
                     return $this->flag_groupe;
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

             public function setNom_groupe($nom_groupe)
                 {
                      $this->nom_groupe = $nom_groupe;
                 }

             public function setNbr_membre_groupe($nbr_membre_groupe)
                 {
                      $this->nbr_membre_groupe = $nbr_membre_groupe;
                 }

             public function setInfo_groupe($info_groupe)
                 {
                      $this->info_groupe = $info_groupe;
                 }

             public function setFlag_groupe($flag_groupe)
                 {
                      $this->flag_groupe = $flag_groupe;
                 }



             public function setService($service)
                 {
                      $this->service = $service;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



