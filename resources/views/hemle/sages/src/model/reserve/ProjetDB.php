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
  use src\entities\Projet;

    /*==================Classe creer par Samane samane_ui_admin le 05-11-2019 10:09:13=====================*/
        class ProjetDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count projet =====================*/
					public function countProjet(){
					                       return count($this->listeProjet());
					        }

				/*================== Get projet =====================*/
					public function getProjet($id){
					$sql = "SELECT * FROM projet WHERE projet.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste projet =====================*/
					public function listeProjet(){
					                $sql = "SELECT * FROM projet";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one projet =====================*/
					public function listeProjetByEquipeId($id){
					$sql = "SELECT * FROM projet WHERE  projet.id_equipe = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }
					public function listeProjetByProgrammeId($id){
					$sql = "SELECT * FROM projet WHERE  projet.id_programme = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }
					public function listeProjetByType_projetId($id){
					$sql = "SELECT * FROM projet WHERE  projet.id_type_projet = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== One to many projet =====================*/
					public function listeEquipeByProjetId($id_equipe){
					$sql = "SELECT * FROM equipe WHERE  equipe.id_equipe = ".$id_equipe."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }
					public function listeProgrammeByProjetId($id_programme){
					$sql = "SELECT * FROM programme WHERE  programme.id_programme = ".$id_programme."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }
					public function listeType_projetByProjetId($id_type_projet){
					$sql = "SELECT * FROM type_projet WHERE  type_projet.id_type_projet = ".$id_type_projet."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

               public function addProjet($projet){
                        $sql = "INSERT INTO projet  VALUES(
                                     null
,
                                     ".$projet->getId_equipe()."
,
                                     ".$projet->getId_programme()."
,
                                     ".$projet->getId_type_projet()."
,
                                     '".$projet->getNom_projet()."'
,
                                     '".$projet->getCout_projet()."'
,
                                     '".$projet->getValeur_projet()."'
,
                                     '".$projet->getDate_projet()."'
,
                                     '".$projet->getDatefin_projet()."'
,
                                     '".$projet->getColor_projet()."'
,
                                     '".$projet->getEtat_projet()."'
,
                                     '".$projet->getFlag_projet()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updateprojet($projet){
                        $sql = "UPDATE projet  SET  projet.id_programme =  '".$projet->getId_programme()."' ,projet.id_type_projet =  '".$projet->getId_type_projet()."' ,projet.id_equipe =  '".$projet->getId_equipe()."' ,projet.nom_projet =  '".$projet->getNom_projet()."' ,projet.cout_projet =  '".$projet->getCout_projet()."' ,projet.valeur_projet =  '".$projet->getValeur_projet()."' ,projet.date_projet =  '".$projet->getDate_projet()."' ,projet.datefin_projet =  '".$projet->getDatefin_projet()."' ,projet.color_projet =  '".$projet->getColor_projet()."' ,projet.etat_projet =  '".$projet->getEtat_projet()."' ,projet.flag_projet =  '".$projet->getFlag_projet()."'   WHERE   projet.id =  ".$projet->getId()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete projet =====================*/
					public function deleteProjet($id){
					$sql = "DELETE FROM projet WHERE projet.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If projet existe =====================*/
					public function ifProjetexiste($id_programme){
					$sql = "SELECT * FROM projet WHERE id_programme='".$id_programme."' ";
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



