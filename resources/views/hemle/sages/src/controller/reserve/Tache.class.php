<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:24=====================*/
 use libs\system\Controller;
  use src\entities\Tache as TacheEntity;
  use src\model\TacheDB;

  use src\entities\Projet as ProjetEntity;
  use src\model\ProjetDB;


  use src\entities\Ligne_equipe_personne as Ligne_equipe_personneEntity;
  use src\model\Ligne_equipe_personneDB;


  class Tache extends Controller{

    /*==================Attribut list=====================*/
             private  $projet;
             private  $projetdb;
             private  $ligne_equipe_personne;
             private  $ligne_equipe_personnedb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->projet = new ProjetEntity();
                 $this->projetdb = new ProjetDB();
                 $this->ligne_equipe_personne = new Ligne_equipe_personneEntity();
                 $this->ligne_equipe_personnedb = new Ligne_equipe_personneDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("tache/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("tache/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new TacheDB();
                    $data["tache"] = $tdb->getTache($id);
                    return $this->view->load("tache/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new TacheDB();
                    $data["taches"] = $tdb->listeTache();
                    return $this->view->load("tache/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new TacheDB();
    /*==================Foreign list=====================*/
                    $data["projets"] = $this->projetdb->listeProjet();
                    $data["ligne_equipe_personnes"] = $this->ligne_equipe_personnedb->listeLigne_equipe_personne();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_projet)) {
                    $tacheObject  = new TacheEntity();
                    $tacheObject ->setId_projet($id_projet);
                    $tacheObject ->setNom_tache($nom_tache);
                    $tacheObject ->setCout_tache($cout_tache);
                    $tacheObject ->setDate_tache($date_tache);
                    $tacheObject ->setDatelimit_tache($datelimit_tache);
                    $tacheObject ->setEtiquette_tache($etiquette_tache);
                    $tacheObject ->setEtat_tache($etat_tache);
                    $tacheObject ->setId_responsable($id_responsable);
                    $tacheObject ->setInfo_tache($info_tache);
                    $ok = $tdb->addTache($tacheObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("tache/add", $data);
            }else{
                return $this->view->load("tache/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new TacheDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_projet)) {
                    $tacheObject  = new TacheEntity();
                    $tacheObject ->setId($id);
                    $tacheObject ->setId_projet($id_projet);
                    $tacheObject ->setNom_tache($nom_tache);
                    $tacheObject ->setCout_tache($cout_tache);
                    $tacheObject ->setDate_tache($date_tache);
                    $tacheObject ->setDatelimit_tache($datelimit_tache);
                    $tacheObject ->setEtiquette_tache($etiquette_tache);
                    $tacheObject ->setEtat_tache($etat_tache);
                    $tacheObject ->setId_responsable($id_responsable);
                    $tacheObject ->setInfo_tache($info_tache);
                    $ok = $tdb->updateTache($tacheObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new TacheDB();
            			//Supression
            			$tdb->deleteTache($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new TacheDB();
    /*==================Foreign list=====================*/
                    $data["projets"] = $this->projetdb->listeProjet();
                    $data["ligne_equipe_personnes"] = $this->ligne_equipe_personnedb->listeLigne_equipe_personne();
            			//Supression
            			$data["tache"] = $tdb->getTache($id);
            			//chargement de la vue edit.html
                    return $this->view->load("tache/edit", $data);
                   }




                   



               }


            ?>

