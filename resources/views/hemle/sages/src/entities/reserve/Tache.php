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
    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:24=====================*/
        class Tache
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_projet;
             private  $nom_tache;
             private  $cout_tache;
             private  $date_tache;
             private  $datelimit_tache;
             private  $etiquette_tache;
             private  $etat_tache;
             private  $id_responsable;
             private  $info_tache;


             private  $projet;
             private  $ligne_equipe_personne;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                 $this->projet = new Projet();
                 $this->ligne_equipe_personne = new Ligne_equipe_personne();
                 }


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_projet()
                 {
                     return $this->id_projet;
                 }

             public function getNom_tache()
                 {
                     return $this->nom_tache;
                 }

             public function getCout_tache()
                 {
                     return $this->cout_tache;
                 }

             public function getDate_tache()
                 {
                     return $this->date_tache;
                 }

             public function getDatelimit_tache()
                 {
                     return $this->datelimit_tache;
                 }

             public function getEtiquette_tache()
                 {
                     return $this->etiquette_tache;
                 }

             public function getEtat_tache()
                 {
                     return $this->etat_tache;
                 }

             public function getId_responsable()
                 {
                     return $this->id_responsable;
                 }

             public function getInfo_tache()
                 {
                     return $this->info_tache;
                 }


             public function getProjet()
                 {
                     return $this->projet;
                 }
             public function getLigne_equipe_personne()
                 {
                     return $this->ligne_equipe_personne;
                 }
     

    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_projet($id_projet)
                 {
                      $this->id_projet = $id_projet;
                 }

             public function setNom_tache($nom_tache)
                 {
                      $this->nom_tache = $nom_tache;
                 }

             public function setCout_tache($cout_tache)
                 {
                      $this->cout_tache = $cout_tache;
                 }

             public function setDate_tache($date_tache)
                 {
                      $this->date_tache = $date_tache;
                 }

             public function setDatelimit_tache($datelimit_tache)
                 {
                      $this->datelimit_tache = $datelimit_tache;
                 }

             public function setEtiquette_tache($etiquette_tache)
                 {
                      $this->etiquette_tache = $etiquette_tache;
                 }

             public function setEtat_tache($etat_tache)
                 {
                      $this->etat_tache = $etat_tache;
                 }

             public function setId_responsable($id_responsable)
                 {
                      $this->id_responsable = $id_responsable;
                 }

             public function setInfo_tache($info_tache)
                 {
                      $this->info_tache = $info_tache;
                 }



             public function setProjet($projet)
                 {
                      $this->projet = $projet;
                 }

             public function setLigne_equipe_personne($ligne_equipe_personne)
                 {
                      $this->ligne_equipe_personne = $ligne_equipe_personne;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



