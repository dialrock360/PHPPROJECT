<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 17-11-2019 15:57:43=====================*/
 use libs\system\Controller;
  use src\entities\Conditionement_article as Conditionement_articleEntity;
  use src\model\Conditionement_articleDB;

  use src\entities\Article as ArticleEntity;
  use src\model\ArticleDB;


  use src\entities\Conditionement as ConditionementEntity;
  use src\model\ConditionementDB;



  class Conditionement_article extends Controller{

    /*==================Attribut list=====================*/
             private  $article;
             private  $articledb;
             private  $conditionement;
             private  $conditionementdb;
             private  $conditionementunite;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->article = new ArticleEntity();
                 $this->articledb = new ArticleDB();
                 $this->conditionement = new ConditionementEntity();
                 $this->conditionementdb = new ConditionementDB();
                 $this->conditionementunite = new ConditionementEntity();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("conditionement_article/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("conditionement_article/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new Conditionement_articleDB();
                    $data["conditionement_article"] = $tdb->getConditionement_article($id);
                    return $this->view->load("conditionement_article/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new Conditionement_articleDB();
                    $data["conditionement_articles"] = $tdb->listeConditionement_article();
                    return $this->view->load("conditionement_article/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new Conditionement_articleDB();
    /*==================Foreign list=====================*/
                    $data["articles"] = $this->articledb->listeArticle();
                    $data["conditionementunites"] = $this->conditionementdb->listeConditionement();
                    $data["conditionements"] =  $data["conditionementunites"];
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_article)) {
                    $conditionement_articleObject  = new Conditionement_articleEntity();
                    $conditionement_articleObject ->setId_article($id_article);
                    $conditionement_articleObject ->setId_conditionement($id_conditionement);
                    $conditionement_articleObject ->setQnt_unite($qnt_unite);
                    $conditionement_articleObject ->setPxa_u_article_en_stock($pxa_u_article_en_stock);
                    $conditionement_articleObject ->setCout_achat_conditionement_article($cout_achat_conditionement_article);
                    $conditionement_articleObject ->setPxv_u_conditionement_article($pxv_u_conditionement_article);
                    $conditionement_articleObject ->setPxv_bar_conditionement_article($pxv_bar_conditionement_article);
                    $conditionement_articleObject ->setPxv_conditionement_article($pxv_conditionement_article);
                    $conditionement_articleObject ->setId_unite($id_unite);
                    $ok = $tdb->addConditionement_article($conditionement_articleObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("conditionement_article/add", $data);
            }else{
                return $this->view->load("conditionement_article/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new Conditionement_articleDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_article)) {
                    $conditionement_articleObject  = new Conditionement_articleEntity();
                    $conditionement_articleObject ->setId($id);
                    $conditionement_articleObject ->setId_article($id_article);
                    $conditionement_articleObject ->setId_conditionement($id_conditionement);
                    $conditionement_articleObject ->setQnt_unite($qnt_unite);
                    $conditionement_articleObject ->setPxa_u_article_en_stock($pxa_u_article_en_stock);
                    $conditionement_articleObject ->setCout_achat_conditionement_article($cout_achat_conditionement_article);
                    $conditionement_articleObject ->setPxv_u_conditionement_article($pxv_u_conditionement_article);
                    $conditionement_articleObject ->setPxv_bar_conditionement_article($pxv_bar_conditionement_article);
                    $conditionement_articleObject ->setPxv_conditionement_article($pxv_conditionement_article);
                    $conditionement_articleObject ->setId_unite($id_unite);
                    $ok = $tdb->updateConditionement_article($conditionement_articleObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new Conditionement_articleDB();
            			//Supression
            			$tdb->deleteConditionement_article($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new Conditionement_articleDB();
    /*==================Foreign list=====================*/
                    $data["articles"] = $this->articledb->listeArticle();
                    $data["conditionements"] = $this->conditionementdb->listeConditionement();
                    $data["conditionements"] = $this->conditionementdb->listeConditionement();
            			//Supression
            			$data["conditionement_article"] = $tdb->getConditionement_article($id);
            			//chargement de la vue edit.html
                    return $this->view->load("conditionement_article/edit", $data);
                   }




                   



               }


            ?>

