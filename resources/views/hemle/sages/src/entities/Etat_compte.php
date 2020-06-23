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

        class Etat_compte extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_famille;
        private  $id_mouvement;
        private  $date_etat_compte;
        private  $depense_etat_compte;
        private  $gain_etat_compte;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="etat_compte";
                 $this->id = 'null' ;
                 $this->id_famille = 0 ;
                 $this->id_mouvement = 0 ;
                 $this->date_etat_compte = date("") ;
                 $this->depense_etat_compte = 0 ;
                 $this->gain_etat_compte = 0 ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_famille()
                 {
                     return $this->id_famille;
                 }

             public function getId_mouvement()
                 {
                     return $this->id_mouvement;
                 }

             public function getDate_etat_compte()
                 {
                     return $this->date_etat_compte;
                 }

             public function getDepense_etat_compte()
                 {
                     return $this->depense_etat_compte;
                 }

             public function getGain_etat_compte()
                 {
                     return $this->gain_etat_compte;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_famille($id_famille)
                 {
                      $this->id_famille = $id_famille;
                 }

             public function setId_mouvement($id_mouvement)
                 {
                      $this->id_mouvement = $id_mouvement;
                 }

             public function setDate_etat_compte($date_etat_compte)
                 {
                      $this->date_etat_compte = $date_etat_compte;
                 }

             public function setDepense_etat_compte($depense_etat_compte)
                 {
                      $this->depense_etat_compte = $depense_etat_compte;
                 }

             public function setGain_etat_compte($gain_etat_compte)
                 {
                      $this->gain_etat_compte = $gain_etat_compte;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count etat_compte =====================*/
					public function countEtat_compte(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get etat_compte =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste etat_compte =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("etat_compte");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("etat_compte");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("etat_compte");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_etat_compte = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If etat_compte existe =====================*/
					public function ifEtat_compteexiste($condition){
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
                       $this->id_famille = (!isset($id_famille) || empty($id_famille) )  ? 0: $id_famille;
                       $this->id_mouvement = (!isset($id_mouvement) || empty($id_mouvement) )  ? 0: $id_mouvement;
                       $this->date_etat_compte = (!isset($date_etat_compte) || empty($date_etat_compte) )  ? '': $date_etat_compte;
                       $this->depense_etat_compte = (!isset($depense_etat_compte) || empty($depense_etat_compte) )  ? 0: $depense_etat_compte;
                       $this->gain_etat_compte = (!isset($gain_etat_compte) || empty($gain_etat_compte) )  ? 0: $gain_etat_compte;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'id_famille'=>($this->id_famille == 0 )  ? $OldTable['id_famille']:$this->id_famille,
                                  'id_mouvement'=>($this->id_mouvement == 0 )  ? $OldTable['id_mouvement']:$this->id_mouvement,
                                  'date_etat_compte'=>($this->date_etat_compte == null )  ? $OldTable['date_etat_compte']:$this->date_etat_compte,
                                  'depense_etat_compte'=>($this->depense_etat_compte == 0 )  ? $OldTable['depense_etat_compte']:$this->depense_etat_compte,
                                  'gain_etat_compte'=>($this->gain_etat_compte == 0 )  ? $OldTable['gain_etat_compte']:$this->gain_etat_compte					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'id_famille'=>0,
                                  'id_mouvement'=>0,
                                  'date_etat_compte'=>date(""),
                                  'depense_etat_compte'=>0,
                                  'gain_etat_compte'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



