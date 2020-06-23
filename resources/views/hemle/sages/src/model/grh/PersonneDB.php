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
  use src\entities\Personne;

    /*==================Classe creer par Samane samane_ui_admin le 10-11-2019 11:15:22=====================*/
        class PersonneDB extends Model {






				/*================== Constructor =====================*/

					public function __construct(){
					                      parent::__construct();
					        }


				/*================== Count personne =====================*/
					public function countPersonne(){
					                       return count($this->listePersonne());
					        }

				/*================== Get personne =====================*/
					public function getPersonne($id){
					$sql = "SELECT * FROM personne WHERE personne.id = ".$id."  ";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetch();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Liste personne =====================*/
					public function listePersonne(){
					                $sql = "SELECT * FROM personne";
					                if($this->db != null)
					                    {
					                        return $this->db->query($sql)->fetchAll();
					                    }else{
					                        return null;
					                    }
					                }

				/*================== Many to one personne =====================*/

				/*================== One to many personne =====================*/

               public function addPersonne($personne){
                        $sql = "INSERT INTO personne  VALUES(
                                     null
,
                                     '".$personne->getNom_personne()."'
,
                                     '".$personne->getPrenom_personne()."'
,
                                     '".$personne->getGenre_personne()."'
,
                                     '".$personne->getDate_naiss_personne()."'
,
                                     '".$personne->getLieu_naiss_personne()."'
,
                                     '".$personne->getNationalite_personne()."'
,
                                     '".$personne->getTypepiece_personne()."'
,
                                     '".$personne->getNumpiece_personne()."'
,
                                     '".$personne->getPhoto_personne()."'
,
                                     '".$personne->getDetails_personne()."'
,
                                     '".$personne->getFlag_personne()."'
) ";

                      if($this->db != null)
                        {
                              $this->db->exec($sql);
                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                        }else{
                        return null;
                        }
               }

               public function updatepersonne($personne){
                        $sql = "UPDATE personne  SET  personne.nom_personne =  '".$personne->getNom_personne()."' ,personne.prenom_personne =  '".$personne->getPrenom_personne()."' ,personne.genre_personne =  '".$personne->getGenre_personne()."' ,personne.date_naiss_personne =  '".$personne->getDate_naiss_personne()."' ,personne.lieu_naiss_personne =  '".$personne->getLieu_naiss_personne()."' ,personne.nationalite_personne =  '".$personne->getNationalite_personne()."' ,personne.typepiece_personne =  '".$personne->getTypepiece_personne()."' ,personne.numpiece_personne =  '".$personne->getNumpiece_personne()."' ,personne.photo_personne =  '".$personne->getPhoto_personne()."' ,personne.details_personne =  '".$personne->getDetails_personne()."' ,personne.flag_personne =  '".$personne->getFlag_personne()."'   WHERE   personne.id =  ".$personne->getId()."  ";

                      if($this->db != null)
                        {
                              return $this->db->exec($sql);
                        }else{
                        return null;
                        }
               }

				/*================== Delete personne =====================*/
					public function deletePersonne($id){
					$sql = "DELETE FROM personne WHERE personne.id = ".$id."";
					                if($this->db != null)
					                    {
					                        return $this->db->exec($sql);
					                    }else{
					                        return null;
					                    }
					                }

				/*================== If personne existe =====================*/
					public function ifPersonneexiste($nom_personne){
					$sql = "SELECT * FROM personne WHERE nom_personne='".$nom_personne."' ";
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



