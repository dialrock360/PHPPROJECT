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

        class Produit extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $nom_produit;
        private  $type_produit;
        private  $cout_produit;
        private  $valeur_produit;
        private  $poids_produit;
        private  $taille_produit;
        private  $longueur_produit;
        private  $largeur_produit;
        private  $volume_produit;
        private  $deitail_produit;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="produit";
                 $this->id = 'null' ;
                 $this->nom_produit = "" ;
                 $this->type_produit = "" ;
                 $this->cout_produit = 0 ;
                 $this->valeur_produit = 0 ;
                 $this->poids_produit = 0 ;
                 $this->taille_produit = 0 ;
                 $this->longueur_produit = 0 ;
                 $this->largeur_produit = 0 ;
                 $this->volume_produit = 0 ;
                 $this->deitail_produit = "" ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getNom_produit()
                 {
                     return $this->nom_produit;
                 }

             public function getType_produit()
                 {
                     return $this->type_produit;
                 }

             public function getCout_produit()
                 {
                     return $this->cout_produit;
                 }

             public function getValeur_produit()
                 {
                     return $this->valeur_produit;
                 }

             public function getPoids_produit()
                 {
                     return $this->poids_produit;
                 }

             public function getTaille_produit()
                 {
                     return $this->taille_produit;
                 }

             public function getLongueur_produit()
                 {
                     return $this->longueur_produit;
                 }

             public function getLargeur_produit()
                 {
                     return $this->largeur_produit;
                 }

             public function getVolume_produit()
                 {
                     return $this->volume_produit;
                 }

             public function getDeitail_produit()
                 {
                     return $this->deitail_produit;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setNom_produit($nom_produit)
                 {
                      $this->nom_produit = $nom_produit;
                 }

             public function setType_produit($type_produit)
                 {
                      $this->type_produit = $type_produit;
                 }

             public function setCout_produit($cout_produit)
                 {
                      $this->cout_produit = $cout_produit;
                 }

             public function setValeur_produit($valeur_produit)
                 {
                      $this->valeur_produit = $valeur_produit;
                 }

             public function setPoids_produit($poids_produit)
                 {
                      $this->poids_produit = $poids_produit;
                 }

             public function setTaille_produit($taille_produit)
                 {
                      $this->taille_produit = $taille_produit;
                 }

             public function setLongueur_produit($longueur_produit)
                 {
                      $this->longueur_produit = $longueur_produit;
                 }

             public function setLargeur_produit($largeur_produit)
                 {
                      $this->largeur_produit = $largeur_produit;
                 }

             public function setVolume_produit($volume_produit)
                 {
                      $this->volume_produit = $volume_produit;
                 }

             public function setDeitail_produit($deitail_produit)
                 {
                      $this->deitail_produit = $deitail_produit;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count produit =====================*/
					public function countProduit(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get produit =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste produit =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("produit");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("produit");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("produit");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_produit = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If produit existe =====================*/
					public function ifProduitexiste($condition){
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
                       $this->nom_produit = (!isset($nom_produit) || empty($nom_produit) )  ? '': $nom_produit;
                       $this->type_produit = (!isset($type_produit) || empty($type_produit) )  ? '': $type_produit;
                       $this->cout_produit = (!isset($cout_produit) || empty($cout_produit) )  ? 0: $cout_produit;
                       $this->valeur_produit = (!isset($valeur_produit) || empty($valeur_produit) )  ? 0: $valeur_produit;
                       $this->poids_produit = (!isset($poids_produit) || empty($poids_produit) )  ? 0: $poids_produit;
                       $this->taille_produit = (!isset($taille_produit) || empty($taille_produit) )  ? 0: $taille_produit;
                       $this->longueur_produit = (!isset($longueur_produit) || empty($longueur_produit) )  ? 0: $longueur_produit;
                       $this->largeur_produit = (!isset($largeur_produit) || empty($largeur_produit) )  ? 0: $largeur_produit;
                       $this->volume_produit = (!isset($volume_produit) || empty($volume_produit) )  ? 0: $volume_produit;
                       $this->deitail_produit = (!isset($deitail_produit) || empty($deitail_produit) )  ? '': $deitail_produit;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'nom_produit'=>(!isset($this->nom_produit) || empty($this->nom_produit) )  ? $OldTable['nom_produit']:$this->nom_produit,
                                  'type_produit'=>(!isset($this->type_produit) || empty($this->type_produit) )  ? $OldTable['type_produit']:$this->type_produit,
                                  'cout_produit'=>($this->cout_produit == 0 )  ? $OldTable['cout_produit']:$this->cout_produit,
                                  'valeur_produit'=>($this->valeur_produit == 0 )  ? $OldTable['valeur_produit']:$this->valeur_produit,
                                  'poids_produit'=>($this->poids_produit == 0 )  ? $OldTable['poids_produit']:$this->poids_produit,
                                  'taille_produit'=>($this->taille_produit == 0 )  ? $OldTable['taille_produit']:$this->taille_produit,
                                  'longueur_produit'=>($this->longueur_produit == 0 )  ? $OldTable['longueur_produit']:$this->longueur_produit,
                                  'largeur_produit'=>($this->largeur_produit == 0 )  ? $OldTable['largeur_produit']:$this->largeur_produit,
                                  'volume_produit'=>($this->volume_produit == 0 )  ? $OldTable['volume_produit']:$this->volume_produit,
                                  'deitail_produit'=>(!isset($this->deitail_produit) || empty($this->deitail_produit) )  ? $OldTable['deitail_produit']:$this->deitail_produit					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'nom_produit'=>"",
                                  'type_produit'=>"",
                                  'cout_produit'=>0,
                                  'valeur_produit'=>0,
                                  'poids_produit'=>0,
                                  'taille_produit'=>0,
                                  'longueur_produit'=>0,
                                  'largeur_produit'=>0,
                                  'volume_produit'=>0,
                                  'deitail_produit'=>""					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



