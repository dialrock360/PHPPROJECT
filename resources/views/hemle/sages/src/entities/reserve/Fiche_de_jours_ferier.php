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
        class Fiche_de_jours_ferier
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $annee_exercice;
             private  $nbr_jour_ferie;


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getAnnee_exercice()
                 {
                     return $this->annee_exercice;
                 }

             public function getNbr_jour_ferie()
                 {
                     return $this->nbr_jour_ferie;
                 }


    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setAnnee_exercice($annee_exercice)
                 {
                      $this->annee_exercice = $annee_exercice;
                 }

             public function setNbr_jour_ferie($nbr_jour_ferie)
                 {
                      $this->nbr_jour_ferie = $nbr_jour_ferie;
                 }



    /*==================Methode list=====================*/
           }
  
   



   ?>



