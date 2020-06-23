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
  use src\entities\Ligne_equipe_personne;

    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:15:21=====================*/
        class Ligne_equipe_personneDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count ligne_equipe_personne =====================*/
					public function countLigne_equipe_personne(){
					                       return count($this->listeLigne_equipe_personne());
					        }

				/*================== Get ligne_equipe_personne =====================*/
					public function getLigne_equipe_personne($id){
					$sql = "SELECT * FROM ligne_equipe_personne WHERE ligne_equipe_personne.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste ligne_equipe_personne =====================*/
					public function listeLigne_equipe_personne(){
					                $sql = "SELECT * FROM ligne_equipe_personne";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one ligne_equipe_personne =====================*/

				/*================== One to many ligne_equipe_personne =====================*/

               public function addLigne_equipe_personne($ligne_equipe_personne){
                        $sql = "INSERT INTO ligne_equipe_personne  VALUES(
                                     '".$ligne_equipe_personne->getId_employee()."'
,
                                     '".$ligne_equipe_personne->getId_equipe()."'
,
                                     '".$ligne_equipe_personne->getMaindoeuve_unitaire()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updateligne_equipe_personne($ligne_equipe_personne){
                        $sql = "UPDATE ligne_equipe_personne  SET  ligne_equipe_personne.id_employee: =  ".$ligne_equipe_personne->getId_employee()." ,ligne_equipe_personne.id_equipe: =  ".$ligne_equipe_personne->getId_equipe()." ,ligne_equipe_personne.maindoeuve_unitaire =  '".$ligne_equipe_personne->getMaindoeuve_unitaire()."'   WHERE   ligne_equipe_personne.id_employee: =  ".$ligne_equipe_personne->getId_employee()."  AND ligne_equipe_personne.id_equipe: =  ".$ligne_equipe_personne->getId_equipe()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete ligne_equipe_personne =====================*/
					public function deleteLigne_equipe_personne($id){
					$sql = "DELETE FROM ligne_equipe_personne WHERE ligne_equipe_personne.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If ligne_equipe_personne existe =====================*/
					public function ifLigne_equipe_personneexiste($maindoeuve_unitaire){
					$sql = "SELECT * FROM ligne_equipe_personne WHERE maindoeuve_unitaire='".$maindoeuve_unitaire."' ";
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



