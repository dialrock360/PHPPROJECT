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
  use src\entities\Module as ModuleEntity;
  use src\model\ModuleDB;

  class Module extends Controller{

            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("module/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("module/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new ModuleDB();
                    $data["module"] = $tdb->getModule($id);
                    return $this->view->load("module/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new ModuleDB();
                    $data["modules"] = $tdb->listeModule();
                    return $this->view->load("module/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new ModuleDB();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($nom_module)) {
                    $moduleObject  = new ModuleEntity();
                    $moduleObject ->setNom_module($nom_module);
                    $ok = $tdb->addModule($moduleObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("module/add", $data);
            }else{
                return $this->view->load("module/add");
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new ModuleDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($nom_module)) {
                    $moduleObject  = new ModuleEntity();
                    $moduleObject ->setId($id);
                    $moduleObject ->setNom_module($nom_module);
                    $ok = $tdb->updateModule($moduleObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new ModuleDB();
            			//Supression
            			$tdb->deleteModule($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new ModuleDB();
            			//Supression
            			$data["module"] = $tdb->getModule($id);
            			//chargement de la vue edit.html
                    return $this->view->load("module/edit", $data);
                   }




                   



               }


            ?>

