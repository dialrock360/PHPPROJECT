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
        class Etat_compte
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_famille;
             private  $id_mouvement;
             private  $date_etat_compte;
             private  $depense_etat_compte;
             private  $gain_etat_compte;


             private  $famille;
             private  $mouvement;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                 $this->famille = new Famille();
                 $this->mouvement = new Mouvement();
                 }


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_famille()
                 {
                     return $this->id_famille;
                 }

             public function getId_mouvement()
                 {
                     return $this->id_mouvement;
                 }

             public function getDate_etat_compte()
                 {
                     return $this->date_etat_compte;
                 }

             public function getDepense_etat_compte()
                 {
                     return $this->depense_etat_compte;
                 }

             public function getGain_etat_compte()
                 {
                     return $this->gain_etat_compte;
                 }


             public function getFamille()
                 {
                     return $this->famille;
                 }
             public function getMouvement()
                 {
                     return $this->mouvement;
                 }
     

    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_famille($id_famille)
                 {
                      $this->id_famille = $id_famille;
                 }

             public function setId_mouvement($id_mouvement)
                 {
                      $this->id_mouvement = $id_mouvement;
                 }

             public function setDate_etat_compte($date_etat_compte)
                 {
                      $this->date_etat_compte = $date_etat_compte;
                 }

             public function setDepense_etat_compte($depense_etat_compte)
                 {
                      $this->depense_etat_compte = $depense_etat_compte;
                 }

             public function setGain_etat_compte($gain_etat_compte)
                 {
                      $this->gain_etat_compte = $gain_etat_compte;
                 }



             public function setFamille($famille)
                 {
                      $this->famille = $famille;
                 }

             public function setMouvement($mouvement)
                 {
                      $this->mouvement = $mouvement;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



