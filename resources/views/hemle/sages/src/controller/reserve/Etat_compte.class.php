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
  use src\entities\Etat_compte as Etat_compteEntity;
  use src\model\Etat_compteDB;

  use src\entities\Famille as FamilleEntity;
  use src\model\FamilleDB;


  use src\entities\Mouvement as MouvementEntity;
  use src\model\MouvementDB;


  class Etat_compte extends Controller{

    /*==================Attribut list=====================*/
             private  $famille;
             private  $familledb;
             private  $mouvement;
             private  $mouvementdb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->famille = new FamilleEntity();
                 $this->familledb = new FamilleDB();
                 $this->mouvement = new MouvementEntity();
                 $this->mouvementdb = new MouvementDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("etat_compte/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("etat_compte/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new Etat_compteDB();
                    $data["etat_compte"] = $tdb->getEtat_compte($id);
                    return $this->view->load("etat_compte/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new Etat_compteDB();
                    $data["etat_comptes"] = $tdb->listeEtat_compte();
                    return $this->view->load("etat_compte/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new Etat_compteDB();
    /*==================Foreign list=====================*/
                    $data["familles"] = $this->familledb->listeFamille();
                    $data["mouvements"] = $this->mouvementdb->listeMouvement();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_famille)) {
                    $etat_compteObject  = new Etat_compteEntity();
                    $etat_compteObject ->setId_famille($id_famille);
                    $etat_compteObject ->setId_mouvement($id_mouvement);
                    $etat_compteObject ->setDate_etat_compte($date_etat_compte);
                    $etat_compteObject ->setDepense_etat_compte($depense_etat_compte);
                    $etat_compteObject ->setGain_etat_compte($gain_etat_compte);
                    $ok = $tdb->addEtat_compte($etat_compteObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("etat_compte/add", $data);
            }else{
                return $this->view->load("etat_compte/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new Etat_compteDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_famille)) {
                    $etat_compteObject  = new Etat_compteEntity();
                    $etat_compteObject ->setId($id);
                    $etat_compteObject ->setId_famille($id_famille);
                    $etat_compteObject ->setId_mouvement($id_mouvement);
                    $etat_compteObject ->setDate_etat_compte($date_etat_compte);
                    $etat_compteObject ->setDepense_etat_compte($depense_etat_compte);
                    $etat_compteObject ->setGain_etat_compte($gain_etat_compte);
                    $ok = $tdb->updateEtat_compte($etat_compteObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new Etat_compteDB();
            			//Supression
            			$tdb->deleteEtat_compte($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new Etat_compteDB();
    /*==================Foreign list=====================*/
                    $data["familles"] = $this->familledb->listeFamille();
                    $data["mouvements"] = $this->mouvementdb->listeMouvement();
            			//Supression
            			$data["etat_compte"] = $tdb->getEtat_compte($id);
            			//chargement de la vue edit.html
                    return $this->view->load("etat_compte/edit", $data);
                   }




                   



               }


            ?>

