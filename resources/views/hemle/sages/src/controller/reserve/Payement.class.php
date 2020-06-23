<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:22=====================*/
 use libs\system\Controller;
  use src\entities\Payement as PayementEntity;
  use src\model\PayementDB;

  use src\entities\Mouvement as MouvementEntity;
  use src\model\MouvementDB;


  class Payement extends Controller{

    /*==================Attribut list=====================*/
             private  $mouvement;
             private  $mouvementdb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->mouvement = new MouvementEntity();
                 $this->mouvementdb = new MouvementDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("payement/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("payement/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new PayementDB();
                    $data["payement"] = $tdb->getPayement($id);
                    return $this->view->load("payement/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new PayementDB();
                    $data["payements"] = $tdb->listePayement();
                    return $this->view->load("payement/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new PayementDB();
    /*==================Foreign list=====================*/
                    $data["mouvements"] = $this->mouvementdb->listeMouvement();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_mouvement)) {
                    $payementObject  = new PayementEntity();
                    $payementObject ->setId_mouvement($id_mouvement);
                    $payementObject ->setType_payement($type_payement);
                    $payementObject ->setMts_payement($mts_payement);
                    $payementObject ->setDate_payement($date_payement);
                    $payementObject ->setDetail_payement($detail_payement);
                    $ok = $tdb->addPayement($payementObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("payement/add", $data);
            }else{
                return $this->view->load("payement/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new PayementDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_mouvement)) {
                    $payementObject  = new PayementEntity();
                    $payementObject ->setId($id);
                    $payementObject ->setId_mouvement($id_mouvement);
                    $payementObject ->setType_payement($type_payement);
                    $payementObject ->setMts_payement($mts_payement);
                    $payementObject ->setDate_payement($date_payement);
                    $payementObject ->setDetail_payement($detail_payement);
                    $ok = $tdb->updatePayement($payementObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new PayementDB();
            			//Supression
            			$tdb->deletePayement($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new PayementDB();
    /*==================Foreign list=====================*/
                    $data["mouvements"] = $this->mouvementdb->listeMouvement();
            			//Supression
            			$data["payement"] = $tdb->getPayement($id);
            			//chargement de la vue edit.html
                    return $this->view->load("payement/edit", $data);
                   }




                   



               }


            ?>

