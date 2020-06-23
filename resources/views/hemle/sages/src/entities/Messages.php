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

        class Messages extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_service;
        private  $date_message;
        private  $object_message;
        private  $pj_message;
        private  $origine_message;
        private  $cible_message;
        private  $attribute_10;
        private  $attribute_11;
        private  $id_origine;
        private  $id_sible;
        private  $content_message;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="messages";
                 $this->id = 'null' ;
                 $this->id_service = 0 ;
                 $this->date_message = date("") ;
                 $this->object_message = "" ;
                 $this->pj_message = "" ;
                 $this->origine_message = "" ;
                 $this->cible_message = "" ;
                 $this->attribute_10 = "" ;
                 $this->attribute_11 = "" ;
                 $this->id_origine = 0 ;
                 $this->id_sible = 0 ;
                 $this->content_message = "" ;
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

             public function getDate_message()
                 {
                     return $this->date_message;
                 }

             public function getObject_message()
                 {
                     return $this->object_message;
                 }

             public function getPj_message()
                 {
                     return $this->pj_message;
                 }

             public function getOrigine_message()
                 {
                     return $this->origine_message;
                 }

             public function getCible_message()
                 {
                     return $this->cible_message;
                 }

             public function getAttribute_10()
                 {
                     return $this->attribute_10;
                 }

             public function getAttribute_11()
                 {
                     return $this->attribute_11;
                 }

             public function getId_origine()
                 {
                     return $this->id_origine;
                 }

             public function getId_sible()
                 {
                     return $this->id_sible;
                 }

             public function getContent_message()
                 {
                     return $this->content_message;
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

             public function setDate_message($date_message)
                 {
                      $this->date_message = $date_message;
                 }

             public function setObject_message($object_message)
                 {
                      $this->object_message = $object_message;
                 }

             public function setPj_message($pj_message)
                 {
                      $this->pj_message = $pj_message;
                 }

             public function setOrigine_message($origine_message)
                 {
                      $this->origine_message = $origine_message;
                 }

             public function setCible_message($cible_message)
                 {
                      $this->cible_message = $cible_message;
                 }

             public function setAttribute_10($attribute_10)
                 {
                      $this->attribute_10 = $attribute_10;
                 }

             public function setAttribute_11($attribute_11)
                 {
                      $this->attribute_11 = $attribute_11;
                 }

             public function setId_origine($id_origine)
                 {
                      $this->id_origine = $id_origine;
                 }

             public function setId_sible($id_sible)
                 {
                      $this->id_sible = $id_sible;
                 }

             public function setContent_message($content_message)
                 {
                      $this->content_message = $content_message;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count messages =====================*/
					public function countMessages(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get messages =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste messages =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("messages");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("messages");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("messages");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_messages = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If messages existe =====================*/
					public function ifMessagesexiste($condition){
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
                       $this->date_message = (!isset($date_message) || empty($date_message) )  ? '': $date_message;
                       $this->object_message = (!isset($object_message) || empty($object_message) )  ? '': $object_message;
                       $this->pj_message = (!isset($pj_message) || empty($pj_message) )  ? '': $pj_message;
                       $this->origine_message = (!isset($origine_message) || empty($origine_message) )  ? '': $origine_message;
                       $this->cible_message = (!isset($cible_message) || empty($cible_message) )  ? '': $cible_message;
                       $this->attribute_10 = (!isset($attribute_10) || empty($attribute_10) )  ? '': $attribute_10;
                       $this->attribute_11 = (!isset($attribute_11) || empty($attribute_11) )  ? '': $attribute_11;
                       $this->id_origine = (!isset($id_origine) || empty($id_origine) )  ? 0: $id_origine;
                       $this->id_sible = (!isset($id_sible) || empty($id_sible) )  ? 0: $id_sible;
                       $this->content_message = (!isset($content_message) || empty($content_message) )  ? '': $content_message;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'id_service'=>($this->id_service == 0 )  ? $OldTable['id_service']:$this->id_service,
                                  'date_message'=>($this->date_message == null )  ? $OldTable['date_message']:$this->date_message,
                                  'object_message'=>(!isset($this->object_message) || empty($this->object_message) )  ? $OldTable['object_message']:$this->object_message,
                                  'pj_message'=>(!isset($this->pj_message) || empty($this->pj_message) )  ? $OldTable['pj_message']:$this->pj_message,
                                  'origine_message'=>(!isset($this->origine_message) || empty($this->origine_message) )  ? $OldTable['origine_message']:$this->origine_message,
                                  'cible_message'=>(!isset($this->cible_message) || empty($this->cible_message) )  ? $OldTable['cible_message']:$this->cible_message,
                                  'Attribute_10'=>(!isset($this->attribute_10) || empty($this->attribute_10) )  ? $OldTable['attribute_10']:$this->attribute_10,
                                  'Attribute_11'=>(!isset($this->attribute_11) || empty($this->attribute_11) )  ? $OldTable['attribute_11']:$this->attribute_11,
                                  'id_origine'=>($this->id_origine == 0 )  ? $OldTable['id_origine']:$this->id_origine,
                                  'id_sible'=>($this->id_sible == 0 )  ? $OldTable['id_sible']:$this->id_sible,
                                  'content_message'=>(!isset($this->content_message) || empty($this->content_message) )  ? $OldTable['content_message']:$this->content_message					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'id_service'=>0,
                                  'date_message'=>date(""),
                                  'object_message'=>"",
                                  'pj_message'=>"",
                                  'origine_message'=>"",
                                  'cible_message'=>"",
                                  'Attribute_10'=>"",
                                  'Attribute_11'=>"",
                                  'id_origine'=>0,
                                  'id_sible'=>0,
                                  'content_message'=>""					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



