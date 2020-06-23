<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 14-11-2019 20:58:44=====================*/
 use libs\system\Controller;
  use src\entities\Catalogue as CatalogueEntity;
  use src\model\CatalogueDB;

  class Catalogue extends Controller{

            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("catalogue/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("catalogue/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new CatalogueDB();
                    $data["catalogue"] = $tdb->getCatalogue($id);
                    return $this->view->load("catalogue/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new CatalogueDB();
                    $data["catalogues"] = $tdb->listeCatalogue();
                    return $this->view->load("catalogue/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new CatalogueDB();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($ref_article)) {
                    $catalogueObject  = new CatalogueEntity();
                    $catalogueObject ->setRef_article($ref_article);
                    $catalogueObject ->setNom_article($nom_article);
                    $catalogueObject ->setNom_service($nom_service);
                    $catalogueObject ->setNom_famille($nom_famille);
                    $catalogueObject ->setNom_categorie($nom_categorie);
                    $catalogueObject ->setType_article($type_article);
                    $catalogueObject ->setFiche_technique($fiche_technique);
                    $ok = $tdb->addCatalogue($catalogueObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("catalogue/add", $data);
            }else{
                return $this->view->load("catalogue/add");
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new CatalogueDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($ref_article)) {
                    $catalogueObject  = new CatalogueEntity();
                    $catalogueObject ->setId($id);
                    $catalogueObject ->setRef_article($ref_article);
                    $catalogueObject ->setNom_article($nom_article);
                    $catalogueObject ->setNom_service($nom_service);
                    $catalogueObject ->setNom_famille($nom_famille);
                    $catalogueObject ->setNom_categorie($nom_categorie);
                    $catalogueObject ->setType_article($type_article);
                    $catalogueObject ->setFiche_technique($fiche_technique);
                    $ok = $tdb->updateCatalogue($catalogueObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new CatalogueDB();
            			//Supression
            			$tdb->deleteCatalogue($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new CatalogueDB();
            			//Supression
            			$data["catalogue"] = $tdb->getCatalogue($id);
            			//chargement de la vue edit.html
                    return $this->view->load("catalogue/edit", $data);
                   }




                   



               }


            ?>

