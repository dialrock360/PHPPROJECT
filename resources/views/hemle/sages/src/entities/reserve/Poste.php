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
        class Poste
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $nom_poste;
             private  $categorie_proffessionelle;
             private  $salaire_base;


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getNom_poste()
                 {
                     return $this->nom_poste;
                 }

             public function getCategorie_proffessionelle()
                 {
                     return $this->categorie_proffessionelle;
                 }

             public function getSalaire_base()
                 {
                     return $this->salaire_base;
                 }


    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setNom_poste($nom_poste)
                 {
                      $this->nom_poste = $nom_poste;
                 }

             public function setCategorie_proffessionelle($categorie_proffessionelle)
                 {
                      $this->categorie_proffessionelle = $categorie_proffessionelle;
                 }

             public function setSalaire_base($salaire_base)
                 {
                      $this->salaire_base = $salaire_base;
                 }



    /*==================Methode list=====================*/
           }
  
   



   ?>



