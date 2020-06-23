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
    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:19=====================*/
        class Domaine_programme
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $nom_domaine_programme;


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getNom_domaine_programme()
                 {
                     return $this->nom_domaine_programme;
                 }


    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setNom_domaine_programme($nom_domaine_programme)
                 {
                      $this->nom_domaine_programme = $nom_domaine_programme;
                 }



    /*==================Methode list=====================*/
           }
  
   



   ?>



