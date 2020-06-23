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
    /*==================Classe creer par Samane samane_ui_admin le 04-11-2019 21:46:58=====================*/
        class Commercial_status
            {

    /*==================Attribut list=====================*/
                
             private  $id_commercial;
             private  $id_status;


             private  $commercial;
             private  $status;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                 $this->commercial = new Commercial();
                 $this->status = new Status();
                 }


    /*==================Getter list=====================*/
                
             public function getId_commercial()
                 {
                     return $this->id_commercial;
                 }

             public function getId_status()
                 {
                     return $this->id_status;
                 }


             public function getCommercial()
                 {
                     return $this->commercial;
                 }
             public function getStatus()
                 {
                     return $this->status;
                 }
     

    /*==================Setter list=====================*/
                
             public function setId_commercial($id_commercial)
                 {
                      $this->id_commercial = $id_commercial;
                 }

             public function setId_status($id_status)
                 {
                      $this->id_status = $id_status;
                 }



             public function setCommercial($commercial)
                 {
                      $this->commercial = $commercial;
                 }

             public function setStatus($status)
                 {
                      $this->status = $status;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



