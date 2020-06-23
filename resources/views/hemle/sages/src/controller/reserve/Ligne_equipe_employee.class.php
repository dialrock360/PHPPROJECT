<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 05-11-2019 09:59:47=====================*/
 use libs\system\Controller;
  use src\entities\Ligne_equipe_employee as Ligne_equipe_employeeEntity;
  use src\model\Ligne_equipe_employeeDB;

  use src\entities\Employee as EmployeeEntity;
  use src\model\EmployeeDB;


  use src\entities\Equipe as EquipeEntity;
  use src\model\EquipeDB;


  class Ligne_equipe_employee extends Controller{

    /*==================Attribut list=====================*/
             private  $employee;
             private  $employeedb;
             private  $equipe;
             private  $equipedb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->employee = new EmployeeEntity();
                 $this->employeedb = new EmployeeDB();
                 $this->equipe = new EquipeEntity();
                 $this->equipedb = new EquipeDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("ligne_equipe_employee/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id_employee){
                    $data["id_employee"] = $id_employee;
                    return $this->view->load("ligne_equipe_employee/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id_employee,$id_equipe){
                    //Instanciation du model
                    $tdb = new Ligne_equipe_employeeDB();
                    $data["ligne_equipe_employee"] = $tdb->getLigne_equipe_employee($id_employee,$id_equipe);
                    return $this->view->load("ligne_equipe_employee/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new Ligne_equipe_employeeDB();
                    $data["ligne_equipe_employees"] = $tdb->listeLigne_equipe_employee();
                    return $this->view->load("ligne_equipe_employee/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new Ligne_equipe_employeeDB();
    /*==================Foreign list=====================*/
                    $data["employees"] = $this->employeedb->listeEmployee();
                    $data["equipes"] = $this->equipedb->listeEquipe();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_equipe)) {
                    $ligne_equipe_employeeObject  = new Ligne_equipe_employeeEntity();
                    $ligne_equipe_employeeObject ->setId_employee($id_employee);
                    $ligne_equipe_employeeObject ->setId_equipe($id_equipe);
                    $ligne_equipe_employeeObject ->setId_service($id_service);
                    $ligne_equipe_employeeObject ->setMaindoeuve_unitaire($maindoeuve_unitaire);
                    $ok = $tdb->addLigne_equipe_employee($ligne_equipe_employeeObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("ligne_equipe_employee/add", $data);
            }else{
                return $this->view->load("ligne_equipe_employee/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new Ligne_equipe_employeeDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_equipe)) {
                    $ligne_equipe_employeeObject  = new Ligne_equipe_employeeEntity();
                    $ligne_equipe_employeeObject ->setId_employee($id_employee);
                    $ligne_equipe_employeeObject ->setId_equipe($id_equipe);
                    $ligne_equipe_employeeObject ->setId_service($id_service);
                    $ligne_equipe_employeeObject ->setMaindoeuve_unitaire($maindoeuve_unitaire);
                    $ok = $tdb->updateLigne_equipe_employee($ligne_equipe_employeeObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id_employee,$id_equipe){
              //Instanciation du model
                    $tdb = new Ligne_equipe_employeeDB();
            			//Supression
            			$tdb->deleteLigne_equipe_employee($id_employee,$id_equipe);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id_employee,$id_equipe){
                        //Instanciation du model
                       $tdb = new Ligne_equipe_employeeDB();
    /*==================Foreign list=====================*/
                    $data["employees"] = $this->employeedb->listeEmployee();
                    $data["equipes"] = $this->equipedb->listeEquipe();
            			//Supression
            			$data["ligne_equipe_employee"] = $tdb->getLigne_equipe_employee($id_employee,$id_equipe);
            			//chargement de la vue edit.html
                    return $this->view->load("ligne_equipe_employee/edit", $data);
                   }




                   



               }


            ?>

