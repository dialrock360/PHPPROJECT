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
        class Ligne_equipe_personne
            {

    /*==================Attribut list=====================*/
                
             private  $id_employee;
             private  $id_equipe;
             private  $maindoeuve_unitaire;


    /*==================Getter list=====================*/
                
             public function getId_employee()
                 {
                     return $this->id_employee;
                 }

             public function getId_equipe()
                 {
                     return $this->id_equipe;
                 }

             public function getMaindoeuve_unitaire()
                 {
                     return $this->maindoeuve_unitaire;
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

             public function setMaindoeuve_unitaire($maindoeuve_unitaire)
                 {
                      $this->maindoeuve_unitaire = $maindoeuve_unitaire;
                 }



    /*==================Methode list=====================*/
           }
  
   



   ?>



