<?php
/*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    POUR TOUTE MODIFICATION VISANT A AMELIORER
    CE MODELE.
    VOUS ETES LIBRE DE TOUTE UTILISATION.
  ===================================================*/
namespace libs\system;
use libs\system\View;
use src\entities\Account as AccountEntity;

class Controller{
        protected $view;
        protected $user;
        protected $lbase_url;
        public function __construct(){
            $this->view = new View();
            $this->user = new AccountEntity();
            $this->user->initNbrFailledConexion();
            $this->lbase_url='http://localhost/sages/';

            session_start();
        }
    //connecte l'utilisateur donné et redirige vers la page d'acceuil
    protected function login(){
        $_SESSION["user"] = $this->user->getAcount();
        $_SESSION['token'] =  $this->user->getToken();

        session_write_close();
    }

    //déconnecte l'utilisateur et redirige vers l'accueil
    protected function logout(){

        $this->user->deleteAccountSession();
        $_SESSION = array();
        session_destroy();
    }
    }
?>