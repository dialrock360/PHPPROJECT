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
use src\entities\Personne as PersonneEntity;
use src\entities\Cordonnees as CordonneesEntity;
use src\entities\Departement as DepartementEntity;
use src\entities\Personne_status as Personne_statusEntity;
use src\entities\Poste as PosteEntity;


  class Rh extends Controller{


      /*==================Attribut list=====================*/
      private  $employee;
      private  $cordonnees;
      private  $departement;
      private  $personne_status;
      private  $poste;


      /*================== Constructor =====================*/
      public function __construct()
      {
          parent::__construct();
          $this->employee = new PersonneEntity();
          $this->departement = new CordonneesEntity();
          $this->cordonnees = new DepartementEntity();
          $this->personne_status = new Personne_statusEntity();
          $this->poste = new PosteEntity();
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
          $data["active"] = 7;
          $data["status"] = 'employee';

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
          $data["active"] = 7;
          $data["status"] = 'prestataire';

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
          $data["active"] = 7;
          $data["status"] = 'stagiaire';

          return $this->view->load("index/index", $data);
      }



      /*------------------Methode   form rh--------------------=*/
      public function formrh($status){
          $lstatus = strtolower($status);
          $Ustatus = ucfirst($lstatus);
          $data["view"] = $Ustatus;
          $data["curenview"] = $Ustatus.' Manager';
          $data["vewContent"] = 'form'.$lstatus;
          $data["vewContenttype"] = 'form';
          $data["pageheader"] = 'Gestion '.$Ustatus;
          $data["pageoverview"] = 'Ajouter '.$Ustatus.'s';
          $data["active"] = 7;
          $data["status"] = $lstatus;

          return $this->view->load("index/index", $data);
      }

      /*------------------Methode   list rh--------------------=*/
      public function listrh($status){
          $lstatus = strtolower($status);
          $Ustatus = ucfirst($lstatus);
          $data["view"] = $Ustatus;
          $data["curenview"] = $Ustatus.' Manager';
          $data["vewContent"] = 'liste'.$lstatus;
          $data["vewContenttype"] = 'table';
          $data["pageheader"] = 'Gestion '.$Ustatus;
          $data["pageoverview"] = 'Liste des '.$Ustatus.'s';
          $data["active"] = 7;

           return $this->view->load("index/index", $data);
      }

      /*------------------Methode   formation--------------------=*/
      public function formation($idservice){



          $data["view"] = 'Formation';
          $data["curenview"] = ' Formation Manager';
          $data["vewContent"] = 'listeformation';
          $data["vewContenttype"] = 'table';
          $data["pageheader"] = 'Gestion Formations ';
          $data["pageoverview"] = ' Liste des  Formations';
          $data["active"] = 7;

          return $this->view->load("index/index", $data);
      }
      /*------------------Methode   recrutement--------------------=*/

      public function recrutement($idservice){

          $data["view"] = 'Recrutement';
          $data["curenview"] = ' Recrutement Manager';
          $data["vewContent"] = 'listerecrutement';
          $data["vewContenttype"] = 'table';
          $data["pageheader"] = 'Gestion Recrutements ';
          $data["pageoverview"] = 'Liste des recrutements';
          $data["active"] = 7;

          return $this->view->load("index/index", $data);
      }




      /*------------------Methode   PAIE--------------------=*/

      public function paie($idservice){

          $data["view"] = 'Paie';
          $data["curenview"] = ' Paie Manager';
          $data["vewContent"] = 'formpaie';
          $data["vewContenttype"] = 'form';
          $data["pageheader"] = 'Gestion Paies ';
          $data["pageoverview"] = 'Ajouter une Paie';
          $data["active"] = 7;

          return $this->view->load("index/index", $data);
      }






  }


            ?>

