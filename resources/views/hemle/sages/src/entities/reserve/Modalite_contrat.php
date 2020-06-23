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
        class Modalite_contrat
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $nom_modalite;
             private  $clause_modalite;


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getNom_modalite()
                 {
                     return $this->nom_modalite;
                 }

             public function getClause_modalite()
                 {
                     return $this->clause_modalite;
                 }


    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setNom_modalite($nom_modalite)
                 {
                      $this->nom_modalite = $nom_modalite;
                 }

             public function setClause_modalite($clause_modalite)
                 {
                      $this->clause_modalite = $clause_modalite;
                 }



    /*==================Methode list=====================*/
           }
  
   



   ?>



