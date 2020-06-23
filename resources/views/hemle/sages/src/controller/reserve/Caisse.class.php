<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:17=====================*/
 use libs\system\Controller;
  use src\entities\Caisse as CaisseEntity;
  use src\model\CaisseDB;

  use src\entities\Service as ServiceEntity;
  use src\model\ServiceDB;


  class Caisse extends Controller{

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
                    return $this->view->load("caisse/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("caisse/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new CaisseDB();
                    $data["caisse"] = $tdb->getCaisse($id);
                    return $this->view->load("caisse/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new CaisseDB();
                    $data["caisses"] = $tdb->listeCaisse();
                    return $this->view->load("caisse/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new CaisseDB();
    /*==================Foreign list=====================*/
                    $data["services"] = $this->servicedb->listeService();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_service)) {
                    $caisseObject  = new CaisseEntity();
                    $caisseObject ->setId_service($id_service);
                    $caisseObject ->setDate_caisse($date_caisse);
                    $caisseObject ->setSolde_caisse($solde_caisse);
                    $caisseObject ->setDepense_caisse($depense_caisse);
                    $caisseObject ->setGain_caisse($gain_caisse);
                    $caisseObject ->setFlag_caisse($flag_caisse);
                    $ok = $tdb->addCaisse($caisseObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("caisse/add", $data);
            }else{
                return $this->view->load("caisse/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new CaisseDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_service)) {
                    $caisseObject  = new CaisseEntity();
                    $caisseObject ->setId($id);
                    $caisseObject ->setId_service($id_service);
                    $caisseObject ->setDate_caisse($date_caisse);
                    $caisseObject ->setSolde_caisse($solde_caisse);
                    $caisseObject ->setDepense_caisse($depense_caisse);
                    $caisseObject ->setGain_caisse($gain_caisse);
                    $caisseObject ->setFlag_caisse($flag_caisse);
                    $ok = $tdb->updateCaisse($caisseObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new CaisseDB();
            			//Supression
            			$tdb->deleteCaisse($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new CaisseDB();
    /*==================Foreign list=====================*/
                    $data["services"] = $this->servicedb->listeService();
            			//Supression
            			$data["caisse"] = $tdb->getCaisse($id);
            			//chargement de la vue edit.html
                    return $this->view->load("caisse/edit", $data);
                   }




                   



               }


            ?>

