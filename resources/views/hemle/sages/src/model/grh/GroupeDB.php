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
  use src\entities\Groupe;

    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:15:21=====================*/
        class GroupeDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count groupe =====================*/
					public function countGroupe(){
					                       return count($this->listeGroupe());
					        }

				/*================== Get groupe =====================*/
					public function getGroupe($id){
					$sql = "SELECT * FROM groupe WHERE groupe.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste groupe =====================*/
					public function listeGroupe(){
					                $sql = "SELECT * FROM groupe";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one groupe =====================*/
					public function listeGroupeByServiceId($id){
					$sql = "SELECT * FROM groupe WHERE  groupe.id_service = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== One to many groupe =====================*/
					public function listeServiceByGroupeId($id_service){
					$sql = "SELECT * FROM service WHERE  service.id_service = ".$id_service."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

               public function addGroupe($groupe){
                        $sql = "INSERT INTO groupe  VALUES(
                                     null
,
                                     ".$groupe->getId_service()."
,
                                     '".$groupe->getNom_groupe()."'
,
                                     '".$groupe->getNbr_membre_groupe()."'
,
                                     '".$groupe->getInfo_groupe()."'
,
                                     '".$groupe->getFlag_groupe()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updategroupe($groupe){
                        $sql = "UPDATE groupe  SET  groupe.id_service =  '".$groupe->getId_service()."' ,groupe.nom_groupe =  '".$groupe->getNom_groupe()."' ,groupe.nbr_membre_groupe =  '".$groupe->getNbr_membre_groupe()."' ,groupe.info_groupe =  '".$groupe->getInfo_groupe()."' ,groupe.flag_groupe =  '".$groupe->getFlag_groupe()."'   WHERE   groupe.id =  ".$groupe->getId()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete groupe =====================*/
					public function deleteGroupe($id){
					$sql = "DELETE FROM groupe WHERE groupe.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If groupe existe =====================*/
					public function ifGroupeexiste($id_service){
					$sql = "SELECT * FROM groupe WHERE id_service='".$id_service."' ";
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



