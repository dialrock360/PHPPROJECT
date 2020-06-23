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

        class Salarier extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $contrat_id;
        private  $type_salaire;
        private  $salaire_base;
        private  $nature_salaire_base;
        private  $temps_travail;
        private  $nbr_heur_travail;
        private  $freq_travail;
        private  $prix_heur_sup;
        private  $poste_id;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="salarier";
                 $this->id = 'null' ;
                 $this->contrat_id = 0 ;
                 $this->type_salaire = "" ;
                 $this->salaire_base = 0 ;
                 $this->nature_salaire_base = "" ;
                 $this->temps_travail = "" ;
                 $this->nbr_heur_travail = 0 ;
                 $this->freq_travail = "" ;
                 $this->prix_heur_sup = 0 ;
                 $this->poste_id = "" ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getContrat_id()
                 {
                     return $this->contrat_id;
                 }

             public function getType_salaire()
                 {
                     return $this->type_salaire;
                 }

             public function getSalaire_base()
                 {
                     return $this->salaire_base;
                 }

             public function getNature_salaire_base()
                 {
                     return $this->nature_salaire_base;
                 }

             public function getTemps_travail()
                 {
                     return $this->temps_travail;
                 }

             public function getNbr_heur_travail()
                 {
                     return $this->nbr_heur_travail;
                 }

             public function getFreq_travail()
                 {
                     return $this->freq_travail;
                 }

             public function getPrix_heur_sup()
                 {
                     return $this->prix_heur_sup;
                 }

             public function getPoste_id()
                 {
                     return $this->poste_id;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setContrat_id($contrat_id)
                 {
                      $this->contrat_id = $contrat_id;
                 }

             public function setType_salaire($type_salaire)
                 {
                      $this->type_salaire = $type_salaire;
                 }

             public function setSalaire_base($salaire_base)
                 {
                      $this->salaire_base = $salaire_base;
                 }

             public function setNature_salaire_base($nature_salaire_base)
                 {
                      $this->nature_salaire_base = $nature_salaire_base;
                 }

             public function setTemps_travail($temps_travail)
                 {
                      $this->temps_travail = $temps_travail;
                 }

             public function setNbr_heur_travail($nbr_heur_travail)
                 {
                      $this->nbr_heur_travail = $nbr_heur_travail;
                 }

             public function setFreq_travail($freq_travail)
                 {
                      $this->freq_travail = $freq_travail;
                 }

             public function setPrix_heur_sup($prix_heur_sup)
                 {
                      $this->prix_heur_sup = $prix_heur_sup;
                 }

             public function setPoste_id($poste_id)
                 {
                      $this->poste_id = $poste_id;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count salarier =====================*/
					public function countSalarier(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get salarier =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste salarier =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("salarier");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("salarier");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("salarier");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_salarier = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If salarier existe =====================*/
					public function ifSalarierexiste($condition){
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
                       $this->contrat_id = (!isset($contrat_id) || empty($contrat_id) )  ? 0: $contrat_id;
                       $this->type_salaire = (!isset($type_salaire) || empty($type_salaire) )  ? '': $type_salaire;
                       $this->salaire_base = (!isset($salaire_base) || empty($salaire_base) )  ? 0: $salaire_base;
                       $this->nature_salaire_base = (!isset($nature_salaire_base) || empty($nature_salaire_base) )  ? '': $nature_salaire_base;
                       $this->temps_travail = (!isset($temps_travail) || empty($temps_travail) )  ? '': $temps_travail;
                       $this->nbr_heur_travail = (!isset($nbr_heur_travail) || empty($nbr_heur_travail) )  ? 0: $nbr_heur_travail;
                       $this->freq_travail = (!isset($freq_travail) || empty($freq_travail) )  ? '': $freq_travail;
                       $this->prix_heur_sup = (!isset($prix_heur_sup) || empty($prix_heur_sup) )  ? 0: $prix_heur_sup;
                       $this->poste_id = (!isset($poste_id) || empty($poste_id) )  ? '': $poste_id;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'contrat_id'=>($this->contrat_id == 0 )  ? $OldTable['contrat_id']:$this->contrat_id,
                                  'type_salaire'=>(!isset($this->type_salaire) || empty($this->type_salaire) )  ? $OldTable['type_salaire']:$this->type_salaire,
                                  'salaire_base'=>($this->salaire_base == 0 )  ? $OldTable['salaire_base']:$this->salaire_base,
                                  'nature_salaire_base'=>(!isset($this->nature_salaire_base) || empty($this->nature_salaire_base) )  ? $OldTable['nature_salaire_base']:$this->nature_salaire_base,
                                  'temps_travail'=>(!isset($this->temps_travail) || empty($this->temps_travail) )  ? $OldTable['temps_travail']:$this->temps_travail,
                                  'nbr_heur_travail'=>($this->nbr_heur_travail == 0 )  ? $OldTable['nbr_heur_travail']:$this->nbr_heur_travail,
                                  'freq_travail'=>(!isset($this->freq_travail) || empty($this->freq_travail) )  ? $OldTable['freq_travail']:$this->freq_travail,
                                  'prix_heur_sup'=>($this->prix_heur_sup == 0 )  ? $OldTable['prix_heur_sup']:$this->prix_heur_sup,
                                  'poste_id'=>(!isset($this->poste_id) || empty($this->poste_id) )  ? $OldTable['poste_id']:$this->poste_id					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'contrat_id'=>0,
                                  'type_salaire'=>"",
                                  'salaire_base'=>0,
                                  'nature_salaire_base'=>"",
                                  'temps_travail'=>"",
                                  'nbr_heur_travail'=>0,
                                  'freq_travail'=>"",
                                  'prix_heur_sup'=>0,
                                  'poste_id'=>""					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



