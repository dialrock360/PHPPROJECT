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
  use src\entities\Article2;

    /*==================Classe creer par Samane samane_ui_admin le 19-09-2019 13:26:04=====================*/
        class ArticleDB2 extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count article =====================*/
					public function countArticle(){
					                       return count($this->listeArticle());
					        }

				/*================== Get article =====================*/
					public function getArticle($id){
					$sql = "SELECT * FROM v_article WHERE  id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste article =====================*/
					public function listeArticle(){
					                $sql = "SELECT * FROM article";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one article =====================*/
					public function listeArticleByCategorieId($id){
					$sql = "SELECT * FROM v_article WHERE  v_article.id_categorie = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }
					public function listeArticleByServiceId($id){
					$sql = "SELECT * FROM  v_article  WHERE id_service = ".$id." and flag_article=0 order by  nom_article";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== One to many article =====================*/
					public function listeCategorieByArticleId($id_categorie){
					$sql = "SELECT * FROM categorie WHERE  id.id_categorie = ".$id_categorie."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }
					public function listeServiceByArticleId($id_service){
					$sql = "SELECT * FROM service WHERE  id.id_service = ".$id_service."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

               public function addArticle($article){

                        $sql = "INSERT INTO `article`  VALUES ( null,".$article->getId_service().", ".$article->getId_categorie().",'".$article->getNom_article()."',
					                              ".$article->getPxa_article().", ".$article->getPxv_article().", ".$article->getPxvbar_article().",
					                              ".$article->getType_article().", '".$article->getTabidp()."', '".$article->getTabqnt()."', '".$article->getTabmts()."',
					       ".$article->getPxrv().", 0) ";

                      if($this->db != null)
                        {
							$this->db->exec($sql);
							return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatearticle($article){
                        $sql = "UPDATE article  SET  article.id_categorie =  '".$article->getId_categorie()."' ,article.nom_article =  '".$article->getNom_article()."' ,article.pxa_article =  '".$article->getPxa_article()."' ,article.pxv_article =  '".$article->getPxv_article()."' ,article.pxvbar_article =  '".$article->getPxvbar_article()."' ,article.type_article =  '".$article->getType_article()."' ,article.tabidp =  '".$article->getTabidp()."' ,article.tabqnt =  '".$article->getTabqnt()."' ,article.tabmts =  '".$article->getTabmts()."' ,article.pxrv =  '".$article->getPxrv()."'   WHERE   article.id =  ".$article->getId()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete article =====================*/
					public function deleteArticle($id){
					$sql = "DELETE FROM article WHERE article.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }
					public function fldeleteArticle($id){
						$sql = "UPDATE article  SET  article.flag_article = 1  WHERE   article.id =  ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If article existe =====================*/
					public function ifArticleexiste($article){
					$sql = "SELECT * FROM article WHERE id_service='".$article->getId_service()."' and article.nom_article =  '".$article->getNom_article()."' ";
					if($this->db != null)
					      {
					       if($this->db->query($sql)->fetch() != null)
					         {
					                 return 1;
					         }
					      }
					return 0;
					                }


           }





   ?>



