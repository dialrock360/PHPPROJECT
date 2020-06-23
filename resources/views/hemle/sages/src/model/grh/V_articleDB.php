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
  use src\entities\V_article;

    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:15:25=====================*/
        class V_articleDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count v_article =====================*/
					public function countV_article(){
					                       return count($this->listeV_article());
					        }

				/*================== Get v_article =====================*/
					public function getV_article($id){
					$sql = "SELECT * FROM v_article WHERE v_article.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste v_article =====================*/
					public function listeV_article(){
					                $sql = "SELECT * FROM v_article";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one v_article =====================*/

				/*================== One to many v_article =====================*/

               public function addV_article($v_article){
                        $sql = "INSERT INTO v_article  VALUES(
                                     '".$v_article->getId()."'
,
                                     '".$v_article->getId_service()."'
,
                                     '".$v_article->getId_categorie()."'
,
                                     '".$v_article->getNom_article()."'
,
                                     '".$v_article->getPxa_article()."'
,
                                     '".$v_article->getPxv_article()."'
,
                                     '".$v_article->getPxvbar_article()."'
,
                                     '".$v_article->getType_article()."'
,
                                     '".$v_article->getTabidp()."'
,
                                     '".$v_article->getTabqnt()."'
,
                                     '".$v_article->getTabmts()."'
,
                                     '".$v_article->getPxrv()."'
,
                                     '".$v_article->getNbrstockage()."'
,
                                     '".$v_article->getTabidstock()."'
,
                                     '".$v_article->getFlag_article()."'
,
                                     '".$v_article->getId_famille()."'
,
                                     '".$v_article->getNom_categorie()."'
,
                                     '".$v_article->getNbr_produit_categorie()."'
,
                                     '".$v_article->getValeur_categorie()."'
,
                                     '".$v_article->getPath_photo()."'
,
                                     '".$v_article->getMaster()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatev_article($v_article){
                        $sql = "UPDATE v_article  SET  v_article.id =  '".$v_article->getId()."' ,v_article.id_service =  '".$v_article->getId_service()."' ,v_article.id_categorie =  '".$v_article->getId_categorie()."' ,v_article.nom_article =  '".$v_article->getNom_article()."' ,v_article.pxa_article =  '".$v_article->getPxa_article()."' ,v_article.pxv_article =  '".$v_article->getPxv_article()."' ,v_article.pxvbar_article =  '".$v_article->getPxvbar_article()."' ,v_article.type_article =  '".$v_article->getType_article()."' ,v_article.tabidp =  '".$v_article->getTabidp()."' ,v_article.tabqnt =  '".$v_article->getTabqnt()."' ,v_article.tabmts =  '".$v_article->getTabmts()."' ,v_article.pxrv =  '".$v_article->getPxrv()."' ,v_article.nbrstockage =  '".$v_article->getNbrstockage()."' ,v_article.tabidstock =  '".$v_article->getTabidstock()."' ,v_article.flag_article =  '".$v_article->getFlag_article()."' ,v_article.id_famille =  '".$v_article->getId_famille()."' ,v_article.nom_categorie =  '".$v_article->getNom_categorie()."' ,v_article.nbr_produit_categorie =  '".$v_article->getNbr_produit_categorie()."' ,v_article.valeur_categorie =  '".$v_article->getValeur_categorie()."' ,v_article.path_photo =  '".$v_article->getPath_photo()."' ,v_article.master =  '".$v_article->getMaster()."'   WHERE    ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete v_article =====================*/
					public function deleteV_article($id){
					$sql = "DELETE FROM v_article WHERE v_article.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If v_article existe =====================*/
					public function ifV_articleexiste($id){
					$sql = "SELECT * FROM v_article WHERE id='".$id."' ";
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



