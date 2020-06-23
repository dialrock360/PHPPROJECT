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
  use src\entities\Modepaie as ModepaieEntity;
  use src\model\ModepaieDB;

  use src\entities\Salarier as SalarierEntity;
  use src\model\SalarierDB;


  class Modepaie extends Controller{

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
                    return $this->view->load("modepaie/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("modepaie/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new ModepaieDB();
                    $data["modepaie"] = $tdb->getModepaie($id);
                    return $this->view->load("modepaie/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new ModepaieDB();
                    $data["modepaies"] = $tdb->listeModepaie();
                    return $this->view->load("modepaie/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new ModepaieDB();
    /*==================Foreign list=====================*/
                    $data["salariers"] = $this->salarierdb->listeSalarier();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($typepaie)) {
                    $modepaieObject  = new ModepaieEntity();
                    $modepaieObject ->setTypepaie($typepaie);
                    $modepaieObject ->setDomiciliation($domiciliation);
                    $modepaieObject ->setIban($iban);
                    $modepaieObject ->setSalarier_id($salarier_id);
                    $ok = $tdb->addModepaie($modepaieObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("modepaie/add", $data);
            }else{
                return $this->view->load("modepaie/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new ModepaieDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($typepaie)) {
                    $modepaieObject  = new ModepaieEntity();
                    $modepaieObject ->setId($id);
                    $modepaieObject ->setTypepaie($typepaie);
                    $modepaieObject ->setDomiciliation($domiciliation);
                    $modepaieObject ->setIban($iban);
                    $modepaieObject ->setSalarier_id($salarier_id);
                    $ok = $tdb->updateModepaie($modepaieObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new ModepaieDB();
            			//Supression
            			$tdb->deleteModepaie($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new ModepaieDB();
    /*==================Foreign list=====================*/
                    $data["salariers"] = $this->salarierdb->listeSalarier();
            			//Supression
            			$data["modepaie"] = $tdb->getModepaie($id);
            			//chargement de la vue edit.html
                    return $this->view->load("modepaie/edit", $data);
                   }




                   



               }


            ?>

