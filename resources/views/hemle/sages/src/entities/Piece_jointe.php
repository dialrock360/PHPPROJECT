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

        class Piece_jointe extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $nom_source;
        private  $file_path_piece_jointe;
        private  $id_source;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="piece_jointe";
                 $this->id = 'null' ;
                 $this->nom_source = 0 ;
                 $this->file_path_piece_jointe = "" ;
                 $this->id_source = 0 ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getNom_source()
                 {
                     return $this->nom_source;
                 }

             public function getFile_path_piece_jointe()
                 {
                     return $this->file_path_piece_jointe;
                 }

             public function getId_source()
                 {
                     return $this->id_source;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setNom_source($nom_source)
                 {
                      $this->nom_source = $nom_source;
                 }

             public function setFile_path_piece_jointe($file_path_piece_jointe)
                 {
                      $this->file_path_piece_jointe = $file_path_piece_jointe;
                 }

             public function setId_source($id_source)
                 {
                      $this->id_source = $id_source;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count piece_jointe =====================*/
					public function countPiece_jointe(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get piece_jointe =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste piece_jointe =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("piece_jointe");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("piece_jointe");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("piece_jointe");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_piece_jointe = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If piece_jointe existe =====================*/
					public function ifPiece_jointeexiste($condition){
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
                       $this->nom_source = (!isset($nom_source) || empty($nom_source) )  ? 0: $nom_source;
                       $this->file_path_piece_jointe = (!isset($file_path_piece_jointe) || empty($file_path_piece_jointe) )  ? '': $file_path_piece_jointe;
                       $this->id_source = (!isset($id_source) || empty($id_source) )  ? 0: $id_source;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'nom_source'=>($this->nom_source == 0 )  ? $OldTable['nom_source']:$this->nom_source,
                                  'file_path_piece_jointe'=>(!isset($this->file_path_piece_jointe) || empty($this->file_path_piece_jointe) )  ? $OldTable['file_path_piece_jointe']:$this->file_path_piece_jointe,
                                  'id_source'=>($this->id_source == 0 )  ? $OldTable['id_source']:$this->id_source					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'nom_source'=>0,
                                  'file_path_piece_jointe'=>"",
                                  'id_source'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



