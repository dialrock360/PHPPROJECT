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
    /*==================Classe creer par Samane samane_ui_admin le 04-12-2019 12:36:31=====================*/

        class Personne extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_service;
        private  $nom_personne;
        private  $prenom_personne;
        private  $genre_personne;
        private  $date_naiss_personne;
        private  $lieu_naiss_personne;
        private  $nationalite_personne;
        private  $typepiece_personne;
        private  $numpiece_personne;
        private  $photo_personne;
        private  $details_personne;
        private  $flag_personne;
        private  $file;
        private  $personne_status;
        private  $status;
        private  $post;
        private  $coordonees;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {

           
                     require_once 'src/controller/tools/functions.php';
         parent::__construct();
                     $this->personne_status=new Personne_status();
                     $this->coordonees=new Cordonnees();
                     $this->status= new Status();
         $this->tablename="personne";
                 $this->id = 'null' ;
                 $this->id_service = 0 ;
                 $this->nom_personne = "" ;
                 $this->prenom_personne = "" ;
                 $this->genre_personne = '' ;
                 $this->date_naiss_personne = date("") ;
                 $this->lieu_naiss_personne = "" ;
                 $this->nationalite_personne = "" ;
                 $this->typepiece_personne = '' ;
                 $this->numpiece_personne = "" ;
                 $this->photo_personne = "" ;
                 $this->details_personne = "" ;
                 $this->flag_personne = 0 ;
                 $this->file = array() ;
                 $this->post = array() ;


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

             public function getNom_personne()
                 {
                     return $this->nom_personne;
                 }

             public function getPrenom_personne()
                 {
                     return $this->prenom_personne;
                 }

             public function getGenre_personne()
                 {
                     return $this->genre_personne;
                 }

             public function getDate_naiss_personne()
                 {
                     return $this->date_naiss_personne;
                 }

             public function getLieu_naiss_personne()
                 {
                     return $this->lieu_naiss_personne;
                 }

             public function getNationalite_personne()
                 {
                     return $this->nationalite_personne;
                 }

             public function getTypepiece_personne()
                 {
                     return $this->typepiece_personne;
                 }

             public function getNumpiece_personne()
                 {
                     return $this->numpiece_personne;
                 }

             public function getPhoto_personne()
                 {
                     return $this->photo_personne;
                 }

             public function getDetails_personne()
                 {
                     return $this->details_personne;
                 }

             public function getFlag_personne()
                 {
                     return $this->flag_personne;
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

             public function setNom_personne($nom_personne)
                 {
                      $this->nom_personne = $nom_personne;
                 }

             public function setPrenom_personne($prenom_personne)
                 {
                      $this->prenom_personne = $prenom_personne;
                 }

             public function setGenre_personne($genre_personne)
                 {
                      $this->genre_personne = $genre_personne;
                 }

             public function setDate_naiss_personne($date_naiss_personne)
                 {
                      $this->date_naiss_personne = $date_naiss_personne;
                 }

             public function setLieu_naiss_personne($lieu_naiss_personne)
                 {
                      $this->lieu_naiss_personne = $lieu_naiss_personne;
                 }

             public function setNationalite_personne($nationalite_personne)
                 {
                      $this->nationalite_personne = $nationalite_personne;
                 }

             public function setTypepiece_personne($typepiece_personne)
                 {
                      $this->typepiece_personne = $typepiece_personne;
                 }

             public function setNumpiece_personne($numpiece_personne)
                 {
                      $this->numpiece_personne = $numpiece_personne;
                 }

             public function setPhoto_personne($photo_personne)
                 {
                      $this->photo_personne = $photo_personne;
                 }

             public function setDetails_personne($details_personne)
                 {
                      $this->details_personne = $details_personne;
                 }

             public function setFlag_personne($flag_personne)
                 {
                      $this->flag_personne = $flag_personne;
                 }


            /**
             * @return mixed
             */
            public function getTablearray()
            {
                return $this->tablearray;
            }

            /**
             * @param mixed $tablearray
             */
            public function setTablearray($tablearray)
            {
                $this->tablearray = $tablearray;
            }

            /**
             * @return array
             */
            public function getFile()
            {
                return $this->file;
            }

            /**
             * @param array $file
             */
            public function setFile($file)
            {
                $this->file = $file;
            }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count personne =====================*/
					public function countPersonne(){
					    $this->db->setTablename("personne");
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get personne =====================*/
					public function get($id=''){


                        $this->db->setTablename($this->tablename);
                        $personne_id = ($id=='')?$this->id:$id;
                        $condition = array("id" =>$personne_id );
                        return $this->conditional_get(array($condition));
					                }
                        public function getBykey($cnd=''){
                            $this->tablename='v_personne';
                            $this->db->setTablename($this->tablename);
                            $condition = array("personne_id" =>$this->personne_id);
                            $condition = ($cnd=='')?array("personne_id" =>$this->personne_id):$cnd;
                            return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
                        }
				/*================== Liste personne =====================*/
					public function liste(){
					    $this->db->setTablename("personne");
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }

                    public function setPost($post,$file=array()){

                        extract($post);
                        $this->coordonees->setPost($post);
                        $this->file=$file;
                        $this->post=$post;
                        $this->path_photo();
                        $this->setId((!isset($id) || empty( $id) )  ? 'null': $id);
                        $this->setId_service((!isset($id_service) || empty($id_service) )  ? 0: $id_service);
                        $this->setNom_personne((!isset($nom_personne) || empty($nom_personne) )  ? '': $nom_personne);
                        $this->setPrenom_personne((!isset($prenom_personne) || empty($prenom_personne) )  ? '': $prenom_personne);
                        $this->setGenre_personne((!isset($genre_personne) || empty($genre_personne) )  ? '': $genre_personne);
                        $this->setDate_naiss_personne((!isset($date_naiss_personne) || empty($date_naiss_personne) )  ? '': $date_naiss_personne);
                        $this->setLieu_naiss_personne((!isset($lieu_naiss_personne) || empty($lieu_naiss_personne) )  ? '': $lieu_naiss_personne);
                        $this->setNationalite_personne((!isset($nationalite_personne) || empty($nationalite_personne) )  ? '': $nationalite_personne);
                        $this->setTypepiece_personne((!isset($typepiece_personne) || empty($typepiece_personne) )  ? '': $typepiece_personne);
                        $this->setNumpiece_personne((!isset($numpiece_personne) || empty($numpiece_personne) )  ? '': $numpiece_personne);
                        $this->setDetails_personne((!isset($details_personne) || empty($details_personne) )  ? '': $details_personne);
                        $this->setFlag_personne(0);
                       /* print_r($this->ObjecToarrayMaker());
                        echo '<hr/>';

                        print_r($file);
                        echo '<hr/>';*/
                    }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'id_service'=>($this->id_service == 0 )  ? $OldTable['id_service']:$this->id_service,
                                  'nom_personne'=>(!isset($this->nom_personne) || empty($this->nom_personne) )  ? $OldTable['nom_personne']:$this->nom_personne,
                                  'prenom_personne'=>(!isset($this->prenom_personne) || empty($this->prenom_personne) )  ? $OldTable['prenom_personne']:$this->prenom_personne,
                                  'genre_personne'=>(!isset($this->genre_personne) || empty($this->genre_personne) )  ? $OldTable['genre_personne']:$this->genre_personne,
                                  'date_naiss_personne'=>($this->date_naiss_personne == null )  ? $OldTable['date_naiss_personne']:$this->date_naiss_personne,
                                  'lieu_naiss_personne'=>(!isset($this->lieu_naiss_personne) || empty($this->lieu_naiss_personne) )  ? $OldTable['lieu_naiss_personne']:$this->lieu_naiss_personne,
                                  'nationalite_personne'=>(!isset($this->nationalite_personne) || empty($this->nationalite_personne) )  ? $OldTable['nationalite_personne']:$this->nationalite_personne,
                                  'typepiece_personne'=>(!isset($this->typepiece_personne) || empty($this->typepiece_personne) )  ? $OldTable['typepiece_personne']:$this->typepiece_personne,
                                  'numpiece_personne'=>(!isset($this->numpiece_personne) || empty($this->numpiece_personne) )  ? $OldTable['numpiece_personne']:$this->numpiece_personne,
                                  'photo_personne'=>(!isset($this->photo_personne) || empty($this->photo_personne) )  ? $OldTable['photo_personne']:$this->photo_personne,
                                  'details_personne'=>(!isset($this->details_personne) || empty($this->details_personne) )  ? $OldTable['details_personne']:$this->details_personne,
                                  'flag_personne'=>($this->flag_personne == 0 )  ? $OldTable['flag_personne']:$this->flag_personne					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'id_service'=>0,
                                  'nom_personne'=>"",
                                  'prenom_personne'=>"",
                                  'genre_personne'=>'',
                                  'date_naiss_personne'=>null,
                                  'lieu_naiss_personne'=>"",
                                  'nationalite_personne'=>"",
                                  'typepiece_personne'=>'',
                                  'numpiece_personne'=>"",
                                  'photo_personne'=>'',
                                  'details_personne'=>"",
                                  'flag_personne'=>0					     );
                                  return $Table;
                  }
					  public function insert(){
					          $this->setTablename("personne");
					          $this->setTablearray($this->ObjecToarrayMaker());
                         echo $ifArticleexiste= $this->ifexistePersonne($this->post);

                          $this->id=  0;
                            //   return   $this->post();
                               }
					  public function update(){
					    $this->setTablename("personne");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }
					  public function delete(){
					    $this->setTablename("personne");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename("personne");
                               return $id_personne = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If personne existe =====================*/
					public function ifPersonneexiste($condition){
					    $this->db->setTablename("personne");
	$existe=$this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
					if($existe != null)
					      {
					                 return 1;
					      } 
					return 0;
					                }

            public function ifexistePersonne($vpersonne){
                $this->db->setTablename("v_personne");
//SELECT `id`, `nom_personne`, `prenom_personne`, `genre_personne`,
// `date_naiss_personne`, `lieu_naiss_personne`, `nationalite_personne`,
// `typepiece_personne`, `numpiece_personne`, `photo_personne`, `details_personne`,
// `id_service`, `flag_personne`, `adress`, `tel`, `email_personne`, `codepostal`,
// `contact_urgent`, `etat_civile`, `nbr_conjoint`, `nbr_enfant`, `info_conjoint`,
// `flag_contact`, `status_id`, `nom_status`, `nom_service`, `sigle_service` FROM `v_personne` WHERE 1
                $ret=0;
                $condition1 =(!isset($vpersonne['numpiece_personne']) || empty($vpersonne['numpiece_personne']) )?array(): array("numpiece_personne" =>$vpersonne['numpiece_personne']);
                $condition2 =(!isset($vpersonne['email_personne']) || empty($vpersonne['email_personne']) )?array(): array("email_personne" =>$vpersonne['email_personne']);
                $condition0 =(!isset($vpersonne['tel']) || empty($vpersonne['tel']) )?array(): array("tel" =>$vpersonne['tel']);
                $condition3 =(!isset($vpersonne['nom_personne']) || empty($vpersonne['nom_personne']) )?array(): array("nom_personne" =>$vpersonne['nom_personne']);

                $existe0=($condition0!=null)?$this->db->getRows(array("where"=>$condition0,"return_type"=>"single")):null;
                $existe1=($condition1!=null)?$this->db->getRows(array("where"=>$condition0,"return_type"=>"single")):null;
                $existe2=($condition2!=null)?$this->db->getRows(array("where"=>$condition0,"return_type"=>"single")):null;
                $existe3=($condition3!=null)?$this->db->getRows(array("where"=>$condition0,"return_type"=>"single")):null;

                   if($this->db->getRows(array("where"=>$condition0,"return_type"=>"single")) != null)
                {
                    $existe0=1;
                }elseif($this->db->getRows(array("where"=>$condition1,"return_type"=>"single")) != null){
                       $existe1=1;
                }elseif($this->db->getRows(array("where"=>$condition2,"return_type"=>"single")) != null){
                       $existe2=1;
                }elseif($this->db->getRows(array("where"=>$condition3,"return_type"=>"single")) != null){
                       $existe3=1;
                }

                $existe3=$this->db->getRows(array("where"=>$condition3,"return_type"=>"single"));

                print_r($condition2);
                return $ret;
            }



                  private function save_photo(){


					    if (!empty($this->file)){

                            $upload_dir = 'public/assets/images/avatars/'; // upload directory
                            $name    = $this->file['photo_personne']['name'];
                            $size    = $this->file['photo_personne']['size'];
                            $tmp  = $this->file['photo_personne']['tmp_name'];
                            if(!empty($this->nom_personne) && empty($this->photo_personne)){

                                $upload= fichier($name,$tmp,$size,$upload_dir,"",$this->photo_personne);
                            }
                        }
                  }
            private function path_photo() {
                $this->photo_personne= (empty($this->file['photo_personne']['name']))?"":strtolower(   trim('photo_'.$this->nom_personne.date("Ymdhms").".".strtolower(pathinfo($this->file['photo_personne']['name'],PATHINFO_EXTENSION))));
            }
    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



