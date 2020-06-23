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
  use src\entities\Fiche_paie;

    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:15:20=====================*/
        class Fiche_paieDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count fiche_paie =====================*/
					public function countFiche_paie(){
					                       return count($this->listeFiche_paie());
					        }

				/*================== Get fiche_paie =====================*/
					public function getFiche_paie($id){
					$sql = "SELECT * FROM fiche_paie WHERE fiche_paie.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste fiche_paie =====================*/
					public function listeFiche_paie(){
					                $sql = "SELECT * FROM fiche_paie";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one fiche_paie =====================*/
					public function listeFiche_paieBySalarierId($id){
					$sql = "SELECT * FROM fiche_paie WHERE  fiche_paie.salarier_id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== One to many fiche_paie =====================*/
					public function listeSalarierByFiche_paieId($salarier_id){
					$sql = "SELECT * FROM salarier WHERE  salarier.salarier_id = ".$salarier_id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

               public function addFiche_paie($fiche_paie){
                        $sql = "INSERT INTO fiche_paie  VALUES(
                                     null
,
                                     ".$fiche_paie->getSalarier_id()."
,
                                     '".$fiche_paie->getDate_fiche_paie()."'
,
                                     '".$fiche_paie->getMois_payer()."'
,
                                     '".$fiche_paie->getEst_payer()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatefiche_paie($fiche_paie){
                        $sql = "UPDATE fiche_paie  SET  fiche_paie.date_fiche_paie =  '".$fiche_paie->getDate_fiche_paie()."' ,fiche_paie.mois_payer =  '".$fiche_paie->getMois_payer()."' ,fiche_paie.est_payer =  '".$fiche_paie->getEst_payer()."' ,fiche_paie.salarier_id =  '".$fiche_paie->getSalarier_id()."'   WHERE   fiche_paie.id =  ".$fiche_paie->getId()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete fiche_paie =====================*/
					public function deleteFiche_paie($id){
					$sql = "DELETE FROM fiche_paie WHERE fiche_paie.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If fiche_paie existe =====================*/
					public function ifFiche_paieexiste($date_fiche_paie){
					$sql = "SELECT * FROM fiche_paie WHERE date_fiche_paie='".$date_fiche_paie."' ";
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



