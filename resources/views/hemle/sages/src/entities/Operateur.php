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

        class Operateur extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $adresse;
        private  $email;
        private  $nature;
        private  $nom;
        private  $num_piece;
        private  $status;
        private  $tel;
        private  $type_piece;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="operateur";
                 $this->id = 0 ;
                 $this->adresse = "" ;
                 $this->email = "" ;
                 $this->nature = '' ;
                 $this->nom = "" ;
                 $this->num_piece = "" ;
                 $this->status = 0 ;
                 $this->tel = "" ;
                 $this->type_piece = '' ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getAdresse()
                 {
                     return $this->adresse;
                 }

             public function getEmail()
                 {
                     return $this->email;
                 }

             public function getNature()
                 {
                     return $this->nature;
                 }

             public function getNom()
                 {
                     return $this->nom;
                 }

             public function getNum_piece()
                 {
                     return $this->num_piece;
                 }

             public function getStatus()
                 {
                     return $this->status;
                 }

             public function getTel()
                 {
                     return $this->tel;
                 }

             public function getType_piece()
                 {
                     return $this->type_piece;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setAdresse($adresse)
                 {
                      $this->adresse = $adresse;
                 }

             public function setEmail($email)
                 {
                      $this->email = $email;
                 }

             public function setNature($nature)
                 {
                      $this->nature = $nature;
                 }

             public function setNom($nom)
                 {
                      $this->nom = $nom;
                 }

             public function setNum_piece($num_piece)
                 {
                      $this->num_piece = $num_piece;
                 }

             public function setStatus($status)
                 {
                      $this->status = $status;
                 }

             public function setTel($tel)
                 {
                      $this->tel = $tel;
                 }

             public function setType_piece($type_piece)
                 {
                      $this->type_piece = $type_piece;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count operateur =====================*/
					public function countOperateur(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get operateur =====================*/
					public function get(){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                       return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					                }

				/*================== Liste operateur =====================*/
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
                                 
                                  'id'=>($this->id == 0 )  ? $OldTable['id']:$this->id,
                                  'adresse'=>(!isset($this->adresse) || empty($this->adresse) )  ? $OldTable['adresse']:$this->adresse,
                                  'email'=>(!isset($this->email) || empty($this->email) )  ? $OldTable['email']:$this->email,
                                  'nature'=>(!isset($this->nature) || empty($this->nature) )  ? $OldTable['nature']:$this->nature,
                                  'nom'=>(!isset($this->nom) || empty($this->nom) )  ? $OldTable['nom']:$this->nom,
                                  'num_piece'=>(!isset($this->num_piece) || empty($this->num_piece) )  ? $OldTable['num_piece']:$this->num_piece,
                                  'status'=>($this->status == 0 )  ? $OldTable['status']:$this->status,
                                  'tel'=>(!isset($this->tel) || empty($this->tel) )  ? $OldTable['tel']:$this->tel,
                                  'type_piece'=>(!isset($this->type_piece) || empty($this->type_piece) )  ? $OldTable['type_piece']:$this->type_piece					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>0,
                                  'adresse'=>"",
                                  'email'=>"",
                                  'nature'=>'',
                                  'nom'=>"",
                                  'num_piece'=>"",
                                  'status'=>0,
                                  'tel'=>"",
                                  'type_piece'=>''					     );
                                  return $Table;
                  }
					  public function insert(){
					    $this->setTablename("operateur");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("operateur");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("operateur");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_operateur = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If operateur existe =====================*/
					public function ifOperateurexiste($condition){
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



