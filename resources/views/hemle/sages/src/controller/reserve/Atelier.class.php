<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 23-10-2019 06:10:43=====================*/
 use libs\system\Controller;
  use src\entities\Atelier as AtelierEntity;
  use src\model\AtelierDB;

  use src\entities\Service as ServiceEntity;
  use src\model\ServiceDB;


  class Atelier extends Controller{

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

      public function index($idservice){

          $data["view"] = 'Atelier';
          $data["curenview"] = 'Insertion D\'Atelier';
          $data["vewContent"] = 'formatelier';
          $data["vewContenttype"] = 'form';
          $data["pageheader"] = 'Novel Atelier';
          $data["pageoverview"] = 'Ajouter une Atelier';
          $data["active"] = 3;
          $tdb = new AtelierDB();
          $data["ateliers"] = $tdb->listeAtelierByServiceId($idservice);

          return $this->view->load("atelier/index", $data);

      }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("atelier/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new AtelierDB();
                    $data["atelier"] = $tdb->getAtelier($id);
                    return $this->view->load("atelier/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste($idservice){
                $data["view"] = 'Atelier';
                $data["curenview"] = 'Liste D\'Atelier';
                $data["vewContent"] = 'formatelier';
                $data["vewContenttype"] = 'table';
                $data["pageheader"] = 'Atelier';
                $data["pageoverview"] = 'Liste des Ateliers';
                $data["active"] = 3;
                $tdb = new AtelierDB();
                $data["ateliers"] = $tdb->listeAtelierByServiceId($idservice);

                return $this->view->load("atelier/index", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new AtelierDB();
    /*==================Foreign list=====================*/
                    $data["services"] = $this->servicedb->listeService();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_service)) {
                    $atelierObject  = new AtelierEntity();
                    $atelierObject ->setId_service($id_service);
                    $atelierObject ->setNom_atelier($nom_atelier);
                    $atelierObject ->setLs_employee_atelier($ls_employee_atelier);
                    $atelierObject ->setCoutmaindoeuve_atelier($coutmaindoeuve_atelier);
                    $atelierObject ->setFlag_atelier($flag_atelier);
                    $ok = $tdb->addAtelier($atelierObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("atelier/add", $data);
            }else{
                return $this->view->load("atelier/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new AtelierDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_service)) {
                    $atelierObject  = new AtelierEntity();
                    $atelierObject ->setId($id);
                    $atelierObject ->setId_service($id_service);
                    $atelierObject ->setNom_atelier($nom_atelier);
                    $atelierObject ->setLs_employee_atelier($ls_employee_atelier);
                    $atelierObject ->setCoutmaindoeuve_atelier($coutmaindoeuve_atelier);
                    $atelierObject ->setFlag_atelier($flag_atelier);
                    $ok = $tdb->updateAtelier($atelierObject );
                }
            }
            return $this->liste($id_service);
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new AtelierDB();
            			//Supression
            			$tdb->deleteAtelier($id);
            //Retour vers la liste
                    return $this->liste(1);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new AtelierDB();
    /*==================Foreign list=====================*/
                    $data["services"] = $this->servicedb->listeService();
            			//Supression
            			$data["atelier"] = $tdb->getAtelier($id);
            			//chargement de la vue edit.html
                    return $this->view->load("atelier/edit", $data);
                   }




                   



               }


            ?>

