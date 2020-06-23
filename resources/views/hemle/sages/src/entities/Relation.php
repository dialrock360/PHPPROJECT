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
    /*==================Classe creer par Samane samane_ui_admin le 04-12-2019 12:35:01=====================*/

        class Relation extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $idautor;
        private  $idcountry;
        private  $ref;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="relation";
                 $this->idautor = 0 ;
                 $this->idcountry = 0 ;
                 $this->ref = "" ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getIdautor()
                 {
                     return $this->idautor;
                 }

             public function getIdcountry()
                 {
                     return $this->idcountry;
                 }

             public function getRef()
                 {
                     return $this->ref;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setIdautor($idautor)
                 {
                      $this->idautor = $idautor;
                 }

             public function setIdcountry($idcountry)
                 {
                      $this->idcountry = $idcountry;
                 }

             public function setRef($ref)
                 {
                      $this->ref = $ref;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count relation =====================*/
					public function countRelation(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get relation =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("idautor" =>$this->idautor);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste relation =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'idautor'=>($this->idautor == 0 )  ? $OldTable['idautor']:$this->idautor,
                                  'idcountry'=>($this->idcountry == 0 )  ? $OldTable['idcountry']:$this->idcountry,
                                  'ref'=>(!isset($this->ref) || empty($this->ref) )  ? $OldTable['ref']:$this->ref					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'idautor'=>0,
                                  'idcountry'=>0,
                                  'ref'=>""					     );
                                  return $Table;
                  }
					  public function insert(){
					    $this->setTablename("relation");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("relation");
					    $condition = array( 'idautor'=>$this->idautor,'idcountry'=>$this->idcountry );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("relation");
					    $condition = array( 'idautor'=>$this->idautor,'idcountry'=>$this->idcountry );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_relation = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If relation existe =====================*/
					public function ifRelationexiste($condition){
					    $this->db->setTablename($this->tablename);
	$existe=$this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					if($existe != null)
					      {
					                 return 1;
					      } 
					return 0;
					                }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



