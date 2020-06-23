<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 04-11-2019 21:47:41=====================*/
 use libs\system\Controller;
  use src\entities\Commercial_groupe as Commercial_groupeEntity;
  use src\model\Commercial_groupeDB;

  use src\entities\Commercial as CommercialEntity;
  use src\model\CommercialDB;


  use src\entities\Groupe as GroupeEntity;
  use src\model\GroupeDB;


  class Commercial_groupe extends Controller{

    /*==================Attribut list=====================*/
             private  $commercial;
             private  $commercialdb;
             private  $groupe;
             private  $groupedb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->commercial = new CommercialEntity();
                 $this->commercialdb = new CommercialDB();
                 $this->groupe = new GroupeEntity();
                 $this->groupedb = new GroupeDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("commercial_groupe/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id_commercial){
                    $data["id_commercial"] = $id_commercial;
                    return $this->view->load("commercial_groupe/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id_commercial,$id_groupe){
                    //Instanciation du model
                    $tdb = new Commercial_groupeDB();
                    $data["commercial_groupe"] = $tdb->getCommercial_groupe($id_commercial,$id_groupe);
                    return $this->view->load("commercial_groupe/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new Commercial_groupeDB();
                    $data["commercial_groupes"] = $tdb->listeCommercial_groupe();
                    return $this->view->load("commercial_groupe/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new Commercial_groupeDB();
    /*==================Foreign list=====================*/
                    $data["commercials"] = $this->commercialdb->listeCommercial();
                    $data["groupes"] = $this->groupedb->listeGroupe();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_groupe)) {
                    $commercial_groupeObject  = new Commercial_groupeEntity();
                    $commercial_groupeObject ->setId_commercial($id_commercial);
                    $commercial_groupeObject ->setId_groupe($id_groupe);
                    $ok = $tdb->addCommercial_groupe($commercial_groupeObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("commercial_groupe/add", $data);
            }else{
                return $this->view->load("commercial_groupe/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new Commercial_groupeDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_groupe)) {
                    $commercial_groupeObject  = new Commercial_groupeEntity();
                    $commercial_groupeObject ->setId_commercial($id_commercial);
                    $commercial_groupeObject ->setId_groupe($id_groupe);
                    $ok = $tdb->updateCommercial_groupe($commercial_groupeObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id_commercial,$id_groupe){
              //Instanciation du model
                    $tdb = new Commercial_groupeDB();
            			//Supression
            			$tdb->deleteCommercial_groupe($id_commercial,$id_groupe);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id_commercial,$id_groupe){
                        //Instanciation du model
                       $tdb = new Commercial_groupeDB();
    /*==================Foreign list=====================*/
                    $data["commercials"] = $this->commercialdb->listeCommercial();
                    $data["groupes"] = $this->groupedb->listeGroupe();
            			//Supression
            			$data["commercial_groupe"] = $tdb->getCommercial_groupe($id_commercial,$id_groupe);
            			//chargement de la vue edit.html
                    return $this->view->load("commercial_groupe/edit", $data);
                   }




                   



               }


            ?>

