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
  use src\entities\Jour_ferier as Jour_ferierEntity;
  use src\model\Jour_ferierDB;

  use src\entities\Fiche_de_jours_ferier as Fiche_de_jours_ferierEntity;
  use src\model\Fiche_de_jours_ferierDB;


  class Jour_ferier extends Controller{

    /*==================Attribut list=====================*/
             private  $fiche_de_jours_ferier;
             private  $fiche_de_jours_ferierdb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->fiche_de_jours_ferier = new Fiche_de_jours_ferierEntity();
                 $this->fiche_de_jours_ferierdb = new Fiche_de_jours_ferierDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("jour_ferier/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("jour_ferier/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new Jour_ferierDB();
                    $data["jour_ferier"] = $tdb->getJour_ferier($id);
                    return $this->view->load("jour_ferier/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new Jour_ferierDB();
                    $data["jour_feriers"] = $tdb->listeJour_ferier();
                    return $this->view->load("jour_ferier/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new Jour_ferierDB();
    /*==================Foreign list=====================*/
                    $data["fiche_de_jours_feriers"] = $this->fiche_de_jours_ferierdb->listeFiche_de_jours_ferier();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($date_jour)) {
                    $jour_ferierObject  = new Jour_ferierEntity();
                    $jour_ferierObject ->setDate_jour($date_jour);
                    $jour_ferierObject ->setDescription($description);
                    $jour_ferierObject ->setFiche_jour_id($fiche_jour_id);
                    $ok = $tdb->addJour_ferier($jour_ferierObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("jour_ferier/add", $data);
            }else{
                return $this->view->load("jour_ferier/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new Jour_ferierDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($date_jour)) {
                    $jour_ferierObject  = new Jour_ferierEntity();
                    $jour_ferierObject ->setId($id);
                    $jour_ferierObject ->setDate_jour($date_jour);
                    $jour_ferierObject ->setDescription($description);
                    $jour_ferierObject ->setFiche_jour_id($fiche_jour_id);
                    $ok = $tdb->updateJour_ferier($jour_ferierObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new Jour_ferierDB();
            			//Supression
            			$tdb->deleteJour_ferier($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new Jour_ferierDB();
    /*==================Foreign list=====================*/
                    $data["fiche_de_jours_feriers"] = $this->fiche_de_jours_ferierdb->listeFiche_de_jours_ferier();
            			//Supression
            			$data["jour_ferier"] = $tdb->getJour_ferier($id);
            			//chargement de la vue edit.html
                    return $this->view->load("jour_ferier/edit", $data);
                   }




                   



               }


            ?>

