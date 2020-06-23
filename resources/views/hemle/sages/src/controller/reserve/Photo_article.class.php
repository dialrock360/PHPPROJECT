<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 18-09-2019 17:59:12=====================*/
 use libs\system\Controller;
  use src\entities\Photo_article as Photo_articleEntity;
  use src\model\Photo_articleDB;

  use src\entities\Article2 as ArticleEntity;
  use src\model\ArticleDB2;


  use src\entities\Service as ServiceEntity;
  use src\model\ServiceDB;


  class Photo_article extends Controller{

    /*==================Attribut list=====================*/
             private  $article;
             private  $articledb;
             private  $service;
             private  $servicedb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->article = new ArticleEntity();
                 $this->articledb = new ArticleDB2();
                 $this->service = new ServiceEntity();
                 $this->servicedb = new ServiceDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("photo_article/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("photo_article/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new Photo_articleDB();
                    $data["photo_article"] = $tdb->getPhoto_article($id);
                    return $this->view->load("photo_article/get", $data);
                }

                public function setmaster($id){
                    //Instanciation du model
                    $tdb = new Photo_articleDB();
                    $newmaster= $tdb->getPhoto_article($id);
                    $oldmaster= $tdb->getPhoto_articlemaster($newmaster['id_article']);
                    //$tdb->updatemaster($newmaster['id'],1);

                    //$tdb->updatemaster($oldmaster['id'],0);

                    $returnData = array(
                        'id_newmaster' =>$newmaster['id'],
                        'path_photo_newmaster' =>$newmaster['path_photo'],
                        'id_oldmaster' =>$oldmaster['id'],
                        'path_photo_oldmaster' =>$oldmaster['path_photo']
                    );
                     echo json_encode($returnData);
                    /* print_r($newmaster);
                     echo  '<hr>';
                     print_r($oldmaster);*/
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new Photo_articleDB();
                    $data["photo_articles"] = $tdb->listePhoto_article();
                    return $this->view->load("photo_article/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new Photo_articleDB();
    /*==================Foreign list=====================*/
                    $data["articles"] = $this->articledb->listeArticle();
                    $data["services"] = $this->servicedb->listeService();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_service)) {
                    $photo_articleObject  = new Photo_articleEntity();
                    $photo_articleObject ->setId_service($id_service);
                    $photo_articleObject ->setId_article($id_article);
                    $photo_articleObject ->setPath_photo($path_photo);
                    $photo_articleObject ->setMaster($master);
                    $ok = $tdb->addPhoto_article($photo_articleObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("photo_article/add", $data);
            }else{
                return $this->view->load("photo_article/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new Photo_articleDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_service)) {
                    $photo_articleObject  = new Photo_articleEntity();
                    $photo_articleObject ->setId($id);
                    $photo_articleObject ->setId_service($id_service);
                    $photo_articleObject ->setId_article($id_article);
                    $photo_articleObject ->setPath_photo($path_photo);
                    $photo_articleObject ->setMaster($master);
                    $ok = $tdb->updatePhoto_article($photo_articleObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($uid){

                 $id = intval($uid);
                 $tdb = new Photo_articleDB();
                 $photo_article=$tdb->getPhoto_article($id);
                  $path='public/assets/images/gallery/'.$photo_article['path_photo'];

                 $ok = $tdb->deletePhoto_article($id);
                 if($ok>0){
                     unlink($path);
                 }


                  json_encode(($ok>0)?1:0);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new Photo_articleDB();
    /*==================Foreign list=====================*/
                    $data["articles"] = $this->articledb->listeArticle();
                    $data["services"] = $this->servicedb->listeService();
            			//Supression
            			$data["photo_article"] = $tdb->getPhoto_article($id);
            			//chargement de la vue edit.html
                    return $this->view->load("photo_article/edit", $data);
                   }




                   



               }


            ?>

