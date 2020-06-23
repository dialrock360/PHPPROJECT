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
  use src\entities\V_fiche_paie;

    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:15:25=====================*/
        class V_fiche_paieDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count v_fiche_paie =====================*/
					public function countV_fiche_paie(){
					                       return count($this->listeV_fiche_paie());
					        }

				/*================== Get v_fiche_paie =====================*/
					public function getV_fiche_paie($id){
					$sql = "SELECT * FROM v_fiche_paie WHERE v_fiche_paie.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste v_fiche_paie =====================*/
					public function listeV_fiche_paie(){
					                $sql = "SELECT * FROM v_fiche_paie";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one v_fiche_paie =====================*/

				/*================== One to many v_fiche_paie =====================*/

               public function addV_fiche_paie($v_fiche_paie){
                        $sql = "INSERT INTO v_fiche_paie  VALUES(
                                     '".$v_fiche_paie->getId()."'
,
                                     '".$v_fiche_paie->getDate_fiche_paie()."'
,
                                     '".$v_fiche_paie->getMois_payer()."'
,
                                     '".$v_fiche_paie->getEst_payer()."'
,
                                     '".$v_fiche_paie->getSalarier_id()."'
,
                                     '".$v_fiche_paie->getType_salaire()."'
,
                                     '".$v_fiche_paie->getSalaire_base()."'
,
                                     '".$v_fiche_paie->getNature_salaire_base()."'
,
                                     '".$v_fiche_paie->getTemps_travail()."'
,
                                     '".$v_fiche_paie->getNbr_heur_travail()."'
,
                                     '".$v_fiche_paie->getFreq_travail()."'
,
                                     '".$v_fiche_paie->getPrix_heur_sup()."'
,
                                     '".$v_fiche_paie->getContrat_id()."'
,
                                     '".$v_fiche_paie->getPoste_id()."'
,
                                     '".$v_fiche_paie->getEtat_contrat()."'
,
                                     '".$v_fiche_paie->getType_contrat_id()."'
,
                                     '".$v_fiche_paie->getPersonne_id()."'
,
                                     '".$v_fiche_paie->getDepartement_id()."'
,
                                     '".$v_fiche_paie->getNom_type_contrat()."'
,
                                     '".$v_fiche_paie->getNom_personne()."'
,
                                     '".$v_fiche_paie->getPrenom_personne()."'
,
                                     '".$v_fiche_paie->getGenre_personne()."'
,
                                     '".$v_fiche_paie->getDate_naiss_personne()."'
,
                                     '".$v_fiche_paie->getLieu_naiss_personne()."'
,
                                     '".$v_fiche_paie->getNationalite_personne()."'
,
                                     '".$v_fiche_paie->getTypepiece_personne()."'
,
                                     '".$v_fiche_paie->getNumpiece_personne()."'
,
                                     '".$v_fiche_paie->getPhoto_personne()."'
,
                                     '".$v_fiche_paie->getAdress()."'
,
                                     '".$v_fiche_paie->getTel()."'
,
                                     '".$v_fiche_paie->getCodepostal()."'
,
                                     '".$v_fiche_paie->getInfo_personne()."'
,
                                     '".$v_fiche_paie->getStatus_id()."'
,
                                     '".$v_fiche_paie->getNom_status()."'
,
                                     '".$v_fiche_paie->getId_service()."'
,
                                     '".$v_fiche_paie->getNom_departement()."'
,
                                     '".$v_fiche_paie->getNom_modalite()."'
,
                                     '".$v_fiche_paie->getNom_poste()."'
,
                                     '".$v_fiche_paie->getCategorie_proffessionelle()."'
,
                                     '".$v_fiche_paie->getSalaire_base_poste()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatev_fiche_paie($v_fiche_paie){
                        $sql = "UPDATE v_fiche_paie  SET  v_fiche_paie.id =  '".$v_fiche_paie->getId()."' ,v_fiche_paie.date_fiche_paie =  '".$v_fiche_paie->getDate_fiche_paie()."' ,v_fiche_paie.mois_payer =  '".$v_fiche_paie->getMois_payer()."' ,v_fiche_paie.est_payer =  '".$v_fiche_paie->getEst_payer()."' ,v_fiche_paie.salarier_id =  '".$v_fiche_paie->getSalarier_id()."' ,v_fiche_paie.type_salaire =  '".$v_fiche_paie->getType_salaire()."' ,v_fiche_paie.salaire_base =  '".$v_fiche_paie->getSalaire_base()."' ,v_fiche_paie.nature_salaire_base =  '".$v_fiche_paie->getNature_salaire_base()."' ,v_fiche_paie.temps_travail =  '".$v_fiche_paie->getTemps_travail()."' ,v_fiche_paie.nbr_heur_travail =  '".$v_fiche_paie->getNbr_heur_travail()."' ,v_fiche_paie.freq_travail =  '".$v_fiche_paie->getFreq_travail()."' ,v_fiche_paie.prix_heur_sup =  '".$v_fiche_paie->getPrix_heur_sup()."' ,v_fiche_paie.contrat_id =  '".$v_fiche_paie->getContrat_id()."' ,v_fiche_paie.poste_id =  '".$v_fiche_paie->getPoste_id()."' ,v_fiche_paie.etat_contrat =  '".$v_fiche_paie->getEtat_contrat()."' ,v_fiche_paie.type_contrat_id =  '".$v_fiche_paie->getType_contrat_id()."' ,v_fiche_paie.personne_id =  '".$v_fiche_paie->getPersonne_id()."' ,v_fiche_paie.departement_id =  '".$v_fiche_paie->getDepartement_id()."' ,v_fiche_paie.nom_type_contrat =  '".$v_fiche_paie->getNom_type_contrat()."' ,v_fiche_paie.nom_personne =  '".$v_fiche_paie->getNom_personne()."' ,v_fiche_paie.prenom_personne =  '".$v_fiche_paie->getPrenom_personne()."' ,v_fiche_paie.genre_personne =  '".$v_fiche_paie->getGenre_personne()."' ,v_fiche_paie.date_naiss_personne =  '".$v_fiche_paie->getDate_naiss_personne()."' ,v_fiche_paie.lieu_naiss_personne =  '".$v_fiche_paie->getLieu_naiss_personne()."' ,v_fiche_paie.nationalite_personne =  '".$v_fiche_paie->getNationalite_personne()."' ,v_fiche_paie.typepiece_personne =  '".$v_fiche_paie->getTypepiece_personne()."' ,v_fiche_paie.numpiece_personne =  '".$v_fiche_paie->getNumpiece_personne()."' ,v_fiche_paie.photo_personne =  '".$v_fiche_paie->getPhoto_personne()."' ,v_fiche_paie.adress =  '".$v_fiche_paie->getAdress()."' ,v_fiche_paie.tel =  '".$v_fiche_paie->getTel()."' ,v_fiche_paie.codepostal =  '".$v_fiche_paie->getCodepostal()."' ,v_fiche_paie.info_personne =  '".$v_fiche_paie->getInfo_personne()."' ,v_fiche_paie.status_id =  '".$v_fiche_paie->getStatus_id()."' ,v_fiche_paie.nom_status =  '".$v_fiche_paie->getNom_status()."' ,v_fiche_paie.id_service =  '".$v_fiche_paie->getId_service()."' ,v_fiche_paie.nom_departement =  '".$v_fiche_paie->getNom_departement()."' ,v_fiche_paie.nom_modalite =  '".$v_fiche_paie->getNom_modalite()."' ,v_fiche_paie.nom_poste =  '".$v_fiche_paie->getNom_poste()."' ,v_fiche_paie.categorie_proffessionelle =  '".$v_fiche_paie->getCategorie_proffessionelle()."' ,v_fiche_paie.salaire_base_poste =  '".$v_fiche_paie->getSalaire_base_poste()."'   WHERE    ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete v_fiche_paie =====================*/
					public function deleteV_fiche_paie($id){
					$sql = "DELETE FROM v_fiche_paie WHERE v_fiche_paie.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If v_fiche_paie existe =====================*/
					public function ifV_fiche_paieexiste($id){
					$sql = "SELECT * FROM v_fiche_paie WHERE id='".$id."' ";
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



