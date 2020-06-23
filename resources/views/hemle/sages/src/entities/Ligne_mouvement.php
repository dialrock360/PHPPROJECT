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

        class Ligne_mouvement extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_mouvement;
        private  $id_article;
        private  $pu_ligne_mouvement;
        private  $qnt_ligne_mouvement;
        private  $mts_ligne_mouvement;
        private  $position_ligne_mouvement;
        private  $designation_ligne_mouvement;
        private  $conditionement_ligne_mouvement;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="ligne_mouvement";
                 $this->id = 'null' ;
                 $this->id_mouvement = 0 ;
                 $this->id_article = 0 ;
                 $this->pu_ligne_mouvement = 0 ;
                 $this->qnt_ligne_mouvement = 0 ;
                 $this->mts_ligne_mouvement = 0 ;
                 $this->position_ligne_mouvement = 0 ;
                 $this->designation_ligne_mouvement = "" ;
                 $this->conditionement_ligne_mouvement = "" ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_mouvement()
                 {
                     return $this->id_mouvement;
                 }

             public function getId_article()
                 {
                     return $this->id_article;
                 }

             public function getPu_ligne_mouvement()
                 {
                     return $this->pu_ligne_mouvement;
                 }

             public function getQnt_ligne_mouvement()
                 {
                     return $this->qnt_ligne_mouvement;
                 }

             public function getMts_ligne_mouvement()
                 {
                     return $this->mts_ligne_mouvement;
                 }

             public function getPosition_ligne_mouvement()
                 {
                     return $this->position_ligne_mouvement;
                 }

             public function getDesignation_ligne_mouvement()
                 {
                     return $this->designation_ligne_mouvement;
                 }

             public function getConditionement_ligne_mouvement()
                 {
                     return $this->conditionement_ligne_mouvement;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_mouvement($id_mouvement)
                 {
                      $this->id_mouvement = $id_mouvement;
                 }

             public function setId_article($id_article)
                 {
                      $this->id_article = $id_article;
                 }

             public function setPu_ligne_mouvement($pu_ligne_mouvement)
                 {
                      $this->pu_ligne_mouvement = $pu_ligne_mouvement;
                 }

             public function setQnt_ligne_mouvement($qnt_ligne_mouvement)
                 {
                      $this->qnt_ligne_mouvement = $qnt_ligne_mouvement;
                 }

             public function setMts_ligne_mouvement($mts_ligne_mouvement)
                 {
                      $this->mts_ligne_mouvement = $mts_ligne_mouvement;
                 }

             public function setPosition_ligne_mouvement($position_ligne_mouvement)
                 {
                      $this->position_ligne_mouvement = $position_ligne_mouvement;
                 }

             public function setDesignation_ligne_mouvement($designation_ligne_mouvement)
                 {
                      $this->designation_ligne_mouvement = $designation_ligne_mouvement;
                 }

             public function setConditionement_ligne_mouvement($conditionement_ligne_mouvement)
                 {
                      $this->conditionement_ligne_mouvement = $conditionement_ligne_mouvement;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count ligne_mouvement =====================*/
					public function countLigne_mouvement(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get ligne_mouvement =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste ligne_mouvement =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("ligne_mouvement");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("ligne_mouvement");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("ligne_mouvement");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_ligne_mouvement = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If ligne_mouvement existe =====================*/
					public function ifLigne_mouvementexiste($condition){
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
                       $this->id_mouvement = (!isset($id_mouvement) || empty($id_mouvement) )  ? 0: $id_mouvement;
                       $this->id_article = (!isset($id_article) || empty($id_article) )  ? 0: $id_article;
                       $this->pu_ligne_mouvement = (!isset($pu_ligne_mouvement) || empty($pu_ligne_mouvement) )  ? 0: $pu_ligne_mouvement;
                       $this->qnt_ligne_mouvement = (!isset($qnt_ligne_mouvement) || empty($qnt_ligne_mouvement) )  ? 0: $qnt_ligne_mouvement;
                       $this->mts_ligne_mouvement = (!isset($mts_ligne_mouvement) || empty($mts_ligne_mouvement) )  ? 0: $mts_ligne_mouvement;
                       $this->position_ligne_mouvement = (!isset($position_ligne_mouvement) || empty($position_ligne_mouvement) )  ? 0: $position_ligne_mouvement;
                       $this->designation_ligne_mouvement = (!isset($designation_ligne_mouvement) || empty($designation_ligne_mouvement) )  ? '': $designation_ligne_mouvement;
                       $this->conditionement_ligne_mouvement = (!isset($conditionement_ligne_mouvement) || empty($conditionement_ligne_mouvement) )  ? '': $conditionement_ligne_mouvement;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'id_mouvement'=>($this->id_mouvement == 0 )  ? $OldTable['id_mouvement']:$this->id_mouvement,
                                  'id_article'=>($this->id_article == 0 )  ? $OldTable['id_article']:$this->id_article,
                                  'pu_ligne_mouvement'=>($this->pu_ligne_mouvement == 0 )  ? $OldTable['pu_ligne_mouvement']:$this->pu_ligne_mouvement,
                                  'qnt_ligne_mouvement'=>($this->qnt_ligne_mouvement == 0 )  ? $OldTable['qnt_ligne_mouvement']:$this->qnt_ligne_mouvement,
                                  'mts_ligne_mouvement'=>($this->mts_ligne_mouvement == 0 )  ? $OldTable['mts_ligne_mouvement']:$this->mts_ligne_mouvement,
                                  'position_ligne_mouvement'=>($this->position_ligne_mouvement == 0 )  ? $OldTable['position_ligne_mouvement']:$this->position_ligne_mouvement,
                                  'designation_ligne_mouvement'=>(!isset($this->designation_ligne_mouvement) || empty($this->designation_ligne_mouvement) )  ? $OldTable['designation_ligne_mouvement']:$this->designation_ligne_mouvement,
                                  'conditionement_ligne_mouvement'=>(!isset($this->conditionement_ligne_mouvement) || empty($this->conditionement_ligne_mouvement) )  ? $OldTable['conditionement_ligne_mouvement']:$this->conditionement_ligne_mouvement					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'id_mouvement'=>0,
                                  'id_article'=>0,
                                  'pu_ligne_mouvement'=>0,
                                  'qnt_ligne_mouvement'=>0,
                                  'mts_ligne_mouvement'=>0,
                                  'position_ligne_mouvement'=>0,
                                  'designation_ligne_mouvement'=>"",
                                  'conditionement_ligne_mouvement'=>""					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



