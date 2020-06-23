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
        class Ligne_personne_groupe
            {

    /*==================Attribut list=====================*/
                
             private  $id_personne;
             private  $id_groupe;


    /*==================Getter list=====================*/
                
             public function getId_personne()
                 {
                     return $this->id_personne;
                 }

             public function getId_groupe()
                 {
                     return $this->id_groupe;
                 }


    /*==================Setter list=====================*/
                
             public function setId_personne($id_personne)
                 {
                      $this->id_personne = $id_personne;
                 }

             public function setId_groupe($id_groupe)
                 {
                      $this->id_groupe = $id_groupe;
                 }



    /*==================Methode list=====================*/
           }
  
   



   ?>



