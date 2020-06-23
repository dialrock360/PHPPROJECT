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
        class Commercial_groupe
            {

    /*==================Attribut list=====================*/
                
             private  $id_commercial;
             private  $id_groupe;


             private  $commercial;
             private  $groupe;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                 $this->commercial = new Commercial();
                 $this->groupe = new Groupe();
                 }


    /*==================Getter list=====================*/
                
             public function getId_commercial()
                 {
                     return $this->id_commercial;
                 }

             public function getId_groupe()
                 {
                     return $this->id_groupe;
                 }


             public function getCommercial()
                 {
                     return $this->commercial;
                 }
             public function getGroupe()
                 {
                     return $this->groupe;
                 }
     

    /*==================Setter list=====================*/
                
             public function setId_commercial($id_commercial)
                 {
                      $this->id_commercial = $id_commercial;
                 }

             public function setId_groupe($id_groupe)
                 {
                      $this->id_groupe = $id_groupe;
                 }



             public function setCommercial($commercial)
                 {
                      $this->commercial = $commercial;
                 }

             public function setGroupe($groupe)
                 {
                      $this->groupe = $groupe;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



