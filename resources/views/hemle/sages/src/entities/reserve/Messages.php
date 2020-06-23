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
        class Messages
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_service;
             private  $date_message;
             private  $object_message;
             private  $pj_message;
             private  $origine_message;
             private  $cible_message;
             private  $attribute_10;
             private  $attribute_11;
             private  $id_origine;
             private  $id_sible;
             private  $content_message;


             private  $service;


    /*================== Constructor =====================*/
              public function __construct()
                 {
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

             public function getDate_message()
                 {
                     return $this->date_message;
                 }

             public function getObject_message()
                 {
                     return $this->object_message;
                 }

             public function getPj_message()
                 {
                     return $this->pj_message;
                 }

             public function getOrigine_message()
                 {
                     return $this->origine_message;
                 }

             public function getCible_message()
                 {
                     return $this->cible_message;
                 }

             public function getAttribute_10()
                 {
                     return $this->attribute_10;
                 }

             public function getAttribute_11()
                 {
                     return $this->attribute_11;
                 }

             public function getId_origine()
                 {
                     return $this->id_origine;
                 }

             public function getId_sible()
                 {
                     return $this->id_sible;
                 }

             public function getContent_message()
                 {
                     return $this->content_message;
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

             public function setDate_message($date_message)
                 {
                      $this->date_message = $date_message;
                 }

             public function setObject_message($object_message)
                 {
                      $this->object_message = $object_message;
                 }

             public function setPj_message($pj_message)
                 {
                      $this->pj_message = $pj_message;
                 }

             public function setOrigine_message($origine_message)
                 {
                      $this->origine_message = $origine_message;
                 }

             public function setCible_message($cible_message)
                 {
                      $this->cible_message = $cible_message;
                 }

             public function setAttribute_10($attribute_10)
                 {
                      $this->attribute_10 = $attribute_10;
                 }

             public function setAttribute_11($attribute_11)
                 {
                      $this->attribute_11 = $attribute_11;
                 }

             public function setId_origine($id_origine)
                 {
                      $this->id_origine = $id_origine;
                 }

             public function setId_sible($id_sible)
                 {
                      $this->id_sible = $id_sible;
                 }

             public function setContent_message($content_message)
                 {
                      $this->content_message = $content_message;
                 }



             public function setService($service)
                 {
                      $this->service = $service;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



