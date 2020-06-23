<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 05-11-2019 10:13:02=====================*/
 use libs\system\Controller;
  use src\entities\Programme as ProgrammeEntity;
  use src\model\ProgrammeDB;

  use src\entities\Service as ServiceEntity;
  use src\model\ServiceDB;


  class Programme extends Controller{

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
                    $data["view"] = 'Programme';
                    $data["pageheader"]= ' Program Manager';
                    $data["vewContent"] = 'formprogramme';
                    $data["vewContenttype"] = 'form';
                    $data["curenview"] = 'Gestion Des Programme';
                    $data["pageoverview"] = 'Noveau Programme';
                    $data["active"] = 5;
                    $tdb = new ProgrammeDB();
                    $data["programmes"] = $tdb->listeProgrammeByServiceId($idservice);


                    return $this->view->load("index/index", $data);
                }


      public function  programmeliste($idservice) {

          $data["view"] = 'Programme';
          $data["pageoverview"] = 'Consulter les Programmes';
          $data["vewContent"] = 'listeprogramme';
          $data["vewContenttype"] = 'table';
          $data["pageheader"] = 'Liste des Programmes';
          $data["curenview"] =  '  Programme List ';
          $data["active"] = 5;
          $tdb = new ProgrammeDB();
          $data["programmes"] = $tdb->listeProgrammeByServiceId($idservice);


          return $this->view->load("index/index", $data);
      }

      public function  manage($idservice) {

          $data["view"] = 'Programme';
          $data["pageoverview"] = 'manager le Programme ';
          $data["vewContent"] = 'manageprogramme';
          $data["vewContenttype"] = 'manage';
          $data["pageheader"] = 'Programmes';
          $data["curenview"] =  '  Programme manager ';
          $data["active"] = 5;
          $tdb = new ProgrammeDB();
          $data["programmes"] = $tdb->getProgramme($idservice);


          return $this->view->load("index/index", $data);
      }


      /*------------------Methode planification--------------------=*/

      public function planification($idservice){
                    $data["view"] = 'Planification';
                     $data["pageheader"]= 'Manage Production Planing';
                    $data["vewContent"] = 'formplanification';
                    $data["vewContenttype"] = 'form';
                    $data["curenview"] = 'Planification Des Productions';
                    $data["pageoverview"] = 'Novelle ordre de Production';
                    $data["active"] = 3;
                    $tdb = new ProgrammeDB();
                    $data["programmes"] = $tdb->listeProgrammeByServiceId($idservice);


                    return $this->view->load("index/index", $data);
                    //return $this->view->load("production/planification/index", $data);
      }
      public function  planificationmanage($id) {

          $data["view"] = 'Programme';
          $data["pageoverview"] = 'manager Planification ';
          $data["vewContent"] = 'manageprogramme';
          $data["vewContenttype"] = 'manage';
          $data["pageheader"] = 'Programmes';
          $data["curenview"] =  '  Programme manager ';
          $data["active"] = 5;
          $tdb = new ProgrammeDB();
          $data["programmes"] = $tdb->getProgramme($id);


          return $this->view->load("index/index", $data);
      }

    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("programme/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new ProgrammeDB();
                    $data["programme"] = $tdb->getProgramme($id);
                    return $this->view->load("programme/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new ProgrammeDB();
                    $data["programmes"] = $tdb->listeProgramme();
                    return $this->view->load("programme/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new ProgrammeDB();
    /*==================Foreign list=====================*/
                    $data["services"] = $this->servicedb->listeService();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($nom_programme)) {
                    $programmeObject  = new ProgrammeEntity();
                    $programmeObject ->setNom_programme($nom_programme);
                    $programmeObject ->setId_service($id_service);
                    $programmeObject ->setDate_programme($date_programme);
                    $programmeObject ->setDatefin_programme($datefin_programme);
                    $programmeObject ->setNbr_projet_programme($nbr_projet_programme);
                    $programmeObject ->setEtat_programme($etat_programme);
                    $programmeObject ->setFlag_programme($flag_programme);
                    $ok = $tdb->addProgramme($programmeObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("programme/add", $data);
            }else{
                return $this->view->load("programme/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new ProgrammeDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($nom_programme)) {
                    $programmeObject  = new ProgrammeEntity();
                    $programmeObject ->setId($id);
                    $programmeObject ->setNom_programme($nom_programme);
                    $programmeObject ->setId_service($id_service);
                    $programmeObject ->setDate_programme($date_programme);
                    $programmeObject ->setDatefin_programme($datefin_programme);
                    $programmeObject ->setNbr_projet_programme($nbr_projet_programme);
                    $programmeObject ->setEtat_programme($etat_programme);
                    $programmeObject ->setFlag_programme($flag_programme);
                    $ok = $tdb->updateProgramme($programmeObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new ProgrammeDB();
            			//Supression
            			$tdb->deleteProgramme($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new ProgrammeDB();
    /*==================Foreign list=====================*/
                    $data["services"] = $this->servicedb->listeService();
            			//Supression
            			$data["programme"] = $tdb->getProgramme($id);
            			//chargement de la vue edit.html
                    return $this->view->load("programme/edit", $data);
                   }




                   



               }


            ?>

