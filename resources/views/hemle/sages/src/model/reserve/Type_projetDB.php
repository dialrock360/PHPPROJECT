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
  use src\entities\Type_projet;

    /*==================Classe creer par Samane samane_ui_admin le 05-11-2019 10:09:13=====================*/
        class Type_projetDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count type_projet =====================*/
					public function countType_projet(){
					                       return count($this->listeType_projet());
					        }

				/*================== Get type_projet =====================*/
					public function getType_projet($id){
					$sql = "SELECT * FROM type_projet WHERE type_projet.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste type_projet =====================*/
					public function listeType_projet(){
					                $sql = "SELECT * FROM type_projet";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one type_projet =====================*/
					public function listeType_projetByServiceId($id){
					$sql = "SELECT * FROM type_projet WHERE  type_projet.id_service = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== One to many type_projet =====================*/
					public function listeServiceByType_projetId($id_service){
					$sql = "SELECT * FROM service WHERE  service.id_service = ".$id_service."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

               public function addType_projet($type_projet){
                        $sql = "INSERT INTO type_projet  VALUES(
                                     null
,
                                     ".$type_projet->getId_service()."
,
                                     '".$type_projet->getNom_type_projet()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatetype_projet($type_projet){
                        $sql = "UPDATE type_projet  SET  type_projet.id_service =  '".$type_projet->getId_service()."' ,type_projet.nom_type_projet =  '".$type_projet->getNom_type_projet()."'   WHERE   type_projet.id =  ".$type_projet->getId()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete type_projet =====================*/
					public function deleteType_projet($id){
					$sql = "DELETE FROM type_projet WHERE type_projet.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If type_projet existe =====================*/
					public function ifType_projetexiste($id_service){
					$sql = "SELECT * FROM type_projet WHERE id_service='".$id_service."' ";
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



