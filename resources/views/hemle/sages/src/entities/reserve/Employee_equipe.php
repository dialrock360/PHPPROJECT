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
    /*==================Classe creer par Samane samane_ui_admin le 29-09-2019 13:16:24=====================*/
        class Employee_equipe
            {

    /*==================Attribut list=====================*/
                
             private  $id_employee;
             private  $id_equipe;
             private  $id_service;


             private  $employee;
             private  $equipe;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                 $this->employee = new Employee();
                 $this->equipe = new Equipe();
                 }


    /*==================Getter list=====================*/
                
             public function getId_employee()
                 {
                     return $this->id_employee;
                 }

             public function getId_equipe()
                 {
                     return $this->id_equipe;
                 }

             public function getId_service()
                 {
                     return $this->id_service;
                 }


             public function getEmployee()
                 {
                     return $this->employee;
                 }
             public function getEquipe()
                 {
                     return $this->equipe;
                 }
     

    /*==================Setter list=====================*/
                
             public function setId_employee($id_employee)
                 {
                      $this->id_employee = $id_employee;
                 }

             public function setId_equipe($id_equipe)
                 {
                      $this->id_equipe = $id_equipe;
                 }

             public function setId_service($id_service)
                 {
                      $this->id_service = $id_service;
                 }



             public function setEmployee($employee)
                 {
                      $this->employee = $employee;
                 }

             public function setEquipe($equipe)
                 {
                      $this->equipe = $equipe;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



