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
    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:20=====================*/
        class Ligne_mouvement
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_mouvement;
             private  $id_article;
             private  $pu_ligne_mouvement;
             private  $qnt_ligne_mouvement;
             private  $mts_ligne_mouvement;
             private  $position_ligne_mouvement;
             private  $designation_ligne_mouvement;
             private  $conditionement_ligne_mouvement;


             private  $article;
             private  $mouvement;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                 $this->article = new Article();
                 $this->mouvement = new Mouvement();
                 }


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_mouvement()
                 {
                     return $this->id_mouvement;
                 }

             public function getId_article()
                 {
                     return $this->id_article;
                 }

             public function getPu_ligne_mouvement()
                 {
                     return $this->pu_ligne_mouvement;
                 }

             public function getQnt_ligne_mouvement()
                 {
                     return $this->qnt_ligne_mouvement;
                 }

             public function getMts_ligne_mouvement()
                 {
                     return $this->mts_ligne_mouvement;
                 }

             public function getPosition_ligne_mouvement()
                 {
                     return $this->position_ligne_mouvement;
                 }

             public function getDesignation_ligne_mouvement()
                 {
                     return $this->designation_ligne_mouvement;
                 }

             public function getConditionement_ligne_mouvement()
                 {
                     return $this->conditionement_ligne_mouvement;
                 }


             public function getArticle()
                 {
                     return $this->article;
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

             public function setId_mouvement($id_mouvement)
                 {
                      $this->id_mouvement = $id_mouvement;
                 }

             public function setId_article($id_article)
                 {
                      $this->id_article = $id_article;
                 }

             public function setPu_ligne_mouvement($pu_ligne_mouvement)
                 {
                      $this->pu_ligne_mouvement = $pu_ligne_mouvement;
                 }

             public function setQnt_ligne_mouvement($qnt_ligne_mouvement)
                 {
                      $this->qnt_ligne_mouvement = $qnt_ligne_mouvement;
                 }

             public function setMts_ligne_mouvement($mts_ligne_mouvement)
                 {
                      $this->mts_ligne_mouvement = $mts_ligne_mouvement;
                 }

             public function setPosition_ligne_mouvement($position_ligne_mouvement)
                 {
                      $this->position_ligne_mouvement = $position_ligne_mouvement;
                 }

             public function setDesignation_ligne_mouvement($designation_ligne_mouvement)
                 {
                      $this->designation_ligne_mouvement = $designation_ligne_mouvement;
                 }

             public function setConditionement_ligne_mouvement($conditionement_ligne_mouvement)
                 {
                      $this->conditionement_ligne_mouvement = $conditionement_ligne_mouvement;
                 }



             public function setArticle($article)
                 {
                      $this->article = $article;
                 }

             public function setMouvement($mouvement)
                 {
                      $this->mouvement = $mouvement;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



