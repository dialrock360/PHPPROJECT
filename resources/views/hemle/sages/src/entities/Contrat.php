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

        class Contrat extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $type_contrat_id;
        private  $personne_id;
        private  $departement_id;
        private  $modalite_contrat_id;
        private  $metier;
        private  $cv_contrat;
        private  $statut_contrat;
        private  $numsecu_sire;
        private  $datedebut;
        private  $datefin;
        private  $duree_essai;
        private  $avantages_contrat;
        private  $preavie_demande_conger;
        private  $nbr_jr_conge_par_mois_tavail;
        private  $etat_contrat;
        private  $flag_contract;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="contrat";
                 $this->id = 'null' ;
                 $this->type_contrat_id = 0 ;
                 $this->personne_id = 0 ;
                 $this->departement_id = 0 ;
                 $this->modalite_contrat_id = 0 ;
                 $this->metier = "" ;
                 $this->cv_contrat = "" ;
                 $this->statut_contrat = "" ;
                 $this->numsecu_sire = "" ;
                 $this->datedebut = date("") ;
                 $this->datefin = date("") ;
                 $this->duree_essai = 0 ;
                 $this->avantages_contrat = "" ;
                 $this->preavie_demande_conger = 0 ;
                 $this->nbr_jr_conge_par_mois_tavail = 0 ;
                 $this->etat_contrat = 0 ;
                 $this->flag_contract = 0 ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getType_contrat_id()
                 {
                     return $this->type_contrat_id;
                 }

             public function getPersonne_id()
                 {
                     return $this->personne_id;
                 }

             public function getDepartement_id()
                 {
                     return $this->departement_id;
                 }

             public function getModalite_contrat_id()
                 {
                     return $this->modalite_contrat_id;
                 }

             public function getMetier()
                 {
                     return $this->metier;
                 }

             public function getCv_contrat()
                 {
                     return $this->cv_contrat;
                 }

             public function getStatut_contrat()
                 {
                     return $this->statut_contrat;
                 }

             public function getNumsecu_sire()
                 {
                     return $this->numsecu_sire;
                 }

             public function getDatedebut()
                 {
                     return $this->datedebut;
                 }

             public function getDatefin()
                 {
                     return $this->datefin;
                 }

             public function getDuree_essai()
                 {
                     return $this->duree_essai;
                 }

             public function getAvantages_contrat()
                 {
                     return $this->avantages_contrat;
                 }

             public function getPreavie_demande_conger()
                 {
                     return $this->preavie_demande_conger;
                 }

             public function getNbr_jr_conge_par_mois_tavail()
                 {
                     return $this->nbr_jr_conge_par_mois_tavail;
                 }

             public function getEtat_contrat()
                 {
                     return $this->etat_contrat;
                 }

             public function getFlag_contract()
                 {
                     return $this->flag_contract;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setType_contrat_id($type_contrat_id)
                 {
                      $this->type_contrat_id = $type_contrat_id;
                 }

             public function setPersonne_id($personne_id)
                 {
                      $this->personne_id = $personne_id;
                 }

             public function setDepartement_id($departement_id)
                 {
                      $this->departement_id = $departement_id;
                 }

             public function setModalite_contrat_id($modalite_contrat_id)
                 {
                      $this->modalite_contrat_id = $modalite_contrat_id;
                 }

             public function setMetier($metier)
                 {
                      $this->metier = $metier;
                 }

             public function setCv_contrat($cv_contrat)
                 {
                      $this->cv_contrat = $cv_contrat;
                 }

             public function setStatut_contrat($statut_contrat)
                 {
                      $this->statut_contrat = $statut_contrat;
                 }

             public function setNumsecu_sire($numsecu_sire)
                 {
                      $this->numsecu_sire = $numsecu_sire;
                 }

             public function setDatedebut($datedebut)
                 {
                      $this->datedebut = $datedebut;
                 }

             public function setDatefin($datefin)
                 {
                      $this->datefin = $datefin;
                 }

             public function setDuree_essai($duree_essai)
                 {
                      $this->duree_essai = $duree_essai;
                 }

             public function setAvantages_contrat($avantages_contrat)
                 {
                      $this->avantages_contrat = $avantages_contrat;
                 }

             public function setPreavie_demande_conger($preavie_demande_conger)
                 {
                      $this->preavie_demande_conger = $preavie_demande_conger;
                 }

             public function setNbr_jr_conge_par_mois_tavail($nbr_jr_conge_par_mois_tavail)
                 {
                      $this->nbr_jr_conge_par_mois_tavail = $nbr_jr_conge_par_mois_tavail;
                 }

             public function setEtat_contrat($etat_contrat)
                 {
                      $this->etat_contrat = $etat_contrat;
                 }

             public function setFlag_contract($flag_contract)
                 {
                      $this->flag_contract = $flag_contract;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count contrat =====================*/
					public function countContrat(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get contrat =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste contrat =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("contrat");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("contrat");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("contrat");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_contrat = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If contrat existe =====================*/
					public function ifContratexiste($condition){
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
                       $this->type_contrat_id = (!isset($type_contrat_id) || empty($type_contrat_id) )  ? 0: $type_contrat_id;
                       $this->personne_id = (!isset($personne_id) || empty($personne_id) )  ? 0: $personne_id;
                       $this->departement_id = (!isset($departement_id) || empty($departement_id) )  ? 0: $departement_id;
                       $this->modalite_contrat_id = (!isset($modalite_contrat_id) || empty($modalite_contrat_id) )  ? 0: $modalite_contrat_id;
                       $this->metier = (!isset($metier) || empty($metier) )  ? '': $metier;
                       $this->cv_contrat = (!isset($cv_contrat) || empty($cv_contrat) )  ? '': $cv_contrat;
                       $this->statut_contrat = (!isset($statut_contrat) || empty($statut_contrat) )  ? '': $statut_contrat;
                       $this->numsecu_sire = (!isset($numsecu_sire) || empty($numsecu_sire) )  ? '': $numsecu_sire;
                       $this->datedebut = (!isset($datedebut) || empty($datedebut) )  ? '': $datedebut;
                       $this->datefin = (!isset($datefin) || empty($datefin) )  ? '': $datefin;
                       $this->duree_essai = (!isset($duree_essai) || empty($duree_essai) )  ? 0: $duree_essai;
                       $this->avantages_contrat = (!isset($avantages_contrat) || empty($avantages_contrat) )  ? '': $avantages_contrat;
                       $this->preavie_demande_conger = (!isset($preavie_demande_conger) || empty($preavie_demande_conger) )  ? 0: $preavie_demande_conger;
                       $this->nbr_jr_conge_par_mois_tavail = (!isset($nbr_jr_conge_par_mois_tavail) || empty($nbr_jr_conge_par_mois_tavail) )  ? 0: $nbr_jr_conge_par_mois_tavail;
                       $this->etat_contrat = (!isset($etat_contrat) || empty($etat_contrat) )  ? 0: $etat_contrat;
                       $this->flag_contract = (!isset($flag_contract) || empty($flag_contract) )  ? 0: $flag_contract;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'type_contrat_id'=>($this->type_contrat_id == 0 )  ? $OldTable['type_contrat_id']:$this->type_contrat_id,
                                  'personne_id'=>($this->personne_id == 0 )  ? $OldTable['personne_id']:$this->personne_id,
                                  'departement_id'=>($this->departement_id == 0 )  ? $OldTable['departement_id']:$this->departement_id,
                                  'modalite_contrat_id'=>($this->modalite_contrat_id == 0 )  ? $OldTable['modalite_contrat_id']:$this->modalite_contrat_id,
                                  'metier'=>(!isset($this->metier) || empty($this->metier) )  ? $OldTable['metier']:$this->metier,
                                  'cv_contrat'=>(!isset($this->cv_contrat) || empty($this->cv_contrat) )  ? $OldTable['cv_contrat']:$this->cv_contrat,
                                  'statut_contrat'=>(!isset($this->statut_contrat) || empty($this->statut_contrat) )  ? $OldTable['statut_contrat']:$this->statut_contrat,
                                  'numsecu_sire'=>(!isset($this->numsecu_sire) || empty($this->numsecu_sire) )  ? $OldTable['numsecu_sire']:$this->numsecu_sire,
                                  'datedebut'=>($this->datedebut == null )  ? $OldTable['datedebut']:$this->datedebut,
                                  'datefin'=>($this->datefin == null )  ? $OldTable['datefin']:$this->datefin,
                                  'duree_essai'=>($this->duree_essai == 0 )  ? $OldTable['duree_essai']:$this->duree_essai,
                                  'avantages_contrat'=>(!isset($this->avantages_contrat) || empty($this->avantages_contrat) )  ? $OldTable['avantages_contrat']:$this->avantages_contrat,
                                  'preavie_demande_conger'=>($this->preavie_demande_conger == 0 )  ? $OldTable['preavie_demande_conger']:$this->preavie_demande_conger,
                                  'nbr_jr_conge_par_mois_tavail'=>($this->nbr_jr_conge_par_mois_tavail == 0 )  ? $OldTable['nbr_jr_conge_par_mois_tavail']:$this->nbr_jr_conge_par_mois_tavail,
                                  'etat_contrat'=>($this->etat_contrat == 0 )  ? $OldTable['etat_contrat']:$this->etat_contrat,
                                  'flag_contract'=>($this->flag_contract == 0 )  ? $OldTable['flag_contract']:$this->flag_contract					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'type_contrat_id'=>0,
                                  'personne_id'=>0,
                                  'departement_id'=>0,
                                  'modalite_contrat_id'=>0,
                                  'metier'=>"",
                                  'cv_contrat'=>"",
                                  'statut_contrat'=>"",
                                  'numsecu_sire'=>"",
                                  'datedebut'=>date(""),
                                  'datefin'=>date(""),
                                  'duree_essai'=>0,
                                  'avantages_contrat'=>"",
                                  'preavie_demande_conger'=>0,
                                  'nbr_jr_conge_par_mois_tavail'=>0,
                                  'etat_contrat'=>0,
                                  'flag_contract'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



