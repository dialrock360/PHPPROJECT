<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:21=====================*/
 use libs\system\Controller;
  use src\entities\Ligne_producion as Ligne_producionEntity;
  use src\model\Ligne_producionDB;

  use src\entities\Article as ArticleEntity;
  use src\model\ArticleDB;


  use src\entities\Projet as ProjetEntity;
  use src\model\ProjetDB;


  class Ligne_producion extends Controller{

    /*==================Attribut list=====================*/
             private  $article;
             private  $articledb;
             private  $projet;
             private  $projetdb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->article = new ArticleEntity();
                 $this->articledb = new ArticleDB();
                 $this->projet = new ProjetEntity();
                 $this->projetdb = new ProjetDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("ligne_producion/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("ligne_producion/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new Ligne_producionDB();
                    $data["ligne_producion"] = $tdb->getLigne_producion($id);
                    return $this->view->load("ligne_producion/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new Ligne_producionDB();
                    $data["ligne_producions"] = $tdb->listeLigne_producion();
                    return $this->view->load("ligne_producion/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new Ligne_producionDB();
    /*==================Foreign list=====================*/
                    $data["articles"] = $this->articledb->listeArticle();
                    $data["projets"] = $this->projetdb->listeProjet();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_article)) {
                    $ligne_producionObject  = new Ligne_producionEntity();
                    $ligne_producionObject ->setId_article($id_article);
                    $ligne_producionObject ->setId_projet($id_projet);
                    $ligne_producionObject ->setPxa_ligne_producion($pxa_ligne_producion);
                    $ligne_producionObject ->setQnt_ligne_producion($qnt_ligne_producion);
                    $ligne_producionObject ->setMts_ligne_producion($mts_ligne_producion);
                    $ligne_producionObject ->setPosition_ligne_producion($position_ligne_producion);
                    $ok = $tdb->addLigne_producion($ligne_producionObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("ligne_producion/add", $data);
            }else{
                return $this->view->load("ligne_producion/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new Ligne_producionDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_article)) {
                    $ligne_producionObject  = new Ligne_producionEntity();
                    $ligne_producionObject ->setId($id);
                    $ligne_producionObject ->setId_article($id_article);
                    $ligne_producionObject ->setId_projet($id_projet);
                    $ligne_producionObject ->setPxa_ligne_producion($pxa_ligne_producion);
                    $ligne_producionObject ->setQnt_ligne_producion($qnt_ligne_producion);
                    $ligne_producionObject ->setMts_ligne_producion($mts_ligne_producion);
                    $ligne_producionObject ->setPosition_ligne_producion($position_ligne_producion);
                    $ok = $tdb->updateLigne_producion($ligne_producionObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new Ligne_producionDB();
            			//Supression
            			$tdb->deleteLigne_producion($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new Ligne_producionDB();
    /*==================Foreign list=====================*/
                    $data["articles"] = $this->articledb->listeArticle();
                    $data["projets"] = $this->projetdb->listeProjet();
            			//Supression
            			$data["ligne_producion"] = $tdb->getLigne_producion($id);
            			//chargement de la vue edit.html
                    return $this->view->load("ligne_producion/edit", $data);
                   }




                   



               }


            ?>

