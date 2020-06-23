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
    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:24=====================*/
        class Type_conger
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $nom_type_conger;
             private  $categirie_type_conger;
             private  $couleur_type_conger;


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getNom_type_conger()
                 {
                     return $this->nom_type_conger;
                 }

             public function getCategirie_type_conger()
                 {
                     return $this->categirie_type_conger;
                 }

             public function getCouleur_type_conger()
                 {
                     return $this->couleur_type_conger;
                 }


    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setNom_type_conger($nom_type_conger)
                 {
                      $this->nom_type_conger = $nom_type_conger;
                 }

             public function setCategirie_type_conger($categirie_type_conger)
                 {
                      $this->categirie_type_conger = $categirie_type_conger;
                 }

             public function setCouleur_type_conger($couleur_type_conger)
                 {
                      $this->couleur_type_conger = $couleur_type_conger;
                 }



    /*==================Methode list=====================*/
           }
  
   



   ?>



