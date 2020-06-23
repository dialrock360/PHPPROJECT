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
  use src\entities\V_contrat;

    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:15:25=====================*/
        class V_contratDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count v_contrat =====================*/
					public function countV_contrat(){
					                       return count($this->listeV_contrat());
					        }

				/*================== Get v_contrat =====================*/
					public function getV_contrat($id){
					$sql = "SELECT * FROM v_contrat WHERE v_contrat.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste v_contrat =====================*/
					public function listeV_contrat(){
					                $sql = "SELECT * FROM v_contrat";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one v_contrat =====================*/

				/*================== One to many v_contrat =====================*/

               public function addV_contrat($v_contrat){
                        $sql = "INSERT INTO v_contrat  VALUES(
                                     '".$v_contrat->getId()."'
,
                                     '".$v_contrat->getMetier()."'
,
                                     '".$v_contrat->getCv_contrat()."'
,
                                     '".$v_contrat->getStatut_contrat()."'
,
                                     '".$v_contrat->getNumsecu_sire()."'
,
                                     '".$v_contrat->getDatedebut()."'
,
                                     '".$v_contrat->getDatefin()."'
,
                                     '".$v_contrat->getDuree_essai()."'
,
                                     '".$v_contrat->getAvantages_contrat()."'
,
                                     '".$v_contrat->getPreavie_demande_conger()."'
,
                                     '".$v_contrat->getNbr_jr_conge_par_mois_tavail()."'
,
                                     '".$v_contrat->getEtat_contrat()."'
,
                                     '".$v_contrat->getType_contrat_id()."'
,
                                     '".$v_contrat->getPersonne_id()."'
,
                                     '".$v_contrat->getDepartement_id()."'
,
                                     '".$v_contrat->getModalite_contrat_id()."'
,
                                     '".$v_contrat->getFlag_contract()."'
,
                                     '".$v_contrat->getNom_type_contrat()."'
,
                                     '".$v_contrat->getDetails()."'
,
                                     '".$v_contrat->getNom_personne()."'
,
                                     '".$v_contrat->getPrenom_personne()."'
,
                                     '".$v_contrat->getGenre_personne()."'
,
                                     '".$v_contrat->getDate_naiss_personne()."'
,
                                     '".$v_contrat->getLieu_naiss_personne()."'
,
                                     '".$v_contrat->getNationalite_personne()."'
,
                                     '".$v_contrat->getTypepiece_personne()."'
,
                                     '".$v_contrat->getNumpiece_personne()."'
,
                                     '".$v_contrat->getPhoto_personne()."'
,
                                     '".$v_contrat->getFlag_personne()."'
,
                                     '".$v_contrat->getAdress()."'
,
                                     '".$v_contrat->getTel()."'
,
                                     '".$v_contrat->getCodepostal()."'
,
                                     '".$v_contrat->getInfo_personne()."'
,
                                     '".$v_contrat->getFlag_contact()."'
,
                                     '".$v_contrat->getStatus_id()."'
,
                                     '".$v_contrat->getNom_status()."'
,
                                     '".$v_contrat->getId_service()."'
,
                                     '".$v_contrat->getNom_departement()."'
,
                                     '".$v_contrat->getNbr_employee()."'
,
                                     '".$v_contrat->getJour_ouvrable()."'
,
                                     '".$v_contrat->getId_chefdepartement()."'
,
                                     '".$v_contrat->getInfo_departement()."'
,
                                     '".$v_contrat->getFlag_departement()."'
,
                                     '".$v_contrat->getNom_modalite()."'
,
                                     '".$v_contrat->getClause_modalite()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatev_contrat($v_contrat){
                        $sql = "UPDATE v_contrat  SET  v_contrat.id =  '".$v_contrat->getId()."' ,v_contrat.metier =  '".$v_contrat->getMetier()."' ,v_contrat.cv_contrat =  '".$v_contrat->getCv_contrat()."' ,v_contrat.statut_contrat =  '".$v_contrat->getStatut_contrat()."' ,v_contrat.numsecu_sire =  '".$v_contrat->getNumsecu_sire()."' ,v_contrat.datedebut =  '".$v_contrat->getDatedebut()."' ,v_contrat.datefin =  '".$v_contrat->getDatefin()."' ,v_contrat.duree_essai =  '".$v_contrat->getDuree_essai()."' ,v_contrat.avantages_contrat =  '".$v_contrat->getAvantages_contrat()."' ,v_contrat.preavie_demande_conger =  '".$v_contrat->getPreavie_demande_conger()."' ,v_contrat.nbr_jr_conge_par_mois_tavail =  '".$v_contrat->getNbr_jr_conge_par_mois_tavail()."' ,v_contrat.etat_contrat =  '".$v_contrat->getEtat_contrat()."' ,v_contrat.type_contrat_id =  '".$v_contrat->getType_contrat_id()."' ,v_contrat.personne_id =  '".$v_contrat->getPersonne_id()."' ,v_contrat.departement_id =  '".$v_contrat->getDepartement_id()."' ,v_contrat.modalite_contrat_id =  '".$v_contrat->getModalite_contrat_id()."' ,v_contrat.flag_contract =  '".$v_contrat->getFlag_contract()."' ,v_contrat.nom_type_contrat =  '".$v_contrat->getNom_type_contrat()."' ,v_contrat.details =  '".$v_contrat->getDetails()."' ,v_contrat.nom_personne =  '".$v_contrat->getNom_personne()."' ,v_contrat.prenom_personne =  '".$v_contrat->getPrenom_personne()."' ,v_contrat.genre_personne =  '".$v_contrat->getGenre_personne()."' ,v_contrat.date_naiss_personne =  '".$v_contrat->getDate_naiss_personne()."' ,v_contrat.lieu_naiss_personne =  '".$v_contrat->getLieu_naiss_personne()."' ,v_contrat.nationalite_personne =  '".$v_contrat->getNationalite_personne()."' ,v_contrat.typepiece_personne =  '".$v_contrat->getTypepiece_personne()."' ,v_contrat.numpiece_personne =  '".$v_contrat->getNumpiece_personne()."' ,v_contrat.photo_personne =  '".$v_contrat->getPhoto_personne()."' ,v_contrat.flag_personne =  '".$v_contrat->getFlag_personne()."' ,v_contrat.adress =  '".$v_contrat->getAdress()."' ,v_contrat.tel =  '".$v_contrat->getTel()."' ,v_contrat.codepostal =  '".$v_contrat->getCodepostal()."' ,v_contrat.info_personne =  '".$v_contrat->getInfo_personne()."' ,v_contrat.flag_contact =  '".$v_contrat->getFlag_contact()."' ,v_contrat.status_id =  '".$v_contrat->getStatus_id()."' ,v_contrat.nom_status =  '".$v_contrat->getNom_status()."' ,v_contrat.id_service =  '".$v_contrat->getId_service()."' ,v_contrat.nom_departement =  '".$v_contrat->getNom_departement()."' ,v_contrat.nbr_employee =  '".$v_contrat->getNbr_employee()."' ,v_contrat.jour_ouvrable =  '".$v_contrat->getJour_ouvrable()."' ,v_contrat.id_chefdepartement =  '".$v_contrat->getId_chefdepartement()."' ,v_contrat.info_departement =  '".$v_contrat->getInfo_departement()."' ,v_contrat.flag_departement =  '".$v_contrat->getFlag_departement()."' ,v_contrat.nom_modalite =  '".$v_contrat->getNom_modalite()."' ,v_contrat.clause_modalite =  '".$v_contrat->getClause_modalite()."'   WHERE    ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete v_contrat =====================*/
					public function deleteV_contrat($id){
					$sql = "DELETE FROM v_contrat WHERE v_contrat.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If v_contrat existe =====================*/
					public function ifV_contratexiste($id){
					$sql = "SELECT * FROM v_contrat WHERE id='".$id."' ";
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



