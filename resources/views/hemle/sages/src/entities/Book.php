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

        class Book extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $book_id;
        private  $author_id;
        private  $title;
        private  $description;
        private  $published;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="book";
                 $this->book_id = 'null' ;
                 $this->author_id = 0 ;
                 $this->title = "" ;
                 $this->description = "" ;
                 $this->published = date("") ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getBook_id()
                 {
                     return $this->book_id;
                 }

             public function getAuthor_id()
                 {
                     return $this->author_id;
                 }

             public function getTitle()
                 {
                     return $this->title;
                 }

             public function getDescription()
                 {
                     return $this->description;
                 }

             public function getPublished()
                 {
                     return $this->published;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setBook_id($book_id)
                 {
                      $this->book_id = $book_id;
                 }

             public function setAuthor_id($author_id)
                 {
                      $this->author_id = $author_id;
                 }

             public function setTitle($title)
                 {
                      $this->title = $title;
                 }

             public function setDescription($description)
                 {
                      $this->description = $description;
                 }

             public function setPublished($published)
                 {
                      $this->published = $published;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count book =====================*/
					public function countBook(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get book =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("book_id" =>$this->book_id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste book =====================*/
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
                                 
                                  'book_id'=>($this->book_id == 0 || $this->book_id == 'null')  ? $OldTable['book_id']:$this->book_id,
                                  'author_id'=>($this->author_id == 0 )  ? $OldTable['author_id']:$this->author_id,
                                  'title'=>(!isset($this->title) || empty($this->title) )  ? $OldTable['title']:$this->title,
                                  'description'=>(!isset($this->description) || empty($this->description) )  ? $OldTable['description']:$this->description,
                                  'published'=>($this->published == null )  ? $OldTable['published']:$this->published					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'book_id'=>'null',
                                  'author_id'=>0,
                                  'title'=>"",
                                  'description'=>"",
                                  'published'=>date("")					     );
                                  return $Table;
                  }
					  public function insert(){
					    $this->setTablename("book");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("book");
					    $condition = array( 'book_id'=>$this->book_id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("book");
					    $condition = array( 'book_id'=>$this->book_id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_book = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If book existe =====================*/
					public function ifBookexiste($condition){
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



