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
  use src\entities\Type_conger;

    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:15:25=====================*/
        class Type_congerDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count type_conger =====================*/
					public function countType_conger(){
					                       return count($this->listeType_conger());
					        }

				/*================== Get type_conger =====================*/
					public function getType_conger($id){
					$sql = "SELECT * FROM type_conger WHERE type_conger.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste type_conger =====================*/
					public function listeType_conger(){
					                $sql = "SELECT * FROM type_conger";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one type_conger =====================*/

				/*================== One to many type_conger =====================*/

               public function addType_conger($type_conger){
                        $sql = "INSERT INTO type_conger  VALUES(
                                     '".$type_conger->getId()."'
,
                                     '".$type_conger->getNom_type_conger()."'
,
                                     '".$type_conger->getCategirie_type_conger()."'
,
                                     '".$type_conger->getCouleur_type_conger()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatetype_conger($type_conger){
                        $sql = "UPDATE type_conger  SET  type_conger.id: =  ".$type_conger->getId()." ,type_conger.nom_type_conger =  '".$type_conger->getNom_type_conger()."' ,type_conger.categirie_type_conger =  '".$type_conger->getCategirie_type_conger()."' ,type_conger.couleur_type_conger =  '".$type_conger->getCouleur_type_conger()."'   WHERE   type_conger.id: =  ".$type_conger->getId()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete type_conger =====================*/
					public function deleteType_conger($id){
					$sql = "DELETE FROM type_conger WHERE type_conger.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If type_conger existe =====================*/
					public function ifType_congerexiste($nom_type_conger){
					$sql = "SELECT * FROM type_conger WHERE nom_type_conger='".$nom_type_conger."' ";
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



