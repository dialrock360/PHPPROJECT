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
    /*==================Classe creer par Samane samane_ui_admin le 05-12-2019 02:38:07=====================*/

        class Conditionement_article extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_article_en_stock;
        private  $id_conditionement;
        private  $id_unite;
        private  $qnt_unite;
        private  $pxa_u_article_en_stock;
        private  $cout_achat_conditionement_article;
        private  $pxv_u_conditionement_article;
        private  $pxv_bar_conditionement_article;
        private  $pxv_conditionement_article;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="conditionement_article";
                 $this->id = 'null' ;
                 $this->id_article_en_stock = 0 ;
                 $this->id_conditionement = 0 ;
                 $this->id_unite = 0 ;
                 $this->qnt_unite = 0 ;
                 $this->pxa_u_article_en_stock = 0 ;
                 $this->cout_achat_conditionement_article = 0 ;
                 $this->pxv_u_conditionement_article = 0 ;
                 $this->pxv_bar_conditionement_article = 0 ;
                 $this->pxv_conditionement_article = 0 ;
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

             public function getId_conditionement()
                 {
                     return $this->id_conditionement;
                 }

             public function getId_unite()
                 {
                     return $this->id_unite;
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

             public function setId_conditionement($id_conditionement)
                 {
                      $this->id_conditionement = $id_conditionement;
                 }

             public function setId_unite($id_unite)
                 {
                      $this->id_unite = $id_unite;
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

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count conditionement_article =====================*/
					public function countConditionement_article(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get conditionement_article =====================*/
					public function get($conditionement_article=''){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                    //   return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
                        $condition = array("id" =>($conditionement_article=='')?$this->id:$conditionement_article);
                        return $this->conditional_get($condition);
					                }

				/*================== Liste conditionement_article =====================*/
                        public function liste(){
                            $this->db->setTablename($this->tablename);
                            // return $this->db->getRows(array("return_type"=>"many"));
                            return $this->list_all();
                        }
                        public function Vliste(){
                            $this->db->setTablename("v_article_en_stock");
                            // return $this->db->getRows(array("return_type"=>"many"));
                            return $this->list_all();
                        }
                        public function listeByArticle_en_stock($id_article_en_stock=''){
                                $this->db->setTablename("v_conditionement_article");
                                $condition = array("id_stock" =>($id_article_en_stock=='')?$this->id_article_en_stock:$id_article_en_stock);
                                // return $this->db->getRows(array("where"=>$condition,'order_by'=>'nom_article',"return_type"=>"many"));
                                $filter = array("order_by" =>'nom_conditionement');
                                return $this->conditional_liste($condition,$filter);
                            }
					  public function insert(){
					    $this->setTablename("conditionement_article");
					    $this->setTablearray($this->ObjecToarrayMaker());

                         // print_r($this->ObjecToarrayMaker());
                         /* echo '<br>';
                          return 1;*/
                           return   $this->post();
                               }

                                public function update($conditionement_article=''){
                                    $this->setTablename("conditionement_article");


                                    $condition = array( 'id'=>$this->id );
                                    $Toarray =($conditionement_article=='')?$this->ObjecToarrayMaker():$conditionement_article ;
                                   // echo ' <hr>Toarray : <br>'; print_r($Toarray); echo '<hr>';
                                    $this->setTablearray($Toarray);
                                   // return   $this->put($condition);
                                }
					  public function delete(){
					    $this->setTablename("conditionement_article");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_conditionement_article = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If conditionement_article existe =====================*/
					public function ifConditionement_articleexiste($condition){
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
                       $this->id_conditionement = (!isset($id_conditionement) || empty($id_conditionement) )  ? 0: $id_conditionement;
                       $this->id_unite = (!isset($id_unite) || empty($id_unite) )  ? 0: $id_unite;
                       $this->qnt_unite = (!isset($qnt_unite) || empty($qnt_unite) )  ? 0: $qnt_unite;
                       $this->pxa_u_article_en_stock = (!isset($pxa_u_article_en_stock) || empty($pxa_u_article_en_stock) )  ? 0: $pxa_u_article_en_stock;
                       $this->cout_achat_conditionement_article = (!isset($cout_achat_conditionement_article) || empty($cout_achat_conditionement_article) )  ? 0: $cout_achat_conditionement_article;
                       $this->pxv_u_conditionement_article = (!isset($pxv_u_conditionement_article) || empty($pxv_u_conditionement_article) )  ? 0: $pxv_u_conditionement_article;
                       $this->pxv_bar_conditionement_article = (!isset($pxv_bar_conditionement_article) || empty($pxv_bar_conditionement_article) )  ? 0: $pxv_bar_conditionement_article;
                       $this->pxv_conditionement_article = (!isset($pxv_conditionement_article) || empty($pxv_conditionement_article) )  ? 0: $pxv_conditionement_article;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();

					    if ($this->id > 0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'id_article_en_stock'=>($this->id_article_en_stock == 0 )  ? $OldTable['id_article_en_stock']:$this->id_article_en_stock,
                                  'id_conditionement'=>($this->id_conditionement == 0 )  ? $OldTable['id_conditionement']:$this->id_conditionement,
                                  'id_unite'=>($this->id_unite == 0 )  ? $OldTable['id_unite']:$this->id_unite,
                                  'qnt_unite'=>(empty($this->qnt_unite ) )  ? $OldTable['qnt_unite']:$this->qnt_unite,
                                  'pxa_u_article_en_stock'=>(empty($this->pxa_u_article_en_stock ))  ? $OldTable['pxa_u_article_en_stock']:$this->pxa_u_article_en_stock,
                                  'cout_achat_conditionement_article'=>(empty($this->cout_achat_conditionement_article ) )  ? $OldTable['cout_achat_conditionement_article']:$this->cout_achat_conditionement_article,
                                  'pxv_u_conditionement_article'=>(empty($this->pxv_u_conditionement_article ))  ? $OldTable['pxv_u_conditionement_article']:$this->pxv_u_conditionement_article,
                                  'pxv_bar_conditionement_article'=>(empty($this->pxv_bar_conditionement_article ))  ? $OldTable['pxv_bar_conditionement_article']:$this->pxv_bar_conditionement_article,
                                  'pxv_conditionement_article'=>(empty($this->pxv_conditionement_article ))  ? $OldTable['pxv_conditionement_article']:$this->pxv_conditionement_article					     );
                                  return $Table;
                          }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'id_article_en_stock'=>0,
                                  'id_conditionement'=>0,
                                  'id_unite'=>0,
                                  'qnt_unite'=>0,
                                  'pxa_u_article_en_stock'=>0,
                                  'cout_achat_conditionement_article'=>0,
                                  'pxv_u_conditionement_article'=>0,
                                  'pxv_bar_conditionement_article'=>0,
                                  'pxv_conditionement_article'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



