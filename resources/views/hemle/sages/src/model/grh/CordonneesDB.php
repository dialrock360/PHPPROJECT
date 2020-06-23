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
  use src\entities\Cordonnees;

    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:15:19=====================*/
        class CordonneesDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count cordonnees =====================*/
					public function countCordonnees(){
					                       return count($this->listeCordonnees());
					        }

				/*================== Get cordonnees =====================*/
					public function getCordonnees($id){
					$sql = "SELECT * FROM cordonnees WHERE cordonnees.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste cordonnees =====================*/
					public function listeCordonnees(){
					                $sql = "SELECT * FROM cordonnees";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one cordonnees =====================*/
					public function listeCordonneesByPersonneId($id){
					$sql = "SELECT * FROM cordonnees WHERE  cordonnees.personne_id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== One to many cordonnees =====================*/
					public function listePersonneByCordonneesId($personne_id){
					$sql = "SELECT * FROM personne WHERE  personne.personne_id = ".$personne_id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

               public function addCordonnees($cordonnees){
                        $sql = "INSERT INTO cordonnees  VALUES(
                                     null
,
                                     ".$cordonnees->getPersonne_id()."
,
                                     '".$cordonnees->getAdress()."'
,
                                     '".$cordonnees->getTel()."'
,
                                     '".$cordonnees->getCodepostal()."'
,
                                     '".$cordonnees->getContact_urgent()."'
,
                                     '".$cordonnees->getEtat_civile()."'
,
                                     '".$cordonnees->getNbr_conjoint()."'
,
                                     '".$cordonnees->getNbr_enfant()."'
,
                                     '".$cordonnees->getInfo_conjoint()."'
,
                                     '".$cordonnees->getInfo_personne()."'
,
                                     '".$cordonnees->getFlag_contact()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatecordonnees($cordonnees){
                        $sql = "UPDATE cordonnees  SET  cordonnees.adress =  '".$cordonnees->getAdress()."' ,cordonnees.tel =  '".$cordonnees->getTel()."' ,cordonnees.codepostal =  '".$cordonnees->getCodepostal()."' ,cordonnees.contact_urgent =  '".$cordonnees->getContact_urgent()."' ,cordonnees.etat_civile =  '".$cordonnees->getEtat_civile()."' ,cordonnees.nbr_conjoint =  '".$cordonnees->getNbr_conjoint()."' ,cordonnees.nbr_enfant =  '".$cordonnees->getNbr_enfant()."' ,cordonnees.info_conjoint =  '".$cordonnees->getInfo_conjoint()."' ,cordonnees.info_personne =  '".$cordonnees->getInfo_personne()."' ,cordonnees.personne_id =  '".$cordonnees->getPersonne_id()."' ,cordonnees.flag_contact =  '".$cordonnees->getFlag_contact()."'   WHERE   cordonnees.id =  ".$cordonnees->getId()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete cordonnees =====================*/
					public function deleteCordonnees($id){
					$sql = "DELETE FROM cordonnees WHERE cordonnees.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If cordonnees existe =====================*/
					public function ifCordonneesexiste($adress){
					$sql = "SELECT * FROM cordonnees WHERE adress='".$adress."' ";
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



