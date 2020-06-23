<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:31:25=====================*/
 use libs\system\Controller;
  use src\entities\V_article as V_articleEntity;
  use src\model\V_articleDB;

  class V_article extends Controller{

            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("v_article/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("v_article/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get(){
                    //Instanciation du model
                    $tdb = new V_articleDB();
                    $data["v_article"] = $tdb->getV_article();
                    return $this->view->load("v_article/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new V_articleDB();
                    $data["v_articles"] = $tdb->listeV_article();
                    return $this->view->load("v_article/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new V_articleDB();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_service)) {
                    $v_articleObject  = new V_articleEntity();
                    $v_articleObject ->setId_service($id_service);
                    $v_articleObject ->setId_categorie($id_categorie);
                    $v_articleObject ->setNom_article($nom_article);
                    $v_articleObject ->setPxa_article($pxa_article);
                    $v_articleObject ->setPxv_article($pxv_article);
                    $v_articleObject ->setPxvbar_article($pxvbar_article);
                    $v_articleObject ->setType_article($type_article);
                    $v_articleObject ->setTabidp($tabidp);
                    $v_articleObject ->setTabqnt($tabqnt);
                    $v_articleObject ->setTabmts($tabmts);
                    $v_articleObject ->setPxrv($pxrv);
                    $v_articleObject ->setNbrstockage($nbrstockage);
                    $v_articleObject ->setTabidstock($tabidstock);
                    $v_articleObject ->setFlag_article($flag_article);
                    $v_articleObject ->setId_famille($id_famille);
                    $v_articleObject ->setNom_categorie($nom_categorie);
                    $v_articleObject ->setNbr_produit_categorie($nbr_produit_categorie);
                    $v_articleObject ->setValeur_categorie($valeur_categorie);
                    $v_articleObject ->setPath_photo($path_photo);
                    $v_articleObject ->setMaster($master);
                    $ok = $tdb->addV_article($v_articleObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("v_article/add", $data);
            }else{
                return $this->view->load("v_article/add");
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new V_articleDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_service)) {
                    $v_articleObject  = new V_articleEntity();
                    $v_articleObject ->setId($id);
                    $v_articleObject ->setId_service($id_service);
                    $v_articleObject ->setId_categorie($id_categorie);
                    $v_articleObject ->setNom_article($nom_article);
                    $v_articleObject ->setPxa_article($pxa_article);
                    $v_articleObject ->setPxv_article($pxv_article);
                    $v_articleObject ->setPxvbar_article($pxvbar_article);
                    $v_articleObject ->setType_article($type_article);
                    $v_articleObject ->setTabidp($tabidp);
                    $v_articleObject ->setTabqnt($tabqnt);
                    $v_articleObject ->setTabmts($tabmts);
                    $v_articleObject ->setPxrv($pxrv);
                    $v_articleObject ->setNbrstockage($nbrstockage);
                    $v_articleObject ->setTabidstock($tabidstock);
                    $v_articleObject ->setFlag_article($flag_article);
                    $v_articleObject ->setId_famille($id_famille);
                    $v_articleObject ->setNom_categorie($nom_categorie);
                    $v_articleObject ->setNbr_produit_categorie($nbr_produit_categorie);
                    $v_articleObject ->setValeur_categorie($valeur_categorie);
                    $v_articleObject ->setPath_photo($path_photo);
                    $v_articleObject ->setMaster($master);
                    $ok = $tdb->updateV_article($v_articleObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete(){
              //Instanciation du model
                    $tdb = new V_articleDB();
            			//Supression
            			$tdb->deleteV_article();
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit(){
                        //Instanciation du model
                       $tdb = new V_articleDB();
            			//Supression
            			$data["v_article"] = $tdb->getV_article();
            			//chargement de la vue edit.html
                    return $this->view->load("v_article/edit", $data);
                   }




                   



               }


            ?>

