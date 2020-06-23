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
  use src\entities\Commercial;

    /*==================Classe creer par Samane samane_ui_admin le 04-11-2019 21:48:22=====================*/
        class CommercialDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count commercial =====================*/
					public function countCommercial(){
					                       return count($this->listeCommercial());
					        }

				/*================== Get commercial =====================*/
					public function getCommercial($id){
					$sql = "SELECT * FROM commercial WHERE commercial.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste commercial =====================*/
					public function listeCommercial(){
					                $sql = "SELECT * FROM commercial";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one commercial =====================*/
					public function listeCommercialByServiceId($id){
					$sql = "SELECT * FROM commercial WHERE  commercial.id_service = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== One to many commercial =====================*/
					public function listeServiceByCommercialId($id_service){
					$sql = "SELECT * FROM service WHERE  service.id_service = ".$id_service."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

               public function addCommercial($commercial){
                        $sql = "INSERT INTO commercial  VALUES(
                                     null
,
                                     ".$commercial->getId_service()."
,
                                     '".$commercial->getAvatar_commercial()."'
,
                                     '".$commercial->getNom_commercial()."'
,
                                     '".$commercial->getTel_commercial()."'
,
                                     '".$commercial->getEmail_commercial()."'
,
                                     '".$commercial->getAdresse_commercial()."'
,
                                     '".$commercial->getLocalisation_commercial()."'
,
                                     '".$commercial->getInfo_commercial()."'
,
                                     '".$commercial->getFlag_commercial()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatecommercial($commercial){
                        $sql = "UPDATE commercial  SET  commercial.id_service =  '".$commercial->getId_service()."' ,commercial.avatar_commercial =  '".$commercial->getAvatar_commercial()."' ,commercial.nom_commercial =  '".$commercial->getNom_commercial()."' ,commercial.tel_commercial =  '".$commercial->getTel_commercial()."' ,commercial.email_commercial =  '".$commercial->getEmail_commercial()."' ,commercial.adresse_commercial =  '".$commercial->getAdresse_commercial()."' ,commercial.localisation_commercial =  '".$commercial->getLocalisation_commercial()."' ,commercial.info_commercial =  '".$commercial->getInfo_commercial()."' ,commercial.flag_commercial =  '".$commercial->getFlag_commercial()."'   WHERE   commercial.id =  ".$commercial->getId()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete commercial =====================*/
					public function deleteCommercial($id){
					$sql = "DELETE FROM commercial WHERE commercial.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If commercial existe =====================*/
					public function ifCommercialexiste($id_service){
					$sql = "SELECT * FROM commercial WHERE id_service='".$id_service."' ";
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



