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

        class Programme extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_service;
        private  $modul_affecter;
        private  $nom_programme;
        private  $date_programme;
        private  $datefin_programme;
        private  $nbr_projet_programme;
        private  $etat_programme;
        private  $flag_programme;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="programme";
                 $this->id = 'null' ;
                 $this->id_service = 0 ;
                 $this->modul_affecter = 0 ;
                 $this->nom_programme = "" ;
                 $this->date_programme = date("") ;
                 $this->datefin_programme = date("") ;
                 $this->nbr_projet_programme = "" ;
                 $this->etat_programme = 0 ;
                 $this->flag_programme = 0 ;
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

             public function getModul_affecter()
                 {
                     return $this->modul_affecter;
                 }

             public function getNom_programme()
                 {
                     return $this->nom_programme;
                 }

             public function getDate_programme()
                 {
                     return $this->date_programme;
                 }

             public function getDatefin_programme()
                 {
                     return $this->datefin_programme;
                 }

             public function getNbr_projet_programme()
                 {
                     return $this->nbr_projet_programme;
                 }

             public function getEtat_programme()
                 {
                     return $this->etat_programme;
                 }

             public function getFlag_programme()
                 {
                     return $this->flag_programme;
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

             public function setModul_affecter($modul_affecter)
                 {
                      $this->modul_affecter = $modul_affecter;
                 }

             public function setNom_programme($nom_programme)
                 {
                      $this->nom_programme = $nom_programme;
                 }

             public function setDate_programme($date_programme)
                 {
                      $this->date_programme = $date_programme;
                 }

             public function setDatefin_programme($datefin_programme)
                 {
                      $this->datefin_programme = $datefin_programme;
                 }

             public function setNbr_projet_programme($nbr_projet_programme)
                 {
                      $this->nbr_projet_programme = $nbr_projet_programme;
                 }

             public function setEtat_programme($etat_programme)
                 {
                      $this->etat_programme = $etat_programme;
                 }

             public function setFlag_programme($flag_programme)
                 {
                      $this->flag_programme = $flag_programme;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count programme =====================*/
					public function countProgramme(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get programme =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste programme =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("programme");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("programme");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("programme");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_programme = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If programme existe =====================*/
					public function ifProgrammeexiste($condition){
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
                       $this->modul_affecter = (!isset($modul_affecter) || empty($modul_affecter) )  ? 0: $modul_affecter;
                       $this->nom_programme = (!isset($nom_programme) || empty($nom_programme) )  ? '': $nom_programme;
                       $this->date_programme = (!isset($date_programme) || empty($date_programme) )  ? '': $date_programme;
                       $this->datefin_programme = (!isset($datefin_programme) || empty($datefin_programme) )  ? '': $datefin_programme;
                       $this->nbr_projet_programme = (!isset($nbr_projet_programme) || empty($nbr_projet_programme) )  ? '': $nbr_projet_programme;
                       $this->etat_programme = (!isset($etat_programme) || empty($etat_programme) )  ? 0: $etat_programme;
                       $this->flag_programme = (!isset($flag_programme) || empty($flag_programme) )  ? 0: $flag_programme;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'id_service'=>($this->id_service == 0 )  ? $OldTable['id_service']:$this->id_service,
                                  'modul_affecter'=>($this->modul_affecter == 0 )  ? $OldTable['modul_affecter']:$this->modul_affecter,
                                  'nom_programme'=>(!isset($this->nom_programme) || empty($this->nom_programme) )  ? $OldTable['nom_programme']:$this->nom_programme,
                                  'date_programme'=>($this->date_programme == null )  ? $OldTable['date_programme']:$this->date_programme,
                                  'datefin_programme'=>($this->datefin_programme == null )  ? $OldTable['datefin_programme']:$this->datefin_programme,
                                  'nbr_projet_programme'=>(!isset($this->nbr_projet_programme) || empty($this->nbr_projet_programme) )  ? $OldTable['nbr_projet_programme']:$this->nbr_projet_programme,
                                  'etat_programme'=>($this->etat_programme == 0 )  ? $OldTable['etat_programme']:$this->etat_programme,
                                  'flag_programme'=>($this->flag_programme == 0 )  ? $OldTable['flag_programme']:$this->flag_programme					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'id_service'=>0,
                                  'modul_affecter'=>0,
                                  'nom_programme'=>"",
                                  'date_programme'=>date(""),
                                  'datefin_programme'=>date(""),
                                  'nbr_projet_programme'=>"",
                                  'etat_programme'=>0,
                                  'flag_programme'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



