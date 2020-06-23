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
        class Ligne_producion
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_article;
             private  $id_projet;
             private  $pxa_ligne_producion;
             private  $qnt_ligne_producion;
             private  $mts_ligne_producion;
             private  $position_ligne_producion;


             private  $article;
             private  $projet;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                 $this->article = new Article();
                 $this->projet = new Projet();
                 }


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_article()
                 {
                     return $this->id_article;
                 }

             public function getId_projet()
                 {
                     return $this->id_projet;
                 }

             public function getPxa_ligne_producion()
                 {
                     return $this->pxa_ligne_producion;
                 }

             public function getQnt_ligne_producion()
                 {
                     return $this->qnt_ligne_producion;
                 }

             public function getMts_ligne_producion()
                 {
                     return $this->mts_ligne_producion;
                 }

             public function getPosition_ligne_producion()
                 {
                     return $this->position_ligne_producion;
                 }


             public function getArticle()
                 {
                     return $this->article;
                 }
             public function getProjet()
                 {
                     return $this->projet;
                 }
     

    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_article($id_article)
                 {
                      $this->id_article = $id_article;
                 }

             public function setId_projet($id_projet)
                 {
                      $this->id_projet = $id_projet;
                 }

             public function setPxa_ligne_producion($pxa_ligne_producion)
                 {
                      $this->pxa_ligne_producion = $pxa_ligne_producion;
                 }

             public function setQnt_ligne_producion($qnt_ligne_producion)
                 {
                      $this->qnt_ligne_producion = $qnt_ligne_producion;
                 }

             public function setMts_ligne_producion($mts_ligne_producion)
                 {
                      $this->mts_ligne_producion = $mts_ligne_producion;
                 }

             public function setPosition_ligne_producion($position_ligne_producion)
                 {
                      $this->position_ligne_producion = $position_ligne_producion;
                 }



             public function setArticle($article)
                 {
                      $this->article = $article;
                 }

             public function setProjet($projet)
                 {
                      $this->projet = $projet;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



