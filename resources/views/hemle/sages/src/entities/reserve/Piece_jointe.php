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
    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:23=====================*/
        class Piece_jointe
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_tache;
             private  $path_piece_jointe;


             private  $tache;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                 $this->tache = new Tache();
                 }


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_tache()
                 {
                     return $this->id_tache;
                 }

             public function getPath_piece_jointe()
                 {
                     return $this->path_piece_jointe;
                 }


             public function getTache()
                 {
                     return $this->tache;
                 }
     

    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_tache($id_tache)
                 {
                      $this->id_tache = $id_tache;
                 }

             public function setPath_piece_jointe($path_piece_jointe)
                 {
                      $this->path_piece_jointe = $path_piece_jointe;
                 }



             public function setTache($tache)
                 {
                      $this->tache = $tache;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



