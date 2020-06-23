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

        class Conditionement extends Entitie
            {


    /*==================Attribut liste=====================*/
        private  $id;
        private  $nom_conditionement;
        private  $nbr_utilisation;
        private  $flag_conditionement;
    /*==================End Attribut liste=====================*/


    /*================== Constructor =====================*/
              public function __construct()

                 {
         parent::__construct();

         $this->tablename="conditionement";
                 $this->id = 'null' ;
                 $this->nom_conditionement = "" ;
                 $this->nbr_utilisation = 0 ;
                 $this->flag_conditionement = 0 ;
                 }

    /*==================End constructor=====================*/


    /*==================Getters liste=====================*/
             public function getId()
                 {
                     return $this->id;
                 }

             public function getNom_conditionement()
                 {
                     return $this->nom_conditionement;
                 }

             public function getNbr_utilisation()
                 {
                     return $this->nbr_utilisation;
                 }

             public function getFlag_conditionement()
                 {
                     return $this->flag_conditionement;
                 }

    /*==================End Getters liste=====================*/


    /*==================Setters liste=====================*/
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setNom_conditionement($nom_conditionement)
                 {
                      $this->nom_conditionement = $nom_conditionement;
                 }

             public function setNbr_utilisation($nbr_utilisation)
                 {
                      $this->nbr_utilisation = $nbr_utilisation;
                 }

             public function setFlag_conditionement($flag_conditionement)
                 {
                      $this->flag_conditionement = $flag_conditionement;
                 }

    /*==================End Setters liste=====================*/


    /*==================Persistence Methode list=====================*/



				/*================== Count conditionement =====================*/

                            public function countConditionement($flag_conditionement=0){
                                $this->db->setTablename($this->tablename);
                                $condition = array("flag_conditionement" =>($flag_conditionement=='')?$this->flag_conditionement:$flag_conditionement);
                                return $this->conditional_count($condition);
                            }
				/*================== Get conditionement =====================*/
					public function get($id_conditionement=''){
					    $this->db->setTablename($this->tablename);
					    $condition = array("id" =>$this->id);
                                   //    return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));
                        $condition = array("id" =>($id_conditionement=='')?$this->id:$id_conditionement);
                        return $this->conditional_get($condition);
					                }

				/*================== Liste conditionement =====================*/
                        public function liste(){
                            $this->db->setTablename($this->tablename);
                            // return $this->db->getRows(array("return_type"=>"many"));
                            return $this->list_all();
                        }


                        public function update($conditionement=''){
                                $this->setTablename("conditionement");
                                $condition = array( 'id'=>$this->id );
                                $Toarray =($conditionement=='')?$this->ObjecToarrayMaker():$conditionement ;
                                $this->setTablearray($Toarray);
                                return   $this->put($condition);
                            }


					  public function insert(){
					    $this->setTablename("conditionement");
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->post();
                               }
					/*  public function update(){
					    $this->setTablename("conditionement");
					    $condition = array( 'id'=>$this->id );
					    $this->setTablearray($this->ObjecToarrayMaker());
                               return   $this->put($condition);
                               }*/
					  public function delete(){
					    $this->setTablename("conditionement");
					    $condition = array( 'id'=>$this->id );
                                       return $this->remove($condition);
                               }
					  public function fldelete(){
					    $this->db->setTablename($this->tablename);
                               return $id_conditionement = $this->db->updateTable($this->ObjecToarrayMaker());
                               }

				/*================== If conditionement existe =====================*/
					public function ifConditionementexiste($condition){
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
                                                       $this->id = (!isset($id) || empty($id) )  ? 0: $id;
                       $this->nom_conditionement = (!isset($nom_conditionement) || empty($nom_conditionement) )  ? '': $nom_conditionement;
                       $this->nbr_utilisation = (!isset($nbr_utilisation) || empty($nbr_utilisation) )  ? 0: $nbr_utilisation;
                       $this->flag_conditionement = (!isset($flag_conditionement) || empty($flag_conditionement) )  ? 0: $flag_conditionement;
                  }
					  private function ObjecToarrayMaker(){
					    $OldTable=$this->emptyarrayMaker();
					    if ($this->id>0){
					        $OldTable=$this->get();
					     }
					     $Table= array(
                                 
                                  'id'=>($this->id == 0 || $this->id == 'null')  ? $OldTable['id']:$this->id,
                                  'nom_conditionement'=>(!isset($this->nom_conditionement) || empty($this->nom_conditionement) )  ? $OldTable['nom_conditionement']:$this->nom_conditionement,
                                  'nbr_utilisation'=>($this->nbr_utilisation == 0 )  ? $OldTable['nbr_utilisation']:$this->nbr_utilisation,
                                  'flag_conditionement'=>($this->flag_conditionement == 0 )  ? $OldTable['flag_conditionement']:$this->flag_conditionement					     );
                                  return $Table;
                  }
					  private function emptyarrayMaker(){
					     $Table= array(
                                 
                                  'id'=>'null',
                                  'nom_conditionement'=>"",
                                  'nbr_utilisation'=>0,
                                  'flag_conditionement'=>0					     );
                                  return $Table;
                  }


    /*==================End Persistence Methode list=====================*/
           }
  
   



   ?>



