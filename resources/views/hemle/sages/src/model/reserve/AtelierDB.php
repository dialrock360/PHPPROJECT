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
  use src\entities\Atelier;

    /*==================Classe creer par Samane samane_ui_admin le 23-10-2019 06:11:17=====================*/
        class AtelierDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count atelier =====================*/
					public function countAtelier(){
					                       return count($this->listeAtelier());
					        }

				/*================== Get atelier =====================*/
					public function getAtelier($id){
					$sql = "SELECT * FROM atelier WHERE atelier.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste atelier =====================*/
					public function listeAtelier(){
					                $sql = "SELECT * FROM atelier";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one atelier =====================*/
					public function listeAtelierByServiceId($id){
					$sql = "SELECT * FROM atelier WHERE  atelier.id_service = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== One to many atelier =====================*/
					public function listeServiceByAtelierId($id_service){
					$sql = "SELECT * FROM service WHERE  service.id_service = ".$id_service."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

               public function addAtelier($atelier){
                        $sql = "INSERT INTO atelier  VALUES(
                                     null
,
                                     ".$atelier->getId_service()."
,
                                     '".$atelier->getNom_atelier()."'
,
                                     '".$atelier->getLs_employee_atelier()."'
,
                                     '".$atelier->getCoutmaindoeuve_atelier()."'
,
                                     '".$atelier->getFlag_atelier()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updateatelier($atelier){
                        $sql = "UPDATE atelier  SET  atelier.id_service =  '".$atelier->getId_service()."' ,atelier.nom_atelier =  '".$atelier->getNom_atelier()."' ,atelier.ls_employee_atelier =  '".$atelier->getLs_employee_atelier()."' ,atelier.coutmaindoeuve_atelier =  '".$atelier->getCoutmaindoeuve_atelier()."' ,atelier.flag_atelier =  '".$atelier->getFlag_atelier()."'   WHERE   atelier.id =  ".$atelier->getId()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete atelier =====================*/
					public function deleteAtelier($id){
					$sql = "DELETE FROM atelier WHERE atelier.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If atelier existe =====================*/
					public function ifAtelierexiste($id_service){
					$sql = "SELECT * FROM atelier WHERE id_service='".$id_service."' ";
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



