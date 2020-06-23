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
  use src\entities\Cordonnees as CordonneesEntity;
  use src\model\CordonneesDB;

  use src\entities\Personne as PersonneEntity;
  use src\model\PersonneDB;


  class Cordonnees extends Controller{

    /*==================Attribut list=====================*/
             private  $personne;
             private  $personnedb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->personne = new PersonneEntity();
                 $this->personnedb = new PersonneDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("cordonnees/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("cordonnees/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new CordonneesDB();
                    $data["cordonnees"] = $tdb->getCordonnees($id);
                    return $this->view->load("cordonnees/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new CordonneesDB();
                    $data["cordonneess"] = $tdb->listeCordonnees();
                    return $this->view->load("cordonnees/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new CordonneesDB();
    /*==================Foreign list=====================*/
                    $data["personnes"] = $this->personnedb->listePersonne();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($adress)) {
                    $cordonneesObject  = new CordonneesEntity();
                    $cordonneesObject ->setAdress($adress);
                    $cordonneesObject ->setTel($tel);
                    $cordonneesObject ->setCodepostal($codepostal);
                    $cordonneesObject ->setContact_urgent($contact_urgent);
                    $cordonneesObject ->setEtat_civile($etat_civile);
                    $cordonneesObject ->setNbr_conjoint($nbr_conjoint);
                    $cordonneesObject ->setNbr_enfant($nbr_enfant);
                    $cordonneesObject ->setInfo_conjoint($info_conjoint);
                    $cordonneesObject ->setInfo_personne($info_personne);
                    $cordonneesObject ->setPersonne_id($personne_id);
                    $cordonneesObject ->setFlag_contact($flag_contact);
                    $ok = $tdb->addCordonnees($cordonneesObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("cordonnees/add", $data);
            }else{
                return $this->view->load("cordonnees/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new CordonneesDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($adress)) {
                    $cordonneesObject  = new CordonneesEntity();
                    $cordonneesObject ->setId($id);
                    $cordonneesObject ->setAdress($adress);
                    $cordonneesObject ->setTel($tel);
                    $cordonneesObject ->setCodepostal($codepostal);
                    $cordonneesObject ->setContact_urgent($contact_urgent);
                    $cordonneesObject ->setEtat_civile($etat_civile);
                    $cordonneesObject ->setNbr_conjoint($nbr_conjoint);
                    $cordonneesObject ->setNbr_enfant($nbr_enfant);
                    $cordonneesObject ->setInfo_conjoint($info_conjoint);
                    $cordonneesObject ->setInfo_personne($info_personne);
                    $cordonneesObject ->setPersonne_id($personne_id);
                    $cordonneesObject ->setFlag_contact($flag_contact);
                    $ok = $tdb->updateCordonnees($cordonneesObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new CordonneesDB();
            			//Supression
            			$tdb->deleteCordonnees($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new CordonneesDB();
    /*==================Foreign list=====================*/
                    $data["personnes"] = $this->personnedb->listePersonne();
            			//Supression
            			$data["cordonnees"] = $tdb->getCordonnees($id);
            			//chargement de la vue edit.html
                    return $this->view->load("cordonnees/edit", $data);
                   }




                   



               }


            ?>

