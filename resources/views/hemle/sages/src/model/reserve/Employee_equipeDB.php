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
  use src\entities\Employee_equipe;

    /*==================Classe creer par Samane samane_ui_admin le 29-09-2019 13:16:59=====================*/
        class Employee_equipeDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count employee_equipe =====================*/
					public function countEmployee_equipe(){
					                       return count($this->listeEmployee_equipe());
					        }

				/*================== Get employee_equipe =====================*/
					public function getEmployee_equipe($id){
					$sql = "SELECT * FROM employee_equipe WHERE employee_equipe.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste employee_equipe =====================*/
					public function listeEmployee_equipe(){
					                $sql = "SELECT * FROM employee_equipe";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one employee_equipe =====================*/
					public function listeEmployee_equipeByEmployeeId($id){
					$sql = "SELECT * FROM employee_equipe WHERE  employee_equipe.id_employee = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }
					public function listeEmployee_equipeByEquipeId($id){
					$sql = "SELECT * FROM employee_equipe WHERE  employee_equipe.id_equipe = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== One to many employee_equipe =====================*/
					public function listeEmployeeByEmployee_equipeId($id_employee){
					$sql = "SELECT * FROM employee WHERE  employee.id_employee = ".$id_employee."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }
					public function listeEquipeByEmployee_equipeId($id_equipe){
					$sql = "SELECT * FROM equipe WHERE  equipe.id_equipe = ".$id_equipe."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

               public function addEmployee_equipe($employee_equipe){
                        $sql = "INSERT INTO employee_equipe  VALUES(
                                     '".$employee_equipe->getId_employee()."'
,
                                     '".$employee_equipe->getId_equipe()."'
,
                                     ".$employee_equipe->getId_employee()."
,
                                     ".$employee_equipe->getId_equipe()."
,
                                     '".$employee_equipe->getId_service()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updateemployee_equipe($employee_equipe){
                        $sql = "UPDATE employee_equipe  SET  employee_equipe.id_employee: =  ".$employee_equipe->getId_employee:()." ,employee_equipe.id_equipe: =  ".$employee_equipe->getId_equipe:()." ,employee_equipe.id_service =  '".$employee_equipe->getId_service()."'   WHERE   employee_equipe.id_employee: =  ".$employee_equipe->getId_employee:()."  AND employee_equipe.id_equipe: =  ".$employee_equipe->getId_equipe:()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete employee_equipe =====================*/
					public function deleteEmployee_equipe($id){
					$sql = "DELETE FROM employee_equipe WHERE employee_equipe.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If employee_equipe existe =====================*/
					public function ifEmployee_equipeexiste($id_service){
					$sql = "SELECT * FROM employee_equipe WHERE id_service='".$id_service."' ";
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



