<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:18=====================*/
 use libs\system\Controller;
  use src\entities\Departement as DepartementEntity;
  use src\model\DepartementDB;

  use src\entities\Service as ServiceEntity;
  use src\model\ServiceDB;


  class Departement extends Controller{

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
                    return $this->view->load("departement/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("departement/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new DepartementDB();
                    $data["departement"] = $tdb->getDepartement($id);
                    return $this->view->load("departement/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new DepartementDB();
                    $data["departements"] = $tdb->listeDepartement();
                    return $this->view->load("departement/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new DepartementDB();
    /*==================Foreign list=====================*/
                    $data["services"] = $this->servicedb->listeService();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_service)) {
                    $departementObject  = new DepartementEntity();
                    $departementObject ->setId_service($id_service);
                    $departementObject ->setNom_departement($nom_departement);
                    $departementObject ->setNbr_employee($nbr_employee);
                    $departementObject ->setJour_ouvrable($jour_ouvrable);
                    $departementObject ->setId_chefdepartement($id_chefdepartement);
                    $departementObject ->setInfo_departement($info_departement);
                    $departementObject ->setFlag_departement($flag_departement);
                    $ok = $tdb->addDepartement($departementObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("departement/add", $data);
            }else{
                return $this->view->load("departement/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new DepartementDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_service)) {
                    $departementObject  = new DepartementEntity();
                    $departementObject ->setId($id);
                    $departementObject ->setId_service($id_service);
                    $departementObject ->setNom_departement($nom_departement);
                    $departementObject ->setNbr_employee($nbr_employee);
                    $departementObject ->setJour_ouvrable($jour_ouvrable);
                    $departementObject ->setId_chefdepartement($id_chefdepartement);
                    $departementObject ->setInfo_departement($info_departement);
                    $departementObject ->setFlag_departement($flag_departement);
                    $ok = $tdb->updateDepartement($departementObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new DepartementDB();
            			//Supression
            			$tdb->deleteDepartement($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new DepartementDB();
    /*==================Foreign list=====================*/
                    $data["services"] = $this->servicedb->listeService();
            			//Supression
            			$data["departement"] = $tdb->getDepartement($id);
            			//chargement de la vue edit.html
                    return $this->view->load("departement/edit", $data);
                   }




                   



               }


            ?>

