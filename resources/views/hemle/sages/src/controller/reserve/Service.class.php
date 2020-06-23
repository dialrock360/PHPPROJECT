<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:23=====================*/
 use libs\system\Controller;
  use src\entities\Service as ServiceEntity;
  use src\model\ServiceDB;

  class Service extends Controller{

            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("service/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("service/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new ServiceDB();
                    $data["service"] = $tdb->getService($id);
                    return $this->view->load("service/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new ServiceDB();
                    $data["services"] = $tdb->listeService();
                    return $this->view->load("service/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new ServiceDB();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($nom_service)) {
                    $serviceObject  = new ServiceEntity();
                    $serviceObject ->setNom_service($nom_service);
                    $serviceObject ->setSigle_service($sigle_service);
                    $serviceObject ->setNinea_service($ninea_service);
                    $serviceObject ->setNrc_service($nrc_service);
                    $serviceObject ->setActivitecommercial_service($activitecommercial_service);
                    $serviceObject ->setCa_service($ca_service);
                    $serviceObject ->setLogo_service($logo_service);
                    $serviceObject ->setTheme_service($theme_service);
                    $serviceObject ->setFlag_service($flag_service);
                    $ok = $tdb->addService($serviceObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("service/add", $data);
            }else{
                return $this->view->load("service/add");
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new ServiceDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($nom_service)) {
                    $serviceObject  = new ServiceEntity();
                    $serviceObject ->setId($id);
                    $serviceObject ->setNom_service($nom_service);
                    $serviceObject ->setSigle_service($sigle_service);
                    $serviceObject ->setNinea_service($ninea_service);
                    $serviceObject ->setNrc_service($nrc_service);
                    $serviceObject ->setActivitecommercial_service($activitecommercial_service);
                    $serviceObject ->setCa_service($ca_service);
                    $serviceObject ->setLogo_service($logo_service);
                    $serviceObject ->setTheme_service($theme_service);
                    $serviceObject ->setFlag_service($flag_service);
                    $ok = $tdb->updateService($serviceObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new ServiceDB();
            			//Supression
            			$tdb->deleteService($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new ServiceDB();
            			//Supression
            			$data["service"] = $tdb->getService($id);
            			//chargement de la vue edit.html
                    return $this->view->load("service/edit", $data);
                   }




                   



               }


            ?>

