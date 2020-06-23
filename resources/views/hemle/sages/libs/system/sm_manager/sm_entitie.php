<?php

namespace libs\system\sm_manager;

class sm_entitie
{
    private  $entitie_mngr;
    private  $view_mngr;
    private  $model_mngr;
    private  $ctrl_mngr;
    private  $db_mngr;
    private $host;
    private $user;
    private $pass;
    private $dbname;
    private $etat;
    private $connection;

    public function __construct(){

        require_once 'Functions.php';

        require_once 'config/database.php';

        $this->host = connexion_params()["host"];
        $this->user = connexion_params()["user"];
        $this->pass = connexion_params()["password"];
        $this->dbname = connexion_params()["database_name"];


        $this->entitie_mngr= new EntitieManager();
        $this->view_mngr=  new ViewManager();
        $this->model_mngr=  new ModelManager();
        $this->db_mngr=  new DatabaseManager();
        $this->ctrl_mngr=  new ControllerManager();
    }

    /**
     * @return EntitieManager
     */
    public function getEntitieMngr()
    {
        return $this->entitie_mngr;
    }

    /**
     * @param EntitieManager $entitie_mngr
     */
    public function setEntitieMngr($entitie_mngr)
    {
        $this->entitie_mngr = $entitie_mngr;
    }

    /**
     * @return ViewManager
     */
    public function getViewMngr()
    {
        return $this->view_mngr;
    }

    /**
     * @param ViewManager $view_mngr
     */
    public function setViewMngr($view_mngr)
    {
        $this->view_mngr = $view_mngr;
    }

    /**
     * @return ModelManager
     */
    public function getModelMngr()
    {
        return $this->model_mngr;
    }

    /**
     * @param ModelManager $model_mngr
     */
    public function setModelMngr($model_mngr)
    {
        $this->model_mngr = $model_mngr;
    }

    /**
     * @return DatabaseManager
     */
    public function getDbMngr()
    {
        return $this->db_mngr;
    }

    /**
     * @param DatabaseManager $db_mngr
     */
    public function setDbMngr($db_mngr)
    {
        $this->db_mngr = $db_mngr;
    }


    public  function liste($entname,$dbname='')
    {
        $dbname=($dbname=='')?$this->dbname:$dbname;
        $dbList = array();
        if ($entname=='database'){
            $dbList = $this->db_mngr->database_liste($dbname);
        }

        if ($entname=='view'){
            $dbList = $this->view_mngr->views_list();
        }

        if ($entname=='model'){
            $dbList = $this->model_mngr->modeles_list();
        }
        if ($entname=='controller'){
            $dbList = $this->ctrl_mngr->controllers_list();
        }
        return $dbList;
    }

    public  function get($entname,$dbname='')
    {
        $dbname=($dbname=='')?$this->dbname:$dbname;
        $ent=null;
        foreach($this->liste($entname,$dbname) as $cle=>$valeur){
            $dbentname=($entname=='database')?$valeur['dbname']:$valeur['entname'];
            if ($dbentname==$entname)
                $ent=$valeur;
            //echo $cle.' : '.$valeur.'<br>';
        }


        return $ent;
    }
    public  function if_entite_exist($entname,$dbname='')
    {
        return  $ent=($this->get($entname,$dbname)==null)?0:1;
    }

    public  function create($target,$entname,$dbname='')
    {

        if ($target=='database'){
            $dbList = $this->db_mngr->database_liste($dbname);
        }

        if ($target=='view'){
            $dbList = $this->view_mngr->views_list();
        }

        if ($target=='model'){
            $dbList = $this->model_mngr->modeles_list();
        }
        if ($target=='controller'){
            $dbList = $this->ctrl_mngr->controllers_list();
        }
        return $dbList;
    }

}