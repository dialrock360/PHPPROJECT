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
  use src\entities\Conger as CongerEntity;
  use src\model\CongerDB;

  use src\entities\Salarier as SalarierEntity;
  use src\model\SalarierDB;


  use src\entities\Type_conger as Type_congerEntity;
  use src\model\Type_congerDB;


  class Conger extends Controller{

    /*==================Attribut list=====================*/
             private  $salarier;
             private  $salarierdb;
             private  $type_conger;
             private  $type_congerdb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->salarier = new SalarierEntity();
                 $this->salarierdb = new SalarierDB();
                 $this->type_conger = new Type_congerEntity();
                 $this->type_congerdb = new Type_congerDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("conger/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("conger/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get(){
                    //Instanciation du model
                    $tdb = new CongerDB();
                    $data["conger"] = $tdb->getConger();
                    return $this->view->load("conger/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new CongerDB();
                    $data["congers"] = $tdb->listeConger();
                    return $this->view->load("conger/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new CongerDB();
    /*==================Foreign list=====================*/
                    $data["salariers"] = $this->salarierdb->listeSalarier();
                    $data["type_congers"] = $this->type_congerdb->listeType_conger();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($date_debut)) {
                    $congerObject  = new CongerEntity();
                    $congerObject ->setDate_debut($date_debut);
                    $congerObject ->setDate_fin($date_fin);
                    $congerObject ->setStatus_conger($status_conger);
                    $congerObject ->setJustificatif($justificatif);
                    $congerObject ->setConger_payer($conger_payer);
                    $congerObject ->setSalarier_id($salarier_id);
                    $congerObject ->setType_conger_id($type_conger_id);
                    $ok = $tdb->addConger($congerObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("conger/add", $data);
            }else{
                return $this->view->load("conger/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new CongerDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($date_debut)) {
                    $congerObject  = new CongerEntity();
                    $congerObject ->setId($id);
                    $congerObject ->setDate_debut($date_debut);
                    $congerObject ->setDate_fin($date_fin);
                    $congerObject ->setStatus_conger($status_conger);
                    $congerObject ->setJustificatif($justificatif);
                    $congerObject ->setConger_payer($conger_payer);
                    $congerObject ->setSalarier_id($salarier_id);
                    $congerObject ->setType_conger_id($type_conger_id);
                    $ok = $tdb->updateConger($congerObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete(){
              //Instanciation du model
                    $tdb = new CongerDB();
            			//Supression
            			$tdb->deleteConger();
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit(){
                        //Instanciation du model
                       $tdb = new CongerDB();
    /*==================Foreign list=====================*/
                    $data["salariers"] = $this->salarierdb->listeSalarier();
                    $data["type_congers"] = $this->type_congerdb->listeType_conger();
            			//Supression
            			$data["conger"] = $tdb->getConger();
            			//chargement de la vue edit.html
                    return $this->view->load("conger/edit", $data);
                   }




                   



               }


            ?>

