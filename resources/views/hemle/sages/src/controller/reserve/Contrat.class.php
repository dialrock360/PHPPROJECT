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
  use src\entities\Contrat as ContratEntity;
  use src\model\ContratDB;

  use src\entities\Modalite_contrat as Modalite_contratEntity;
  use src\model\Modalite_contratDB;


  use src\entities\Personne as PersonneEntity;
  use src\model\PersonneDB;


  class Contrat extends Controller{

    /*==================Attribut list=====================*/
             private  $modalite_contrat;
             private  $modalite_contratdb;
             private  $personne;
             private  $personnedb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->modalite_contrat = new Modalite_contratEntity();
                 $this->modalite_contratdb = new Modalite_contratDB();
                 $this->personne = new PersonneEntity();
                 $this->personnedb = new PersonneDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("contrat/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("contrat/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new ContratDB();
                    $data["contrat"] = $tdb->getContrat($id);
                    return $this->view->load("contrat/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new ContratDB();
                    $data["contrats"] = $tdb->listeContrat();
                    return $this->view->load("contrat/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new ContratDB();
    /*==================Foreign list=====================*/
                    $data["modalite_contrats"] = $this->modalite_contratdb->listeModalite_contrat();
                    $data["personnes"] = $this->personnedb->listePersonne();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($metier)) {
                    $contratObject  = new ContratEntity();
                    $contratObject ->setMetier($metier);
                    $contratObject ->setCv_contrat($cv_contrat);
                    $contratObject ->setStatut_contrat($statut_contrat);
                    $contratObject ->setNumsecu_sire($numsecu_sire);
                    $contratObject ->setDatedebut($datedebut);
                    $contratObject ->setDatefin($datefin);
                    $contratObject ->setDuree_essai($duree_essai);
                    $contratObject ->setAvantages_contrat($avantages_contrat);
                    $contratObject ->setPreavie_demande_conger($preavie_demande_conger);
                    $contratObject ->setNbr_jr_conge_par_mois_tavail($nbr_jr_conge_par_mois_tavail);
                    $contratObject ->setEtat_contrat($etat_contrat);
                    $contratObject ->setType_contrat_id($type_contrat_id);
                    $contratObject ->setPersonne_id($personne_id);
                    $contratObject ->setDepartement_id($departement_id);
                    $contratObject ->setModalite_contrat_id($modalite_contrat_id);
                    $contratObject ->setFlag_contract($flag_contract);
                    $ok = $tdb->addContrat($contratObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("contrat/add", $data);
            }else{
                return $this->view->load("contrat/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new ContratDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($metier)) {
                    $contratObject  = new ContratEntity();
                    $contratObject ->setId($id);
                    $contratObject ->setMetier($metier);
                    $contratObject ->setCv_contrat($cv_contrat);
                    $contratObject ->setStatut_contrat($statut_contrat);
                    $contratObject ->setNumsecu_sire($numsecu_sire);
                    $contratObject ->setDatedebut($datedebut);
                    $contratObject ->setDatefin($datefin);
                    $contratObject ->setDuree_essai($duree_essai);
                    $contratObject ->setAvantages_contrat($avantages_contrat);
                    $contratObject ->setPreavie_demande_conger($preavie_demande_conger);
                    $contratObject ->setNbr_jr_conge_par_mois_tavail($nbr_jr_conge_par_mois_tavail);
                    $contratObject ->setEtat_contrat($etat_contrat);
                    $contratObject ->setType_contrat_id($type_contrat_id);
                    $contratObject ->setPersonne_id($personne_id);
                    $contratObject ->setDepartement_id($departement_id);
                    $contratObject ->setModalite_contrat_id($modalite_contrat_id);
                    $contratObject ->setFlag_contract($flag_contract);
                    $ok = $tdb->updateContrat($contratObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new ContratDB();
            			//Supression
            			$tdb->deleteContrat($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new ContratDB();
    /*==================Foreign list=====================*/
                    $data["modalite_contrats"] = $this->modalite_contratdb->listeModalite_contrat();
                    $data["personnes"] = $this->personnedb->listePersonne();
            			//Supression
            			$data["contrat"] = $tdb->getContrat($id);
            			//chargement de la vue edit.html
                    return $this->view->load("contrat/edit", $data);
                   }




                   



               }


            ?>

