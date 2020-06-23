<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:20=====================*/
 use libs\system\Controller;
  use src\entities\Ligne_mouvement as Ligne_mouvementEntity;
  use src\model\Ligne_mouvementDB;

  use src\entities\Article as ArticleEntity;
  use src\model\ArticleDB;


  use src\entities\Mouvement as MouvementEntity;
  use src\model\MouvementDB;


  class Ligne_mouvement extends Controller{

    /*==================Attribut list=====================*/
             private  $article;
             private  $articledb;
             private  $mouvement;
             private  $mouvementdb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->article = new ArticleEntity();
                 $this->articledb = new ArticleDB();
                 $this->mouvement = new MouvementEntity();
                 $this->mouvementdb = new MouvementDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("ligne_mouvement/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("ligne_mouvement/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new Ligne_mouvementDB();
                    $data["ligne_mouvement"] = $tdb->getLigne_mouvement($id);
                    return $this->view->load("ligne_mouvement/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new Ligne_mouvementDB();
                    $data["ligne_mouvements"] = $tdb->listeLigne_mouvement();
                    return $this->view->load("ligne_mouvement/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new Ligne_mouvementDB();
    /*==================Foreign list=====================*/
                    $data["articles"] = $this->articledb->listeArticle();
                    $data["mouvements"] = $this->mouvementdb->listeMouvement();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_mouvement)) {
                    $ligne_mouvementObject  = new Ligne_mouvementEntity();
                    $ligne_mouvementObject ->setId_mouvement($id_mouvement);
                    $ligne_mouvementObject ->setId_article($id_article);
                    $ligne_mouvementObject ->setPu_ligne_mouvement($pu_ligne_mouvement);
                    $ligne_mouvementObject ->setQnt_ligne_mouvement($qnt_ligne_mouvement);
                    $ligne_mouvementObject ->setMts_ligne_mouvement($mts_ligne_mouvement);
                    $ligne_mouvementObject ->setPosition_ligne_mouvement($position_ligne_mouvement);
                    $ligne_mouvementObject ->setDesignation_ligne_mouvement($designation_ligne_mouvement);
                    $ligne_mouvementObject ->setConditionement_ligne_mouvement($conditionement_ligne_mouvement);
                    $ok = $tdb->addLigne_mouvement($ligne_mouvementObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("ligne_mouvement/add", $data);
            }else{
                return $this->view->load("ligne_mouvement/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new Ligne_mouvementDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_mouvement)) {
                    $ligne_mouvementObject  = new Ligne_mouvementEntity();
                    $ligne_mouvementObject ->setId($id);
                    $ligne_mouvementObject ->setId_mouvement($id_mouvement);
                    $ligne_mouvementObject ->setId_article($id_article);
                    $ligne_mouvementObject ->setPu_ligne_mouvement($pu_ligne_mouvement);
                    $ligne_mouvementObject ->setQnt_ligne_mouvement($qnt_ligne_mouvement);
                    $ligne_mouvementObject ->setMts_ligne_mouvement($mts_ligne_mouvement);
                    $ligne_mouvementObject ->setPosition_ligne_mouvement($position_ligne_mouvement);
                    $ligne_mouvementObject ->setDesignation_ligne_mouvement($designation_ligne_mouvement);
                    $ligne_mouvementObject ->setConditionement_ligne_mouvement($conditionement_ligne_mouvement);
                    $ok = $tdb->updateLigne_mouvement($ligne_mouvementObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new Ligne_mouvementDB();
            			//Supression
            			$tdb->deleteLigne_mouvement($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new Ligne_mouvementDB();
    /*==================Foreign list=====================*/
                    $data["articles"] = $this->articledb->listeArticle();
                    $data["mouvements"] = $this->mouvementdb->listeMouvement();
            			//Supression
            			$data["ligne_mouvement"] = $tdb->getLigne_mouvement($id);
            			//chargement de la vue edit.html
                    return $this->view->load("ligne_mouvement/edit", $data);
                   }




                   



               }


            ?>

