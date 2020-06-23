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
  use src\entities\Modalite_contrat;

    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:15:22=====================*/
        class Modalite_contratDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count modalite_contrat =====================*/
					public function countModalite_contrat(){
					                       return count($this->listeModalite_contrat());
					        }

				/*================== Get modalite_contrat =====================*/
					public function getModalite_contrat($id){
					$sql = "SELECT * FROM modalite_contrat WHERE modalite_contrat.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste modalite_contrat =====================*/
					public function listeModalite_contrat(){
					                $sql = "SELECT * FROM modalite_contrat";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one modalite_contrat =====================*/

				/*================== One to many modalite_contrat =====================*/

               public function addModalite_contrat($modalite_contrat){
                        $sql = "INSERT INTO modalite_contrat  VALUES(
                                     null
,
                                     '".$modalite_contrat->getNom_modalite()."'
,
                                     '".$modalite_contrat->getClause_modalite()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatemodalite_contrat($modalite_contrat){
                        $sql = "UPDATE modalite_contrat  SET  modalite_contrat.nom_modalite =  '".$modalite_contrat->getNom_modalite()."' ,modalite_contrat.clause_modalite =  '".$modalite_contrat->getClause_modalite()."'   WHERE   modalite_contrat.id =  ".$modalite_contrat->getId()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete modalite_contrat =====================*/
					public function deleteModalite_contrat($id){
					$sql = "DELETE FROM modalite_contrat WHERE modalite_contrat.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If modalite_contrat existe =====================*/
					public function ifModalite_contratexiste($nom_modalite){
					$sql = "SELECT * FROM modalite_contrat WHERE nom_modalite='".$nom_modalite."' ";
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



