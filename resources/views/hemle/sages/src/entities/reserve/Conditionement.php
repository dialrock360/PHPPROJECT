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
    /*==================Classe creer par Samane samane_ui_admin le 13-09-2019 23:41:08=====================*/
        class Conditionement
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $nom_conditionement;
             private  $nbr_utilisation;


    /*==================Getter list=====================*/
                
             public function getId()
                 {
                     return $this->id;
                 }

             public function getNom_conditionement()
                 {
                     return $this->nom_conditionement;
                 }


    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setNom_conditionement($nom_conditionement)
                 {
                      $this->nom_conditionement = $nom_conditionement;
                 }

            /**
             * @return mixed
             */
            public function getNbrUtilisation()
            {
                return $this->nbr_utilisation;
            }

            /**
             * @param mixed $nbr_utilisation
             */
            public function setNbrUtilisation($nbr_utilisation)
            {
                $this->nbr_utilisation = $nbr_utilisation;
            }



    /*==================Methode list=====================*/
           }
  
   



   ?>



