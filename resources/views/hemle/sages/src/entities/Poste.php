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

        class Poste extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $nom_poste;
        private  $categorie_proffessionelle;
        private  $salaire_base;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="poste";
                 $this->id = 'null' ;
                 $this->nom_poste = "" ;
                 $this->categorie_proffessionelle = "" ;
                 $this->salaire_base = 0 ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getNom_poste()
                 {
                     return $this->nom_poste;
                 }

             public function getCategorie_proffessionelle()
                 {
                     return $this->categorie_proffessionelle;
                 }

             public function getSalaire_base()
                 {
                     return $this->salaire_base;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setNom_poste($nom_poste)
                 {
                      $this->nom_poste = $nom_poste;
                 }

             public function setCategorie_proffessionelle($categorie_proffessionelle)
                 {
                      $this->categorie_proffessionelle = $categorie_proffessionelle;
                 }

             public function setSalaire_base($salaire_base)
                 {
                      $this->salaire_base = $salaire_base;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count poste =====================*/
					public function countPoste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get poste =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste poste =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("poste");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("poste");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("poste");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_poste = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If poste existe =====================*/
					public function ifPosteexiste($condition){
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
                       $this->nom_poste = (!isset($nom_poste) || empty($nom_poste) )  ? '': $nom_poste;
                       $this->categorie_proffessionelle = (!isset($categorie_proffessionelle) || empty($categorie_proffessionelle) )  ? '': $categorie_proffessionelle;
                       $this->salaire_base = (!isset($salaire_base) || empty($salaire_base) )  ? 0: $salaire_base;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'nom_poste'=>(!isset($this->nom_poste) || empty($this->nom_poste) )  ? $OldTable['nom_poste']:$this->nom_poste,
                                  'categorie_proffessionelle'=>(!isset($this->categorie_proffessionelle) || empty($this->categorie_proffessionelle) )  ? $OldTable['categorie_proffessionelle']:$this->categorie_proffessionelle,
                                  'salaire_base'=>($this->salaire_base == 0 )  ? $OldTable['salaire_base']:$this->salaire_base					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'nom_poste'=>"",
                                  'categorie_proffessionelle'=>"",
                                  'salaire_base'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



