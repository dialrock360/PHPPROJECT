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
  use src\entities\Ligne_personne_groupe as Ligne_personne_groupeEntity;
  use src\model\Ligne_personne_groupeDB;

  class Ligne_personne_groupe extends Controller{

            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("ligne_personne_groupe/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id_personne){
                    $data["id_personne"] = $id_personne;
                    return $this->view->load("ligne_personne_groupe/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id_personne,$id_groupe){
                    //Instanciation du model
                    $tdb = new Ligne_personne_groupeDB();
                    $data["ligne_personne_groupe"] = $tdb->getLigne_personne_groupe($id_personne,$id_groupe);
                    return $this->view->load("ligne_personne_groupe/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new Ligne_personne_groupeDB();
                    $data["ligne_personne_groupes"] = $tdb->listeLigne_personne_groupe();
                    return $this->view->load("ligne_personne_groupe/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new Ligne_personne_groupeDB();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_groupe)) {
                    $ligne_personne_groupeObject  = new Ligne_personne_groupeEntity();
                    $ligne_personne_groupeObject ->setId_personne($id_personne);
                    $ligne_personne_groupeObject ->setId_groupe($id_groupe);
                    $ok = $tdb->addLigne_personne_groupe($ligne_personne_groupeObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("ligne_personne_groupe/add", $data);
            }else{
                return $this->view->load("ligne_personne_groupe/add");
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new Ligne_personne_groupeDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_groupe)) {
                    $ligne_personne_groupeObject  = new Ligne_personne_groupeEntity();
                    $ligne_personne_groupeObject ->setId_personne($id_personne);
                    $ligne_personne_groupeObject ->setId_groupe($id_groupe);
                    $ok = $tdb->updateLigne_personne_groupe($ligne_personne_groupeObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id_personne,$id_groupe){
              //Instanciation du model
                    $tdb = new Ligne_personne_groupeDB();
            			//Supression
            			$tdb->deleteLigne_personne_groupe($id_personne,$id_groupe);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id_personne,$id_groupe){
                        //Instanciation du model
                       $tdb = new Ligne_personne_groupeDB();
            			//Supression
            			$data["ligne_personne_groupe"] = $tdb->getLigne_personne_groupe($id_personne,$id_groupe);
            			//chargement de la vue edit.html
                    return $this->view->load("ligne_personne_groupe/edit", $data);
                   }




                   



               }


            ?>

