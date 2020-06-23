<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:25=====================*/
 use libs\system\Controller;
  use src\entities\V_categorie as V_categorieEntity;
  use src\model\V_categorieDB;

  class V_categorie extends Controller{

            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("v_categorie/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("v_categorie/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get(){
                    //Instanciation du model
                    $tdb = new V_categorieDB();
                    $data["v_categorie"] = $tdb->getV_categorie();
                    return $this->view->load("v_categorie/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new V_categorieDB();
                    $data["v_categories"] = $tdb->listeV_categorie();
                    return $this->view->load("v_categorie/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new V_categorieDB();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_service)) {
                    $v_categorieObject  = new V_categorieEntity();
                    $v_categorieObject ->setId_service($id_service);
                    $v_categorieObject ->setId_famille($id_famille);
                    $v_categorieObject ->setNom_categorie($nom_categorie);
                    $v_categorieObject ->setNbr_produit_categorie($nbr_produit_categorie);
                    $v_categorieObject ->setValeur_categorie($valeur_categorie);
                    $v_categorieObject ->setFlag_categorie($flag_categorie);
                    $v_categorieObject ->setNom_famille($nom_famille);
                    $v_categorieObject ->setColor_famille($color_famille);
                    $v_categorieObject ->setNbr_categorie_famille($nbr_categorie_famille);
                    $v_categorieObject ->setValeur_famille($valeur_famille);
                    $v_categorieObject ->setFlag_famille($flag_famille);
                    $ok = $tdb->addV_categorie($v_categorieObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("v_categorie/add", $data);
            }else{
                return $this->view->load("v_categorie/add");
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new V_categorieDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_service)) {
                    $v_categorieObject  = new V_categorieEntity();
                    $v_categorieObject ->setId($id);
                    $v_categorieObject ->setId_service($id_service);
                    $v_categorieObject ->setId_famille($id_famille);
                    $v_categorieObject ->setNom_categorie($nom_categorie);
                    $v_categorieObject ->setNbr_produit_categorie($nbr_produit_categorie);
                    $v_categorieObject ->setValeur_categorie($valeur_categorie);
                    $v_categorieObject ->setFlag_categorie($flag_categorie);
                    $v_categorieObject ->setNom_famille($nom_famille);
                    $v_categorieObject ->setColor_famille($color_famille);
                    $v_categorieObject ->setNbr_categorie_famille($nbr_categorie_famille);
                    $v_categorieObject ->setValeur_famille($valeur_famille);
                    $v_categorieObject ->setFlag_famille($flag_famille);
                    $ok = $tdb->updateV_categorie($v_categorieObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete(){
              //Instanciation du model
                    $tdb = new V_categorieDB();
            			//Supression
            			$tdb->deleteV_categorie();
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit(){
                        //Instanciation du model
                       $tdb = new V_categorieDB();
            			//Supression
            			$data["v_categorie"] = $tdb->getV_categorie();
            			//chargement de la vue edit.html
                    return $this->view->load("v_categorie/edit", $data);
                   }




                   



               }


            ?>

