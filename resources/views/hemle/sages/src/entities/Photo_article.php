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

        class Photo_article extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_service;
        private  $id_article;
        private  $path_photo;
        private  $master;
        private  $multiple;
        private  $upload_target;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();
                     require_once 'src/controller/tools/functions.php';

                     $this->upload_target = 'public/assets/images/gallery/'; // upload directory
         $this->tablename="photo_article";
                 $this->id = 'null' ;
                 $this->id_service = 0 ;
                 $this->multiple = 0 ;
                 $this->id_article = 0 ;
                 $this->path_photo = "" ;
                 $this->master = 0 ;
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

             public function getId_article()
                 {
                     return $this->id_article;
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

             public function setId_service($id_service)
                 {
                      $this->id_service = $id_service;
                 }

             public function setId_article($id_article)
                 {
                      $this->id_article = $id_article;
                 }

             public function setPath_photo($path_photo)
                 {
                      $this->path_photo = $path_photo;
                 }

             public function setMaster($master)
                 {
                      $this->master = $master;
                 }

            /**
             * @return int
             */
            public function getMultiple()
            {
                return $this->multiple;
            }

            /**
             * @param int $multiple
             */
            public function setMultiple($multiple)
            {
                $this->multiple = $multiple;
            }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count photo_article =====================*/
					public function countPhoto_article(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get photo_article =====================*/
					public function get($id=''){
					    $this->db->setTablename($this->tablename);


                        $condition = ($id=='')?array( 'id'=>$this->id ):array( 'id'=>$id );
                       // $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }
					public function listeArticleByPhoto_articleId($id_Article){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id_article" =>$id_Article);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"many"));
					                }

				/*================== Liste photo_article =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("photo_article");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("photo_article");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("photo_article");
					    $condition = array( 'id'=>$this->id );
                          removefile($this->upload_target.$this->path_photo);
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_photo_article = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If photo_article existe =====================*/
					public function ifPhoto_articleexiste($condition){
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
                       $this->id_article = (!isset($id_article) || empty($id_article) )  ? 0: $id_article;
                       $this->path_photo = (!isset($path_photo) || empty($path_photo) )  ? '': $path_photo;
                       $this->master = (!isset($master) || empty($master) )  ? 0: $master;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'id_service'=>($this->id_service == 0 )  ? $OldTable['id_service']:$this->id_service,
                                  'id_article'=>($this->id_article == 0 )  ? $OldTable['id_article']:$this->id_article,
                                  'path_photo'=>(!isset($this->path_photo) || empty($this->path_photo) )  ? $OldTable['path_photo']:$this->path_photo,
                                  'master'=>($this->master == 0 )  ? $OldTable['master']:$this->master					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'id_service'=>0,
                                  'id_article'=>0,
                                  'path_photo'=>"",
                                  'master'=>0					     );
                                  return $Table;
                  }

            public function resetmaster($id_article=''){
                $id_article_photo_article=($id_article=='')?$this->id_article:$id_article ;
                $this->db->setTablename("photo_article");
                $condition = array('id_article' =>$id_article_photo_article);
                $Table = array('master' =>0);
                $this->setTablearray($Table);
                return  $this->put($condition);
            }

            public function updatemaster($id=''){
                $id_photo_article=($id=='')?$this->id:$id ;

                $dPhoto_article = array(
                    'master' => 1
                );
                $this->setTablename("photo_article");
                $condition = array( 'id'=>$id_photo_article );
                $this->setTablearray($dPhoto_article);
                return  $this->put($condition);
            }


            public function addmaster($id=''){
                $id_photo_article=($id=='')?$this->id:$id ;
                $photo_article=$this->get($id_photo_article);
                $this->resetmaster($photo_article['id_article']);
                $this->setTablename("photo_article");
                $condition = array( 'id'=>$id_photo_article );
                $this->master=1;
                $this->setTablearray($this->ObjecToarrayMaker());
                return   $this->put($condition);
            }

            public function addPhoto_article($id_service,$id_article,$path_photo,$Master){
                $ok=0;
                if(!empty($id_service)) {
                    $dPhoto_article = array(
                        'id' => "null",
                        'id_service' => $id_service,
                        'id_article' => $id_article,
                        'path_photo' => $path_photo,
                        'master' => $Master
                    );

                    $this->setTablearray($dPhoto_article);

                    $this->db->setTablename("photo_article");
                    $condition = array('path_photo' => $path_photo,'id_service' => $id_service);
                    $test_ifPhoto_articleexiste = $this->db->getRows(array('where' => $condition, 'return_type' => 'count'));



                    if ($test_ifPhoto_articleexiste==0){
                        $ok=$this->db->insertTable($dPhoto_article);
                        // echo json_encode(intval($ok));

                        //  echo json_encode(1);
                    }



                }
                return $ok;
            }
    /*==================End Persistence Methode list=====================*/

            public function ArrayPhoto_article($id_service,$id_article,$path_photo,$Master){
                $dPhoto_article = array(
                    'id' => "null",
                    'id_service' => $id_service,
                    'id_article' => $id_article,
                    'path_photo' => $path_photo,
                    'master' => $Master
                );
                $this->setPost($dPhoto_article,'');
                return $dPhoto_article;
            }



            public function savefiles($files,$article,$master=0) {
                $upload=0;


                if ($this->multiple==0){
                    $fileNames    = $files['photos']['name'];
                    $fileSizes    = $files['photos']['size'];
                    $fileTmp_dirs  = $files['photos']['tmp_name'];
                    $this->resetmaster($article['id']);
                    if(is_array($fileNames)){


                        for ($i=0;$i<count($fileNames);$i++){
                            $fname    = $fileNames[$i];
                            $ftmp_dir       = $fileTmp_dirs[$i];
                            $fsize     = $fileSizes[$i];
                            $upload=  $this->uploadfiles($fname,$ftmp_dir,$fsize,$article,(($i==0)?1:0));

                            // echo  (($i==0)?1:0).' '.$ftmp_dir.'<br>';
                        }
                    }else{

                        $upload= $this->uploadfiles($fileNames,$fileTmp_dirs,$fileSizes,$article,(($master==0)?0:1) );
                    }
                }

                if ($this->multiple==1){
                    $fileNames    = $files['name'];
                    $fileSizes    = $files['size'];
                    $fileTmp_dirs  = $files['tmp_name'];
                    $upload= $this->uploadfiles($fileNames,$fileTmp_dirs,$fileSizes,$article,$master );



                }

                return $upload;



            }

                private function uploadfiles($fname,$ftmp_dir,$fsize,$article,$master){
                    //$upload_target = 'public/assets/images/gallery/'; // upload directory
                  $path = filename($fname,$fsize,str_replace(' ','-',trim($article['nom_article'])));

                    $this->ArrayPhoto_article($article['id_service'],$article['id'],$path,$master);
                   $ok=$this->insert();
                    $upload= 0;
                 //   echo '<hr><hr>'.$path.'<hr><hr>';
                    if ($ok>0){
                      $upload= fichier($fname,$ftmp_dir,$fsize, $this->upload_target,str_replace(' ','-',trim($article['nom_article'])),$path);
                    }
                    return $upload;
                }
           }
  
   



   ?>



