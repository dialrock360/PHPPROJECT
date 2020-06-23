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
        class Catalogue
            {

    /*==================Attribut list=====================*/
                
             private  $id;
             private  $ref_article;
             private  $type_article;
             private  $nom_article;
             private  $nom_service;
             private  $nom_famille;
             private  $nom_categorie;
             private  $nomenclature_article;


    /*==================Getter list=====================*/
            /**
             * Catalogue constructor.
             * @param $id
             * @param $ref_article
             * @param $type_article
             * @param $nom_article
             * @param $nom_service
             * @param $nom_famille
             * @param $nom_categorie
             * @param $nomenclature_article
             */
            public function __construct()
            {
                $this->id = "null";
                $this->ref_article = "";
                $this->type_article = "simple";
                $this->nom_article = "";
                $this->nom_service = "";
                $this->nom_famille = "";
                $this->nom_categorie = "";
                $this->nomenclature_article = "";
                require_once 'src/controller/tools/functions.php';
                $this->db = new DB();
            }

            public function getId()
                 {
                     return $this->id;
                 }

             public function getRef_article()
                 {
                     return $this->ref_article;
                 }

             public function getType_article()
                 {
                     return $this->type_article;
                 }

             public function getNom_article()
                 {
                     return $this->nom_article;
                 }

             public function getNom_service()
                 {
                     return $this->nom_service;
                 }

             public function getNom_famille()
                 {
                     return $this->nom_famille;
                 }

             public function getNom_categorie()
                 {
                     return $this->nom_categorie;
                 }

             public function getNomenclature_article()
                 {
                     return $this->nomenclature_article;
                 }


    /*==================Setter list=====================*/
                
             public function setId($id)
                 {
                      $this->id = $id;
                 }

             public function setRef_article($ref_article)
                 {
                      $this->ref_article = $ref_article;
                 }

             public function setType_article($type_article)
                 {
                      $this->type_article = $type_article;
                 }

             public function setNom_article($nom_article)
                 {
                      $this->nom_article = $nom_article;
                 }

             public function setNom_service($nom_service)
                 {
                      $this->nom_service = $nom_service;
                 }

             public function setNom_famille($nom_famille)
                 {
                      $this->nom_famille = $nom_famille;
                 }

             public function setNom_categorie($nom_categorie)
                 {
                      $this->nom_categorie = $nom_categorie;
                 }

             public function setNomenclature_article($nomenclature_article)
                 {
                      $this->nomenclature_article = $nomenclature_article;
                 }


            public function addcatalogue($id_categorie,$nom_article){

                $articlename = ucfirst(strtolower($nom_article));
                $this->db->setTablename("v_categorie");
                $condition = array('id' => $id_categorie);
                $Categorie  =$this->db->getRows(array('where'=>$condition,'return_type'=>'single'));

                $Catalogue = array(
                    'id' => $this->id,
                    'ref_article' => $this->refmaker($Categorie,$nom_article),
                    'type_article' => $this->type_article,
                    'nom_article' => $this->nom_article,
                    'nom_service' => $this->nom_service,
                    'nom_famille' => $this->nom_famille,
                    'nom_categorie' => $this->nom_categorie,
                    'nomenclature_article' => $this->nomenclature_article
                );

                $this->db->setTablename("catalogue");
                $condition2 = array('nom_article' => $articlename);
                $ifCatalogueexiste = $this->db->getRows(array('where' => $condition2, 'return_type' => 'single'));
                if ($ifCatalogueexiste==null){
                    $id_catalogue=$this->db->insertTable($Catalogue);
                    //  echo json_encode(intval($id_catalogue));
                }
                if ($ifCatalogueexiste!=null){
                    $id_catalogue = $ifCatalogueexiste['id'];
                }

                return  $id_catalogue;
            }

            private function refmaker($Categorie,$nom_article){
                return 'ART'.$Categorie['id_service'].$Categorie['id_famille'].$Categorie['id'].explodestrtoupper($nom_article).date('dmyHis');;

            }
    /*==================Methode list=====================*/
           }
  
   



   ?>



