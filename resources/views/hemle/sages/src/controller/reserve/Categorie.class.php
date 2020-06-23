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
  use src\entities\Categorie as CategorieEntity;
use src\model\ArticleDB;
use src\model\CategorieDB;

  use src\entities\Famille as FamilleEntity;
  use src\model\FamilleDB;


  use src\entities\Service as ServiceEntity;
  use src\model\ServiceDB;


use src\entities\Nomenclature_article as Nomenclature_articleEntity;
use src\model\Nomenclature_articleDB;

  class Categorie extends Controller{

    /*==================Attribut list=====================*/
             private  $famille;
             private  $familledb;
             private  $service;
             private  $servicedb;
             private  $nomenclature_article;
             private  $nomenclature_articledb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->famille = new FamilleEntity();
                 $this->familledb = new FamilleDB();
                 $this->service = new ServiceEntity();
                 $this->servicedb = new ServiceDB();
                     $this->nomenclature_article = new Nomenclature_articleEntity();
                     $this->nomenclature_articledb = new Nomenclature_articleDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/


      public function index($idservice){

          $data["view"] = 'Categorie';
          $data["curenview"] = 'Add Categorie';
          $data["vewContent"] = 'formcategorie';
          $data["vewContenttype"] = 'form';
          $data["pageheader"] = 'Gestion des Categories';
          $data["pageoverview"] = 'Ajouter une Categorie';
         $data["active"] = 8;
          $tdb = new CategorieDB();
          $data["categories"] =  $tdb->listeCategorieByServiceId($idservice);
          $ftdb = new FamilleDB();
          $lsfamilles = $ftdb->listeFamilleByServiceId($idservice);
          $data["familles"] =$lsfamilles;
          $ftdb = new FamilleDB();
          $lsnomenclature_articles = $this->nomenclature_articledb->listeNomenclature_article();
          $data["nomenclature_articles"] =$lsnomenclature_articles;

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


    /*------------------Methode getID--------------------=*/

                public function getID( $id_service){
                    $data["id_service"] = $id_service;
                    return $this->view->load("categorie/get_id", $data);
                }


    /*------------------Methode get--------------------=*/

                public function get($id){
                    //Instanciation du model
                    $tdb = new CategorieDB();
                    $data["categorie"] = $tdb->getCategorie($id);
                    return $this->view->load("categorie/get", $data);
                }
                public function get2($id){
                    //Instanciation du model
                    $tdb = new CategorieDB();
                    echo json_encode($tdb->getCategorie($id));
                }


    /*------------------Methode list--------------------=*/

            public function liste(){
                    //Instanciation du model
                    $tdb = new CategorieDB();
                    $data["categories"] = $tdb->listeCategorie();
                    return $this->view->load("categorie/liste", $data);
                }

      public function liste2($id_service){
          $tdb = new CategorieDB();
          $articles = $tdb->listeCategorieByServiceId($id_service);
          //`id`, `id_service`, `id_famille`, `nom_categorie`, `nbr_produit_categorie`,
          // `valeur_categorie`, `flag_categorie`, `nom_famille`, `color_famille`, `nbr_categorie_famille`, `valeur_famille`, `flag_famille`


          $lsarticle=array();
          foreach ($articles as $article){
              $objarticle=array();
              $objarticle["id"] =  $article["id"] ;
              $objarticle["nom_categorie"] =  $article["nom_categorie"] ;
              $objarticle["id_famille"] =  $article["id_famille"] ;
              $objarticle["nom_famille"] =  $article["nom_famille"] ;
              $objarticle["color_famille"] =  $article["color_famille"] ;
              /* print_r($objarticle);
               echo '<hr>'*/

              $lsarticle[] =  $objarticle ;

          }
//print_r($lsarticle);
          // $lsarticle["id"] =  $articles["id"] ;


          echo    json_encode($lsarticle);
      }
    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/

public function add(){
	//Instanciation du model
            $tdb = new CategorieDB();
    /*==================Foreign list=====================*/
                    $data["familles"] = $this->familledb->listeFamille();
                    $data["services"] = $this->servicedb->listeService();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);

                extract($_POST);
                if(!empty($id_service) && !empty($id_service)) {
                    //echo json_encode($id_service.' = '.$nom_famille.' = '.$color_famille.' = '.$nbr_categorie_famille.' = '.$valeur_famille );

                    $categorieObject  = new CategorieEntity();
                    $categorieObject ->setId($id);
                    $categorieObject ->setId_service($id_service);
                    $categorieObject ->setId_famille($id_famille);
                    $categorieObject ->setId_nomenclature_article($id_nomenclature_article);
                    $categorieObject ->setNom_categorie($nom_categorie);
                    $categorieObject ->setNbr_produit_categorie(0);
                    $categorieObject ->setFlag_categorie(0);

                    if ($tdb->ifCategorieexiste($categorieObject)==0){
                        $ok=$tdb->addCategorie($categorieObject );
                        if ( $ok>0){

                            $ok=$this->updatecategorie_famille($id_famille,1);
                            echo json_encode($ok);
                        }
                    }


                   // echo json_encode($tdb->addCategorie($asnbr.' == '. $asfamille->getNbr_categorie_famille()));
                   //  echo json_encode($tdb->addCategorie($categorieObject ));

                }



            }
        }


    /*------------------Methode update--------------------=*/

		public function posupdate(){
		    $this->update();
		    $this->index($_POST["id_service"]);

        }
		public function update(){
			//Instanciation du model
            if(isset($_POST["modifier"])){
                extract($_POST);
               // echo json_encode($valeur_categorie);
               if(!empty($id)) {


                   $categorieObject  = new CategorieEntity();

                   $tdb = new CategorieDB();

                   $categorieObject ->setId($id);
                   $Categorie=$tdb->getCategorie($id);

                   $id_famille=(!isset($_POST["id_famille"])) ? $Categorie["id_famille"]: $_POST["id_famille"];
                   $categorieObject ->setId_famille($id_famille);

                   $id_nomenclature_article=(!isset($_POST["id_nomenclature_article"])) ? $Categorie["id_nomenclature_article"]: $_POST["id_nomenclature_article"];
                   $categorieObject ->setId_nomenclature_article($id_nomenclature_article);

                   $categorieObject ->setNom_categorie($nom_categorie);
                   $categorieObject ->setNbr_produit_categorie($nbr_produit_categorie);

                   $ok=$tdb->updatecategorie2($categorieObject);

                   if ( $ok>0){
                       if ($Categorie['id_famille']!=$id_famille){
                           $this->updatecategorie_famille($Categorie['id_famille'],-1);
                           $this->updatecategorie_famille($id_famille,1);
                       }
                       $Categorie=$tdb->getCategorie($id);
                   }



                    $returnData = array(
                        'status' =>$ok,
                        'data' => $Categorie
                    );

                   echo json_encode($returnData);
                }
            }
       }
      private function autoupdatenbrcategorie( $id_service){
          $tdb = new FamilleDB();
          $familles=$tdb->getnbrcategorieToupdate($id_service);
          foreach ($familles as $fam){
              //  echo '<hr>'.$fam['id_famille'].' => '.$fam['nbrcategorie'].' cat ';
              $familleObject  = new FamilleEntity();
              $familleObject ->setId($fam['id_famille']);
              $familleObject ->setNbr_categorie_famille($fam['nbrcategorie']);

              $tdb->nbrcategorieupdate($familleObject);
              //$this->autoupdatenbrcategorie($fam['id_famille'],$fam['nbrcategorie']);
          }

      }
    /*------------------Methode list--------------------=*/

            public function delete(){
              //Instanciation du model
            //Retour vers la liste
                if (isset($_POST['id']) && !empty($_POST['id'])) {

                    $id = intval($_POST['id']);
                    $tdb = new CategorieDB();
                    $Categorie=$tdb->getCategorie($id);
                    $ok=$tdb->fldeleteCategorie($id);

                    if ( $ok>0){

                        $ok=$this->updatecategorie_famille($Categorie['id_famille'],-1);
                        echo json_encode($ok);
                    }
                }
                }


      public function updatecategorie_famille($id_famille,$add){
          $familledb = new FamilleDB();
          $asfamille=$familledb->getFamille($id_famille);
          //  $asnbr=($add==0)?$ascategorie['nbr_produit_categorie']-1:$ascategorie['nbr_produit_categorie']+1;
          $nbrcat=$asfamille['nbr_categorie_famille']+$add;
          $asfamilleObject  = new FamilleEntity();
          $asfamilleObject ->setId($id_famille);
          $asfamilleObject ->setNbr_categorie_famille($nbrcat);

          return $familledb->nbrcategorieupdate($asfamilleObject);
      }

    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/

            	public function edit($id){
                    $data["view"] = 'Categorie';
                    $data["curenview"] = 'Add Categorie';
                    $data["vewContent"] = 'editcategorie';
                    $data["vewContenttype"] = 'form';
                    $data["pageheader"] = 'Gestion des articles de categories';
                    $data["pageoverview"] = 'Manager une Categorie';
                   $data["active"] = 8;
                    $tdbc = new CategorieDB();
                    $data["categorie"] =  $tdbc->getCategorie($id);
                    $ftdb = new FamilleDB();
                    $lsfamilles = $ftdb->listeFamilleByServiceId($data["categorie"]['id_service']);


                    $data["familles"] =$lsfamilles;


                    $optifamilles  ='';
                    foreach ($lsfamilles as $familles){
                        $optifamilles.=' <option value="'.$familles['id'].'">'.$familles['nom_famille'].'</option>';
                    }
                    //  print_r($data["articles"]);

                     $data["optifamilles"] =  $optifamilles;


                    $tdba = new ArticleDB();
                    $data["articles"] = $tdba->listeArticleByCategorieId($id);

                    $categorieObject  = new CategorieEntity();
                    $categorieObject ->setId($data["categorie"]['id']);
                    $categorieObject ->setNbr_produit_categorie(count($data["articles"] ));
                    /*$categorieObject ->setId_service($data["categorie"]['id_service']);
                    $categorieObject ->setId_famille($data["categorie"]['id_famille']);
                    $categorieObject ->setNom_categorie($data["categorie"]['nom_categorie']);

                    $categorieObject ->setFlag_categorie(0);
                    $categorieObject ->setValeurCategorie($data["categorie"]['valeur_categorie']);
                    */
                    if (count($data["articles"] )!=($data["categorie"]['nbr_produit_categorie'])){
                        $tdbc->nbrArticleupdate($categorieObject);

                    }

                    $data["nbr_produit_categorie"] =count($data["articles"] );

                    return $this->view->load("index/index", $data);

                   }








               }


            ?>

