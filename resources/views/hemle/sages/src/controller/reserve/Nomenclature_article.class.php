<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 14-11-2019 20:58:49=====================*/
 use libs\system\Controller;
  use src\entities\Nomenclature_article as Nomenclature_articleEntity;
  use src\model\Nomenclature_articleDB;

  class Nomenclature_article extends Controller{

            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("nomenclature_article/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("nomenclature_article/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new Nomenclature_articleDB();
                    $data["nomenclature_article"] = $tdb->getNomenclature_article($id);
                    return $this->view->load("nomenclature_article/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new Nomenclature_articleDB();
                    $data["nomenclature_articles"] = $tdb->listeNomenclature_article();
                    return $this->view->load("nomenclature_article/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new Nomenclature_articleDB();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($ref_nomenclature_article)) {
                    $nomenclature_articleObject  = new Nomenclature_articleEntity();
                    $nomenclature_articleObject ->setRef_nomenclature_article($ref_nomenclature_article);
                    $nomenclature_articleObject ->setNom_nomenclature_article($nom_nomenclature_article);
                    $nomenclature_articleObject ->setCode_couleur($code_couleur);
                    $ok = $tdb->addNomenclature_article($nomenclature_articleObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("nomenclature_article/add", $data);
            }else{
                return $this->view->load("nomenclature_article/add");
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new Nomenclature_articleDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($ref_nomenclature_article)) {
                    $nomenclature_articleObject  = new Nomenclature_articleEntity();
                    $nomenclature_articleObject ->setId($id);
                    $nomenclature_articleObject ->setRef_nomenclature_article($ref_nomenclature_article);
                    $nomenclature_articleObject ->setNom_nomenclature_article($nom_nomenclature_article);
                    $nomenclature_articleObject ->setCode_couleur($code_couleur);
                    $ok = $tdb->updateNomenclature_article($nomenclature_articleObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new Nomenclature_articleDB();
            			//Supression
            			$tdb->deleteNomenclature_article($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new Nomenclature_articleDB();
            			//Supression
            			$data["nomenclature_article"] = $tdb->getNomenclature_article($id);
            			//chargement de la vue edit.html
                    return $this->view->load("nomenclature_article/edit", $data);
                   }




                   



               }


            ?>

