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

        class Equipe_projet extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_projet;
        private  $id_equipe;
        private  $id_chef_equipe;
        private  $nbr_membre;
        private  $cout_equipe;
        private  $info_equipe;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="equipe_projet";
                 $this->id = 'null' ;
                 $this->id_projet = 0 ;
                 $this->id_equipe = 0 ;
                 $this->id_chef_equipe = 0 ;
                 $this->nbr_membre = 0 ;
                 $this->cout_equipe = 0 ;
                 $this->info_equipe = "" ;
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

             public function getId_equipe()
                 {
                     return $this->id_equipe;
                 }

             public function getId_chef_equipe()
                 {
                     return $this->id_chef_equipe;
                 }

             public function getNbr_membre()
                 {
                     return $this->nbr_membre;
                 }

             public function getCout_equipe()
                 {
                     return $this->cout_equipe;
                 }

             public function getInfo_equipe()
                 {
                     return $this->info_equipe;
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

             public function setId_equipe($id_equipe)
                 {
                      $this->id_equipe = $id_equipe;
                 }

             public function setId_chef_equipe($id_chef_equipe)
                 {
                      $this->id_chef_equipe = $id_chef_equipe;
                 }

             public function setNbr_membre($nbr_membre)
                 {
                      $this->nbr_membre = $nbr_membre;
                 }

             public function setCout_equipe($cout_equipe)
                 {
                      $this->cout_equipe = $cout_equipe;
                 }

             public function setInfo_equipe($info_equipe)
                 {
                      $this->info_equipe = $info_equipe;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count equipe_projet =====================*/
					public function countEquipe_projet(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get equipe_projet =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste equipe_projet =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("equipe_projet");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("equipe_projet");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("equipe_projet");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_equipe_projet = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If equipe_projet existe =====================*/
					public function ifEquipe_projetexiste($condition){
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
                       $this->id_equipe = (!isset($id_equipe) || empty($id_equipe) )  ? 0: $id_equipe;
                       $this->id_chef_equipe = (!isset($id_chef_equipe) || empty($id_chef_equipe) )  ? 0: $id_chef_equipe;
                       $this->nbr_membre = (!isset($nbr_membre) || empty($nbr_membre) )  ? 0: $nbr_membre;
                       $this->cout_equipe = (!isset($cout_equipe) || empty($cout_equipe) )  ? 0: $cout_equipe;
                       $this->info_equipe = (!isset($info_equipe) || empty($info_equipe) )  ? '': $info_equipe;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'id_projet'=>($this->id_projet == 0 )  ? $OldTable['id_projet']:$this->id_projet,
                                  'id_equipe'=>($this->id_equipe == 0 )  ? $OldTable['id_equipe']:$this->id_equipe,
                                  'id_chef_equipe'=>($this->id_chef_equipe == 0 )  ? $OldTable['id_chef_equipe']:$this->id_chef_equipe,
                                  'nbr_membre'=>($this->nbr_membre == 0 )  ? $OldTable['nbr_membre']:$this->nbr_membre,
                                  'cout_equipe'=>($this->cout_equipe == 0 )  ? $OldTable['cout_equipe']:$this->cout_equipe,
                                  'info_equipe'=>(!isset($this->info_equipe) || empty($this->info_equipe) )  ? $OldTable['info_equipe']:$this->info_equipe					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'id_projet'=>0,
                                  'id_equipe'=>0,
                                  'id_chef_equipe'=>0,
                                  'nbr_membre'=>0,
                                  'cout_equipe'=>0,
                                  'info_equipe'=>""					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



