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

        class Service extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $nom_service;
        private  $sigle_service;
        private  $ninea_service;
        private  $nrc_service;
        private  $activitecommercial_service;
        private  $ca_service;
        private  $logo_service;
        private  $theme_service;
        private  $flag_service;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="service";
                 $this->id = 0 ;
                 $this->nom_service = "" ;
                 $this->sigle_service = "" ;
                 $this->ninea_service = "" ;
                 $this->nrc_service = "" ;
                 $this->activitecommercial_service = "" ;
                 $this->ca_service = "" ;
                 $this->logo_service = "" ;
                 $this->theme_service = "" ;
                 $this->flag_service = 0 ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getNom_service()
                 {
                     return $this->nom_service;
                 }

             public function getSigle_service()
                 {
                     return $this->sigle_service;
                 }

             public function getNinea_service()
                 {
                     return $this->ninea_service;
                 }

             public function getNrc_service()
                 {
                     return $this->nrc_service;
                 }

             public function getActivitecommercial_service()
                 {
                     return $this->activitecommercial_service;
                 }

             public function getCa_service()
                 {
                     return $this->ca_service;
                 }

             public function getLogo_service()
                 {
                     return $this->logo_service;
                 }

             public function getTheme_service()
                 {
                     return $this->theme_service;
                 }

             public function getFlag_service()
                 {
                     return $this->flag_service;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setNom_service($nom_service)
                 {
                      $this->nom_service = $nom_service;
                 }

             public function setSigle_service($sigle_service)
                 {
                      $this->sigle_service = $sigle_service;
                 }

             public function setNinea_service($ninea_service)
                 {
                      $this->ninea_service = $ninea_service;
                 }

             public function setNrc_service($nrc_service)
                 {
                      $this->nrc_service = $nrc_service;
                 }

             public function setActivitecommercial_service($activitecommercial_service)
                 {
                      $this->activitecommercial_service = $activitecommercial_service;
                 }

             public function setCa_service($ca_service)
                 {
                      $this->ca_service = $ca_service;
                 }

             public function setLogo_service($logo_service)
                 {
                      $this->logo_service = $logo_service;
                 }

             public function setTheme_service($theme_service)
                 {
                      $this->theme_service = $theme_service;
                 }

             public function setFlag_service($flag_service)
                 {
                      $this->flag_service = $flag_service;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count service =====================*/
					public function countService(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get service =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste service =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("service");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("service");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("service");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_service = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If service existe =====================*/
					public function ifServiceexiste($condition){
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
                       $this->nom_service = (!isset($nom_service) || empty($nom_service) )  ? '': $nom_service;
                       $this->sigle_service = (!isset($sigle_service) || empty($sigle_service) )  ? '': $sigle_service;
                       $this->ninea_service = (!isset($ninea_service) || empty($ninea_service) )  ? '': $ninea_service;
                       $this->nrc_service = (!isset($nrc_service) || empty($nrc_service) )  ? '': $nrc_service;
                       $this->activitecommercial_service = (!isset($activitecommercial_service) || empty($activitecommercial_service) )  ? '': $activitecommercial_service;
                       $this->ca_service = (!isset($ca_service) || empty($ca_service) )  ? '': $ca_service;
                       $this->logo_service = (!isset($logo_service) || empty($logo_service) )  ? '': $logo_service;
                       $this->theme_service = (!isset($theme_service) || empty($theme_service) )  ? '': $theme_service;
                       $this->flag_service = (!isset($flag_service) || empty($flag_service) )  ? 0: $flag_service;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 )  ? $OldTable['id']:$this->id,
                                  'nom_service'=>(!isset($this->nom_service) || empty($this->nom_service) )  ? $OldTable['nom_service']:$this->nom_service,
                                  'sigle_service'=>(!isset($this->sigle_service) || empty($this->sigle_service) )  ? $OldTable['sigle_service']:$this->sigle_service,
                                  'ninea_service'=>(!isset($this->ninea_service) || empty($this->ninea_service) )  ? $OldTable['ninea_service']:$this->ninea_service,
                                  'nrc_service'=>(!isset($this->nrc_service) || empty($this->nrc_service) )  ? $OldTable['nrc_service']:$this->nrc_service,
                                  'activitecommercial_service'=>(!isset($this->activitecommercial_service) || empty($this->activitecommercial_service) )  ? $OldTable['activitecommercial_service']:$this->activitecommercial_service,
                                  'ca_service'=>(!isset($this->ca_service) || empty($this->ca_service) )  ? $OldTable['ca_service']:$this->ca_service,
                                  'logo_service'=>(!isset($this->logo_service) || empty($this->logo_service) )  ? $OldTable['logo_service']:$this->logo_service,
                                  'theme_service'=>(!isset($this->theme_service) || empty($this->theme_service) )  ? $OldTable['theme_service']:$this->theme_service,
                                  'flag_service'=>($this->flag_service == 0 )  ? $OldTable['flag_service']:$this->flag_service					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>0,
                                  'nom_service'=>"",
                                  'sigle_service'=>"",
                                  'ninea_service'=>"",
                                  'nrc_service'=>"",
                                  'activitecommercial_service'=>"",
                                  'ca_service'=>"",
                                  'logo_service'=>"",
                                  'theme_service'=>"",
                                  'flag_service'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



