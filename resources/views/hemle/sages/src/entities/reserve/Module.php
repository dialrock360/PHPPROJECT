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
    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:21=====================*/
        class Module
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $nom_module;


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getNom_module()
                 {
                     return $this->nom_module;
                 }


    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setNom_module($nom_module)
                 {
                      $this->nom_module = $nom_module;
                 }



    /*==================Methode list=====================*/
           }
  
   



   ?>



