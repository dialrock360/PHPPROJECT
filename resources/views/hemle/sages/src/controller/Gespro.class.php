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
use src\entities\Programme as ProgrammeEntity;
use src\entities\Projet as ProjetEntity;
use src\entities\Tache as TacheEntity;
use src\entities\Piece_jointe as Piece_jointeEntity;
use src\entities\Module as ModuleEntity;
use src\model\DB;
use src\entities\Service as ServiceEntity;

  class Gespro extends Controller{

      /*==================Attribut list=====================*/
      private  $programme;
      private  $projet;
      private  $tache;
      private  $module;
      private  $piece_jointe;
      private  $db;
      /*================== Constructor =====================*/
      public function __construct()
      {
          parent::__construct();
          $this->programme = new ProgrammeEntity();
          $this->projet = new ProjetEntity();
          $this->tache = new TacheEntity();
          $this->piece_jointe = new Piece_jointeEntity();
          $this->module = new ModuleEntity();
          $this->db = new DB();
      }

      /*------------------Methode Programme--------------------=*/

              public function programme($idservice){
                  $data["view"] = 'Programme';
                  $data["pageheader"]= ' Program Manager';
                  $data["vewContent"] = 'formprogramme';
                  $data["vewContenttype"] = 'form';
                  $data["curenview"] = 'Gestion Des Programme';
                  $data["pageoverview"] = 'Noveau Programme';
                  $data["active"] = 5;

                  $condition = array('ref_module' =>'gspro');
                  $data["module"] = $this->module->conditional_get($condition);
                  $condition = array('id_service' =>$idservice);
                  $data["programmes"] = $this->programme->conditional_liste($condition,"'order_by'=>'nom_programme'");


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
                   $condition = array('id_service' =>$idservice);
                   $data["programmes"] = $this->programme->conditional_liste($condition,"'order_by'=>'nom_programme'");



                   return $this->view->load("index/index", $data);
              }
               public function  programmemanager($idprogramme) {



                   $data["view"] = 'Programme';
                   $data["pageoverview"] = 'manager le Programme ';
                   $data["vewContent"] = 'manageprogramme';
                   $data["vewContenttype"] = 'manage';
                   $data["pageheader"] = 'Programmes';
                   $data["curenview"] =  '  Programme manager ';
                   $data["active"] = 5;
                   $condition = array('id' =>$idprogramme);
                   $data["programme"] = $this->programme->conditional_get($condition);


                  return $this->view->load("index/index", $data);
              }

              public function stetProgramme(){
                  /*==================Foreign list=====================*/

                  extract($_POST);
                  $ok = 0;
                  //Récupération des données qui viennent du formulaire view/test/add.html (à créer)
                  if(isset($_POST["setaction"]) && $_POST["setaction"]=='add')//"valider" est le name du champs submit du formulaire add.html
                  {

                      if(isset($nom_programme) && !empty($nom_programme)) {
                          $this->programme->setId((!isset($id) || empty( $id) )  ? 'null': $id);
                          $this->programme->setId_service((!isset($id_service) || empty($id_service) )  ? 0: $id_service);
                          $this->programme->setModul_affecter((!isset($modul_affecter) || empty($modul_affecter) )  ? 0: $modul_affecter);
                          $this->programme->setNom_programme((!isset($nom_programme) || empty($nom_programme) )  ? '': $nom_programme);
                          $this->programme->setDate_programme((!isset($date_programme) || empty($date_programme) )  ? '': $date_programme);
                          $this->programme->setDatefin_programme((!isset($datefin_programme) || empty($datefin_programme) )  ? '': $datefin_programme);
                          $this->programme->setNbr_projet_programme((!isset($nbr_projet_programme) || empty($nbr_projet_programme) )  ? '': $nbr_projet_programme);
                          $this->programme->setEtat_programme((!isset($etat_programme) || empty($etat_programme) )  ? '': $etat_programme);
                          $this->programme->setFlag_programme((!isset($flag_programme) || empty($flag_programme) )  ? '': $flag_programme);
                           $ok = $this->programme->insert();
                          $data["ok"] = $ok;
                      }

                  }

                  if($ok>0) {

                         $this->programmeliste($id_service);
                    } else{
                       $this->programme($id_service);
                  }
              }


               }


            ?>

