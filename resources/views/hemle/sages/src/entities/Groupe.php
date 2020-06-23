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
    /*==================Classe creer par Samane samane_ui_admin le 01-12-2019 13:12:22=====================*/

        class Groupe extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_service;
        private  $nom_groupe;
        private  $nbr_membre_groupe;
        private  $info_groupe;
        private  $flag_groupe;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="groupe";
                 $this->id = 'null' ;
                 $this->id_service = 0 ;
                 $this->nom_groupe = "" ;
                 $this->nbr_membre_groupe = 0 ;
                 $this->info_groupe = "" ;
                 $this->flag_groupe = 0 ;
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

             public function getNom_groupe()
                 {
                     return $this->nom_groupe;
                 }

             public function getNbr_membre_groupe()
                 {
                     return $this->nbr_membre_groupe;
                 }

             public function getInfo_groupe()
                 {
                     return $this->info_groupe;
                 }

             public function getFlag_groupe()
                 {
                     return $this->flag_groupe;
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

             public function setNom_groupe($nom_groupe)
                 {
                      $this->nom_groupe = $nom_groupe;
                 }

             public function setNbr_membre_groupe($nbr_membre_groupe)
                 {
                      $this->nbr_membre_groupe = $nbr_membre_groupe;
                 }

             public function setInfo_groupe($info_groupe)
                 {
                      $this->info_groupe = $info_groupe;
                 }

             public function setFlag_groupe($flag_groupe)
                 {
                      $this->flag_groupe = $flag_groupe;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count groupe =====================*/
					public function countGroupe(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get groupe =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste groupe =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'id_service'=>($this->id_service == 0 )  ? $OldTable['id_service']:$this->id_service,
                                  'nom_groupe'=>(!isset($this->nom_groupe) || empty($this->nom_groupe) )  ? $OldTable['nom_groupe']:$this->nom_groupe,
                                  'nbr_membre_groupe'=>($this->nbr_membre_groupe == 0 )  ? $OldTable['nbr_membre_groupe']:$this->nbr_membre_groupe,
                                  'info_groupe'=>(!isset($this->info_groupe) || empty($this->info_groupe) )  ? $OldTable['info_groupe']:$this->info_groupe,
                                  'flag_groupe'=>($this->flag_groupe == 0 )  ? $OldTable['flag_groupe']:$this->flag_groupe					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'id_service'=>0,
                                  'nom_groupe'=>"",
                                  'nbr_membre_groupe'=>0,
                                  'info_groupe'=>"",
                                  'flag_groupe'=>0					     );
                                  return $Table;
                  }
					  public function insert(){
					    $this->setTablename("groupe");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("groupe");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("groupe");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_groupe = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If groupe existe =====================*/
					public function ifGroupeexiste($condition){
					    $this->db->setTablename($this->tablename);
	$existe=$this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					if($existe != null)
					      {
					                 return 1;
					      } 
					return 0;
					                }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



