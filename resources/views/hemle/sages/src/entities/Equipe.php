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

        class Equipe extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $nom_equipe;
        private  $date_creation;
        private  $create_by;
        private  $flag_equipe;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="equipe";
                 $this->id = 'null' ;
                 $this->nom_equipe = "" ;
                 $this->date_creation = date("") ;
                 $this->create_by = 0 ;
                 $this->flag_equipe = 0 ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getNom_equipe()
                 {
                     return $this->nom_equipe;
                 }

             public function getDate_creation()
                 {
                     return $this->date_creation;
                 }

             public function getCreate_by()
                 {
                     return $this->create_by;
                 }

             public function getFlag_equipe()
                 {
                     return $this->flag_equipe;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setNom_equipe($nom_equipe)
                 {
                      $this->nom_equipe = $nom_equipe;
                 }

             public function setDate_creation($date_creation)
                 {
                      $this->date_creation = $date_creation;
                 }

             public function setCreate_by($create_by)
                 {
                      $this->create_by = $create_by;
                 }

             public function setFlag_equipe($flag_equipe)
                 {
                      $this->flag_equipe = $flag_equipe;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count equipe =====================*/
					public function countEquipe(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get equipe =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste equipe =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("equipe");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("equipe");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("equipe");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_equipe = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If equipe existe =====================*/
					public function ifEquipeexiste($condition){
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
                       $this->nom_equipe = (!isset($nom_equipe) || empty($nom_equipe) )  ? '': $nom_equipe;
                       $this->date_creation = (!isset($date_creation) || empty($date_creation) )  ? '': $date_creation;
                       $this->create_by = (!isset($create_by) || empty($create_by) )  ? 0: $create_by;
                       $this->flag_equipe = (!isset($flag_equipe) || empty($flag_equipe) )  ? 0: $flag_equipe;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'nom_equipe'=>(!isset($this->nom_equipe) || empty($this->nom_equipe) )  ? $OldTable['nom_equipe']:$this->nom_equipe,
                                  'date_creation'=>($this->date_creation == null )  ? $OldTable['date_creation']:$this->date_creation,
                                  'create_by'=>($this->create_by == 0 )  ? $OldTable['create_by']:$this->create_by,
                                  'flag_equipe'=>($this->flag_equipe == 0 )  ? $OldTable['flag_equipe']:$this->flag_equipe					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'nom_equipe'=>"",
                                  'date_creation'=>date(""),
                                  'create_by'=>0,
                                  'flag_equipe'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



