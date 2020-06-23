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

        class Ligne_personne_groupe extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id_personne;
        private  $id_groupe;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="ligne_personne_groupe";
                 $this->id_personne = 0 ;
                 $this->id_groupe = 0 ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId_personne()
                 {
                     return $this->id_personne;
                 }

             public function getId_groupe()
                 {
                     return $this->id_groupe;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId_personne($id_personne)
                 {
                      $this->id_personne = $id_personne;
                 }

             public function setId_groupe($id_groupe)
                 {
                      $this->id_groupe = $id_groupe;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count ligne_personne_groupe =====================*/
					public function countLigne_personne_groupe(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get ligne_personne_groupe =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id_personne" =>$this->id_personne);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste ligne_personne_groupe =====================*/
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
                                 
                                  'id_personne'=>($this->id_personne == 0 )  ? $OldTable['id_personne']:$this->id_personne,
                                  'id_groupe'=>($this->id_groupe == 0 )  ? $OldTable['id_groupe']:$this->id_groupe					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id_personne'=>0,
                                  'id_groupe'=>0					     );
                                  return $Table;
                  }
					  public function insert(){
					    $this->setTablename("ligne_personne_groupe");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("ligne_personne_groupe");
					    $condition = array( 'id_personne'=>$this->id_personne,'id_groupe'=>$this->id_groupe );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("ligne_personne_groupe");
					    $condition = array( 'id_personne'=>$this->id_personne,'id_groupe'=>$this->id_groupe );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_ligne_personne_groupe = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If ligne_personne_groupe existe =====================*/
					public function ifLigne_personne_groupeexiste($condition){
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



