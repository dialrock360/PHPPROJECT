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
    /*==================Classe creer par Samane samane_ui_admin le 05-12-2019 02:38:08=====================*/

        class Mouvement extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_service;
        private  $id_type_mouvement;
        private  $id_commercial;
        private  $id_users;
        private  $date_mouvement;
        private  $object_mouvement;
        private  $content_mouvement;
        private  $total_ht_mouvement;
        private  $tva_mouvement;
        private  $totalttc_mouvement;
        private  $totalltr_mouvement;
        private  $avance_mouvement;
        private  $reste_mouvement;
        private  $flag_mouvement;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="mouvement";
                 $this->id = 'null' ;
                 $this->id_service = 0 ;
                 $this->id_type_mouvement = 0 ;
                 $this->id_commercial = 0 ;
                 $this->id_users = 0 ;
                 $this->date_mouvement = date("") ;
                 $this->object_mouvement = "" ;
                 $this->content_mouvement = "" ;
                 $this->total_ht_mouvement = 0 ;
                 $this->tva_mouvement = 0 ;
                 $this->totalttc_mouvement = 0 ;
                 $this->totalltr_mouvement = "" ;
                 $this->avance_mouvement = 0 ;
                 $this->reste_mouvement = 0 ;
                 $this->flag_mouvement = 0 ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getId_service()
                 {
                     return $this->id_service;
                 }

             public function getId_type_mouvement()
                 {
                     return $this->id_type_mouvement;
                 }

             public function getId_commercial()
                 {
                     return $this->id_commercial;
                 }

             public function getId_users()
                 {
                     return $this->id_users;
                 }

             public function getDate_mouvement()
                 {
                     return $this->date_mouvement;
                 }

             public function getObject_mouvement()
                 {
                     return $this->object_mouvement;
                 }

             public function getContent_mouvement()
                 {
                     return $this->content_mouvement;
                 }

             public function getTotal_ht_mouvement()
                 {
                     return $this->total_ht_mouvement;
                 }

             public function getTva_mouvement()
                 {
                     return $this->tva_mouvement;
                 }

             public function getTotalttc_mouvement()
                 {
                     return $this->totalttc_mouvement;
                 }

             public function getTotalltr_mouvement()
                 {
                     return $this->totalltr_mouvement;
                 }

             public function getAvance_mouvement()
                 {
                     return $this->avance_mouvement;
                 }

             public function getReste_mouvement()
                 {
                     return $this->reste_mouvement;
                 }

             public function getFlag_mouvement()
                 {
                     return $this->flag_mouvement;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_service($id_service)
                 {
                      $this->id_service = $id_service;
                 }

             public function setId_type_mouvement($id_type_mouvement)
                 {
                      $this->id_type_mouvement = $id_type_mouvement;
                 }

             public function setId_commercial($id_commercial)
                 {
                      $this->id_commercial = $id_commercial;
                 }

             public function setId_users($id_users)
                 {
                      $this->id_users = $id_users;
                 }

             public function setDate_mouvement($date_mouvement)
                 {
                      $this->date_mouvement = $date_mouvement;
                 }

             public function setObject_mouvement($object_mouvement)
                 {
                      $this->object_mouvement = $object_mouvement;
                 }

             public function setContent_mouvement($content_mouvement)
                 {
                      $this->content_mouvement = $content_mouvement;
                 }

             public function setTotal_ht_mouvement($total_ht_mouvement)
                 {
                      $this->total_ht_mouvement = $total_ht_mouvement;
                 }

             public function setTva_mouvement($tva_mouvement)
                 {
                      $this->tva_mouvement = $tva_mouvement;
                 }

             public function setTotalttc_mouvement($totalttc_mouvement)
                 {
                      $this->totalttc_mouvement = $totalttc_mouvement;
                 }

             public function setTotalltr_mouvement($totalltr_mouvement)
                 {
                      $this->totalltr_mouvement = $totalltr_mouvement;
                 }

             public function setAvance_mouvement($avance_mouvement)
                 {
                      $this->avance_mouvement = $avance_mouvement;
                 }

             public function setReste_mouvement($reste_mouvement)
                 {
                      $this->reste_mouvement = $reste_mouvement;
                 }

             public function setFlag_mouvement($flag_mouvement)
                 {
                      $this->flag_mouvement = $flag_mouvement;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count mouvement =====================*/
					public function countMouvement(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get mouvement =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste mouvement =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("mouvement");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("mouvement");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("mouvement");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_mouvement = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If mouvement existe =====================*/
					public function ifMouvementexiste($condition){
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
                       $this->id_service = (!isset($id_service) || empty($id_service) )  ? 0: $id_service;
                       $this->id_type_mouvement = (!isset($id_type_mouvement) || empty($id_type_mouvement) )  ? 0: $id_type_mouvement;
                       $this->id_commercial = (!isset($id_commercial) || empty($id_commercial) )  ? 0: $id_commercial;
                       $this->id_users = (!isset($id_users) || empty($id_users) )  ? 0: $id_users;
                       $this->date_mouvement = (!isset($date_mouvement) || empty($date_mouvement) )  ? '': $date_mouvement;
                       $this->object_mouvement = (!isset($object_mouvement) || empty($object_mouvement) )  ? '': $object_mouvement;
                       $this->content_mouvement = (!isset($content_mouvement) || empty($content_mouvement) )  ? '': $content_mouvement;
                       $this->total_ht_mouvement = (!isset($total_ht_mouvement) || empty($total_ht_mouvement) )  ? 0: $total_ht_mouvement;
                       $this->tva_mouvement = (!isset($tva_mouvement) || empty($tva_mouvement) )  ? 0: $tva_mouvement;
                       $this->totalttc_mouvement = (!isset($totalttc_mouvement) || empty($totalttc_mouvement) )  ? 0: $totalttc_mouvement;
                       $this->totalltr_mouvement = (!isset($totalltr_mouvement) || empty($totalltr_mouvement) )  ? '': $totalltr_mouvement;
                       $this->avance_mouvement = (!isset($avance_mouvement) || empty($avance_mouvement) )  ? 0: $avance_mouvement;
                       $this->reste_mouvement = (!isset($reste_mouvement) || empty($reste_mouvement) )  ? 0: $reste_mouvement;
                       $this->flag_mouvement = (!isset($flag_mouvement) || empty($flag_mouvement) )  ? 0: $flag_mouvement;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'id_service'=>($this->id_service == 0 )  ? $OldTable['id_service']:$this->id_service,
                                  'id_type_mouvement'=>($this->id_type_mouvement == 0 )  ? $OldTable['id_type_mouvement']:$this->id_type_mouvement,
                                  'id_commercial'=>($this->id_commercial == 0 )  ? $OldTable['id_commercial']:$this->id_commercial,
                                  'id_users'=>($this->id_users == 0 )  ? $OldTable['id_users']:$this->id_users,
                                  'date_mouvement'=>($this->date_mouvement == null )  ? $OldTable['date_mouvement']:$this->date_mouvement,
                                  'object_mouvement'=>(!isset($this->object_mouvement) || empty($this->object_mouvement) )  ? $OldTable['object_mouvement']:$this->object_mouvement,
                                  'content_mouvement'=>(!isset($this->content_mouvement) || empty($this->content_mouvement) )  ? $OldTable['content_mouvement']:$this->content_mouvement,
                                  'total_ht_mouvement'=>($this->total_ht_mouvement == 0 )  ? $OldTable['total_ht_mouvement']:$this->total_ht_mouvement,
                                  'tva_mouvement'=>($this->tva_mouvement == 0 )  ? $OldTable['tva_mouvement']:$this->tva_mouvement,
                                  'totalttc_mouvement'=>($this->totalttc_mouvement == 0 )  ? $OldTable['totalttc_mouvement']:$this->totalttc_mouvement,
                                  'totalltr_mouvement'=>(!isset($this->totalltr_mouvement) || empty($this->totalltr_mouvement) )  ? $OldTable['totalltr_mouvement']:$this->totalltr_mouvement,
                                  'avance_mouvement'=>($this->avance_mouvement == 0 )  ? $OldTable['avance_mouvement']:$this->avance_mouvement,
                                  'reste_mouvement'=>($this->reste_mouvement == 0 )  ? $OldTable['reste_mouvement']:$this->reste_mouvement,
                                  'flag_mouvement'=>($this->flag_mouvement == 0 )  ? $OldTable['flag_mouvement']:$this->flag_mouvement					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'id_service'=>0,
                                  'id_type_mouvement'=>0,
                                  'id_commercial'=>0,
                                  'id_users'=>0,
                                  'date_mouvement'=>date(""),
                                  'object_mouvement'=>"",
                                  'content_mouvement'=>"",
                                  'total_ht_mouvement'=>0,
                                  'tva_mouvement'=>0,
                                  'totalttc_mouvement'=>0,
                                  'totalltr_mouvement'=>"",
                                  'avance_mouvement'=>0,
                                  'reste_mouvement'=>0,
                                  'flag_mouvement'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



