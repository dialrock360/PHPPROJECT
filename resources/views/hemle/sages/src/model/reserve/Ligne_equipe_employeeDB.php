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
  use src\entities\Ligne_equipe_employee;

    /*==================Classe creer par Samane samane_ui_admin le 05-11-2019 10:09:13=====================*/
        class Ligne_equipe_employeeDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count ligne_equipe_employee =====================*/
					public function countLigne_equipe_employee(){
					                       return count($this->listeLigne_equipe_employee());
					        }

				/*================== Get ligne_equipe_employee =====================*/
					public function getLigne_equipe_employee($id){
					$sql = "SELECT * FROM ligne_equipe_employee WHERE ligne_equipe_employee.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste ligne_equipe_employee =====================*/
					public function listeLigne_equipe_employee(){
					                $sql = "SELECT * FROM ligne_equipe_employee";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one ligne_equipe_employee =====================*/
					public function listeLigne_equipe_employeeByEmployeeId($id){
					$sql = "SELECT * FROM ligne_equipe_employee WHERE  ligne_equipe_employee.id_employee = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }
					public function listeLigne_equipe_employeeByEquipeId($id){
					$sql = "SELECT * FROM ligne_equipe_employee WHERE  ligne_equipe_employee.id_equipe = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== One to many ligne_equipe_employee =====================*/
					public function listeEmployeeByLigne_equipe_employeeId($id_employee){
					$sql = "SELECT * FROM employee WHERE  employee.id_employee = ".$id_employee."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }
					public function listeEquipeByLigne_equipe_employeeId($id_equipe){
					$sql = "SELECT * FROM equipe WHERE  equipe.id_equipe = ".$id_equipe."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

               public function addLigne_equipe_employee($ligne_equipe_employee){
                        $sql = "INSERT INTO ligne_equipe_employee  VALUES(
                                     '".$ligne_equipe_employee->getId_employee()."'
,
                                     '".$ligne_equipe_employee->getId_equipe()."'
,
                                     ".$ligne_equipe_employee->getId_employee()."
,
                                     ".$ligne_equipe_employee->getId_equipe()."
,
                                     '".$ligne_equipe_employee->getId_service()."'
,
                                     '".$ligne_equipe_employee->getMaindoeuve_unitaire()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updateligne_equipe_employee($ligne_equipe_employee){
                        $sql = "UPDATE ligne_equipe_employee  SET  ligne_equipe_employee.id_employee: =  ".$ligne_equipe_employee->getId_employee()." ,ligne_equipe_employee.id_equipe: =  ".$ligne_equipe_employee->getId_equipe()." ,ligne_equipe_employee.id_service =  '".$ligne_equipe_employee->getId_service()."' ,ligne_equipe_employee.maindoeuve_unitaire =  '".$ligne_equipe_employee->getMaindoeuve_unitaire()."'   WHERE   ligne_equipe_employee.id_employee: =  ".$ligne_equipe_employee->getId_employee()."  AND ligne_equipe_employee.id_equipe: =  ".$ligne_equipe_employee->getId_equipe()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete ligne_equipe_employee =====================*/
					public function deleteLigne_equipe_employee($id){
					$sql = "DELETE FROM ligne_equipe_employee WHERE ligne_equipe_employee.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If ligne_equipe_employee existe =====================*/
					public function ifLigne_equipe_employeeexiste($id_service){
					$sql = "SELECT * FROM ligne_equipe_employee WHERE id_service='".$id_service."' ";
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



