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

        class Personne_presente extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_fiche;
        private  $id_personne;
        private  $heur_depart;
        private  $heur_arrive;
        private  $nbr_heur;
        private  $present;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="personne_presente";
                 $this->id = 'null' ;
                 $this->id_fiche = 0 ;
                 $this->id_personne = 0 ;
                 $this->heur_depart = date("") ;
                 $this->heur_arrive = date("") ;
                 $this->nbr_heur = 0 ;
                 $this->present = 0 ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_fiche()
                 {
                     return $this->id_fiche;
                 }

             public function getId_personne()
                 {
                     return $this->id_personne;
                 }

             public function getHeur_depart()
                 {
                     return $this->heur_depart;
                 }

             public function getHeur_arrive()
                 {
                     return $this->heur_arrive;
                 }

             public function getNbr_heur()
                 {
                     return $this->nbr_heur;
                 }

             public function getPresent()
                 {
                     return $this->present;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_fiche($id_fiche)
                 {
                      $this->id_fiche = $id_fiche;
                 }

             public function setId_personne($id_personne)
                 {
                      $this->id_personne = $id_personne;
                 }

             public function setHeur_depart($heur_depart)
                 {
                      $this->heur_depart = $heur_depart;
                 }

             public function setHeur_arrive($heur_arrive)
                 {
                      $this->heur_arrive = $heur_arrive;
                 }

             public function setNbr_heur($nbr_heur)
                 {
                      $this->nbr_heur = $nbr_heur;
                 }

             public function setPresent($present)
                 {
                      $this->present = $present;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count personne_presente =====================*/
					public function countPersonne_presente(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get personne_presente =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste personne_presente =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("personne_presente");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("personne_presente");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("personne_presente");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_personne_presente = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If personne_presente existe =====================*/
					public function ifPersonne_presenteexiste($condition){
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
                       $this->id_fiche = (!isset($id_fiche) || empty($id_fiche) )  ? 0: $id_fiche;
                       $this->id_personne = (!isset($id_personne) || empty($id_personne) )  ? 0: $id_personne;
                       $this->heur_depart = (!isset($heur_depart) || empty($heur_depart) )  ? '': $heur_depart;
                       $this->heur_arrive = (!isset($heur_arrive) || empty($heur_arrive) )  ? '': $heur_arrive;
                       $this->nbr_heur = (!isset($nbr_heur) || empty($nbr_heur) )  ? 0: $nbr_heur;
                       $this->present = (!isset($present) || empty($present) )  ? 0: $present;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'id_fiche'=>($this->id_fiche == 0 )  ? $OldTable['id_fiche']:$this->id_fiche,
                                  'id_personne'=>($this->id_personne == 0 )  ? $OldTable['id_personne']:$this->id_personne,
                                  'heur_depart'=>($this->heur_depart == null )  ? $OldTable['heur_depart']:$this->heur_depart,
                                  'heur_arrive'=>($this->heur_arrive == null )  ? $OldTable['heur_arrive']:$this->heur_arrive,
                                  'nbr_heur'=>($this->nbr_heur == 0 )  ? $OldTable['nbr_heur']:$this->nbr_heur,
                                  'present'=>($this->present == 0 )  ? $OldTable['present']:$this->present					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'id_fiche'=>0,
                                  'id_personne'=>0,
                                  'heur_depart'=>date(""),
                                  'heur_arrive'=>date(""),
                                  'nbr_heur'=>0,
                                  'present'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



