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
  use src\entities\Departement;

    /*==================Classe creer par Samane samane_ui_admin le 05-11-2019 10:37:27=====================*/
        class DepartementDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count departement =====================*/
					public function countDepartement(){
					                       return count($this->listeDepartement());
					        }

				/*================== Get departement =====================*/
					public function getDepartement($id){
					$sql = "SELECT * FROM departement WHERE departement.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste departement =====================*/
					public function listeDepartement(){
					                $sql = "SELECT * FROM departement";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one departement =====================*/
					public function listeDepartementByServiceId($id){
					$sql = "SELECT * FROM departement WHERE  departement.id_service = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== One to many departement =====================*/
					public function listeServiceByDepartementId($id_service){
					$sql = "SELECT * FROM service WHERE  service.id_service = ".$id_service."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

               public function addDepartement($departement){
                        $sql = "INSERT INTO departement  VALUES(
                                     null
,
                                     ".$departement->getId_service()."
,
                                     '".$departement->getNom_departement()."'
,
                                     '".$departement->getNbr_employee()."'
,
                                     '".$departement->getId_chefdepartement()."'
,
                                     '".$departement->getInfo_departement()."'
,
                                     '".$departement->getFlag_departement()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatedepartement($departement){
                        $sql = "UPDATE departement  SET  departement.id_service =  '".$departement->getId_service()."' ,departement.nom_departement =  '".$departement->getNom_departement()."' ,departement.nbr_employee =  '".$departement->getNbr_employee()."' ,departement.id_chefdepartement =  '".$departement->getId_chefdepartement()."' ,departement.info_departement =  '".$departement->getInfo_departement()."' ,departement.flag_departement =  '".$departement->getFlag_departement()."'   WHERE   departement.id =  ".$departement->getId()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete departement =====================*/
					public function deleteDepartement($id){
					$sql = "DELETE FROM departement WHERE departement.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If departement existe =====================*/
					public function ifDepartementexiste($id_service){
					$sql = "SELECT * FROM departement WHERE id_service='".$id_service."' ";
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



