<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 05-11-2019 09:59:47=====================*/
 use libs\system\Controller;
  use src\entities\Projet as ProjetEntity;
  use src\model\ProjetDB;

  use src\entities\Equipe as EquipeEntity;
  use src\model\EquipeDB;


  use src\entities\Programme as ProgrammeEntity;
  use src\model\ProgrammeDB;


  use src\entities\Type_projet as Type_projetEntity;
  use src\model\Type_projetDB;


  class Projet extends Controller{

    /*==================Attribut list=====================*/
             private  $equipe;
             private  $equipedb;
             private  $programme;
             private  $programmedb;
             private  $type_projet;
             private  $type_projetdb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->equipe = new EquipeEntity();
                 $this->equipedb = new EquipeDB();
                 $this->programme = new ProgrammeEntity();
                 $this->programmedb = new ProgrammeDB();
                 $this->type_projet = new Type_projetEntity();
                 $this->type_projetdb = new Type_projetDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){


                    $data["view"] = 'Projet';
                    $data["pageheader"] = 'Project Manager';
                    $data["vewContent"] = 'formprojet';
                    $data["vewContenttype"] = 'form';
                    $data["curenview"]= 'Gestion des projets';
                    $data["pageoverview"] = 'Ajouter un Projet';
                    $data["active"] = 5;

                    return $this->view->load("index/index", $data);
                }

      public function  projectliste() {

          $data["view"] = 'Projet';
          $data["pageoverview"] = 'Consulter les Projets';
          $data["vewContent"] = 'listeprojet';
          $data["vewContenttype"] = 'table';
          $data["pageheader"] = 'Liste des Projets';
          $data["curenview"] = '  Project List ';
          $data["active"] = 5;
          $tdb = new ProjetDB();
          $data["projets"] = $tdb->listeProjet();


          return $this->view->load("index/index", $data);
      }
      public function  equipe() {

          $data["view"] = 'Equipe';
          $data["pageoverview"] = '  Project Team ';
          $data["vewContent"] = 'listeequipe';
          $data["vewContenttype"] = 'table';
          $data["pageheader"] = 'Equipes des Projets';
          $data["curenview"] = 'Consulter les Equipes de Projets';
          $data["active"] = 5;


          return $this->view->load("index/index", $data);
      }

      public function  manage($idservice) {

          $data["view"] = 'Projet';
          $data["pageoverview"] = 'manager le Projet ';
          $data["vewContent"] = 'manageprojet';
          $data["vewContenttype"] = 'manage';
          $data["pageheader"] = 'Projets';
          $data["curenview"] =  '  Projet manager ';
          $data["active"] = 5;
          $tdb = new ProjetDB();
          $data["projets"] = $tdb->getProjet($idservice);


          return $this->view->load("index/index", $data);
      }
    /*------------------Methode production--------------------=*/

                public function production(){

                    $data["view"] = 'Production';
                     $data["pageheader"] = 'Manage Production Article';
                    $data["vewContent"] = 'formproduction';
                    $data["vewContenttype"] = 'form';
                    $data["curenview"]= 'Production D\'Article composés';
                    $data["pageoverview"] = 'Ajouter une Production';
                    $data["active"] = 3;
                    $tdb = new ProjetDB();

                    return $this->view->load("index/index", $data);
                }

                public function  productionliste() {

                    $data["view"] = 'Production';
                    $data["pageoverview"] = '  Productions List ';
                    $data["vewContent"] = 'listeproduction';
                    $data["vewContenttype"] = 'table';
                    $data["pageheader"] = 'Liste des Productions';
                    $data["curenview"] = 'Consulter les Productions';
                    $data["active"] = 3;
                    $tdb = new ProjetDB();
                    $data["productions"] = $tdb->listeProjet();

                    return $this->view->load("index/index", $data);
                }


    /*------------------Methode getID--------------------=*/

                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("projet/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new ProjetDB();
                    $data["projet"] = $tdb->getProjet($id);
                    return $this->view->load("projet/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new ProjetDB();
                    $data["projets"] = $tdb->listeProjet();
                    return $this->view->load("projet/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new ProjetDB();
    /*==================Foreign list=====================*/
                    $data["equipes"] = $this->equipedb->listeEquipe();
                    $data["programmes"] = $this->programmedb->listeProgramme();
                    $data["type_projets"] = $this->type_projetdb->listeType_projet();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_programme)) {
                    $projetObject  = new ProjetEntity();
                    $projetObject ->setId_programme($id_programme);
                    $projetObject ->setId_type_projet($id_type_projet);
                    $projetObject ->setId_equipe($id_equipe);
                    $projetObject ->setNom_projet($nom_projet);
                    $projetObject ->setCout_projet($cout_projet);
                    $projetObject ->setValeur_projet($valeur_projet);
                    $projetObject ->setDate_projet($date_projet);
                    $projetObject ->setDatefin_projet($datefin_projet);
                    $projetObject ->setColor_projet($color_projet);
                    $projetObject ->setEtat_projet($etat_projet);
                    $projetObject ->setFlag_projet($flag_projet);
                    $ok = $tdb->addProjet($projetObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("projet/add", $data);
            }else{
                return $this->view->load("projet/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new ProjetDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_programme)) {
                    $projetObject  = new ProjetEntity();
                    $projetObject ->setId($id);
                    $projetObject ->setId_programme($id_programme);
                    $projetObject ->setId_type_projet($id_type_projet);
                    $projetObject ->setId_equipe($id_equipe);
                    $projetObject ->setNom_projet($nom_projet);
                    $projetObject ->setCout_projet($cout_projet);
                    $projetObject ->setValeur_projet($valeur_projet);
                    $projetObject ->setDate_projet($date_projet);
                    $projetObject ->setDatefin_projet($datefin_projet);
                    $projetObject ->setColor_projet($color_projet);
                    $projetObject ->setEtat_projet($etat_projet);
                    $projetObject ->setFlag_projet($flag_projet);
                    $ok = $tdb->updateProjet($projetObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new ProjetDB();
            			//Supression
            			$tdb->deleteProjet($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new ProjetDB();
    /*==================Foreign list=====================*/
                    $data["equipes"] = $this->equipedb->listeEquipe();
                    $data["programmes"] = $this->programmedb->listeProgramme();
                    $data["type_projets"] = $this->type_projetdb->listeType_projet();
            			//Supression
            			$data["projet"] = $tdb->getProjet($id);
            			//chargement de la vue edit.html
                    return $this->view->load("projet/edit", $data);
                   }




                   



               }


            ?>

