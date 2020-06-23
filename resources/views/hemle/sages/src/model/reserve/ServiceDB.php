<?php

    /*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    VOUS ETES LIBRE DE TOUTE UTILISATION
    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com
    ==================================================*/



     namespace src\model;
use libs\system\Model;
  use src\entities\Service;

    /*==================Classe creer par Samane samane_ui_admin le 14-09-2019 00:33:41=====================*/
        class ServiceDB extends Model {


    /*================== Constructor =====================*/
              public function __construct()
                 {
                        parent::__construct();
                 }


               public function countService(){
                        return count($this->listeService());
               }

               public function getService($id){
                      $sql = "SELECT *
                              FROM service
                              WHERE service.id = ".$id."  ";
                      if($this->db != null)
                        {
                            return $this->db->query($sql)->fetch();
                        }else{
                        return null;
                        }
               }
               public function listeService(){
                       $sql = "SELECT * FROM service";
                      if($this->db != null)
                        {
                              return $this->db->query($sql)->fetchAll();
                        }else{
                        return null;
                        }
               }
    /*==================Add methode=====================*/
                
               public function addService($service){
                        $sql = "INSERT INTO service  VALUES(
                                     null
,
                                     '".$service->getNom_service()."'
,
                                     '".$service->getSigle_service()."'
,
                                     '".$service->getNinea_service()."'
,
                                     '".$service->getNrc_service()."'
,
                                     '".$service->getActivitecommercial_service()."'
,
                                     '".$service->getCa_service()."'
,
                                     '".$service->getLogo_service()."'
,
                                     '".$service->getTheme_service()."'
,
                                     '".$service->getFlag_service()."'
) ";

                      if($this->db != null)
                        {
                            $this->db->exec($sql);
                            return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

    /*==================Update methode=====================*/
                
               public function updateService($service){
                        $sql = "UPDATE service  SET  service.nom_service =  '".$service->getNom_service()."' ,service.sigle_service =  '".$service->getSigle_service()."' ,service.ninea_service =  '".$service->getNinea_service()."' ,service.nrc_service =  '".$service->getNrc_service()."' ,service.activitecommercial_service =  '".$service->getActivitecommercial_service()."' ,service.ca_service =  '".$service->getCa_service()."' ,service.logo_service =  '".$service->getLogo_service()."' ,service.theme_service =  '".$service->getTheme_service()."' ,service.flag_service =  '".$service->getFlag_service()."'   WHERE   service.id =  ".$service->getId()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

               public function deleteService($id){
                        $sql = "DELETE FROM service WHERE service.id = ".$id."";
                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }
           }
  
   



   ?>



