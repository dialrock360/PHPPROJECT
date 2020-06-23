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
  use src\entities\V_salarier;

    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:15:26=====================*/
        class V_salarierDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count v_salarier =====================*/
					public function countV_salarier(){
					                       return count($this->listeV_salarier());
					        }

				/*================== Get v_salarier =====================*/
					public function getV_salarier($id){
					$sql = "SELECT * FROM v_salarier WHERE v_salarier.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste v_salarier =====================*/
					public function listeV_salarier(){
					                $sql = "SELECT * FROM v_salarier";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one v_salarier =====================*/

				/*================== One to many v_salarier =====================*/

               public function addV_salarier($v_salarier){
                        $sql = "INSERT INTO v_salarier  VALUES(
                                     '".$v_salarier->getId()."'
,
                                     '".$v_salarier->getType_salaire()."'
,
                                     '".$v_salarier->getSalaire_base()."'
,
                                     '".$v_salarier->getNature_salaire_base()."'
,
                                     '".$v_salarier->getTemps_travail()."'
,
                                     '".$v_salarier->getNbr_heur_travail()."'
,
                                     '".$v_salarier->getFreq_travail()."'
,
                                     '".$v_salarier->getPrix_heur_sup()."'
,
                                     '".$v_salarier->getContrat_id()."'
,
                                     '".$v_salarier->getPoste_id()."'
,
                                     '".$v_salarier->getEtat_contrat()."'
,
                                     '".$v_salarier->getType_contrat_id()."'
,
                                     '".$v_salarier->getPersonne_id()."'
,
                                     '".$v_salarier->getDepartement_id()."'
,
                                     '".$v_salarier->getModalite_contrat_id()."'
,
                                     '".$v_salarier->getNom_type_contrat()."'
,
                                     '".$v_salarier->getNom_personne()."'
,
                                     '".$v_salarier->getPrenom_personne()."'
,
                                     '".$v_salarier->getGenre_personne()."'
,
                                     '".$v_salarier->getDate_naiss_personne()."'
,
                                     '".$v_salarier->getLieu_naiss_personne()."'
,
                                     '".$v_salarier->getNationalite_personne()."'
,
                                     '".$v_salarier->getTypepiece_personne()."'
,
                                     '".$v_salarier->getNumpiece_personne()."'
,
                                     '".$v_salarier->getPhoto_personne()."'
,
                                     '".$v_salarier->getAdress()."'
,
                                     '".$v_salarier->getTel()."'
,
                                     '".$v_salarier->getCodepostal()."'
,
                                     '".$v_salarier->getInfo_personne()."'
,
                                     '".$v_salarier->getStatus_id()."'
,
                                     '".$v_salarier->getNom_status()."'
,
                                     '".$v_salarier->getId_service()."'
,
                                     '".$v_salarier->getNom_departement()."'
,
                                     '".$v_salarier->getNom_modalite()."'
,
                                     '".$v_salarier->getNom_poste()."'
,
                                     '".$v_salarier->getCategorie_proffessionelle()."'
,
                                     '".$v_salarier->getSalaire_base_poste()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatev_salarier($v_salarier){
                        $sql = "UPDATE v_salarier  SET  v_salarier.id =  '".$v_salarier->getId()."' ,v_salarier.type_salaire =  '".$v_salarier->getType_salaire()."' ,v_salarier.salaire_base =  '".$v_salarier->getSalaire_base()."' ,v_salarier.nature_salaire_base =  '".$v_salarier->getNature_salaire_base()."' ,v_salarier.temps_travail =  '".$v_salarier->getTemps_travail()."' ,v_salarier.nbr_heur_travail =  '".$v_salarier->getNbr_heur_travail()."' ,v_salarier.freq_travail =  '".$v_salarier->getFreq_travail()."' ,v_salarier.prix_heur_sup =  '".$v_salarier->getPrix_heur_sup()."' ,v_salarier.contrat_id =  '".$v_salarier->getContrat_id()."' ,v_salarier.poste_id =  '".$v_salarier->getPoste_id()."' ,v_salarier.etat_contrat =  '".$v_salarier->getEtat_contrat()."' ,v_salarier.type_contrat_id =  '".$v_salarier->getType_contrat_id()."' ,v_salarier.personne_id =  '".$v_salarier->getPersonne_id()."' ,v_salarier.departement_id =  '".$v_salarier->getDepartement_id()."' ,v_salarier.modalite_contrat_id =  '".$v_salarier->getModalite_contrat_id()."' ,v_salarier.nom_type_contrat =  '".$v_salarier->getNom_type_contrat()."' ,v_salarier.nom_personne =  '".$v_salarier->getNom_personne()."' ,v_salarier.prenom_personne =  '".$v_salarier->getPrenom_personne()."' ,v_salarier.genre_personne =  '".$v_salarier->getGenre_personne()."' ,v_salarier.date_naiss_personne =  '".$v_salarier->getDate_naiss_personne()."' ,v_salarier.lieu_naiss_personne =  '".$v_salarier->getLieu_naiss_personne()."' ,v_salarier.nationalite_personne =  '".$v_salarier->getNationalite_personne()."' ,v_salarier.typepiece_personne =  '".$v_salarier->getTypepiece_personne()."' ,v_salarier.numpiece_personne =  '".$v_salarier->getNumpiece_personne()."' ,v_salarier.photo_personne =  '".$v_salarier->getPhoto_personne()."' ,v_salarier.adress =  '".$v_salarier->getAdress()."' ,v_salarier.tel =  '".$v_salarier->getTel()."' ,v_salarier.codepostal =  '".$v_salarier->getCodepostal()."' ,v_salarier.info_personne =  '".$v_salarier->getInfo_personne()."' ,v_salarier.status_id =  '".$v_salarier->getStatus_id()."' ,v_salarier.nom_status =  '".$v_salarier->getNom_status()."' ,v_salarier.id_service =  '".$v_salarier->getId_service()."' ,v_salarier.nom_departement =  '".$v_salarier->getNom_departement()."' ,v_salarier.nom_modalite =  '".$v_salarier->getNom_modalite()."' ,v_salarier.nom_poste =  '".$v_salarier->getNom_poste()."' ,v_salarier.categorie_proffessionelle =  '".$v_salarier->getCategorie_proffessionelle()."' ,v_salarier.salaire_base_poste =  '".$v_salarier->getSalaire_base_poste()."'   WHERE    ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete v_salarier =====================*/
					public function deleteV_salarier($id){
					$sql = "DELETE FROM v_salarier WHERE v_salarier.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If v_salarier existe =====================*/
					public function ifV_salarierexiste($id){
					$sql = "SELECT * FROM v_salarier WHERE id='".$id."' ";
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



