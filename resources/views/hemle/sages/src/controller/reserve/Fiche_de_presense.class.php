<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:19=====================*/
 use libs\system\Controller;
  use src\entities\Fiche_de_presense as Fiche_de_presenseEntity;
  use src\model\Fiche_de_presenseDB;

  use src\entities\Fiche_paie as Fiche_paieEntity;
  use src\model\Fiche_paieDB;


  class Fiche_de_presense extends Controller{

    /*==================Attribut list=====================*/
             private  $fiche_paie;
             private  $fiche_paiedb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->fiche_paie = new Fiche_paieEntity();
                 $this->fiche_paiedb = new Fiche_paieDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("fiche_de_presense/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("fiche_de_presense/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new Fiche_de_presenseDB();
                    $data["fiche_de_presense"] = $tdb->getFiche_de_presense($id);
                    return $this->view->load("fiche_de_presense/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new Fiche_de_presenseDB();
                    $data["fiche_de_presenses"] = $tdb->listeFiche_de_presense();
                    return $this->view->load("fiche_de_presense/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new Fiche_de_presenseDB();
    /*==================Foreign list=====================*/
                    $data["fiche_paies"] = $this->fiche_paiedb->listeFiche_paie();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($present)) {
                    $fiche_de_presenseObject  = new Fiche_de_presenseEntity();
                    $fiche_de_presenseObject ->setPresent($present);
                    $fiche_de_presenseObject ->setAnne_fiche($anne_fiche);
                    $fiche_de_presenseObject ->setDate_fiche($date_fiche);
                    $fiche_de_presenseObject ->setHeur_arrive($heur_arrive);
                    $fiche_de_presenseObject ->setHeur_depart($heur_depart);
                    $fiche_de_presenseObject ->setNbr_heur($nbr_heur);
                    $fiche_de_presenseObject ->setFiche_paie_id($fiche_paie_id);
                    $ok = $tdb->addFiche_de_presense($fiche_de_presenseObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("fiche_de_presense/add", $data);
            }else{
                return $this->view->load("fiche_de_presense/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new Fiche_de_presenseDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($present)) {
                    $fiche_de_presenseObject  = new Fiche_de_presenseEntity();
                    $fiche_de_presenseObject ->setId($id);
                    $fiche_de_presenseObject ->setPresent($present);
                    $fiche_de_presenseObject ->setAnne_fiche($anne_fiche);
                    $fiche_de_presenseObject ->setDate_fiche($date_fiche);
                    $fiche_de_presenseObject ->setHeur_arrive($heur_arrive);
                    $fiche_de_presenseObject ->setHeur_depart($heur_depart);
                    $fiche_de_presenseObject ->setNbr_heur($nbr_heur);
                    $fiche_de_presenseObject ->setFiche_paie_id($fiche_paie_id);
                    $ok = $tdb->updateFiche_de_presense($fiche_de_presenseObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new Fiche_de_presenseDB();
            			//Supression
            			$tdb->deleteFiche_de_presense($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new Fiche_de_presenseDB();
    /*==================Foreign list=====================*/
                    $data["fiche_paies"] = $this->fiche_paiedb->listeFiche_paie();
            			//Supression
            			$data["fiche_de_presense"] = $tdb->getFiche_de_presense($id);
            			//chargement de la vue edit.html
                    return $this->view->load("fiche_de_presense/edit", $data);
                   }




                   



               }


            ?>

