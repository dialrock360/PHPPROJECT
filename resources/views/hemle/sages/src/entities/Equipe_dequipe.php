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

        class Equipe_dequipe extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_equipe_mere;
        private  $id_equipe_membre;
        private  $cout_equipe_dequipe;
        private  $info_equipe_dequipe;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="equipe_dequipe";
                 $this->id = 0 ;
                 $this->id_equipe_mere = 0 ;
                 $this->id_equipe_membre = 0 ;
                 $this->cout_equipe_dequipe = 0 ;
                 $this->info_equipe_dequipe = "" ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_equipe_mere()
                 {
                     return $this->id_equipe_mere;
                 }

             public function getId_equipe_membre()
                 {
                     return $this->id_equipe_membre;
                 }

             public function getCout_equipe_dequipe()
                 {
                     return $this->cout_equipe_dequipe;
                 }

             public function getInfo_equipe_dequipe()
                 {
                     return $this->info_equipe_dequipe;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_equipe_mere($id_equipe_mere)
                 {
                      $this->id_equipe_mere = $id_equipe_mere;
                 }

             public function setId_equipe_membre($id_equipe_membre)
                 {
                      $this->id_equipe_membre = $id_equipe_membre;
                 }

             public function setCout_equipe_dequipe($cout_equipe_dequipe)
                 {
                      $this->cout_equipe_dequipe = $cout_equipe_dequipe;
                 }

             public function setInfo_equipe_dequipe($info_equipe_dequipe)
                 {
                      $this->info_equipe_dequipe = $info_equipe_dequipe;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count equipe_dequipe =====================*/
					public function countEquipe_dequipe(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get equipe_dequipe =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    ;
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste equipe_dequipe =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("equipe_dequipe");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("equipe_dequipe");
					    $condition = array(  );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("equipe_dequipe");
					    $condition = array(  );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_equipe_dequipe = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If equipe_dequipe existe =====================*/
					public function ifEquipe_dequipeexiste($condition){
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
                       $this->id_equipe_mere = (!isset($id_equipe_mere) || empty($id_equipe_mere) )  ? 0: $id_equipe_mere;
                       $this->id_equipe_membre = (!isset($id_equipe_membre) || empty($id_equipe_membre) )  ? 0: $id_equipe_membre;
                       $this->cout_equipe_dequipe = (!isset($cout_equipe_dequipe) || empty($cout_equipe_dequipe) )  ? 0: $cout_equipe_dequipe;
                       $this->info_equipe_dequipe = (!isset($info_equipe_dequipe) || empty($info_equipe_dequipe) )  ? '': $info_equipe_dequipe;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 )  ? $OldTable['id']:$this->id,
                                  'id_equipe_mere'=>($this->id_equipe_mere == 0 )  ? $OldTable['id_equipe_mere']:$this->id_equipe_mere,
                                  'id_equipe_membre'=>($this->id_equipe_membre == 0 )  ? $OldTable['id_equipe_membre']:$this->id_equipe_membre,
                                  'cout_equipe_dequipe'=>($this->cout_equipe_dequipe == 0 )  ? $OldTable['cout_equipe_dequipe']:$this->cout_equipe_dequipe,
                                  'info_equipe_dequipe'=>(!isset($this->info_equipe_dequipe) || empty($this->info_equipe_dequipe) )  ? $OldTable['info_equipe_dequipe']:$this->info_equipe_dequipe					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>0,
                                  'id_equipe_mere'=>0,
                                  'id_equipe_membre'=>0,
                                  'cout_equipe_dequipe'=>0,
                                  'info_equipe_dequipe'=>""					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



