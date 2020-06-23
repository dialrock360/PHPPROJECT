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
  use src\entities\Commercial_status;

    /*==================Classe creer par Samane samane_ui_admin le 04-11-2019 21:48:22=====================*/
        class Commercial_statusDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count commercial_status =====================*/
					public function countCommercial_status(){
					                       return count($this->listeCommercial_status());
					        }

				/*================== Get commercial_status =====================*/
					public function getCommercial_status($id){
					$sql = "SELECT * FROM commercial_status WHERE commercial_status.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste commercial_status =====================*/
					public function listeCommercial_status(){
					                $sql = "SELECT * FROM commercial_status";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one commercial_status =====================*/
					public function listeCommercial_statusByCommercialId($id){
					$sql = "SELECT * FROM commercial_status WHERE  commercial_status.id_commercial = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }
					public function listeCommercial_statusByStatusId($id){
					$sql = "SELECT * FROM commercial_status WHERE  commercial_status.id_status = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== One to many commercial_status =====================*/
					public function listeCommercialByCommercial_statusId($id_commercial){
					$sql = "SELECT * FROM commercial WHERE  commercial.id_commercial = ".$id_commercial."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }
					public function listeStatusByCommercial_statusId($id_status){
					$sql = "SELECT * FROM status WHERE  status.id_status = ".$id_status."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

               public function addCommercial_status($commercial_status){
                        $sql = "INSERT INTO commercial_status  VALUES(
                                     '".$commercial_status->getId_commercial()."'
,
                                     '".$commercial_status->getId_status()."'
,
                                     ".$commercial_status->getId_commercial()."
,
                                     ".$commercial_status->getId_status()."
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatecommercial_status($commercial_status){
                        $sql = "UPDATE commercial_status  SET  commercial_status.id_commercial: =  ".$commercial_status->getId_commercial:()." ,commercial_status.id_status: =  ".$commercial_status->getId_status:()."   WHERE   commercial_status.id_commercial: =  ".$commercial_status->getId_commercial:()."  AND commercial_status.id_status: =  ".$commercial_status->getId_status:()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete commercial_status =====================*/
					public function deleteCommercial_status($id){
					$sql = "DELETE FROM commercial_status WHERE commercial_status.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If commercial_status existe =====================*/
					public function ifCommercial_statusexiste($){
					$sql = "SELECT * FROM commercial_status WHERE ='".$."' ";
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



