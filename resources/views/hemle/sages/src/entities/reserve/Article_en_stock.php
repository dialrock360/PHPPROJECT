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
    /*==================Classe creer par Samane samane_ui_admin le 17-11-2019 15:57:42=====================*/
        class Article_en_stock
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $ref_article;
             private  $id_article;
             private  $id_stock;
             private  $id_conditionement_article;
             private  $qnt_article_en_stock;
             private  $valeur_article_en_stock;
             private  $min_qnt_article_en_stock;
             private  $max_qnt_article_en_stock;


             private  $article;
             private  $conditionement_article;
             private  $stock;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                 $this->article = new Article();
                 $this->conditionement_article = new Conditionement_article();
                 $this->stock = new Stock();
                 }


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getRef_article()
                 {
                     return $this->ref_article;
                 }

             public function getId_article()
                 {
                     return $this->id_article;
                 }

             public function getId_stock()
                 {
                     return $this->id_stock;
                 }

             public function getId_conditionement_article()
                 {
                     return $this->id_conditionement_article;
                 }

             public function getQnt_article_en_stock()
                 {
                     return $this->qnt_article_en_stock;
                 }

             public function getValeur_article_en_stock()
                 {
                     return $this->valeur_article_en_stock;
                 }

             public function getMin_qnt_article_en_stock()
                 {
                     return $this->min_qnt_article_en_stock;
                 }

             public function getMax_qnt_article_en_stock()
                 {
                     return $this->max_qnt_article_en_stock;
                 }


             public function getArticle()
                 {
                     return $this->article;
                 }
             public function getConditionement_article()
                 {
                     return $this->conditionement_article;
                 }
             public function getStock()
                 {
                     return $this->stock;
                 }


    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setRef_article($ref_article)
                 {
                      $this->ref_article = $ref_article;
                 }

             public function setId_article($id_article)
                 {
                      $this->id_article = $id_article;
                 }

             public function setId_stock($id_stock)
                 {
                      $this->id_stock = $id_stock;
                 }

             public function setId_conditionement_article($id_conditionement_article)
                 {
                      $this->id_conditionement_article = $id_conditionement_article;
                 }

             public function setQnt_article_en_stock($qnt_article_en_stock)
                 {
                      $this->qnt_article_en_stock = $qnt_article_en_stock;
                 }

             public function setValeur_article_en_stock($valeur_article_en_stock)
                 {
                      $this->valeur_article_en_stock = $valeur_article_en_stock;
                 }

             public function setMin_qnt_article_en_stock($min_qnt_article_en_stock)
                 {
                      $this->min_qnt_article_en_stock = $min_qnt_article_en_stock;
                 }

             public function setMax_qnt_article_en_stock($max_qnt_article_en_stock)
                 {
                      $this->max_qnt_article_en_stock = $max_qnt_article_en_stock;
                 }



             public function setArticle($article)
                 {
                      $this->article = $article;
                 }

             public function setConditionement_article($conditionement_article)
                 {
                      $this->conditionement_article = $conditionement_article;
                 }

             public function setStock($stock)
                 {
                      $this->stock = $stock;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



