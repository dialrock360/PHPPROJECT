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
     use src\model\DB;

    /*==================Classe creer par Samane samane_ui_admin le 15-11-2019 06:17:03=====================*/
        class Article
            {

    /*==================Attribut list=====================*/

             private  $id;
             private  $id_categorie;
             private  $id_catalogue;
             private  $fiche_technique;
            private  $type_article;
             private  $nbrstockage;
             private  $valeur_article;
             private  $tabidstock;
             private  $flag_article;
            private  $catalogue;
            private  $nom_article;
            private  $photo_article;
            private  $db;


            /*================== Constructor =====================*/

    /*==================Getter list=====================*/
            /**
             * Article constructor.
             * @param $id
             * @param $id_categorie
             * @param $id_catalogue
             * @param $fiche_technique
             * @param $type_article
             * @param $nbrstockage
             * @param $valeur_article
             * @param $tabidstock
             * @param $flag_article
             * @param $db
             */
            public function __construct()
            {
                $this->id = "null";
                $this->catalogue = new Catalogue();
                $this->photo_article = new Photo_article();
                $this->id_categorie = 0;
                $this->id_catalogue = 0;
                $this->fiche_technique = "";
                $this->photo_article = "";
                $this->type_article = "simple";
                $this->nbrstockage = 0;
                $this->valeur_article = 0;
                $this->tabidstock = "";
                $this->tabidstock = "";
                $this->flag_article = 0;
                require_once 'src/controller/tools/functions.php';
                $this->db = new DB();
            }

            /**
             * @return Catalogue
             */
            public function getCatalogue()
            {
                return $this->catalogue;
            }

            /**
             * @param Catalogue $catalogue
             */
            public function setCatalogue($catalogue)
            {
                $this->catalogue = $catalogue;
            }

            /**
             * @return string
             */
            public function getPhotoArticle()
            {
                return $this->photo_article;
            }

            /**
             * @param string $photo_article
             */
            public function setPhotoArticle($photo_article)
            {
                $this->photo_article = $photo_article;
            }

            /**
             * @return mixed
             */
            public function getNomArticle()
            {
                return $this->nom_article;
            }

            /**
             * @param mixed $nom_article
             */
            public function setNomArticle($nom_article)
            {
                $this->nom_article = $nom_article;
            }

            public function getId()
                 {
                     return $this->id;
                 }

             public function getId_categorie()
                 {
                     return $this->id_categorie;
                 }

             public function getId_catalogue()
                 {
                     return $this->id_catalogue;
                 }

             public function getValeur_article()
                 {
                     return $this->valeur_article;
                 }

            public function getType_article()
            {
                return $this->type_article;
            }

             public function getFiche_technique()
                 {
                     return $this->fiche_technique;
                 }

             public function getNbrstockage()
                 {
                     return $this->nbrstockage;
                 }

             public function getTabidstock()
                 {
                     return $this->tabidstock;
                 }

             public function getFlag_article()
                 {
                     return $this->flag_article;
                 }


    /*==================Setter list=====================*/

             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setId_categorie($id_categorie)
                 {
                      $this->id_categorie = $id_categorie;
                 }

             public function setId_catalogue($id_catalogue)
                 {
                      $this->id_catalogue = $id_catalogue;
                 }

             public function setFiche_technique($fiche_technique)
                 {
                      $this->fiche_technique = $fiche_technique;
                 }

             public function setNbrstockage($nbrstockage)
                 {
                      $this->nbrstockage = $nbrstockage;
                 }

             public function setTabidstock($tabidstock)
                 {
                      $this->tabidstock = $tabidstock;
                 }
             public function setValeur_article($valeur_article)
                 {
                      $this->valeur_article = $valeur_article;
                 }

            public function setType_article($type_article)
            {
                $this->type_article = $type_article;
            }

             public function setFlag_article($flag_article)
                 {
                      $this->flag_article = $flag_article;
                 }


            /*==================Methode list=====================*/

            public function liste()
            {

                $this->db->setTablename("article");
                return $this->db->getRows(array('order_by'=>'nom_article ','return_type'=>'many'));

            }
            public function liste_view($id_service)
            {

                $condition = array('id' => ($id_service!=0)?$id_service:0);
                $this->db->setTablename("v_article");
                return $this->db->getRows(array('where'=>$condition,'order_by'=>'nom_article ','return_type'=>'many'));

            }
            public function get(){

                $condition = array('id' => ($this->id!=0)?$this->id:0);
                $this->db->setTablename("article");
                return $this->db->getRows(array('where'=>$condition,'return_type'=>'single'));
            }

            public function get_view()
            {

                $condition = array('id' => ($this->id!=0)?$this->id:0);
                $this->db->setTablename("v_article");
                return $this->db->getRows(array('where'=>$condition,'return_type'=>'single'));

            }

            public function get_with_condition($condition,$Tablename)
            {

                $condition = array('id' => ($this->id!=0)?$this->id:0);
                $this->db->setTablename((!isset($Tablename) || empty($Tablename) )?"v_article":$Tablename);
                return $this->db->getRows(array('where'=>$condition,'return_type'=>'single'));

            }

            public function get_count()
            {

                $this->db->setTablename("v_article");
                return $this->db->getRows(array('return_type'=>'count'));

            }

            public function save()
            {

                $this->db->setTablename("article");
                   return $id_article = $this->db->insertTable($this->ObjecToarrayMaker());
            }
            public function update()
            {


                $this->db->setTablename("article");
                return $id_article = $this->db->updateTable($this->ObjecToarrayMaker());

            }
    /*==================Methode list=====================*/

            private function ObjecToarrayMaker(){
                $OldTable=$this->emptyarrayMaker();
                if ($this->id>0){
                    $OldTable=$this->get_view();
                }

                $Table= array(
                    'id' =>($this->id == 0 || $this->id == "null")?$OldTable['id']: $this->id ,
                    'type_article' => (!isset($this->type_article) || empty($this->type_article) )?$OldTable['type_article']:$this->type_article,
                    'id_categorie' => ($this->id_categorie == 0)?$OldTable['id_categorie']:$this->id_categorie,
                    'id_catalogue' => $this->catalogue->addcatalogue(
                        (($this->id_categorie == 0)?$OldTable['id_categorie']:$this->id_categorie),
                        ( (!isset($this->nom_article) || empty($this->nom_article) )?$OldTable['nom_article']:$this->nom_article)
                        ),
                    'fiche_technique' => (!isset($this->fiche_technique) || empty($this->fiche_technique) )?$OldTable['fiche_technique']:$this->fiche_technique,
                    'nbrstockage' => ($this->nbrstockage == 0)?$OldTable['nbrstockage']:$this->nbrstockage,
                    'tabidstock' => (!isset($this->tabidstock ) || empty($this->tabidstock ) )?$OldTable['tabidstock']:$this->tabidstock ,
                    'valeur_article' => ($this->valeur_article == 0)?$OldTable['valeur_article']:$this->valeur_article,
                    'flag_article' => $this->flag_article
                );
                return $Table;
            }


            private function emptyarrayMaker(){
                      $Table= array(
                          'id' =>  "null" ,
                          'type_article' => "simple",
                          'id_categorie' => 0,
                          'id_catalogue' => 0,
                          'fiche_technique' =>'',
                          'nbrstockage' =>0,
                          'tabidstock' =>'',
                          'valeur_article' => 0,
                          'flag_article' => 0
                      );
                      return $Table;
                  }
















           }





   ?>



