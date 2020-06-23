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

        class Stock extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_service;
        private  $nom_stock;
        private  $type_stock;
        private  $nbrarticle;
        private  $valeur;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="stock";
                 $this->id = 'null' ;
                 $this->id_service = 0 ;
                 $this->nom_stock = "" ;
                 $this->type_stock = "" ;
                 $this->nbrarticle = 0 ;
                 $this->valeur = 0 ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_service()
                 {
                     return $this->id_service;
                 }

             public function getNom_stock()
                 {
                     return $this->nom_stock;
                 }

             public function getType_stock()
                 {
                     return $this->type_stock;
                 }

             public function getNbrarticle()
                 {
                     return $this->nbrarticle;
                 }

             public function getValeur()
                 {
                     return $this->valeur;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_service($id_service)
                 {
                      $this->id_service = $id_service;
                 }

             public function setNom_stock($nom_stock)
                 {
                      $this->nom_stock = $nom_stock;
                 }

             public function setType_stock($type_stock)
                 {
                      $this->type_stock = $type_stock;
                 }

             public function setNbrarticle($nbrarticle)
                 {
                      $this->nbrarticle = $nbrarticle;
                 }

             public function setValeur($valeur)
                 {
                      $this->valeur = $valeur;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count stock =====================*/
					public function countStock(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get stock =====================*/


            public function get($id_stock=''){
                $this->db->setTablename('stock');
                $condition = array("id" =>($id_stock=='')?$this->id:$id_stock);
                return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
            }
				/*================== Liste stock =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("stock");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("stock");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function nbr_article_update($id_stock,$nbrarticle,$pxv){
					    $this->setTablename("stock");
                          $this->id =$id_stock;
                          $stock = $this->get();

                          $Table= array(
                              'nbrarticle'=>$stock['nbrarticle']+$nbrarticle,
                              'valeur'=>$stock['valeur']+$pxv
                          );
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($Table);
					 //   echo '<br>';
                              return   $this->put($condition);
                               }

					  public function delete(){
					    $this->setTablename("stock");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_stock = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If stock existe =====================*/
					public function ifStockexiste($condition){
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
                       $this->id_service = (!isset($id_service) || empty($id_service) )  ? 0: $id_service;
                       $this->nom_stock = (!isset($nom_stock) || empty($nom_stock) )  ? '': $nom_stock;
                       $this->type_stock = (!isset($type_stock) || empty($type_stock) )  ? '': $type_stock;
                       $this->nbrarticle = (!isset($nbrarticle) || empty($nbrarticle) )  ? 0: $nbrarticle;
                       $this->valeur = (!isset($valeur) || empty($valeur) )  ? 0: $valeur;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'id_service'=>($this->id_service == 0 )  ? $OldTable['id_service']:$this->id_service,
                                  'nom_stock'=>(!isset($this->nom_stock) || empty($this->nom_stock) )  ? $OldTable['nom_stock']:$this->nom_stock,
                                  'type_stock'=>(!isset($this->type_stock) || empty($this->type_stock) )  ? $OldTable['type_stock']:$this->type_stock,
                                  'nbrarticle'=>($this->nbrarticle == 0 )  ? $OldTable['nbrarticle']:$this->nbrarticle,
                                  'valeur'=>($this->valeur == 0 )  ? $OldTable['valeur']:$this->valeur					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'id_service'=>0,
                                  'nom_stock'=>"",
                                  'type_stock'=>"",
                                  'nbrarticle'=>0,
                                  'valeur'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



