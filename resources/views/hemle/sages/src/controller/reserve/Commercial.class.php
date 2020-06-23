<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 04-11-2019 21:47:41=====================*/
 use libs\system\Controller;
  use src\entities\Commercial as CommercialEntity;
  use src\model\CommercialDB;

  use src\entities\Service as ServiceEntity;
  use src\model\ServiceDB;


  class Commercial extends Controller{

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
                    return $this->view->load("commercial/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("commercial/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new CommercialDB();
                    $data["commercial"] = $tdb->getCommercial($id);
                    return $this->view->load("commercial/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new CommercialDB();
                    $data["commercials"] = $tdb->listeCommercial();
                    return $this->view->load("commercial/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new CommercialDB();
    /*==================Foreign list=====================*/
                    $data["services"] = $this->servicedb->listeService();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_service)) {
                    $commercialObject  = new CommercialEntity();
                    $commercialObject ->setId_service($id_service);
                    $commercialObject ->setAvatar_commercial($avatar_commercial);
                    $commercialObject ->setNom_commercial($nom_commercial);
                    $commercialObject ->setTel_commercial($tel_commercial);
                    $commercialObject ->setEmail_commercial($email_commercial);
                    $commercialObject ->setAdresse_commercial($adresse_commercial);
                    $commercialObject ->setLocalisation_commercial($localisation_commercial);
                    $commercialObject ->setInfo_commercial($info_commercial);
                    $commercialObject ->setFlag_commercial($flag_commercial);
                    $ok = $tdb->addCommercial($commercialObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("commercial/add", $data);
            }else{
                return $this->view->load("commercial/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new CommercialDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_service)) {
                    $commercialObject  = new CommercialEntity();
                    $commercialObject ->setId($id);
                    $commercialObject ->setId_service($id_service);
                    $commercialObject ->setAvatar_commercial($avatar_commercial);
                    $commercialObject ->setNom_commercial($nom_commercial);
                    $commercialObject ->setTel_commercial($tel_commercial);
                    $commercialObject ->setEmail_commercial($email_commercial);
                    $commercialObject ->setAdresse_commercial($adresse_commercial);
                    $commercialObject ->setLocalisation_commercial($localisation_commercial);
                    $commercialObject ->setInfo_commercial($info_commercial);
                    $commercialObject ->setFlag_commercial($flag_commercial);
                    $ok = $tdb->updateCommercial($commercialObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new CommercialDB();
            			//Supression
            			$tdb->deleteCommercial($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new CommercialDB();
    /*==================Foreign list=====================*/
                    $data["services"] = $this->servicedb->listeService();
            			//Supression
            			$data["commercial"] = $tdb->getCommercial($id);
            			//chargement de la vue edit.html
                    return $this->view->load("commercial/edit", $data);
                   }




                   



               }


            ?>

