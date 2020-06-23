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
    /*==================Classe creer par Samane samane_ui_admin le 05-12-2019 02:38:06=====================*/

        class Account_sessions extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $session_id;
        private  $account_id;
        private  $account_token;
        private  $login_time;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="account_sessions";
                 $this->session_id = "" ;
                 $this->account_id = 0 ;
                 $this->account_token = "" ;
                 $this->login_time = date("") ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getSession_id()
                 {
                     return $this->session_id;
                 }

             public function getAccount_id()
                 {
                     return $this->account_id;
                 }

             public function getAccount_token()
                 {
                     return $this->account_token;
                 }

             public function getLogin_time()
                 {
                     return $this->login_time;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setSession_id($session_id)
                 {
                      $this->session_id = $session_id;
                 }

             public function setAccount_id($account_id)
                 {
                      $this->account_id = $account_id;
                 }

             public function setAccount_token($account_token)
                 {
                      $this->account_token = $account_token;
                 }

             public function setLogin_time($login_time)
                 {
                      $this->login_time = $login_time;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count account_sessions =====================*/
					public function countAccount_sessions(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get account_sessions =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("session_id" =>$this->session_id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste account_sessions =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("account_sessions");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("account_sessions");
					    $condition = array( 'session_id'=>$this->session_id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("account_sessions");
					    $condition = array( 'session_id'=>$this->session_id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_account_sessions = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If account_sessions existe =====================*/
					public function ifAccount_sessionsexiste($condition){
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
                                                       $this->session_id = (!isset($session_id) || empty($session_id) )  ? '': $session_id;
                       $this->account_id = (!isset($account_id) || empty($account_id) )  ? 0: $account_id;
                       $this->account_token = (!isset($account_token) || empty($account_token) )  ? '': $account_token;
                       $this->login_time = (!isset($login_time) || empty($login_time) )  ? '': $login_time;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'session_id'=>(!isset($this->session_id) || empty($this->session_id) )  ? $OldTable['session_id']:$this->session_id,
                                  'account_id'=>($this->account_id == 0 )  ? $OldTable['account_id']:$this->account_id,
                                  'account_token'=>(!isset($this->account_token) || empty($this->account_token) )  ? $OldTable['account_token']:$this->account_token,
                                  'login_time'=>($this->login_time == null )  ? $OldTable['login_time']:$this->login_time					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'session_id'=>"",
                                  'account_id'=>0,
                                  'account_token'=>"",
                                  'login_time'=>date("")					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



