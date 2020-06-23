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

        class Connexion_filter extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $ip;
        private  $nbr_failled_conexion;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="connexion_filter";
                 $this->ip = "" ;
                 $this->nbr_failled_conexion = 0 ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getIp()
                 {
                     return $this->ip;
                 }

             public function getNbr_failled_conexion()
                 {
                     return $this->nbr_failled_conexion;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setIp($ip)
                 {
                      $this->ip = $ip;
                 }

             public function setNbr_failled_conexion($nbr_failled_conexion)
                 {
                      $this->nbr_failled_conexion = $nbr_failled_conexion;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count connexion_filter =====================*/
					public function countConnexion_filter(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get connexion_filter =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("ip" =>$this->ip);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste connexion_filter =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("connexion_filter");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("connexion_filter");
					    $condition = array( 'ip'=>$this->ip );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("connexion_filter");
					    $condition = array( 'ip'=>$this->ip );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_connexion_filter = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If connexion_filter existe =====================*/
					public function ifConnexion_filterexiste($condition){
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
                                                       $this->ip = (!isset($ip) || empty($ip) )  ? '': $ip;
                       $this->nbr_failled_conexion = (!isset($nbr_failled_conexion) || empty($nbr_failled_conexion) )  ? 0: $nbr_failled_conexion;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'ip'=>(!isset($this->ip) || empty($this->ip) )  ? $OldTable['ip']:$this->ip,
                                  'nbr_failled_conexion'=>($this->nbr_failled_conexion == 0 )  ? $OldTable['nbr_failled_conexion']:$this->nbr_failled_conexion					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'ip'=>"",
                                  'nbr_failled_conexion'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



