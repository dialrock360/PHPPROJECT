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

        class Famille extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $id_service;
        private  $nom_famille;
        private  $color_famille;
        private  $nbr_categorie_famille;
        private  $valeur_famille;
        private  $flag_famille;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="famille";
                 $this->id = 'null' ;
                 $this->id_service = 0 ;
                 $this->nom_famille = "" ;
                 $this->color_famille = "" ;
                 $this->nbr_categorie_famille = 0 ;
                 $this->valeur_famille = 0 ;
                 $this->flag_famille = 0 ;
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

             public function getNom_famille()
                 {
                     return $this->nom_famille;
                 }

             public function getColor_famille()
                 {
                     return $this->color_famille;
                 }

             public function getNbr_categorie_famille()
                 {
                     return $this->nbr_categorie_famille;
                 }

             public function getValeur_famille()
                 {
                     return $this->valeur_famille;
                 }

             public function getFlag_famille()
                 {
                     return $this->flag_famille;
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

             public function setNom_famille($nom_famille)
                 {
                      $this->nom_famille = $nom_famille;
                 }

             public function setColor_famille($color_famille)
                 {
                      $this->color_famille = $color_famille;
                 }

             public function setNbr_categorie_famille($nbr_categorie_famille)
                 {
                      $this->nbr_categorie_famille = $nbr_categorie_famille;
                 }

             public function setValeur_famille($valeur_famille)
                 {
                      $this->valeur_famille = $valeur_famille;
                 }

             public function setFlag_famille($flag_famille)
                 {
                      $this->flag_famille = $flag_famille;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count famille =====================*/
					public function countFamille(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"count"));
					                }

				/*================== Get famille =====================*/

            public function get($id_famille=''){
                $this->db->setTablename($this->tablename);
                $condition = array("id" =>($id_famille=='')?$this->id:$id_famille);
                return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
            }
            public function getByname($nom_famille=''){
                $this->tablename="v_famille";
                $condition = array("nom_famille" =>($nom_famille=='')?$this->nom_famille:$nom_famille);
                return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
            }
				/*================== Liste famille =====================*/
					public function liste(){
					    $this->db->setTablename($this->tablename);
                                       return $this->db->getRows(array("return_type"=>"many"));
					                }

                        public function Vliste($id_service='',$flag_famille=0){
                            $this->tablename="v_famille";
                            $fflag_famille = ($flag_famille==0)?$this->flag_famille:$flag_famille;
                            $fid_service = ($id_service=='')?$this->id_service:$id_service;

                            $condition = array("id_service" =>$fid_service,"flag_famille" =>$fflag_famille);
                            $filter = array("order_by" =>'nom_famille');
                            //return $this->db->getRows(array("where"=>$condition,'order_by'=>'nom_article',"return_type"=>"many"));
                            return $this->conditional_liste($condition,$filter);
                        }
					  public function insert(){
					    $this->setTablename("famille");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }

					  public function update($famille=''){
					                      $this->setTablename("famille");
                                          $condition = array( 'id'=>$this->id );
                                          $Toarray =($famille=='')?$this->ObjecToarrayMaker():$famille ;
                                          $this->setTablearray($Toarray);


                                  if($Toarray['nom_famille']!=''){

                                      return   $this->put($condition);
                                  }
                               }

					  public function delete(){
					    $this->setTablename("famille");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_famille = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If famille existe =====================*/
					public function ifFamilleexiste($nom_famille,$id_service){
					    $this->db->setTablename($this->tablename);
                        $condition = array('nom_famille' => $nom_famille, 'id_service' => $id_service);
                         $existe=$this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
				                 	return (empty($existe))?0:1;
					                }
					  public function setPost($post,$file=array()){
					     extract($post);

                                                       $this->id = (!isset($id) || empty($id) )  ? 0: $id;
                       $this->id_service = (!isset($id_service) || empty($id_service) )  ? 0: $id_service;
                       $this->nom_famille = (!isset($nom_famille) || empty($nom_famille) )  ? '': $nom_famille;
                       $this->color_famille = (!isset($color_famille) || empty($color_famille) )  ? '': $color_famille;
                       $this->nbr_categorie_famille = (!isset($nbr_categorie_famille) || empty($nbr_categorie_famille) )  ? 0: $nbr_categorie_famille;
                       $this->valeur_famille = (!isset($valeur_famille) || empty($valeur_famille) )  ? 0: $valeur_famille;
                       $this->flag_famille = (!isset($flag_famille) || empty($flag_famille) )  ? 0: $flag_famille;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }

					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'id_service'=>($this->id_service == 0 )  ? $OldTable['id_service']:$this->id_service,
                                  'nom_famille'=>(!isset($this->nom_famille) || empty($this->nom_famille) )  ? $OldTable['nom_famille']:$this->nom_famille,
                                  'color_famille'=>(!isset($this->color_famille) || empty($this->color_famille) )  ? $OldTable['color_famille']:$this->color_famille,
                                  'nbr_categorie_famille'=>($this->nbr_categorie_famille < 0 )  ? $OldTable['nbr_categorie_famille']:$this->nbr_categorie_famille,
                                  'valeur_famille'=>($this->valeur_famille < 0 )  ? $OldTable['valeur_famille']:$this->valeur_famille,
                                  'flag_famille'=>($this->flag_famille == 0 )  ? $OldTable['flag_famille']:$this->flag_famille					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'id_service'=>0,
                                  'nom_famille'=>"",
                                  'color_famille'=>"",
                                  'nbr_categorie_famille'=>0,
                                  'valeur_famille'=>0,
                                  'flag_famille'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



