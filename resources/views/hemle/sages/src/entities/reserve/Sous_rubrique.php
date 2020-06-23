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
        class Sous_rubrique
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_rubrique;
             private  $id_model;
             private  $nom_sous_rubrique;
             private  $valeur_sous_rubrique;


             private  $rubrique;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                 $this->rubrique = new Rubrique();
                 }


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_rubrique()
                 {
                     return $this->id_rubrique;
                 }

             public function getId_model()
                 {
                     return $this->id_model;
                 }

             public function getNom_sous_rubrique()
                 {
                     return $this->nom_sous_rubrique;
                 }

             public function getValeur_sous_rubrique()
                 {
                     return $this->valeur_sous_rubrique;
                 }


             public function getRubrique()
                 {
                     return $this->rubrique;
                 }
     

    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_rubrique($id_rubrique)
                 {
                      $this->id_rubrique = $id_rubrique;
                 }

             public function setId_model($id_model)
                 {
                      $this->id_model = $id_model;
                 }

             public function setNom_sous_rubrique($nom_sous_rubrique)
                 {
                      $this->nom_sous_rubrique = $nom_sous_rubrique;
                 }

             public function setValeur_sous_rubrique($valeur_sous_rubrique)
                 {
                      $this->valeur_sous_rubrique = $valeur_sous_rubrique;
                 }



             public function setRubrique($rubrique)
                 {
                      $this->rubrique = $rubrique;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



