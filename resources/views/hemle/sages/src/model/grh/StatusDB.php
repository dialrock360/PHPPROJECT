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
  use src\entities\Status;

    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:15:24=====================*/
        class StatusDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count status =====================*/
					public function countStatus(){
					                       return count($this->listeStatus());
					        }

				/*================== Get status =====================*/
					public function getStatus($id){
					$sql = "SELECT * FROM status WHERE status.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste status =====================*/
					public function listeStatus(){
					                $sql = "SELECT * FROM status";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one status =====================*/

				/*================== One to many status =====================*/

               public function addStatus($status){
                        $sql = "INSERT INTO status  VALUES(
                                     null
,
                                     '".$status->getNom_status()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatestatus($status){
                        $sql = "UPDATE status  SET  status.nom_status =  '".$status->getNom_status()."'   WHERE   status.id =  ".$status->getId()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete status =====================*/
					public function deleteStatus($id){
					$sql = "DELETE FROM status WHERE status.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If status existe =====================*/
					public function ifStatusexiste($nom_status){
					$sql = "SELECT * FROM status WHERE nom_status='".$nom_status."' ";
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



