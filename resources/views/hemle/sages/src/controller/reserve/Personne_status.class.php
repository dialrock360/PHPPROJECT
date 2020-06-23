<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:22=====================*/
 use libs\system\Controller;
  use src\entities\Personne_status as Personne_statusEntity;
  use src\model\Personne_statusDB;

  use src\entities\Personne as PersonneEntity;
  use src\model\PersonneDB;


  use src\entities\Status as StatusEntity;
  use src\model\StatusDB;


  class Personne_status extends Controller{

    /*==================Attribut list=====================*/
             private  $personne;
             private  $personnedb;
             private  $status;
             private  $statusdb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->personne = new PersonneEntity();
                 $this->personnedb = new PersonneDB();
                 $this->status = new StatusEntity();
                 $this->statusdb = new StatusDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("personne_status/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $personne_id){
                    $data["personne_id"] = $personne_id;
                    return $this->view->load("personne_status/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($personne_id,$status_id){
                    //Instanciation du model
                    $tdb = new Personne_statusDB();
                    $data["personne_status"] = $tdb->getPersonne_status($personne_id,$status_id);
                    return $this->view->load("personne_status/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new Personne_statusDB();
                    $data["personne_statuss"] = $tdb->listePersonne_status();
                    return $this->view->load("personne_status/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new Personne_statusDB();
    /*==================Foreign list=====================*/
                    $data["personnes"] = $this->personnedb->listePersonne();
                    $data["statuss"] = $this->statusdb->listeStatus();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($status_id)) {
                    $personne_statusObject  = new Personne_statusEntity();
                    $personne_statusObject ->setPersonne_id($personne_id);
                    $personne_statusObject ->setStatus_id($status_id);
                    $ok = $tdb->addPersonne_status($personne_statusObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("personne_status/add", $data);
            }else{
                return $this->view->load("personne_status/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new Personne_statusDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($status_id)) {
                    $personne_statusObject  = new Personne_statusEntity();
                    $personne_statusObject ->setPersonne_id($personne_id);
                    $personne_statusObject ->setStatus_id($status_id);
                    $ok = $tdb->updatePersonne_status($personne_statusObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($personne_id,$status_id){
              //Instanciation du model
                    $tdb = new Personne_statusDB();
            			//Supression
            			$tdb->deletePersonne_status($personne_id,$status_id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($personne_id,$status_id){
                        //Instanciation du model
                       $tdb = new Personne_statusDB();
    /*==================Foreign list=====================*/
                    $data["personnes"] = $this->personnedb->listePersonne();
                    $data["statuss"] = $this->statusdb->listeStatus();
            			//Supression
            			$data["personne_status"] = $tdb->getPersonne_status($personne_id,$status_id);
            			//chargement de la vue edit.html
                    return $this->view->load("personne_status/edit", $data);
                   }




                   



               }


            ?>

