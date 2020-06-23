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
  use src\entities\Flux_stock as Flux_stockEntity;
  use src\model\Flux_stockDB;

  class Flux_stock extends Controller{

            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("flux_stock/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("flux_stock/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new Flux_stockDB();
                    $data["flux_stock"] = $tdb->getFlux_stock($id);
                    return $this->view->load("flux_stock/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new Flux_stockDB();
                    $data["flux_stocks"] = $tdb->listeFlux_stock();
                    return $this->view->load("flux_stock/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new Flux_stockDB();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_article)) {
                    $flux_stockObject  = new Flux_stockEntity();
                    $flux_stockObject ->setId_article($id_article);
                    $flux_stockObject ->setId_stock($id_stock);
                    $flux_stockObject ->setId_conditionement_article($id_conditionement_article);
                    $flux_stockObject ->setDate_flux_stock($date_flux_stock);
                    $flux_stockObject ->setType_flux_stock($type_flux_stock);
                    $flux_stockObject ->setQnt_flux_stock($qnt_flux_stock);
                    $flux_stockObject ->setPu_flux_stock($pu_flux_stock);
                    $ok = $tdb->addFlux_stock($flux_stockObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("flux_stock/add", $data);
            }else{
                return $this->view->load("flux_stock/add");
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new Flux_stockDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_article)) {
                    $flux_stockObject  = new Flux_stockEntity();
                    $flux_stockObject ->setId($id);
                    $flux_stockObject ->setId_article($id_article);
                    $flux_stockObject ->setId_stock($id_stock);
                    $flux_stockObject ->setId_conditionement_article($id_conditionement_article);
                    $flux_stockObject ->setDate_flux_stock($date_flux_stock);
                    $flux_stockObject ->setType_flux_stock($type_flux_stock);
                    $flux_stockObject ->setQnt_flux_stock($qnt_flux_stock);
                    $flux_stockObject ->setPu_flux_stock($pu_flux_stock);
                    $ok = $tdb->updateFlux_stock($flux_stockObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new Flux_stockDB();
            			//Supression
            			$tdb->deleteFlux_stock($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new Flux_stockDB();
            			//Supression
            			$data["flux_stock"] = $tdb->getFlux_stock($id);
            			//chargement de la vue edit.html
                    return $this->view->load("flux_stock/edit", $data);
                   }




                   



               }


            ?>

