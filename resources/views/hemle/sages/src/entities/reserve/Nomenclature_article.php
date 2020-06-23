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
    /*==================Classe creer par Samane samane_ui_admin le 14-11-2019 20:58:49=====================*/
        class Nomenclature_article
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $ref_nomenclature_article;
             private  $nom_nomenclature_article;
             private  $code_couleur;


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getRef_nomenclature_article()
                 {
                     return $this->ref_nomenclature_article;
                 }

             public function getNom_nomenclature_article()
                 {
                     return $this->nom_nomenclature_article;
                 }

             public function getCode_couleur()
                 {
                     return $this->code_couleur;
                 }


    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setRef_nomenclature_article($ref_nomenclature_article)
                 {
                      $this->ref_nomenclature_article = $ref_nomenclature_article;
                 }

             public function setNom_nomenclature_article($nom_nomenclature_article)
                 {
                      $this->nom_nomenclature_article = $nom_nomenclature_article;
                 }

             public function setCode_couleur($code_couleur)
                 {
                      $this->code_couleur = $code_couleur;
                 }



    /*==================Methode list=====================*/
           }
  
   



   ?>



