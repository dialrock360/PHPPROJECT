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
        class Flux_stock
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_article;
             private  $id_stock;
             private  $id_conditionement_article;
             private  $date_flux_stock;
             private  $type_flux_stock;
             private  $qnt_flux_stock;
             private  $pu_flux_stock;


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
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

             public function getDate_flux_stock()
                 {
                     return $this->date_flux_stock;
                 }

             public function getType_flux_stock()
                 {
                     return $this->type_flux_stock;
                 }

             public function getQnt_flux_stock()
                 {
                     return $this->qnt_flux_stock;
                 }

             public function getPu_flux_stock()
                 {
                     return $this->pu_flux_stock;
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

             public function setId_stock($id_stock)
                 {
                      $this->id_stock = $id_stock;
                 }

             public function setId_conditionement_article($id_conditionement_article)
                 {
                      $this->id_conditionement_article = $id_conditionement_article;
                 }

             public function setDate_flux_stock($date_flux_stock)
                 {
                      $this->date_flux_stock = $date_flux_stock;
                 }

             public function setType_flux_stock($type_flux_stock)
                 {
                      $this->type_flux_stock = $type_flux_stock;
                 }

             public function setQnt_flux_stock($qnt_flux_stock)
                 {
                      $this->qnt_flux_stock = $qnt_flux_stock;
                 }

             public function setPu_flux_stock($pu_flux_stock)
                 {
                      $this->pu_flux_stock = $pu_flux_stock;
                 }



    /*==================Methode list=====================*/
           }
  
   



   ?>



