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
    /*==================Classe creer par Samane samane_ui_admin le 05-12-2019 02:38:09=====================*/

        class Type_mouvement extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_service;
        private  $nom_typemouvement;
        private  $navigation_typemouvement;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="type_mouvement";
                 $this->id = 'null' ;
                 $this->id_service = 0 ;
                 $this->nom_typemouvement = "" ;
                 $this->navigation_typemouvement = "" ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_service()
                 {
                     return $this->id_service;
                 }

             public function getNom_typemouvement()
                 {
                     return $this->nom_typemouvement;
                 }

             public function getNavigation_typemouvement()
                 {
                     return $this->navigation_typemouvement;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_service($id_service)
                 {
                      $this->id_service = $id_service;
                 }

             public function setNom_typemouvement($nom_typemouvement)
                 {
                      $this->nom_typemouvement = $nom_typemouvement;
                 }

             public function setNavigation_typemouvement($navigation_typemouvement)
                 {
                      $this->navigation_typemouvement = $navigation_typemouvement;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count type_mouvement =====================*/
					public function countType_mouvement(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get type_mouvement =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste type_mouvement =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("type_mouvement");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("type_mouvement");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("type_mouvement");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_type_mouvement = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If type_mouvement existe =====================*/
					public function ifType_mouvementexiste($condition){
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
                       $this->id_service = (!isset($id_service) || empty($id_service) )  ? 0: $id_service;
                       $this->nom_typemouvement = (!isset($nom_typemouvement) || empty($nom_typemouvement) )  ? '': $nom_typemouvement;
                       $this->navigation_typemouvement = (!isset($navigation_typemouvement) || empty($navigation_typemouvement) )  ? '': $navigation_typemouvement;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'id_service'=>($this->id_service == 0 )  ? $OldTable['id_service']:$this->id_service,
                                  'nom_typemouvement'=>(!isset($this->nom_typemouvement) || empty($this->nom_typemouvement) )  ? $OldTable['nom_typemouvement']:$this->nom_typemouvement,
                                  'navigation_typemouvement'=>(!isset($this->navigation_typemouvement) || empty($this->navigation_typemouvement) )  ? $OldTable['navigation_typemouvement']:$this->navigation_typemouvement					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'id_service'=>0,
                                  'nom_typemouvement'=>"",
                                  'navigation_typemouvement'=>""					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



