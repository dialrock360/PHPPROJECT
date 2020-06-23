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
  use src\entities\Conger;

    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:15:18=====================*/
        class CongerDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count conger =====================*/
					public function countConger(){
					                       return count($this->listeConger());
					        }

				/*================== Get conger =====================*/
					public function getConger($id){
					$sql = "SELECT * FROM conger WHERE conger.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste conger =====================*/
					public function listeConger(){
					                $sql = "SELECT * FROM conger";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one conger =====================*/
					public function listeCongerBySalarierId($id){
					$sql = "SELECT * FROM conger WHERE  conger.salarier_id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }
					public function listeCongerByType_congerId($id){
					$sql = "SELECT * FROM conger WHERE  conger.type_conger_id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== One to many conger =====================*/
					public function listeSalarierByCongerId($salarier_id){
					$sql = "SELECT * FROM salarier WHERE  salarier.salarier_id = ".$salarier_id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }
					public function listeType_congerByCongerId($type_conger_id){
					$sql = "SELECT * FROM type_conger WHERE  type_conger.type_conger_id = ".$type_conger_id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

               public function addConger($conger){
                        $sql = "INSERT INTO conger  VALUES(
                                     ".$conger->getSalarier_id()."
,
                                     ".$conger->getType_conger_id()."
,
                                     '".$conger->getId()."'
,
                                     '".$conger->getDate_debut()."'
,
                                     '".$conger->getDate_fin()."'
,
                                     '".$conger->getStatus_conger()."'
,
                                     '".$conger->getJustificatif()."'
,
                                     '".$conger->getConger_payer()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updateconger($conger){
                        $sql = "UPDATE conger  SET  conger.id =  '".$conger->getId()."' ,conger.date_debut =  '".$conger->getDate_debut()."' ,conger.date_fin =  '".$conger->getDate_fin()."' ,conger.status_conger =  '".$conger->getStatus_conger()."' ,conger.justificatif =  '".$conger->getJustificatif()."' ,conger.conger_payer =  '".$conger->getConger_payer()."' ,conger.salarier_id =  '".$conger->getSalarier_id()."' ,conger.type_conger_id =  '".$conger->getType_conger_id()."'   WHERE    ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete conger =====================*/
					public function deleteConger($id){
					$sql = "DELETE FROM conger WHERE conger.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If conger existe =====================*/
					public function ifCongerexiste($id){
					$sql = "SELECT * FROM conger WHERE id='".$id."' ";
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



