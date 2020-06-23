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
use src\entities\Filemanager as FilemanagerEntity;



  class Stokage extends Controller{

    /*==================Attribut list=====================*/
          
             private  $db;
             private  $filemngr;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                     require_once 'src/controller/tools/functions.php';
                        parent::__construct();
                        $this->db = new DB();
                        $this->filemngr = new FilemanagerEntity();
                        $this->filemngr->setFileExtensions(array('jpeg', 'jpg', 'png', 'gif'));
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


                  if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
                  {
                      extract($_POST);
                      if(!empty($id_service)) {

                          $Famille = array(
                              'id' => "null",
                              'id_service' => $id_service,
                              'nom_famille' => $nom_famille,
                              'color_famille' => $color_famille,
                              'nbr_categorie_famille' => 0,
                              'valeur_famille' => 0,
                              'flag_famille' => 0
                          );
                          $this->db->setTablename("famille");
                          $condition = array('nom_famille' => $nom_famille, 'id_service' => $id_service);
                          $test_ifFamilleexiste = $this->db->getRows(array('where' => $condition, 'return_type' => 'count'));



                          if ($test_ifFamilleexiste==0){
                              $ok=$this->db->insertTable($Famille);
                              echo json_encode(intval($ok));
                              return  $ok;
                              //  echo json_encode(1);
                          }
                          return 0;


                      }



                  }
              }

      public function updatearticle_famille($id_famille,$add){
          $this->db->setTablename("famille");
          $condition = array('id' =>$id_famille);

          $ascategorie=$this->db->getRows(array('where'=>$condition,'return_type'=>'single'));
          //  $asnbr=($add==0)?$ascategorie['nbr_produit_categorie']-1:$ascategorie['nbr_produit_categorie']+1;
          $nbrart=$ascategorie['nbr_categorie_famille']+$add;

          $rows = array(
              'nbr_categorie_famille' => $nbrart
          );
          $ok= $this->db->updateTable($rows,array('where'=>$condition));

          return $ok;
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

                          $Conditionement = array(
                              'id' => "null",
                              'nom_conditionement' => $nom_conditionement,
                              'nbr_utilisation' => 0,
                              'flag_conditionement' => 0
                          );
                          $this->db->setTablename("conditionement");
                          $condition = array('nom_conditionement' => $nom_conditionement);
                          $test_ifConditionementexiste = $this->db->getRows(array('where' => $condition, 'return_type' => 'count'));



                          if ($test_ifConditionementexiste==0){
                              $ok=$this->db->insertTable($Conditionement);
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


      public function addArticle($param){

          if ($param=='single'){
              if($_POST['action']=="update"){


                  $this->update_article();

              }
              if($_POST['action']=="add"){

                   $this->single_add_article();
              }
          }
          if ($param=='multiple'){
              if($_POST['action']=="update"){



              }
              if($_POST['action']=="add"){

                  $this->multiple_add_article();

              }
          }

          if ($param=='jsonadd'){
              if($_POST['addmethode']==0){

              }
              if($_POST['addmethode']==1){

              }

          }

         $this->listeArticle($_POST['id_service']);

      }
      public function ajaxupdateArticle(){
          echo json_encode($this->Ajax_update_article());
      }
      public function listeArticle($id_service){



          $data["view"] = 'Article';
          $data["curenview"] = 'Manage des Articles';
          $data["vewContent"] = 'formarticle';
          $data["vewContenttype"] = 'table';
          $data["pageheader"] = 'Liste d\'Articles  ';
          $data["pageoverview"] = 'Ajouter une Article';
          $data["active"] = 8;
          $condition = array('id_service' => $id_service);
          $this->db->setTablename("v_article");
          $lsfamilles  =$this->db->getRows(array('where'=>$condition,'order_by'=>'nom_article ','return_type'=>'many'));
          $data["articles"]  = $lsfamilles;
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



                      private function single_add_article(){
                          extract($_POST);
                          $type_art=(!isset($type_article) || empty($type_article) )?"simple":$type_article;
                          $Article = array(
                              'id' => (!isset($id) || empty($id) )?"null":$id,
                              'type_article' => $type_art,
                              'id_categorie' => $id_categorie,
                              'id_catalogue' => $this->addcatalogue($nom_article,$id_categorie,$type_art),
                              'fiche_technique' => (!isset($fiche_technique) || empty($fiche_technique) )?'':$fiche_technique,
                              'nbrstockage' => (!isset($nbrstockage) || empty($nbrstockage) )?0:$nbrstockage,
                              'tabidstock' => (!isset($tabidstock) || empty($tabidstock) )?"":$tabidstock,
                              'valeur_article' => (!isset($valeur_article) || empty($valeur_article) )?0:$valeur_article,
                              'flag_article' => 0
                          );

                          $id_article = $this->add_article_only($Article,$nom_article,$_POST['id_service'],$_POST['id_categorie']);
                          if ($id_article > 0) {
                              if (isset($_FILES['photos']) && !empty($_FILES['photos']['name'])) {

                                  $this->resetmaster($id_article);
                                  $data["ok"] = $this->savefiles($_FILES, $id_service, $id_article, $nom_article, 'single', 0);

                              }


                          }
                      }
                      private function multiple_add_article(){

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
                                      'id_categorie' => $articleTab[$i-1]['id_categorie'],
                                      'id_catalogue' => $this->addcatalogue($articleTab[$i-1]['nom_article'],$articleTab[$i-1]['id_categorie'],$type_art),
                                      'fiche_technique' => (!isset($articleTab[$i-1]['fiche_technique']) || empty($articleTab[$i-1]['fiche_technique']) )?'':$articleTab[$i-1]['fiche_technique'],
                                      'nbrstockage' => (!isset($articleTab[$i-1]['nbrstockage']) || empty($articleTab[$i-1]['nbrstockage']) )?0:$articleTab[$i-1]['nbrstockage'],
                                      'tabidstock' => (!isset($articleTab[$i-1]['tabidstock']) || empty($articleTab[$i-1]['tabidstock']) )?"":$articleTab[$i-1]['tabidstock'],
                                      'valeur_article' => (!isset($articleTab[$i-1]['valeur_article']) || empty($articleTab[$i-1]['valeur_article']) )?0:$articleTab[$i-1]['valeur_article'],
                                      'flag_article' => 0
                                  );

                                  $id_article = $this->add_article_only($Article,$articleTab[$i-1]['nom_article'],$_POST['id_service'],$articleTab[$i-1]['id_categorie']);

                                  if($id_article>0){
                                      $x=0;

                                      foreach($articleTab[$i-1]['photos'] as $photos) {

                                          if ($x==0){

                                              // print_r($photos);
                                              $this->savefiles($photos,$id_service,$id_article,$articleTab[$i-1]['nom_article'],'multiple',1 );
                                              //echo  '<br>';
                                              // echo  $idarticle.'<br>'; echo  '<br>';
                                          }
                                          if ($x>0){
                                              // print_r($photos);
                                              //  echo  $idarticle.'<br>';
                                              $this->savefiles($photos,$id_service,$id_article,$articleTab[$i-1]['nom_article'],'multiple',0 );
                                          }
                                          $x++;
                                      }
                                      // print_r($articleTab[$i-1]['photos']);
                                      // echo  '<hr>';

                                  }

                              }


                          }
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

                      private function  add_article_only($Article,$nom_article,$id_service,$id_categorie){
                                      $id_article=0;
                                      $this->db->setTablename("v_article");
                                      $condition = array('nom_article' => $nom_article,'id_service' => $id_service);
                                      $test_ifarticleeexiste = $this->db->getRows(array('where' => $condition, 'return_type' => 'count'));
                                      //echo $tdb->ifArticleexiste($articleObject);
                                      if ($test_ifarticleeexiste == 0) {
                                          $this->db->setTablename("article");
                                          $id_article=$this->db->insertTable($Article);
                                          $this->updatearticle_categorie($id_categorie,1);
                                          // print_r($articleObject);

                                      }
                                      return $id_article;
                      }

                      public function Ajax_update_article(){
                          extract($_POST);
                          $returnData=array();
                          // echo json_encode($valeur_categorie);
                          if(!empty($id)) {




                              $this->db->setTablename("v_article");
                              $condition = array('id' =>$id);
                              $Aarticle=$this->db->getRows(array('where'=>$condition,'return_type'=>'single'));
                              $curent_id_categorie=$Aarticle["id_categorie"];
                              if(isset($_POST["id_categorie"]) && !empty($_POST["id_categorie"])) {
                                  $curent_id_categorie=$_POST["id_categorie"];
                              }
                              if ($Aarticle['id_categorie']!=$curent_id_categorie){

                                  $this->updatearticle_categorie($Aarticle['id_categorie'],-1);
                                  $this->updatearticle_categorie($curent_id_categorie,1);
                              }


                              $rows = array(
                                  'id_categorie' =>  $curent_id_categorie,
                                  'id_catalogue' => $this->addcatalogue($nom_article,$curent_id_categorie,$Aarticle['type_article'])
                              );

                              $this->db->setTablename("article");

                              $ok= $this->db->updateTable($rows,array('where'=>$condition));


                              $returnData = array(
                                  'status' =>$ok,
                                  'data' => $this->db->getRows(array('where'=>$condition,'return_type'=>'single'))
                              );

                          }
                          return $returnData;
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

          $this->db->setTablename("v_categorie");
          $condition = array('id_service' => $id_service);
          $lscategories =$this->db->getRows(array('where'=>$condition,'order_by'=>'nom_categorie','return_type'=>'many'));
          $data["categories"]  = $lscategories;
          $this->db->setTablename("v_famille");
          $lsfamilles  =$this->db->getRows(array('where'=>$condition,'order_by'=>'nom_famille','return_type'=>'many'));
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
          //  print_r($data["articles"]);

          $data["optifamilles"] =  $optifamilles;
          $data["optinomenclature_articles"] =  $optinomenclature_articles;


          return $this->view->load("index/index", $data);
      }
      public function addCategorie(){

          if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
          {
              extract($_POST);
              if(!empty($id_service)) {
                  $Categorie = array(
                      'id' => "null",
                      'id_famille' => $id_famille,
                      'nom_categorie' => $nom_categorie,
                      'id_nomenclature_article' => $id_nomenclature_article,
                      'nbr_produit_categorie' => 0,
                      'valeur_categorie' => 0,
                      'flag_categorie' => 0
                  );
                  $this->db->setTablename("categorie");
                  $condition = array('nom_famille' => $nom_categorie);
                  $test_ifCategorieexiste = $this->db->getRows(array('where' => $condition, 'return_type' => 'count'));



                  if ($test_ifCategorieexiste==0){
                      $ok=$this->db->insertTable($Categorie);
                      echo json_encode(intval($ok));
                      return  $ok;
                      //  echo json_encode(1);
                  }
                  return 0;


              }



          }
      }
      public function update_categorie(){
          extract($_POST);
          $ok=0;
          if(!empty($id_service)) {
              $this->db->setTablename("categorie");
              $condition = array('id' =>$id_categorie);
              $ascategorie=$this->db->getRows(array('where'=>$condition,'return_type'=>'single'));
              //  $asnbr=($add==0)?$ascategorie['nbr_produit_categorie']-1:$ascategorie['nbr_produit_categorie']+1;


              $rows = array(
                  'id_famille' => (!isset($id_famille) || empty($id_famille) )?$ascategorie['id_famille']:$id_famille,
                  'nom_categorie' => (!isset($nom_categorie) || empty($nom_categorie) )?$ascategorie['nom_categorie']:$nom_categorie,
                  'nbr_produit_categorie' => (!isset($nbr_produit_categorie) || empty($nbr_produit_categorie) )?$ascategorie['nbr_produit_categorie']:$nbr_produit_categorie,
                  'valeur_categorie' => (!isset($valeur_categorie) || empty($valeur_categorie) )?$ascategorie['valeur_categorie']:$valeur_categorie,
                  'id_nomenclature_article' => (!isset($id_nomenclature_article) || empty($id_nomenclature_article) )?$ascategorie['id_nomenclature_article']:$id_nomenclature_article,
                  'flag_categorie' => (!isset($flag_categorie) || empty($flag_categorie) )?$ascategorie['flag_categorie']:$flag_categorie
              );
              $ok= $this->db->updateTable($rows,array('where'=>$condition));

          }

          return $ok;
      }
      public function updatearticle_categorie($id_categorie,$add){
          $this->db->setTablename("categorie");
          $condition = array('id' =>$id_categorie);

          $ascategorie=$this->db->getRows(array('where'=>$condition,'return_type'=>'single'));
          //  $asnbr=($add==0)?$ascategorie['nbr_produit_categorie']-1:$ascategorie['nbr_produit_categorie']+1;
          $nbrart=$ascategorie['nbr_produit_categorie']+$add;

          $rows = array(
              'nbr_produit_categorie' => $nbrart
          );
          $ok= $this->db->updateTable($rows,array('where'=>$condition));

          return $ok;
      }



      /*------------------Methode Categorie--------------------=*/
      /*------------------Methode Categorie--------------------=*/





      public function setmaster($id){
          //Instanciation du model
          $this->db->setTablename("photo_article");
          $condition = array('id' =>$id);
          $rows = array('master' => 1);

          $photo_article=$this->db->getRows(array('where'=>$condition,'return_type'=>'single'));
          $this->resetmaster($photo_article['id_article']);

           $ok= $this->db->updateTable($rows,array('where'=>$condition));


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

