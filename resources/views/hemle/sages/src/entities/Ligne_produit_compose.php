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
    /*==================Classe creer par Samane samane_ui_admin le 05-12-2019 02:38:08=====================*/

        class Ligne_produit_compose extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_produit;
        private  $id_article;
        private  $pxa_ligne_produit_compose;
        private  $qnt_ligne_produit_compose;
        private  $mts_ligne_produit_compose;
        private  $position_ligne_produit_compose;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="ligne_produit_compose";
                 $this->id = 'null' ;
                 $this->id_produit = 0 ;
                 $this->id_article = 0 ;
                 $this->pxa_ligne_produit_compose = 0 ;
                 $this->qnt_ligne_produit_compose = 0 ;
                 $this->mts_ligne_produit_compose = 0 ;
                 $this->position_ligne_produit_compose = 0 ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_produit()
                 {
                     return $this->id_produit;
                 }

             public function getId_article()
                 {
                     return $this->id_article;
                 }

             public function getPxa_ligne_produit_compose()
                 {
                     return $this->pxa_ligne_produit_compose;
                 }

             public function getQnt_ligne_produit_compose()
                 {
                     return $this->qnt_ligne_produit_compose;
                 }

             public function getMts_ligne_produit_compose()
                 {
                     return $this->mts_ligne_produit_compose;
                 }

             public function getPosition_ligne_produit_compose()
                 {
                     return $this->position_ligne_produit_compose;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_produit($id_produit)
                 {
                      $this->id_produit = $id_produit;
                 }

             public function setId_article($id_article)
                 {
                      $this->id_article = $id_article;
                 }

             public function setPxa_ligne_produit_compose($pxa_ligne_produit_compose)
                 {
                      $this->pxa_ligne_produit_compose = $pxa_ligne_produit_compose;
                 }

             public function setQnt_ligne_produit_compose($qnt_ligne_produit_compose)
                 {
                      $this->qnt_ligne_produit_compose = $qnt_ligne_produit_compose;
                 }

             public function setMts_ligne_produit_compose($mts_ligne_produit_compose)
                 {
                      $this->mts_ligne_produit_compose = $mts_ligne_produit_compose;
                 }

             public function setPosition_ligne_produit_compose($position_ligne_produit_compose)
                 {
                      $this->position_ligne_produit_compose = $position_ligne_produit_compose;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count ligne_produit_compose =====================*/
					public function countLigne_produit_compose(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get ligne_produit_compose =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste ligne_produit_compose =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("ligne_produit_compose");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("ligne_produit_compose");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("ligne_produit_compose");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_ligne_produit_compose = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If ligne_produit_compose existe =====================*/
					public function ifLigne_produit_composeexiste($condition){
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
                       $this->id_produit = (!isset($id_produit) || empty($id_produit) )  ? 0: $id_produit;
                       $this->id_article = (!isset($id_article) || empty($id_article) )  ? 0: $id_article;
                       $this->pxa_ligne_produit_compose = (!isset($pxa_ligne_produit_compose) || empty($pxa_ligne_produit_compose) )  ? 0: $pxa_ligne_produit_compose;
                       $this->qnt_ligne_produit_compose = (!isset($qnt_ligne_produit_compose) || empty($qnt_ligne_produit_compose) )  ? 0: $qnt_ligne_produit_compose;
                       $this->mts_ligne_produit_compose = (!isset($mts_ligne_produit_compose) || empty($mts_ligne_produit_compose) )  ? 0: $mts_ligne_produit_compose;
                       $this->position_ligne_produit_compose = (!isset($position_ligne_produit_compose) || empty($position_ligne_produit_compose) )  ? 0: $position_ligne_produit_compose;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'id_produit'=>($this->id_produit == 0 )  ? $OldTable['id_produit']:$this->id_produit,
                                  'id_article'=>($this->id_article == 0 )  ? $OldTable['id_article']:$this->id_article,
                                  'pxa_ligne_produit_compose'=>($this->pxa_ligne_produit_compose == 0 )  ? $OldTable['pxa_ligne_produit_compose']:$this->pxa_ligne_produit_compose,
                                  'qnt_ligne_produit_compose'=>($this->qnt_ligne_produit_compose == 0 )  ? $OldTable['qnt_ligne_produit_compose']:$this->qnt_ligne_produit_compose,
                                  'mts_ligne_produit_compose'=>($this->mts_ligne_produit_compose == 0 )  ? $OldTable['mts_ligne_produit_compose']:$this->mts_ligne_produit_compose,
                                  'position_ligne_produit_compose'=>($this->position_ligne_produit_compose == 0 )  ? $OldTable['position_ligne_produit_compose']:$this->position_ligne_produit_compose					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'id_produit'=>0,
                                  'id_article'=>0,
                                  'pxa_ligne_produit_compose'=>0,
                                  'qnt_ligne_produit_compose'=>0,
                                  'mts_ligne_produit_compose'=>0,
                                  'position_ligne_produit_compose'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



