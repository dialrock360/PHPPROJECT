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
  use src\entities\Messages as MessagesEntity;
  use src\model\MessagesDB;

  use src\entities\Service as ServiceEntity;
  use src\model\ServiceDB;


  class Messages extends Controller{

    /*==================Attribut list=====================*/
             private  $service;
             private  $servicedb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->service = new ServiceEntity();
                 $this->servicedb = new ServiceDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("messages/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("messages/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new MessagesDB();
                    $data["messages"] = $tdb->getMessages($id);
                    return $this->view->load("messages/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new MessagesDB();
                    $data["messagess"] = $tdb->listeMessages();
                    return $this->view->load("messages/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new MessagesDB();
    /*==================Foreign list=====================*/
                    $data["services"] = $this->servicedb->listeService();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_service)) {
                    $messagesObject  = new MessagesEntity();
                    $messagesObject ->setId_service($id_service);
                    $messagesObject ->setDate_message($date_message);
                    $messagesObject ->setObject_message($object_message);
                    $messagesObject ->setPj_message($pj_message);
                    $messagesObject ->setOrigine_message($origine_message);
                    $messagesObject ->setCible_message($cible_message);
                    $messagesObject ->setAttribute_10($Attribute_10);
                    $messagesObject ->setAttribute_11($Attribute_11);
                    $messagesObject ->setId_origine($id_origine);
                    $messagesObject ->setId_sible($id_sible);
                    $messagesObject ->setContent_message($content_message);
                    $ok = $tdb->addMessages($messagesObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("messages/add", $data);
            }else{
                return $this->view->load("messages/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new MessagesDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_service)) {
                    $messagesObject  = new MessagesEntity();
                    $messagesObject ->setId($id);
                    $messagesObject ->setId_service($id_service);
                    $messagesObject ->setDate_message($date_message);
                    $messagesObject ->setObject_message($object_message);
                    $messagesObject ->setPj_message($pj_message);
                    $messagesObject ->setOrigine_message($origine_message);
                    $messagesObject ->setCible_message($cible_message);
                    $messagesObject ->setAttribute_10($attribute_10);
                    $messagesObject ->setAttribute_11($attribute_11);
                    $messagesObject ->setId_origine($id_origine);
                    $messagesObject ->setId_sible($id_sible);
                    $messagesObject ->setContent_message($content_message);
                    $ok = $tdb->updateMessages($messagesObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new MessagesDB();
            			//Supression
            			$tdb->deleteMessages($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new MessagesDB();
    /*==================Foreign list=====================*/
                    $data["services"] = $this->servicedb->listeService();
            			//Supression
            			$data["messages"] = $tdb->getMessages($id);
            			//chargement de la vue edit.html
                    return $this->view->load("messages/edit", $data);
                   }




                   



               }


            ?>

