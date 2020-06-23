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

        class Sous_rubrique extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_rubrique;
        private  $id_model;
        private  $nom_sous_rubrique;
        private  $valeur_sous_rubrique;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="sous_rubrique";
                 $this->id = 'null' ;
                 $this->id_rubrique = 0 ;
                 $this->id_model = 0 ;
                 $this->nom_sous_rubrique = "" ;
                 $this->valeur_sous_rubrique = "" ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_rubrique()
                 {
                     return $this->id_rubrique;
                 }

             public function getId_model()
                 {
                     return $this->id_model;
                 }

             public function getNom_sous_rubrique()
                 {
                     return $this->nom_sous_rubrique;
                 }

             public function getValeur_sous_rubrique()
                 {
                     return $this->valeur_sous_rubrique;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_rubrique($id_rubrique)
                 {
                      $this->id_rubrique = $id_rubrique;
                 }

             public function setId_model($id_model)
                 {
                      $this->id_model = $id_model;
                 }

             public function setNom_sous_rubrique($nom_sous_rubrique)
                 {
                      $this->nom_sous_rubrique = $nom_sous_rubrique;
                 }

             public function setValeur_sous_rubrique($valeur_sous_rubrique)
                 {
                      $this->valeur_sous_rubrique = $valeur_sous_rubrique;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count sous_rubrique =====================*/
					public function countSous_rubrique(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get sous_rubrique =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste sous_rubrique =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("sous_rubrique");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("sous_rubrique");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("sous_rubrique");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_sous_rubrique = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If sous_rubrique existe =====================*/
					public function ifSous_rubriqueexiste($condition){
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
                       $this->id_rubrique = (!isset($id_rubrique) || empty($id_rubrique) )  ? 0: $id_rubrique;
                       $this->id_model = (!isset($id_model) || empty($id_model) )  ? 0: $id_model;
                       $this->nom_sous_rubrique = (!isset($nom_sous_rubrique) || empty($nom_sous_rubrique) )  ? '': $nom_sous_rubrique;
                       $this->valeur_sous_rubrique = (!isset($valeur_sous_rubrique) || empty($valeur_sous_rubrique) )  ? '': $valeur_sous_rubrique;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'id_rubrique'=>($this->id_rubrique == 0 )  ? $OldTable['id_rubrique']:$this->id_rubrique,
                                  'id_model'=>($this->id_model == 0 )  ? $OldTable['id_model']:$this->id_model,
                                  'nom_sous_rubrique'=>(!isset($this->nom_sous_rubrique) || empty($this->nom_sous_rubrique) )  ? $OldTable['nom_sous_rubrique']:$this->nom_sous_rubrique,
                                  'valeur_sous_rubrique'=>(!isset($this->valeur_sous_rubrique) || empty($this->valeur_sous_rubrique) )  ? $OldTable['valeur_sous_rubrique']:$this->valeur_sous_rubrique					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'id_rubrique'=>0,
                                  'id_model'=>0,
                                  'nom_sous_rubrique'=>"",
                                  'valeur_sous_rubrique'=>""					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



