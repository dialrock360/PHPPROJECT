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

        class Rubrique extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_service;
        private  $id_model;
        private  $nom_rubrique;
        private  $valeur_rubrique;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="rubrique";
                 $this->id = 'null' ;
                 $this->id_service = 0 ;
                 $this->id_model = 0 ;
                 $this->nom_rubrique = "" ;
                 $this->valeur_rubrique = "" ;
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

             public function getId_model()
                 {
                     return $this->id_model;
                 }

             public function getNom_rubrique()
                 {
                     return $this->nom_rubrique;
                 }

             public function getValeur_rubrique()
                 {
                     return $this->valeur_rubrique;
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

             public function setId_model($id_model)
                 {
                      $this->id_model = $id_model;
                 }

             public function setNom_rubrique($nom_rubrique)
                 {
                      $this->nom_rubrique = $nom_rubrique;
                 }

             public function setValeur_rubrique($valeur_rubrique)
                 {
                      $this->valeur_rubrique = $valeur_rubrique;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count rubrique =====================*/
					public function countRubrique(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get rubrique =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste rubrique =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("rubrique");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("rubrique");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("rubrique");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_rubrique = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If rubrique existe =====================*/
					public function ifRubriqueexiste($condition){
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
                       $this->id_model = (!isset($id_model) || empty($id_model) )  ? 0: $id_model;
                       $this->nom_rubrique = (!isset($nom_rubrique) || empty($nom_rubrique) )  ? '': $nom_rubrique;
                       $this->valeur_rubrique = (!isset($valeur_rubrique) || empty($valeur_rubrique) )  ? '': $valeur_rubrique;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'id_service'=>($this->id_service == 0 )  ? $OldTable['id_service']:$this->id_service,
                                  'id_model'=>($this->id_model == 0 )  ? $OldTable['id_model']:$this->id_model,
                                  'nom_rubrique'=>(!isset($this->nom_rubrique) || empty($this->nom_rubrique) )  ? $OldTable['nom_rubrique']:$this->nom_rubrique,
                                  'valeur_rubrique'=>(!isset($this->valeur_rubrique) || empty($this->valeur_rubrique) )  ? $OldTable['valeur_rubrique']:$this->valeur_rubrique					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'id_service'=>0,
                                  'id_model'=>0,
                                  'nom_rubrique'=>"",
                                  'valeur_rubrique'=>""					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



