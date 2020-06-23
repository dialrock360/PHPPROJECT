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

        class Users_roles extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id_user;
        private  $id_role;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="users_roles";
                 $this->id_user = 0 ;
                 $this->id_role = 0 ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId_user()
                 {
                     return $this->id_user;
                 }

             public function getId_role()
                 {
                     return $this->id_role;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId_user($id_user)
                 {
                      $this->id_user = $id_user;
                 }

             public function setId_role($id_role)
                 {
                      $this->id_role = $id_role;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count users_roles =====================*/
					public function countUsers_roles(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get users_roles =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id_user" =>$this->id_user);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste users_roles =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }
					  public function insert(){
					    $this->setTablename("users_roles");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("users_roles");
					    $condition = array( 'id_user'=>$this->id_user,'id_role'=>$this->id_role );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("users_roles");
					    $condition = array( 'id_user'=>$this->id_user,'id_role'=>$this->id_role );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_users_roles = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If users_roles existe =====================*/
					public function ifUsers_rolesexiste($condition){
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
                                                       $this->id_user = (!isset($id_user) || empty($id_user) )  ? 0: $id_user;
                       $this->id_role = (!isset($id_role) || empty($id_role) )  ? 0: $id_role;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id_user'=>($this->id_user == 0 )  ? $OldTable['id_user']:$this->id_user,
                                  'id_role'=>($this->id_role == 0 )  ? $OldTable['id_role']:$this->id_role					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id_user'=>0,
                                  'id_role'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



