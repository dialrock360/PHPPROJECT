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
    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:19=====================*/
        class Equipe
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $nom_equipe;
             private  $cout_maindoeuve;
             private  $nbr_membre;
             private  $info_equipe;
             private  $id_chef_equipe;
             private  $pojet_id;
             private  $flag_equipe;


             private  $personne;
             private  $projet;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                 $this->personne = new Personne();
                 $this->projet = new Projet();
                 }


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getNom_equipe()
                 {
                     return $this->nom_equipe;
                 }

             public function getCout_maindoeuve()
                 {
                     return $this->cout_maindoeuve;
                 }

             public function getNbr_membre()
                 {
                     return $this->nbr_membre;
                 }

             public function getInfo_equipe()
                 {
                     return $this->info_equipe;
                 }

             public function getId_chef_equipe()
                 {
                     return $this->id_chef_equipe;
                 }

             public function getPojet_id()
                 {
                     return $this->pojet_id;
                 }

             public function getFlag_equipe()
                 {
                     return $this->flag_equipe;
                 }


             public function getPersonne()
                 {
                     return $this->personne;
                 }
             public function getProjet()
                 {
                     return $this->projet;
                 }
     

    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setNom_equipe($nom_equipe)
                 {
                      $this->nom_equipe = $nom_equipe;
                 }

             public function setCout_maindoeuve($cout_maindoeuve)
                 {
                      $this->cout_maindoeuve = $cout_maindoeuve;
                 }

             public function setNbr_membre($nbr_membre)
                 {
                      $this->nbr_membre = $nbr_membre;
                 }

             public function setInfo_equipe($info_equipe)
                 {
                      $this->info_equipe = $info_equipe;
                 }

             public function setId_chef_equipe($id_chef_equipe)
                 {
                      $this->id_chef_equipe = $id_chef_equipe;
                 }

             public function setPojet_id($pojet_id)
                 {
                      $this->pojet_id = $pojet_id;
                 }

             public function setFlag_equipe($flag_equipe)
                 {
                      $this->flag_equipe = $flag_equipe;
                 }



             public function setPersonne($personne)
                 {
                      $this->personne = $personne;
                 }

             public function setProjet($projet)
                 {
                      $this->projet = $projet;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



