<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:21=====================*/
 use libs\system\Controller;
  use src\entities\Mouvement as MouvementEntity;
  use src\model\MouvementDB;

  use src\entities\Personne as PersonneEntity;
  use src\model\PersonneDB;


  use src\entities\Service as ServiceEntity;
  use src\model\ServiceDB;


  use src\entities\Type_mouvement as Type_mouvementEntity;
  use src\model\Type_mouvementDB;


  use src\entities\Users as UsersEntity;
  use src\model\UsersDB;


  class Mouvement extends Controller{

    /*==================Attribut list=====================*/
             private  $personne;
             private  $personnedb;
             private  $service;
             private  $servicedb;
             private  $type_mouvement;
             private  $type_mouvementdb;
             private  $users;
             private  $usersdb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->personne = new PersonneEntity();
                 $this->personnedb = new PersonneDB();
                 $this->service = new ServiceEntity();
                 $this->servicedb = new ServiceDB();
                 $this->type_mouvement = new Type_mouvementEntity();
                 $this->type_mouvementdb = new Type_mouvementDB();
                 $this->users = new UsersEntity();
                 $this->usersdb = new UsersDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("mouvement/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("mouvement/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new MouvementDB();
                    $data["mouvement"] = $tdb->getMouvement($id);
                    return $this->view->load("mouvement/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new MouvementDB();
                    $data["mouvements"] = $tdb->listeMouvement();
                    return $this->view->load("mouvement/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new MouvementDB();
    /*==================Foreign list=====================*/
                    $data["personnes"] = $this->personnedb->listePersonne();
                    $data["services"] = $this->servicedb->listeService();
                    $data["type_mouvements"] = $this->type_mouvementdb->listeType_mouvement();
                    $data["userss"] = $this->usersdb->listeUsers();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_service)) {
                    $mouvementObject  = new MouvementEntity();
                    $mouvementObject ->setId_service($id_service);
                    $mouvementObject ->setId_type_mouvement($id_type_mouvement);
                    $mouvementObject ->setId_commercial($id_commercial);
                    $mouvementObject ->setId_users($id_users);
                    $mouvementObject ->setDate_mouvement($date_mouvement);
                    $mouvementObject ->setObject_mouvement($object_mouvement);
                    $mouvementObject ->setContent_mouvement($content_mouvement);
                    $mouvementObject ->setTotal_ht_mouvement($total_ht_mouvement);
                    $mouvementObject ->setTva_mouvement($tva_mouvement);
                    $mouvementObject ->setTotalttc_mouvement($totalttc_mouvement);
                    $mouvementObject ->setTotalltr_mouvement($totalltr_mouvement);
                    $mouvementObject ->setAvance_mouvement($avance_mouvement);
                    $mouvementObject ->setReste_mouvement($reste_mouvement);
                    $mouvementObject ->setFlag_mouvement($flag_mouvement);
                    $ok = $tdb->addMouvement($mouvementObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("mouvement/add", $data);
            }else{
                return $this->view->load("mouvement/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new MouvementDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_service)) {
                    $mouvementObject  = new MouvementEntity();
                    $mouvementObject ->setId($id);
                    $mouvementObject ->setId_service($id_service);
                    $mouvementObject ->setId_type_mouvement($id_type_mouvement);
                    $mouvementObject ->setId_commercial($id_commercial);
                    $mouvementObject ->setId_users($id_users);
                    $mouvementObject ->setDate_mouvement($date_mouvement);
                    $mouvementObject ->setObject_mouvement($object_mouvement);
                    $mouvementObject ->setContent_mouvement($content_mouvement);
                    $mouvementObject ->setTotal_ht_mouvement($total_ht_mouvement);
                    $mouvementObject ->setTva_mouvement($tva_mouvement);
                    $mouvementObject ->setTotalttc_mouvement($totalttc_mouvement);
                    $mouvementObject ->setTotalltr_mouvement($totalltr_mouvement);
                    $mouvementObject ->setAvance_mouvement($avance_mouvement);
                    $mouvementObject ->setReste_mouvement($reste_mouvement);
                    $mouvementObject ->setFlag_mouvement($flag_mouvement);
                    $ok = $tdb->updateMouvement($mouvementObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new MouvementDB();
            			//Supression
            			$tdb->deleteMouvement($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new MouvementDB();
    /*==================Foreign list=====================*/
                    $data["personnes"] = $this->personnedb->listePersonne();
                    $data["services"] = $this->servicedb->listeService();
                    $data["type_mouvements"] = $this->type_mouvementdb->listeType_mouvement();
                    $data["userss"] = $this->usersdb->listeUsers();
            			//Supression
            			$data["mouvement"] = $tdb->getMouvement($id);
            			//chargement de la vue edit.html
                    return $this->view->load("mouvement/edit", $data);
                   }




                   



               }


            ?>

