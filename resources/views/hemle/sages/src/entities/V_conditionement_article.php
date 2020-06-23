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

        class V_conditionement_article extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_article_en_stock;
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
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="v_conditionement_article";
                 $this->id = 0 ;
                 $this->id_article_en_stock = 0 ;
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
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_article_en_stock()
                 {
                     return $this->id_article_en_stock;
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

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_article_en_stock($id_article_en_stock)
                 {
                      $this->id_article_en_stock = $id_article_en_stock;
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

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count v_conditionement_article =====================*/
					public function countV_conditionement_article(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get v_conditionement_article =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    ;
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste v_conditionement_article =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("v_conditionement_article");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("v_conditionement_article");
					    $condition = array(  );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("v_conditionement_article");
					    $condition = array(  );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_v_conditionement_article = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If v_conditionement_article existe =====================*/
					public function ifV_conditionement_articleexiste($condition){
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
                       $this->id_article_en_stock = (!isset($id_article_en_stock) || empty($id_article_en_stock) )  ? 0: $id_article_en_stock;
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
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 )  ? $OldTable['id']:$this->id,
                                  'id_article_en_stock'=>($this->id_article_en_stock == 0 )  ? $OldTable['id_article_en_stock']:$this->id_article_en_stock,
                                  'qnt_unite'=>($this->qnt_unite == 0 )  ? $OldTable['qnt_unite']:$this->qnt_unite,
                                  'pxa_u_article_en_stock'=>($this->pxa_u_article_en_stock == 0 )  ? $OldTable['pxa_u_article_en_stock']:$this->pxa_u_article_en_stock,
                                  'cout_achat_conditionement_article'=>($this->cout_achat_conditionement_article == 0 )  ? $OldTable['cout_achat_conditionement_article']:$this->cout_achat_conditionement_article,
                                  'pxv_u_conditionement_article'=>($this->pxv_u_conditionement_article == 0 )  ? $OldTable['pxv_u_conditionement_article']:$this->pxv_u_conditionement_article,
                                  'pxv_bar_conditionement_article'=>($this->pxv_bar_conditionement_article == 0 )  ? $OldTable['pxv_bar_conditionement_article']:$this->pxv_bar_conditionement_article,
                                  'pxv_conditionement_article'=>($this->pxv_conditionement_article == 0 )  ? $OldTable['pxv_conditionement_article']:$this->pxv_conditionement_article,
                                  'id_conditionement'=>($this->id_conditionement == 0 )  ? $OldTable['id_conditionement']:$this->id_conditionement,
                                  'nom_conditionement'=>(!isset($this->nom_conditionement) || empty($this->nom_conditionement) )  ? $OldTable['nom_conditionement']:$this->nom_conditionement,
                                  'id_unite'=>($this->id_unite == 0 )  ? $OldTable['id_unite']:$this->id_unite,
                                  'nom_unite_conditionement'=>(!isset($this->nom_unite_conditionement) || empty($this->nom_unite_conditionement) )  ? $OldTable['nom_unite_conditionement']:$this->nom_unite_conditionement					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>0,
                                  'id_article_en_stock'=>0,
                                  'qnt_unite'=>0,
                                  'pxa_u_article_en_stock'=>0,
                                  'cout_achat_conditionement_article'=>0,
                                  'pxv_u_conditionement_article'=>0,
                                  'pxv_bar_conditionement_article'=>0,
                                  'pxv_conditionement_article'=>0,
                                  'id_conditionement'=>0,
                                  'nom_conditionement'=>"",
                                  'id_unite'=>0,
                                  'nom_unite_conditionement'=>""					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



