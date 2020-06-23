<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:24=====================*/
 use libs\system\Controller;
use src\entities\Personne as PersonneEntity;
use src\entities\Cordonnees as CordonneesEntity;
use src\entities\Status as StatusEntity;
use src\entities\Personne_status as Personne_statusEntity;

use src\model\DB;

  class Individu extends Controller{

      /*==================Attribut list=====================*/

      private  $db;
      private  $personne_status ;
      private  $status;
      private  $cordonnees;
      private  $personne;
      /*================== Constructor =====================*/
      public function __construct()
      {
          require_once 'src/controller/tools/functions.php';
          parent::__construct();
          $this->personne = new PersonneEntity();
          $this->personne_status = new Personne_statusEntity();
          $this->status = new StatusEntity();
          $this->cordonnees = new CordonneesEntity();

          $this->db = new DB();
      }

      /*------------------Methode Programme--------------------=*/

      public function index(){
          $this->personne->setTablename('v_personne');
          $condition = array('id' =>10);
          $data["personne"] = $this->personne->conditional_get($condition);
          return $this->view->load("personne/index",$data);
      }


      public function add(){
          /*==================Foreign list=====================*/

          //Récupération des données qui viennent du formulaire view/test/add.html (à créer)
          if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
          {
              extract($_POST);
              $data["ok"] = 0;
              if(isset($id)) {

                  $condition = array('tel' =>$tel);
                  $this->personne->setPost($_POST,$_FILES);
                  $this->cordonnees->setPersonne_id(1);
                  $this->cordonnees->setPost($_POST);
                  $this->personne_status->setStatus_id(1);
                  $this->personne_status->setPost($_POST);

                  $tespersone=  $this->db->setTablename('v_personne');
                       // $ok = $this->personne->insert();
                  //$ok = $this->cordonnees->insert();
                  //  //$ok = $this->personne_status->insert();
                  print_r($this->personne->getPhoto_personne());
                  $data["ok"] = $ok;
              }
             // return $this->view->load("personne/add", $data);
          }else{
            //  return $this->view->load("personne/add", $data);
          }
      }



  }


            ?>

