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
    /*==================Classe creer par Samane samane_ui_admin le 14-11-2019 20:58:52=====================*/
        class V_article
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_categorie;
             private  $nom_article;
             private  $ref_article;
             private  $pxa_article;
             private  $pxv_article;
             private  $pxvbar_article;
             private  $type_article;
             private  $tabidp;
             private  $tabqnt;
             private  $tabmts;
             private  $pxrv;
             private  $nbrstockage;
             private  $tabidstock;
             private  $flag_article;
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
             private  $path_photo;
             private  $master;


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_categorie()
                 {
                     return $this->id_categorie;
                 }

             public function getNom_article()
                 {
                     return $this->nom_article;
                 }

             public function getRef_article()
                 {
                     return $this->ref_article;
                 }

             public function getPxa_article()
                 {
                     return $this->pxa_article;
                 }

             public function getPxv_article()
                 {
                     return $this->pxv_article;
                 }

             public function getPxvbar_article()
                 {
                     return $this->pxvbar_article;
                 }

             public function getType_article()
                 {
                     return $this->type_article;
                 }

             public function getTabidp()
                 {
                     return $this->tabidp;
                 }

             public function getTabqnt()
                 {
                     return $this->tabqnt;
                 }

             public function getTabmts()
                 {
                     return $this->tabmts;
                 }

             public function getPxrv()
                 {
                     return $this->pxrv;
                 }

             public function getNbrstockage()
                 {
                     return $this->nbrstockage;
                 }

             public function getTabidstock()
                 {
                     return $this->tabidstock;
                 }

             public function getFlag_article()
                 {
                     return $this->flag_article;
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

             public function getPath_photo()
                 {
                     return $this->path_photo;
                 }

             public function getMaster()
                 {
                     return $this->master;
                 }


    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_categorie($id_categorie)
                 {
                      $this->id_categorie = $id_categorie;
                 }

             public function setNom_article($nom_article)
                 {
                      $this->nom_article = $nom_article;
                 }

             public function setRef_article($ref_article)
                 {
                      $this->ref_article = $ref_article;
                 }

             public function setPxa_article($pxa_article)
                 {
                      $this->pxa_article = $pxa_article;
                 }

             public function setPxv_article($pxv_article)
                 {
                      $this->pxv_article = $pxv_article;
                 }

             public function setPxvbar_article($pxvbar_article)
                 {
                      $this->pxvbar_article = $pxvbar_article;
                 }

             public function setType_article($type_article)
                 {
                      $this->type_article = $type_article;
                 }

             public function setTabidp($tabidp)
                 {
                      $this->tabidp = $tabidp;
                 }

             public function setTabqnt($tabqnt)
                 {
                      $this->tabqnt = $tabqnt;
                 }

             public function setTabmts($tabmts)
                 {
                      $this->tabmts = $tabmts;
                 }

             public function setPxrv($pxrv)
                 {
                      $this->pxrv = $pxrv;
                 }

             public function setNbrstockage($nbrstockage)
                 {
                      $this->nbrstockage = $nbrstockage;
                 }

             public function setTabidstock($tabidstock)
                 {
                      $this->tabidstock = $tabidstock;
                 }

             public function setFlag_article($flag_article)
                 {
                      $this->flag_article = $flag_article;
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

             public function setPath_photo($path_photo)
                 {
                      $this->path_photo = $path_photo;
                 }

             public function setMaster($master)
                 {
                      $this->master = $master;
                 }



    /*==================Methode list=====================*/
           }
  
   



   ?>



