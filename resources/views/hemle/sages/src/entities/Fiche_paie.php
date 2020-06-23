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

        class Fiche_paie extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $salarier_id;
        private  $date_fiche_paie;
        private  $mois_payer;
        private  $est_payer;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="fiche_paie";
                 $this->id = 'null' ;
                 $this->salarier_id = 0 ;
                 $this->date_fiche_paie = date("") ;
                 $this->mois_payer = "" ;
                 $this->est_payer = 0 ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getSalarier_id()
                 {
                     return $this->salarier_id;
                 }

             public function getDate_fiche_paie()
                 {
                     return $this->date_fiche_paie;
                 }

             public function getMois_payer()
                 {
                     return $this->mois_payer;
                 }

             public function getEst_payer()
                 {
                     return $this->est_payer;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setSalarier_id($salarier_id)
                 {
                      $this->salarier_id = $salarier_id;
                 }

             public function setDate_fiche_paie($date_fiche_paie)
                 {
                      $this->date_fiche_paie = $date_fiche_paie;
                 }

             public function setMois_payer($mois_payer)
                 {
                      $this->mois_payer = $mois_payer;
                 }

             public function setEst_payer($est_payer)
                 {
                      $this->est_payer = $est_payer;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count fiche_paie =====================*/
					public function countFiche_paie(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get fiche_paie =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste fiche_paie =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("fiche_paie");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("fiche_paie");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("fiche_paie");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_fiche_paie = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If fiche_paie existe =====================*/
					public function ifFiche_paieexiste($condition){
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
                       $this->salarier_id = (!isset($salarier_id) || empty($salarier_id) )  ? 0: $salarier_id;
                       $this->date_fiche_paie = (!isset($date_fiche_paie) || empty($date_fiche_paie) )  ? '': $date_fiche_paie;
                       $this->mois_payer = (!isset($mois_payer) || empty($mois_payer) )  ? '': $mois_payer;
                       $this->est_payer = (!isset($est_payer) || empty($est_payer) )  ? 0: $est_payer;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'salarier_id'=>($this->salarier_id == 0 )  ? $OldTable['salarier_id']:$this->salarier_id,
                                  'date_fiche_paie'=>($this->date_fiche_paie == null )  ? $OldTable['date_fiche_paie']:$this->date_fiche_paie,
                                  'mois_payer'=>(!isset($this->mois_payer) || empty($this->mois_payer) )  ? $OldTable['mois_payer']:$this->mois_payer,
                                  'est_payer'=>($this->est_payer == 0 )  ? $OldTable['est_payer']:$this->est_payer					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'salarier_id'=>0,
                                  'date_fiche_paie'=>date(""),
                                  'mois_payer'=>"",
                                  'est_payer'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



