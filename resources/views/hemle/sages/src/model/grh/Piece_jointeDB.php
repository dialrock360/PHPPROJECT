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
  use src\entities\Piece_jointe;

    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:15:23=====================*/
        class Piece_jointeDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count piece_jointe =====================*/
					public function countPiece_jointe(){
					                       return count($this->listePiece_jointe());
					        }

				/*================== Get piece_jointe =====================*/
					public function getPiece_jointe($id){
					$sql = "SELECT * FROM piece_jointe WHERE piece_jointe.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste piece_jointe =====================*/
					public function listePiece_jointe(){
					                $sql = "SELECT * FROM piece_jointe";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one piece_jointe =====================*/
					public function listePiece_jointeByTacheId($id){
					$sql = "SELECT * FROM piece_jointe WHERE  piece_jointe.id_tache = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== One to many piece_jointe =====================*/
					public function listeTacheByPiece_jointeId($id_tache){
					$sql = "SELECT * FROM tache WHERE  tache.id_tache = ".$id_tache."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

               public function addPiece_jointe($piece_jointe){
                        $sql = "INSERT INTO piece_jointe  VALUES(
                                     null
,
                                     ".$piece_jointe->getId_tache()."
,
                                     '".$piece_jointe->getPath_piece_jointe()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatepiece_jointe($piece_jointe){
                        $sql = "UPDATE piece_jointe  SET  piece_jointe.id_tache =  '".$piece_jointe->getId_tache()."' ,piece_jointe.path_piece_jointe =  '".$piece_jointe->getPath_piece_jointe()."'   WHERE   piece_jointe.id =  ".$piece_jointe->getId()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete piece_jointe =====================*/
					public function deletePiece_jointe($id){
					$sql = "DELETE FROM piece_jointe WHERE piece_jointe.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If piece_jointe existe =====================*/
					public function ifPiece_jointeexiste($id_tache){
					$sql = "SELECT * FROM piece_jointe WHERE id_tache='".$id_tache."' ";
					if($this->db != null)
					      {
					       if($this->db->query($sql)->fetch() != null)
					         {
					                 return true;
					         }
					      } 
					return false;
					                }


           }
  
   



   ?>



