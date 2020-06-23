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
        class Projet
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_programme;
             private  $nom_projet;
             private  $cout_projet;
             private  $valeur_projet;
             private  $date_projet;
             private  $datefin_projet;
             private  $etat_projet;
             private  $id_chef_projet;
             private  $flag_projet;


             private  $programme;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                 $this->programme = new Programme();
                 }


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_programme()
                 {
                     return $this->id_programme;
                 }

             public function getNom_projet()
                 {
                     return $this->nom_projet;
                 }

             public function getCout_projet()
                 {
                     return $this->cout_projet;
                 }

             public function getValeur_projet()
                 {
                     return $this->valeur_projet;
                 }

             public function getDate_projet()
                 {
                     return $this->date_projet;
                 }

             public function getDatefin_projet()
                 {
                     return $this->datefin_projet;
                 }

             public function getEtat_projet()
                 {
                     return $this->etat_projet;
                 }

             public function getId_chef_projet()
                 {
                     return $this->id_chef_projet;
                 }

             public function getFlag_projet()
                 {
                     return $this->flag_projet;
                 }


             public function getProgramme()
                 {
                     return $this->programme;
                 }
     

    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_programme($id_programme)
                 {
                      $this->id_programme = $id_programme;
                 }

             public function setNom_projet($nom_projet)
                 {
                      $this->nom_projet = $nom_projet;
                 }

             public function setCout_projet($cout_projet)
                 {
                      $this->cout_projet = $cout_projet;
                 }

             public function setValeur_projet($valeur_projet)
                 {
                      $this->valeur_projet = $valeur_projet;
                 }

             public function setDate_projet($date_projet)
                 {
                      $this->date_projet = $date_projet;
                 }

             public function setDatefin_projet($datefin_projet)
                 {
                      $this->datefin_projet = $datefin_projet;
                 }

             public function setEtat_projet($etat_projet)
                 {
                      $this->etat_projet = $etat_projet;
                 }

             public function setId_chef_projet($id_chef_projet)
                 {
                      $this->id_chef_projet = $id_chef_projet;
                 }

             public function setFlag_projet($flag_projet)
                 {
                      $this->flag_projet = $flag_projet;
                 }



             public function setProgramme($programme)
                 {
                      $this->programme = $programme;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



