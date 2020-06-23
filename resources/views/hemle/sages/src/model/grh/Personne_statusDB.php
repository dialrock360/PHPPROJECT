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
  use src\entities\Personne_status;

    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:15:23=====================*/
        class Personne_statusDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count personne_status =====================*/
					public function countPersonne_status(){
					                       return count($this->listePersonne_status());
					        }

				/*================== Get personne_status =====================*/
					public function getPersonne_status($id){
					$sql = "SELECT * FROM personne_status WHERE personne_status.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste personne_status =====================*/
					public function listePersonne_status(){
					                $sql = "SELECT * FROM personne_status";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one personne_status =====================*/
					public function listePersonne_statusByPersonneId($id){
					$sql = "SELECT * FROM personne_status WHERE  personne_status.personne_id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }
					public function listePersonne_statusByStatusId($id){
					$sql = "SELECT * FROM personne_status WHERE  personne_status.status_id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== One to many personne_status =====================*/
					public function listePersonneByPersonne_statusId($personne_id){
					$sql = "SELECT * FROM personne WHERE  personne.personne_id = ".$personne_id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }
					public function listeStatusByPersonne_statusId($status_id){
					$sql = "SELECT * FROM status WHERE  status.status_id = ".$status_id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

               public function addPersonne_status($personne_status){
                        $sql = "INSERT INTO personne_status  VALUES(
                                     '".$personne_status->getPersonne_id()."'
,
                                     '".$personne_status->getStatus_id()."'
,
                                     ".$personne_status->getPersonne_id()."
,
                                     ".$personne_status->getStatus_id()."
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatepersonne_status($personne_status){
                        $sql = "UPDATE personne_status  SET  personne_status.personne_id: =  ".$personne_status->getPersonne_id()." ,personne_status.status_id: =  ".$personne_status->getStatus_id()."   WHERE   personne_status.personne_id: =  ".$personne_status->getPersonne_id()."  AND personne_status.status_id: =  ".$personne_status->getStatus_id()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete personne_status =====================*/
					public function deletePersonne_status($id){
					$sql = "DELETE FROM personne_status WHERE personne_status.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If personne_status existe =====================*/
					public function ifPersonne_statusexiste($){
					$sql = "SELECT * FROM personne_status WHERE ='".$."' ";
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



