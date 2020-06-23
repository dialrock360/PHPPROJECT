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
  use src\entities\V_fiche_de_presense;

    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:15:25=====================*/
        class V_fiche_de_presenseDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count v_fiche_de_presense =====================*/
					public function countV_fiche_de_presense(){
					                       return count($this->listeV_fiche_de_presense());
					        }

				/*================== Get v_fiche_de_presense =====================*/
					public function getV_fiche_de_presense($id){
					$sql = "SELECT * FROM v_fiche_de_presense WHERE v_fiche_de_presense.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste v_fiche_de_presense =====================*/
					public function listeV_fiche_de_presense(){
					                $sql = "SELECT * FROM v_fiche_de_presense";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one v_fiche_de_presense =====================*/

				/*================== One to many v_fiche_de_presense =====================*/

               public function addV_fiche_de_presense($v_fiche_de_presense){
                        $sql = "INSERT INTO v_fiche_de_presense  VALUES(
                                     '".$v_fiche_de_presense->getId()."'
,
                                     '".$v_fiche_de_presense->getPresent()."'
,
                                     '".$v_fiche_de_presense->getAnne_fiche()."'
,
                                     '".$v_fiche_de_presense->getDate_fiche()."'
,
                                     '".$v_fiche_de_presense->getHeur_arrive()."'
,
                                     '".$v_fiche_de_presense->getHeur_depart()."'
,
                                     '".$v_fiche_de_presense->getNbr_heur()."'
,
                                     '".$v_fiche_de_presense->getFiche_paie_id()."'
,
                                     '".$v_fiche_de_presense->getContrat_id()."'
,
                                     '".$v_fiche_de_presense->getPoste_id()."'
,
                                     '".$v_fiche_de_presense->getType_contrat_id()."'
,
                                     '".$v_fiche_de_presense->getPersonne_id()."'
,
                                     '".$v_fiche_de_presense->getDepartement_id()."'
,
                                     '".$v_fiche_de_presense->getNom_personne()."'
,
                                     '".$v_fiche_de_presense->getPrenom_personne()."'
,
                                     '".$v_fiche_de_presense->getGenre_personne()."'
,
                                     '".$v_fiche_de_presense->getNumpiece_personne()."'
,
                                     '".$v_fiche_de_presense->getPhoto_personne()."'
,
                                     '".$v_fiche_de_presense->getTel()."'
,
                                     '".$v_fiche_de_presense->getStatus_id()."'
,
                                     '".$v_fiche_de_presense->getNom_status()."'
,
                                     '".$v_fiche_de_presense->getId_service()."'
,
                                     '".$v_fiche_de_presense->getNom_departement()."'
,
                                     '".$v_fiche_de_presense->getNom_poste()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatev_fiche_de_presense($v_fiche_de_presense){
                        $sql = "UPDATE v_fiche_de_presense  SET  v_fiche_de_presense.id =  '".$v_fiche_de_presense->getId()."' ,v_fiche_de_presense.present =  '".$v_fiche_de_presense->getPresent()."' ,v_fiche_de_presense.anne_fiche =  '".$v_fiche_de_presense->getAnne_fiche()."' ,v_fiche_de_presense.date_fiche =  '".$v_fiche_de_presense->getDate_fiche()."' ,v_fiche_de_presense.heur_arrive =  '".$v_fiche_de_presense->getHeur_arrive()."' ,v_fiche_de_presense.heur_depart =  '".$v_fiche_de_presense->getHeur_depart()."' ,v_fiche_de_presense.nbr_heur =  '".$v_fiche_de_presense->getNbr_heur()."' ,v_fiche_de_presense.fiche_paie_id =  '".$v_fiche_de_presense->getFiche_paie_id()."' ,v_fiche_de_presense.contrat_id =  '".$v_fiche_de_presense->getContrat_id()."' ,v_fiche_de_presense.poste_id =  '".$v_fiche_de_presense->getPoste_id()."' ,v_fiche_de_presense.type_contrat_id =  '".$v_fiche_de_presense->getType_contrat_id()."' ,v_fiche_de_presense.personne_id =  '".$v_fiche_de_presense->getPersonne_id()."' ,v_fiche_de_presense.departement_id =  '".$v_fiche_de_presense->getDepartement_id()."' ,v_fiche_de_presense.nom_personne =  '".$v_fiche_de_presense->getNom_personne()."' ,v_fiche_de_presense.prenom_personne =  '".$v_fiche_de_presense->getPrenom_personne()."' ,v_fiche_de_presense.genre_personne =  '".$v_fiche_de_presense->getGenre_personne()."' ,v_fiche_de_presense.numpiece_personne =  '".$v_fiche_de_presense->getNumpiece_personne()."' ,v_fiche_de_presense.photo_personne =  '".$v_fiche_de_presense->getPhoto_personne()."' ,v_fiche_de_presense.tel =  '".$v_fiche_de_presense->getTel()."' ,v_fiche_de_presense.status_id =  '".$v_fiche_de_presense->getStatus_id()."' ,v_fiche_de_presense.nom_status =  '".$v_fiche_de_presense->getNom_status()."' ,v_fiche_de_presense.id_service =  '".$v_fiche_de_presense->getId_service()."' ,v_fiche_de_presense.nom_departement =  '".$v_fiche_de_presense->getNom_departement()."' ,v_fiche_de_presense.nom_poste =  '".$v_fiche_de_presense->getNom_poste()."'   WHERE    ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete v_fiche_de_presense =====================*/
					public function deleteV_fiche_de_presense($id){
					$sql = "DELETE FROM v_fiche_de_presense WHERE v_fiche_de_presense.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If v_fiche_de_presense existe =====================*/
					public function ifV_fiche_de_presenseexiste($id){
					$sql = "SELECT * FROM v_fiche_de_presense WHERE id='".$id."' ";
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



