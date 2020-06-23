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

        class Conger extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $salarier_id;
        private  $type_conger_id;
        private  $id;
        private  $date_debut;
        private  $date_fin;
        private  $status_conger;
        private  $justificatif;
        private  $conger_payer;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="conger";
                 $this->salarier_id = 0 ;
                 $this->type_conger_id = 0 ;
                 $this->id = 0 ;
                 $this->date_debut = date("") ;
                 $this->date_fin = date("") ;
                 $this->status_conger = 0 ;
                 $this->justificatif = "" ;
                 $this->conger_payer = 0 ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getSalarier_id()
                 {
                     return $this->salarier_id;
                 }

             public function getType_conger_id()
                 {
                     return $this->type_conger_id;
                 }

             public function getId()
                 {
                     return $this->id;
                 }

             public function getDate_debut()
                 {
                     return $this->date_debut;
                 }

             public function getDate_fin()
                 {
                     return $this->date_fin;
                 }

             public function getStatus_conger()
                 {
                     return $this->status_conger;
                 }

             public function getJustificatif()
                 {
                     return $this->justificatif;
                 }

             public function getConger_payer()
                 {
                     return $this->conger_payer;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setSalarier_id($salarier_id)
                 {
                      $this->salarier_id = $salarier_id;
                 }

             public function setType_conger_id($type_conger_id)
                 {
                      $this->type_conger_id = $type_conger_id;
                 }

             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setDate_debut($date_debut)
                 {
                      $this->date_debut = $date_debut;
                 }

             public function setDate_fin($date_fin)
                 {
                      $this->date_fin = $date_fin;
                 }

             public function setStatus_conger($status_conger)
                 {
                      $this->status_conger = $status_conger;
                 }

             public function setJustificatif($justificatif)
                 {
                      $this->justificatif = $justificatif;
                 }

             public function setConger_payer($conger_payer)
                 {
                      $this->conger_payer = $conger_payer;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count conger =====================*/
					public function countConger(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get conger =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    ;
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste conger =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("conger");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("conger");
					    $condition = array(  );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("conger");
					    $condition = array(  );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_conger = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If conger existe =====================*/
					public function ifCongerexiste($condition){
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
                                                       $this->salarier_id = (!isset($salarier_id) || empty($salarier_id) )  ? 0: $salarier_id;
                       $this->type_conger_id = (!isset($type_conger_id) || empty($type_conger_id) )  ? 0: $type_conger_id;
                       $this->id = (!isset($id) || empty($id) )  ? 0: $id;
                       $this->date_debut = (!isset($date_debut) || empty($date_debut) )  ? '': $date_debut;
                       $this->date_fin = (!isset($date_fin) || empty($date_fin) )  ? '': $date_fin;
                       $this->status_conger = (!isset($status_conger) || empty($status_conger) )  ? 0: $status_conger;
                       $this->justificatif = (!isset($justificatif) || empty($justificatif) )  ? '': $justificatif;
                       $this->conger_payer = (!isset($conger_payer) || empty($conger_payer) )  ? 0: $conger_payer;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'salarier_id'=>($this->salarier_id == 0 )  ? $OldTable['salarier_id']:$this->salarier_id,
                                  'type_conger_id'=>($this->type_conger_id == 0 )  ? $OldTable['type_conger_id']:$this->type_conger_id,
                                  'id'=>($this->id == 0 )  ? $OldTable['id']:$this->id,
                                  'date_debut'=>($this->date_debut == null )  ? $OldTable['date_debut']:$this->date_debut,
                                  'date_fin'=>($this->date_fin == null )  ? $OldTable['date_fin']:$this->date_fin,
                                  'status_conger'=>($this->status_conger == 0 )  ? $OldTable['status_conger']:$this->status_conger,
                                  'justificatif'=>(!isset($this->justificatif) || empty($this->justificatif) )  ? $OldTable['justificatif']:$this->justificatif,
                                  'conger_payer'=>($this->conger_payer == 0 )  ? $OldTable['conger_payer']:$this->conger_payer					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'salarier_id'=>0,
                                  'type_conger_id'=>0,
                                  'id'=>0,
                                  'date_debut'=>date(""),
                                  'date_fin'=>date(""),
                                  'status_conger'=>0,
                                  'justificatif'=>"",
                                  'conger_payer'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



