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
  use src\entities\Commercial_status as Commercial_statusEntity;
  use src\model\Commercial_statusDB;

  use src\entities\Commercial as CommercialEntity;
  use src\model\CommercialDB;


  use src\entities\Status as StatusEntity;
  use src\model\StatusDB;


  class Commercial_status extends Controller{

    /*==================Attribut list=====================*/
             private  $commercial;
             private  $commercialdb;
             private  $status;
             private  $statusdb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->commercial = new CommercialEntity();
                 $this->commercialdb = new CommercialDB();
                 $this->status = new StatusEntity();
                 $this->statusdb = new StatusDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("commercial_status/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id_commercial){
                    $data["id_commercial"] = $id_commercial;
                    return $this->view->load("commercial_status/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id_commercial,$id_status){
                    //Instanciation du model
                    $tdb = new Commercial_statusDB();
                    $data["commercial_status"] = $tdb->getCommercial_status($id_commercial,$id_status);
                    return $this->view->load("commercial_status/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new Commercial_statusDB();
                    $data["commercial_statuss"] = $tdb->listeCommercial_status();
                    return $this->view->load("commercial_status/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new Commercial_statusDB();
    /*==================Foreign list=====================*/
                    $data["commercials"] = $this->commercialdb->listeCommercial();
                    $data["statuss"] = $this->statusdb->listeStatus();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_status)) {
                    $commercial_statusObject  = new Commercial_statusEntity();
                    $commercial_statusObject ->setId_commercial($id_commercial);
                    $commercial_statusObject ->setId_status($id_status);
                    $ok = $tdb->addCommercial_status($commercial_statusObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("commercial_status/add", $data);
            }else{
                return $this->view->load("commercial_status/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new Commercial_statusDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_status)) {
                    $commercial_statusObject  = new Commercial_statusEntity();
                    $commercial_statusObject ->setId_commercial($id_commercial);
                    $commercial_statusObject ->setId_status($id_status);
                    $ok = $tdb->updateCommercial_status($commercial_statusObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id_commercial,$id_status){
              //Instanciation du model
                    $tdb = new Commercial_statusDB();
            			//Supression
            			$tdb->deleteCommercial_status($id_commercial,$id_status);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id_commercial,$id_status){
                        //Instanciation du model
                       $tdb = new Commercial_statusDB();
    /*==================Foreign list=====================*/
                    $data["commercials"] = $this->commercialdb->listeCommercial();
                    $data["statuss"] = $this->statusdb->listeStatus();
            			//Supression
            			$data["commercial_status"] = $tdb->getCommercial_status($id_commercial,$id_status);
            			//chargement de la vue edit.html
                    return $this->view->load("commercial_status/edit", $data);
                   }




                   



               }


            ?>

