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
  use src\entities\V_categorie;

    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:15:25=====================*/
        class V_categorieDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count v_categorie =====================*/
					public function countV_categorie(){
					                       return count($this->listeV_categorie());
					        }

				/*================== Get v_categorie =====================*/
					public function getV_categorie($id){
					$sql = "SELECT * FROM v_categorie WHERE v_categorie.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste v_categorie =====================*/
					public function listeV_categorie(){
					                $sql = "SELECT * FROM v_categorie";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one v_categorie =====================*/

				/*================== One to many v_categorie =====================*/

               public function addV_categorie($v_categorie){
                        $sql = "INSERT INTO v_categorie  VALUES(
                                     '".$v_categorie->getId()."'
,
                                     '".$v_categorie->getId_service()."'
,
                                     '".$v_categorie->getId_famille()."'
,
                                     '".$v_categorie->getNom_categorie()."'
,
                                     '".$v_categorie->getNbr_produit_categorie()."'
,
                                     '".$v_categorie->getValeur_categorie()."'
,
                                     '".$v_categorie->getFlag_categorie()."'
,
                                     '".$v_categorie->getNom_famille()."'
,
                                     '".$v_categorie->getColor_famille()."'
,
                                     '".$v_categorie->getNbr_categorie_famille()."'
,
                                     '".$v_categorie->getValeur_famille()."'
,
                                     '".$v_categorie->getFlag_famille()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatev_categorie($v_categorie){
                        $sql = "UPDATE v_categorie  SET  v_categorie.id =  '".$v_categorie->getId()."' ,v_categorie.id_service =  '".$v_categorie->getId_service()."' ,v_categorie.id_famille =  '".$v_categorie->getId_famille()."' ,v_categorie.nom_categorie =  '".$v_categorie->getNom_categorie()."' ,v_categorie.nbr_produit_categorie =  '".$v_categorie->getNbr_produit_categorie()."' ,v_categorie.valeur_categorie =  '".$v_categorie->getValeur_categorie()."' ,v_categorie.flag_categorie =  '".$v_categorie->getFlag_categorie()."' ,v_categorie.nom_famille =  '".$v_categorie->getNom_famille()."' ,v_categorie.color_famille =  '".$v_categorie->getColor_famille()."' ,v_categorie.nbr_categorie_famille =  '".$v_categorie->getNbr_categorie_famille()."' ,v_categorie.valeur_famille =  '".$v_categorie->getValeur_famille()."' ,v_categorie.flag_famille =  '".$v_categorie->getFlag_famille()."'   WHERE    ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete v_categorie =====================*/
					public function deleteV_categorie($id){
					$sql = "DELETE FROM v_categorie WHERE v_categorie.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If v_categorie existe =====================*/
					public function ifV_categorieexiste($id){
					$sql = "SELECT * FROM v_categorie WHERE id='".$id."' ";
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



