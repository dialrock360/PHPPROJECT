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
  use src\entities\V_article_en_stock as V_article_en_stockEntity;
  use src\model\V_article_en_stockDB;

  class V_article_en_stock extends Controller{

            //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
                //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    /*------------------Methode index--------------------=*/
                
                public function index(){
                    return $this->view->load("v_article_en_stock/index");
                }


    /*------------------Methode getID--------------------=*/
                
                public function getID( $id){
                    $data["id"] = $id;
                    return $this->view->load("v_article_en_stock/get_id", $data);
                }


    /*------------------Methode get--------------------=*/
                
                public function get(){
                    //Instanciation du model
                    $tdb = new V_article_en_stockDB();
                    $data["v_article_en_stock"] = $tdb->getV_article_en_stock();
                    return $this->view->load("v_article_en_stock/get", $data);
                }


    /*------------------Methode list--------------------=*/
                
            public function liste(){
                    //Instanciation du model
                    $tdb = new V_article_en_stockDB();
                    $data["v_article_en_stocks"] = $tdb->listeV_article_en_stock();
                    return $this->view->load("v_article_en_stock/liste", $data);
                }


    /*------------------..............--------------------=*/
    /*------------------Methode add--------------------=*/
                
public function add(){
	//Instanciation du model
            $tdb = new V_article_en_stockDB();
	//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST["valider"]))//"valider" est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data["ok"] = 0;
                if(!empty($id_article)) {
                    $v_article_en_stockObject  = new V_article_en_stockEntity();
                    $v_article_en_stockObject ->setId_article($id_article);
                    $v_article_en_stockObject ->setId_stock($id_stock);
                    $v_article_en_stockObject ->setId_conditionement_article($id_conditionement_article);
                    $v_article_en_stockObject ->setPu_article_en_stock($pu_article_en_stock);
                    $v_article_en_stockObject ->setQnt_article_en_stock($qnt_article_en_stock);
                    $v_article_en_stockObject ->setMin_qnt_article_en_stock($min_qnt_article_en_stock);
                    $v_article_en_stockObject ->setMax_qnt_article_en_stock($max_qnt_article_en_stock);
                    $v_article_en_stockObject ->setId_conditionement($id_conditionement);
                    $v_article_en_stockObject ->setQnt_unite($qnt_unite);
                    $v_article_en_stockObject ->setPrix_unite($prix_unite);
                    $v_article_en_stockObject ->setId_unite($id_unite);
                    $v_article_en_stockObject ->setNom_article($nom_article);
                    $v_article_en_stockObject ->setPath_photo($path_photo);
                    $v_article_en_stockObject ->setNom_conditionement($nom_conditionement);
                    $v_article_en_stockObject ->setNom_uniteconditionement($nom_uniteconditionement);
                    $ok = $tdb->addV_article_en_stock($v_article_en_stockObject );
                    $data["ok"] = $ok;
                }
                return $this->view->load("v_article_en_stock/add", $data);
            }else{
                return $this->view->load("v_article_en_stock/add");
            }
        }


    /*------------------Methode update--------------------=*/
                
		public function update(){
			//Instanciation du model
            $tdb = new V_article_en_stockDB();
            if(isset($_POST["modifier"])){
                extract($_POST);
                if(!empty($id_article)) {
                    $v_article_en_stockObject  = new V_article_en_stockEntity();
                    $v_article_en_stockObject ->setId($id);
                    $v_article_en_stockObject ->setId_article($id_article);
                    $v_article_en_stockObject ->setId_stock($id_stock);
                    $v_article_en_stockObject ->setId_conditionement_article($id_conditionement_article);
                    $v_article_en_stockObject ->setPu_article_en_stock($pu_article_en_stock);
                    $v_article_en_stockObject ->setQnt_article_en_stock($qnt_article_en_stock);
                    $v_article_en_stockObject ->setMin_qnt_article_en_stock($min_qnt_article_en_stock);
                    $v_article_en_stockObject ->setMax_qnt_article_en_stock($max_qnt_article_en_stock);
                    $v_article_en_stockObject ->setId_conditionement($id_conditionement);
                    $v_article_en_stockObject ->setQnt_unite($qnt_unite);
                    $v_article_en_stockObject ->setPrix_unite($prix_unite);
                    $v_article_en_stockObject ->setId_unite($id_unite);
                    $v_article_en_stockObject ->setNom_article($nom_article);
                    $v_article_en_stockObject ->setPath_photo($path_photo);
                    $v_article_en_stockObject ->setNom_conditionement($nom_conditionement);
                    $v_article_en_stockObject ->setNom_uniteconditionement($nom_uniteconditionement);
                    $ok = $tdb->updateV_article_en_stock($v_article_en_stockObject );
                }
            }
            return $this->liste();
       }

    /*------------------Methode list--------------------=*/
                
            public function delete(){
              //Instanciation du model
                    $tdb = new V_article_en_stockDB();
            			//Supression
            			$tdb->deleteV_article_en_stock();
            //Retour vers la liste
                    return $this->liste();
                }


    /*------------------..............--------------------=*/
    /*------------------Methode edit--------------------=*/
                
            	public function edit(){
                        //Instanciation du model
                       $tdb = new V_article_en_stockDB();
            			//Supression
            			$data["v_article_en_stock"] = $tdb->getV_article_en_stock();
            			//chargement de la vue edit.html
                    return $this->view->load("v_article_en_stock/edit", $data);
                   }




                   



               }


            ?>

