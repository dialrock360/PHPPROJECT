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
    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:18=====================*/
        class Cordonnees
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $adress;
             private  $tel;
             private  $codepostal;
             private  $contact_urgent;
             private  $etat_civile;
             private  $nbr_conjoint;
             private  $nbr_enfant;
             private  $info_conjoint;
             private  $info_personne;
             private  $personne_id;
             private  $flag_contact;


             private  $personne;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                 $this->personne = new Personne();
                 }


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getAdress()
                 {
                     return $this->adress;
                 }

             public function getTel()
                 {
                     return $this->tel;
                 }

             public function getCodepostal()
                 {
                     return $this->codepostal;
                 }

             public function getContact_urgent()
                 {
                     return $this->contact_urgent;
                 }

             public function getEtat_civile()
                 {
                     return $this->etat_civile;
                 }

             public function getNbr_conjoint()
                 {
                     return $this->nbr_conjoint;
                 }

             public function getNbr_enfant()
                 {
                     return $this->nbr_enfant;
                 }

             public function getInfo_conjoint()
                 {
                     return $this->info_conjoint;
                 }

             public function getInfo_personne()
                 {
                     return $this->info_personne;
                 }

             public function getPersonne_id()
                 {
                     return $this->personne_id;
                 }

             public function getFlag_contact()
                 {
                     return $this->flag_contact;
                 }


             public function getPersonne()
                 {
                     return $this->personne;
                 }
     

    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setAdress($adress)
                 {
                      $this->adress = $adress;
                 }

             public function setTel($tel)
                 {
                      $this->tel = $tel;
                 }

             public function setCodepostal($codepostal)
                 {
                      $this->codepostal = $codepostal;
                 }

             public function setContact_urgent($contact_urgent)
                 {
                      $this->contact_urgent = $contact_urgent;
                 }

             public function setEtat_civile($etat_civile)
                 {
                      $this->etat_civile = $etat_civile;
                 }

             public function setNbr_conjoint($nbr_conjoint)
                 {
                      $this->nbr_conjoint = $nbr_conjoint;
                 }

             public function setNbr_enfant($nbr_enfant)
                 {
                      $this->nbr_enfant = $nbr_enfant;
                 }

             public function setInfo_conjoint($info_conjoint)
                 {
                      $this->info_conjoint = $info_conjoint;
                 }

             public function setInfo_personne($info_personne)
                 {
                      $this->info_personne = $info_personne;
                 }

             public function setPersonne_id($personne_id)
                 {
                      $this->personne_id = $personne_id;
                 }

             public function setFlag_contact($flag_contact)
                 {
                      $this->flag_contact = $flag_contact;
                 }



             public function setPersonne($personne)
                 {
                      $this->personne = $personne;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



