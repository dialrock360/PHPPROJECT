<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



     namespace src\entities;
      use libs\system\Entitie;
    /*==================Classe creer par Samane samane_ui_admin le 05-12-2019 02:38:09=====================*/

        class V_article_en_stock extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $ref_article;
        private  $id_article;
        private  $id_stock;
        private  $qnt_article_en_stock;
        private  $valeur_article_en_stock;
        private  $min_qnt_article_en_stock;
        private  $max_qnt_article_en_stock;
        private  $id_conditionement_article;
        private  $qnt_unite;
        private  $pxa_u_article_en_stock;
        private  $cout_achat_conditionement_article;
        private  $pxv_u_conditionement_article;
        private  $pxv_bar_conditionement_article;
        private  $pxv_conditionement_article;
        private  $id_conditionement;
        private  $nom_conditionement;
        private  $id_unite;
        private  $nom_unite_conditionement;
        private  $nom_article;
        private  $id_service;
        private  $nom_stock;
        private  $type_stock;
        private  $path_photo;
        private  $master;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="v_article_en_stock";
                 $this->id = 0 ;
                 $this->ref_article = "" ;
                 $this->id_article = 0 ;
                 $this->id_stock = 0 ;
                 $this->qnt_article_en_stock = 0 ;
                 $this->valeur_article_en_stock = 0 ;
                 $this->min_qnt_article_en_stock = 0 ;
                 $this->max_qnt_article_en_stock = 0 ;
                 $this->id_conditionement_article = 0 ;
                 $this->qnt_unite = 0 ;
                 $this->pxa_u_article_en_stock = 0 ;
                 $this->cout_achat_conditionement_article = 0 ;
                 $this->pxv_u_conditionement_article = 0 ;
                 $this->pxv_bar_conditionement_article = 0 ;
                 $this->pxv_conditionement_article = 0 ;
                 $this->id_conditionement = 0 ;
                 $this->nom_conditionement = "" ;
                 $this->id_unite = 0 ;
                 $this->nom_unite_conditionement = "" ;
                 $this->nom_article = "" ;
                 $this->id_service = 0 ;
                 $this->nom_stock = "" ;
                 $this->type_stock = "" ;
                 $this->path_photo = "" ;
                 $this->master = 0 ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getRef_article()
                 {
                     return $this->ref_article;
                 }

             public function getId_article()
                 {
                     return $this->id_article;
                 }

             public function getId_stock()
                 {
                     return $this->id_stock;
                 }

             public function getQnt_article_en_stock()
                 {
                     return $this->qnt_article_en_stock;
                 }

             public function getValeur_article_en_stock()
                 {
                     return $this->valeur_article_en_stock;
                 }

             public function getMin_qnt_article_en_stock()
                 {
                     return $this->min_qnt_article_en_stock;
                 }

             public function getMax_qnt_article_en_stock()
                 {
                     return $this->max_qnt_article_en_stock;
                 }

             public function getId_conditionement_article()
                 {
                     return $this->id_conditionement_article;
                 }

             public function getQnt_unite()
                 {
                     return $this->qnt_unite;
                 }

             public function getPxa_u_article_en_stock()
                 {
                     return $this->pxa_u_article_en_stock;
                 }

             public function getCout_achat_conditionement_article()
                 {
                     return $this->cout_achat_conditionement_article;
                 }

             public function getPxv_u_conditionement_article()
                 {
                     return $this->pxv_u_conditionement_article;
                 }

             public function getPxv_bar_conditionement_article()
                 {
                     return $this->pxv_bar_conditionement_article;
                 }

             public function getPxv_conditionement_article()
                 {
                     return $this->pxv_conditionement_article;
                 }

             public function getId_conditionement()
                 {
                     return $this->id_conditionement;
                 }

             public function getNom_conditionement()
                 {
                     return $this->nom_conditionement;
                 }

             public function getId_unite()
                 {
                     return $this->id_unite;
                 }

             public function getNom_unite_conditionement()
                 {
                     return $this->nom_unite_conditionement;
                 }

             public function getNom_article()
                 {
                     return $this->nom_article;
                 }

             public function getId_service()
                 {
                     return $this->id_service;
                 }

             public function getNom_stock()
                 {
                     return $this->nom_stock;
                 }

             public function getType_stock()
                 {
                     return $this->type_stock;
                 }

             public function getPath_photo()
                 {
                     return $this->path_photo;
                 }

             public function getMaster()
                 {
                     return $this->master;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setRef_article($ref_article)
                 {
                      $this->ref_article = $ref_article;
                 }

             public function setId_article($id_article)
                 {
                      $this->id_article = $id_article;
                 }

             public function setId_stock($id_stock)
                 {
                      $this->id_stock = $id_stock;
                 }

             public function setQnt_article_en_stock($qnt_article_en_stock)
                 {
                      $this->qnt_article_en_stock = $qnt_article_en_stock;
                 }

             public function setValeur_article_en_stock($valeur_article_en_stock)
                 {
                      $this->valeur_article_en_stock = $valeur_article_en_stock;
                 }

             public function setMin_qnt_article_en_stock($min_qnt_article_en_stock)
                 {
                      $this->min_qnt_article_en_stock = $min_qnt_article_en_stock;
                 }

             public function setMax_qnt_article_en_stock($max_qnt_article_en_stock)
                 {
                      $this->max_qnt_article_en_stock = $max_qnt_article_en_stock;
                 }

             public function setId_conditionement_article($id_conditionement_article)
                 {
                      $this->id_conditionement_article = $id_conditionement_article;
                 }

             public function setQnt_unite($qnt_unite)
                 {
                      $this->qnt_unite = $qnt_unite;
                 }

             public function setPxa_u_article_en_stock($pxa_u_article_en_stock)
                 {
                      $this->pxa_u_article_en_stock = $pxa_u_article_en_stock;
                 }

             public function setCout_achat_conditionement_article($cout_achat_conditionement_article)
                 {
                      $this->cout_achat_conditionement_article = $cout_achat_conditionement_article;
                 }

             public function setPxv_u_conditionement_article($pxv_u_conditionement_article)
                 {
                      $this->pxv_u_conditionement_article = $pxv_u_conditionement_article;
                 }

             public function setPxv_bar_conditionement_article($pxv_bar_conditionement_article)
                 {
                      $this->pxv_bar_conditionement_article = $pxv_bar_conditionement_article;
                 }

             public function setPxv_conditionement_article($pxv_conditionement_article)
                 {
                      $this->pxv_conditionement_article = $pxv_conditionement_article;
                 }

             public function setId_conditionement($id_conditionement)
                 {
                      $this->id_conditionement = $id_conditionement;
                 }

             public function setNom_conditionement($nom_conditionement)
                 {
                      $this->nom_conditionement = $nom_conditionement;
                 }

             public function setId_unite($id_unite)
                 {
                      $this->id_unite = $id_unite;
                 }

             public function setNom_unite_conditionement($nom_unite_conditionement)
                 {
                      $this->nom_unite_conditionement = $nom_unite_conditionement;
                 }

             public function setNom_article($nom_article)
                 {
                      $this->nom_article = $nom_article;
                 }

             public function setId_service($id_service)
                 {
                      $this->id_service = $id_service;
                 }

             public function setNom_stock($nom_stock)
                 {
                      $this->nom_stock = $nom_stock;
                 }

             public function setType_stock($type_stock)
                 {
                      $this->type_stock = $type_stock;
                 }

             public function setPath_photo($path_photo)
                 {
                      $this->path_photo = $path_photo;
                 }

             public function setMaster($master)
                 {
                      $this->master = $master;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count v_article_en_stock =====================*/
					public function countV_article_en_stock(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get v_article_en_stock =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    ;
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste v_article_en_stock =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("v_article_en_stock");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("v_article_en_stock");
					    $condition = array(  );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("v_article_en_stock");
					    $condition = array(  );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_v_article_en_stock = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If v_article_en_stock existe =====================*/
					public function ifV_article_en_stockexiste($condition){
					    $this->db->setTablename($this->tablename);
	$existe=$this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					if($existe != null)
					      {
					                 return 1;
					      } 
					return 0;
					                }
					  public function setPost($post,$file=array()){
					     extract($post);
                                                       $this->id = (!isset($id) || empty($id) )  ? 0: $id;
                       $this->ref_article = (!isset($ref_article) || empty($ref_article) )  ? '': $ref_article;
                       $this->id_article = (!isset($id_article) || empty($id_article) )  ? 0: $id_article;
                       $this->id_stock = (!isset($id_stock) || empty($id_stock) )  ? 0: $id_stock;
                       $this->qnt_article_en_stock = (!isset($qnt_article_en_stock) || empty($qnt_article_en_stock) )  ? 0: $qnt_article_en_stock;
                       $this->valeur_article_en_stock = (!isset($valeur_article_en_stock) || empty($valeur_article_en_stock) )  ? 0: $valeur_article_en_stock;
                       $this->min_qnt_article_en_stock = (!isset($min_qnt_article_en_stock) || empty($min_qnt_article_en_stock) )  ? 0: $min_qnt_article_en_stock;
                       $this->max_qnt_article_en_stock = (!isset($max_qnt_article_en_stock) || empty($max_qnt_article_en_stock) )  ? 0: $max_qnt_article_en_stock;
                       $this->id_conditionement_article = (!isset($id_conditionement_article) || empty($id_conditionement_article) )  ? 0: $id_conditionement_article;
                       $this->qnt_unite = (!isset($qnt_unite) || empty($qnt_unite) )  ? 0: $qnt_unite;
                       $this->pxa_u_article_en_stock = (!isset($pxa_u_article_en_stock) || empty($pxa_u_article_en_stock) )  ? 0: $pxa_u_article_en_stock;
                       $this->cout_achat_conditionement_article = (!isset($cout_achat_conditionement_article) || empty($cout_achat_conditionement_article) )  ? 0: $cout_achat_conditionement_article;
                       $this->pxv_u_conditionement_article = (!isset($pxv_u_conditionement_article) || empty($pxv_u_conditionement_article) )  ? 0: $pxv_u_conditionement_article;
                       $this->pxv_bar_conditionement_article = (!isset($pxv_bar_conditionement_article) || empty($pxv_bar_conditionement_article) )  ? 0: $pxv_bar_conditionement_article;
                       $this->pxv_conditionement_article = (!isset($pxv_conditionement_article) || empty($pxv_conditionement_article) )  ? 0: $pxv_conditionement_article;
                       $this->id_conditionement = (!isset($id_conditionement) || empty($id_conditionement) )  ? 0: $id_conditionement;
                       $this->nom_conditionement = (!isset($nom_conditionement) || empty($nom_conditionement) )  ? '': $nom_conditionement;
                       $this->id_unite = (!isset($id_unite) || empty($id_unite) )  ? 0: $id_unite;
                       $this->nom_unite_conditionement = (!isset($nom_unite_conditionement) || empty($nom_unite_conditionement) )  ? '': $nom_unite_conditionement;
                       $this->nom_article = (!isset($nom_article) || empty($nom_article) )  ? '': $nom_article;
                       $this->id_service = (!isset($id_service) || empty($id_service) )  ? 0: $id_service;
                       $this->nom_stock = (!isset($nom_stock) || empty($nom_stock) )  ? '': $nom_stock;
                       $this->type_stock = (!isset($type_stock) || empty($type_stock) )  ? '': $type_stock;
                       $this->path_photo = (!isset($path_photo) || empty($path_photo) )  ? '': $path_photo;
                       $this->master = (!isset($master) || empty($master) )  ? 0: $master;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 )  ? $OldTable['id']:$this->id,
                                  'ref_article'=>(!isset($this->ref_article) || empty($this->ref_article) )  ? $OldTable['ref_article']:$this->ref_article,
                                  'id_article'=>($this->id_article == 0 )  ? $OldTable['id_article']:$this->id_article,
                                  'id_stock'=>($this->id_stock == 0 )  ? $OldTable['id_stock']:$this->id_stock,
                                  'qnt_article_en_stock'=>($this->qnt_article_en_stock == 0 )  ? $OldTable['qnt_article_en_stock']:$this->qnt_article_en_stock,
                                  'valeur_article_en_stock'=>($this->valeur_article_en_stock == 0 )  ? $OldTable['valeur_article_en_stock']:$this->valeur_article_en_stock,
                                  'min_qnt_article_en_stock'=>($this->min_qnt_article_en_stock == 0 )  ? $OldTable['min_qnt_article_en_stock']:$this->min_qnt_article_en_stock,
                                  'max_qnt_article_en_stock'=>($this->max_qnt_article_en_stock == 0 )  ? $OldTable['max_qnt_article_en_stock']:$this->max_qnt_article_en_stock,
                                  'id_conditionement_article'=>($this->id_conditionement_article == 0 )  ? $OldTable['id_conditionement_article']:$this->id_conditionement_article,
                                  'qnt_unite'=>($this->qnt_unite == 0 )  ? $OldTable['qnt_unite']:$this->qnt_unite,
                                  'pxa_u_article_en_stock'=>($this->pxa_u_article_en_stock == 0 )  ? $OldTable['pxa_u_article_en_stock']:$this->pxa_u_article_en_stock,
                                  'cout_achat_conditionement_article'=>($this->cout_achat_conditionement_article == 0 )  ? $OldTable['cout_achat_conditionement_article']:$this->cout_achat_conditionement_article,
                                  'pxv_u_conditionement_article'=>($this->pxv_u_conditionement_article == 0 )  ? $OldTable['pxv_u_conditionement_article']:$this->pxv_u_conditionement_article,
                                  'pxv_bar_conditionement_article'=>($this->pxv_bar_conditionement_article == 0 )  ? $OldTable['pxv_bar_conditionement_article']:$this->pxv_bar_conditionement_article,
                                  'pxv_conditionement_article'=>($this->pxv_conditionement_article == 0 )  ? $OldTable['pxv_conditionement_article']:$this->pxv_conditionement_article,
                                  'id_conditionement'=>($this->id_conditionement == 0 )  ? $OldTable['id_conditionement']:$this->id_conditionement,
                                  'nom_conditionement'=>(!isset($this->nom_conditionement) || empty($this->nom_conditionement) )  ? $OldTable['nom_conditionement']:$this->nom_conditionement,
                                  'id_unite'=>($this->id_unite == 0 )  ? $OldTable['id_unite']:$this->id_unite,
                                  'nom_unite_conditionement'=>(!isset($this->nom_unite_conditionement) || empty($this->nom_unite_conditionement) )  ? $OldTable['nom_unite_conditionement']:$this->nom_unite_conditionement,
                                  'nom_article'=>(!isset($this->nom_article) || empty($this->nom_article) )  ? $OldTable['nom_article']:$this->nom_article,
                                  'id_service'=>($this->id_service == 0 )  ? $OldTable['id_service']:$this->id_service,
                                  'nom_stock'=>(!isset($this->nom_stock) || empty($this->nom_stock) )  ? $OldTable['nom_stock']:$this->nom_stock,
                                  'type_stock'=>(!isset($this->type_stock) || empty($this->type_stock) )  ? $OldTable['type_stock']:$this->type_stock,
                                  'path_photo'=>(!isset($this->path_photo) || empty($this->path_photo) )  ? $OldTable['path_photo']:$this->path_photo,
                                  'master'=>($this->master == 0 )  ? $OldTable['master']:$this->master					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>0,
                                  'ref_article'=>"",
                                  'id_article'=>0,
                                  'id_stock'=>0,
                                  'qnt_article_en_stock'=>0,
                                  'valeur_article_en_stock'=>0,
                                  'min_qnt_article_en_stock'=>0,
                                  'max_qnt_article_en_stock'=>0,
                                  'id_conditionement_article'=>0,
                                  'qnt_unite'=>0,
                                  'pxa_u_article_en_stock'=>0,
                                  'cout_achat_conditionement_article'=>0,
                                  'pxv_u_conditionement_article'=>0,
                                  'pxv_bar_conditionement_article'=>0,
                                  'pxv_conditionement_article'=>0,
                                  'id_conditionement'=>0,
                                  'nom_conditionement'=>"",
                                  'id_unite'=>0,
                                  'nom_unite_conditionement'=>"",
                                  'nom_article'=>"",
                                  'id_service'=>0,
                                  'nom_stock'=>"",
                                  'type_stock'=>"",
                                  'path_photo'=>"",
                                  'master'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



