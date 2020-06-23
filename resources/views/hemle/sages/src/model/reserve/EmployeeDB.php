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
  use src\entities\Employee;

    /*==================Classe creer par Samane samane_ui_admin le 05-11-2019 11:53:08=====================*/
        class EmployeeDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count employee =====================*/
					public function countEmployee(){
					                       return count($this->listeEmployee());
					        }

				/*================== Get employee =====================*/
					public function getEmployee($id){
					$sql = "SELECT * FROM employee WHERE employee.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste employee =====================*/
					public function listeEmployee(){
					                $sql = "SELECT * FROM employee";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one employee =====================*/
					public function listeEmployeeByDepartementId($id){
					$sql = "SELECT * FROM employee WHERE  employee.id_departement = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== One to many employee =====================*/
					public function listeDepartementByEmployeeId($id_departement){
					$sql = "SELECT * FROM departement WHERE  departement.id_departement = ".$id_departement."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

               public function addEmployee($employee){
                        $sql = "INSERT INTO employee  VALUES(
                                     null
,
                                     ".$employee->getId_departement()."
,
                                     '".$employee->getId_categorie_pro()."'
,
                                     '".$employee->getId_ruperieur_hierarchique()."'
,
                                     '".$employee->getAvatar_employe()."'
,
                                     '".$employee->getMatricul_employee()."'
,
                                     '".$employee->getCv_employee()."'
,
                                     '".$employee->getSalaire_employee()."'
,
                                     '".$employee->getNom_employee()."'
,
                                     '".$employee->getNature_employee()."'
,
                                     '".$employee->getTel_employee()."'
,
                                     '".$employee->getEmail_employee()."'
,
                                     '".$employee->getInfo_employee()."'
,
                                     '".$employee->getFlag_employee()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updateemployee($employee){
                        $sql = "UPDATE employee  SET  employee.id_departement =  '".$employee->getId_departement()."' ,employee.id_categorie_pro =  '".$employee->getId_categorie_pro()."' ,employee.id_ruperieur_hierarchique =  '".$employee->getId_ruperieur_hierarchique()."' ,employee.avatar_employe =  '".$employee->getAvatar_employe()."' ,employee.matricul_employee =  '".$employee->getMatricul_employee()."' ,employee.cv_employee =  '".$employee->getCv_employee()."' ,employee.salaire_employee =  '".$employee->getSalaire_employee()."' ,employee.nom_employee =  '".$employee->getNom_employee()."' ,employee.nature_employee =  '".$employee->getNature_employee()."' ,employee.tel_employee =  '".$employee->getTel_employee()."' ,employee.email_employee =  '".$employee->getEmail_employee()."' ,employee.info_employee =  '".$employee->getInfo_employee()."' ,employee.flag_employee =  '".$employee->getFlag_employee()."'   WHERE   employee.id =  ".$employee->getId()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete employee =====================*/
					public function deleteEmployee($id){
					$sql = "DELETE FROM employee WHERE employee.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If employee existe =====================*/
					public function ifEmployeeexiste($id_departement){
					$sql = "SELECT * FROM employee WHERE id_departement='".$id_departement."' ";
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



