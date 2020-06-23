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
  use src\entities\Famille as FamilleEntity;
  use src\model\FamilleDB;

  use src\entities\Service as ServiceEntity;
  use src\model\ServiceDB;


  class Famille extends Controller{

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
                
                public function index($idservice){

                    $data["view"] = 'Famille';
                    $data["curenview"] = 'Manage Famille Article';
                    $data["vewContent"] = 'formfamille';
                    $data["vewContenttype"] = 'form';
                    $data["pageheader"] = 'Famille D\'Article';
                    $data["pageoverview"] = 'Ajouter une Famille';
                   $data["active"] = 8;
                    $tdb = new FamilleDB();
                    $data["familles"] = $tdb->listeFamilleByServiceId($idservice);

                     return $this->view->load("index/index", $data);
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id_service){
                    $data["id_service"] = $id_service;
                    return $this->view->load("famille/get_id", $data);
                }




    /*------------------Methode get--------------------=*/
                
                public function get($id,$id_service){
                    //Instanciation du model
                    $tdb = new FamilleDB();
                    $data["famille"] = $tdb->getFamille($id,$id_service);
                    return $this->view->load("famille/get", $data);
                }

      public function getjs(){
          //Instanciation du model
          if (isset($_POST['id']) && !empty($_POST['id'])) {

              $id = intval($_POST['id']);
              $tdb = new FamilleDB();

              echo json_encode($tdb->getFamille($id));
          }
      }

    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new FamilleDB();
                    $data["familles"] = $tdb->listeFamille();
                    return $this->view->load("famille/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
        public function add(){
	//Instanciation du model
            $tdb = new FamilleDB();


                if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
                {
                    extract($_POST);
                    if(!empty($id_service)) {
                        //echo json_encode($id_service.' = '.$nom_famille.' = '.$color_famille.' = '.$nbr_categorie_famille.' = '.$valeur_famille );

                        $familleObject  = new FamilleEntity();
                        $familleObject ->setId(0);
                        $familleObject ->setId_service($id_service);
                        $familleObject ->setNom_famille($nom_famille);
                        $familleObject ->setColor_famille($color_famille);
                        $familleObject ->setNbr_categorie_famille(0);
                        $familleObject ->setValeurFamille(0);
                        $familleObject ->setFlag_famille(0);
                        if ($tdb->ifFamilleexiste($familleObject)==0){
                            echo json_encode(intval($tdb->addFamille($familleObject)));
                          //  echo json_encode(1);
                        }


                    }



                }
            }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new FamilleDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_service)) {
                    $familleObject  = new FamilleEntity();
                    $familleObject ->setId($id);
                    $familleObject ->setId_service($id_service);
                    $familleObject ->setNom_famille($nom_famille);
                    $familleObject ->setColor_famille($color_famille);
                    $familleObject ->setNbr_categorie_famille($nbr_categorie_famille);
                    $familleObject ->setValeurFamille($valeur_famille);
                    $familleObject ->setFlag_famille(0);
                    $stockData = array(
                        'id_service' => $id_service,
                        'id' => $id,
                        'nom_famille' => $nom_famille,
                        'color_famille' => $color_famille,
                        'nbr_categorie_famille' => $nbr_categorie_famille,
                        'valeur_famille' => $valeur_famille
                    );
                    $returnData = array(
                        'status' =>$tdb->updateFamille($familleObject),
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
                            $id_service = intval($_POST['id_service']);
                            $tdb = new FamilleDB();

                            echo json_encode($tdb->fldeleteFamille($id));
                        }
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id,$id_service){
                        //Instanciation du model
                       $tdb = new FamilleDB();
    /*==================Foreign list=====================*/
                    $data["services"] = $this->servicedb->listeService();
            			//Supression
            			$data["famille"] = $tdb->getFamille($id,$id_service);
            			//chargement de la vue edit.html
                    return $this->view->load("famille/edit", $data);
                   }




                   



               }


            ?>

