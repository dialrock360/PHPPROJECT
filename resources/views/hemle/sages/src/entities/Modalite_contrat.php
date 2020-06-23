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

        class Modalite_contrat extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $nom_modalite;
        private  $clause_modalite;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="modalite_contrat";
                 $this->id = 'null' ;
                 $this->nom_modalite = "" ;
                 $this->clause_modalite = "" ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getNom_modalite()
                 {
                     return $this->nom_modalite;
                 }

             public function getClause_modalite()
                 {
                     return $this->clause_modalite;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setNom_modalite($nom_modalite)
                 {
                      $this->nom_modalite = $nom_modalite;
                 }

             public function setClause_modalite($clause_modalite)
                 {
                      $this->clause_modalite = $clause_modalite;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count modalite_contrat =====================*/
					public function countModalite_contrat(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get modalite_contrat =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste modalite_contrat =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("modalite_contrat");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("modalite_contrat");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("modalite_contrat");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_modalite_contrat = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If modalite_contrat existe =====================*/
					public function ifModalite_contratexiste($condition){
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
                       $this->nom_modalite = (!isset($nom_modalite) || empty($nom_modalite) )  ? '': $nom_modalite;
                       $this->clause_modalite = (!isset($clause_modalite) || empty($clause_modalite) )  ? '': $clause_modalite;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'nom_modalite'=>(!isset($this->nom_modalite) || empty($this->nom_modalite) )  ? $OldTable['nom_modalite']:$this->nom_modalite,
                                  'clause_modalite'=>(!isset($this->clause_modalite) || empty($this->clause_modalite) )  ? $OldTable['clause_modalite']:$this->clause_modalite					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'nom_modalite'=>"",
                                  'clause_modalite'=>""					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



