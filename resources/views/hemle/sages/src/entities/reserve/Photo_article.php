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
use src\model\DB;
    /*==================Classe creer par Samane samane_ui_admin le 18-09-2019 17:57:09=====================*/
        class Photo_article
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $id_service;
             private  $id_article;
             private  $path_photo;
             private  $master;
             private  $files;


            private  $db;


    /*================== Constructor =====================*/



    /*==================Getter list=====================*/
            /**
             * Photo_article constructor.
             * @param $id
             * @param $id_service
             * @param $id_article
             * @param $path_photo
             * @param $master
             */
            public function __construct()
            {
                $this->id = "null";
                $this->id_service = 0;
                $this->id_article = 0;
                $this->path_photo = "";
                $this->master = 0;
                $this->files = null;
                require_once 'src/controller/tools/functions.php';
                $this->db = new DB();
            }

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




    /*==================Setter list=====================*/
                
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
             * @return null
             */
            public function getFiles()
            {
                return $this->files;
            }

            /**
             * @param null $files
             */
            public function setFiles($files)
            {
                $this->files = $files;
            }












            public function get(){

                $condition = array('id' => ($this->id!=0)?$this->id:0);
                $this->db->setTablename("photo_article");
                return $this->db->getRows(array('where'=>$condition,'return_type'=>'single'));
            }


            public function get_byid_article($id_article)
            {

                $condition = array('id_article' => ($id_article!=0)?$id_article:0);
                $this->db->setTablename("photo_article");
                return $this->db->getRows(array('where'=>$condition ,'return_type'=>'single'));

            }
            public function liste_byid_article($id_article)
            {

                $condition = array('id_article' => ($id_article!=0)?$id_article:0);
                $this->db->setTablename("photo_article");
                return $this->db->getRows(array('where'=>$condition,'order_by'=>'id_article ','return_type'=>'many'));

            }
            public function liste($id_article)
            {

                $condition = array('id_article' => ($id_article!=0)?$id_article:0);
                $this->db->setTablename("photo_article");
                return $this->db->getRows(array('where'=>$condition,'order_by'=>'id_article ','return_type'=>'many'));

            }


            public function addPhoto_article(){
                $ok=0;
                if($this->id_service != 0) {
                    $this->db->setTablename("photo_article");
                    $condition = array('path_photo' => $this->path_photo ,'id_service' => $this->id_service);
                    $test_ifPhoto_articleexiste = $this->db->getRows(array('where' => $condition, 'return_type' => 'count'));

                    if ($test_ifPhoto_articleexiste==0){
                        $ok=$this->db->insertTable($this->ObjecToarrayMaker());
                    }
                }
                return $ok;
            }

            private function resetmaster(){
                $this->db->setTablename("photo_article");
                $condition = array('id_article' =>$this->id_article);
                $rows = array('master' => 0);

                return $this->db->updateTable($rows,array('where'=>$condition));
            }

            private function ObjecToarrayMaker(){
                $OldTable=$this->emptyarrayMaker();
                if ($this->id>0){
                    $OldTable=$this->get();
                }

                $Table= array(
                    'id' =>($this->id == 0 || $this->id == "null")?$OldTable['id']: $this->id ,
                    'id_service' => ($this->id_service == 0)?$OldTable['id_service']:$this->id_service,
                    'id_article' => ($this->id_article == 0)?$OldTable['id_article']:$this->id_article,
                    'path_photo' => (!isset($this->path_photo) || empty($this->path_photo) )?$OldTable['path_photo']:$this->path_photo,
                    'master' => ($this->master == 0)?$OldTable['master']:$this->master
                );
                return $Table;
            }
            private function emptyarrayMaker(){
                $Table= array(
                    'id' =>  "null" ,
                    'type_article' => "simple",
                    'id_service' => 0,
                    'id_article' => 0,
                    'path_photo' =>'',
                    'master' =>0
                );
                return $Table;
            }

            private function savefiles($nom_article,$param) {
                $fileNames    = '';
                $fileSizes    ='';
                $fileTmp_dirs  ='';

                $upload  ='';
                $upload_target = 'public/assets/images/gallery/'; // upload directory
                if ($param=='single'){
                    $fileNames    = $this->files['photos']['name'];
                    $fileSizes    = $this->files['photos']['size'];
                    $fileTmp_dirs  = $this->files['photos']['tmp_name'];

                    for ($i=0;$i<count($fileNames);$i++){
                        $name = $fileNames[$i];
                        $tmp = $fileTmp_dirs[$i];
                        $size = $fileSizes[$i];
                        $path = filename($name,$size,str_replace(' ','-',trim($nom_article)));
                        $this->path_photo = $path;
                        $ok=$this-> addPhoto_article();
                        if ($ok>0){

                            $upload= fichier($name,$tmp,$size,$upload_target,str_replace(' ','-',trim($nom_article)),$path);
                            // $this->filemngr->uploadfile();
                            //   print_r($this->photo);
                        }
                    }

                }
                if ($param=='multiple'){
                    $fileNames    = $this->files['name'];
                    $fileSizes    = $this->files['size'];
                    $fileTmp_dirs  = $this->files['tmp_name'];
                    $path = filename($fileNames,$fileSizes,str_replace(' ','',trim($nom_article)));
                    $this->path_photo = $path;
                    //$this->filemngr->setFile($fileNames, $fileTmp_dirs, $fileSizes, $upload_target, str_replace(' ','-',trim($nom_article)),$path);
                    //print_r($fileNames);

                    $ok=$this-> addPhoto_article();
                    if ($ok>0){

                        $upload= fichier($fileNames,$fileTmp_dirs,$fileSizes,$upload_target,str_replace(' ','-',trim($nom_article)),$path);
                        //  $this->filemngr->uploadfile();
                        //   print_r($this->photo);
                    }


                }


                return $upload;



            }
    /*==================Methode list=====================*/
           }
  
   



   ?>



