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
  use src\entities\Fiche_de_jours_ferier;

    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:15:20=====================*/
        class Fiche_de_jours_ferierDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count fiche_de_jours_ferier =====================*/
					public function countFiche_de_jours_ferier(){
					                       return count($this->listeFiche_de_jours_ferier());
					        }

				/*================== Get fiche_de_jours_ferier =====================*/
					public function getFiche_de_jours_ferier($id){
					$sql = "SELECT * FROM fiche_de_jours_ferier WHERE fiche_de_jours_ferier.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste fiche_de_jours_ferier =====================*/
					public function listeFiche_de_jours_ferier(){
					                $sql = "SELECT * FROM fiche_de_jours_ferier";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one fiche_de_jours_ferier =====================*/

				/*================== One to many fiche_de_jours_ferier =====================*/

               public function addFiche_de_jours_ferier($fiche_de_jours_ferier){
                        $sql = "INSERT INTO fiche_de_jours_ferier  VALUES(
                                     null
,
                                     '".$fiche_de_jours_ferier->getAnnee_exercice()."'
,
                                     '".$fiche_de_jours_ferier->getNbr_jour_ferie()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatefiche_de_jours_ferier($fiche_de_jours_ferier){
                        $sql = "UPDATE fiche_de_jours_ferier  SET  fiche_de_jours_ferier.annee_exercice =  '".$fiche_de_jours_ferier->getAnnee_exercice()."' ,fiche_de_jours_ferier.nbr_jour_ferie =  '".$fiche_de_jours_ferier->getNbr_jour_ferie()."'   WHERE   fiche_de_jours_ferier.id =  ".$fiche_de_jours_ferier->getId()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete fiche_de_jours_ferier =====================*/
					public function deleteFiche_de_jours_ferier($id){
					$sql = "DELETE FROM fiche_de_jours_ferier WHERE fiche_de_jours_ferier.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If fiche_de_jours_ferier existe =====================*/
					public function ifFiche_de_jours_ferierexiste($annee_exercice){
					$sql = "SELECT * FROM fiche_de_jours_ferier WHERE annee_exercice='".$annee_exercice."' ";
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



