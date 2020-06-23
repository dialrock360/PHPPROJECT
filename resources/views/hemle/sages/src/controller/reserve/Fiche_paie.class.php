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
  use src\entities\Fiche_paie as Fiche_paieEntity;
  use src\model\Fiche_paieDB;

  use src\entities\Salarier as SalarierEntity;
  use src\model\SalarierDB;


  class Fiche_paie extends Controller{

    /*==================Attribut list=====================*/
             private  $salarier;
             private  $salarierdb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->salarier = new SalarierEntity();
                 $this->salarierdb = new SalarierDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("fiche_paie/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("fiche_paie/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new Fiche_paieDB();
                    $data["fiche_paie"] = $tdb->getFiche_paie($id);
                    return $this->view->load("fiche_paie/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new Fiche_paieDB();
                    $data["fiche_paies"] = $tdb->listeFiche_paie();
                    return $this->view->load("fiche_paie/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new Fiche_paieDB();
    /*==================Foreign list=====================*/
                    $data["salariers"] = $this->salarierdb->listeSalarier();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($date_fiche_paie)) {
                    $fiche_paieObject  = new Fiche_paieEntity();
                    $fiche_paieObject ->setDate_fiche_paie($date_fiche_paie);
                    $fiche_paieObject ->setMois_payer($mois_payer);
                    $fiche_paieObject ->setEst_payer($est_payer);
                    $fiche_paieObject ->setSalarier_id($salarier_id);
                    $ok = $tdb->addFiche_paie($fiche_paieObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("fiche_paie/add", $data);
            }else{
                return $this->view->load("fiche_paie/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new Fiche_paieDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($date_fiche_paie)) {
                    $fiche_paieObject  = new Fiche_paieEntity();
                    $fiche_paieObject ->setId($id);
                    $fiche_paieObject ->setDate_fiche_paie($date_fiche_paie);
                    $fiche_paieObject ->setMois_payer($mois_payer);
                    $fiche_paieObject ->setEst_payer($est_payer);
                    $fiche_paieObject ->setSalarier_id($salarier_id);
                    $ok = $tdb->updateFiche_paie($fiche_paieObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new Fiche_paieDB();
            			//Supression
            			$tdb->deleteFiche_paie($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new Fiche_paieDB();
    /*==================Foreign list=====================*/
                    $data["salariers"] = $this->salarierdb->listeSalarier();
            			//Supression
            			$data["fiche_paie"] = $tdb->getFiche_paie($id);
            			//chargement de la vue edit.html
                    return $this->view->load("fiche_paie/edit", $data);
                   }




                   



               }


            ?>

