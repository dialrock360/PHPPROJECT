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
  use src\entities\Type_mouvement as Type_mouvementEntity;
  use src\model\Type_mouvementDB;

  use src\entities\Service as ServiceEntity;
  use src\model\ServiceDB;


  class Type_mouvement extends Controller{

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
                    return $this->view->load("type_mouvement/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("type_mouvement/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new Type_mouvementDB();
                    $data["type_mouvement"] = $tdb->getType_mouvement($id);
                    return $this->view->load("type_mouvement/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new Type_mouvementDB();
                    $data["type_mouvements"] = $tdb->listeType_mouvement();
                    return $this->view->load("type_mouvement/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new Type_mouvementDB();
    /*==================Foreign list=====================*/
                    $data["services"] = $this->servicedb->listeService();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_service)) {
                    $type_mouvementObject  = new Type_mouvementEntity();
                    $type_mouvementObject ->setId_service($id_service);
                    $type_mouvementObject ->setNom_typemouvement($nom_typemouvement);
                    $type_mouvementObject ->setNavigation_typemouvement($navigation_typemouvement);
                    $ok = $tdb->addType_mouvement($type_mouvementObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("type_mouvement/add", $data);
            }else{
                return $this->view->load("type_mouvement/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new Type_mouvementDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_service)) {
                    $type_mouvementObject  = new Type_mouvementEntity();
                    $type_mouvementObject ->setId($id);
                    $type_mouvementObject ->setId_service($id_service);
                    $type_mouvementObject ->setNom_typemouvement($nom_typemouvement);
                    $type_mouvementObject ->setNavigation_typemouvement($navigation_typemouvement);
                    $ok = $tdb->updateType_mouvement($type_mouvementObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new Type_mouvementDB();
            			//Supression
            			$tdb->deleteType_mouvement($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new Type_mouvementDB();
    /*==================Foreign list=====================*/
                    $data["services"] = $this->servicedb->listeService();
            			//Supression
            			$data["type_mouvement"] = $tdb->getType_mouvement($id);
            			//chargement de la vue edit.html
                    return $this->view->load("type_mouvement/edit", $data);
                   }




                   



               }


            ?>

