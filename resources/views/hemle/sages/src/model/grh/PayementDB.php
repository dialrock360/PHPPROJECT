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
  use src\entities\Payement;

    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:15:22=====================*/
        class PayementDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count payement =====================*/
					public function countPayement(){
					                       return count($this->listePayement());
					        }

				/*================== Get payement =====================*/
					public function getPayement($id){
					$sql = "SELECT * FROM payement WHERE payement.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste payement =====================*/
					public function listePayement(){
					                $sql = "SELECT * FROM payement";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one payement =====================*/
					public function listePayementByMouvementId($id){
					$sql = "SELECT * FROM payement WHERE  payement.id_mouvement = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== One to many payement =====================*/
					public function listeMouvementByPayementId($id_mouvement){
					$sql = "SELECT * FROM mouvement WHERE  mouvement.id_mouvement = ".$id_mouvement."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

               public function addPayement($payement){
                        $sql = "INSERT INTO payement  VALUES(
                                     null
,
                                     ".$payement->getId_mouvement()."
,
                                     '".$payement->getType_payement()."'
,
                                     '".$payement->getMts_payement()."'
,
                                     '".$payement->getDate_payement()."'
,
                                     '".$payement->getDetail_payement()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatepayement($payement){
                        $sql = "UPDATE payement  SET  payement.id_mouvement =  '".$payement->getId_mouvement()."' ,payement.type_payement =  '".$payement->getType_payement()."' ,payement.mts_payement =  '".$payement->getMts_payement()."' ,payement.date_payement =  '".$payement->getDate_payement()."' ,payement.detail_payement =  '".$payement->getDetail_payement()."'   WHERE   payement.id =  ".$payement->getId()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete payement =====================*/
					public function deletePayement($id){
					$sql = "DELETE FROM payement WHERE payement.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If payement existe =====================*/
					public function ifPayementexiste($id_mouvement){
					$sql = "SELECT * FROM payement WHERE id_mouvement='".$id_mouvement."' ";
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



