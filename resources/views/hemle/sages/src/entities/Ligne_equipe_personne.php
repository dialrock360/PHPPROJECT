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

        class Ligne_equipe_personne extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id_employee;
        private  $id_equipe;
        private  $maindoeuve_unitaire;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="ligne_equipe_personne";
                 $this->id_employee = 0 ;
                 $this->id_equipe = 0 ;
                 $this->maindoeuve_unitaire = 0 ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId_employee()
                 {
                     return $this->id_employee;
                 }

             public function getId_equipe()
                 {
                     return $this->id_equipe;
                 }

             public function getMaindoeuve_unitaire()
                 {
                     return $this->maindoeuve_unitaire;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId_employee($id_employee)
                 {
                      $this->id_employee = $id_employee;
                 }

             public function setId_equipe($id_equipe)
                 {
                      $this->id_equipe = $id_equipe;
                 }

             public function setMaindoeuve_unitaire($maindoeuve_unitaire)
                 {
                      $this->maindoeuve_unitaire = $maindoeuve_unitaire;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count ligne_equipe_personne =====================*/
					public function countLigne_equipe_personne(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get ligne_equipe_personne =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id_employee" =>$this->id_employee);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste ligne_equipe_personne =====================*/
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
                                 
                                  'id_employee'=>($this->id_employee == 0 )  ? $OldTable['id_employee']:$this->id_employee,
                                  'id_equipe'=>($this->id_equipe == 0 )  ? $OldTable['id_equipe']:$this->id_equipe,
                                  'maindoeuve_unitaire'=>($this->maindoeuve_unitaire == 0 )  ? $OldTable['maindoeuve_unitaire']:$this->maindoeuve_unitaire					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id_employee'=>0,
                                  'id_equipe'=>0,
                                  'maindoeuve_unitaire'=>0					     );
                                  return $Table;
                  }
					  public function insert(){
					    $this->setTablename("ligne_equipe_personne");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("ligne_equipe_personne");
					    $condition = array( 'id_employee'=>$this->id_employee,'id_equipe'=>$this->id_equipe );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("ligne_equipe_personne");
					    $condition = array( 'id_employee'=>$this->id_employee,'id_equipe'=>$this->id_equipe );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_ligne_equipe_personne = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If ligne_equipe_personne existe =====================*/
					public function ifLigne_equipe_personneexiste($condition){
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



