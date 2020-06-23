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
    /*==================Classe creer par Samane samane_ui_admin le 05-12-2019 02:38:07=====================*/

        class Cordonnees extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $personne_id;
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
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="cordonnees";
                 $this->id = 'null' ;
                 $this->personne_id = 0 ;
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
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getPersonne_id()
                 {
                     return $this->personne_id;
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

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setPersonne_id($personne_id)
                 {
                      $this->personne_id = $personne_id;
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

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count cordonnees =====================*/
					public function countCordonnees(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get cordonnees =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste cordonnees =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("cordonnees");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("cordonnees");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("cordonnees");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_cordonnees = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If cordonnees existe =====================*/
					public function ifCordonneesexiste($condition){
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
                       $this->personne_id = (!isset($personne_id) || empty($personne_id) )  ? 0: $personne_id;
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
                      /* print_r($this->ObjecToarrayMaker());
                       echo '<hr/>';*/
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'personne_id'=>($this->personne_id == 0 )  ? $OldTable['personne_id']:$this->personne_id,
                                  'adress'=>(!isset($this->adress) || empty($this->adress) )  ? $OldTable['adress']:$this->adress,
                                  'tel'=>(!isset($this->tel) || empty($this->tel) )  ? $OldTable['tel']:$this->tel,
                                  'email_personne'=>(!isset($this->email_personne) || empty($this->email_personne) )  ? $OldTable['email_personne']:$this->email_personne,
                                  'codepostal'=>(!isset($this->codepostal) || empty($this->codepostal) )  ? $OldTable['codepostal']:$this->codepostal,
                                  'contact_urgent'=>(!isset($this->contact_urgent) || empty($this->contact_urgent) )  ? $OldTable['contact_urgent']:$this->contact_urgent,
                                  'etat_civile'=>(!isset($this->etat_civile) || empty($this->etat_civile) )  ? $OldTable['etat_civile']:$this->etat_civile,
                                  'nbr_conjoint'=>($this->nbr_conjoint == 0 )  ? $OldTable['nbr_conjoint']:$this->nbr_conjoint,
                                  'nbr_enfant'=>($this->nbr_enfant == 0 )  ? $OldTable['nbr_enfant']:$this->nbr_enfant,
                                  'info_conjoint'=>(!isset($this->info_conjoint) || empty($this->info_conjoint) )  ? $OldTable['info_conjoint']:$this->info_conjoint,
                                  'flag_contact'=>($this->flag_contact == 0 )  ? $OldTable['flag_contact']:$this->flag_contact					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'personne_id'=>0,
                                  'adress'=>"",
                                  'tel'=>"",
                                  'email_personne'=>"",
                                  'codepostal'=>"",
                                  'contact_urgent'=>"",
                                  'etat_civile'=>"",
                                  'nbr_conjoint'=>0,
                                  'nbr_enfant'=>0,
                                  'info_conjoint'=>"",
                                  'flag_contact'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



