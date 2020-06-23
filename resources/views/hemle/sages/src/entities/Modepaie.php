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

        class Modepaie extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $salarier_id;
        private  $typepaie;
        private  $domiciliation;
        private  $iban;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="modepaie";
                 $this->id = 'null' ;
                 $this->salarier_id = 0 ;
                 $this->typepaie = "" ;
                 $this->domiciliation = "" ;
                 $this->iban = "" ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getSalarier_id()
                 {
                     return $this->salarier_id;
                 }

             public function getTypepaie()
                 {
                     return $this->typepaie;
                 }

             public function getDomiciliation()
                 {
                     return $this->domiciliation;
                 }

             public function getIban()
                 {
                     return $this->iban;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setSalarier_id($salarier_id)
                 {
                      $this->salarier_id = $salarier_id;
                 }

             public function setTypepaie($typepaie)
                 {
                      $this->typepaie = $typepaie;
                 }

             public function setDomiciliation($domiciliation)
                 {
                      $this->domiciliation = $domiciliation;
                 }

             public function setIban($iban)
                 {
                      $this->iban = $iban;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count modepaie =====================*/
					public function countModepaie(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get modepaie =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste modepaie =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("modepaie");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("modepaie");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("modepaie");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_modepaie = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If modepaie existe =====================*/
					public function ifModepaieexiste($condition){
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
                       $this->salarier_id = (!isset($salarier_id) || empty($salarier_id) )  ? 0: $salarier_id;
                       $this->typepaie = (!isset($typepaie) || empty($typepaie) )  ? '': $typepaie;
                       $this->domiciliation = (!isset($domiciliation) || empty($domiciliation) )  ? '': $domiciliation;
                       $this->iban = (!isset($iban) || empty($iban) )  ? '': $iban;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'salarier_id'=>($this->salarier_id == 0 )  ? $OldTable['salarier_id']:$this->salarier_id,
                                  'typepaie'=>(!isset($this->typepaie) || empty($this->typepaie) )  ? $OldTable['typepaie']:$this->typepaie,
                                  'domiciliation'=>(!isset($this->domiciliation) || empty($this->domiciliation) )  ? $OldTable['domiciliation']:$this->domiciliation,
                                  'iban'=>(!isset($this->iban) || empty($this->iban) )  ? $OldTable['iban']:$this->iban					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'salarier_id'=>0,
                                  'typepaie'=>"",
                                  'domiciliation'=>"",
                                  'iban'=>""					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



