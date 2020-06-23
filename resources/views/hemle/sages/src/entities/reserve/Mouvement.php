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
        class Mouvement
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_service;
             private  $id_type_mouvement;
             private  $id_commercial;
             private  $id_users;
             private  $date_mouvement;
             private  $object_mouvement;
             private  $content_mouvement;
             private  $total_ht_mouvement;
             private  $tva_mouvement;
             private  $totalttc_mouvement;
             private  $totalltr_mouvement;
             private  $avance_mouvement;
             private  $reste_mouvement;
             private  $flag_mouvement;


             private  $personne;
             private  $service;
             private  $type_mouvement;
             private  $users;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                 $this->personne = new Personne();
                 $this->service = new Service();
                 $this->type_mouvement = new Type_mouvement();
                 $this->users = new Users();
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

             public function getId_type_mouvement()
                 {
                     return $this->id_type_mouvement;
                 }

             public function getId_commercial()
                 {
                     return $this->id_commercial;
                 }

             public function getId_users()
                 {
                     return $this->id_users;
                 }

             public function getDate_mouvement()
                 {
                     return $this->date_mouvement;
                 }

             public function getObject_mouvement()
                 {
                     return $this->object_mouvement;
                 }

             public function getContent_mouvement()
                 {
                     return $this->content_mouvement;
                 }

             public function getTotal_ht_mouvement()
                 {
                     return $this->total_ht_mouvement;
                 }

             public function getTva_mouvement()
                 {
                     return $this->tva_mouvement;
                 }

             public function getTotalttc_mouvement()
                 {
                     return $this->totalttc_mouvement;
                 }

             public function getTotalltr_mouvement()
                 {
                     return $this->totalltr_mouvement;
                 }

             public function getAvance_mouvement()
                 {
                     return $this->avance_mouvement;
                 }

             public function getReste_mouvement()
                 {
                     return $this->reste_mouvement;
                 }

             public function getFlag_mouvement()
                 {
                     return $this->flag_mouvement;
                 }


             public function getPersonne()
                 {
                     return $this->personne;
                 }
             public function getService()
                 {
                     return $this->service;
                 }
             public function getType_mouvement()
                 {
                     return $this->type_mouvement;
                 }
             public function getUsers()
                 {
                     return $this->users;
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

             public function setId_type_mouvement($id_type_mouvement)
                 {
                      $this->id_type_mouvement = $id_type_mouvement;
                 }

             public function setId_commercial($id_commercial)
                 {
                      $this->id_commercial = $id_commercial;
                 }

             public function setId_users($id_users)
                 {
                      $this->id_users = $id_users;
                 }

             public function setDate_mouvement($date_mouvement)
                 {
                      $this->date_mouvement = $date_mouvement;
                 }

             public function setObject_mouvement($object_mouvement)
                 {
                      $this->object_mouvement = $object_mouvement;
                 }

             public function setContent_mouvement($content_mouvement)
                 {
                      $this->content_mouvement = $content_mouvement;
                 }

             public function setTotal_ht_mouvement($total_ht_mouvement)
                 {
                      $this->total_ht_mouvement = $total_ht_mouvement;
                 }

             public function setTva_mouvement($tva_mouvement)
                 {
                      $this->tva_mouvement = $tva_mouvement;
                 }

             public function setTotalttc_mouvement($totalttc_mouvement)
                 {
                      $this->totalttc_mouvement = $totalttc_mouvement;
                 }

             public function setTotalltr_mouvement($totalltr_mouvement)
                 {
                      $this->totalltr_mouvement = $totalltr_mouvement;
                 }

             public function setAvance_mouvement($avance_mouvement)
                 {
                      $this->avance_mouvement = $avance_mouvement;
                 }

             public function setReste_mouvement($reste_mouvement)
                 {
                      $this->reste_mouvement = $reste_mouvement;
                 }

             public function setFlag_mouvement($flag_mouvement)
                 {
                      $this->flag_mouvement = $flag_mouvement;
                 }



             public function setPersonne($personne)
                 {
                      $this->personne = $personne;
                 }

             public function setService($service)
                 {
                      $this->service = $service;
                 }

             public function setType_mouvement($type_mouvement)
                 {
                      $this->type_mouvement = $type_mouvement;
                 }

             public function setUsers($users)
                 {
                      $this->users = $users;
                 }

     

    /*==================Methode list=====================*/
           }
  
   



   ?>



