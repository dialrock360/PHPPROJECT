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

        class V_categorie extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
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
        private  $ref_nomenclature_article;
        private  $nom_nomenclature_article;
        private  $code_couleur;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="v_categorie";
                 $this->id = 0 ;
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
                 $this->ref_nomenclature_article = "" ;
                 $this->nom_nomenclature_article = "" ;
                 $this->code_couleur = "" ;
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

             public function getRef_nomenclature_article()
                 {
                     return $this->ref_nomenclature_article;
                 }

             public function getNom_nomenclature_article()
                 {
                     return $this->nom_nomenclature_article;
                 }

             public function getCode_couleur()
                 {
                     return $this->code_couleur;
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

             public function setRef_nomenclature_article($ref_nomenclature_article)
                 {
                      $this->ref_nomenclature_article = $ref_nomenclature_article;
                 }

             public function setNom_nomenclature_article($nom_nomenclature_article)
                 {
                      $this->nom_nomenclature_article = $nom_nomenclature_article;
                 }

             public function setCode_couleur($code_couleur)
                 {
                      $this->code_couleur = $code_couleur;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count v_categorie =====================*/
					public function countV_categorie(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get v_categorie =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    ;
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste v_categorie =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("v_categorie");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("v_categorie");
					    $condition = array(  );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("v_categorie");
					    $condition = array(  );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_v_categorie = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If v_categorie existe =====================*/
					public function ifV_categorieexiste($condition){
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
                       $this->ref_nomenclature_article = (!isset($ref_nomenclature_article) || empty($ref_nomenclature_article) )  ? '': $ref_nomenclature_article;
                       $this->nom_nomenclature_article = (!isset($nom_nomenclature_article) || empty($nom_nomenclature_article) )  ? '': $nom_nomenclature_article;
                       $this->code_couleur = (!isset($code_couleur) || empty($code_couleur) )  ? '': $code_couleur;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 )  ? $OldTable['id']:$this->id,
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
                                  'ref_nomenclature_article'=>(!isset($this->ref_nomenclature_article) || empty($this->ref_nomenclature_article) )  ? $OldTable['ref_nomenclature_article']:$this->ref_nomenclature_article,
                                  'nom_nomenclature_article'=>(!isset($this->nom_nomenclature_article) || empty($this->nom_nomenclature_article) )  ? $OldTable['nom_nomenclature_article']:$this->nom_nomenclature_article,
                                  'code_couleur'=>(!isset($this->code_couleur) || empty($this->code_couleur) )  ? $OldTable['code_couleur']:$this->code_couleur					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>0,
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
                                  'ref_nomenclature_article'=>"",
                                  'nom_nomenclature_article'=>"",
                                  'code_couleur'=>""					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



