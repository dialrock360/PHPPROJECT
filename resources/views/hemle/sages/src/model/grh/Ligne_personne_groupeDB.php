<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



     namespace src\model;
use libs\system\Model;
  use src\entities\Ligne_personne_groupe;

    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:21=====================*/
        class Ligne_personne_groupeDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count ligne_personne_groupe =====================*/
					public function countLigne_personne_groupe(){
					                       return count($this->listeLigne_personne_groupe());
					        }

				/*================== Get ligne_personne_groupe =====================*/
					public function getLigne_personne_groupe($id){
					$sql = "SELECT * FROM ligne_personne_groupe WHERE ligne_personne_groupe.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste ligne_personne_groupe =====================*/
					public function listeLigne_personne_groupe(){
					                $sql = "SELECT * FROM ligne_personne_groupe";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one ligne_personne_groupe =====================*/

				/*================== One to many ligne_personne_groupe =====================*/

               public function addLigne_personne_groupe($ligne_personne_groupe){
                        $sql = "INSERT INTO ligne_personne_groupe  VALUES(
                                     '".$ligne_personne_groupe->getId_personne()."'
,
                                     '".$ligne_personne_groupe->getId_groupe()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updateligne_personne_groupe($ligne_personne_groupe){
                        $sql = "UPDATE ligne_personne_groupe  SET  ligne_personne_groupe.id_personne: =  ".$ligne_personne_groupe->getId_personne()." ,ligne_personne_groupe.id_groupe: =  ".$ligne_personne_groupe->getId_groupe()."   WHERE   ligne_personne_groupe.id_personne: =  ".$ligne_personne_groupe->getId_personne()."  AND ligne_personne_groupe.id_groupe: =  ".$ligne_personne_groupe->getId_groupe()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete ligne_personne_groupe =====================*/
					public function deleteLigne_personne_groupe($id){
					$sql = "DELETE FROM ligne_personne_groupe WHERE ligne_personne_groupe.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If ligne_personne_groupe existe =====================*/
					public function ifLigne_personne_groupeexiste($){
					$sql = "SELECT * FROM ligne_personne_groupe WHERE ='".$."' ";
					if($this->db != null)
					      {
					       if($this->db->query($sql)->fetch() != null)
					         {
					                 return true;
					         }
					      } 
					return false;
					                }


           }
  
   



   ?>



