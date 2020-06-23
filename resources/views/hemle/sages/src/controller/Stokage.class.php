<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:24=====================*/
 use libs\system\Controller;
use src\model\DB;
use src\entities\Famille as FamilleEntity;
use src\entities\Categorie as CategorieEntity;
use src\entities\Article as ArticleEntity;
use src\entities\Photo_article as Photo_articleEntity;
use src\entities\Conditionement as ConditionementEntity;
use src\entities\Conditionement_article as Conditionement_articleEntity;
use src\entities\Article_en_stock as Article_en_stockEntity;
use src\entities\Stock as StockEntity;



  class Stokage extends Controller{

    /*==================Attribut list=====================*/
          
             private  $db;
             private  $famille;
             private  $categorie;
             private  $conditionement;
             private  $article;
             private  $conditionement_article;
             private  $stock;
             private  $article_en_stock;
             private  $photo_article;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                     require_once 'src/controller/tools/functions.php';
                        parent::__construct();
                        $this->db = new DB();
                        $this->famille = new FamilleEntity();
                        $this->categorie = new CategorieEntity();
                        $this->conditionement = new ConditionementEntity();
                        $this->article = new ArticleEntity();
                        $this->conditionement_article = new Conditionement_articleEntity();
                        $this->article_en_stock = new Article_en_stockEntity();
                        $this->stock = new StockEntity();
                        $this->photo_article = new Photo_articleEntity();
                     $this->article_en_stock->reload_stockage_list();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("tache/index");
                }

      /*------------------Methode Famille--------------------=*/
      /*------------------Methode Famille--------------------=*/


      public function Famille($id_service){

          $data["view"] = 'Famille';
          $data["curenview"] = 'Manage Famille Article';
          $data["vewContent"] = 'formfamille';
          $data["vewContenttype"] = 'form';
          $data["pageheader"] = 'Famille D\'Article';
          $data["pageoverview"] = 'Ajouter une Famille';
          $data["active"] = 8;
          $this->db->setTablename("v_famille");
          $condition = array('id_service' => $id_service);
          $lsfamilles  =$this->db->getRows(array('where'=>$condition,'order_by'=>'nom_famille','return_type'=>'many'));
          $data["familles"]  = $lsfamilles;

          return $this->view->load("index/index", $data);
      }
      public function addFamille(){
                  $ok=0;
                  extract($_POST);

                  $Famille=$_POST;
                  $test_ifFamilleexiste = $this->famille->ifFamilleexiste(trim($nom_famille),$id_service);
                       if(isset($_POST["valider"]) && $test_ifFamilleexiste==0)//"valider" est le name du champs submit du formulaire add.html
                  {

                      $this->famille->setPost($_POST);
                      $ok=$this->famille->insert();
                      $Famille=$this->famille->getByname($nom_famille);
                  }
                   /* if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
                  {
                        if ($test_ifFamilleexiste==0){
                            $ok=$this->famille->insert();
                            $Famille=$this->famille->getByname($nom_famille);
                        }
                  }*/
                  $returnData = array(
                      'data' =>$Famille,
                      'status' =>$ok
                  );
                  echo json_encode($returnData);
                return $ok;
              }
      public function updateFamille(){
          extract($_POST) ;
          $Famille = $this->famille->get($id);

          $ok=0;
            if(isset($_POST["modifier"]))//"valider" est le name du champs submit du formulaire add.html
                  {
                      //SELECT `id`, `id_service`, ``, ``, `nbr_categorie_famille`, `valeur_famille`, `flag_famille` FROM `famille` WHERE 1
                      $this->famille->setId($id);
                      $Table= array(
                          'nom_famille'=>$nom_famille,
                          'color_famille'=>$color_famille
                      );
                      $ok=$this->famille->update($Table);

                      $Famille = $this->famille->get($id);
                  }

          $returnData = array(
              'data' =>$Famille,
              'status' =>$ok
          );
          echo json_encode($returnData);
          return $returnData;

      }
      public function manage_Famille($id_famille){

          $data["view"] = 'Famille';
          $data["curenview"] = 'Manage Famille Article';
          $data["vewContent"] = 'managefamille';
          $data["vewContenttype"] = 'form';
          $data["pageheader"] = 'Famille D\'Article';
          $data["pageoverview"] = 'Edit Famille';
          $data["active"] = 8;
          if(isset($_POST["modifier"]))//"valider" est le name du champs submit du formulaire add.html
          {
              extract($_POST);
              $Famille  =$this->famille->get($id_famille);
              $this->famille->setPost($Famille);
              $this->famille->setNom_famille($nom_famille);
              $this->famille->setId($id_famille);
              $this->famille->update();

          }

          if(isset($_POST["valider"])){
              $this->addCategorie();
          }
          $opticategories  ='';
          $lscategories =$this->categorie->VlistecategorieofFamille($id_famille);
          $data["categories"]  = $lscategories;
          $ctpart=0;
          foreach ($lscategories as $categorie){
              $opticategories.=' <option value="'.$categorie['id'].'">'.$categorie['nom_categorie'].'</option>';
              $ctpart++;
          }
          if(!isset($_POST["modifier"]))//"valider" est le name du champs submit du formulaire add.html
          {

              $Famille  =$this->famille->get($id_famille);
              $this->famille->setPost($Famille);
              $this->famille->setNbr_categorie_famille($ctpart);
              $this->famille->update();
          }
          $Famille  =$this->famille->get($id_famille);
          $data["famille"]  = $Famille;


          $lsfamilles  = $this->famille->Vliste($Famille['id_service']);
          $data["familles"]  = $lsfamilles;







          //print_r($this->famille->getNbr_produit_famille());

          $this->db->setTablename("nomenclature_article");
          $lsnomenclature_articles  =$this->db->getRows(array('order_by'=>'nom_nomenclature_article','return_type'=>'many'));
          $data["nomenclature_articles"]  = $lsnomenclature_articles;


          $optinomenclature_articles  ='';
          foreach ($lsnomenclature_articles as $champ){
              $optinomenclature_articles.=' <option value="'.$champ['id'].'">'.$champ['nom_nomenclature_article'].'</option>';



          }
          $data["optinomenclature_articles"] =  $optinomenclature_articles;


          return $this->view->load("index/index", $data);
      }
      public function updatearticle_famille($id_famille,$add){
          $this->famille->setId($id_famille);

          $condition = array('id' =>$id_famille);

          $ascategorie=$this->conditionement->ifConditionementexiste(array('where'=>$condition,'return_type'=>'single'));
          $this->famille->setNbr_categorie_famille($ascategorie['nbr_categorie_famille']+$add);
  

          return $this->famille->update();
      }




      /*------------------Methode Famille--------------------=*/
      /*------------------Methode Famille--------------------=*/

      /*------------------Methode Conditionement--------------------=*/
      /*------------------Methode Conditionement--------------------=*/
      public function Conditionement(){


          $data["view"] = 'Conditionement';
          $data["curenview"] = 'Add Conditionement';
          $data["vewContent"] = 'fomconditionement';
          $data["vewContenttype"] = 'form';
          $data["pageheader"] = 'Gestion des Conditionements';
          $data["pageoverview"] = 'Manager les Conditionements';
          $data["active"] = 8;
          $this->db->setTablename("conditionement");
          $lsconditionements  =$this->db->getRows(array('order_by'=>'nom_conditionement','return_type'=>'many'));
          $data["conditionements"]  = $lsconditionements;

          return $this->view->load("index/index", $data);
      }
      public function addConditionement(){

                  if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
                  {
                      extract($_POST);
                      if(!empty($id_service)) {
                          $this->conditionement->setPost($_POST);
                          if ($this->conditionement->ifConditionementexiste(array('where' => ( array('nom_conditionement' => $nom_conditionement)), 'return_type' => 'count'))==0){
                              $ok=$this->conditionement->insert();
                              echo json_encode(intval($ok));
                              return  $ok;
                              //  echo json_encode(1);
                          }
                          return 0;


                      }



                  }
              }
      public function updatearticle_conditionement($id_conditionement,$add){
          $this->db->setTablename("conditionement");

                  $this->conditionement->setPost($_POST);
          $condition = array('id' =>$id_conditionement);

          $ascategorie=$this->db->getRows(array('where'=>$condition,'return_type'=>'single'));
          //  $asnbr=($add==0)?$ascategorie['nbr_produit_categorie']-1:$ascategorie['nbr_produit_categorie']+1;
          $nbrart=$ascategorie['nbr_utilisation']+$add;

          $rows = array(
              'nbr_utilisation' => $nbrart
          );
          $ok= $this->db->updateTable($rows,array('where'=>$condition));

          return $ok;
      }
      /*------------------Methode Conditionement--------------------=*/
      /*------------------Methode Conditionement--------------------=*/




      /*------------------Methode Article--------------------=*/
      /*------------------Methode Article--------------------=*/
      public function Article($id_service){


          $data["view"] = 'Article';
          $data["curenview"] = 'Insertion D\'Article';
          $data["vewContent"] = 'formarticle';
          $data["vewContenttype"] = 'form';
          $data["pageheader"] = 'Novel Article';
          $data["pageoverview"] = 'Ajouter des Articles';
          $data["active"] = 8;
          $condition = array('id_service' => $id_service);
          $this->db->setTablename("v_categorie");
          $lscategories =$this->db->getRows(array('where'=>$condition,'order_by'=>'nom_categorie','return_type'=>'many'));
          $data["categories"]  = $lscategories;
          $opticategories  ='';
          foreach ($lscategories as $categories){
              $opticategories.=' <option value="'.$categories['id'].'">'.$categories['nom_categorie'].'</option>';
          }
          //  print_r($data["articles"]);

          $data["opticategories"] =  $opticategories;
          return $this->view->load("index/index", $data);
      }

      public function getArticle($id_Article){
          //Instanciation du model
           $Article=$this->article->getArticle($id_Article);
          $OldTable=array();
      foreach ($Article as $OldTable){foreach ($OldTable as $key=>$value){

            if (!is_numeric($key)) {/*echo  $key.'<br/>';*/ $Table[$key]=$value;}}}
          /*$Table= array(

              'id'=>$OldTable['id'],
              'id_categorie'=>$OldTable['id_categorie'],
              'id_catalogue'=>$OldTable['id_catalogue'],
              'type_article'=>$OldTable['type_article'],
              'fiche_technique'=>$OldTable['fiche_technique'],
              'nbrstockage'=>$OldTable['nbrstockage'],
              'tabidstock'=>$OldTable['tabidstock'],
              'path_photo'=>$OldTable['path_photo'],
              'master'=>$OldTable['master'],
              'valeur_article'=>$OldTable['valeur_article'],
              'flag_article'=>$OldTable['flag_article'],
              'ref_article'=>$OldTable['ref_article'],
              'nom_categorie'=>$OldTable['nom_categorie'],
              'nom_article'=>$OldTable['nom_article'],
              'id_famille'=>$OldTable['id_famille'],
              'valeur_categorie'=>$OldTable['valeur_categorie'],
              'id_nomenclature_article'=>$OldTable['id_nomenclature_article'],
              'id_service'=>$OldTable['id_service'],
              'nom_famille'=>$OldTable['nom_famille'],
              'color_famille'=>$OldTable['color_famille'],
              'nbr_categorie_famille'=>$OldTable['nbr_categorie_famille'],
              'valeur_famille'=>$OldTable['valeur_famille'],
              'flag_famille'=>$OldTable['flag_famille'],
              'nom_service'=>$OldTable['nom_service']
          );*/
          $Table["photo_article"] = $this->photo_article->listeArticleByPhoto_articleId($id_Article);

        //  print_r($Table);
           echo json_encode($Table);
      }


      public function addArticle($param){

          if ($param=='single' || $param=='multiple'){
                      if ($param=='single'){
                          if($_POST['action']=="update"){


                              $this->single_update_article($_POST,$_FILES);

                          }
                          if($_POST['action']=="add"){

                              $this->single_add_article($_POST,$_FILES);
                          }
                      }
                      if ($param=='multiple'){
                          if($_POST['action']=="update"){


                              $this->multiple_update_article();

                          }
                          if($_POST['action']=="add"){

                              $this->multiple_add_article();

                          }
                      }
              $this->listeArticle($_POST['id_service']);
          }
          if ($param=='delete'){
              $ok=0;
              extract($_POST);
              if($_POST['option']=="single"){
                  if($_POST['action']=="fldelete"){
                      $this->article->setId($_POST['id']);
                      $ok=$this->article->fldelete();

                  }

                  if($_POST['action']=="delete"){

                  }
              }

              /*
              if($_POST['option']=="single"){
                      if($_POST['action']=="fldelete"){
                          $this->article->setId($_POST['id']);
                          $ok=$this->article->fldelete();

                      }

                      if($_POST['action']=="delete"){

                      }
              }
              if($_POST['option']=="multiple"){
                  if($_POST['action']=="fldelete"){

                  }

                  if($_POST['action']=="delete"){

                  }
              }


              */
              if($_POST['source']=="ajax"){ echo json_encode($ok);}
          }
          if ($param=='ajaxupdate'){

               if($_POST['addmethode']==0){




              }
              if($_POST['addmethode']==1){


              }
              if($_POST['addmethode']=="2"){

                  echo json_encode($this->Ajax_update_article());

              }
          }



      }

      public function ajaxupdateArticle(){
          echo json_encode($this->Ajax_update_article());
      }
      public function ajaxaddArticle(){
          echo json_encode($this->Ajax_update_article());
      }
      private function single_add_article($poste,$files){
          extract($poste);
           $this->article->setPost($poste,$files);
          $type_art=(!isset($type_article) || empty($type_article) )?"simple":$type_article;
          $this->article->setType_article($type_art);
          $this->article->setMultiple(false);
          return  $this->article->insert();

      }
      private function single_update_article($poste,$files){
          extract($poste);
          $this->article->setPost($poste,$files);

          return  $this->article->update();

      }
      private function multiple_add_article(){
          $ok=0;
          extract($_POST);
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

                  $type_art=(!isset($articleTab[$i-1]['type_article']) || empty($articleTab[$i-1]['type_article']) )?"simple":$articleTab[$i-1]['type_article'];

                  $Article = array(
                      'id' => (!isset($id) || empty($id) )?"null":$id,
                      'type_article' => $type_art,
                      'multiple' => true,
                      'id_service' => $_POST['id_service'],
                      'id_categorie' => $articleTab[$i-1]['id_categorie'],
                      'nom_article' => $articleTab[$i-1]['nom_article'],
                      'id_catalogue' => (!isset($id_catalogue) || empty($id_catalogue) )?"null":$id,
                      'fiche_technique' => (!isset($articleTab[$i-1]['fiche_technique']) || empty($articleTab[$i-1]['fiche_technique']) )?'':$articleTab[$i-1]['fiche_technique'],
                      'nbrstockage' => (!isset($articleTab[$i-1]['nbrstockage']) || empty($articleTab[$i-1]['nbrstockage']) )?0:$articleTab[$i-1]['nbrstockage'],
                      'tabidstock' => (!isset($articleTab[$i-1]['tabidstock']) || empty($articleTab[$i-1]['tabidstock']) )?"":$articleTab[$i-1]['tabidstock'],
                      'valeur_article' => (!isset($articleTab[$i-1]['valeur_article']) || empty($articleTab[$i-1]['valeur_article']) )?0:$articleTab[$i-1]['valeur_article'],
                      'flag_article' => 0
                  );

                  $this->article->setPost($Article,$articleTab[$i-1]['photos']);

                  $type_art=(!isset($type_article) || empty($type_article) )?"simple":$type_article;
                  $this->article->setType_article($type_art);
                  $this->article->setMultiple(true);
                  $ok=( $this->article->insert()>0)?($ok+1):0;


              }


          }
          return $ok;
      }
      private function multiple_update_article(){
          $ok=0;
          extract($_POST);
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

                  $type_art=(!isset($articleTab[$i-1]['type_article']) || empty($articleTab[$i-1]['type_article']) )?"simple":$articleTab[$i-1]['type_article'];

                  $Article = array(
                      'id' => (!isset($id) || empty($id) )?"null":$id,
                      'type_article' => $type_art,
                      'multiple' => true,
                      'id_service' => $_POST['id_service'],
                      'id_categorie' => $articleTab[$i-1]['id_categorie'],
                      'nom_article' => $articleTab[$i-1]['nom_article'],
                      'id_catalogue' => (!isset($id_catalogue) || empty($id_catalogue) )?"null":$id,
                      'fiche_technique' => (!isset($articleTab[$i-1]['fiche_technique']) || empty($articleTab[$i-1]['fiche_technique']) )?'':$articleTab[$i-1]['fiche_technique'],
                      'nbrstockage' => (!isset($articleTab[$i-1]['nbrstockage']) || empty($articleTab[$i-1]['nbrstockage']) )?0:$articleTab[$i-1]['nbrstockage'],
                      'tabidstock' => (!isset($articleTab[$i-1]['tabidstock']) || empty($articleTab[$i-1]['tabidstock']) )?"":$articleTab[$i-1]['tabidstock'],
                      'valeur_article' => (!isset($articleTab[$i-1]['valeur_article']) || empty($articleTab[$i-1]['valeur_article']) )?0:$articleTab[$i-1]['valeur_article'],
                      'flag_article' => 0
                  );

                  $this->article->setPost($Article,$articleTab[$i-1]['photos']);

                  $type_art=(!isset($type_article) || empty($type_article) )?"simple":$type_article;
                  $this->article->setType_article($type_art);
                  $this->article->setMultiple(true);
                  $ok=( $this->article->insert()>0)?($ok+1):0;


              }


          }
          return $ok;
      }
      public function Ajax_update_article(){
          extract($_POST);

          $id=$_POST['id'];
          $nom_article=$_POST['nom_article'];
          $Article=$this->article->get($id);
          $curent_id_categorie=$Article["id_categorie"];
          if(isset($_POST["id_categorie"]) && !empty($_POST["id_categorie"])) {
              $curent_id_categorie=$_POST["id_categorie"];
          }
          if ($Article['id_categorie']!=$curent_id_categorie){

              $this->updatearticle_categorie($Article['id_categorie'],-1);
              $this->updatearticle_categorie($curent_id_categorie,1);
          }

          $this->article->setPost($Article);
          $this->article->setNomArticle($nom_article);
          $this->article->setId_categorie($curent_id_categorie);

          $ok=  $this->article->update();
            if ($ok > 0) {
                $Article=$_POST['Article']=$this->article->get($id);
            }



          $returnData = array(
              'status' =>$ok,
              'data' => $Article
          );
          return $returnData;
      }



      private function  add_article_only($Article,$id_catalogue,$id_service,$id_categorie){
          $id_article=0;
          $condition = array('id_catalogue' => $id_catalogue,'id_service' => $id_service);
          $test_ifarticleeexiste = $this->article->ifArticleexiste($condition);

          //echo $tdb->ifArticleexiste($articleObject);
         /* if ($test_ifarticleeexiste == 0) {
              $this->db->setTablename("article");
              $id_article=$this->db->insertTable($Article);
              $this->updatearticle_categorie($id_categorie,1);
              // print_r($articleObject);

          }*/
          return $id_article;
      }

      private function updatearticle_article($id_article,$add){
          $this->db->setTablename("article");
          $condition = array('id' =>$id_article);

          $ascategorie=$this->db->getRows(array('where'=>$condition,'return_type'=>'single'));
          //  $asnbr=($add==0)?$ascategorie['nbr_produit_categorie']-1:$ascategorie['nbr_produit_categorie']+1;
          $nbrart=$ascategorie['nbrstockage']+$add;

          $rows = array(
              'nbrstockage' => $nbrart
          );
          $ok= $this->db->updateTable($rows,array('where'=>$condition));

          return $ok;
      }
      public function update_article(){
          extract($_POST);
          $curent_id_categorie=$old_id_categorie;
          if(isset($id_service) && !empty($id_categorie)) {
              $curent_id_categorie=$id_categorie;
          }
          $ok=0;
          if(!empty($id_service)) {
              $this->db->setTablename("v_article");
              $condition = array('id' =>$id);
              $ascategorie=$this->db->getRows(array('where'=>$condition,'return_type'=>'single'));
              $type_art=(!isset($type_article) || empty($type_article) )?0:$type_article;

              $rows = array(
                  'type_article' => (!isset($type_article) || empty($type_article) )?"simple":$type_article,
                  'id_categorie' =>  $curent_id_categorie,
                  'id_catalogue' => $this->addcatalogue($nom_article,$curent_id_categorie,$type_art),
                  'fiche_technique' => (!isset($fiche_technique) || empty($fiche_technique) )?$ascategorie['fiche_technique']:$fiche_technique,
                  'nbrstockage' => (!isset($nbrstockage) || empty($nbrstockage) )?$ascategorie['nbrstockage']:$nbrstockage,
                  'tabidstock' => (!isset($tabidstock) || empty($tabidstock) )?$ascategorie['tabidstock']:$tabidstock,
                  'valeur_article' => (!isset($valeur_article) || empty($valeur_article) )?$ascategorie['valeur_article']:$valeur_article,
                  'flag_article' => (!isset($flag_article) || empty($flag_article) )?$ascategorie['flag_article']:$flag_article
              );

              $this->db->setTablename("article");

              $ok= $this->db->updateTable($rows,array('where'=>$condition));
              if ($id > 0) {
                  if (isset($_FILES['photos']) && !empty($_FILES['photos']['name'])) {

                      $this->resetmaster($id);
                      $data["ok"] = $this->savefiles($_FILES, $id_service, $id, $nom_article, 'single', 0);

                  }


              }
          }

          return $ok;
      }


      public function listeArticle($id_service){



          $data["view"] = 'Article';
          $data["curenview"] = 'Manage des Articles';
          $data["vewContent"] = 'formarticle';
          $data["vewContenttype"] = 'table';
          $data["pageheader"] = 'Liste d\'Articles  ';
          $data["pageoverview"] = 'Ajouter une Article';
          $data["active"] = 8;
          /*$condition = array('id_service' => $id_service);
          $this->article->setTablename("v_article");
          $lsfamilles  =$this->db->getRows(array('where'=>$condition,'order_by'=>'nom_article ','return_type'=>'many'));*/

          $lsfamilles  =$this->article->Vliste($id_service);
          $data["articles"]  = $lsfamilles;
          /*$this->db->setTablename("v_categorie");
          $lscategories =$this->db->getRows(array('where'=>$condition,'order_by'=>'nom_categorie','return_type'=>'many'));*/
          $lscategories  =$this->categorie->Vliste($id_service);
          $data["categories"]  = $lscategories;

          $opticategories  ='';
          foreach ($lscategories as $categories){
              $opticategories.=' <option value="'.$categories['id'].'">'.$categories['nom_categorie'].'</option>';
          }
          //  print_r($data["articles"]);

          $data["opticategories"] =  $opticategories;
          return $this->view->load("index/index", $data);
      }



       private function addcatalogue($nom_article,$id_categorie,$type_article){

                          $articlename = ucfirst(strtolower($nom_article));
                          $this->db->setTablename("v_categorie");
                          $condition = array('id' => $id_categorie);
                          $Categorie  =$this->db->getRows(array('where'=>$condition,'return_type'=>'single'));

                          $Catalogue = array(
                              'id' => "null",
                              'ref_article' => $this->refmaker('ART',$id_categorie,$Categorie['id_service'],$nom_article),
                              'type_article' => ($type_article==0)?"simple":"composer",
                              'nom_article' => $articlename,
                              'nom_service' => $Categorie['nom_service'],
                              'nom_famille' => $Categorie['nom_famille'],
                              'nom_categorie' => $Categorie['nom_categorie'],
                              'nomenclature_article' => $Categorie['nom_nomenclature_article']
                          );

                              $this->db->setTablename("catalogue");
                              $condition2 = array('nom_article' => $articlename);
                              $ifCatalogueexiste = $this->db->getRows(array('where' => $condition2, 'return_type' => 'single'));
                               if ($ifCatalogueexiste==null){
                                   $id_catalogue=$this->db->insertTable($Catalogue);
                                 //  echo json_encode(intval($id_catalogue));
                               }
                               if ($ifCatalogueexiste!=null){
                                    $id_catalogue = $ifCatalogueexiste['id'];
                               }

                             return  $id_catalogue;
                      }


      /*------------------Methode Article--------------------=*/
      /*------------------Methode Article--------------------=*/



      /*------------------Methode Categorie--------------------=*/
      /*------------------Methode Categorie--------------------=*/
      public function Categorie($id_service){

          $data["view"] = 'Categorie';
          $data["curenview"] = 'Add Categorie';
          $data["vewContent"] = 'formcategorie';
          $data["vewContenttype"] = 'form';
          $data["pageheader"] = 'Gestion des Categories';
          $data["pageoverview"] = 'Ajouter une Categorie';
          $data["active"] = 8;

          $lscategories =$this->categorie->Vliste($id_service,0);
          $data["categories"]  = $lscategories;


          $this->famille->setId_service($id_service);
          $lsfamilles  = $this->famille->Vliste();
          $data["familles"]  = $lsfamilles;
          foreach ($data["categories"] as $Categorie){
              $this->categorie->setPost($Categorie);
              $br_produit_categorie=$this->article->count_articleBycategorie($Categorie["id"]);
              $this->categorie->setNbr_produit_categorie($br_produit_categorie);
              $this->categorie->update();
          }
          $this->db->setTablename("nomenclature_article");
          $lsnomenclature_articles  =$this->db->getRows(array('order_by'=>'nom_nomenclature_article','return_type'=>'many'));
          $data["nomenclature_articles"]  = $lsnomenclature_articles;


          $optifamilles  ='';
          foreach ($lsfamilles as $familles){
              $optifamilles.=' <option value="'.$familles['id'].'">'.$familles['nom_famille'].'</option>';
          }

          $optinomenclature_articles  ='';
          foreach ($lsnomenclature_articles as $champ){
              $optinomenclature_articles.=' <option value="'.$champ['id'].'">'.$champ['nom_nomenclature_article'].'</option>';



          }
          //  print_r($data["articles"]);

          $data["optifamilles"] =  $optifamilles;
          $data["optinomenclature_articles"] =  $optinomenclature_articles;


        return $this->view->load("index/index", $data);
      }

      public function manage_Categorie($id_categorie){

          $data["view"] = 'Categorie';
          $data["curenview"] = 'Edit Categorie';
          $data["vewContent"] = 'managecategorie';
          $data["vewContenttype"] = 'form';
          $data["pageheader"] = 'Gestion des Categories';
          $data["pageoverview"] = 'Manager Categorie';
          $data["active"] = 8;
          if(isset($_POST["modifier"]))//"valider" est le name du champs submit du formulaire add.html
          {
              extract($_POST);
              $Categorie  =$this->categorie->get($id_categorie);
              $this->categorie->setPost($Categorie);
              $this->categorie->setNom_categorie($nom_categorie);
              $this->categorie->setId_famille($id_famille);
              $this->categorie->setId_nomenclature_article($id_nomenclature_article);
              $this->categorie->update();

          }
          if(isset($_POST["valider"])){
              $this->single_update_article($_POST,$_FILES);
          }

          if(isset($_POST["addarticle"])){
              $this->single_add_article($_POST,$_FILES);
          }
          $Categorie  =$this->categorie->get($id_categorie);
          $data["categorie"]  = $Categorie;

          $lsarticles =$this->article->VlistearticleofCaegorie($id_categorie);
          $data["articles"]  = $lsarticles;

          $lsfamilles  = $this->famille->Vliste($Categorie['id_service']);
          $data["familles"]  = $lsfamilles;

          $this->db->setTablename("nomenclature_article");
          $lsnomenclature_articles  =$this->db->getRows(array('order_by'=>'nom_nomenclature_article','return_type'=>'many'));
          $data["nomenclature_articles"]  = $lsnomenclature_articles;


          $optifamilles  ='';

          foreach ($lsfamilles as $familles){
              $optifamilles.=' <option value="'.$familles['id'].'">'.$familles['nom_famille'].'</option>';

          }
          $optinomenclature_articles  ='';
          foreach ($lsnomenclature_articles as $champ){
              $optinomenclature_articles.=' <option value="'.$champ['id'].'">'.$champ['nom_nomenclature_article'].'</option>';



          }


          $this->categorie->setPost($Categorie);
          $br_produit_categorie=$this->article->count_articleBycategorie($Categorie["id"]);
          $this->categorie->setNbr_produit_categorie($br_produit_categorie);
          $this->categorie->update();
          //print_r($this->categorie->getNbr_produit_categorie());

          $data["optifamilles"] =  $optifamilles;
          $data["optinomenclature_articles"] =  $optinomenclature_articles;


             return $this->view->load("index/index", $data);
      }
      public function updatearticle_categorie($id_categorie,$add){
          $Categorie=$this->categorie->get($id_categorie);
          $br_produit_categorie=$Categorie['nbr_produit_categorie']+$add;
          $this->categorie->setPost($Categorie);
          $this->categorie->setNbr_produit_categorie($br_produit_categorie);
          $ok=$this->categorie->update();
          return $ok;
      }
      public function addCategorie($ajax='yes'){

          if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
          {
              extract($_POST);

              $ok=0;
              if(!empty($id_service)) {

                 /* $Categorie = array(
                      'id' => "null",
                      'id_famille' => $id_famille,
                      'nom_categorie' => $nom_categorie,
                      'id_nomenclature_article' => $id_nomenclature_article,
                      'nbr_produit_categorie' => 0,
                      'valeur_categorie' => 0,
                      'flag_categorie' => 0
                  );*/
                  $this->categorie->setId("null");
                  $this->categorie->setNom_categorie($nom_categorie);
                  $this->categorie->setId_famille($id_famille);
                  $this->categorie->setId_nomenclature_article($id_nomenclature_article);
                  $this->categorie->setNbr_produit_categorie(0);
                  $this->categorie->setValeur_categorie(0);
                  $this->categorie->setFlag_categorie(0);

                  $test_ifCategorieexiste=$this->categorie->ifCategorieexiste(array('nom_categorie' => $nom_categorie));

                 /* $this->db->setTablename("categorie");
                  $condition = array('nom_famille' => $nom_categorie);
                  $test_ifCategorieexiste = $this->db->getRows(array('where' => $condition, 'return_type' => 'count'));*/


                //  print_r($_POST);

                  if ($test_ifCategorieexiste==0){
                      $ok=$this->categorie->insert();
                         if  ($ajax!='yes'){
                             echo json_encode(intval($ok));
                         }

                  }
                  return $ok;


              }



          }
      }

      public function update_categorie(){
          extract($_POST) ;

          $ok=0;
          $ascategorie = $this->categorie->get($id);
          $fid_famille = (!isset($id_famille) || empty($id_famille) )?$ascategorie['id_famille']:$id_famille;
          $fid_nomenclature_article = (!isset($id_nomenclature_article) || empty($id_nomenclature_article) )?$ascategorie['id_nomenclature_article']:$id_nomenclature_article;


          if(isset($_POST["modifier"]))//"valider" est le name du champs submit du formulaire add.html
          {
              $this->categorie->setId($id);
              $Table = array(
                  'id_famille' => $fid_famille,
                  'nom_categorie' => $nom_categorie,
                  'nbr_produit_categorie' => $nbr_produit_categorie,
                  'valeur_categorie' =>$valeur_categorie,
                  'id_nomenclature_article' => $fid_nomenclature_article
              );
              $ok=$this->categorie->update($Table);


              $ascategorie = $this->categorie->get($id);
          }

          $returnData = array(
              'data' =>$ascategorie,
              'status' =>$ok
          );
          echo json_encode($returnData);
          return $returnData;

      }




      /*------------------Methode Categorie--------------------=*/
      /*------------------Methode Categorie--------------------=*/





      public function setmaster($id){
          //Instanciation du model
          $rows = array('master' => 1);
          $photo_article=$this->photo_article->get($id);

          $this->photo_article->resetmaster($photo_article['id_article']);


           $ok= $this->photo_article->updatemaster($photo_article['id']);


          $returnData = array(
              'id_newmaster' =>$photo_article['id'],
              'path_photo_newmaster' =>$photo_article['path_photo'],
              'id_oldmaster' =>$ok,
              'path_photo_oldmaster' =>$photo_article['path_photo']
          );
          //print_r($returnData);
          echo json_encode($returnData);
          /* print_r($newmaster);
           echo  '<hr>';
           print_r($oldmaster);*/
      }

      public function deletePhoto_article($id){
           $photo_article=$this->photo_article->get($id);
           $this->photo_article->setId($id);
           $this->photo_article->setPath_photo($photo_article['path_photo']);
           $ok=$this->photo_article->delete();



          $returnData = array(
              'id_newmaster' =>$photo_article['id'],
              'path_photo_newmaster' =>$photo_article['path_photo'],
              'id_oldmaster' =>$ok,
              'path_photo_oldmaster' =>$photo_article['path_photo']
          );
          //print_r($returnData);
          echo json_encode($returnData);
          /* print_r($newmaster);
           echo  '<hr>';
           print_r($oldmaster);*/
      }














      //Instanciation de la referance


      private function refmaker($pre,$id_categorie,$id_service,$nomart){
          //Instanciation du model
          $this->db->setTablename("categorie");
          $condition = array('id' =>$id_categorie);

          $Categorie=$this->db->getRows(array('where'=>$condition,'return_type'=>'single'));

          return $pre.$id_service.$Categorie['id_famille'].$id_categorie.$this->explodestrtoupper($nomart).date('dmyHis');;

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


      private function resetmaster($id_article){
          $this->db->setTablename("photo_article");
          $condition = array('id_article' =>$id_article);
          $rows = array('master' => 0);

          return $this->db->updateTable($rows,array('where'=>$condition));
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
                  //$this->filemngr->setFile($name, $tmp, $size, $upload_target, str_replace(' ','-',trim($nom_article)),$path);
                  //echo $name.' => '.$tmp.' => '.$size.'<hr>';
                  // echo $upload['filename'].' => '.$upload['sms'].'<hr>';
                  $ok=$this-> addPhoto_article($id_service,$id_article,$path,(($i==0)?1:0));
                  if ($ok>0){

                    $upload= fichier($name,$tmp,$size,$upload_target,str_replace(' ','-',trim($nom_article)),$path);
                    // $this->filemngr->uploadfile();
                      //   print_r($this->photo);
                  }
              }

          }
          if ($param=='multiple'){
              $fileNames    = $files['name'];
              $fileSizes    = $files['size'];
              $fileTmp_dirs  = $files['tmp_name'];
              $path = filename($fileNames,$fileSizes,str_replace(' ','',trim($nom_article)));
              //$this->filemngr->setFile($fileNames, $fileTmp_dirs, $fileSizes, $upload_target, str_replace(' ','-',trim($nom_article)),$path);
              //print_r($fileNames);

              $ok=$this-> addPhoto_article($id_service,$id_article,$path,$master);
              if ($ok>0){

                $upload= fichier($fileNames,$fileTmp_dirs,$fileSizes,$upload_target,str_replace(' ','-',trim($nom_article)),$path);
                //  $this->filemngr->uploadfile();
                  //   print_r($this->photo);
              }


          }


          return $upload;



      }

      private function addPhoto_article($id_service,$id_article,$path_photo,$Master){
          $ok=0;
          if(!empty($id_service)) {
              $dPhoto_article = array(
                  'id' => "null",
                  'id_service' => $id_service,
                  'id_article' => $id_article,
                  'path_photo' => $path_photo,
                  'master' => $Master
              );
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



      public function  Faille(){
          $data["view"] = 'Ingection';
          $data["curenview"] = 'Add Ingection';
          $data["vewContent"] = 'fomxss';
          $data["vewContenttype"] = 'form';
          $data["pageheader"] = 'Gestion des Ingection et faille sql';
          $data["pageoverview"] = 'Ajouter une Ingection';
          $data["active"] = 8;
          $this->db->setTablename("test");
          $lscategories =$this->db->getRows(array('return_type'=>'many'));
          $data["tests"]  = $lscategories;

          return $this->view->load("index/index", $data);
      }

      public function postfaille()
      {

          extract($_POST);
          $path = $_FILES['image']['name'];
          $size = $_FILES['image']['size'];
          $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
          $objfile = explode('.', $path);
          $objfile[0] = "";
          $isvalide = $this->valid_extension($path, $valid_extensions);
          if ($isvalide == 1) {
              echo filename($path, $size, 'gatouzo');
          }

         // print_r($_POST);

          $chaine_utilisateur = $_POST['valeur'];
// On supprime les retour à la ligne
         echo $chaine_secure = str_replace(array("\n","\r",PHP_EOL),'',$chaine_utilisateur);
      }

      private function valid_extension($filename,$valid_extensions=array()) {

          $isvalide=1;
          $ext = pathinfo($filename, PATHINFO_EXTENSION);
          if(!in_array($ext, $valid_extensions)){
              $isvalide=0;
          }
          $objfile= explode('.',$filename);
          $objfile[0]="";
          foreach ($objfile as $file){

              if(!in_array($file, $valid_extensions)){
                  $isvalide=0;
              }
          }
          return $isvalide;

      }





               }


            ?>

