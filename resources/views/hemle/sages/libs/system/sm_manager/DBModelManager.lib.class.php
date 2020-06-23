<?php
/*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16

    PERFECTIONNEZ PAR PIERRE YEM MBACK
    dialrock360@gmail.com
    (+221) 77 - 567 - 21 - 79
    AUTEUR DU MODUL UI SAMANE MANAGER

    POUR TOUTE MODIFICATION VISANT A AMELIORER
    CE MODELE.
    VOUS ETES LIBRE DE TOUTE UTILISATION.
  ===================================================*/

namespace libs\system\sm_manager;

class DBModelManager
{


    //DataBase settings
    private $host;
    private $user;
    private $pass;
    private $dbname;
    private $fndb;

    public function __construct(){

        require_once 'Functions.php';
        require_once 'config/database.php';

        $this->host = connexion_params()["host"];
        $this->user = connexion_params()["user"];
        $this->pass = connexion_params()["password"];
        $this->dbname = connexion_params()["database_name"];

        $this->fndb= new DatabaseManager();
    }









    public function create_file_model($entname,$dbname=''){

        $databasename=($dbname=='')?$this->dbname:$dbname;

        $forgtab=  $this->fndb->get_foreign_keyof_table(strtolower($entname),$databasename);

        $coltable2=  $this->fndb->get_table_details(strtolower($entname),$databasename);

        $content ="\n\n";
        //---------------------------- count  model ------------------------------------------
        $content .=$this->Count_maker($entname);
        $content .=$this->conditional_Count_maker($entname);

        //---------------------------- get  model ------------------------------------------
        $content .=$this->get_maker($entname);
        $content .=$this->conditional_get_maker($entname);


             //---------------------------- liste  model ------------------------------------------
             $content .=$this->liste_maker($entname);
             $content .=$this->conditional_liste_maker($entname);



             //---------------------------- Many to one  model ------------------------------------------
             $content .=$this->ObjecToarrayMaker_maker($entname,$coltable2,$forgtab);


             //---------------------------- One to many    model ------------------------------------------
             $content .=$this->EmptyarrayMaker_maker($entname,$coltable2,$forgtab);


             //---------------------------- Add   model ------------------------------------------
             $content .=$this->Add_maker($entname);

             //---------------------------- Add   model ------------------------------------------
             $content .=$this->Update_maker($entname);



             //---------------------------- Add   model ------------------------------------------
             $content .=$this->Delete_maker($coltable2);
             $content .=$this->Flg_delete_maker($entname);



             //---------------------------- ifexiste   model ------------------------------------------
             $content .=$this->Ifexiste_maker($entname);





        $content .="\n\n";

        return $content;
    }





    private function Count_maker($entname){


        $varEntity = strtolower($entname);
        $Entity = ucfirst($varEntity);
        $oldfile = "\n".'				/*================== Count '.$entname.' =====================*/'."\n";

        $oldfile .= '					public function count'.$Entity.'(){'."\n";
                $oldfile .= '					    $this->db->setTablename("$this->tablename");'."\n";
        $oldfile .= '	return $this->db->getRows(array("return_type"=>"count"))'."\n";

        $oldfile .= '					                }'."\n";

        return $oldfile;
    }

    private function conditional_Count_maker($entname){



        $varEntity = strtolower($entname);
        $Entity = ucfirst($varEntity);
        $oldfile = "\n".'				/*================== Conditional Count '.$entname.'  =====================*/'."\n";

        $oldfile .= '					public function conditional_Count($condition){'."\n";
                $oldfile .= '					    $this->db->setTablename("$this->tablename");'."\n";
        $oldfile .= '	return $this->db->getRows(array("where"=>$condition,"return_type"=>"count"));'."\n";


        $oldfile .= '					                }'."\n";


        return $oldfile;
    }






    private function Ifexiste_maker($entname){



        $varEntity = strtolower($entname);
        $Entity = ucfirst($varEntity);
        $oldfile = "\n".'				/*================== If '.$entname.' existe =====================*/'."\n";

        $oldfile .= '					public function if'.$Entity.'existe($condition){'."\n";
                $oldfile .= '					    $this->db->setTablename("$this->tablename");'."\n";
        $oldfile .= '	$existe=$this->db->getRows(array("where"=>$condition,"return_type"=>"single"));'."\n";

        $oldfile .= '					if($existe != null)'."\n";
        $oldfile .= '					      {'."\n";
        $oldfile .= '					                 return 1;'."\n";
        $oldfile .= '					      } '."\n";
        $oldfile .= '					return 0;'."\n";

        $oldfile .= '					                }'."\n";


        return $oldfile;
    }




    private function get_maker($entname,$dbname=''){

        $databasename=($dbname=='')?$this->dbname:$dbname;
        $varEntity = strtolower($entname);
        $condition='';
        $coltable2=  $this->fndb->get_table_details($varEntity,$databasename);
        if ($coltable2['ids']!=null){
            foreach($coltable2['ids'] as $col){

                if(strtolower($col['key'])==strtolower('pri') )
                {

                    $condition ='$condition = array("'.$col['name'].'" =>$this->'.$col['name'].')';
                    break;
                }
            }
        }

        $varEntity = strtolower($entname);
        $Entity = ucfirst($varEntity);
        $oldfile = "\n".'				/*================== Get '.$entname.' =====================*/'."\n";

        $oldfile .= '					public function get(){'."\n";
                $oldfile .= '					    $this->db->setTablename("$this->tablename");'."\n";
        $oldfile .= '					    '.$condition.';'."\n";
        $oldfile .= '	return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));'."\n";

        $oldfile .= '					                }'."\n";


        return $oldfile;
    }




    private function conditional_get_maker($entname){



        $varEntity = strtolower($entname);
        $Entity = ucfirst($varEntity);
        $oldfile = "\n".'				/*================== Conditional get '.$entname.'  =====================*/'."\n";

        $oldfile .= '					public function conditional_get($condition){'."\n";
        $oldfile .= '					    $this->db->setTablename("$this->tablename");'."\n";
        $oldfile .= '	return $this->db->getRows(array("where"=>$condition,"return_type"=>"single"));'."\n";


        $oldfile .= '					                }'."\n";


        return $oldfile;
    }

    private function liste_maker($entname){


        $varEntity = strtolower($entname);
        $Entity = ucfirst($varEntity);
        $oldfile = "\n".'				/*================== Liste '.$entname.' =====================*/'."\n";

        $oldfile .= '					public function liste(){'."\n";
                $oldfile .= '					    $this->db->setTablename("$this->tablename");'."\n";
        $oldfile .= '	return $this->db->getRows(array("return_type"=>"many"))'."\n";

        $oldfile .= '					                }'."\n";

        return $oldfile;
    }

    
    private function conditional_liste_maker($entname){



        $varEntity = strtolower($entname);
        $Entity = ucfirst($varEntity);
        $oldfile = "\n".'				/*================== Conditional liste '.$entname.'  =====================*/'."\n";

        $oldfile .= '					public function conditional_liste($condition,$filter){'."\n";
                $oldfile .= '					    $this->db->setTablename("$this->tablename");'."\n";
        $oldfile .= '	return $this->db->getRows(array("where"=>$condition,$filter,"return_type"=>"many"));'."\n";


        $oldfile .= '					                }'."\n";


        return $oldfile;
    }



    private function Add_maker($entname){

        $varEntity = strtolower($entname);

        $oldfile  = '					  private function insert(){'."\n";
                $oldfile .= '					    $this->db->setTablename("$this->tablename");'."\n";

        $oldfile .=  '  return $id_'.$varEntity.' = $this->db->insertTable($this->ObjecToarrayMaker());'."\n";
        $oldfile .= ' }'."\n";


        return $oldfile;
    }




    private function Update_maker($entname){

        $varEntity = strtolower($entname);

        $oldfile  = '					  private function update(){'."\n";
                $oldfile .= '					    $this->db->setTablename("$this->tablename");'."\n";

        $oldfile .=  '  return $id_'.$varEntity.' = $this->db->updateTable($this->ObjecToarrayMaker());'."\n";
        $oldfile .= ' }'."\n";


        return $oldfile;
    }

    private function Delete_maker($coltable2){

        $condition='';
        if ($coltable2['ids']!=null){
            foreach($coltable2['ids'] as $col){

                if(strtolower($col['key'])==strtolower('pri') )
                {

                    $condition ='$condition = array("'.$col['name'].'" =>$this->'.$col['name'].')';
                    break;
                }
            }
        }
        $oldfile  = '					  private function delete(){'."\n";
                $oldfile .= '					    $this->db->setTablename("$this->tablename");'."\n";
        $oldfile .= '					    '.$condition.';'."\n";
        $oldfile .= '	return $this->db->deleteTable(array("where"=>$condition));'."\n";
        $oldfile .= ' }'."\n";
        return $oldfile;
    }
    private function Flg_delete_maker($entname){

        $varEntity = strtolower($entname);

        $oldfile  = '					  private function fldelete(){'."\n";
                $oldfile .= '					    $this->db->setTablename("$this->tablename");'."\n";

        $oldfile .=  '  return $id_'.$varEntity.' = $this->db->updateTable($this->ObjecToarrayMaker());'."\n";
        $oldfile .= ' }'."\n";


        return $oldfile;
    }




    private function ObjecToarrayMaker_maker($entname,$coltable2,$forgtab){

        $varEntity = strtolower($entname);


        $Datatisset =array();
        $Datatarray =array();


        if ($coltable2['ids']!=null){
            foreach($coltable2['ids'] as $col){
                $Dataset=mathDatatisset($varEntity,$col,$forgtab);
                $Datatisset[]=$Dataset;
                $key=$col['name'];
                $value=$Dataset['isset'];
                $Datatarray[]="'".$key."'=>".$value;
            }
        }
        if ($coltable2['fk']!=null){
            foreach($coltable2['fk'] as $col){
                $Dataset=mathDatatisset($varEntity,$col,$forgtab);
                $Datatisset[]=$Dataset;
                $key=$col['name'];
                $value=$Dataset['isset'];
                $Datatarray[]="'".$key."'=>".$value;
            }
        }
        if ($coltable2['items']!=null){
            foreach($coltable2['items'] as $col){
                $Dataset=mathDatatisset($varEntity,$col,$forgtab);
                $Datatisset[]=$Dataset;
                $key=$col['name'];
                $value=$Dataset['isset'];
                $Datatarray[]="'".$key."'=>".$value;
            }
        }

        $oldfile  = '					  private function ObjecToarrayMaker(){'."\n";
        $oldfile .= '					    $OldTable=$this->emptyarrayMaker();'."\n";
        $oldfile .= '					    if ($this->id>0){'."\n";
        $oldfile .= '					        $OldTable=$this->get();'."\n";
        $oldfile .= '					     }'."\n";

        $oldfile .= '					     $Table= array('."\n";
        $oldfile .= implode(",", $Datatarray);
        $oldfile .= '					     );'."\n";

        $oldfile .=  '  return $Table;'."\n";
        $oldfile .= ' }'."\n";

        
        return $oldfile;
    }
    private function EmptyarrayMaker_maker($entname,$coltable2,$forgtab){

        $varEntity = strtolower($entname);



        $Datatisset =array();
        $Datatarray =array();


        if ($coltable2['ids']!=null){
            foreach($coltable2['ids'] as $col){
                $Dataset=mathDatatisset($varEntity,$col,$forgtab);
                $Datatisset[]=$Dataset;
                $key=$col['name'];
                $value=$Dataset['default'];
                $Datatarray[]="'".$key."'=>".$value;
            }
        }
        if ($coltable2['fk']!=null){
            foreach($coltable2['fk'] as $col){
                $Dataset=mathDatatisset($varEntity,$col,$forgtab);
                $Datatisset[]=$Dataset;
                $key=$col['name'];
                $value=$Dataset['default'];
                $Datatarray[]="'".$key."'=>".$value;
            }
        }
        if ($coltable2['items']!=null){
            foreach($coltable2['items'] as $col){
                $Dataset=mathDatatisset($varEntity,$col,$forgtab);
                $Datatisset[]=$Dataset;
                $key=$col['name'];
                $value=$Dataset['default'];
                $Datatarray[]="'".$key."'=>".$value;
            }
        }

        $oldfile  = '					  private function emptyarrayMaker(){'."\n";

        $oldfile .= '					     $Table= array('."\n";
        $oldfile .= implode(",", $Datatarray);
        $oldfile .= '					     );'."\n";

        $oldfile .=  '  return $Table;'."\n";
        $oldfile .= ' }'."\n";

        
        return $oldfile;
    }










}