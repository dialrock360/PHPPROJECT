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
  use src\entities\Poste as PosteEntity;
  use src\model\PosteDB;

  class Poste extends Controller{

            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("poste/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("poste/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new PosteDB();
                    $data["poste"] = $tdb->getPoste($id);
                    return $this->view->load("poste/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new PosteDB();
                    $data["postes"] = $tdb->listePoste();
                    return $this->view->load("poste/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new PosteDB();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($nom_poste)) {
                    $posteObject  = new PosteEntity();
                    $posteObject ->setNom_poste($nom_poste);
                    $posteObject ->setCategorie_proffessionelle($categorie_proffessionelle);
                    $posteObject ->setSalaire_base($salaire_base);
                    $ok = $tdb->addPoste($posteObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("poste/add", $data);
            }else{
                return $this->view->load("poste/add");
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new PosteDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($nom_poste)) {
                    $posteObject  = new PosteEntity();
                    $posteObject ->setId($id);
                    $posteObject ->setNom_poste($nom_poste);
                    $posteObject ->setCategorie_proffessionelle($categorie_proffessionelle);
                    $posteObject ->setSalaire_base($salaire_base);
                    $ok = $tdb->updatePoste($posteObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new PosteDB();
            			//Supression
            			$tdb->deletePoste($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new PosteDB();
            			//Supression
            			$data["poste"] = $tdb->getPoste($id);
            			//chargement de la vue edit.html
                    return $this->view->load("poste/edit", $data);
                   }




                   



               }


            ?>

