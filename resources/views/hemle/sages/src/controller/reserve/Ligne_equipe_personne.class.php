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
  use src\entities\Ligne_equipe_personne as Ligne_equipe_personneEntity;
  use src\model\Ligne_equipe_personneDB;

  class Ligne_equipe_personne extends Controller{

            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("ligne_equipe_personne/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id_employee){
                    $data["id_employee"] = $id_employee;
                    return $this->view->load("ligne_equipe_personne/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id_employee,$id_equipe){
                    //Instanciation du model
                    $tdb = new Ligne_equipe_personneDB();
                    $data["ligne_equipe_personne"] = $tdb->getLigne_equipe_personne($id_employee,$id_equipe);
                    return $this->view->load("ligne_equipe_personne/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new Ligne_equipe_personneDB();
                    $data["ligne_equipe_personnes"] = $tdb->listeLigne_equipe_personne();
                    return $this->view->load("ligne_equipe_personne/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new Ligne_equipe_personneDB();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_equipe)) {
                    $ligne_equipe_personneObject  = new Ligne_equipe_personneEntity();
                    $ligne_equipe_personneObject ->setId_employee($id_employee);
                    $ligne_equipe_personneObject ->setId_equipe($id_equipe);
                    $ligne_equipe_personneObject ->setMaindoeuve_unitaire($maindoeuve_unitaire);
                    $ok = $tdb->addLigne_equipe_personne($ligne_equipe_personneObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("ligne_equipe_personne/add", $data);
            }else{
                return $this->view->load("ligne_equipe_personne/add");
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new Ligne_equipe_personneDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_equipe)) {
                    $ligne_equipe_personneObject  = new Ligne_equipe_personneEntity();
                    $ligne_equipe_personneObject ->setId_employee($id_employee);
                    $ligne_equipe_personneObject ->setId_equipe($id_equipe);
                    $ligne_equipe_personneObject ->setMaindoeuve_unitaire($maindoeuve_unitaire);
                    $ok = $tdb->updateLigne_equipe_personne($ligne_equipe_personneObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id_employee,$id_equipe){
              //Instanciation du model
                    $tdb = new Ligne_equipe_personneDB();
            			//Supression
            			$tdb->deleteLigne_equipe_personne($id_employee,$id_equipe);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id_employee,$id_equipe){
                        //Instanciation du model
                       $tdb = new Ligne_equipe_personneDB();
            			//Supression
            			$data["ligne_equipe_personne"] = $tdb->getLigne_equipe_personne($id_employee,$id_equipe);
            			//chargement de la vue edit.html
                    return $this->view->load("ligne_equipe_personne/edit", $data);
                   }




                   



               }


            ?>

