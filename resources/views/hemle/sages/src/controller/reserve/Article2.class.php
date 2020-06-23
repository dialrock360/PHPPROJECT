<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 13-09-2019 23:41:39=====================*/
 use libs\system\Controller;
  use src\entities\Article as ArticleEntity;
  use src\model\ArticleDB;

  use src\entities\Categorie as CategorieEntity;
  use src\model\CategorieDB;


  use src\entities\Service as ServiceEntity;
  use src\model\ServiceDB;

use src\entities\Photo_article as PhotoEntity;
use src\model\Photo_articleDB;


use src\entities\Catalogue as CatalogueEntity;
use src\model\CatalogueDB;


  class Article2 extends Controller{

    /*==================Attribut list=====================*/
             private  $categorie;
             private  $categoriedb;
             private  $service;
             private  $servicedb;
             private  $photo_article;
             private  $photo_articledb;
             private  $catalogue;
             private  $cataloguedb;
             private  $article;
             private  $articledb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();

                 require_once 'src/controller/tools/functions.php';
                 $this->categorie = new CategorieEntity();
                 $this->categoriedb = new CategorieDB();
                 $this->service = new ServiceEntity();
                 $this->servicedb = new ServiceDB();
                 $this->photo_article = new PhotoEntity();
                 $this->photo_articledb = new Photo_articleDB();
                 $this->catalogue = new CatalogueEntity();
                 $this->cataloguedb = new CatalogueDB();
                 $this->article = new ArticleEntity();
                 $this->articledb = new ArticleDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index($idservice){

                    $data["view"] = 'Article';
                    $data["curenview"] = 'Insertion D\'Article';
                    $data["vewContent"] = 'formarticle';
                    $data["vewContenttype"] = 'form';
                    $data["pageheader"] = 'Novel Article';
                    $data["pageoverview"] = 'Ajouter des Articles';
                    $data["active"] = 9;
                    $data["articles"] =  $this->articledb->listeArticleByServiceId($idservice);
                    $lscategories =  $this->categoriedb->listeCategorieByServiceId($idservice);
                    $data["categories"]  = $lscategories;
                    $opticategories  ='';
                    foreach ($lscategories as $categories){
                        $opticategories.=' <option value="'.$categories['id'].'">'.$categories['nom_categorie'].'</option>';
                    }
                  //  print_r($data["articles"]);

                    $data["opticategories"] =  $opticategories;
                    return $this->view->load("index/index", $data);
                   
                }
    /*------------------Methode index--------------------=*/

                public function addcharge($idservice){

                    $data["view"] = 'Charge';
                    $data["curenview"] = 'Insertion D\'Charge';
                    $data["vewContent"] = 'formcharge';
                    $data["vewContenttype"] = 'form';
                    $data["pageheader"] = 'Novel Charge';
                    $data["pageoverview"] = 'Ajouter des Charges';
                    $data["active"] = 9;

                    $data["articles"] = $this->articledb->listeChargeByServiceId($idservice);

                    $lscategories =  $this->categoriedb->listeCategorieByServiceId($idservice);
                    $data["categories"]  = $lscategories;
                    $opticategories  ='';
                    foreach ($lscategories as $categories){
                        $opticategories.=' <option value="'.$categories['id'].'">'.$categories['nom_categorie'].'</option>';
                    }
                  //  print_r($data["articles"]);

                    $data["opticategories"] =  $opticategories;
                    return $this->view->load("index/index", $data);

                }




    /*------------------Methode get--------------------=*/
                
                public function get($id,$id_service){
                    //Instanciation du model
                    $tdb = new ArticleDB();
                    $data["article"] = $this->articledb->getArticle($id,$id_service);
                    return $this->view->load("article/get", $data);
                }

                  public function get2($id){
                      //Instanciation du model
                      $article=$this->articledb->getArticle($id);
                      $article["photo_article"] = $this->photo_articledb->listeArticleByPhoto_articleId($id);
                      //print_r($article["photo_article"] );
                      echo json_encode($article);
                  }

    /*------------------Methode list--------------------=*/
                
            public function liste2(){
                $articles = $this->articledb->listeArticleByServiceId(1);
                // {id,path_photo,nom_article,id_categorie,pxa_article,pxv_article,pxvbar_article, id_stock}


                $lsarticle=array();
                foreach ($articles as $article){
                    $objarticle=array();
                    $objarticle["id"] =  $article["id"] ;
                    $objarticle["path_photo"] =  (empty($article["path_photo"])) ? 'iconimg.png': $article["path_photo"] ;
                    $objarticle["ref_article"] =  $article["ref_article"] ;
                    $objarticle["nom_article"] =  $article["nom_article"] ;
                    $objarticle["nom_categorie"] =  $article["nom_categorie"] ;
                    $objarticle["valeur_article"] =  $article["valeur_article"] ;
                    $objarticle["nbrstockage"] =  $article["nbrstockage"] ;
                    $objarticle["tabidstock"] =  $article["tabidstock"] ;
                    $objarticle["in_stock"] =  (empty($article["id_stock"])) ? 0:1;
                    $objarticle["id_stock"] =  (empty($article["id_stock"])) ? 'No':'Yes';
                   /* print_r($objarticle);
                    echo '<hr>'*/

                    $lsarticle[] =  $objarticle ;

                }
//print_r($lsarticle);
               // $lsarticle["id"] =  $articles["id"] ;


              echo    json_encode($lsarticle);
            }
            public function liste($idservice){
                    //Instanciation du model
                    $data["articles"] = $this->articledb->listeArticleByServiceId($idservice);

                    $data["view"] = 'Article';
                    $data["curenview"] = 'Manage des Articles';
                    $data["vewContent"] = 'formarticle';
                    $data["vewContenttype"] = 'table';
                    $data["pageheader"] = 'Liste d\'Articles  ';
                    $data["pageoverview"] = 'Ajouter une Article';
                    $data["active"] = 9;

               // print_r($data["articles"]);
                $lscategories =  $this->categoriedb->listeCategorieByServiceId($idservice);
                $data["categories"]  = $lscategories;
                $opticategories  ='';
                foreach ($lscategories as $categories){
                    $opticategories.=' <option value="'.$categories['id'].'">'.$categories['nom_categorie'].'</option>';
                }
                //  print_r($data["articles"]);

                $data["opticategories"] =  $opticategories;
                return $this->view->load("index/index", $data);


            }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function articleObjectmaker($post,$param='single'){
    extract($post);
    $this->article  = new ArticleEntity();
// print_r($post);echo '<hr>';
      $id_catalogue =  $this->addcatalogue(0,$nom_article,$id_categorie,$id_service,0);
                         if ($id_catalogue > 0) {
                                if(!empty($id_service) && !empty($id_categorie) && !empty($nom_article)) {
                                    $this->article  ->setId($id);
                                    $this->article  ->setId_categorie($id_categorie);
                                    $this->article  ->setId_catalogue($id_catalogue);
                                    $this->article  ->setNbrstockage((!isset($nbrstockage) || empty($nbrstockage) )?0:$nbrstockage);
                                    $this->article  ->setValeur_article((!isset($valeur_article) || empty($valeur_article) )?0:$valeur_article);
                                    $this->article  ->setType_article((!isset($type_article) || empty($type_article) )?0:$type_article);
                                    $this->article  ->setTabidstock((!isset($tabidstock) || empty($tabidstock) )?'':$tabidstock);
                                    $this->article  ->setFlag_article(0);
                                    // print_r($_POST);
                                }
                         }
    return $this->article;
}
public function addcatalogue($id,$nom_article,$id_categorie,$id_service,$type_article){
    $id_catalogue=0;
    $this->catalogue = new CatalogueEntity();
    $categorie= $this->categoriedb->getCategorie($id_categorie);
// print_r($post);echo '<hr>';
    if(!empty($id_service) && !empty($id_categorie) && !empty($nom_article)) {
    if($this->cataloguedb->ifCatalogueexiste($nom_article)==true) {

        $catalogue= $this->cataloguedb->getCataloguebyNameArticle($nom_article);

        $id_catalogue = $catalogue['id'];

        // print_r($_POST);
    }else{

        $this->catalogue  ->setId($id);
        $this->catalogue ->setRef_article($this->refmaker('ART',$id_categorie,$id_service,$nom_article));
        $this->catalogue ->setType_article((($type_article==0)?"simple":"composer"));
        $this->catalogue ->setNom_article($nom_article);
        $this->catalogue ->setNom_service($categorie['nom_service']);
        $this->catalogue ->setNom_famille($categorie['nom_famille']);
        $this->catalogue ->setNom_categorie($categorie['nom_categorie']);
        $this->catalogue ->setNomenclature_article($categorie['nom_nomenclature_article']);
        $id_catalogue = $this->cataloguedb->addCatalogue($this->catalogue) ;
    }
    }
    return $id_catalogue ;
}
public function add(){
	//Instanciation du model
            $tdb = new ArticleDB();
    /*==================Foreign list=====================*/
                    $data["categories"] = $this->categoriedb->listeCategorie();
                    $data["services"] = $this->servicedb->listeService();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;

                if(!empty($id_service) && !empty($id_categorie) && !empty($nom_article)) {
                    $this->article  = new ArticleEntity();

                    $this->article ->setId($id);
                    $this->article ->setId_categorie($id_categorie);
                    $this->article ->setId_catalogue($id_catalogue);
                    $this->article ->setFiche_technique($fiche_technique);
                    $this->article ->setNbrstockage(0);
                    $this->article ->setTabidstock('');
                    $this->article ->setFlag_article(0);
                    $ok =  $this->articledb->addArticle( $this->article );
                    $data["ok"] = $ok;
                }
                return $this->view->load("article/add", $data);
            }else{
                return $this->view->load("article/add", $data);
            }
        }

public function add_article($param){
    $tdb = new ArticleDB();
    extract($_POST);


    if ($param=='nulle'){
    if (isset($_POST['addmethode'])){
         if($_POST['addmethode']==1){
             if (!empty($id_service)) {


                 $articleObject = $this->articleObjectmaker($_POST);

                 //echo $tdb->ifArticleexiste($articleObject);
                 if ($tdb->ifArticleexiste($nom_article,$id_service) == 0) {

                     //print_r($articleObject);
                     $ok = $tdb->addArticle($articleObject);
                     if ($ok > 0) {

                         $ok = $this->updatearticle_categorie($_POST['id_categorie'],1);
                         if ($ok > 0) {
                             $data["ok"] = $this->savefiles($_FILES, $id_service, $ok, $_POST['nom_article'], 'single', 0);


                         }
                     }
                 }



             }
         }
        if($_POST['addmethode']==0){
             if (!empty($id_service)) {

                /* $id_catalogue =  $this->addcatalogue(0,$nom_article,$id_categorie,$id_service,0);
                         if ($id_catalogue > 0) {*/
                 $this->article  = new ArticleEntity();
                 if(!empty($id_service) && !empty($old_id_categorie) && !empty($nom_article)) {


                     $this->article ->setId($id);
                     $this->article ->setId_categorie($id_categorie);
                     $this->article ->setId_catalogue($this->addcatalogue(0,$nom_article,$id_categorie,$id_service,0));
                     $articleObject ->setFiche_technique((!isset($fiche_technique))?'':$fiche_technique);
                     $this->article ->setNbrstockage(0);
                     $articleObject ->setTabidstock((!isset($tabidstock))?'':$tabidstock);
                     $this->article ->setFlag_article(0);

                 }
                  $article=$tdb->getArticle($id);

                 if ($article['id_categorie']!=$old_id_categorie){
                     $this->updatearticle_categorie($article['id_categorie'],-1);
                     $this->updatearticle_categorie($old_id_categorie,1);
                 }
                 //print_r($articleObject);
                //  $tdb->updatearticle($articleObject);
                 // $ok = 1;
                 if (isset($_FILES['photos']) && !empty($_FILES['photos']['name'][0])) {
                     $this->photo_articledb->resetmaster($id);
                  //  print_r($_FILES['photos']['name'][0]);
                    $data["ok"] = $this->savefiles($_FILES, $id_service, $id, $nom_article, 'single', 0);


                 }

             }
         }

    }
    }
    if ($param=='multiple'){
        if(isset($_POST['addmethode']) && $_POST['addmethode']==2){



            $array=array();
            $array['nom_article']=$_POST['nom_article'];
            $array['id_categorie']=$_POST['id_categorie'];
            $array['fiche_technique']=$_POST['fiche_technique'];
            $articleTab=$this->flip_row_col_array($array);

            for ($i=1;$i<=count($articleTab);$i++){
                $array=array();
                $array['name']    = $_FILES['photos_'.$i]['name'];
                $array['size']    = $_FILES['photos_'.$i]['size'];
                $array['tmp_name']  = $_FILES['photos_'.$i]['tmp_name'];
                $photosTab=$this->flip_row_col_array($array);
                $articleTab[$i-1]['id']=0;
                $articleTab[$i-1]['id_service']=$id_service;
                $articleTab[$i-1]['photos']=$photosTab;
                $articleObject  =$this->articleObjectmaker($articleTab[$i-1],'multiple');
               if ($tdb->ifArticleexiste($articleTab[$i-1]['nom_article'],$id_service)==0){

                    //print_r($articleObject);
                $idarticle = $tdb->addArticle($articleObject );

                //echo  '<hr>';
                //$ok = 1;

                    if($idarticle>0){
                        $ok = $this->updatearticle_categorie($articleObject->getId_categorie(),1);
                        $x=0;
                        foreach($articleTab[$i-1]['photos'] as $photos){
                            if ($x==0){

                               // print_r($photos);
                              $this->savefiles($photos,$id_service,$idarticle,$articleTab[$i-1]['nom_article'],'multiple',1 );
                                //echo  '<br>';
                               // echo  $idarticle.'<br>'; echo  '<br>';
                            }
                            if ($x>0){
                               // print_r($photos);
                              //  echo  $idarticle.'<br>';
                            $this->savefiles($photos,$id_service,$idarticle,$articleTab[$i-1]['nom_article'],'multiple',0 );
                            }
                            $x++;
                        }

                       // print_r($articleTab[$i-1]['photos']);
                      // echo  '<hr>';

                    }
                }


            }


        }

    }

      return $this->liste($id_service);


        }

      public function updatearticle_categorie($id_categorie,$add){
          $categoriedb = new CategorieDB();
          $ascategorie=$categoriedb->getCategorie($id_categorie);
        //  $asnbr=($add==0)?$ascategorie['nbr_produit_categorie']-1:$ascategorie['nbr_produit_categorie']+1;
          $nbrart=$ascategorie['nbr_produit_categorie']+$add;
          $ascategorieObject  = new CategorieEntity();
          $ascategorieObject ->setId($id_categorie);
          $ascategorieObject ->setNbr_produit_categorie($nbrart);

          return $categoriedb->nbrarticleupdate($ascategorieObject);
      }


      private function savefiles($files,$id_service,$id_article,$nom_article,$param,$master) {
    $fileNames    = '';
    $fileSizes    ='';
    $fileTmp_dirs  ='';

          $upload  ='';
    $upload_target = 'public/assets/images/gallery/'; // upload directory
    if ($param=='single'){
        $fileNames    = $files['photos']['name'];
        $fileSizes    = $files['photos']['size'];
        $fileTmp_dirs  = $files['photos']['tmp_name'];

        for ($i=0;$i<count($fileNames);$i++){
            $name = $fileNames[$i];
            $tmp = $fileTmp_dirs[$i];
            $size = $fileSizes[$i];
            $path = filename($name,$size,str_replace(' ','-',trim($nom_article)));
            $this->photo_article->setId_service($id_service);
            $this->photo_article ->setId_article($id_article);
            $this->photo_article ->setPath_photo($path);
            $this->photo_article ->setMaster(($i==0)?1:0);
                 if ($this->photo_articledb->ifPhoto_articleexiste($this->photo_article) == 0) {
                        //echo $name.' => '.$tmp.' => '.$size.'<hr>';
                        // echo $upload['filename'].' => '.$upload['sms'].'<hr>';
                        $ok=$this->photo_articledb->addPhoto_article( $this->photo_article );
                        if ($ok>0){

                            $upload= fichier($name,$tmp,$size,$upload_target,str_replace(' ','-',trim($nom_article)),$path);
                            //   print_r($this->photo);
                        }
            }
        }

    }
    if ($param=='multiple'){
        $fileNames    = $files['name'];
        $fileSizes    = $files['size'];
        $fileTmp_dirs  = $files['tmp_name'];
     // echo $fileNames.' => '.$fileTmp_dirs.' => '.$fileSizes.'<hr>';
        $path = filename($name,$size,str_replace(' ','',trim($nom_article)));
         $this->photo_article ->setId_service($id_service);
        $this->photo_article ->setId_article($id_article);
        $this->photo_article ->setPath_photo($path);
        $this->photo_article ->setMaster($master);
        // echo $upload['filename'].' => '.$upload['sms'].'<hr>';
           if ($this->photo_articledb->ifPhoto_articleexiste($this->photo) == 0) {
            //   print_r($this->photo);
            $ok=$this->photo_articledb->addPhoto_article( $this->photo );
            if ($ok>0){
                $upload= fichier($fileNames,$fileTmp_dirs,$fileSizes,$upload_target,str_replace(' ','-',trim($nom_article)),$path);
            }
        }
    }


return $upload;



}


    /*------------------Methode update--------------------=*/
                

      public function update(){
          //Instanciation du model
          $tdb = new ArticleDB();
         // {"modifier":"modifier","id":"35","nom_article":"Malboro ligth2ss","pxa_article":"0","pxv_article":"0","pxvbar_article":"0"}

          if(isset($_POST["modifier"])){
              extract($_POST);

              // echo json_encode($valeur_categorie);
              if(!empty($id)) {




                      $Aarticle=$tdb->getArticle($id);
                  $articleObject  = new ArticleEntity();
                  $articleObject ->setId($_POST["id"]);
                  $articleObject ->setId_service($_POST["modifier"]);
                  $id_categorie=(!isset($_POST["id_categorie"])) ? $Aarticle["id_categorie"]: $_POST["id_categorie"];
                  $articleObject ->setId_categorie($id_categorie);
                  $articleObject ->setNom_article($_POST["nom_article"]);
                  $articleObject ->setPxa_article($_POST["pxa_article"]);
                  $articleObject ->setPxa_article($_POST["pxv_article"]);
                  $articleObject ->setPxvbar_article($_POST["pxvbar_article"]);



                  if ($Aarticle['id_categorie']!=$id_categorie){

                       $this->updatearticle_categorie($Aarticle['id_categorie'],-1);
                       $this->updatearticle_categorie($id_categorie,1);
                  }
                   $ok=$tdb->updatearticle3($articleObject);

                   $returnData = array(
                      'status' =>$ok,
                      'data' => $tdb->getArticle($id)
                  );
                  echo json_encode($returnData);
              }

          }
      }
    /*------------------Methode list--------------------=*/
                


      public function delete(){
          //Instanciation du model
          //Retour vers la liste
          if (isset($_POST['id']) && !empty($_POST['id'])) {

              $id = intval($_POST['id']);
              $tdb = new ArticleDB();
              $Categorie=$tdb->getArticle($id);
              $ok=$tdb->fldeleteArticle($id);

              if ( $ok>0){

                  $ok=$this->updatearticle_categorie($Categorie['id_categorie'],-1);
                  echo json_encode($ok);
              }

          }
      }
    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id,$id_service){
                        //Instanciation du model
                       $tdb = new ArticleDB();
    /*==================Foreign list=====================*/
                    $data["categories"] = $this->categoriedb->listeCategorie();
                    $data["services"] = $this->servicedb->listeService();
            			//Supression
            			$data["article"] = $tdb->getArticle($id,$id_service);
            			//chargement de la vue edit.html
                    return $this->view->load("article/edit", $data);
                   }



      public function setmaster($id){
          //Instanciation du model
          $tdb = new Photo_articleDB();
          $newmaster= $tdb->getPhoto_article($id);
          $id_article= $newmaster['id_article'];
          $oldmaster= $tdb->getPhoto_articlemaster($newmaster['id_article']);
          $tdb->resetmaster($id_article);
          $tdb->setmaster($id);


          $returnData = array(
              'id_newmaster' =>$newmaster['id'],
              'path_photo_newmaster' =>$newmaster['path_photo'],
              'id_oldmaster' =>$oldmaster['id'],
              'path_photo_oldmaster' =>$oldmaster['path_photo']
          );
          //print_r($returnData);
         echo json_encode($returnData);
          /* print_r($newmaster);
           echo  '<hr>';
           print_r($oldmaster);*/
      }

      public function setmaster0($id){
          //Instanciation du model
          $tdb = new Photo_articleDB();
          $newmaster= $tdb->getPhoto_article($id);
          $oldmaster= $tdb->getPhoto_articlemaster($newmaster['id_article']);
          $tdb->updatemaster($newmaster['id'],1);

          $tdb->updatemaster($oldmaster['id'],0);

          $returnData = array(
              'id_newmaster' =>$newmaster['id'],
              'path_photo_newmaster' =>$newmaster['path_photo'],
              'id_oldmaster' =>$oldmaster['id'],
              'path_photo_oldmaster' =>$oldmaster['path_photo']
          );
          //print_r($returnData);
         echo json_encode($returnData);
          /* print_r($newmaster);
           echo  '<hr>';
           print_r($oldmaster);*/
      }
      //Instanciation de la referance
      private function refmaker($pre,$idcat,$id_service,$nomart){
          //Instanciation du model
          $tdb = new CategorieDB();
          $Categorie=$tdb->getCategorie($idcat);
          return 'ART'.$id_service.$Categorie['id_famille'].$idcat.$this->explodestrtoupper($nomart).date('dmyHis');;

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
      private function flip_row_col_array($array) {
          $out = array();
          foreach ($array as  $rowkey => $row) {
              foreach($row as $colkey => $col){
                  $out[$colkey][$rowkey]=$col;
              }
          }
          return $out;
      }



               }


            ?>

