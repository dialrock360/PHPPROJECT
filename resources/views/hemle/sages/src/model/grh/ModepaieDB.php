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
  use src\entities\Modepaie;

    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:15:22=====================*/
        class ModepaieDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count modepaie =====================*/
					public function countModepaie(){
					                       return count($this->listeModepaie());
					        }

				/*================== Get modepaie =====================*/
					public function getModepaie($id){
					$sql = "SELECT * FROM modepaie WHERE modepaie.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste modepaie =====================*/
					public function listeModepaie(){
					                $sql = "SELECT * FROM modepaie";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one modepaie =====================*/
					public function listeModepaieBySalarierId($id){
					$sql = "SELECT * FROM modepaie WHERE  modepaie.salarier_id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== One to many modepaie =====================*/
					public function listeSalarierByModepaieId($salarier_id){
					$sql = "SELECT * FROM salarier WHERE  salarier.salarier_id = ".$salarier_id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

               public function addModepaie($modepaie){
                        $sql = "INSERT INTO modepaie  VALUES(
                                     null
,
                                     ".$modepaie->getSalarier_id()."
,
                                     '".$modepaie->getTypepaie()."'
,
                                     '".$modepaie->getDomiciliation()."'
,
                                     '".$modepaie->getIban()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatemodepaie($modepaie){
                        $sql = "UPDATE modepaie  SET  modepaie.typepaie =  '".$modepaie->getTypepaie()."' ,modepaie.domiciliation =  '".$modepaie->getDomiciliation()."' ,modepaie.iban =  '".$modepaie->getIban()."' ,modepaie.salarier_id =  '".$modepaie->getSalarier_id()."'   WHERE   modepaie.id =  ".$modepaie->getId()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete modepaie =====================*/
					public function deleteModepaie($id){
					$sql = "DELETE FROM modepaie WHERE modepaie.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If modepaie existe =====================*/
					public function ifModepaieexiste($typepaie){
					$sql = "SELECT * FROM modepaie WHERE typepaie='".$typepaie."' ";
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



