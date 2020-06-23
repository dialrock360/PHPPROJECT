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

        class Set_test extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $rowid;
        private  $name;
        private  $size;
        private  $myset;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="set_test";
                 $this->rowid = 'null' ;
                 $this->name = "" ;
                 $this->size = '' ;
                 $this->myset = '' ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getRowid()
                 {
                     return $this->rowid;
                 }

             public function getName()
                 {
                     return $this->name;
                 }

             public function getSize()
                 {
                     return $this->size;
                 }

             public function getMyset()
                 {
                     return $this->myset;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setRowid($rowid)
                 {
                      $this->rowid = $rowid;
                 }

             public function setName($name)
                 {
                      $this->name = $name;
                 }

             public function setSize($size)
                 {
                      $this->size = $size;
                 }

             public function setMyset($myset)
                 {
                      $this->myset = $myset;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count set_test =====================*/
					public function countSet_test(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get set_test =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("rowid" =>$this->rowid);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste set_test =====================*/
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
                                 
                                  'rowid'=>($this->rowid == 0 || $this->rowid == 'null')  ? $OldTable['rowid']:$this->rowid,
                                  'name'=>(!isset($this->name) || empty($this->name) )  ? $OldTable['name']:$this->name,
                                  'size'=>(!isset($this->size) || empty($this->size) )  ? $OldTable['size']:$this->size,
                                  'myset'=>(!isset($this->myset) || empty($this->myset) )  ? $OldTable['myset']:$this->myset					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'rowid'=>'null',
                                  'name'=>"",
                                  'size'=>'',
                                  'myset'=>''					     );
                                  return $Table;
                  }
					  public function insert(){
					    $this->setTablename("set_test");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("set_test");
					    $condition = array( 'rowid'=>$this->rowid );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("set_test");
					    $condition = array( 'rowid'=>$this->rowid );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_set_test = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If set_test existe =====================*/
					public function ifSet_testexiste($condition){
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



