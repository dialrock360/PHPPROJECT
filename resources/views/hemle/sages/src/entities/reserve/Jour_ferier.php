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
        class Jour_ferier
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $date_jour;
             private  $description;
             private  $fiche_jour_id;


             private  $fiche_de_jours_ferier;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                 $this->fiche_de_jours_ferier = new Fiche_de_jours_ferier();
                 }


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getDate_jour()
                 {
                     return $this->date_jour;
                 }

             public function getDescription()
                 {
                     return $this->description;
                 }

             public function getFiche_jour_id()
                 {
                     return $this->fiche_jour_id;
                 }


             public function getFiche_de_jours_ferier()
                 {
                     return $this->fiche_de_jours_ferier;
                 }
     

    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setDate_jour($date_jour)
                 {
                      $this->date_jour = $date_jour;
                 }

             public function setDescription($description)
                 {
                      $this->description = $description;
                 }

             public function setFiche_jour_id($fiche_jour_id)
                 {
                      $this->fiche_jour_id = $fiche_jour_id;
                 }



             public function setFiche_de_jours_ferier($fiche_de_jours_ferier)
                 {
                      $this->fiche_de_jours_ferier = $fiche_de_jours_ferier;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



