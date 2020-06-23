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
    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:18=====================*/
        class Departement
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_service;
             private  $nom_departement;
             private  $nbr_employee;
             private  $jour_ouvrable;
             private  $id_chefdepartement;
             private  $info_departement;
             private  $flag_departement;


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

             public function getNom_departement()
                 {
                     return $this->nom_departement;
                 }

             public function getNbr_employee()
                 {
                     return $this->nbr_employee;
                 }

             public function getJour_ouvrable()
                 {
                     return $this->jour_ouvrable;
                 }

             public function getId_chefdepartement()
                 {
                     return $this->id_chefdepartement;
                 }

             public function getInfo_departement()
                 {
                     return $this->info_departement;
                 }

             public function getFlag_departement()
                 {
                     return $this->flag_departement;
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

             public function setNom_departement($nom_departement)
                 {
                      $this->nom_departement = $nom_departement;
                 }

             public function setNbr_employee($nbr_employee)
                 {
                      $this->nbr_employee = $nbr_employee;
                 }

             public function setJour_ouvrable($jour_ouvrable)
                 {
                      $this->jour_ouvrable = $jour_ouvrable;
                 }

             public function setId_chefdepartement($id_chefdepartement)
                 {
                      $this->id_chefdepartement = $id_chefdepartement;
                 }

             public function setInfo_departement($info_departement)
                 {
                      $this->info_departement = $info_departement;
                 }

             public function setFlag_departement($flag_departement)
                 {
                      $this->flag_departement = $flag_departement;
                 }



             public function setService($service)
                 {
                      $this->service = $service;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



