<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



     namespace src\entities;
      use libs\system\Entitie;
    /*==================Classe creer par Samane samane_ui_admin le 05-12-2019 02:38:09=====================*/

        class V_personne extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $nom_personne;
        private  $prenom_personne;
        private  $genre_personne;
        private  $date_naiss_personne;
        private  $lieu_naiss_personne;
        private  $nationalite_personne;
        private  $typepiece_personne;
        private  $numpiece_personne;
        private  $photo_personne;
        private  $details_personne;
        private  $id_service;
        private  $flag_personne;
        private  $adress;
        private  $tel;
        private  $email_personne;
        private  $codepostal;
        private  $contact_urgent;
        private  $etat_civile;
        private  $nbr_conjoint;
        private  $nbr_enfant;
        private  $info_conjoint;
        private  $flag_contact;
        private  $status_id;
        private  $nom_status;
        private  $nom_service;
        private  $sigle_service;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="v_personne";
                 $this->id = 0 ;
                 $this->nom_personne = "" ;
                 $this->prenom_personne = "" ;
                 $this->genre_personne = '' ;
                 $this->date_naiss_personne = date("") ;
                 $this->lieu_naiss_personne = "" ;
                 $this->nationalite_personne = "" ;
                 $this->typepiece_personne = '' ;
                 $this->numpiece_personne = "" ;
                 $this->photo_personne = "" ;
                 $this->details_personne = "" ;
                 $this->id_service = 0 ;
                 $this->flag_personne = 0 ;
                 $this->adress = "" ;
                 $this->tel = "" ;
                 $this->email_personne = "" ;
                 $this->codepostal = "" ;
                 $this->contact_urgent = "" ;
                 $this->etat_civile = "" ;
                 $this->nbr_conjoint = 0 ;
                 $this->nbr_enfant = 0 ;
                 $this->info_conjoint = "" ;
                 $this->flag_contact = 0 ;
                 $this->status_id = 0 ;
                 $this->nom_status = "" ;
                 $this->nom_service = "" ;
                 $this->sigle_service = "" ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getNom_personne()
                 {
                     return $this->nom_personne;
                 }

             public function getPrenom_personne()
                 {
                     return $this->prenom_personne;
                 }

             public function getGenre_personne()
                 {
                     return $this->genre_personne;
                 }

             public function getDate_naiss_personne()
                 {
                     return $this->date_naiss_personne;
                 }

             public function getLieu_naiss_personne()
                 {
                     return $this->lieu_naiss_personne;
                 }

             public function getNationalite_personne()
                 {
                     return $this->nationalite_personne;
                 }

             public function getTypepiece_personne()
                 {
                     return $this->typepiece_personne;
                 }

             public function getNumpiece_personne()
                 {
                     return $this->numpiece_personne;
                 }

             public function getPhoto_personne()
                 {
                     return $this->photo_personne;
                 }

             public function getDetails_personne()
                 {
                     return $this->details_personne;
                 }

             public function getId_service()
                 {
                     return $this->id_service;
                 }

             public function getFlag_personne()
                 {
                     return $this->flag_personne;
                 }

             public function getAdress()
                 {
                     return $this->adress;
                 }

             public function getTel()
                 {
                     return $this->tel;
                 }

             public function getEmail_personne()
                 {
                     return $this->email_personne;
                 }

             public function getCodepostal()
                 {
                     return $this->codepostal;
                 }

             public function getContact_urgent()
                 {
                     return $this->contact_urgent;
                 }

             public function getEtat_civile()
                 {
                     return $this->etat_civile;
                 }

             public function getNbr_conjoint()
                 {
                     return $this->nbr_conjoint;
                 }

             public function getNbr_enfant()
                 {
                     return $this->nbr_enfant;
                 }

             public function getInfo_conjoint()
                 {
                     return $this->info_conjoint;
                 }

             public function getFlag_contact()
                 {
                     return $this->flag_contact;
                 }

             public function getStatus_id()
                 {
                     return $this->status_id;
                 }

             public function getNom_status()
                 {
                     return $this->nom_status;
                 }

             public function getNom_service()
                 {
                     return $this->nom_service;
                 }

             public function getSigle_service()
                 {
                     return $this->sigle_service;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setNom_personne($nom_personne)
                 {
                      $this->nom_personne = $nom_personne;
                 }

             public function setPrenom_personne($prenom_personne)
                 {
                      $this->prenom_personne = $prenom_personne;
                 }

             public function setGenre_personne($genre_personne)
                 {
                      $this->genre_personne = $genre_personne;
                 }

             public function setDate_naiss_personne($date_naiss_personne)
                 {
                      $this->date_naiss_personne = $date_naiss_personne;
                 }

             public function setLieu_naiss_personne($lieu_naiss_personne)
                 {
                      $this->lieu_naiss_personne = $lieu_naiss_personne;
                 }

             public function setNationalite_personne($nationalite_personne)
                 {
                      $this->nationalite_personne = $nationalite_personne;
                 }

             public function setTypepiece_personne($typepiece_personne)
                 {
                      $this->typepiece_personne = $typepiece_personne;
                 }

             public function setNumpiece_personne($numpiece_personne)
                 {
                      $this->numpiece_personne = $numpiece_personne;
                 }

             public function setPhoto_personne($photo_personne)
                 {
                      $this->photo_personne = $photo_personne;
                 }

             public function setDetails_personne($details_personne)
                 {
                      $this->details_personne = $details_personne;
                 }

             public function setId_service($id_service)
                 {
                      $this->id_service = $id_service;
                 }

             public function setFlag_personne($flag_personne)
                 {
                      $this->flag_personne = $flag_personne;
                 }

             public function setAdress($adress)
                 {
                      $this->adress = $adress;
                 }

             public function setTel($tel)
                 {
                      $this->tel = $tel;
                 }

             public function setEmail_personne($email_personne)
                 {
                      $this->email_personne = $email_personne;
                 }

             public function setCodepostal($codepostal)
                 {
                      $this->codepostal = $codepostal;
                 }

             public function setContact_urgent($contact_urgent)
                 {
                      $this->contact_urgent = $contact_urgent;
                 }

             public function setEtat_civile($etat_civile)
                 {
                      $this->etat_civile = $etat_civile;
                 }

             public function setNbr_conjoint($nbr_conjoint)
                 {
                      $this->nbr_conjoint = $nbr_conjoint;
                 }

             public function setNbr_enfant($nbr_enfant)
                 {
                      $this->nbr_enfant = $nbr_enfant;
                 }

             public function setInfo_conjoint($info_conjoint)
                 {
                      $this->info_conjoint = $info_conjoint;
                 }

             public function setFlag_contact($flag_contact)
                 {
                      $this->flag_contact = $flag_contact;
                 }

             public function setStatus_id($status_id)
                 {
                      $this->status_id = $status_id;
                 }

             public function setNom_status($nom_status)
                 {
                      $this->nom_status = $nom_status;
                 }

             public function setNom_service($nom_service)
                 {
                      $this->nom_service = $nom_service;
                 }

             public function setSigle_service($sigle_service)
                 {
                      $this->sigle_service = $sigle_service;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count v_personne =====================*/
					public function countV_personne(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get v_personne =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    ;
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste v_personne =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("v_personne");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("v_personne");
					    $condition = array(  );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("v_personne");
					    $condition = array(  );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_v_personne = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If v_personne existe =====================*/
					public function ifV_personneexiste($condition){
					    $this->db->setTablename($this->tablename);
	$existe=$this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					if($existe != null)
					      {
					                 return 1;
					      } 
					return 0;
					                }
					  public function setPost($post,$file=array()){
					     extract($post);
                                                       $this->id = (!isset($id) || empty($id) )  ? 0: $id;
                       $this->nom_personne = (!isset($nom_personne) || empty($nom_personne) )  ? '': $nom_personne;
                       $this->prenom_personne = (!isset($prenom_personne) || empty($prenom_personne) )  ? '': $prenom_personne;
                       $this->genre_personne = (!isset($genre_personne) || empty($genre_personne) )  ? '': $genre_personne;
                       $this->date_naiss_personne = (!isset($date_naiss_personne) || empty($date_naiss_personne) )  ? '': $date_naiss_personne;
                       $this->lieu_naiss_personne = (!isset($lieu_naiss_personne) || empty($lieu_naiss_personne) )  ? '': $lieu_naiss_personne;
                       $this->nationalite_personne = (!isset($nationalite_personne) || empty($nationalite_personne) )  ? '': $nationalite_personne;
                       $this->typepiece_personne = (!isset($typepiece_personne) || empty($typepiece_personne) )  ? '': $typepiece_personne;
                       $this->numpiece_personne = (!isset($numpiece_personne) || empty($numpiece_personne) )  ? '': $numpiece_personne;
                       $this->photo_personne = (!isset($photo_personne) || empty($photo_personne) )  ? '': $photo_personne;
                       $this->details_personne = (!isset($details_personne) || empty($details_personne) )  ? '': $details_personne;
                       $this->id_service = (!isset($id_service) || empty($id_service) )  ? 0: $id_service;
                       $this->flag_personne = (!isset($flag_personne) || empty($flag_personne) )  ? 0: $flag_personne;
                       $this->adress = (!isset($adress) || empty($adress) )  ? '': $adress;
                       $this->tel = (!isset($tel) || empty($tel) )  ? '': $tel;
                       $this->email_personne = (!isset($email_personne) || empty($email_personne) )  ? '': $email_personne;
                       $this->codepostal = (!isset($codepostal) || empty($codepostal) )  ? '': $codepostal;
                       $this->contact_urgent = (!isset($contact_urgent) || empty($contact_urgent) )  ? '': $contact_urgent;
                       $this->etat_civile = (!isset($etat_civile) || empty($etat_civile) )  ? '': $etat_civile;
                       $this->nbr_conjoint = (!isset($nbr_conjoint) || empty($nbr_conjoint) )  ? 0: $nbr_conjoint;
                       $this->nbr_enfant = (!isset($nbr_enfant) || empty($nbr_enfant) )  ? 0: $nbr_enfant;
                       $this->info_conjoint = (!isset($info_conjoint) || empty($info_conjoint) )  ? '': $info_conjoint;
                       $this->flag_contact = (!isset($flag_contact) || empty($flag_contact) )  ? 0: $flag_contact;
                       $this->status_id = (!isset($status_id) || empty($status_id) )  ? 0: $status_id;
                       $this->nom_status = (!isset($nom_status) || empty($nom_status) )  ? '': $nom_status;
                       $this->nom_service = (!isset($nom_service) || empty($nom_service) )  ? '': $nom_service;
                       $this->sigle_service = (!isset($sigle_service) || empty($sigle_service) )  ? '': $sigle_service;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 )  ? $OldTable['id']:$this->id,
                                  'nom_personne'=>(!isset($this->nom_personne) || empty($this->nom_personne) )  ? $OldTable['nom_personne']:$this->nom_personne,
                                  'prenom_personne'=>(!isset($this->prenom_personne) || empty($this->prenom_personne) )  ? $OldTable['prenom_personne']:$this->prenom_personne,
                                  'genre_personne'=>(!isset($this->genre_personne) || empty($this->genre_personne) )  ? $OldTable['genre_personne']:$this->genre_personne,
                                  'date_naiss_personne'=>($this->date_naiss_personne == null )  ? $OldTable['date_naiss_personne']:$this->date_naiss_personne,
                                  'lieu_naiss_personne'=>(!isset($this->lieu_naiss_personne) || empty($this->lieu_naiss_personne) )  ? $OldTable['lieu_naiss_personne']:$this->lieu_naiss_personne,
                                  'nationalite_personne'=>(!isset($this->nationalite_personne) || empty($this->nationalite_personne) )  ? $OldTable['nationalite_personne']:$this->nationalite_personne,
                                  'typepiece_personne'=>(!isset($this->typepiece_personne) || empty($this->typepiece_personne) )  ? $OldTable['typepiece_personne']:$this->typepiece_personne,
                                  'numpiece_personne'=>(!isset($this->numpiece_personne) || empty($this->numpiece_personne) )  ? $OldTable['numpiece_personne']:$this->numpiece_personne,
                                  'photo_personne'=>(!isset($this->photo_personne) || empty($this->photo_personne) )  ? $OldTable['photo_personne']:$this->photo_personne,
                                  'details_personne'=>(!isset($this->details_personne) || empty($this->details_personne) )  ? $OldTable['details_personne']:$this->details_personne,
                                  'id_service'=>($this->id_service == 0 )  ? $OldTable['id_service']:$this->id_service,
                                  'flag_personne'=>($this->flag_personne == 0 )  ? $OldTable['flag_personne']:$this->flag_personne,
                                  'adress'=>(!isset($this->adress) || empty($this->adress) )  ? $OldTable['adress']:$this->adress,
                                  'tel'=>(!isset($this->tel) || empty($this->tel) )  ? $OldTable['tel']:$this->tel,
                                  'email_personne'=>(!isset($this->email_personne) || empty($this->email_personne) )  ? $OldTable['email_personne']:$this->email_personne,
                                  'codepostal'=>(!isset($this->codepostal) || empty($this->codepostal) )  ? $OldTable['codepostal']:$this->codepostal,
                                  'contact_urgent'=>(!isset($this->contact_urgent) || empty($this->contact_urgent) )  ? $OldTable['contact_urgent']:$this->contact_urgent,
                                  'etat_civile'=>(!isset($this->etat_civile) || empty($this->etat_civile) )  ? $OldTable['etat_civile']:$this->etat_civile,
                                  'nbr_conjoint'=>($this->nbr_conjoint == 0 )  ? $OldTable['nbr_conjoint']:$this->nbr_conjoint,
                                  'nbr_enfant'=>($this->nbr_enfant == 0 )  ? $OldTable['nbr_enfant']:$this->nbr_enfant,
                                  'info_conjoint'=>(!isset($this->info_conjoint) || empty($this->info_conjoint) )  ? $OldTable['info_conjoint']:$this->info_conjoint,
                                  'flag_contact'=>($this->flag_contact == 0 )  ? $OldTable['flag_contact']:$this->flag_contact,
                                  'status_id'=>($this->status_id == 0 )  ? $OldTable['status_id']:$this->status_id,
                                  'nom_status'=>(!isset($this->nom_status) || empty($this->nom_status) )  ? $OldTable['nom_status']:$this->nom_status,
                                  'nom_service'=>(!isset($this->nom_service) || empty($this->nom_service) )  ? $OldTable['nom_service']:$this->nom_service,
                                  'sigle_service'=>(!isset($this->sigle_service) || empty($this->sigle_service) )  ? $OldTable['sigle_service']:$this->sigle_service					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>0,
                                  'nom_personne'=>"",
                                  'prenom_personne'=>"",
                                  'genre_personne'=>'',
                                  'date_naiss_personne'=>date(""),
                                  'lieu_naiss_personne'=>"",
                                  'nationalite_personne'=>"",
                                  'typepiece_personne'=>'',
                                  'numpiece_personne'=>"",
                                  'photo_personne'=>"",
                                  'details_personne'=>"",
                                  'id_service'=>0,
                                  'flag_personne'=>0,
                                  'adress'=>"",
                                  'tel'=>"",
                                  'email_personne'=>"",
                                  'codepostal'=>"",
                                  'contact_urgent'=>"",
                                  'etat_civile'=>"",
                                  'nbr_conjoint'=>0,
                                  'nbr_enfant'=>0,
                                  'info_conjoint'=>"",
                                  'flag_contact'=>0,
                                  'status_id'=>0,
                                  'nom_status'=>"",
                                  'nom_service'=>"",
                                  'sigle_service'=>""					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



