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
use src\model\DB;



  class Vente extends Controller{

    /*==================Attribut list=====================*/
             private  $vente;
             private  $ventedb;
             private  $client;
             private  $clientdb;
             private  $materiel;
             private  $materieldb;
             private  $facturepro;
             private  $factureprodb;
             private  $db;


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                        $this->db = new DB();
                 }


            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("tache/index");
                }

      /*------------------Methode Client--------------------=*/
      /*------------------Methode Client--------------------=*/
                    public function Client($id_service) {

                        $data["ok"] = ($id_service=='ok')?1:(($id_service=='ok')?0:"");

                        $data["view"] = 'Client';
                        $data["curenview"] = 'Add Client';
                        $data["vewContent"] = 'formclient';
                        $data["vewContenttype"] = 'form';
                        $data["pageheader"] = 'Gestion des Clients';
                        $data["pageoverview"] = 'Ajouter un Client';
                        $data["active"] = 9;
                        $data["id_service"] = $id_service;
                        $data["date"] =  date('Y-m-d');
                        $this->db->setTablename("status");
                        $condition = array('nom_status' => 'client');
                        $data["personne_status"] = $this->db->getRows(array('where'=>$condition,'order_by'=>'nom_status DESC','return_type'=>'single'));

                        return $this->view->load("index/index", $data);
                    }

                    public function listeClient($id_service){

                        $data["view"] = 'Client';
                        $data["curenview"] = 'list Client';
                        $data["vewContent"] = 'listeclient';
                        $data["vewContenttype"] = 'table';
                        $data["pageheader"] = 'Gestion des Clients';
                        $data["pageoverview"] = 'Liste des Client';
                        $data["active"] = 9;
                        $this->db->setTablename("v_personne");
                        $condition = array('id_service' => $id_service,'nom_status' => 'client');
                        $data["personnes"]  =$this->db->getRows(array('where'=>$condition,'order_by'=>'nom_status DESC','return_type'=>'many'));


                       return $this->view->load("index/index", $data);
                    }

                      private function AddClient() {

                          $ok=0;
                          extract($_POST);

                          $this->db->setTablename("v_personne");

                          $condition = array('nom_personne' => $nom_personne,'tel' => $tel);

                          $test_ifperson_exist =  $this->db->getRows(array('where'=>$condition,'order_by'=>'nom_status DESC','return_type'=>'count'));


                          $personne_id=($test_ifperson_exist==0)?$this->AddPersonne():0;
                          $ok=($personne_id > 0)?$this->AddCordonnees($personne_id):0;
                          $ok=($ok > 0)?$this->AddPersonneStatus($personne_id,$id_status):0;


                          return $ok;
                      }
                      private function AddPersonne()
                      {
                          extract($_POST);

                          $upload_target = 'public/assets/images/avatars/'; // upload directory

                          $this->db->setTablename("v_personne");
                          $numpiece=(!isset($numpiece_personne) || empty($numpiece_personne)) ? "" : $numpiece_personne;
                          $condition = array('numpiece_personne' => $numpiece);
                           $test_ifnumpiece_personne_exist = ($numpiece=="")?0:$this->db->getRows(array('where' => $condition,'return_type' => 'count'));

                              if ($test_ifnumpiece_personne_exist==0){

                              $condition = array('nom_personne' => $nom_personne, 'tel' => $tel);
                              $test_ifperson_exist = $this->db->getRows(array('where' => $condition, 'order_by' => 'nom_status DESC', 'return_type' => 'count'));

                              $photo_personne = "uploadimge.png";
                              if (isset($_FILES['photo_personne']['name']) && !empty($_FILES['photo_personne']['name'])) {
                                  $photo_personne = $this->savefile($_FILES, $nom_personne, $upload_target)[1];
                              }
                              $personne = array(
                                  'id' => "null",
                                  'nom_personne' => $nom_personne,
                                  'prenom_personne' => $prenom_personne,
                                  'genre_personne' => $genre_personne,
                                  'date_naiss_personne' => $date_naiss_personne,
                                  'lieu_naiss_personne' => "",
                                  'nationalite_personne' => (!isset($nationalite_personne) || empty($nationalite_personne)) ? "" : $nationalite_personne,
                                  'typepiece_personne' => (!isset($typepiece_personne) || empty($typepiece_personne)) ? "" : $typepiece_personne,
                                  'numpiece_personne' => (!isset($numpiece_personne) || empty($numpiece_personne)) ? "" : $numpiece_personne,
                                  'photo_personne' => $photo_personne,
                                  'details_personne' => (!isset($details_personne) || empty($details_personne)) ? $info_personne : $details_personne,
                                  'flag_personne' => 0
                              );

                              $this->db->setTablename("personne");
                              return $this->db->insertTable($personne);
                          }
                              return 0;
                      }

                      private function AddPersonneStatus($personne_id,$status_id) {
                          $personne_status = array(
                              'personne_id' => $personne_id,
                              'status_id' => $status_id
                          );
                          $this->db->setTablename("personne_status");
                          return  $this->db->insertTable($personne_status);
                      }
                      private function AddCordonnees($personne_id) {

                          extract($_POST);
                          $Cordonnees = array(
                              'id' => "null",
                              'adress' =>  (!isset($adress) || empty($adress) )?"":$adress,
                              'tel' => $tel,
                              'email_personne' =>  (!isset($email_personne) || empty($email_personne) )?"":$email_personne,
                              'codepostal' => (!isset($codepostal) || empty($codepostal)) ? "" : $codepostal,
                              'contact_urgent' => (!isset($contact_urgent) || empty($contact_urgent)) ? "" : $contact_urgent,
                              'etat_civile' => "",
                              'nbr_conjoint' => 0,
                              'nbr_enfant' => 0,
                              'info_conjoint' => "",
                              'personne_id' => $personne_id,
                              'flag_contact' => 0
                          );
                          $this->db->setTablename("cordonnees");
                          return  $this->db->insertTable($Cordonnees);
                      }

      /*------------------Methode Client--------------------=*/
      /*------------------Methode Client--------------------=*/




                public function Vente($id_service) {

                    $data["ok"] = ($id_service=='ok')?1:(($id_service=='ok')?0:"");

                    $data["view"] = 'Vente';
                    $data["curenview"] = 'Add Vente';
                    $data["vewContent"] = 'formvente';
                    $data["vewContenttype"] = 'form';
                    $data["pageheader"] = 'Gestion des Ventes';
                    $data["pageoverview"] = 'Enregistrer un Vente';
                    $data["active"] = 9;

                    return $this->view->load("index/index", $data);
                }





                public function listeVente($id_service)  {

                    $data["view"] = 'Vente';
                    $data["curenview"] = 'list Vente';
                    $data["vewContent"] = 'listevente';
                    $data["vewContenttype"] = 'table';
                    $data["pageheader"] = 'Gestion des Ventes';
                    $data["pageoverview"] = 'Liste des Ventes';
                    $data["active"] = 9;

                    return $this->view->load("index/index", $data);
                }




                public function Livraison($id_service) {

                    $data["ok"] = ($id_service=='ok')?1:(($id_service=='ok')?0:"");

                    $data["view"] = 'Livraison';
                    $data["curenview"] = 'Add Livraison';
                    $data["vewContent"] = 'formlivraison';
                    $data["vewContenttype"] = 'form';
                    $data["pageheader"] = 'Gestion des Livraisons';
                    $data["pageoverview"] = 'Enregistrer une Livraison';
                    $data["active"] = 9;

                    return $this->view->load("index/index", $data);
                }





                public function listeLivraison($id_service)  {

                    $data["view"] = 'Livraison';
                    $data["curenview"] = 'list Livraison';
                    $data["vewContent"] = 'listelivraison';
                    $data["vewContenttype"] = 'table';
                    $data["pageheader"] = 'Gestion des Livraisons';
                    $data["pageoverview"] = 'Liste des Livraisons';
                    $data["active"] = 9;

                    return $this->view->load("index/index", $data);
                }


                public function Facturepro($id_service) {

                    $data["ok"] = ($id_service=='ok')?1:(($id_service=='ok')?0:"");

                    $data["view"] = 'Demande';
                    $data["curenview"] = 'Add Demande';
                    $data["vewContent"] = 'formdemande';
                    $data["vewContenttype"] = 'form';
                    $data["pageheader"] = 'Gestion des Demandes';
                    $data["pageoverview"] = 'Enregistrer une Demande';
                    $data["active"] = 9;

                    return $this->view->load("index/index", $data);
                }





                public function listeFacturepro($id_service) {

                    $data["view"] = 'Demande';
                    $data["curenview"] = 'list Demande';
                    $data["vewContent"] = 'listedemande';
                    $data["vewContenttype"] = 'table';
                    $data["pageheader"] = 'Gestion des Demandes';
                    $data["pageoverview"] = 'Liste des Demandes';
                    $data["active"] = 9;

                    return $this->view->load("index/index", $data);
                }




                public function Materielle($id_service) {

                    $data["ok"] = ($id_service=='ok')?1:(($id_service=='ok')?0:"");

                    $data["view"] = 'Ressource';
                    $data["curenview"] = 'Add Ressource';
                    $data["vewContent"] = 'formressource';
                    $data["vewContenttype"] = 'form';
                    $data["pageheader"] = 'Gestion des Ressources';
                    $data["pageoverview"] = 'Enregistrer une Ressource';
                    $data["active"] = 9;

                    return $this->view->load("index/index", $data);
                }





                public function listeMaterielle($id_service) {

                    $data["view"] = 'Ressource';
                    $data["curenview"] = 'list Ressource';
                    $data["vewContent"] = 'listeressource';
                    $data["vewContenttype"] = 'table';
                    $data["pageheader"] = 'Gestion des Ressources';
                    $data["pageoverview"] = 'Liste des Ressources';
                    $data["active"] = 9;

                    return $this->view->load("index/index", $data);
                }




                      public function Add($param) {
                         extract($_POST);
                         if ($param=='client'){
                              $ok=$this->AddClient();
                              $this->Client($ok);
                         }

                      }


      private function savefile($files,$nom_ent,$target) {

          $name    = $files['photo_personne']['name'];
          $size    = $files['photo_personne']['size'];
          $tmp  = $files['photo_personne']['tmp_name'];
          if(empty($name)){

              $userpic ='...';
              $errMSG='0';
          }
          else
          {
              $upload_dir = $target; // upload directory

              $imgExt = strtolower(pathinfo($name,PATHINFO_EXTENSION)); // get image extension

              // valid image extensions
              $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

              // rename uploading image
              $userpic = explode(" ",$nom_ent)[0].rand(1000,1000000).".".$imgExt;

              // allow valid image file formats
              if(in_array($imgExt, $valid_extensions)){
                  // Check file size '10MB'
                  if($size < 10000000)				{
                     move_uploaded_file($tmp,$upload_dir.$userpic);
                      $errMSG=0;
                  }
                  else{
                      $errMSG = "Sorry, your file is too large.";
                  }
              }
              else{
                  $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
              }
          }
          $tab[0] = $errMSG;
          $tab[1] = $userpic;
          return $tab;
      }

               }


            ?>

