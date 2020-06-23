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
  use src\entities\Tache;

    /*==================Classe creer par Samane samane_ui_admin le 05-11-2019 10:09:13=====================*/
        class TacheDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count tache =====================*/
					public function countTache(){
					                       return count($this->listeTache());
					        }

				/*================== Get tache =====================*/
					public function getTache($id){
					$sql = "SELECT * FROM tache WHERE tache.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste tache =====================*/
					public function listeTache(){
					                $sql = "SELECT * FROM tache";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one tache =====================*/
					public function listeTacheByProjetId($id){
					$sql = "SELECT * FROM tache WHERE  tache.id_projet = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== One to many tache =====================*/
					public function listeProjetByTacheId($id_projet){
					$sql = "SELECT * FROM projet WHERE  projet.id_projet = ".$id_projet."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

               public function addTache($tache){
                        $sql = "INSERT INTO tache  VALUES(
                                     null
,
                                     ".$tache->getId_projet()."
,
                                     '".$tache->getNom_tache()."'
,
                                     '".$tache->getLs_membre_tache()."'
,
                                     '".$tache->getDate_tache()."'
,
                                     '".$tache->getDatelimit_tache()."'
,
                                     '".$tache->getEtiquette_tache()."'
,
                                     '".$tache->getEtat_tache()."'
,
                                     '".$tache->getInfo_tache()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatetache($tache){
                        $sql = "UPDATE tache  SET  tache.id_projet =  '".$tache->getId_projet()."' ,tache.nom_tache =  '".$tache->getNom_tache()."' ,tache.ls_membre_tache =  '".$tache->getLs_membre_tache()."' ,tache.date_tache =  '".$tache->getDate_tache()."' ,tache.datelimit_tache =  '".$tache->getDatelimit_tache()."' ,tache.etiquette_tache =  '".$tache->getEtiquette_tache()."' ,tache.etat_tache =  '".$tache->getEtat_tache()."' ,tache.info_tache =  '".$tache->getInfo_tache()."'   WHERE   tache.id =  ".$tache->getId()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete tache =====================*/
					public function deleteTache($id){
					$sql = "DELETE FROM tache WHERE tache.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If tache existe =====================*/
					public function ifTacheexiste($id_projet){
					$sql = "SELECT * FROM tache WHERE id_projet='".$id_projet."' ";
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



