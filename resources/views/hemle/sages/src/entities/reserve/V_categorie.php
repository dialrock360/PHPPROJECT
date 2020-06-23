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
    /*==================Classe creer par Samane samane_ui_admin le 14-11-2019 20:58:53=====================*/
        class V_categorie
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_famille;
             private  $nom_categorie;
             private  $nbr_produit_categorie;
             private  $valeur_categorie;
             private  $flag_categorie;
             private  $id_service;
             private  $nom_famille;
             private  $color_famille;
             private  $nbr_categorie_famille;
             private  $valeur_famille;
             private  $flag_famille;


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_famille()
                 {
                     return $this->id_famille;
                 }

             public function getNom_categorie()
                 {
                     return $this->nom_categorie;
                 }

             public function getNbr_produit_categorie()
                 {
                     return $this->nbr_produit_categorie;
                 }

             public function getValeur_categorie()
                 {
                     return $this->valeur_categorie;
                 }

             public function getFlag_categorie()
                 {
                     return $this->flag_categorie;
                 }

             public function getId_service()
                 {
                     return $this->id_service;
                 }

             public function getNom_famille()
                 {
                     return $this->nom_famille;
                 }

             public function getColor_famille()
                 {
                     return $this->color_famille;
                 }

             public function getNbr_categorie_famille()
                 {
                     return $this->nbr_categorie_famille;
                 }

             public function getValeur_famille()
                 {
                     return $this->valeur_famille;
                 }

             public function getFlag_famille()
                 {
                     return $this->flag_famille;
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

             public function setNom_categorie($nom_categorie)
                 {
                      $this->nom_categorie = $nom_categorie;
                 }

             public function setNbr_produit_categorie($nbr_produit_categorie)
                 {
                      $this->nbr_produit_categorie = $nbr_produit_categorie;
                 }

             public function setValeur_categorie($valeur_categorie)
                 {
                      $this->valeur_categorie = $valeur_categorie;
                 }

             public function setFlag_categorie($flag_categorie)
                 {
                      $this->flag_categorie = $flag_categorie;
                 }

             public function setId_service($id_service)
                 {
                      $this->id_service = $id_service;
                 }

             public function setNom_famille($nom_famille)
                 {
                      $this->nom_famille = $nom_famille;
                 }

             public function setColor_famille($color_famille)
                 {
                      $this->color_famille = $color_famille;
                 }

             public function setNbr_categorie_famille($nbr_categorie_famille)
                 {
                      $this->nbr_categorie_famille = $nbr_categorie_famille;
                 }

             public function setValeur_famille($valeur_famille)
                 {
                      $this->valeur_famille = $valeur_famille;
                 }

             public function setFlag_famille($flag_famille)
                 {
                      $this->flag_famille = $flag_famille;
                 }



    /*==================Methode list=====================*/
           }
  
   



   ?>



