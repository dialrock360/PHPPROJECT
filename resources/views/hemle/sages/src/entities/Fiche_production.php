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

        class Fiche_production extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_projet;
        private  $date_fiche_production;
        private  $user_id;
        private  $info_fiche_production;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="fiche_production";
                 $this->id = 'null' ;
                 $this->id_projet = 0 ;
                 $this->date_fiche_production = date("") ;
                 $this->user_id = 0 ;
                 $this->info_fiche_production = 0 ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_projet()
                 {
                     return $this->id_projet;
                 }

             public function getDate_fiche_production()
                 {
                     return $this->date_fiche_production;
                 }

             public function getUser_id()
                 {
                     return $this->user_id;
                 }

             public function getInfo_fiche_production()
                 {
                     return $this->info_fiche_production;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_projet($id_projet)
                 {
                      $this->id_projet = $id_projet;
                 }

             public function setDate_fiche_production($date_fiche_production)
                 {
                      $this->date_fiche_production = $date_fiche_production;
                 }

             public function setUser_id($user_id)
                 {
                      $this->user_id = $user_id;
                 }

             public function setInfo_fiche_production($info_fiche_production)
                 {
                      $this->info_fiche_production = $info_fiche_production;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count fiche_production =====================*/
					public function countFiche_production(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get fiche_production =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste fiche_production =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("fiche_production");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("fiche_production");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("fiche_production");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_fiche_production = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If fiche_production existe =====================*/
					public function ifFiche_productionexiste($condition){
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
                       $this->id_projet = (!isset($id_projet) || empty($id_projet) )  ? 0: $id_projet;
                       $this->date_fiche_production = (!isset($date_fiche_production) || empty($date_fiche_production) )  ? '': $date_fiche_production;
                       $this->user_id = (!isset($user_id) || empty($user_id) )  ? 0: $user_id;
                       $this->info_fiche_production = (!isset($info_fiche_production) || empty($info_fiche_production) )  ? 0: $info_fiche_production;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'id_projet'=>($this->id_projet == 0 )  ? $OldTable['id_projet']:$this->id_projet,
                                  'date_fiche_production'=>($this->date_fiche_production == null )  ? $OldTable['date_fiche_production']:$this->date_fiche_production,
                                  'user_id'=>($this->user_id == 0 )  ? $OldTable['user_id']:$this->user_id,
                                  'info_fiche_production'=>($this->info_fiche_production == 0 )  ? $OldTable['info_fiche_production']:$this->info_fiche_production					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'id_projet'=>0,
                                  'date_fiche_production'=>date(""),
                                  'user_id'=>0,
                                  'info_fiche_production'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



