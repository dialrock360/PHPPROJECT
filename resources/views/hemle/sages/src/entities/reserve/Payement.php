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
    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:22=====================*/
        class Payement
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_mouvement;
             private  $type_payement;
             private  $mts_payement;
             private  $date_payement;
             private  $detail_payement;


             private  $mouvement;


    /*================== Constructor =====================*/
              public function __construct()
                 {
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

             public function getType_payement()
                 {
                     return $this->type_payement;
                 }

             public function getMts_payement()
                 {
                     return $this->mts_payement;
                 }

             public function getDate_payement()
                 {
                     return $this->date_payement;
                 }

             public function getDetail_payement()
                 {
                     return $this->detail_payement;
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

             public function setType_payement($type_payement)
                 {
                      $this->type_payement = $type_payement;
                 }

             public function setMts_payement($mts_payement)
                 {
                      $this->mts_payement = $mts_payement;
                 }

             public function setDate_payement($date_payement)
                 {
                      $this->date_payement = $date_payement;
                 }

             public function setDetail_payement($detail_payement)
                 {
                      $this->detail_payement = $detail_payement;
                 }



             public function setMouvement($mouvement)
                 {
                      $this->mouvement = $mouvement;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



