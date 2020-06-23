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
  use src\entities\Programme;

    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:15:23=====================*/
        class ProgrammeDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count programme =====================*/
					public function countProgramme(){
					                       return count($this->listeProgramme());
					        }

				/*================== Get programme =====================*/
					public function getProgramme($id){
					$sql = "SELECT * FROM programme WHERE programme.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste programme =====================*/
					public function listeProgramme(){
					                $sql = "SELECT * FROM programme";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one programme =====================*/
					public function listeProgrammeByServiceId($id){
					$sql = "SELECT * FROM programme WHERE  programme.id_service = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== One to many programme =====================*/
					public function listeServiceByProgrammeId($id_service){
					$sql = "SELECT * FROM service WHERE  service.id_service = ".$id_service."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

               public function addProgramme($programme){
                        $sql = "INSERT INTO programme  VALUES(
                                     null
,
                                     ".$programme->getId_service()."
,
                                     '".$programme->getNom_programme()."'
,
                                     '".$programme->getDate_programme()."'
,
                                     '".$programme->getDatefin_programme()."'
,
                                     '".$programme->getNbr_projet_programme()."'
,
                                     '".$programme->getEtat_programme()."'
,
                                     '".$programme->getModul_affecter()."'
,
                                     '".$programme->getFlag_programme()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updateprogramme($programme){
                        $sql = "UPDATE programme  SET  programme.nom_programme =  '".$programme->getNom_programme()."' ,programme.date_programme =  '".$programme->getDate_programme()."' ,programme.datefin_programme =  '".$programme->getDatefin_programme()."' ,programme.nbr_projet_programme =  '".$programme->getNbr_projet_programme()."' ,programme.etat_programme =  '".$programme->getEtat_programme()."' ,programme.id_service =  '".$programme->getId_service()."' ,programme.modul_affecter =  '".$programme->getModul_affecter()."' ,programme.flag_programme =  '".$programme->getFlag_programme()."'   WHERE   programme.id =  ".$programme->getId()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete programme =====================*/
					public function deleteProgramme($id){
					$sql = "DELETE FROM programme WHERE programme.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If programme existe =====================*/
					public function ifProgrammeexiste($nom_programme){
					$sql = "SELECT * FROM programme WHERE nom_programme='".$nom_programme."' ";
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



