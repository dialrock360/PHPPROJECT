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

        class Jour_ferier extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $fiche_jour_id;
        private  $date_jour;
        private  $description;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="jour_ferier";
                 $this->id = 'null' ;
                 $this->fiche_jour_id = 0 ;
                 $this->date_jour = 0 ;
                 $this->description = "" ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getFiche_jour_id()
                 {
                     return $this->fiche_jour_id;
                 }

             public function getDate_jour()
                 {
                     return $this->date_jour;
                 }

             public function getDescription()
                 {
                     return $this->description;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setFiche_jour_id($fiche_jour_id)
                 {
                      $this->fiche_jour_id = $fiche_jour_id;
                 }

             public function setDate_jour($date_jour)
                 {
                      $this->date_jour = $date_jour;
                 }

             public function setDescription($description)
                 {
                      $this->description = $description;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count jour_ferier =====================*/
					public function countJour_ferier(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get jour_ferier =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste jour_ferier =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("jour_ferier");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("jour_ferier");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("jour_ferier");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_jour_ferier = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If jour_ferier existe =====================*/
					public function ifJour_ferierexiste($condition){
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
                       $this->fiche_jour_id = (!isset($fiche_jour_id) || empty($fiche_jour_id) )  ? 0: $fiche_jour_id;
                       $this->date_jour = (!isset($date_jour) || empty($date_jour) )  ? 0: $date_jour;
                       $this->description = (!isset($description) || empty($description) )  ? '': $description;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'fiche_jour_id'=>($this->fiche_jour_id == 0 )  ? $OldTable['fiche_jour_id']:$this->fiche_jour_id,
                                  'date_jour'=>($this->date_jour == 0 )  ? $OldTable['date_jour']:$this->date_jour,
                                  'description'=>(!isset($this->description) || empty($this->description) )  ? $OldTable['description']:$this->description					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'fiche_jour_id'=>0,
                                  'date_jour'=>0,
                                  'description'=>""					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



