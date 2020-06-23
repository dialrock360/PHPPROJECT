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
  use src\entities\Contrat;

    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:15:19=====================*/
        class ContratDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count contrat =====================*/
					public function countContrat(){
					                       return count($this->listeContrat());
					        }

				/*================== Get contrat =====================*/
					public function getContrat($id){
					$sql = "SELECT * FROM contrat WHERE contrat.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste contrat =====================*/
					public function listeContrat(){
					                $sql = "SELECT * FROM contrat";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one contrat =====================*/
					public function listeContratByModalite_contratId($id){
					$sql = "SELECT * FROM contrat WHERE  contrat.modalite_contrat_id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }
					public function listeContratByPersonneId($id){
					$sql = "SELECT * FROM contrat WHERE  contrat.personne_id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== One to many contrat =====================*/
					public function listeModalite_contratByContratId($modalite_contrat_id){
					$sql = "SELECT * FROM modalite_contrat WHERE  modalite_contrat.modalite_contrat_id = ".$modalite_contrat_id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }
					public function listePersonneByContratId($personne_id){
					$sql = "SELECT * FROM personne WHERE  personne.personne_id = ".$personne_id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

               public function addContrat($contrat){
                        $sql = "INSERT INTO contrat  VALUES(
                                     null
,
                                     ".$contrat->getModalite_contrat_id()."
,
                                     ".$contrat->getPersonne_id()."
,
                                     '".$contrat->getMetier()."'
,
                                     '".$contrat->getCv_contrat()."'
,
                                     '".$contrat->getStatut_contrat()."'
,
                                     '".$contrat->getNumsecu_sire()."'
,
                                     '".$contrat->getDatedebut()."'
,
                                     '".$contrat->getDatefin()."'
,
                                     '".$contrat->getDuree_essai()."'
,
                                     '".$contrat->getAvantages_contrat()."'
,
                                     '".$contrat->getPreavie_demande_conger()."'
,
                                     '".$contrat->getNbr_jr_conge_par_mois_tavail()."'
,
                                     '".$contrat->getEtat_contrat()."'
,
                                     '".$contrat->getType_contrat_id()."'
,
                                     '".$contrat->getDepartement_id()."'
,
                                     '".$contrat->getFlag_contract()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatecontrat($contrat){
                        $sql = "UPDATE contrat  SET  contrat.metier =  '".$contrat->getMetier()."' ,contrat.cv_contrat =  '".$contrat->getCv_contrat()."' ,contrat.statut_contrat =  '".$contrat->getStatut_contrat()."' ,contrat.numsecu_sire =  '".$contrat->getNumsecu_sire()."' ,contrat.datedebut =  '".$contrat->getDatedebut()."' ,contrat.datefin =  '".$contrat->getDatefin()."' ,contrat.duree_essai =  '".$contrat->getDuree_essai()."' ,contrat.avantages_contrat =  '".$contrat->getAvantages_contrat()."' ,contrat.preavie_demande_conger =  '".$contrat->getPreavie_demande_conger()."' ,contrat.nbr_jr_conge_par_mois_tavail =  '".$contrat->getNbr_jr_conge_par_mois_tavail()."' ,contrat.etat_contrat =  '".$contrat->getEtat_contrat()."' ,contrat.type_contrat_id =  '".$contrat->getType_contrat_id()."' ,contrat.personne_id =  '".$contrat->getPersonne_id()."' ,contrat.departement_id =  '".$contrat->getDepartement_id()."' ,contrat.modalite_contrat_id =  '".$contrat->getModalite_contrat_id()."' ,contrat.flag_contract =  '".$contrat->getFlag_contract()."'   WHERE   contrat.id =  ".$contrat->getId()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete contrat =====================*/
					public function deleteContrat($id){
					$sql = "DELETE FROM contrat WHERE contrat.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If contrat existe =====================*/
					public function ifContratexiste($metier){
					$sql = "SELECT * FROM contrat WHERE metier='".$metier."' ";
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



