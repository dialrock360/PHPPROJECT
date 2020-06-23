<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 13-09-2019 23:41:40=====================*/
 use libs\system\Controller;
  use src\entities\Conditionement as ConditionementEntity;
  use src\model\ConditionementDB;

  class Conditionement extends Controller{

            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){

                    $data["view"] = 'Conditionement';
                    $data["curenview"] = 'Add Conditionement';
                    $data["vewContent"] = 'fomconditionement';
                    $data["vewContenttype"] = 'form';
                    $data["pageheader"] = 'Gestion des Conditionements';
                    $data["pageoverview"] = 'Ajouter un Conditionement';
                   $data["active"] = 8;
                    $tdb = new ConditionementDB();
                    $data["conditionements"] = $tdb->listeConditionement();

                    return $this->view->load("index/index", $data);

                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("conditionement/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new ConditionementDB();
                    $data["conditionement"] = $tdb->getConditionement($id);
                    return $this->view->load("conditionement/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
                public function liste(){
                    //Instanciation du model
                    $tdb = new ConditionementDB();
                    $data["conditionements"] = $tdb->listeConditionement();
                    return $this->view->load("conditionement/liste", $data);
                }


      public function liste2(){
          $tdb = new ConditionementDB();
          $articles = $tdb->listeConditionement();
          $lsarticle=array();
          foreach ($articles as $article){
              $objarticle=array();
              $objarticle["id"] =  $article["id"] ;
              $objarticle["nom_conditionement"] =  $article["nom_conditionement"] ;
              $objarticle["nbr_utilisation"] =  $article["nbr_utilisation"] ;
              $objarticle["flag_conditionement"] =  $article["flag_conditionement"] ;

              $lsarticle[] =  $objarticle ;

          }
//print_r($lsarticle);
          // $lsarticle["id"] =  $articles["id"] ;


          echo    json_encode($lsarticle);
      }
    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
                public function add(){


            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                if(!empty($id_service)) {
                    //echo json_encode($id_service.' = '.$nom_famille.' = '.$color_famille.' = '.$nbr_categorie_famille.' = '.$valeur_famille );
                    $ret=0;

                    $tdb = new ConditionementDB();
                    $conditionementObject  = new ConditionementEntity();
                    $conditionementObject ->setNom_conditionement($nom_conditionement);
                    if ($tdb->ifConditionementexiste($conditionementObject)==0){

                        $ret=$tdb->addConditionement($conditionementObject ) ;
                    }
                }


                echo json_encode($ret);

            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model

            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_service)) {
                    $tdb = new ConditionementDB();
                    // SELECT `id`, `nom_conditionement`, `nbr_utilisation` FROM `conditionement` WHERE 1
                    $conditionementObject  = new ConditionementEntity();
                    $conditionementObject ->setId($id);
                    $conditionementObject ->setNom_conditionement($nom_conditionement);
                    $conditionementObject ->setNbrUtilisation($nbr_utilisation);
                    $stockData = array(
                        'id_service' => $id_service,
                        'id' => $id,
                        'nom_conditionement' => $nom_conditionement,
                        'nbr_utilisation' => $nbr_utilisation
                    );

                    $returnData = array(
                        'status' =>$tdb->updateConditionement($conditionementObject),
                        'data' => $stockData
                    );
                    echo json_encode($returnData);
                }
            }

       }

    /*------------------Methode list--------------------=*/
                
            public function delete(){
              //Instanciation du model

                    if (isset($_POST['id']) && !empty($_POST['id'])) {

                        $id = intval($_POST['id']);
                        $tdb = new ConditionementDB();

                        echo json_encode($tdb->fldeleteConditionement($id));
                    }
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new ConditionementDB();
            			//Supression
            			$data["conditionement"] = $tdb->getConditionement($id);
            			//chargement de la vue edit.html
                    return $this->view->load("conditionement/edit", $data);
                   }




                   



               }


            ?>

