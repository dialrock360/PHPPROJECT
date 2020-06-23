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
        class Programme
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $nom_programme;
             private  $date_programme;
             private  $datefin_programme;
             private  $nbr_projet_programme;
             private  $etat_programme;
             private  $id_service;
             private  $modul_affecter;
             private  $flag_programme;


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

             public function getNom_programme()
                 {
                     return $this->nom_programme;
                 }

             public function getDate_programme()
                 {
                     return $this->date_programme;
                 }

             public function getDatefin_programme()
                 {
                     return $this->datefin_programme;
                 }

             public function getNbr_projet_programme()
                 {
                     return $this->nbr_projet_programme;
                 }

             public function getEtat_programme()
                 {
                     return $this->etat_programme;
                 }

             public function getId_service()
                 {
                     return $this->id_service;
                 }

             public function getModul_affecter()
                 {
                     return $this->modul_affecter;
                 }

             public function getFlag_programme()
                 {
                     return $this->flag_programme;
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

             public function setNom_programme($nom_programme)
                 {
                      $this->nom_programme = $nom_programme;
                 }

             public function setDate_programme($date_programme)
                 {
                      $this->date_programme = $date_programme;
                 }

             public function setDatefin_programme($datefin_programme)
                 {
                      $this->datefin_programme = $datefin_programme;
                 }

             public function setNbr_projet_programme($nbr_projet_programme)
                 {
                      $this->nbr_projet_programme = $nbr_projet_programme;
                 }

             public function setEtat_programme($etat_programme)
                 {
                      $this->etat_programme = $etat_programme;
                 }

             public function setId_service($id_service)
                 {
                      $this->id_service = $id_service;
                 }

             public function setModul_affecter($modul_affecter)
                 {
                      $this->modul_affecter = $modul_affecter;
                 }

             public function setFlag_programme($flag_programme)
                 {
                      $this->flag_programme = $flag_programme;
                 }



             public function setService($service)
                 {
                      $this->service = $service;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



