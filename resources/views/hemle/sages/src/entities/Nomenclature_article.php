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

        class Nomenclature_article extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $ref_nomenclature_article;
        private  $nom_nomenclature_article;
        private  $code_couleur;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="nomenclature_article";
                 $this->id = 'null' ;
                 $this->ref_nomenclature_article = "" ;
                 $this->nom_nomenclature_article = "" ;
                 $this->code_couleur = "" ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getRef_nomenclature_article()
                 {
                     return $this->ref_nomenclature_article;
                 }

             public function getNom_nomenclature_article()
                 {
                     return $this->nom_nomenclature_article;
                 }

             public function getCode_couleur()
                 {
                     return $this->code_couleur;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setRef_nomenclature_article($ref_nomenclature_article)
                 {
                      $this->ref_nomenclature_article = $ref_nomenclature_article;
                 }

             public function setNom_nomenclature_article($nom_nomenclature_article)
                 {
                      $this->nom_nomenclature_article = $nom_nomenclature_article;
                 }

             public function setCode_couleur($code_couleur)
                 {
                      $this->code_couleur = $code_couleur;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count nomenclature_article =====================*/
					public function countNomenclature_article(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get nomenclature_article =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste nomenclature_article =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("nomenclature_article");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("nomenclature_article");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("nomenclature_article");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_nomenclature_article = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If nomenclature_article existe =====================*/
					public function ifNomenclature_articleexiste($condition){
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
                       $this->ref_nomenclature_article = (!isset($ref_nomenclature_article) || empty($ref_nomenclature_article) )  ? '': $ref_nomenclature_article;
                       $this->nom_nomenclature_article = (!isset($nom_nomenclature_article) || empty($nom_nomenclature_article) )  ? '': $nom_nomenclature_article;
                       $this->code_couleur = (!isset($code_couleur) || empty($code_couleur) )  ? '': $code_couleur;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'ref_nomenclature_article'=>(!isset($this->ref_nomenclature_article) || empty($this->ref_nomenclature_article) )  ? $OldTable['ref_nomenclature_article']:$this->ref_nomenclature_article,
                                  'nom_nomenclature_article'=>(!isset($this->nom_nomenclature_article) || empty($this->nom_nomenclature_article) )  ? $OldTable['nom_nomenclature_article']:$this->nom_nomenclature_article,
                                  'code_couleur'=>(!isset($this->code_couleur) || empty($this->code_couleur) )  ? $OldTable['code_couleur']:$this->code_couleur					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'ref_nomenclature_article'=>"",
                                  'nom_nomenclature_article'=>"",
                                  'code_couleur'=>""					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



