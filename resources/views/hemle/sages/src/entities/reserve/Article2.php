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
    /*==================Classe creer par Samane samane_ui_admin le 19-09-2019 19:29:21=====================*/
        class Article2
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_service;
             private  $id_categorie;
             private  $nom_article;
             private  $pxa_article;
             private  $pxv_article;
             private  $pxvbar_article;
             private  $type_article;
             private  $tabidp;
             private  $tabqnt;
             private  $tabmts;
             private  $pxrv;
             private  $flag_article;


             private  $categorie;
             private  $service;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                 $this->categorie = new Categorie();
                 $this->service = new Service();
                 }


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_service()
                 {
                     return $this->id_service;
                 }

             public function getId_categorie()
                 {
                     return $this->id_categorie;
                 }

             public function getNom_article()
                 {
                     return $this->nom_article;
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

             public function getFlag_article()
                 {
                     return $this->flag_article;
                 }


             public function getCategorie()
                 {
                     return $this->categorie;
                 }
             public function getService()
                 {
                     return $this->service;
                 }
     

    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_service($id_service)
                 {
                      $this->id_service = $id_service;
                 }

             public function setId_categorie($id_categorie)
                 {
                      $this->id_categorie = $id_categorie;
                 }

             public function setNom_article($nom_article)
                 {
                      $this->nom_article = $nom_article;
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

             public function setFlag_article($flag_article)
                 {
                      $this->flag_article = $flag_article;
                 }



             public function setCategorie($categorie)
                 {
                      $this->categorie = $categorie;
                 }

             public function setService($service)
                 {
                      $this->service = $service;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



