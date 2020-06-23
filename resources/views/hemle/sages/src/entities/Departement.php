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

        class Departement extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_service;
        private  $nom_departement;
        private  $nbr_employee;
        private  $jour_ouvrable;
        private  $id_chefdepartement;
        private  $info_departement;
        private  $flag_departement;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="departement";
                 $this->id = 'null' ;
                 $this->id_service = 0 ;
                 $this->nom_departement = "" ;
                 $this->nbr_employee = 0 ;
                 $this->jour_ouvrable = '' ;
                 $this->id_chefdepartement = 0 ;
                 $this->info_departement = "" ;
                 $this->flag_departement = 0 ;
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

             public function getNom_departement()
                 {
                     return $this->nom_departement;
                 }

             public function getNbr_employee()
                 {
                     return $this->nbr_employee;
                 }

             public function getJour_ouvrable()
                 {
                     return $this->jour_ouvrable;
                 }

             public function getId_chefdepartement()
                 {
                     return $this->id_chefdepartement;
                 }

             public function getInfo_departement()
                 {
                     return $this->info_departement;
                 }

             public function getFlag_departement()
                 {
                     return $this->flag_departement;
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

             public function setNom_departement($nom_departement)
                 {
                      $this->nom_departement = $nom_departement;
                 }

             public function setNbr_employee($nbr_employee)
                 {
                      $this->nbr_employee = $nbr_employee;
                 }

             public function setJour_ouvrable($jour_ouvrable)
                 {
                      $this->jour_ouvrable = $jour_ouvrable;
                 }

             public function setId_chefdepartement($id_chefdepartement)
                 {
                      $this->id_chefdepartement = $id_chefdepartement;
                 }

             public function setInfo_departement($info_departement)
                 {
                      $this->info_departement = $info_departement;
                 }

             public function setFlag_departement($flag_departement)
                 {
                      $this->flag_departement = $flag_departement;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count departement =====================*/
					public function countDepartement(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get departement =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste departement =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("departement");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("departement");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("departement");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_departement = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If departement existe =====================*/
					public function ifDepartementexiste($condition){
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
                       $this->nom_departement = (!isset($nom_departement) || empty($nom_departement) )  ? '': $nom_departement;
                       $this->nbr_employee = (!isset($nbr_employee) || empty($nbr_employee) )  ? 0: $nbr_employee;
                       $this->jour_ouvrable = (!isset($jour_ouvrable) || empty($jour_ouvrable) )  ? '': $jour_ouvrable;
                       $this->id_chefdepartement = (!isset($id_chefdepartement) || empty($id_chefdepartement) )  ? 0: $id_chefdepartement;
                       $this->info_departement = (!isset($info_departement) || empty($info_departement) )  ? '': $info_departement;
                       $this->flag_departement = (!isset($flag_departement) || empty($flag_departement) )  ? 0: $flag_departement;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'id_service'=>($this->id_service == 0 )  ? $OldTable['id_service']:$this->id_service,
                                  'nom_departement'=>(!isset($this->nom_departement) || empty($this->nom_departement) )  ? $OldTable['nom_departement']:$this->nom_departement,
                                  'nbr_employee'=>($this->nbr_employee == 0 )  ? $OldTable['nbr_employee']:$this->nbr_employee,
                                  'jour_ouvrable'=>(!isset($this->jour_ouvrable) || empty($this->jour_ouvrable) )  ? $OldTable['jour_ouvrable']:$this->jour_ouvrable,
                                  'id_chefdepartement'=>($this->id_chefdepartement == 0 )  ? $OldTable['id_chefdepartement']:$this->id_chefdepartement,
                                  'info_departement'=>(!isset($this->info_departement) || empty($this->info_departement) )  ? $OldTable['info_departement']:$this->info_departement,
                                  'flag_departement'=>($this->flag_departement == 0 )  ? $OldTable['flag_departement']:$this->flag_departement					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'id_service'=>0,
                                  'nom_departement'=>"",
                                  'nbr_employee'=>0,
                                  'jour_ouvrable'=>'',
                                  'id_chefdepartement'=>0,
                                  'info_departement'=>"",
                                  'flag_departement'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



