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
  use src\entities\Frontend as FrontendEntity;
  use src\model\FrontendDB;

  use src\entities\Service as ServiceEntity;
  use src\model\ServiceDB;


  class Frontend extends Controller{

    /*==================Attribut list=====================*/
             private  $service;
             private  $servicedb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->service = new ServiceEntity();
                 $this->servicedb = new ServiceDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("frontend/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("frontend/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new FrontendDB();
                    $data["frontend"] = $tdb->getFrontend($id);
                    return $this->view->load("frontend/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new FrontendDB();
                    $data["frontends"] = $tdb->listeFrontend();
                    return $this->view->load("frontend/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new FrontendDB();
    /*==================Foreign list=====================*/
                    $data["services"] = $this->servicedb->listeService();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_service)) {
                    $frontendObject  = new FrontendEntity();
                    $frontendObject ->setId_service($id_service);
                    $frontendObject ->setLibele($libele);
                    $frontendObject ->setSlidebar($slidebar);
                    $frontendObject ->setId_slidebar($id_slidebar);
                    $frontendObject ->setClasse_slidebar($classe_slidebar);
                    $frontendObject ->setNmain($nmain);
                    $frontendObject ->setVmain($vmain);
                    $frontendObject ->setSkin($skin);
                    $frontendObject ->setTheme($theme);
                    $frontendObject ->setCible($cible);
                    $frontendObject ->setSection($section);
                    $ok = $tdb->addFrontend($frontendObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("frontend/add", $data);
            }else{
                return $this->view->load("frontend/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new FrontendDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_service)) {
                    $frontendObject  = new FrontendEntity();
                    $frontendObject ->setId($id);
                    $frontendObject ->setId_service($id_service);
                    $frontendObject ->setLibele($libele);
                    $frontendObject ->setSlidebar($slidebar);
                    $frontendObject ->setId_slidebar($id_slidebar);
                    $frontendObject ->setClasse_slidebar($classe_slidebar);
                    $frontendObject ->setNmain($nmain);
                    $frontendObject ->setVmain($vmain);
                    $frontendObject ->setSkin($skin);
                    $frontendObject ->setTheme($theme);
                    $frontendObject ->setCible($cible);
                    $frontendObject ->setSection($section);
                    $ok = $tdb->updateFrontend($frontendObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new FrontendDB();
            			//Supression
            			$tdb->deleteFrontend($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new FrontendDB();
    /*==================Foreign list=====================*/
                    $data["services"] = $this->servicedb->listeService();
            			//Supression
            			$data["frontend"] = $tdb->getFrontend($id);
            			//chargement de la vue edit.html
                    return $this->view->load("frontend/edit", $data);
                   }




                   



               }


            ?>

