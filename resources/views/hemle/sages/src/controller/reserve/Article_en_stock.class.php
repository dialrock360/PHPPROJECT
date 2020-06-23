<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 17-11-2019 15:57:42=====================*/
 use libs\system\Controller;
  use src\entities\Article_en_stock as Article_en_stockEntity;
  use src\model\Article_en_stockDB;

  use src\entities\Article as ArticleEntity;
  use src\model\ArticleDB;


  use src\entities\Conditionement_article as Conditionement_articleEntity;
  use src\model\Conditionement_articleDB;


  use src\entities\Stock as StockEntity;
  use src\model\StockDB;


  class Article_en_stock extends Controller{

    /*==================Attribut list=====================*/
             private  $article;
             private  $articledb;
             private  $conditionement_article;
             private  $conditionement_articledb;
             private  $stock;
             private  $stockdb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->article = new ArticleEntity();
                 $this->articledb = new ArticleDB();
                 $this->conditionement_article = new Conditionement_articleEntity();
                 $this->conditionement_articledb = new Conditionement_articleDB();
                 $this->stock = new StockEntity();
                 $this->stockdb = new StockDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("article_en_stock/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("article_en_stock/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new Article_en_stockDB();
                    $data["article_en_stock"] = $tdb->getArticle_en_stock($id);
                    return $this->view->load("article_en_stock/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new Article_en_stockDB();
                    $data["article_en_stocks"] = $tdb->listeArticle_en_stock();
                    return $this->view->load("article_en_stock/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new Article_en_stockDB();
    /*==================Foreign list=====================*/
                    $data["articles"] = $this->articledb->listeArticle();
                    $data["conditionement_articles"] = $this->conditionement_articledb->listeConditionement_article();
                    $data["stocks"] = $this->stockdb->listeStock();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($ref_article)) {
                    $article_en_stockObject  = new Article_en_stockEntity();
                    $article_en_stockObject ->setRef_article($ref_article);
                    $article_en_stockObject ->setId_article($id_article);
                    $article_en_stockObject ->setId_stock($id_stock);
                    $article_en_stockObject ->setId_conditionement_article($id_conditionement_article);
                    $article_en_stockObject ->setQnt_article_en_stock($qnt_article_en_stock);
                    $article_en_stockObject ->setValeur_article_en_stock($valeur_article_en_stock);
                    $article_en_stockObject ->setMin_qnt_article_en_stock($min_qnt_article_en_stock);
                    $article_en_stockObject ->setMax_qnt_article_en_stock($max_qnt_article_en_stock);
                    $ok = $tdb->addArticle_en_stock($article_en_stockObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("article_en_stock/add", $data);
            }else{
                return $this->view->load("article_en_stock/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new Article_en_stockDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($ref_article)) {
                    $article_en_stockObject  = new Article_en_stockEntity();
                    $article_en_stockObject ->setId($id);
                    $article_en_stockObject ->setRef_article($ref_article);
                    $article_en_stockObject ->setId_article($id_article);
                    $article_en_stockObject ->setId_stock($id_stock);
                    $article_en_stockObject ->setId_conditionement_article($id_conditionement_article);
                    $article_en_stockObject ->setQnt_article_en_stock($qnt_article_en_stock);
                    $article_en_stockObject ->setValeur_article_en_stock($valeur_article_en_stock);
                    $article_en_stockObject ->setMin_qnt_article_en_stock($min_qnt_article_en_stock);
                    $article_en_stockObject ->setMax_qnt_article_en_stock($max_qnt_article_en_stock);
                    $ok = $tdb->updateArticle_en_stock($article_en_stockObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new Article_en_stockDB();
            			//Supression
            			$tdb->deleteArticle_en_stock($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new Article_en_stockDB();
    /*==================Foreign list=====================*/
                    $data["articles"] = $this->articledb->listeArticle();
                    $data["conditionement_articles"] = $this->conditionement_articledb->listeConditionement_article();
                    $data["stocks"] = $this->stockdb->listeStock();
            			//Supression
            			$data["article_en_stock"] = $tdb->getArticle_en_stock($id);
            			//chargement de la vue edit.html
                    return $this->view->load("article_en_stock/edit", $data);
                   }




                   



               }


            ?>

