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
    /*==================Classe creer par Samane samane_ui_admin le 14-11-2019 20:58:53=====================*/
        class V_personne
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $nom_personne;
             private  $prenom_personne;
             private  $genre_personne;
             private  $date_naiss_personne;
             private  $lieu_naiss_personne;
             private  $nationalite_personne;
             private  $typepiece_personne;
             private  $numpiece_personne;
             private  $photo_personne;
             private  $flag_personne;
             private  $adress;
             private  $tel;
             private  $codepostal;
             private  $info_personne;
             private  $flag_contact;
             private  $personne_id;
             private  $status_id;
             private  $nom_status;


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getNom_personne()
                 {
                     return $this->nom_personne;
                 }

             public function getPrenom_personne()
                 {
                     return $this->prenom_personne;
                 }

             public function getGenre_personne()
                 {
                     return $this->genre_personne;
                 }

             public function getDate_naiss_personne()
                 {
                     return $this->date_naiss_personne;
                 }

             public function getLieu_naiss_personne()
                 {
                     return $this->lieu_naiss_personne;
                 }

             public function getNationalite_personne()
                 {
                     return $this->nationalite_personne;
                 }

             public function getTypepiece_personne()
                 {
                     return $this->typepiece_personne;
                 }

             public function getNumpiece_personne()
                 {
                     return $this->numpiece_personne;
                 }

             public function getPhoto_personne()
                 {
                     return $this->photo_personne;
                 }

             public function getFlag_personne()
                 {
                     return $this->flag_personne;
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

             public function getInfo_personne()
                 {
                     return $this->info_personne;
                 }

             public function getFlag_contact()
                 {
                     return $this->flag_contact;
                 }

             public function getPersonne_id()
                 {
                     return $this->personne_id;
                 }

             public function getStatus_id()
                 {
                     return $this->status_id;
                 }

             public function getNom_status()
                 {
                     return $this->nom_status;
                 }


    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setNom_personne($nom_personne)
                 {
                      $this->nom_personne = $nom_personne;
                 }

             public function setPrenom_personne($prenom_personne)
                 {
                      $this->prenom_personne = $prenom_personne;
                 }

             public function setGenre_personne($genre_personne)
                 {
                      $this->genre_personne = $genre_personne;
                 }

             public function setDate_naiss_personne($date_naiss_personne)
                 {
                      $this->date_naiss_personne = $date_naiss_personne;
                 }

             public function setLieu_naiss_personne($lieu_naiss_personne)
                 {
                      $this->lieu_naiss_personne = $lieu_naiss_personne;
                 }

             public function setNationalite_personne($nationalite_personne)
                 {
                      $this->nationalite_personne = $nationalite_personne;
                 }

             public function setTypepiece_personne($typepiece_personne)
                 {
                      $this->typepiece_personne = $typepiece_personne;
                 }

             public function setNumpiece_personne($numpiece_personne)
                 {
                      $this->numpiece_personne = $numpiece_personne;
                 }

             public function setPhoto_personne($photo_personne)
                 {
                      $this->photo_personne = $photo_personne;
                 }

             public function setFlag_personne($flag_personne)
                 {
                      $this->flag_personne = $flag_personne;
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

             public function setInfo_personne($info_personne)
                 {
                      $this->info_personne = $info_personne;
                 }

             public function setFlag_contact($flag_contact)
                 {
                      $this->flag_contact = $flag_contact;
                 }

             public function setPersonne_id($personne_id)
                 {
                      $this->personne_id = $personne_id;
                 }

             public function setStatus_id($status_id)
                 {
                      $this->status_id = $status_id;
                 }

             public function setNom_status($nom_status)
                 {
                      $this->nom_status = $nom_status;
                 }



    /*==================Methode list=====================*/
           }
  
   



   ?>



