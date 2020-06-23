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
    /*==================Classe creer par Samane samane_ui_admin le 05-11-2019 11:52:48=====================*/
        class Employee
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_departement;
             private  $id_categorie_pro;
             private  $id_ruperieur_hierarchique;
             private  $avatar_employe;
             private  $matricul_employee;
             private  $cv_employee;
             private  $salaire_employee;
             private  $nom_employee;
             private  $nature_employee;
             private  $tel_employee;
             private  $email_employee;
             private  $info_employee;
             private  $flag_employee;


             private  $departement;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                 $this->departement = new Departement();
                 }


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_departement()
                 {
                     return $this->id_departement;
                 }

             public function getId_categorie_pro()
                 {
                     return $this->id_categorie_pro;
                 }

             public function getId_ruperieur_hierarchique()
                 {
                     return $this->id_ruperieur_hierarchique;
                 }

             public function getAvatar_employe()
                 {
                     return $this->avatar_employe;
                 }

             public function getMatricul_employee()
                 {
                     return $this->matricul_employee;
                 }

             public function getCv_employee()
                 {
                     return $this->cv_employee;
                 }

             public function getSalaire_employee()
                 {
                     return $this->salaire_employee;
                 }

             public function getNom_employee()
                 {
                     return $this->nom_employee;
                 }

             public function getNature_employee()
                 {
                     return $this->nature_employee;
                 }

             public function getTel_employee()
                 {
                     return $this->tel_employee;
                 }

             public function getEmail_employee()
                 {
                     return $this->email_employee;
                 }

             public function getInfo_employee()
                 {
                     return $this->info_employee;
                 }

             public function getFlag_employee()
                 {
                     return $this->flag_employee;
                 }


             public function getDepartement()
                 {
                     return $this->departement;
                 }
     

    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_departement($id_departement)
                 {
                      $this->id_departement = $id_departement;
                 }

             public function setId_categorie_pro($id_categorie_pro)
                 {
                      $this->id_categorie_pro = $id_categorie_pro;
                 }

             public function setId_ruperieur_hierarchique($id_ruperieur_hierarchique)
                 {
                      $this->id_ruperieur_hierarchique = $id_ruperieur_hierarchique;
                 }

             public function setAvatar_employe($avatar_employe)
                 {
                      $this->avatar_employe = $avatar_employe;
                 }

             public function setMatricul_employee($matricul_employee)
                 {
                      $this->matricul_employee = $matricul_employee;
                 }

             public function setCv_employee($cv_employee)
                 {
                      $this->cv_employee = $cv_employee;
                 }

             public function setSalaire_employee($salaire_employee)
                 {
                      $this->salaire_employee = $salaire_employee;
                 }

             public function setNom_employee($nom_employee)
                 {
                      $this->nom_employee = $nom_employee;
                 }

             public function setNature_employee($nature_employee)
                 {
                      $this->nature_employee = $nature_employee;
                 }

             public function setTel_employee($tel_employee)
                 {
                      $this->tel_employee = $tel_employee;
                 }

             public function setEmail_employee($email_employee)
                 {
                      $this->email_employee = $email_employee;
                 }

             public function setInfo_employee($info_employee)
                 {
                      $this->info_employee = $info_employee;
                 }

             public function setFlag_employee($flag_employee)
                 {
                      $this->flag_employee = $flag_employee;
                 }



             public function setDepartement($departement)
                 {
                      $this->departement = $departement;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



