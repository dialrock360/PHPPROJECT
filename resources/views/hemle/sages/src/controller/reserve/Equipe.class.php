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
  use src\entities\Equipe as EquipeEntity;
  use src\model\EquipeDB;

  use src\entities\Personne as PersonneEntity;
  use src\model\PersonneDB;


  use src\entities\Projet as ProjetEntity;
  use src\model\ProjetDB;


  class Equipe extends Controller{

    /*==================Attribut list=====================*/
             private  $personne;
             private  $personnedb;
             private  $projet;
             private  $projetdb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->personne = new PersonneEntity();
                 $this->personnedb = new PersonneDB();
                 $this->projet = new ProjetEntity();
                 $this->projetdb = new ProjetDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("equipe/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("equipe/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new EquipeDB();
                    $data["equipe"] = $tdb->getEquipe($id);
                    return $this->view->load("equipe/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new EquipeDB();
                    $data["equipes"] = $tdb->listeEquipe();
                    return $this->view->load("equipe/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new EquipeDB();
    /*==================Foreign list=====================*/
                    $data["personnes"] = $this->personnedb->listePersonne();
                    $data["projets"] = $this->projetdb->listeProjet();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($nom_equipe)) {
                    $equipeObject  = new EquipeEntity();
                    $equipeObject ->setNom_equipe($nom_equipe);
                    $equipeObject ->setCout_maindoeuve($cout_maindoeuve);
                    $equipeObject ->setNbr_membre($nbr_membre);
                    $equipeObject ->setInfo_equipe($info_equipe);
                    $equipeObject ->setId_chef_equipe($id_chef_equipe);
                    $equipeObject ->setPojet_id($pojet_id);
                    $equipeObject ->setFlag_equipe($flag_equipe);
                    $ok = $tdb->addEquipe($equipeObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("equipe/add", $data);
            }else{
                return $this->view->load("equipe/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new EquipeDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($nom_equipe)) {
                    $equipeObject  = new EquipeEntity();
                    $equipeObject ->setId($id);
                    $equipeObject ->setNom_equipe($nom_equipe);
                    $equipeObject ->setCout_maindoeuve($cout_maindoeuve);
                    $equipeObject ->setNbr_membre($nbr_membre);
                    $equipeObject ->setInfo_equipe($info_equipe);
                    $equipeObject ->setId_chef_equipe($id_chef_equipe);
                    $equipeObject ->setPojet_id($pojet_id);
                    $equipeObject ->setFlag_equipe($flag_equipe);
                    $ok = $tdb->updateEquipe($equipeObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new EquipeDB();
            			//Supression
            			$tdb->deleteEquipe($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new EquipeDB();
    /*==================Foreign list=====================*/
                    $data["personnes"] = $this->personnedb->listePersonne();
                    $data["projets"] = $this->projetdb->listeProjet();
            			//Supression
            			$data["equipe"] = $tdb->getEquipe($id);
            			//chargement de la vue edit.html
                    return $this->view->load("equipe/edit", $data);
                   }




                   



               }


            ?>

