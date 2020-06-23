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

        class Type_conger extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $nom_type_conger;
        private  $categirie_type_conger;
        private  $couleur_type_conger;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="type_conger";
                 $this->id = 0 ;
                 $this->nom_type_conger = "" ;
                 $this->categirie_type_conger = "" ;
                 $this->couleur_type_conger = "" ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getNom_type_conger()
                 {
                     return $this->nom_type_conger;
                 }

             public function getCategirie_type_conger()
                 {
                     return $this->categirie_type_conger;
                 }

             public function getCouleur_type_conger()
                 {
                     return $this->couleur_type_conger;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setNom_type_conger($nom_type_conger)
                 {
                      $this->nom_type_conger = $nom_type_conger;
                 }

             public function setCategirie_type_conger($categirie_type_conger)
                 {
                      $this->categirie_type_conger = $categirie_type_conger;
                 }

             public function setCouleur_type_conger($couleur_type_conger)
                 {
                      $this->couleur_type_conger = $couleur_type_conger;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count type_conger =====================*/
					public function countType_conger(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get type_conger =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste type_conger =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("type_conger");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("type_conger");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("type_conger");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_type_conger = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If type_conger existe =====================*/
					public function ifType_congerexiste($condition){
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
                       $this->nom_type_conger = (!isset($nom_type_conger) || empty($nom_type_conger) )  ? '': $nom_type_conger;
                       $this->categirie_type_conger = (!isset($categirie_type_conger) || empty($categirie_type_conger) )  ? '': $categirie_type_conger;
                       $this->couleur_type_conger = (!isset($couleur_type_conger) || empty($couleur_type_conger) )  ? '': $couleur_type_conger;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 )  ? $OldTable['id']:$this->id,
                                  'nom_type_conger'=>(!isset($this->nom_type_conger) || empty($this->nom_type_conger) )  ? $OldTable['nom_type_conger']:$this->nom_type_conger,
                                  'categirie_type_conger'=>(!isset($this->categirie_type_conger) || empty($this->categirie_type_conger) )  ? $OldTable['categirie_type_conger']:$this->categirie_type_conger,
                                  'couleur_type_conger'=>(!isset($this->couleur_type_conger) || empty($this->couleur_type_conger) )  ? $OldTable['couleur_type_conger']:$this->couleur_type_conger					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>0,
                                  'nom_type_conger'=>"",
                                  'categirie_type_conger'=>"",
                                  'couleur_type_conger'=>""					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



