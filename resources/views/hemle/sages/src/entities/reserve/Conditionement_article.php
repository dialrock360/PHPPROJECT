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
    /*==================Classe creer par Samane samane_ui_admin le 17-11-2019 15:57:43=====================*/
        class Conditionement_article
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_article_en_stock;
             private  $id_conditionement;
             private  $qnt_unite;
             private  $pxa_u_article_en_stock;
             private  $cout_achat_conditionement_article;
             private  $pxv_u_conditionement_article;
             private  $pxv_bar_conditionement_article;
             private  $pxv_conditionement_article;
             private  $id_unite;


             private  $article;
             private  $conditionement;
             private  $conditionementunite;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                 $this->article = new Article();
                 $this->conditionement = new Conditionement();
                 $this->conditionementunite = new Conditionement();
                 }


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_article_en_stock()
                 {
                     return $this->id_article_en_stock;
                 }

             public function getId_conditionement()
                 {
                     return $this->id_conditionement;
                 }

             public function getQnt_unite()
                 {
                     return $this->qnt_unite;
                 }

             public function getPxa_u_article_en_stock()
                 {
                     return $this->pxa_u_article_en_stock;
                 }

             public function getCout_achat_conditionement_article()
                 {
                     return $this->cout_achat_conditionement_article;
                 }

             public function getPxv_u_conditionement_article()
                 {
                     return $this->pxv_u_conditionement_article;
                 }

             public function getPxv_bar_conditionement_article()
                 {
                     return $this->pxv_bar_conditionement_article;
                 }

             public function getPxv_conditionement_article()
                 {
                     return $this->pxv_conditionement_article;
                 }

             public function getId_unite()
                 {
                     return $this->id_unite;
                 }


             public function getArticle()
                 {
                     return $this->article;
                 }
             public function getConditionement()
                 {
                     return $this->conditionement;
                 }
             public function getConditionementunite()
                 {
                     return $this->conditionementunite;
                 }
     

    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_article_en_stock($id_article_en_stock)
                 {
                      $this->id_article_en_stock = $id_article_en_stock;
                 }

             public function setId_conditionement($id_conditionement)
                 {
                      $this->id_conditionement = $id_conditionement;
                 }

             public function setQnt_unite($qnt_unite)
                 {
                      $this->qnt_unite = $qnt_unite;
                 }

             public function setPxa_u_article_en_stock($pxa_u_article_en_stock)
                 {
                      $this->pxa_u_article_en_stock = $pxa_u_article_en_stock;
                 }

             public function setCout_achat_conditionement_article($cout_achat_conditionement_article)
                 {
                      $this->cout_achat_conditionement_article = $cout_achat_conditionement_article;
                 }

             public function setPxv_u_conditionement_article($pxv_u_conditionement_article)
                 {
                      $this->pxv_u_conditionement_article = $pxv_u_conditionement_article;
                 }

             public function setPxv_bar_conditionement_article($pxv_bar_conditionement_article)
                 {
                      $this->pxv_bar_conditionement_article = $pxv_bar_conditionement_article;
                 }

             public function setPxv_conditionement_article($pxv_conditionement_article)
                 {
                      $this->pxv_conditionement_article = $pxv_conditionement_article;
                 }

             public function setId_unite($id_unite)
                 {
                      $this->id_unite = $id_unite;
                 }



             public function setArticle($article)
                 {
                      $this->article = $article;
                 }

             public function setConditionement($conditionement)
                 {
                      $this->conditionement = $conditionement;
                 }

             public function setConditionementunite($conditionementunite)
                 {
                      $this->conditionementunite = $conditionementunite;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



