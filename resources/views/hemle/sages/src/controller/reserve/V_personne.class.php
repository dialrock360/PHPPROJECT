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
  use src\entities\V_personne as V_personneEntity;
  use src\model\V_personneDB;

  class V_personne extends Controller{

            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("v_personne/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("v_personne/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get(){
                    //Instanciation du model
                    $tdb = new V_personneDB();
                    $data["v_personne"] = $tdb->getV_personne();
                    return $this->view->load("v_personne/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new V_personneDB();
                    $data["v_personnes"] = $tdb->listeV_personne();
                    return $this->view->load("v_personne/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new V_personneDB();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($nom_personne)) {
                    $v_personneObject  = new V_personneEntity();
                    $v_personneObject ->setNom_personne($nom_personne);
                    $v_personneObject ->setPrenom_personne($prenom_personne);
                    $v_personneObject ->setGenre_personne($genre_personne);
                    $v_personneObject ->setDate_naiss_personne($date_naiss_personne);
                    $v_personneObject ->setLieu_naiss_personne($lieu_naiss_personne);
                    $v_personneObject ->setNationalite_personne($nationalite_personne);
                    $v_personneObject ->setTypepiece_personne($typepiece_personne);
                    $v_personneObject ->setNumpiece_personne($numpiece_personne);
                    $v_personneObject ->setPhoto_personne($photo_personne);
                    $v_personneObject ->setFlag_personne($flag_personne);
                    $v_personneObject ->setAdress($adress);
                    $v_personneObject ->setTel($tel);
                    $v_personneObject ->setCodepostal($codepostal);
                    $v_personneObject ->setInfo_personne($info_personne);
                    $v_personneObject ->setFlag_contact($flag_contact);
                    $v_personneObject ->setPersonne_id($personne_id);
                    $v_personneObject ->setStatus_id($status_id);
                    $v_personneObject ->setNom_status($nom_status);
                    $ok = $tdb->addV_personne($v_personneObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("v_personne/add", $data);
            }else{
                return $this->view->load("v_personne/add");
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new V_personneDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($nom_personne)) {
                    $v_personneObject  = new V_personneEntity();
                    $v_personneObject ->setId($id);
                    $v_personneObject ->setNom_personne($nom_personne);
                    $v_personneObject ->setPrenom_personne($prenom_personne);
                    $v_personneObject ->setGenre_personne($genre_personne);
                    $v_personneObject ->setDate_naiss_personne($date_naiss_personne);
                    $v_personneObject ->setLieu_naiss_personne($lieu_naiss_personne);
                    $v_personneObject ->setNationalite_personne($nationalite_personne);
                    $v_personneObject ->setTypepiece_personne($typepiece_personne);
                    $v_personneObject ->setNumpiece_personne($numpiece_personne);
                    $v_personneObject ->setPhoto_personne($photo_personne);
                    $v_personneObject ->setFlag_personne($flag_personne);
                    $v_personneObject ->setAdress($adress);
                    $v_personneObject ->setTel($tel);
                    $v_personneObject ->setCodepostal($codepostal);
                    $v_personneObject ->setInfo_personne($info_personne);
                    $v_personneObject ->setFlag_contact($flag_contact);
                    $v_personneObject ->setPersonne_id($personne_id);
                    $v_personneObject ->setStatus_id($status_id);
                    $v_personneObject ->setNom_status($nom_status);
                    $ok = $tdb->updateV_personne($v_personneObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete(){
              //Instanciation du model
                    $tdb = new V_personneDB();
            			//Supression
            			$tdb->deleteV_personne();
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit(){
                        //Instanciation du model
                       $tdb = new V_personneDB();
            			//Supression
            			$data["v_personne"] = $tdb->getV_personne();
            			//chargement de la vue edit.html
                    return $this->view->load("v_personne/edit", $data);
                   }




                   



               }


            ?>

