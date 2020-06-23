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

        class Caisse extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_service;
        private  $date_caisse;
        private  $solde_caisse;
        private  $depense_caisse;
        private  $gain_caisse;
        private  $flag_caisse;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="caisse";
                 $this->id = 'null' ;
                 $this->id_service = 0 ;
                 $this->date_caisse = date("") ;
                 $this->solde_caisse = 0 ;
                 $this->depense_caisse = 0 ;
                 $this->gain_caisse = 0 ;
                 $this->flag_caisse = 0 ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_service()
                 {
                     return $this->id_service;
                 }

             public function getDate_caisse()
                 {
                     return $this->date_caisse;
                 }

             public function getSolde_caisse()
                 {
                     return $this->solde_caisse;
                 }

             public function getDepense_caisse()
                 {
                     return $this->depense_caisse;
                 }

             public function getGain_caisse()
                 {
                     return $this->gain_caisse;
                 }

             public function getFlag_caisse()
                 {
                     return $this->flag_caisse;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_service($id_service)
                 {
                      $this->id_service = $id_service;
                 }

             public function setDate_caisse($date_caisse)
                 {
                      $this->date_caisse = $date_caisse;
                 }

             public function setSolde_caisse($solde_caisse)
                 {
                      $this->solde_caisse = $solde_caisse;
                 }

             public function setDepense_caisse($depense_caisse)
                 {
                      $this->depense_caisse = $depense_caisse;
                 }

             public function setGain_caisse($gain_caisse)
                 {
                      $this->gain_caisse = $gain_caisse;
                 }

             public function setFlag_caisse($flag_caisse)
                 {
                      $this->flag_caisse = $flag_caisse;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count caisse =====================*/
					public function countCaisse(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get caisse =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste caisse =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("caisse");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("caisse");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("caisse");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_caisse = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If caisse existe =====================*/
					public function ifCaisseexiste($condition){
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
                       $this->id_service = (!isset($id_service) || empty($id_service) )  ? 0: $id_service;
                       $this->date_caisse = (!isset($date_caisse) || empty($date_caisse) )  ? '': $date_caisse;
                       $this->solde_caisse = (!isset($solde_caisse) || empty($solde_caisse) )  ? 0: $solde_caisse;
                       $this->depense_caisse = (!isset($depense_caisse) || empty($depense_caisse) )  ? 0: $depense_caisse;
                       $this->gain_caisse = (!isset($gain_caisse) || empty($gain_caisse) )  ? 0: $gain_caisse;
                       $this->flag_caisse = (!isset($flag_caisse) || empty($flag_caisse) )  ? 0: $flag_caisse;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'id_service'=>($this->id_service == 0 )  ? $OldTable['id_service']:$this->id_service,
                                  'date_caisse'=>($this->date_caisse == null )  ? $OldTable['date_caisse']:$this->date_caisse,
                                  'solde_caisse'=>($this->solde_caisse == 0 )  ? $OldTable['solde_caisse']:$this->solde_caisse,
                                  'depense_caisse'=>($this->depense_caisse == 0 )  ? $OldTable['depense_caisse']:$this->depense_caisse,
                                  'gain_caisse'=>($this->gain_caisse == 0 )  ? $OldTable['gain_caisse']:$this->gain_caisse,
                                  'flag_caisse'=>($this->flag_caisse == 0 )  ? $OldTable['flag_caisse']:$this->flag_caisse					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'id_service'=>0,
                                  'date_caisse'=>date(""),
                                  'solde_caisse'=>0,
                                  'depense_caisse'=>0,
                                  'gain_caisse'=>0,
                                  'flag_caisse'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



