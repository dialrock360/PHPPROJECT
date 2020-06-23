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

        class Module extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $ref_module;
        private  $nom_module;
        private  $actif;
        private  $module_principal;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="module";
                 $this->id = 'null' ;
                 $this->ref_module = "" ;
                 $this->nom_module = "" ;
                 $this->actif = 0 ;
                 $this->module_principal = 0 ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getRef_module()
                 {
                     return $this->ref_module;
                 }

             public function getNom_module()
                 {
                     return $this->nom_module;
                 }

             public function getActif()
                 {
                     return $this->actif;
                 }

             public function getModule_principal()
                 {
                     return $this->module_principal;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setRef_module($ref_module)
                 {
                      $this->ref_module = $ref_module;
                 }

             public function setNom_module($nom_module)
                 {
                      $this->nom_module = $nom_module;
                 }

             public function setActif($actif)
                 {
                      $this->actif = $actif;
                 }

             public function setModule_principal($module_principal)
                 {
                      $this->module_principal = $module_principal;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count module =====================*/
					public function countModule(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get module =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste module =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("module");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("module");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("module");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_module = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If module existe =====================*/
					public function ifModuleexiste($condition){
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
                       $this->ref_module = (!isset($ref_module) || empty($ref_module) )  ? '': $ref_module;
                       $this->nom_module = (!isset($nom_module) || empty($nom_module) )  ? '': $nom_module;
                       $this->actif = (!isset($actif) || empty($actif) )  ? 0: $actif;
                       $this->module_principal = (!isset($module_principal) || empty($module_principal) )  ? 0: $module_principal;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'ref_module'=>(!isset($this->ref_module) || empty($this->ref_module) )  ? $OldTable['ref_module']:$this->ref_module,
                                  'nom_module'=>(!isset($this->nom_module) || empty($this->nom_module) )  ? $OldTable['nom_module']:$this->nom_module,
                                  'actif'=>($this->actif == 0 )  ? $OldTable['actif']:$this->actif,
                                  'module_principal'=>($this->module_principal == 0 )  ? $OldTable['module_principal']:$this->module_principal					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'ref_module'=>"",
                                  'nom_module'=>"",
                                  'actif'=>0,
                                  'module_principal'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



