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
    /*==================Classe creer par Samane samane_ui_admin le 05-12-2019 02:38:09=====================*/

        class Tache extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_projet;
        private  $id_responsable;
        private  $nom_tache;
        private  $cout_tache;
        private  $date_tache;
        private  $datelimit_tache;
        private  $etiquette_tache;
        private  $etat_tache;
        private  $info_tache;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="tache";
                 $this->id = 'null' ;
                 $this->id_projet = 0 ;
                 $this->id_responsable = 0 ;
                 $this->nom_tache = "" ;
                 $this->cout_tache = 0 ;
                 $this->date_tache = date("") ;
                 $this->datelimit_tache = date("") ;
                 $this->etiquette_tache = "" ;
                 $this->etat_tache = 0 ;
                 $this->info_tache = "" ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_projet()
                 {
                     return $this->id_projet;
                 }

             public function getId_responsable()
                 {
                     return $this->id_responsable;
                 }

             public function getNom_tache()
                 {
                     return $this->nom_tache;
                 }

             public function getCout_tache()
                 {
                     return $this->cout_tache;
                 }

             public function getDate_tache()
                 {
                     return $this->date_tache;
                 }

             public function getDatelimit_tache()
                 {
                     return $this->datelimit_tache;
                 }

             public function getEtiquette_tache()
                 {
                     return $this->etiquette_tache;
                 }

             public function getEtat_tache()
                 {
                     return $this->etat_tache;
                 }

             public function getInfo_tache()
                 {
                     return $this->info_tache;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_projet($id_projet)
                 {
                      $this->id_projet = $id_projet;
                 }

             public function setId_responsable($id_responsable)
                 {
                      $this->id_responsable = $id_responsable;
                 }

             public function setNom_tache($nom_tache)
                 {
                      $this->nom_tache = $nom_tache;
                 }

             public function setCout_tache($cout_tache)
                 {
                      $this->cout_tache = $cout_tache;
                 }

             public function setDate_tache($date_tache)
                 {
                      $this->date_tache = $date_tache;
                 }

             public function setDatelimit_tache($datelimit_tache)
                 {
                      $this->datelimit_tache = $datelimit_tache;
                 }

             public function setEtiquette_tache($etiquette_tache)
                 {
                      $this->etiquette_tache = $etiquette_tache;
                 }

             public function setEtat_tache($etat_tache)
                 {
                      $this->etat_tache = $etat_tache;
                 }

             public function setInfo_tache($info_tache)
                 {
                      $this->info_tache = $info_tache;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count tache =====================*/
					public function countTache(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get tache =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste tache =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("tache");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("tache");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("tache");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_tache = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If tache existe =====================*/
					public function ifTacheexiste($condition){
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
                       $this->id_projet = (!isset($id_projet) || empty($id_projet) )  ? 0: $id_projet;
                       $this->id_responsable = (!isset($id_responsable) || empty($id_responsable) )  ? 0: $id_responsable;
                       $this->nom_tache = (!isset($nom_tache) || empty($nom_tache) )  ? '': $nom_tache;
                       $this->cout_tache = (!isset($cout_tache) || empty($cout_tache) )  ? 0: $cout_tache;
                       $this->date_tache = (!isset($date_tache) || empty($date_tache) )  ? '': $date_tache;
                       $this->datelimit_tache = (!isset($datelimit_tache) || empty($datelimit_tache) )  ? '': $datelimit_tache;
                       $this->etiquette_tache = (!isset($etiquette_tache) || empty($etiquette_tache) )  ? '': $etiquette_tache;
                       $this->etat_tache = (!isset($etat_tache) || empty($etat_tache) )  ? 0: $etat_tache;
                       $this->info_tache = (!isset($info_tache) || empty($info_tache) )  ? '': $info_tache;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'id_projet'=>($this->id_projet == 0 )  ? $OldTable['id_projet']:$this->id_projet,
                                  'id_responsable'=>($this->id_responsable == 0 )  ? $OldTable['id_responsable']:$this->id_responsable,
                                  'nom_tache'=>(!isset($this->nom_tache) || empty($this->nom_tache) )  ? $OldTable['nom_tache']:$this->nom_tache,
                                  'cout_tache'=>($this->cout_tache == 0 )  ? $OldTable['cout_tache']:$this->cout_tache,
                                  'date_tache'=>($this->date_tache == null )  ? $OldTable['date_tache']:$this->date_tache,
                                  'datelimit_tache'=>($this->datelimit_tache == null )  ? $OldTable['datelimit_tache']:$this->datelimit_tache,
                                  'etiquette_tache'=>(!isset($this->etiquette_tache) || empty($this->etiquette_tache) )  ? $OldTable['etiquette_tache']:$this->etiquette_tache,
                                  'etat_tache'=>($this->etat_tache == 0 )  ? $OldTable['etat_tache']:$this->etat_tache,
                                  'info_tache'=>(!isset($this->info_tache) || empty($this->info_tache) )  ? $OldTable['info_tache']:$this->info_tache					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'id_projet'=>0,
                                  'id_responsable'=>0,
                                  'nom_tache'=>"",
                                  'cout_tache'=>0,
                                  'date_tache'=>date(""),
                                  'datelimit_tache'=>date(""),
                                  'etiquette_tache'=>"",
                                  'etat_tache'=>0,
                                  'info_tache'=>""					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



