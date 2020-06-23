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
    /*==================Classe creer par Samane samane_ui_admin le 05-12-2019 02:38:06=====================*/

        class Article extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_categorie;
        private  $id_catalogue;
        private  $type_article;
        private  $fiche_technique;
        private  $nbrstockage;
        private  $tabidstock;
        private  $valeur_article;
        private  $flag_article;
        private  $id_service;
        private  $photo_article;
        private  $file;
        private  $array_file;
        private  $multiple;
        private  $catalogue;
        private  $categorie;
        private  $nom_article;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

                     require_once 'src/controller/tools/functions.php';
                     $this->photo_article = new Photo_article();
                     $this->catalogue = new Catalogue();
                     $this->categorie = new Categorie();
         $this->tablename="article";
                 $this->id = 'null' ;
                 $this->array_file = array() ;
                 $this->multiple = false ;
                 $this->id_categorie = 0 ;
                 $this->id_catalogue = 0 ;
                 $this->type_article = "" ;
                 $this->fiche_technique = "" ;
                 $this->nbrstockage = 0 ;
                 $this->tabidstock = "" ;
                 $this->valeur_article = 0 ;
                 $this->flag_article = 0 ;
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

             public function getType_article()
                 {
                     return $this->type_article;
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

            /**
             * @return mixed
             */
            public function getIdService()
            {
                return $this->id_service;
            }

            /**
             * @param mixed $id_service
             */
            public function setIdService($id_service)
            {
                $this->id_service = $id_service;
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

             public function setType_article($type_article)
                 {
                      $this->type_article = $type_article;
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

            /**
             * @return mixed
             */
            public function getFile()
            {
                return $this->file;
            }

            /**
             * @param mixed $file
             */
            public function setFile($file)
            {
                $this->file = $file;
            }

            /**
             * @return Catalogue
             */
            public function getCatalogue()
            {
                return $this->catalogue;
            }

            /**
             * @param Catalogue $catalogue
             */
            public function setCatalogue($catalogue)
            {
                $this->catalogue = $catalogue;
            }

            /**
             * @return Photo_article
             */
            public function getPhotoArticle()
            {
                return $this->photo_article;
            }

            /**
             * @param Photo_article $photo_article
             */
            public function setPhotoArticle($photo_article)
            {
                $this->photo_article = $photo_article;
            }

            /**
             * @return mixed
             */
            public function getNomArticle()
            {
                return $this->nom_article;
            }

            /**
             * @param mixed $nom_article
             */
            public function setNomArticle($nom_article)
            {
                $this->nom_article = $nom_article;
            }

            /**
             * @return array
             */
            public function getArrayFile()
            {
                return $this->array_file;
            }

            /**
             * @param array $array_file
             */
            public function setArrayFile($array_file)
            {
                $this->array_file = $array_file;
            }

            /**
             * @return bool
             */
            public function isMultiple()
            {
                return $this->multiple;
            }

            /**
             * @param bool $multiple
             */
            public function setMultiple($multiple)
            {
                $this->multiple = $multiple;
            }


    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count article =====================*/
					public function countArticle($id_service,$flag_categorie=0){
                        $this->db->setTablename("v_article");
                        $condition = array("id_service" =>$this->id_service,"flag_article" =>$flag_categorie);
                        return $this->conditional_count($condition);
					                }

				/*================== Get article =====================*/
					public function get($id_article=''){

                       // $condition = array("id" =>$this->id);
                                     //  return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
                        $condition = array("id" =>($id_article=='')?$this->id:$id_article);

                        $this->db->setTablename("v_article");
                        return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }
                        public function getArticle($id){
                            $sql = "SELECT * FROM v_article WHERE  id = ".$id."  ";
                            return $this->db->getspecificQuery($sql);
                        }

                        public function count_articleBycategorie($id_categorie=''){
                            $this->db->setTablename("article");
                            $condition = array("id_categorie" =>($id_categorie=='')?$this->id:$id_categorie);
                            return $this->conditional_count($condition);
                        }
				/*================== Liste article =====================*/
                        public function liste(){
                            $this->db->setTablename($this->tablename);
                           // return $this->db->getRows(array("return_type"=>"many"));
                            return $this->list_all();
                        }
                        public function Vliste($id_service='',$flag_article=0){
                            $this->tablename="v_article";
                            $s_id_service=($id_service=='')?$this->id_service:$id_service;
                            $s_flag_article=($flag_article==0)?$this->flag_article:$flag_article;
                            $condition = array("id_service" =>$s_id_service,"flag_article" =>$s_flag_article);
                            $filter = array("order_by" =>'nom_article');
                            return $this->conditional_liste($condition,$filter);
                        }
                        public function VlistearticleofCaegorie($id_categorie=''){
                            $this->tablename="v_article";
                            $condition = array("id_categorie" =>($id_categorie=='')?$this->id_categorie:$id_categorie);
                            // return $this->db->getRows(array("where"=>$condition,'order_by'=>'nom_article',"return_type"=>"many"));
                            $filter = array("order_by" =>'nom_article');
                            return $this->conditional_liste($condition,$filter);
                        }
					  public function insert(){
                          $id_article=  0;
                           $this->id_catalogue=  $this->catalogue->addcatalogue($this->nom_article,$this->id_categorie,$this->type_article);

                                  if ($this->id_catalogue > 0) {
                                     $ifArticleexiste= $this->ifArticleexiste(array('id_catalogue' => $this->id_catalogue,'id_categorie' => $this->id_categorie));

                                        if ($ifArticleexiste == 0) {
                                            $this->setTablename("article");
                                            $this->setTablearray($this->ObjecToarrayMaker());
                                            $id_article=  $this->post();


                                          if ($id_article > 0) {
                                              if ($this->multiple ==true) {
                                                  $x=0;
                                                  $dPhoto_article = array(
                                                      'id' => $id_article,
                                                      'id_service' => $this->id_service,
                                                      'nom_article' => $this->nom_article
                                                  );

                                                  foreach(  $this->array_file as $photos) {
                                                      $this->photo_article->setMultiple(1);
                                                      extract($photos);
                                                      $master=(($x==0)?1:0);
                                                      if ($x==0){
                                                          if (!empty($photos['name'])) {
                                                              $this->photo_article->savefiles($photos,$dPhoto_article,$master);
                                                              //print_r($photos);

                                                          }
                                                      }
                                                      if ($x>0){
                                                          if (!empty($photos['name'])) {
                                                              $this->photo_article->savefiles($photos,$dPhoto_article,$master);

                                                              // print_r($photos);

                                                          }
                                                      }
                                                      $x++;
                                                  }
                                                  // print_r($articleTab[$i-1]['photos']);
                                                  //echo  '<hr><hr><hr><hr>';

                                              }

                                           if (!empty($this->file['photos']['name']) && !empty($this->nom_article) && ($this->id_service>0)) {
                                              // print_r($ifArticleexiste);
                                               $dPhoto_article = array(
                                                   'id' => $id_article,
                                                   'id_service' => $this->id_service,
                                                   'nom_article' => $this->nom_article
                                               );
                                               $this->photo_article->savefiles($this->file,$dPhoto_article);

                                           }

                                        }
                                       }

                                   }
                               return   $id_article;

                               }
					 /* public function update(){
					    $this->setTablename("article");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }*/
					    public function update($article=''){
                            $Toarray =($article=='')?$this->ObjecToarrayMaker():$article ;
                            $this->setTablename("article");
                            $condition = array( 'id'=>$this->id );
                            $Categorie= $this->categorie->get($this->id_categorie) ;
                            $Article = $this->get($this->id) ;
                            $id_catalogue = $Article['id_catalogue'] ;
                            $id_article = $Article['id'] ;
                            $Catalogue = array(
                                'id' => $id_catalogue,
                                'ref_article' => $Article['ref_article'],
                                'type_article' => $Article['type_article'],
                                'nom_article' => $this->nom_article,
                                'nom_service' => $Categorie['nom_service'],
                                'nom_famille' => $Categorie['nom_famille'],
                                'nom_categorie' => $Categorie['nom_categorie'],
                                'nomenclature_article' => $Categorie['nom_nomenclature_article']
                            );
                            $this->catalogue->setPost($Catalogue);
                            $ok=   $this->catalogue->update();
                            //print_r($Toarray);
                                    if ($ok > 0) {
                                        $this->setTablearray($Toarray);
                                        $ok=   $this->put($condition);

                                        if ($ok > 0) {
                                            if ($this->multiple ==true) {
                                                $x=0;
                                                $dPhoto_article = array(
                                                    'id' => $id_article,
                                                    'id_service' => $this->id_service,
                                                    'nom_article' => $this->nom_article
                                                );

                                                foreach(  $this->array_file as $photos) {
                                                    $this->photo_article->setMultiple(1);
                                                    extract($photos);
                                                    $master=(($x==0)?1:0);
                                                    if ($x==0){
                                                        if (!empty($photos['name'])) {
                                                            $this->photo_article->savefiles($photos,$dPhoto_article,$master);
                                                            //print_r($photos);

                                                        }
                                                    }
                                                    if ($x>0){
                                                        if (!empty($photos['name'])) {
                                                            $this->photo_article->savefiles($photos,$dPhoto_article,$master);

                                                            // print_r($photos);

                                                        }
                                                    }
                                                    $x++;
                                                }
                                                // print_r($articleTab[$i-1]['photos']);
                                                //echo  '<hr><hr><hr><hr>';

                                            }

                                            if (!empty($this->file['photos']['name']) && !empty($this->nom_article) && ($this->id_service>0)) {
                                                // print_r($ifArticleexiste);
                                                $dPhoto_article = array(
                                                    'id' => $id_article,
                                                    'id_service' => $this->id_service,
                                                    'nom_article' => $this->nom_article
                                                );
                                                $this->photo_article->savefiles($this->file,$dPhoto_article);

                                            }

                                        }
                                    }
              //echo  $Article['id_catalogue'];



                return   $ok;

            }

                        public function update2($article=''){

                                $this->setTablename("article");
                                $condition = array( 'id'=>$this->id );
                                $Toarray =($article=='')?$this->ObjecToarrayMaker():$article ;
                                $this->setTablearray($Toarray);


                                if($this->id_catalogue<0){

                                    return   $this->put($condition);
                                }
                        }
					  public function delete(){
					    $this->setTablename("article");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
                          $this->db->setTablename($this->tablename);
                          $Table = array('flag_article' =>1);
                          $this->setTablearray($Table);
                          $condition = array('id' =>$this->id);
                          return  $this->put($condition);
                               }

				/*================== If article existe =====================*/
					public function ifArticleexiste($condition){
					        $this->tablename="v_article";
					        $this->db->setTablename($this->tablename);
	                        $existe=$this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					if($existe != null)
					      {
					                 return $existe;
					      } 
					return 0;
					                }
					  public function setPost($post,$file=array() ){
					     extract($post);

                       $this->id = (!isset($id) || empty($id)  || $id==0)  ? 0: $id;
                       $this->multiple = (!isset($multiple) || empty($multiple) )  ? false: $multiple;
                       $this->nom_article= (!isset($nom_article) || empty($nom_article) )  ? '': $nom_article;
                       $Fid_categorie= ((!isset($id_categorie) || empty($id_categorie) )  ?
                           ( (!isset($old_id_categorie) || empty($old_id_categorie) )  ? 0: $old_id_categorie
                           ): $id_categorie);
                       $this->id_categorie =$Fid_categorie;

                       $this->id_service = (!isset($id_service) || empty($id_service) )  ? 0: $id_service;
                       $this->id_catalogue = (!isset($id_catalogue) || empty($id_catalogue) )  ? 0: $id_catalogue;
                       $this->type_article = (!isset($type_article) || empty($type_article) )  ? '': $type_article;
                       $this->fiche_technique = (!isset($fiche_technique) || empty($fiche_technique) )  ? '': $fiche_technique;
                       $this->nbrstockage = (!isset($nbrstockage) || empty($nbrstockage) )  ? 0: $nbrstockage;
                       $this->tabidstock = (!isset($tabidstock) || empty($tabidstock) )  ? '': $tabidstock;
                       $this->valeur_article = (!isset($valeur_article) || empty($valeur_article) )  ? 0: $valeur_article;
                       $this->flag_article = (!isset($flag_article) || empty($flag_article) )  ? 0: $flag_article;




                          if (isset($file) && !empty($file)) {
                              if ($this->multiple ==true) {
                                  $this->array_file = $file;

                              }
                              if (isset($file) && !empty($file['photos']['name'])) {
                                  $this->file = $file;

                              }

                          }



                        }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'id_categorie'=>($this->id_categorie == 0 )  ? $OldTable['id_categorie']:$this->id_categorie,
                                  'id_catalogue'=>($this->id_catalogue == 0 )  ? $OldTable['id_catalogue']:$this->id_catalogue,
                                  'type_article'=>(!isset($this->type_article) || empty($this->type_article) )  ? $OldTable['type_article']:$this->type_article,
                                  'fiche_technique'=>(!isset($this->fiche_technique) || empty($this->fiche_technique) )  ? $OldTable['fiche_technique']:$this->fiche_technique,
                                  'nbrstockage'=>($this->nbrstockage == 0 )  ? $OldTable['nbrstockage']:$this->nbrstockage,
                                  'tabidstock'=>(!isset($this->tabidstock) || empty($this->tabidstock) )  ? $OldTable['tabidstock']:$this->tabidstock,
                                  'valeur_article'=>($this->valeur_article == 0 )  ? $OldTable['valeur_article']:$this->valeur_article,
                                  'flag_article'=>($this->flag_article == 0 )  ? $OldTable['flag_article']:$this->flag_article					     );
					    /*print_r($Table);
                          echo '<hr><hr><hr><hr>';*/
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'id_categorie'=>0,
                                  'id_catalogue'=>0,
                                  'type_article'=>"",
                                  'fiche_technique'=>"",
                                  'nbrstockage'=>0,
                                  'tabidstock'=>"",
                                  'valeur_article'=>0,
                                  'flag_article'=>0					     );
                                  return $Table;
                  }


                    public function reset_stockage_list(){
                        $this->db->setTablename($this->tablename);
                        $Table = array('nbrstockage' =>0,'tabidstock' =>'');
                        $this->setTablearray($Table);
                        return  $this->put();
                    }

                    public function  set_stockage_list($id_article,$id_stock){
					    $this->setPost($this->get($id_article));
                        $this->db->setTablename($this->tablename);
                        $nbrstockage=$this->nbrstockage+1;
                        $ssid_stock=(empty($this->tabidstock))?$id_stock:','.$id_stock;
                        $tabidstock=$this->tabidstock.$ssid_stock;
                        $Table = array('nbrstockage' =>$nbrstockage,'tabidstock' =>$tabidstock);
                        $this->setTablearray($Table);
                        $condition = array('id' =>$id_article);
                        return  $this->put($condition);
                    }

    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



