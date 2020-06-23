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
  use src\entities\Type_contrat;

    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:15:25=====================*/
        class Type_contratDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count type_contrat =====================*/
					public function countType_contrat(){
					                       return count($this->listeType_contrat());
					        }

				/*================== Get type_contrat =====================*/
					public function getType_contrat($id){
					$sql = "SELECT * FROM type_contrat WHERE type_contrat.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste type_contrat =====================*/
					public function listeType_contrat(){
					                $sql = "SELECT * FROM type_contrat";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one type_contrat =====================*/

				/*================== One to many type_contrat =====================*/

               public function addType_contrat($type_contrat){
                        $sql = "INSERT INTO type_contrat  VALUES(
                                     null
,
                                     '".$type_contrat->getNom_type_contrat()."'
,
                                     '".$type_contrat->getDetails()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatetype_contrat($type_contrat){
                        $sql = "UPDATE type_contrat  SET  type_contrat.nom_type_contrat =  '".$type_contrat->getNom_type_contrat()."' ,type_contrat.details =  '".$type_contrat->getDetails()."'   WHERE   type_contrat.id =  ".$type_contrat->getId()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete type_contrat =====================*/
					public function deleteType_contrat($id){
					$sql = "DELETE FROM type_contrat WHERE type_contrat.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If type_contrat existe =====================*/
					public function ifType_contratexiste($nom_type_contrat){
					$sql = "SELECT * FROM type_contrat WHERE nom_type_contrat='".$nom_type_contrat."' ";
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



