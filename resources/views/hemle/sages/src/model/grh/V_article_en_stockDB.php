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
  use src\entities\V_article_en_stock;

    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:15:25=====================*/
        class V_article_en_stockDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count v_article_en_stock =====================*/
					public function countV_article_en_stock(){
					                       return count($this->listeV_article_en_stock());
					        }

				/*================== Get v_article_en_stock =====================*/
					public function getV_article_en_stock($id){
					$sql = "SELECT * FROM v_article_en_stock WHERE v_article_en_stock.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste v_article_en_stock =====================*/
					public function listeV_article_en_stock(){
					                $sql = "SELECT * FROM v_article_en_stock";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one v_article_en_stock =====================*/

				/*================== One to many v_article_en_stock =====================*/

               public function addV_article_en_stock($v_article_en_stock){
                        $sql = "INSERT INTO v_article_en_stock  VALUES(
                                     '".$v_article_en_stock->getId()."'
,
                                     '".$v_article_en_stock->getId_article()."'
,
                                     '".$v_article_en_stock->getId_stock()."'
,
                                     '".$v_article_en_stock->getId_conditionement_article()."'
,
                                     '".$v_article_en_stock->getPu_article_en_stock()."'
,
                                     '".$v_article_en_stock->getQnt_article_en_stock()."'
,
                                     '".$v_article_en_stock->getMin_qnt_article_en_stock()."'
,
                                     '".$v_article_en_stock->getMax_qnt_article_en_stock()."'
,
                                     '".$v_article_en_stock->getId_conditionement()."'
,
                                     '".$v_article_en_stock->getQnt_unite()."'
,
                                     '".$v_article_en_stock->getPrix_unite()."'
,
                                     '".$v_article_en_stock->getId_unite()."'
,
                                     '".$v_article_en_stock->getNom_article()."'
,
                                     '".$v_article_en_stock->getPath_photo()."'
,
                                     '".$v_article_en_stock->getNom_conditionement()."'
,
                                     '".$v_article_en_stock->getNom_uniteconditionement()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatev_article_en_stock($v_article_en_stock){
                        $sql = "UPDATE v_article_en_stock  SET  v_article_en_stock.id =  '".$v_article_en_stock->getId()."' ,v_article_en_stock.id_article =  '".$v_article_en_stock->getId_article()."' ,v_article_en_stock.id_stock =  '".$v_article_en_stock->getId_stock()."' ,v_article_en_stock.id_conditionement_article =  '".$v_article_en_stock->getId_conditionement_article()."' ,v_article_en_stock.pu_article_en_stock =  '".$v_article_en_stock->getPu_article_en_stock()."' ,v_article_en_stock.qnt_article_en_stock =  '".$v_article_en_stock->getQnt_article_en_stock()."' ,v_article_en_stock.min_qnt_article_en_stock =  '".$v_article_en_stock->getMin_qnt_article_en_stock()."' ,v_article_en_stock.max_qnt_article_en_stock =  '".$v_article_en_stock->getMax_qnt_article_en_stock()."' ,v_article_en_stock.id_conditionement =  '".$v_article_en_stock->getId_conditionement()."' ,v_article_en_stock.qnt_unite =  '".$v_article_en_stock->getQnt_unite()."' ,v_article_en_stock.prix_unite =  '".$v_article_en_stock->getPrix_unite()."' ,v_article_en_stock.id_unite =  '".$v_article_en_stock->getId_unite()."' ,v_article_en_stock.nom_article =  '".$v_article_en_stock->getNom_article()."' ,v_article_en_stock.path_photo =  '".$v_article_en_stock->getPath_photo()."' ,v_article_en_stock.nom_conditionement =  '".$v_article_en_stock->getNom_conditionement()."' ,v_article_en_stock.nom_uniteconditionement =  '".$v_article_en_stock->getNom_uniteconditionement()."'   WHERE    ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete v_article_en_stock =====================*/
					public function deleteV_article_en_stock($id){
					$sql = "DELETE FROM v_article_en_stock WHERE v_article_en_stock.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If v_article_en_stock existe =====================*/
					public function ifV_article_en_stockexiste($id){
					$sql = "SELECT * FROM v_article_en_stock WHERE id='".$id."' ";
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



