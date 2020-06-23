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

        class V_article extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_categorie;
        private  $id_catalogue;
        private  $fiche_technique;
        private  $nbrstockage;
        private  $tabidstock;
        private  $valeur_article;
        private  $flag_article;
        private  $ref_article;
        private  $type_article;
        private  $nom_article;
        private  $id_famille;
        private  $nom_categorie;
        private  $nbr_produit_categorie;
        private  $valeur_categorie;
        private  $id_nomenclature_article;
        private  $flag_categorie;
        private  $id_service;
        private  $nom_famille;
        private  $color_famille;
        private  $nbr_categorie_famille;
        private  $valeur_famille;
        private  $flag_famille;
        private  $nom_service;
        private  $path_photo;
        private  $master;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="v_article";
                 $this->id = 0 ;
                 $this->id_categorie = 0 ;
                 $this->id_catalogue = 0 ;
                 $this->fiche_technique = "" ;
                 $this->nbrstockage = 0 ;
                 $this->tabidstock = "" ;
                 $this->valeur_article = 0 ;
                 $this->flag_article = 0 ;
                 $this->ref_article = "" ;
                 $this->type_article = "" ;
                 $this->nom_article = "" ;
                 $this->id_famille = 0 ;
                 $this->nom_categorie = "" ;
                 $this->nbr_produit_categorie = 0 ;
                 $this->valeur_categorie = 0 ;
                 $this->id_nomenclature_article = 0 ;
                 $this->flag_categorie = 0 ;
                 $this->id_service = 0 ;
                 $this->nom_famille = "" ;
                 $this->color_famille = "" ;
                 $this->nbr_categorie_famille = 0 ;
                 $this->valeur_famille = 0 ;
                 $this->flag_famille = 0 ;
                 $this->nom_service = "" ;
                 $this->path_photo = "" ;
                 $this->master = 0 ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_categorie()
                 {
                     return $this->id_categorie;
                 }

             public function getId_catalogue()
                 {
                     return $this->id_catalogue;
                 }

             public function getFiche_technique()
                 {
                     return $this->fiche_technique;
                 }

             public function getNbrstockage()
                 {
                     return $this->nbrstockage;
                 }

             public function getTabidstock()
                 {
                     return $this->tabidstock;
                 }

             public function getValeur_article()
                 {
                     return $this->valeur_article;
                 }

             public function getFlag_article()
                 {
                     return $this->flag_article;
                 }

             public function getRef_article()
                 {
                     return $this->ref_article;
                 }

             public function getType_article()
                 {
                     return $this->type_article;
                 }

             public function getNom_article()
                 {
                     return $this->nom_article;
                 }

             public function getId_famille()
                 {
                     return $this->id_famille;
                 }

             public function getNom_categorie()
                 {
                     return $this->nom_categorie;
                 }

             public function getNbr_produit_categorie()
                 {
                     return $this->nbr_produit_categorie;
                 }

             public function getValeur_categorie()
                 {
                     return $this->valeur_categorie;
                 }

             public function getId_nomenclature_article()
                 {
                     return $this->id_nomenclature_article;
                 }

             public function getFlag_categorie()
                 {
                     return $this->flag_categorie;
                 }

             public function getId_service()
                 {
                     return $this->id_service;
                 }

             public function getNom_famille()
                 {
                     return $this->nom_famille;
                 }

             public function getColor_famille()
                 {
                     return $this->color_famille;
                 }

             public function getNbr_categorie_famille()
                 {
                     return $this->nbr_categorie_famille;
                 }

             public function getValeur_famille()
                 {
                     return $this->valeur_famille;
                 }

             public function getFlag_famille()
                 {
                     return $this->flag_famille;
                 }

             public function getNom_service()
                 {
                     return $this->nom_service;
                 }

             public function getPath_photo()
                 {
                     return $this->path_photo;
                 }

             public function getMaster()
                 {
                     return $this->master;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_categorie($id_categorie)
                 {
                      $this->id_categorie = $id_categorie;
                 }

             public function setId_catalogue($id_catalogue)
                 {
                      $this->id_catalogue = $id_catalogue;
                 }

             public function setFiche_technique($fiche_technique)
                 {
                      $this->fiche_technique = $fiche_technique;
                 }

             public function setNbrstockage($nbrstockage)
                 {
                      $this->nbrstockage = $nbrstockage;
                 }

             public function setTabidstock($tabidstock)
                 {
                      $this->tabidstock = $tabidstock;
                 }

             public function setValeur_article($valeur_article)
                 {
                      $this->valeur_article = $valeur_article;
                 }

             public function setFlag_article($flag_article)
                 {
                      $this->flag_article = $flag_article;
                 }

             public function setRef_article($ref_article)
                 {
                      $this->ref_article = $ref_article;
                 }

             public function setType_article($type_article)
                 {
                      $this->type_article = $type_article;
                 }

             public function setNom_article($nom_article)
                 {
                      $this->nom_article = $nom_article;
                 }

             public function setId_famille($id_famille)
                 {
                      $this->id_famille = $id_famille;
                 }

             public function setNom_categorie($nom_categorie)
                 {
                      $this->nom_categorie = $nom_categorie;
                 }

             public function setNbr_produit_categorie($nbr_produit_categorie)
                 {
                      $this->nbr_produit_categorie = $nbr_produit_categorie;
                 }

             public function setValeur_categorie($valeur_categorie)
                 {
                      $this->valeur_categorie = $valeur_categorie;
                 }

             public function setId_nomenclature_article($id_nomenclature_article)
                 {
                      $this->id_nomenclature_article = $id_nomenclature_article;
                 }

             public function setFlag_categorie($flag_categorie)
                 {
                      $this->flag_categorie = $flag_categorie;
                 }

             public function setId_service($id_service)
                 {
                      $this->id_service = $id_service;
                 }

             public function setNom_famille($nom_famille)
                 {
                      $this->nom_famille = $nom_famille;
                 }

             public function setColor_famille($color_famille)
                 {
                      $this->color_famille = $color_famille;
                 }

             public function setNbr_categorie_famille($nbr_categorie_famille)
                 {
                      $this->nbr_categorie_famille = $nbr_categorie_famille;
                 }

             public function setValeur_famille($valeur_famille)
                 {
                      $this->valeur_famille = $valeur_famille;
                 }

             public function setFlag_famille($flag_famille)
                 {
                      $this->flag_famille = $flag_famille;
                 }

             public function setNom_service($nom_service)
                 {
                      $this->nom_service = $nom_service;
                 }

             public function setPath_photo($path_photo)
                 {
                      $this->path_photo = $path_photo;
                 }

             public function setMaster($master)
                 {
                      $this->master = $master;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count v_article =====================*/
					public function countV_article(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get v_article =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    ;
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste v_article =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("v_article");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("v_article");
					    $condition = array(  );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("v_article");
					    $condition = array(  );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_v_article = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If v_article existe =====================*/
					public function ifV_articleexiste($condition){
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
                       $this->id_categorie = (!isset($id_categorie) || empty($id_categorie) )  ? 0: $id_categorie;
                       $this->id_catalogue = (!isset($id_catalogue) || empty($id_catalogue) )  ? 0: $id_catalogue;
                       $this->fiche_technique = (!isset($fiche_technique) || empty($fiche_technique) )  ? '': $fiche_technique;
                       $this->nbrstockage = (!isset($nbrstockage) || empty($nbrstockage) )  ? 0: $nbrstockage;
                       $this->tabidstock = (!isset($tabidstock) || empty($tabidstock) )  ? '': $tabidstock;
                       $this->valeur_article = (!isset($valeur_article) || empty($valeur_article) )  ? 0: $valeur_article;
                       $this->flag_article = (!isset($flag_article) || empty($flag_article) )  ? 0: $flag_article;
                       $this->ref_article = (!isset($ref_article) || empty($ref_article) )  ? '': $ref_article;
                       $this->type_article = (!isset($type_article) || empty($type_article) )  ? '': $type_article;
                       $this->nom_article = (!isset($nom_article) || empty($nom_article) )  ? '': $nom_article;
                       $this->id_famille = (!isset($id_famille) || empty($id_famille) )  ? 0: $id_famille;
                       $this->nom_categorie = (!isset($nom_categorie) || empty($nom_categorie) )  ? '': $nom_categorie;
                       $this->nbr_produit_categorie = (!isset($nbr_produit_categorie) || empty($nbr_produit_categorie) )  ? 0: $nbr_produit_categorie;
                       $this->valeur_categorie = (!isset($valeur_categorie) || empty($valeur_categorie) )  ? 0: $valeur_categorie;
                       $this->id_nomenclature_article = (!isset($id_nomenclature_article) || empty($id_nomenclature_article) )  ? 0: $id_nomenclature_article;
                       $this->flag_categorie = (!isset($flag_categorie) || empty($flag_categorie) )  ? 0: $flag_categorie;
                       $this->id_service = (!isset($id_service) || empty($id_service) )  ? 0: $id_service;
                       $this->nom_famille = (!isset($nom_famille) || empty($nom_famille) )  ? '': $nom_famille;
                       $this->color_famille = (!isset($color_famille) || empty($color_famille) )  ? '': $color_famille;
                       $this->nbr_categorie_famille = (!isset($nbr_categorie_famille) || empty($nbr_categorie_famille) )  ? 0: $nbr_categorie_famille;
                       $this->valeur_famille = (!isset($valeur_famille) || empty($valeur_famille) )  ? 0: $valeur_famille;
                       $this->flag_famille = (!isset($flag_famille) || empty($flag_famille) )  ? 0: $flag_famille;
                       $this->nom_service = (!isset($nom_service) || empty($nom_service) )  ? '': $nom_service;
                       $this->path_photo = (!isset($path_photo) || empty($path_photo) )  ? '': $path_photo;
                       $this->master = (!isset($master) || empty($master) )  ? 0: $master;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 )  ? $OldTable['id']:$this->id,
                                  'id_categorie'=>($this->id_categorie == 0 )  ? $OldTable['id_categorie']:$this->id_categorie,
                                  'id_catalogue'=>($this->id_catalogue == 0 )  ? $OldTable['id_catalogue']:$this->id_catalogue,
                                  'fiche_technique'=>(!isset($this->fiche_technique) || empty($this->fiche_technique) )  ? $OldTable['fiche_technique']:$this->fiche_technique,
                                  'nbrstockage'=>($this->nbrstockage == 0 )  ? $OldTable['nbrstockage']:$this->nbrstockage,
                                  'tabidstock'=>(!isset($this->tabidstock) || empty($this->tabidstock) )  ? $OldTable['tabidstock']:$this->tabidstock,
                                  'valeur_article'=>($this->valeur_article == 0 )  ? $OldTable['valeur_article']:$this->valeur_article,
                                  'flag_article'=>($this->flag_article == 0 )  ? $OldTable['flag_article']:$this->flag_article,
                                  'ref_article'=>(!isset($this->ref_article) || empty($this->ref_article) )  ? $OldTable['ref_article']:$this->ref_article,
                                  'type_article'=>(!isset($this->type_article) || empty($this->type_article) )  ? $OldTable['type_article']:$this->type_article,
                                  'nom_article'=>(!isset($this->nom_article) || empty($this->nom_article) )  ? $OldTable['nom_article']:$this->nom_article,
                                  'id_famille'=>($this->id_famille == 0 )  ? $OldTable['id_famille']:$this->id_famille,
                                  'nom_categorie'=>(!isset($this->nom_categorie) || empty($this->nom_categorie) )  ? $OldTable['nom_categorie']:$this->nom_categorie,
                                  'nbr_produit_categorie'=>($this->nbr_produit_categorie == 0 )  ? $OldTable['nbr_produit_categorie']:$this->nbr_produit_categorie,
                                  'valeur_categorie'=>($this->valeur_categorie == 0 )  ? $OldTable['valeur_categorie']:$this->valeur_categorie,
                                  'id_nomenclature_article'=>($this->id_nomenclature_article == 0 )  ? $OldTable['id_nomenclature_article']:$this->id_nomenclature_article,
                                  'flag_categorie'=>($this->flag_categorie == 0 )  ? $OldTable['flag_categorie']:$this->flag_categorie,
                                  'id_service'=>($this->id_service == 0 )  ? $OldTable['id_service']:$this->id_service,
                                  'nom_famille'=>(!isset($this->nom_famille) || empty($this->nom_famille) )  ? $OldTable['nom_famille']:$this->nom_famille,
                                  'color_famille'=>(!isset($this->color_famille) || empty($this->color_famille) )  ? $OldTable['color_famille']:$this->color_famille,
                                  'nbr_categorie_famille'=>($this->nbr_categorie_famille == 0 )  ? $OldTable['nbr_categorie_famille']:$this->nbr_categorie_famille,
                                  'valeur_famille'=>($this->valeur_famille == 0 )  ? $OldTable['valeur_famille']:$this->valeur_famille,
                                  'flag_famille'=>($this->flag_famille == 0 )  ? $OldTable['flag_famille']:$this->flag_famille,
                                  'nom_service'=>(!isset($this->nom_service) || empty($this->nom_service) )  ? $OldTable['nom_service']:$this->nom_service,
                                  'path_photo'=>(!isset($this->path_photo) || empty($this->path_photo) )  ? $OldTable['path_photo']:$this->path_photo,
                                  'master'=>($this->master == 0 )  ? $OldTable['master']:$this->master					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>0,
                                  'id_categorie'=>0,
                                  'id_catalogue'=>0,
                                  'fiche_technique'=>"",
                                  'nbrstockage'=>0,
                                  'tabidstock'=>"",
                                  'valeur_article'=>0,
                                  'flag_article'=>0,
                                  'ref_article'=>"",
                                  'type_article'=>"",
                                  'nom_article'=>"",
                                  'id_famille'=>0,
                                  'nom_categorie'=>"",
                                  'nbr_produit_categorie'=>0,
                                  'valeur_categorie'=>0,
                                  'id_nomenclature_article'=>0,
                                  'flag_categorie'=>0,
                                  'id_service'=>0,
                                  'nom_famille'=>"",
                                  'color_famille'=>"",
                                  'nbr_categorie_famille'=>0,
                                  'valeur_famille'=>0,
                                  'flag_famille'=>0,
                                  'nom_service'=>"",
                                  'path_photo'=>"",
                                  'master'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



