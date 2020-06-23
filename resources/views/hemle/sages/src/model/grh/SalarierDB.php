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
  use src\entities\Salarier;

    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:15:24=====================*/
        class SalarierDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count salarier =====================*/
					public function countSalarier(){
					                       return count($this->listeSalarier());
					        }

				/*================== Get salarier =====================*/
					public function getSalarier($id){
					$sql = "SELECT * FROM salarier WHERE salarier.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste salarier =====================*/
					public function listeSalarier(){
					                $sql = "SELECT * FROM salarier";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one salarier =====================*/

				/*================== One to many salarier =====================*/

               public function addSalarier($salarier){
                        $sql = "INSERT INTO salarier  VALUES(
                                     null
,
                                     '".$salarier->getType_salaire()."'
,
                                     '".$salarier->getSalaire_base()."'
,
                                     '".$salarier->getNature_salaire_base()."'
,
                                     '".$salarier->getTemps_travail()."'
,
                                     '".$salarier->getNbr_heur_travail()."'
,
                                     '".$salarier->getFreq_travail()."'
,
                                     '".$salarier->getPrix_heur_sup()."'
,
                                     '".$salarier->getContrat_id()."'
,
                                     '".$salarier->getPoste_id()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatesalarier($salarier){
                        $sql = "UPDATE salarier  SET  salarier.type_salaire =  '".$salarier->getType_salaire()."' ,salarier.salaire_base =  '".$salarier->getSalaire_base()."' ,salarier.nature_salaire_base =  '".$salarier->getNature_salaire_base()."' ,salarier.temps_travail =  '".$salarier->getTemps_travail()."' ,salarier.nbr_heur_travail =  '".$salarier->getNbr_heur_travail()."' ,salarier.freq_travail =  '".$salarier->getFreq_travail()."' ,salarier.prix_heur_sup =  '".$salarier->getPrix_heur_sup()."' ,salarier.contrat_id =  '".$salarier->getContrat_id()."' ,salarier.poste_id =  '".$salarier->getPoste_id()."'   WHERE   salarier.id =  ".$salarier->getId()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete salarier =====================*/
					public function deleteSalarier($id){
					$sql = "DELETE FROM salarier WHERE salarier.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If salarier existe =====================*/
					public function ifSalarierexiste($type_salaire){
					$sql = "SELECT * FROM salarier WHERE type_salaire='".$type_salaire."' ";
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



