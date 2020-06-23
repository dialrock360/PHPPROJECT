<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:20=====================*/
 use libs\system\Controller;
  use src\entities\Groupe as GroupeEntity;
  use src\model\GroupeDB;

  use src\entities\Service as ServiceEntity;
  use src\model\ServiceDB;


  class Groupe extends Controller{

    /*==================Attribut list=====================*/
             private  $service;
             private  $servicedb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->service = new ServiceEntity();
                 $this->servicedb = new ServiceDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("groupe/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("groupe/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new GroupeDB();
                    $data["groupe"] = $tdb->getGroupe($id);
                    return $this->view->load("groupe/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new GroupeDB();
                    $data["groupes"] = $tdb->listeGroupe();
                    return $this->view->load("groupe/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new GroupeDB();
    /*==================Foreign list=====================*/
                    $data["services"] = $this->servicedb->listeService();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_service)) {
                    $groupeObject  = new GroupeEntity();
                    $groupeObject ->setId_service($id_service);
                    $groupeObject ->setNom_groupe($nom_groupe);
                    $groupeObject ->setNbr_membre_groupe($nbr_membre_groupe);
                    $groupeObject ->setInfo_groupe($info_groupe);
                    $groupeObject ->setFlag_groupe($flag_groupe);
                    $ok = $tdb->addGroupe($groupeObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("groupe/add", $data);
            }else{
                return $this->view->load("groupe/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new GroupeDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_service)) {
                    $groupeObject  = new GroupeEntity();
                    $groupeObject ->setId($id);
                    $groupeObject ->setId_service($id_service);
                    $groupeObject ->setNom_groupe($nom_groupe);
                    $groupeObject ->setNbr_membre_groupe($nbr_membre_groupe);
                    $groupeObject ->setInfo_groupe($info_groupe);
                    $groupeObject ->setFlag_groupe($flag_groupe);
                    $ok = $tdb->updateGroupe($groupeObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new GroupeDB();
            			//Supression
            			$tdb->deleteGroupe($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new GroupeDB();
    /*==================Foreign list=====================*/
                    $data["services"] = $this->servicedb->listeService();
            			//Supression
            			$data["groupe"] = $tdb->getGroupe($id);
            			//chargement de la vue edit.html
                    return $this->view->load("groupe/edit", $data);
                   }




                   



               }


            ?>

