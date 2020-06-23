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

use src\entities\Account as AccountEntity;

class View{
		 private $tpl;
         private $account;
         public function __construct(){
            require_once "SM_Sarty.lib.class.php";
			$this->tpl = getSmarty();
             $this->account = new AccountEntity();
        }
        public function load(){
            $num = func_num_args();
            $args = func_get_args();
            switch($num){
                case 1:
                    $this->chargerDonnees($args[0]);
                    break;
                case 2:
                    $this->chargerDonnees($args[0], $args[1]);
                    break;
            }
        }
		
        private function chargerDonnees($page, $data = array()){
            $page_directory = 'src/view/' . $page . '.html';
            $page_dashboard= 'src/view/welcome/dashboard.html';
            $page_login= 'src/view/welcome/login.html';
             $sessionLogin= $this->account->sessionLogin();
            $data['url_base'] = base_url();
            $this->tpl->assign($data);



            if ($sessionLogin==1 ){
                if ($page_directory==$page_login){
                    $page_directory = $page_dashboard;
                }
               // echo $page_directory.' == '.$page_login;

            } else{
                $page_directory = $page_login;
                // echo 'emty session';
            }


           if ($page_directory==$page_dashboard){
                $data["active"] = 1;
                $data["view"] = 'Accueil';
                $data["curenview"] = 'Home';
                $data["vewContent"] = 'viewdasboard';
                $data["vewContenttype"] = 'share';
                $data["pageheader"] = 'Page de garde';
                $data["pageoverview"] ='Aperçu et Statistiques';
                $this->tpl->assign($data);
            }
            if(file_exists($page_directory))
            {
                $this->tpl->display($page_directory);
            }else{

                $message = "la view <b>".$page_directory."</b> n'existe pas!!!!";
                $error = new SM_Error();
                $error->messageError($message);
            }

        }
        
    }
?>