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

        class Frontend extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_service;
        private  $libele;
        private  $slidebar;
        private  $id_slidebar;
        private  $classe_slidebar;
        private  $nmain;
        private  $vmain;
        private  $skin;
        private  $theme;
        private  $cible;
        private  $section;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="frontend";
                 $this->id = 'null' ;
                 $this->id_service = 0 ;
                 $this->libele = "" ;
                 $this->slidebar = "" ;
                 $this->id_slidebar = "" ;
                 $this->classe_slidebar = "" ;
                 $this->nmain = "" ;
                 $this->vmain = "" ;
                 $this->skin = "" ;
                 $this->theme = "" ;
                 $this->cible = "" ;
                 $this->section = "" ;
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

             public function getLibele()
                 {
                     return $this->libele;
                 }

             public function getSlidebar()
                 {
                     return $this->slidebar;
                 }

             public function getId_slidebar()
                 {
                     return $this->id_slidebar;
                 }

             public function getClasse_slidebar()
                 {
                     return $this->classe_slidebar;
                 }

             public function getNmain()
                 {
                     return $this->nmain;
                 }

             public function getVmain()
                 {
                     return $this->vmain;
                 }

             public function getSkin()
                 {
                     return $this->skin;
                 }

             public function getTheme()
                 {
                     return $this->theme;
                 }

             public function getCible()
                 {
                     return $this->cible;
                 }

             public function getSection()
                 {
                     return $this->section;
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

             public function setLibele($libele)
                 {
                      $this->libele = $libele;
                 }

             public function setSlidebar($slidebar)
                 {
                      $this->slidebar = $slidebar;
                 }

             public function setId_slidebar($id_slidebar)
                 {
                      $this->id_slidebar = $id_slidebar;
                 }

             public function setClasse_slidebar($classe_slidebar)
                 {
                      $this->classe_slidebar = $classe_slidebar;
                 }

             public function setNmain($nmain)
                 {
                      $this->nmain = $nmain;
                 }

             public function setVmain($vmain)
                 {
                      $this->vmain = $vmain;
                 }

             public function setSkin($skin)
                 {
                      $this->skin = $skin;
                 }

             public function setTheme($theme)
                 {
                      $this->theme = $theme;
                 }

             public function setCible($cible)
                 {
                      $this->cible = $cible;
                 }

             public function setSection($section)
                 {
                      $this->section = $section;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count frontend =====================*/
					public function countFrontend(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get frontend =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste frontend =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("frontend");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("frontend");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("frontend");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_frontend = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If frontend existe =====================*/
					public function ifFrontendexiste($condition){
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
                       $this->libele = (!isset($libele) || empty($libele) )  ? '': $libele;
                       $this->slidebar = (!isset($slidebar) || empty($slidebar) )  ? '': $slidebar;
                       $this->id_slidebar = (!isset($id_slidebar) || empty($id_slidebar) )  ? '': $id_slidebar;
                       $this->classe_slidebar = (!isset($classe_slidebar) || empty($classe_slidebar) )  ? '': $classe_slidebar;
                       $this->nmain = (!isset($nmain) || empty($nmain) )  ? '': $nmain;
                       $this->vmain = (!isset($vmain) || empty($vmain) )  ? '': $vmain;
                       $this->skin = (!isset($skin) || empty($skin) )  ? '': $skin;
                       $this->theme = (!isset($theme) || empty($theme) )  ? '': $theme;
                       $this->cible = (!isset($cible) || empty($cible) )  ? '': $cible;
                       $this->section = (!isset($section) || empty($section) )  ? '': $section;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'id_service'=>($this->id_service == 0 )  ? $OldTable['id_service']:$this->id_service,
                                  'libele'=>(!isset($this->libele) || empty($this->libele) )  ? $OldTable['libele']:$this->libele,
                                  'slidebar'=>(!isset($this->slidebar) || empty($this->slidebar) )  ? $OldTable['slidebar']:$this->slidebar,
                                  'id_slidebar'=>(!isset($this->id_slidebar) || empty($this->id_slidebar) )  ? $OldTable['id_slidebar']:$this->id_slidebar,
                                  'classe_slidebar'=>(!isset($this->classe_slidebar) || empty($this->classe_slidebar) )  ? $OldTable['classe_slidebar']:$this->classe_slidebar,
                                  'nmain'=>(!isset($this->nmain) || empty($this->nmain) )  ? $OldTable['nmain']:$this->nmain,
                                  'vmain'=>(!isset($this->vmain) || empty($this->vmain) )  ? $OldTable['vmain']:$this->vmain,
                                  'skin'=>(!isset($this->skin) || empty($this->skin) )  ? $OldTable['skin']:$this->skin,
                                  'theme'=>(!isset($this->theme) || empty($this->theme) )  ? $OldTable['theme']:$this->theme,
                                  'cible'=>(!isset($this->cible) || empty($this->cible) )  ? $OldTable['cible']:$this->cible,
                                  'section'=>(!isset($this->section) || empty($this->section) )  ? $OldTable['section']:$this->section					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'id_service'=>0,
                                  'libele'=>"",
                                  'slidebar'=>"",
                                  'id_slidebar'=>"",
                                  'classe_slidebar'=>"",
                                  'nmain'=>"",
                                  'vmain'=>"",
                                  'skin'=>"",
                                  'theme'=>"",
                                  'cible'=>"",
                                  'section'=>""					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



