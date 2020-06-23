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
    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:25=====================*/
        class Users_roles
            {

    /*==================Attribut list=====================*/
                
             private  $id_user;
             private  $id_role;


    /*==================Getter list=====================*/
                
             public function getId_user()
                 {
                     return $this->id_user;
                 }

             public function getId_role()
                 {
                     return $this->id_role;
                 }


    /*==================Setter list=====================*/
                
             public function setId_user($id_user)
                 {
                      $this->id_user = $id_user;
                 }

             public function setId_role($id_role)
                 {
                      $this->id_role = $id_role;
                 }



    /*==================Methode list=====================*/
           }
  
   



   ?>



