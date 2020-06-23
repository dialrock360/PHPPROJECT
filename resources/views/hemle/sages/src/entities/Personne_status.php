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

        class Personne_status extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $personne_id;
        private  $status_id;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="personne_status";
                 $this->personne_id = 0 ;
                 $this->status_id = 0 ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getPersonne_id()
                 {
                     return $this->personne_id;
                 }

             public function getStatus_id()
                 {
                     return $this->status_id;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setPersonne_id($personne_id)
                 {
                      $this->personne_id = $personne_id;
                 }

             public function setStatus_id($status_id)
                 {
                      $this->status_id = $status_id;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count personne_status =====================*/
					public function countPersonne_status(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get personne_status =====================*/
					                public function get($id='',$id_status=''){
                                        $this->tablename='v_personne';
					                   $this->db->setTablename($this->tablename);
                                       $personne_id = ($id=='')?$this->personne_id:$id;
                                       $status_id = ($id_status=='')?$this->status_id:$id_status;
					                   $condition = array("personne_id" =>$personne_id,"status_id" =>$status_id);
                                       return $this->conditional_get(array($condition));
					                }


				/*================== Liste personne_status =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("personne_status");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("personne_status");
					    $condition = array( 'personne_id'=>$this->personne_id,'status_id'=>$this->status_id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("personne_status");
					    $condition = array( 'personne_id'=>$this->personne_id,'status_id'=>$this->status_id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_personne_status = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If personne_status existe =====================*/
					public function ifPersonne_statusexiste($condition){
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
                                                       $this->personne_id = (!isset($personne_id) || empty($personne_id) )  ? 0: $personne_id;
                       $this->status_id = (!isset($status_id) || empty($status_id) )  ? 0: $status_id;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'personne_id'=>($this->personne_id == 0 )  ? $OldTable['personne_id']:$this->personne_id,
                                  'status_id'=>($this->status_id == 0 )  ? $OldTable['status_id']:$this->status_id					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'personne_id'=>0,
                                  'status_id'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



