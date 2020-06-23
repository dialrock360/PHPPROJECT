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

        class Person extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $pid;
        private  $age;
        private  $city;
        private  $gender;
        private  $password;
        private  $username;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="person";
                 $this->pid = 'null' ;
                 $this->age = 0 ;
                 $this->city = "" ;
                 $this->gender = "" ;
                 $this->password = "" ;
                 $this->username = "" ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getPid()
                 {
                     return $this->pid;
                 }

             public function getAge()
                 {
                     return $this->age;
                 }

             public function getCity()
                 {
                     return $this->city;
                 }

             public function getGender()
                 {
                     return $this->gender;
                 }

             public function getPassword()
                 {
                     return $this->password;
                 }

             public function getUsername()
                 {
                     return $this->username;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setPid($pid)
                 {
                      $this->pid = $pid;
                 }

             public function setAge($age)
                 {
                      $this->age = $age;
                 }

             public function setCity($city)
                 {
                      $this->city = $city;
                 }

             public function setGender($gender)
                 {
                      $this->gender = $gender;
                 }

             public function setPassword($password)
                 {
                      $this->password = $password;
                 }

             public function setUsername($username)
                 {
                      $this->username = $username;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count person =====================*/
					public function countPerson(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get person =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("pid" =>$this->pid);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste person =====================*/
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
                                 
                                  'pid'=>($this->pid == 0 || $this->pid == 'null')  ? $OldTable['pid']:$this->pid,
                                  'age'=>($this->age == 0 )  ? $OldTable['age']:$this->age,
                                  'city'=>(!isset($this->city) || empty($this->city) )  ? $OldTable['city']:$this->city,
                                  'gender'=>(!isset($this->gender) || empty($this->gender) )  ? $OldTable['gender']:$this->gender,
                                  'password'=>(!isset($this->password) || empty($this->password) )  ? $OldTable['password']:$this->password,
                                  'username'=>(!isset($this->username) || empty($this->username) )  ? $OldTable['username']:$this->username					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'pid'=>'null',
                                  'age'=>0,
                                  'city'=>"",
                                  'gender'=>"",
                                  'password'=>"",
                                  'username'=>""					     );
                                  return $Table;
                  }
					  public function insert(){
					    $this->setTablename("person");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("person");
					    $condition = array( 'pid'=>$this->pid );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("person");
					    $condition = array( 'pid'=>$this->pid );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_person = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If person existe =====================*/
					public function ifPersonexiste($condition){
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



