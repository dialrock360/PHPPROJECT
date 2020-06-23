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

        class Author extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $author_id;
        private  $name;
        private  $email;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="author";
                 $this->author_id = 'null' ;
                 $this->name = "" ;
                 $this->email = "" ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getAuthor_id()
                 {
                     return $this->author_id;
                 }

             public function getName()
                 {
                     return $this->name;
                 }

             public function getEmail()
                 {
                     return $this->email;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setAuthor_id($author_id)
                 {
                      $this->author_id = $author_id;
                 }

             public function setName($name)
                 {
                      $this->name = $name;
                 }

             public function setEmail($email)
                 {
                      $this->email = $email;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count author =====================*/
					public function countAuthor(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get author =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("author_id" =>$this->author_id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste author =====================*/
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
                                 
                                  'author_id'=>($this->author_id == 0 || $this->author_id == 'null')  ? $OldTable['author_id']:$this->author_id,
                                  'name'=>(!isset($this->name) || empty($this->name) )  ? $OldTable['name']:$this->name,
                                  'email'=>(!isset($this->email) || empty($this->email) )  ? $OldTable['email']:$this->email					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'author_id'=>'null',
                                  'name'=>"",
                                  'email'=>""					     );
                                  return $Table;
                  }
					  public function insert(){
					    $this->setTablename("author");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("author");
					    $condition = array( 'author_id'=>$this->author_id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("author");
					    $condition = array( 'author_id'=>$this->author_id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_author = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If author existe =====================*/
					public function ifAuthorexiste($condition){
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



