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
  use src\entities\Jour_ferier;

    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:15:21=====================*/
        class Jour_ferierDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count jour_ferier =====================*/
					public function countJour_ferier(){
					                       return count($this->listeJour_ferier());
					        }

				/*================== Get jour_ferier =====================*/
					public function getJour_ferier($id){
					$sql = "SELECT * FROM jour_ferier WHERE jour_ferier.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste jour_ferier =====================*/
					public function listeJour_ferier(){
					                $sql = "SELECT * FROM jour_ferier";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one jour_ferier =====================*/
					public function listeJour_ferierByFiche_de_jours_ferierId($id){
					$sql = "SELECT * FROM jour_ferier WHERE  jour_ferier.fiche_jour_id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== One to many jour_ferier =====================*/
					public function listeFiche_de_jours_ferierByJour_ferierId($fiche_jour_id){
					$sql = "SELECT * FROM fiche_de_jours_ferier WHERE  fiche_de_jours_ferier.fiche_jour_id = ".$fiche_jour_id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

               public function addJour_ferier($jour_ferier){
                        $sql = "INSERT INTO jour_ferier  VALUES(
                                     null
,
                                     ".$jour_ferier->getFiche_jour_id()."
,
                                     '".$jour_ferier->getDate_jour()."'
,
                                     '".$jour_ferier->getDescription()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatejour_ferier($jour_ferier){
                        $sql = "UPDATE jour_ferier  SET  jour_ferier.date_jour =  '".$jour_ferier->getDate_jour()."' ,jour_ferier.description =  '".$jour_ferier->getDescription()."' ,jour_ferier.fiche_jour_id =  '".$jour_ferier->getFiche_jour_id()."'   WHERE   jour_ferier.id =  ".$jour_ferier->getId()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete jour_ferier =====================*/
					public function deleteJour_ferier($id){
					$sql = "DELETE FROM jour_ferier WHERE jour_ferier.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If jour_ferier existe =====================*/
					public function ifJour_ferierexiste($date_jour){
					$sql = "SELECT * FROM jour_ferier WHERE date_jour='".$date_jour."' ";
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



