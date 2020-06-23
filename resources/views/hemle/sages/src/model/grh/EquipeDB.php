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
  use src\entities\Equipe;

    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:15:19=====================*/
        class EquipeDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count equipe =====================*/
					public function countEquipe(){
					                       return count($this->listeEquipe());
					        }

				/*================== Get equipe =====================*/
					public function getEquipe($id){
					$sql = "SELECT * FROM equipe WHERE equipe.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste equipe =====================*/
					public function listeEquipe(){
					                $sql = "SELECT * FROM equipe";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one equipe =====================*/
					public function listeEquipeByPersonneId($id){
					$sql = "SELECT * FROM equipe WHERE  equipe.id_chef_equipe = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }
					public function listeEquipeByProjetId($id){
					$sql = "SELECT * FROM equipe WHERE  equipe.pojet_id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== One to many equipe =====================*/
					public function listePersonneByEquipeId($id_chef_equipe){
					$sql = "SELECT * FROM personne WHERE  personne.id_chef_equipe = ".$id_chef_equipe."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }
					public function listeProjetByEquipeId($pojet_id){
					$sql = "SELECT * FROM projet WHERE  projet.pojet_id = ".$pojet_id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

               public function addEquipe($equipe){
                        $sql = "INSERT INTO equipe  VALUES(
                                     null
,
                                     ".$equipe->getId_chef_equipe()."
,
                                     ".$equipe->getPojet_id()."
,
                                     '".$equipe->getNom_equipe()."'
,
                                     '".$equipe->getCout_maindoeuve()."'
,
                                     '".$equipe->getNbr_membre()."'
,
                                     '".$equipe->getInfo_equipe()."'
,
                                     '".$equipe->getFlag_equipe()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updateequipe($equipe){
                        $sql = "UPDATE equipe  SET  equipe.nom_equipe =  '".$equipe->getNom_equipe()."' ,equipe.cout_maindoeuve =  '".$equipe->getCout_maindoeuve()."' ,equipe.nbr_membre =  '".$equipe->getNbr_membre()."' ,equipe.info_equipe =  '".$equipe->getInfo_equipe()."' ,equipe.id_chef_equipe =  '".$equipe->getId_chef_equipe()."' ,equipe.pojet_id =  '".$equipe->getPojet_id()."' ,equipe.flag_equipe =  '".$equipe->getFlag_equipe()."'   WHERE   equipe.id =  ".$equipe->getId()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete equipe =====================*/
					public function deleteEquipe($id){
					$sql = "DELETE FROM equipe WHERE equipe.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If equipe existe =====================*/
					public function ifEquipeexiste($nom_equipe){
					$sql = "SELECT * FROM equipe WHERE nom_equipe='".$nom_equipe."' ";
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



