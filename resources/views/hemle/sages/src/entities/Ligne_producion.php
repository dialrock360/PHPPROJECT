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

        class Ligne_producion extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_produit;
        private  $id_tache;
        private  $pxa_ligne_producion;
        private  $qnt_ligne_producion;
        private  $mts_ligne_producion;
        private  $position_ligne_producion;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="ligne_producion";
                 $this->id = 'null' ;
                 $this->id_produit = 0 ;
                 $this->id_tache = 0 ;
                 $this->pxa_ligne_producion = 0 ;
                 $this->qnt_ligne_producion = 0 ;
                 $this->mts_ligne_producion = 0 ;
                 $this->position_ligne_producion = 0 ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_produit()
                 {
                     return $this->id_produit;
                 }

             public function getId_tache()
                 {
                     return $this->id_tache;
                 }

             public function getPxa_ligne_producion()
                 {
                     return $this->pxa_ligne_producion;
                 }

             public function getQnt_ligne_producion()
                 {
                     return $this->qnt_ligne_producion;
                 }

             public function getMts_ligne_producion()
                 {
                     return $this->mts_ligne_producion;
                 }

             public function getPosition_ligne_producion()
                 {
                     return $this->position_ligne_producion;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_produit($id_produit)
                 {
                      $this->id_produit = $id_produit;
                 }

             public function setId_tache($id_tache)
                 {
                      $this->id_tache = $id_tache;
                 }

             public function setPxa_ligne_producion($pxa_ligne_producion)
                 {
                      $this->pxa_ligne_producion = $pxa_ligne_producion;
                 }

             public function setQnt_ligne_producion($qnt_ligne_producion)
                 {
                      $this->qnt_ligne_producion = $qnt_ligne_producion;
                 }

             public function setMts_ligne_producion($mts_ligne_producion)
                 {
                      $this->mts_ligne_producion = $mts_ligne_producion;
                 }

             public function setPosition_ligne_producion($position_ligne_producion)
                 {
                      $this->position_ligne_producion = $position_ligne_producion;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count ligne_producion =====================*/
					public function countLigne_producion(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get ligne_producion =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste ligne_producion =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("ligne_producion");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("ligne_producion");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("ligne_producion");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_ligne_producion = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If ligne_producion existe =====================*/
					public function ifLigne_producionexiste($condition){
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
                       $this->id_produit = (!isset($id_produit) || empty($id_produit) )  ? 0: $id_produit;
                       $this->id_tache = (!isset($id_tache) || empty($id_tache) )  ? 0: $id_tache;
                       $this->pxa_ligne_producion = (!isset($pxa_ligne_producion) || empty($pxa_ligne_producion) )  ? 0: $pxa_ligne_producion;
                       $this->qnt_ligne_producion = (!isset($qnt_ligne_producion) || empty($qnt_ligne_producion) )  ? 0: $qnt_ligne_producion;
                       $this->mts_ligne_producion = (!isset($mts_ligne_producion) || empty($mts_ligne_producion) )  ? 0: $mts_ligne_producion;
                       $this->position_ligne_producion = (!isset($position_ligne_producion) || empty($position_ligne_producion) )  ? 0: $position_ligne_producion;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'id_produit'=>($this->id_produit == 0 )  ? $OldTable['id_produit']:$this->id_produit,
                                  'id_tache'=>($this->id_tache == 0 )  ? $OldTable['id_tache']:$this->id_tache,
                                  'pxa_ligne_producion'=>($this->pxa_ligne_producion == 0 )  ? $OldTable['pxa_ligne_producion']:$this->pxa_ligne_producion,
                                  'qnt_ligne_producion'=>($this->qnt_ligne_producion == 0 )  ? $OldTable['qnt_ligne_producion']:$this->qnt_ligne_producion,
                                  'mts_ligne_producion'=>($this->mts_ligne_producion == 0 )  ? $OldTable['mts_ligne_producion']:$this->mts_ligne_producion,
                                  'position_ligne_producion'=>($this->position_ligne_producion == 0 )  ? $OldTable['position_ligne_producion']:$this->position_ligne_producion					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'id_produit'=>0,
                                  'id_tache'=>0,
                                  'pxa_ligne_producion'=>0,
                                  'qnt_ligne_producion'=>0,
                                  'mts_ligne_producion'=>0,
                                  'position_ligne_producion'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



