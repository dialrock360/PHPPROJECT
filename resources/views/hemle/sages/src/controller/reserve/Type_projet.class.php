<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 08-11-2019 11:59:42=====================*/
 use libs\system\Controller;
  use src\entities\Type_projet as Type_projetEntity;
  use src\model\Type_projetDB;

  use src\entities\Service as ServiceEntity;
  use src\model\ServiceDB;


  class Type_projet extends Controller{

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
                    return $this->view->load("type_projet/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("type_projet/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new Type_projetDB();
                    $data["type_projet"] = $tdb->getType_projet($id);
                    return $this->view->load("type_projet/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new Type_projetDB();
                    $data["type_projets"] = $tdb->listeType_projet();
                    return $this->view->load("type_projet/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new Type_projetDB();
    /*==================Foreign list=====================*/
                    $data["services"] = $this->servicedb->listeService();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_service)) {
                    $type_projetObject  = new Type_projetEntity();
                    $type_projetObject ->setId_service($id_service);
                    $type_projetObject ->setNom_type_projet($nom_type_projet);
                    $ok = $tdb->addType_projet($type_projetObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("type_projet/add", $data);
            }else{
                return $this->view->load("type_projet/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new Type_projetDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_service)) {
                    $type_projetObject  = new Type_projetEntity();
                    $type_projetObject ->setId($id);
                    $type_projetObject ->setId_service($id_service);
                    $type_projetObject ->setNom_type_projet($nom_type_projet);
                    $ok = $tdb->updateType_projet($type_projetObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new Type_projetDB();
            			//Supression
            			$tdb->deleteType_projet($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new Type_projetDB();
    /*==================Foreign list=====================*/
                    $data["services"] = $this->servicedb->listeService();
            			//Supression
            			$data["type_projet"] = $tdb->getType_projet($id);
            			//chargement de la vue edit.html
                    return $this->view->load("type_projet/edit", $data);
                   }




                   



               }


            ?>

