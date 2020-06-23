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

        class Fiche_de_presense extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $fiche_paie_id;
        private  $anne_fiche;
        private  $date_fiche;
        private  $objet_fiche;
        private  $heur_depart;
        private  $nbr_heur;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="fiche_de_presense";
                 $this->id = 'null' ;
                 $this->fiche_paie_id = 0 ;
                 $this->anne_fiche = 0 ;
                 $this->date_fiche = date("") ;
                 $this->objet_fiche = "" ;
                 $this->heur_depart = date("") ;
                 $this->nbr_heur = 0 ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getFiche_paie_id()
                 {
                     return $this->fiche_paie_id;
                 }

             public function getAnne_fiche()
                 {
                     return $this->anne_fiche;
                 }

             public function getDate_fiche()
                 {
                     return $this->date_fiche;
                 }

             public function getObjet_fiche()
                 {
                     return $this->objet_fiche;
                 }

             public function getHeur_depart()
                 {
                     return $this->heur_depart;
                 }

             public function getNbr_heur()
                 {
                     return $this->nbr_heur;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setFiche_paie_id($fiche_paie_id)
                 {
                      $this->fiche_paie_id = $fiche_paie_id;
                 }

             public function setAnne_fiche($anne_fiche)
                 {
                      $this->anne_fiche = $anne_fiche;
                 }

             public function setDate_fiche($date_fiche)
                 {
                      $this->date_fiche = $date_fiche;
                 }

             public function setObjet_fiche($objet_fiche)
                 {
                      $this->objet_fiche = $objet_fiche;
                 }

             public function setHeur_depart($heur_depart)
                 {
                      $this->heur_depart = $heur_depart;
                 }

             public function setNbr_heur($nbr_heur)
                 {
                      $this->nbr_heur = $nbr_heur;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count fiche_de_presense =====================*/
					public function countFiche_de_presense(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get fiche_de_presense =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste fiche_de_presense =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("fiche_de_presense");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("fiche_de_presense");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("fiche_de_presense");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_fiche_de_presense = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If fiche_de_presense existe =====================*/
					public function ifFiche_de_presenseexiste($condition){
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
                       $this->fiche_paie_id = (!isset($fiche_paie_id) || empty($fiche_paie_id) )  ? 0: $fiche_paie_id;
                       $this->anne_fiche = (!isset($anne_fiche) || empty($anne_fiche) )  ? 0: $anne_fiche;
                       $this->date_fiche = (!isset($date_fiche) || empty($date_fiche) )  ? '': $date_fiche;
                       $this->objet_fiche = (!isset($objet_fiche) || empty($objet_fiche) )  ? '': $objet_fiche;
                       $this->heur_depart = (!isset($heur_depart) || empty($heur_depart) )  ? '': $heur_depart;
                       $this->nbr_heur = (!isset($nbr_heur) || empty($nbr_heur) )  ? 0: $nbr_heur;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'fiche_paie_id'=>($this->fiche_paie_id == 0 )  ? $OldTable['fiche_paie_id']:$this->fiche_paie_id,
                                  'anne_fiche'=>($this->anne_fiche == 0 )  ? $OldTable['anne_fiche']:$this->anne_fiche,
                                  'date_fiche'=>($this->date_fiche == null )  ? $OldTable['date_fiche']:$this->date_fiche,
                                  'objet_fiche'=>(!isset($this->objet_fiche) || empty($this->objet_fiche) )  ? $OldTable['objet_fiche']:$this->objet_fiche,
                                  'heur_depart'=>($this->heur_depart == null )  ? $OldTable['heur_depart']:$this->heur_depart,
                                  'nbr_heur'=>($this->nbr_heur == 0 )  ? $OldTable['nbr_heur']:$this->nbr_heur					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'fiche_paie_id'=>0,
                                  'anne_fiche'=>0,
                                  'date_fiche'=>date(""),
                                  'objet_fiche'=>"",
                                  'heur_depart'=>date(""),
                                  'nbr_heur'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



