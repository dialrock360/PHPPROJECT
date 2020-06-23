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

        class Membre_equipe extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id_membre;
        private  $id_equipe;
        private  $cout_maindoeuve_membre;
        private  $info_membre;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="membre_equipe";
                 $this->id_membre = 0 ;
                 $this->id_equipe = 0 ;
                 $this->cout_maindoeuve_membre = "" ;
                 $this->info_membre = "" ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId_membre()
                 {
                     return $this->id_membre;
                 }

             public function getId_equipe()
                 {
                     return $this->id_equipe;
                 }

             public function getCout_maindoeuve_membre()
                 {
                     return $this->cout_maindoeuve_membre;
                 }

             public function getInfo_membre()
                 {
                     return $this->info_membre;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId_membre($id_membre)
                 {
                      $this->id_membre = $id_membre;
                 }

             public function setId_equipe($id_equipe)
                 {
                      $this->id_equipe = $id_equipe;
                 }

             public function setCout_maindoeuve_membre($cout_maindoeuve_membre)
                 {
                      $this->cout_maindoeuve_membre = $cout_maindoeuve_membre;
                 }

             public function setInfo_membre($info_membre)
                 {
                      $this->info_membre = $info_membre;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count membre_equipe =====================*/
					public function countMembre_equipe(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get membre_equipe =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id_membre" =>$this->id_membre);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste membre_equipe =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("membre_equipe");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("membre_equipe");
					    $condition = array( 'id_membre'=>$this->id_membre,'id_equipe'=>$this->id_equipe );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("membre_equipe");
					    $condition = array( 'id_membre'=>$this->id_membre,'id_equipe'=>$this->id_equipe );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_membre_equipe = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If membre_equipe existe =====================*/
					public function ifMembre_equipeexiste($condition){
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
                                                       $this->id_membre = (!isset($id_membre) || empty($id_membre) )  ? 0: $id_membre;
                       $this->id_equipe = (!isset($id_equipe) || empty($id_equipe) )  ? 0: $id_equipe;
                       $this->cout_maindoeuve_membre = (!isset($cout_maindoeuve_membre) || empty($cout_maindoeuve_membre) )  ? '': $cout_maindoeuve_membre;
                       $this->info_membre = (!isset($info_membre) || empty($info_membre) )  ? '': $info_membre;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id_membre'=>($this->id_membre == 0 )  ? $OldTable['id_membre']:$this->id_membre,
                                  'id_equipe'=>($this->id_equipe == 0 )  ? $OldTable['id_equipe']:$this->id_equipe,
                                  'cout_maindoeuve_membre'=>(!isset($this->cout_maindoeuve_membre) || empty($this->cout_maindoeuve_membre) )  ? $OldTable['cout_maindoeuve_membre']:$this->cout_maindoeuve_membre,
                                  'info_membre'=>(!isset($this->info_membre) || empty($this->info_membre) )  ? $OldTable['info_membre']:$this->info_membre					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id_membre'=>0,
                                  'id_equipe'=>0,
                                  'cout_maindoeuve_membre'=>"",
                                  'info_membre'=>""					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



