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
    /*==================Classe creer par Samane samane_ui_admin le 15-11-2019 06:17:04=====================*/
        class Categorie
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_famille;
             private  $nom_categorie;
             private  $nbr_produit_categorie;
             private  $valeur_categorie;
             private  $id_nomenclature_article;
             private  $flag_categorie;


             private  $famille;
             private  $nomenclature_article;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                 $this->famille = new Famille();
                 $this->nomenclature_article = new Nomenclature_article();
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

             public function getId_nomenclature_article()
                 {
                     return $this->id_nomenclature_article;
                 }

             public function getFlag_categorie()
                 {
                     return $this->flag_categorie;
                 }


             public function getFamille()
                 {
                     return $this->famille;
                 }
             public function getNomenclature_article()
                 {
                     return $this->nomenclature_article;
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

             public function setId_nomenclature_article($id_nomenclature_article)
                 {
                      $this->id_nomenclature_article = $id_nomenclature_article;
                 }

             public function setFlag_categorie($flag_categorie)
                 {
                      $this->flag_categorie = $flag_categorie;
                 }



             public function setFamille($famille)
                 {
                      $this->famille = $famille;
                 }

             public function setNomenclature_article($nomenclature_article)
                 {
                      $this->nomenclature_article = $nomenclature_article;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



