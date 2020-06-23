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
        class V_article_en_stock
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $ref_article;
             private  $nom_stock;
             private  $type_stock;
             private  $nbrarticle;
             private  $valeur_stock;
             private  $id_article;
             private  $id_stock;
             private  $id_conditionement_article;
             private  $pu_article_en_stock;
             private  $qnt_article_en_stock;
             private  $mts_article_en_stock;
             private  $min_qnt_article_en_stock;
             private  $max_qnt_article_en_stock;
             private  $id_conditionement;
             private  $qnt_unite;
             private  $prix_unite;
             private  $id_unite;
             private  $nom_article;
             private  $path_photo;
             private  $nom_conditionement;
             private  $nom_uniteconditionement;


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getRef_article()
                 {
                     return $this->ref_article;
                 }

             public function getNom_stock()
                 {
                     return $this->nom_stock;
                 }

             public function getType_stock()
                 {
                     return $this->type_stock;
                 }

             public function getNbrarticle()
                 {
                     return $this->nbrarticle;
                 }

             public function getValeur_stock()
                 {
                     return $this->valeur_stock;
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

             public function getPu_article_en_stock()
                 {
                     return $this->pu_article_en_stock;
                 }

             public function getQnt_article_en_stock()
                 {
                     return $this->qnt_article_en_stock;
                 }

             public function getMts_article_en_stock()
                 {
                     return $this->mts_article_en_stock;
                 }

             public function getMin_qnt_article_en_stock()
                 {
                     return $this->min_qnt_article_en_stock;
                 }

             public function getMax_qnt_article_en_stock()
                 {
                     return $this->max_qnt_article_en_stock;
                 }

             public function getId_conditionement()
                 {
                     return $this->id_conditionement;
                 }

             public function getQnt_unite()
                 {
                     return $this->qnt_unite;
                 }

             public function getPrix_unite()
                 {
                     return $this->prix_unite;
                 }

             public function getId_unite()
                 {
                     return $this->id_unite;
                 }

             public function getNom_article()
                 {
                     return $this->nom_article;
                 }

             public function getPath_photo()
                 {
                     return $this->path_photo;
                 }

             public function getNom_conditionement()
                 {
                     return $this->nom_conditionement;
                 }

             public function getNom_uniteconditionement()
                 {
                     return $this->nom_uniteconditionement;
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

             public function setNom_stock($nom_stock)
                 {
                      $this->nom_stock = $nom_stock;
                 }

             public function setType_stock($type_stock)
                 {
                      $this->type_stock = $type_stock;
                 }

             public function setNbrarticle($nbrarticle)
                 {
                      $this->nbrarticle = $nbrarticle;
                 }

             public function setValeur_stock($valeur_stock)
                 {
                      $this->valeur_stock = $valeur_stock;
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

             public function setPu_article_en_stock($pu_article_en_stock)
                 {
                      $this->pu_article_en_stock = $pu_article_en_stock;
                 }

             public function setQnt_article_en_stock($qnt_article_en_stock)
                 {
                      $this->qnt_article_en_stock = $qnt_article_en_stock;
                 }

             public function setMts_article_en_stock($mts_article_en_stock)
                 {
                      $this->mts_article_en_stock = $mts_article_en_stock;
                 }

             public function setMin_qnt_article_en_stock($min_qnt_article_en_stock)
                 {
                      $this->min_qnt_article_en_stock = $min_qnt_article_en_stock;
                 }

             public function setMax_qnt_article_en_stock($max_qnt_article_en_stock)
                 {
                      $this->max_qnt_article_en_stock = $max_qnt_article_en_stock;
                 }

             public function setId_conditionement($id_conditionement)
                 {
                      $this->id_conditionement = $id_conditionement;
                 }

             public function setQnt_unite($qnt_unite)
                 {
                      $this->qnt_unite = $qnt_unite;
                 }

             public function setPrix_unite($prix_unite)
                 {
                      $this->prix_unite = $prix_unite;
                 }

             public function setId_unite($id_unite)
                 {
                      $this->id_unite = $id_unite;
                 }

             public function setNom_article($nom_article)
                 {
                      $this->nom_article = $nom_article;
                 }

             public function setPath_photo($path_photo)
                 {
                      $this->path_photo = $path_photo;
                 }

             public function setNom_conditionement($nom_conditionement)
                 {
                      $this->nom_conditionement = $nom_conditionement;
                 }

             public function setNom_uniteconditionement($nom_uniteconditionement)
                 {
                      $this->nom_uniteconditionement = $nom_uniteconditionement;
                 }



    /*==================Methode list=====================*/
           }
  
   



   ?>



