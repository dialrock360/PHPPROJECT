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

        class Payement extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_mouvement;
        private  $type_payement;
        private  $mts_payement;
        private  $date_payement;
        private  $detail_payement;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="payement";
                 $this->id = 'null' ;
                 $this->id_mouvement = 0 ;
                 $this->type_payement = '' ;
                 $this->mts_payement = 0 ;
                 $this->date_payement = "" ;
                 $this->detail_payement = "" ;
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

             public function getType_payement()
                 {
                     return $this->type_payement;
                 }

             public function getMts_payement()
                 {
                     return $this->mts_payement;
                 }

             public function getDate_payement()
                 {
                     return $this->date_payement;
                 }

             public function getDetail_payement()
                 {
                     return $this->detail_payement;
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

             public function setType_payement($type_payement)
                 {
                      $this->type_payement = $type_payement;
                 }

             public function setMts_payement($mts_payement)
                 {
                      $this->mts_payement = $mts_payement;
                 }

             public function setDate_payement($date_payement)
                 {
                      $this->date_payement = $date_payement;
                 }

             public function setDetail_payement($detail_payement)
                 {
                      $this->detail_payement = $detail_payement;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count payement =====================*/
					public function countPayement(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get payement =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste payement =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("payement");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("payement");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("payement");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_payement = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If payement existe =====================*/
					public function ifPayementexiste($condition){
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
                       $this->type_payement = (!isset($type_payement) || empty($type_payement) )  ? '': $type_payement;
                       $this->mts_payement = (!isset($mts_payement) || empty($mts_payement) )  ? 0: $mts_payement;
                       $this->date_payement = (!isset($date_payement) || empty($date_payement) )  ? '': $date_payement;
                       $this->detail_payement = (!isset($detail_payement) || empty($detail_payement) )  ? '': $detail_payement;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'id_mouvement'=>($this->id_mouvement == 0 )  ? $OldTable['id_mouvement']:$this->id_mouvement,
                                  'type_payement'=>(!isset($this->type_payement) || empty($this->type_payement) )  ? $OldTable['type_payement']:$this->type_payement,
                                  'mts_payement'=>($this->mts_payement == 0 )  ? $OldTable['mts_payement']:$this->mts_payement,
                                  'date_payement'=>(!isset($this->date_payement) || empty($this->date_payement) )  ? $OldTable['date_payement']:$this->date_payement,
                                  'detail_payement'=>(!isset($this->detail_payement) || empty($this->detail_payement) )  ? $OldTable['detail_payement']:$this->detail_payement					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'id_mouvement'=>0,
                                  'type_payement'=>'',
                                  'mts_payement'=>0,
                                  'date_payement'=>"",
                                  'detail_payement'=>""					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



