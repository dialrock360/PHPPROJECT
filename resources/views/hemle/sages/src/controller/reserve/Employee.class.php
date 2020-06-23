<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 05-11-2019 11:52:58=====================*/
 use libs\system\Controller;
  use src\entities\Employee as EmployeeEntity;
  use src\model\EmployeeDB;

  use src\entities\Departement as DepartementEntity;
  use src\model\DepartementDB;


  class Employee extends Controller{

    /*==================Attribut list=====================*/
             private  $departement;
             private  $departementdb;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 $this->departement = new DepartementEntity();
                 $this->departementdb = new DepartementDB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("employee/index");
                }


    /*------------------Methode   employee--------------------=*/
      public function employee(){

          $data["view"] = 'Employee';
          $data["curenview"] = 'Employees Manager';
          $data["vewContent"] = 'formemployee';
          $data["vewContenttype"] = 'form';
          $data["pageheader"] = 'Gestion Employee ';
          $data["pageoverview"] = 'Ajouter un Employee';
          $data["active"] = 6;
          $tdb = new EmployeeDB();
          $data["employees"] = $tdb->listeEmployee();

          return $this->view->load("index/index", $data);
      }


    /*------------------Methode   prestataire--------------------=*/
      public function prestataire(){

          $data["view"] = 'Prestataire';
          $data["curenview"] = ' Prestataire Manager';
          $data["vewContent"] = 'formprestataire';
          $data["vewContenttype"] = 'form';
          $data["pageheader"] = 'Gestion Prestataires ';
          $data["pageoverview"] = 'Ajouter un Prestataire';
          $data["active"] = 6;
          $tdb = new EmployeeDB();
          $data["prestataires"] = $tdb->listeEmployee();

          return $this->view->load("index/index", $data);
      }

    /*------------------Methode   stagiaire--------------------=*/
      public function stagiaire(){

          $data["view"] = 'Stagiaire';
          $data["curenview"] = ' Stagiaire Manager';
          $data["vewContent"] = 'formstagiaire';
          $data["vewContenttype"] = 'form';
          $data["pageheader"] = 'Gestion Stagiaires ';
          $data["pageoverview"] = 'Ajouter un Stagiaire';
          $data["active"] = 6;
          $tdb = new EmployeeDB();
          $data["stagiaires"] = $tdb->listeEmployee();

          return $this->view->load("index/index", $data);
      }


    /*------------------Methode   formation--------------------=*/
      public function formation(){

          $data["view"] = 'Formation';
          $data["curenview"] = ' Formation Manager';
          $data["vewContent"] = 'formformation';
          $data["vewContenttype"] = 'form';
          $data["pageheader"] = 'Gestion Formations ';
          $data["pageoverview"] = 'Ajouter une Formation';
          $data["active"] = 6;
          $tdb = new EmployeeDB();
          $data["formations"] = $tdb->listeEmployee();

          return $this->view->load("index/index", $data);
      }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("employee/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get($id){
                    //Instanciation du model
                    $tdb = new EmployeeDB();
                    $data["employee"] = $tdb->getEmployee($id);
                    return $this->view->load("employee/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new EmployeeDB();
                    $data["employees"] = $tdb->listeEmployee();
                    return $this->view->load("employee/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new EmployeeDB();
    /*==================Foreign list=====================*/
                    $data["departements"] = $this->departementdb->listeDepartement();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_departement)) {
                    $employeeObject  = new EmployeeEntity();
                    $employeeObject ->setId_departement($id_departement);
                    $employeeObject ->setId_categorie_pro($id_categorie_pro);
                    $employeeObject ->setId_ruperieur_hierarchique($id_ruperieur_hierarchique);
                    $employeeObject ->setAvatar_employe($avatar_employe);
                    $employeeObject ->setMatricul_employee($matricul_employee);
                    $employeeObject ->setCv_employee($cv_employee);
                    $employeeObject ->setSalaire_employee($salaire_employee);
                    $employeeObject ->setNom_employee($nom_employee);
                    $employeeObject ->setNature_employee($nature_employee);
                    $employeeObject ->setTel_employee($tel_employee);
                    $employeeObject ->setEmail_employee($email_employee);
                    $employeeObject ->setInfo_employee($info_employee);
                    $employeeObject ->setFlag_employee($flag_employee);
                    $ok = $tdb->addEmployee($employeeObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("employee/add", $data);
            }else{
                return $this->view->load("employee/add", $data);
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new EmployeeDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_departement)) {
                    $employeeObject  = new EmployeeEntity();
                    $employeeObject ->setId($id);
                    $employeeObject ->setId_departement($id_departement);
                    $employeeObject ->setId_categorie_pro($id_categorie_pro);
                    $employeeObject ->setId_ruperieur_hierarchique($id_ruperieur_hierarchique);
                    $employeeObject ->setAvatar_employe($avatar_employe);
                    $employeeObject ->setMatricul_employee($matricul_employee);
                    $employeeObject ->setCv_employee($cv_employee);
                    $employeeObject ->setSalaire_employee($salaire_employee);
                    $employeeObject ->setNom_employee($nom_employee);
                    $employeeObject ->setNature_employee($nature_employee);
                    $employeeObject ->setTel_employee($tel_employee);
                    $employeeObject ->setEmail_employee($email_employee);
                    $employeeObject ->setInfo_employee($info_employee);
                    $employeeObject ->setFlag_employee($flag_employee);
                    $ok = $tdb->updateEmployee($employeeObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete($id){
              //Instanciation du model
                    $tdb = new EmployeeDB();
            			//Supression
            			$tdb->deleteEmployee($id);
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit($id){
                        //Instanciation du model
                       $tdb = new EmployeeDB();
    /*==================Foreign list=====================*/
                    $data["departements"] = $this->departementdb->listeDepartement();
            			//Supression
            			$data["employee"] = $tdb->getEmployee($id);
            			//chargement de la vue edit.html
                    return $this->view->load("employee/edit", $data);
                   }




                   



               }


            ?>

