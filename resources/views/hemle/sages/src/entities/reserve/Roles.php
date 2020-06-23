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
        class Roles
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $nom_role;
             private  $nbr_users;


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getNom_role()
                 {
                     return $this->nom_role;
                 }

             public function getNbr_users()
                 {
                     return $this->nbr_users;
                 }


    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setNom_role($nom_role)
                 {
                      $this->nom_role = $nom_role;
                 }

             public function setNbr_users($nbr_users)
                 {
                      $this->nbr_users = $nbr_users;
                 }



    /*==================Methode list=====================*/
           }
  
   



   ?>



