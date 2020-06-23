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
  use src\entities\Commercial_groupe;

    /*==================Classe creer par Samane samane_ui_admin le 04-11-2019 21:48:22=====================*/
        class Commercial_groupeDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count commercial_groupe =====================*/
					public function countCommercial_groupe(){
					                       return count($this->listeCommercial_groupe());
					        }

				/*================== Get commercial_groupe =====================*/
					public function getCommercial_groupe($id){
					$sql = "SELECT * FROM commercial_groupe WHERE commercial_groupe.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste commercial_groupe =====================*/
					public function listeCommercial_groupe(){
					                $sql = "SELECT * FROM commercial_groupe";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one commercial_groupe =====================*/
					public function listeCommercial_groupeByCommercialId($id){
					$sql = "SELECT * FROM commercial_groupe WHERE  commercial_groupe.id_commercial = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }
					public function listeCommercial_groupeByGroupeId($id){
					$sql = "SELECT * FROM commercial_groupe WHERE  commercial_groupe.id_groupe = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== One to many commercial_groupe =====================*/
					public function listeCommercialByCommercial_groupeId($id_commercial){
					$sql = "SELECT * FROM commercial WHERE  commercial.id_commercial = ".$id_commercial."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }
					public function listeGroupeByCommercial_groupeId($id_groupe){
					$sql = "SELECT * FROM groupe WHERE  groupe.id_groupe = ".$id_groupe."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

               public function addCommercial_groupe($commercial_groupe){
                        $sql = "INSERT INTO commercial_groupe  VALUES(
                                     '".$commercial_groupe->getId_commercial()."'
,
                                     '".$commercial_groupe->getId_groupe()."'
,
                                     ".$commercial_groupe->getId_commercial()."
,
                                     ".$commercial_groupe->getId_groupe()."
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatecommercial_groupe($commercial_groupe){
                        $sql = "UPDATE commercial_groupe  SET  commercial_groupe.id_commercial: =  ".$commercial_groupe->getId_commercial:()." ,commercial_groupe.id_groupe: =  ".$commercial_groupe->getId_groupe:()."   WHERE   commercial_groupe.id_commercial: =  ".$commercial_groupe->getId_commercial:()."  AND commercial_groupe.id_groupe: =  ".$commercial_groupe->getId_groupe:()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete commercial_groupe =====================*/
					public function deleteCommercial_groupe($id){
					$sql = "DELETE FROM commercial_groupe WHERE commercial_groupe.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If commercial_groupe existe =====================*/
					public function ifCommercial_groupeexiste($){
					$sql = "SELECT * FROM commercial_groupe WHERE ='".$."' ";
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



