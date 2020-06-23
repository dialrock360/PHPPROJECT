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

        class Flux_stock extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_article;
        private  $id_stock;
        private  $id_conditionement_article;
        private  $type_flux;
        private  $date_flux_stock;
        private  $type_flux_stock;
        private  $qnt_flux_stock;
        private  $pu_flux_stock;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="flux_stock";
                 $this->id = 'null' ;
                 $this->id_article = 0 ;
                 $this->id_stock = 0 ;
                 $this->id_conditionement_article = 0 ;
                 $this->type_flux = '' ;
                 $this->date_flux_stock = date("") ;
                 $this->type_flux_stock = 0 ;
                 $this->qnt_flux_stock = 0 ;
                 $this->pu_flux_stock = 0 ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_article()
                 {
                     return $this->id_article;
                 }

             public function getId_stock()
                 {
                     return $this->id_stock;
                 }

             public function getId_conditionement_article()
                 {
                     return $this->id_conditionement_article;
                 }

             public function getType_flux()
                 {
                     return $this->type_flux;
                 }

             public function getDate_flux_stock()
                 {
                     return $this->date_flux_stock;
                 }

             public function getType_flux_stock()
                 {
                     return $this->type_flux_stock;
                 }

             public function getQnt_flux_stock()
                 {
                     return $this->qnt_flux_stock;
                 }

             public function getPu_flux_stock()
                 {
                     return $this->pu_flux_stock;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_article($id_article)
                 {
                      $this->id_article = $id_article;
                 }

             public function setId_stock($id_stock)
                 {
                      $this->id_stock = $id_stock;
                 }

             public function setId_conditionement_article($id_conditionement_article)
                 {
                      $this->id_conditionement_article = $id_conditionement_article;
                 }

             public function setType_flux($type_flux)
                 {
                      $this->type_flux = $type_flux;
                 }

             public function setDate_flux_stock($date_flux_stock)
                 {
                      $this->date_flux_stock = $date_flux_stock;
                 }

             public function setType_flux_stock($type_flux_stock)
                 {
                      $this->type_flux_stock = $type_flux_stock;
                 }

             public function setQnt_flux_stock($qnt_flux_stock)
                 {
                      $this->qnt_flux_stock = $qnt_flux_stock;
                 }

             public function setPu_flux_stock($pu_flux_stock)
                 {
                      $this->pu_flux_stock = $pu_flux_stock;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count flux_stock =====================*/
					public function countFlux_stock(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get flux_stock =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste flux_stock =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("flux_stock");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("flux_stock");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("flux_stock");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_flux_stock = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If flux_stock existe =====================*/
					public function ifFlux_stockexiste($condition){
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
                       $this->id_article = (!isset($id_article) || empty($id_article) )  ? 0: $id_article;
                       $this->id_stock = (!isset($id_stock) || empty($id_stock) )  ? 0: $id_stock;
                       $this->id_conditionement_article = (!isset($id_conditionement_article) || empty($id_conditionement_article) )  ? 0: $id_conditionement_article;
                       $this->type_flux = (!isset($type_flux) || empty($type_flux) )  ? '': $type_flux;
                       $this->date_flux_stock = (!isset($date_flux_stock) || empty($date_flux_stock) )  ? '': $date_flux_stock;
                       $this->type_flux_stock = (!isset($type_flux_stock) || empty($type_flux_stock) )  ? 0: $type_flux_stock;
                       $this->qnt_flux_stock = (!isset($qnt_flux_stock) || empty($qnt_flux_stock) )  ? 0: $qnt_flux_stock;
                       $this->pu_flux_stock = (!isset($pu_flux_stock) || empty($pu_flux_stock) )  ? 0: $pu_flux_stock;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'id_article'=>($this->id_article == 0 )  ? $OldTable['id_article']:$this->id_article,
                                  'id_stock'=>($this->id_stock == 0 )  ? $OldTable['id_stock']:$this->id_stock,
                                  'id_conditionement_article'=>($this->id_conditionement_article == 0 )  ? $OldTable['id_conditionement_article']:$this->id_conditionement_article,
                                  'type_flux'=>(!isset($this->type_flux) || empty($this->type_flux) )  ? $OldTable['type_flux']:$this->type_flux,
                                  'date_flux_stock'=>($this->date_flux_stock == null )  ? $OldTable['date_flux_stock']:$this->date_flux_stock,
                                  'type_flux_stock'=>($this->type_flux_stock == 0 )  ? $OldTable['type_flux_stock']:$this->type_flux_stock,
                                  'qnt_flux_stock'=>($this->qnt_flux_stock == 0 )  ? $OldTable['qnt_flux_stock']:$this->qnt_flux_stock,
                                  'pu_flux_stock'=>($this->pu_flux_stock == 0 )  ? $OldTable['pu_flux_stock']:$this->pu_flux_stock					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'id_article'=>0,
                                  'id_stock'=>0,
                                  'id_conditionement_article'=>0,
                                  'type_flux'=>'',
                                  'date_flux_stock'=>date(""),
                                  'type_flux_stock'=>0,
                                  'qnt_flux_stock'=>0,
                                  'pu_flux_stock'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



