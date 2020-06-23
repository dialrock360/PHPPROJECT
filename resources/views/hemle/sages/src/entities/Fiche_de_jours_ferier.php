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

        class Fiche_de_jours_ferier extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $annee_exercice;
        private  $nbr_jour_ferie;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="fiche_de_jours_ferier";
                 $this->id = 'null' ;
                 $this->annee_exercice = 0 ;
                 $this->nbr_jour_ferie = 0 ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getAnnee_exercice()
                 {
                     return $this->annee_exercice;
                 }

             public function getNbr_jour_ferie()
                 {
                     return $this->nbr_jour_ferie;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setAnnee_exercice($annee_exercice)
                 {
                      $this->annee_exercice = $annee_exercice;
                 }

             public function setNbr_jour_ferie($nbr_jour_ferie)
                 {
                      $this->nbr_jour_ferie = $nbr_jour_ferie;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count fiche_de_jours_ferier =====================*/
					public function countFiche_de_jours_ferier(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get fiche_de_jours_ferier =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste fiche_de_jours_ferier =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("fiche_de_jours_ferier");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("fiche_de_jours_ferier");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("fiche_de_jours_ferier");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_fiche_de_jours_ferier = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If fiche_de_jours_ferier existe =====================*/
					public function ifFiche_de_jours_ferierexiste($condition){
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
                       $this->annee_exercice = (!isset($annee_exercice) || empty($annee_exercice) )  ? 0: $annee_exercice;
                       $this->nbr_jour_ferie = (!isset($nbr_jour_ferie) || empty($nbr_jour_ferie) )  ? 0: $nbr_jour_ferie;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'annee_exercice'=>($this->annee_exercice == 0 )  ? $OldTable['annee_exercice']:$this->annee_exercice,
                                  'nbr_jour_ferie'=>($this->nbr_jour_ferie == 0 )  ? $OldTable['nbr_jour_ferie']:$this->nbr_jour_ferie					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'annee_exercice'=>0,
                                  'nbr_jour_ferie'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



