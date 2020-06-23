<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:23=====================*/
 use libs\system\Controller;
  use src\entities\Piece_jointe as Piece_jointeEntity;
  use src\model\Piece_jointeDB;

  use src\entities\Tache as TacheEntity;
  use src\model\TacheDB;


  class Piece_jointe extends Controller{

    /*==================Attribut list=====================*/
             private  $tache;
             private  $tachedb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->tache = new TacheEntity();
                 $this->tachedb = new TacheDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("piece_jointe/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("piece_jointe/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new Piece_jointeDB();
                    $data["piece_jointe"] = $tdb->getPiece_jointe($id);
                    return $this->view->load("piece_jointe/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new Piece_jointeDB();
                    $data["piece_jointes"] = $tdb->listePiece_jointe();
                    return $this->view->load("piece_jointe/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new Piece_jointeDB();
    /*==================Foreign list=====================*/
                    $data["taches"] = $this->tachedb->listeTache();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_tache)) {
                    $piece_jointeObject  = new Piece_jointeEntity();
                    $piece_jointeObject ->setId_tache($id_tache);
                    $piece_jointeObject ->setPath_piece_jointe($path_piece_jointe);
                    $ok = $tdb->addPiece_jointe($piece_jointeObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("piece_jointe/add", $data);
            }else{
                return $this->view->load("piece_jointe/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new Piece_jointeDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_tache)) {
                    $piece_jointeObject  = new Piece_jointeEntity();
                    $piece_jointeObject ->setId($id);
                    $piece_jointeObject ->setId_tache($id_tache);
                    $piece_jointeObject ->setPath_piece_jointe($path_piece_jointe);
                    $ok = $tdb->updatePiece_jointe($piece_jointeObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new Piece_jointeDB();
            			//Supression
            			$tdb->deletePiece_jointe($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new Piece_jointeDB();
    /*==================Foreign list=====================*/
                    $data["taches"] = $this->tachedb->listeTache();
            			//Supression
            			$data["piece_jointe"] = $tdb->getPiece_jointe($id);
            			//chargement de la vue edit.html
                    return $this->view->load("piece_jointe/edit", $data);
                   }




                   



               }


            ?>

