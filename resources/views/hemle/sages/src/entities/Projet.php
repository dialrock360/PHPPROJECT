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

        class Projet extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_programme;
        private  $id_chef_projet;
        private  $nom_projet;
        private  $cout_projet;
        private  $valeur_projet;
        private  $date_projet;
        private  $datefin_projet;
        private  $etat_projet;
        private  $flag_projet;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="projet";
                 $this->id = 'null' ;
                 $this->id_programme = 0 ;
                 $this->id_chef_projet = 0 ;
                 $this->nom_projet = "" ;
                 $this->cout_projet = 0 ;
                 $this->valeur_projet = 0 ;
                 $this->date_projet = "" ;
                 $this->datefin_projet = date("") ;
                 $this->etat_projet = 0 ;
                 $this->flag_projet = 0 ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_programme()
                 {
                     return $this->id_programme;
                 }

             public function getId_chef_projet()
                 {
                     return $this->id_chef_projet;
                 }

             public function getNom_projet()
                 {
                     return $this->nom_projet;
                 }

             public function getCout_projet()
                 {
                     return $this->cout_projet;
                 }

             public function getValeur_projet()
                 {
                     return $this->valeur_projet;
                 }

             public function getDate_projet()
                 {
                     return $this->date_projet;
                 }

             public function getDatefin_projet()
                 {
                     return $this->datefin_projet;
                 }

             public function getEtat_projet()
                 {
                     return $this->etat_projet;
                 }

             public function getFlag_projet()
                 {
                     return $this->flag_projet;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_programme($id_programme)
                 {
                      $this->id_programme = $id_programme;
                 }

             public function setId_chef_projet($id_chef_projet)
                 {
                      $this->id_chef_projet = $id_chef_projet;
                 }

             public function setNom_projet($nom_projet)
                 {
                      $this->nom_projet = $nom_projet;
                 }

             public function setCout_projet($cout_projet)
                 {
                      $this->cout_projet = $cout_projet;
                 }

             public function setValeur_projet($valeur_projet)
                 {
                      $this->valeur_projet = $valeur_projet;
                 }

             public function setDate_projet($date_projet)
                 {
                      $this->date_projet = $date_projet;
                 }

             public function setDatefin_projet($datefin_projet)
                 {
                      $this->datefin_projet = $datefin_projet;
                 }

             public function setEtat_projet($etat_projet)
                 {
                      $this->etat_projet = $etat_projet;
                 }

             public function setFlag_projet($flag_projet)
                 {
                      $this->flag_projet = $flag_projet;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count projet =====================*/
					public function countProjet(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get projet =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste projet =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("projet");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("projet");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("projet");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_projet = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If projet existe =====================*/
					public function ifProjetexiste($condition){
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
                       $this->id_programme = (!isset($id_programme) || empty($id_programme) )  ? 0: $id_programme;
                       $this->id_chef_projet = (!isset($id_chef_projet) || empty($id_chef_projet) )  ? 0: $id_chef_projet;
                       $this->nom_projet = (!isset($nom_projet) || empty($nom_projet) )  ? '': $nom_projet;
                       $this->cout_projet = (!isset($cout_projet) || empty($cout_projet) )  ? 0: $cout_projet;
                       $this->valeur_projet = (!isset($valeur_projet) || empty($valeur_projet) )  ? 0: $valeur_projet;
                       $this->date_projet = (!isset($date_projet) || empty($date_projet) )  ? '': $date_projet;
                       $this->datefin_projet = (!isset($datefin_projet) || empty($datefin_projet) )  ? '': $datefin_projet;
                       $this->etat_projet = (!isset($etat_projet) || empty($etat_projet) )  ? 0: $etat_projet;
                       $this->flag_projet = (!isset($flag_projet) || empty($flag_projet) )  ? 0: $flag_projet;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'id_programme'=>($this->id_programme == 0 )  ? $OldTable['id_programme']:$this->id_programme,
                                  'id_chef_projet'=>($this->id_chef_projet == 0 )  ? $OldTable['id_chef_projet']:$this->id_chef_projet,
                                  'nom_projet'=>(!isset($this->nom_projet) || empty($this->nom_projet) )  ? $OldTable['nom_projet']:$this->nom_projet,
                                  'cout_projet'=>($this->cout_projet == 0 )  ? $OldTable['cout_projet']:$this->cout_projet,
                                  'valeur_projet'=>($this->valeur_projet == 0 )  ? $OldTable['valeur_projet']:$this->valeur_projet,
                                  'date_projet'=>(!isset($this->date_projet) || empty($this->date_projet) )  ? $OldTable['date_projet']:$this->date_projet,
                                  'datefin_projet'=>($this->datefin_projet == null )  ? $OldTable['datefin_projet']:$this->datefin_projet,
                                  'etat_projet'=>($this->etat_projet == 0 )  ? $OldTable['etat_projet']:$this->etat_projet,
                                  'flag_projet'=>($this->flag_projet == 0 )  ? $OldTable['flag_projet']:$this->flag_projet					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'id_programme'=>0,
                                  'id_chef_projet'=>0,
                                  'nom_projet'=>"",
                                  'cout_projet'=>0,
                                  'valeur_projet'=>0,
                                  'date_projet'=>"",
                                  'datefin_projet'=>date(""),
                                  'etat_projet'=>0,
                                  'flag_projet'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



