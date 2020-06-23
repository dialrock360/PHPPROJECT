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

        class Catalogue extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $ref_article;
        private  $type_article;
        private  $nom_article;
        private  $nom_service;
        private  $nom_famille;
        private  $nom_categorie;
        private  $categorie;
        private  $nomenclature_article;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
                 parent::__construct();

                 $this->tablename="catalogue";
                 $this->categorie = new Categorie();
                 $this->id = 'null' ;
                 $this->ref_article = "" ;
                 $this->type_article = "" ;
                 $this->nom_article = "" ;
                 $this->nom_service = "" ;
                 $this->nom_famille = "" ;
                 $this->nom_categorie = "" ;
                 $this->nomenclature_article = "" ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
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

             public function getNom_service()
                 {
                     return $this->nom_service;
                 }

             public function getNom_famille()
                 {
                     return $this->nom_famille;
                 }

             public function getNom_categorie()
                 {
                     return $this->nom_categorie;
                 }

             public function getNomenclature_article()
                 {
                     return $this->nomenclature_article;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
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

             public function setNom_service($nom_service)
                 {
                      $this->nom_service = $nom_service;
                 }

             public function setNom_famille($nom_famille)
                 {
                      $this->nom_famille = $nom_famille;
                 }

             public function setNom_categorie($nom_categorie)
                 {
                      $this->nom_categorie = $nom_categorie;
                 }

             public function setNomenclature_article($nomenclature_article)
                 {
                      $this->nomenclature_article = $nomenclature_article;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count catalogue =====================*/
					public function countCatalogue(){
					    $this->db->setTablename($this->tablename);
                                       return $this->count_all();
					                }

				/*================== Get catalogue =====================*/
					public function get($id_catalogue=''){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                      // return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));

                        $condition = array("id" =>($id_catalogue=='')?$this->id:$id_catalogue);
                        return $this->conditional_get($condition);
					                }

 					public function getByname($nom_article=''){

                        $condition =($nom_article='')? array("nom_article" =>$this->nom_article):array("nom_article" =>$nom_article);

                        return $this->conditional_get($condition);
					                }

				/*================== Liste catalogue =====================*/
					public function liste(){
					            $this->db->setTablename($this->tablename);
                                     //  return $this->db->getRows(array("return_type"=>"many"));
                                $filter = array("order_by" =>'nom_article');
                                return $this->list_all();
					                }
					  public function insert(){
					    $this->setTablename("catalogue");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					 /* public function update(){
					    $this->setTablename("catalogue");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }*/
            public function update($catalogue=''){

                    $this->setTablename("catalogue");
                    $condition = array( 'id'=>$this->id );
                    $Toarray =($catalogue=='')?$this->ObjecToarrayMaker():$catalogue ;
                    $this->setTablearray($Toarray);
                if($Toarray['nom_article']!=''){

                    return   $this->put($condition);
                }
            }
					  public function delete(){
					    $this->setTablename("catalogue");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_catalogue = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If catalogue existe =====================*/
					public function ifCatalogueexiste($condition){
                        $this->db->setTablename($this->tablename);
	$existe=$this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					if($existe != null)
					      {
					                 return $existe;
					      } 
					return 0;
					                }
					  public function setPost($post,$file=array()){
					     extract($post);
                       $this->id = (!isset($id) || empty($id) )  ? 0: $id;
                       $this->ref_article = (!isset($ref_article) || empty($ref_article) )  ? '': $ref_article;
                       $this->type_article = (!isset($type_article) || empty($type_article) )  ? '': $type_article;
                       $this->nom_article = (!isset($nom_article) || empty($nom_article) )  ? '': $nom_article;
                       $this->nom_service = (!isset($nom_service) || empty($nom_service) )  ? '': $nom_service;
                       $this->nom_famille = (!isset($nom_famille) || empty($nom_famille) )  ? '': $nom_famille;
                       $this->nom_categorie = (!isset($nom_categorie) || empty($nom_categorie) )  ? '': $nom_categorie;
                       $this->nomenclature_article = (!isset($nomenclature_article) || empty($nomenclature_article) )  ? '': $nomenclature_article;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'ref_article'=>(!isset($this->ref_article) || empty($this->ref_article) )  ? $OldTable['ref_article']:$this->ref_article,
                                  'type_article'=>(!isset($this->type_article) || empty($this->type_article) )  ? $OldTable['type_article']:$this->type_article,
                                  'nom_article'=>(!isset($this->nom_article) || empty($this->nom_article) )  ? $OldTable['nom_article']:$this->nom_article,
                                  'nom_service'=>(!isset($this->nom_service) || empty($this->nom_service) )  ? $OldTable['nom_service']:$this->nom_service,
                                  'nom_famille'=>(!isset($this->nom_famille) || empty($this->nom_famille) )  ? $OldTable['nom_famille']:$this->nom_famille,
                                  'nom_categorie'=>(!isset($this->nom_categorie) || empty($this->nom_categorie) )  ? $OldTable['nom_categorie']:$this->nom_categorie,
                                  'nomenclature_article'=>(!isset($this->nomenclature_article) || empty($this->nomenclature_article) )  ? $OldTable['nomenclature_article']:$this->nomenclature_article					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'ref_article'=>"",
                                  'type_article'=>"",
                                  'nom_article'=>"",
                                  'nom_service'=>"",
                                  'nom_famille'=>"",
                                  'nom_categorie'=>"",
                                  'nomenclature_article'=>""					     );
                                  return $Table;
                  }

            public function addcatalogue($nom_article,$id_categorie,$type_article){
                    $id_catalogue=0;

                        if (!empty($nom_article)){
                            $articlename = ucfirst(strtolower($nom_article));
                            $Categorie  =$this->categorie->get($id_categorie);
                            $Catalogue = array(
                                'id' => "null",
                                'ref_article' => $this->refmaker('ART',$Categorie,$nom_article),
                                'type_article' => ($type_article==0)?"simple":"composer",
                                'nom_article' => $articlename,
                                'nom_service' => $Categorie['nom_service'],
                                'nom_famille' => $Categorie['nom_famille'],
                                'nom_categorie' => $Categorie['nom_categorie'],
                                'nomenclature_article' => $Categorie['nom_nomenclature_article']
                            );
                            $condition2 = array('nom_article' => $articlename);
                              $ifCatalogueexiste = $this->ifCatalogueexiste($condition2);


                            if ($ifCatalogueexiste==0){
                                $this->db->setTablename('catalogue');
                                $id_catalogue =   $this->db->insertTable($Catalogue);
                            }else{
                                $id_catalogue = $ifCatalogueexiste['id'];
                            }
                    }


                return  $id_catalogue;

            }
            private function refmaker($pre, $Categorie,  $nomart){
                //Instanciation du model

                return $pre.$Categorie['id_service'].$Categorie['id_famille'].$Categorie['id'].$this->explodestrtoupper($nomart).date('dmyHis');

            }
            private function explodestrtoupper($string){
                $pieces = explode(" ", $string);
                $firstCharacter =strtoupper($string[0]);
                if (count($pieces)>1){
                    $firstCharacter ='';
                    foreach ($pieces as $value){
                        //commandes
                        $firstCharacter .= strtoupper($value[0]);
                    }
                }
                return $firstCharacter;

            }
    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



