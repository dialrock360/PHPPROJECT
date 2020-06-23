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
    /*==================Classe creer par Samane samane_ui_admin le 04-12-2019 12:35:01=====================*/

        class User extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $role_id;
        private  $matricule;
        private  $fullname;
        private  $email;
        private  $password;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="user";
                 $this->id = 'null' ;
                 $this->role_id = 0 ;
                 $this->matricule = "" ;
                 $this->fullname = "" ;
                 $this->email = "" ;
                 $this->password = "" ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getRole_id()
                 {
                     return $this->role_id;
                 }

             public function getMatricule()
                 {
                     return $this->matricule;
                 }

             public function getFullname()
                 {
                     return $this->fullname;
                 }

             public function getEmail()
                 {
                     return $this->email;
                 }

             public function getPassword()
                 {
                     return $this->password;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setRole_id($role_id)
                 {
                      $this->role_id = $role_id;
                 }

             public function setMatricule($matricule)
                 {
                      $this->matricule = $matricule;
                 }

             public function setFullname($fullname)
                 {
                      $this->fullname = $fullname;
                 }

             public function setEmail($email)
                 {
                      $this->email = $email;
                 }

             public function setPassword($password)
                 {
                      $this->password = $password;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count user =====================*/
					public function countUser(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get user =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste user =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'role_id'=>($this->role_id == 0 )  ? $OldTable['role_id']:$this->role_id,
                                  'matricule'=>(!isset($this->matricule) || empty($this->matricule) )  ? $OldTable['matricule']:$this->matricule,
                                  'fullname'=>(!isset($this->fullname) || empty($this->fullname) )  ? $OldTable['fullname']:$this->fullname,
                                  'email'=>(!isset($this->email) || empty($this->email) )  ? $OldTable['email']:$this->email,
                                  'password'=>(!isset($this->password) || empty($this->password) )  ? $OldTable['password']:$this->password					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'role_id'=>0,
                                  'matricule'=>"",
                                  'fullname'=>"",
                                  'email'=>"",
                                  'password'=>""					     );
                                  return $Table;
                  }
					  public function insert(){
					    $this->setTablename("user");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("user");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("user");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_user = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If user existe =====================*/
					public function ifUserexiste($condition){
					    $this->db->setTablename($this->tablename);
	$existe=$this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					if($existe != null)
					      {
					                 return 1;
					      } 
					return 0;
					                }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



