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

class ModelManager
{


    //DataBase settings
    private $host;
    private $user;
    private $pass;
    private $dbname;
    private $etat;
    private $connection;
    private $ent_dir;
    private $ent_shema;
    private $mgr_dir;

    public function __construct(){

        require_once 'config/database.php';

        $this->host = connexion_params()["host"];
        $this->user = connexion_params()["user"];
        $this->pass = connexion_params()["password"];
        $this->dbname = connexion_params()["database_name"];
        $this->ent_dir = glob('src/model/*');
        $this->ent_shema = glob('src/model/modele_shema/*');
        $this->mgr_dir = glob('src/modeles/migrations/*');

    }





    function modeles_list(){


        $dbList = array();
        $i=1;

        foreach($this->ent_dir as $filename){
            //Use the is_file function to make sure that it is not a directory.

            $tmptableList = array();
            if((is_file($filename) ) && $filename!='src/model/index.html' && $filename!='src/model/DB.php'){

                $array = explode(".", $filename);
                $entpath= $array[0]; // piece1

                $array2 = explode("/", $entpath);
                $entname= strval(trim($array2[2])); // piece1

                $tableList = array();
                $tableList['id'] = $i;
                $tableList['entpath'] =$filename;
                $tableList['entname'] = $entname;
                $tableList['dbnbratt'] = '';
                $tableList['dbnbrmeth'] = '';
                $dbList[] = $tableList;
                /* print_r ($tableList);

                 echo '<hr/>';
                */
                $i++;
            }
        }
        return $dbList;
    }

    function get_model($dbname)
    {


        $dalabase = array();
        foreach($this->modeles_list()  as $cle=>$valeur){
            if ($valeur['dbname']==$dbname)
                $dalabase=$valeur;
            //echo $cle.' : '.$valeur.'<br>';
        }

        return $dalabase;
    }


    function if_model_exist($dbname)
    {


        $dalabase = 0;
        foreach($this->modeles_list() as $cle=>$valeur){
            if ($valeur['dbname']==$dbname)
                $dalabase=1;
            //echo $cle.' : '.$valeur.'<br>';
        }

        return $dalabase;
    }



    //methode ou url

    public function create_model($entname,$bdname=''){

        $fndb= new DatabaseManager();

        $bdname=($bdname=='')?$this->dbname:$bdname;

        $coltable2=  $fndb->get_table_cols_detail(strtolower($entname),$bdname);

        // print_r($tablels);





        $message = '';
        $ok = 1;
        $Entity = ucfirst(strtolower($entname));
        $varEntity = strtolower($entname);
        $repons = array();
        if ($entname!='src'){
            //   echo $dbname;
            $oldfile = '<?php'."\n\n".'    /*=================================================='."\n";
            $oldfile .='    MODELE MVC DEVELOPPE PAR Ngor SECK'."\n";
            $oldfile .='    ngorsecka@gmail.com'."\n";
            $oldfile .='    (+221) 77 - 433 - 97 - 16'."\n";
            $oldfile .='    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR'."\n";
            $oldfile .='    VOUS ETES LIBRE DE TOUTE UTILISATION'."\n";
            $oldfile .='    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com'."\n";
            $oldfile .='    ==================================================*/'."\n\n\n\n";
            $oldfile .='     namespace src\model;'."\n";


            $oldfile .='use libs\system\Model;'."\n";
            //Ici Test est une entite c'est a dire une classe
            $oldfile .='  use src\entities\\'.$Entity.';'."\n\n";

            $oldfile .='    /*==================Classe creer par Samane samane_ui_admin le '.date('d-m-Y H:i:s').'=====================*/'."\n";
            $oldfile .='        class '.ucfirst($Entity).'DB extends Model {'."\n";

            $oldfile .="\n\n";

            $oldfile .=$this->create_file_model($entname,$bdname,$coltable2);

             $oldfile .="           }"."\n".'  '."\n".'   '."\n";
            $oldfile .="\n\n\n".'   ?>'."\n\n\n";
            $txt = $oldfile."\n";
            $path="src/model/".$Entity."DB.php";
            //print_r($txt);
            $myfile = fopen($path, "w") or die("Unable to open file!");
            fwrite($myfile, $txt);
            fclose($myfile);

        }
        return '<label class="text-success">Enntities  '.$entname.' Successfully created </label>';
    }


    public function create_file_model($entname,$bdname,$coltable2){
        $fndb= new DatabaseManager();
        $getid='id';
       if ($coltable2['ids']!=null){
            $primaryKeys=$fndb->primaryKeys_filter($coltable2['ids']);
            foreach($primaryKeys as $col){
                $id=explode ( ':' , $col );


                //  echo '<hr>';
                if (!empty($id[1])){
                    $getid=$id[0];
                }

            }
        }

        $content ="\n\n";
        //---------------------------- Constructor  model ------------------------------------------
        $content .=$this->Constructor_maker();

        //---------------------------- count  model ------------------------------------------
        $content .=$this->Count_maker($entname);

        //---------------------------- get  model ------------------------------------------
        $content .=$this->get_maker($entname,$getid);


             //---------------------------- liste  model ------------------------------------------
             $content .=$this->liste_maker($entname);



             //---------------------------- Many to one  model ------------------------------------------
             $content .=$this->Manytoone_maker($entname,$bdname);


             //---------------------------- One to many    model ------------------------------------------
             $content .=$this->Onetomany_maker($entname,$bdname);


             //---------------------------- Add   model ------------------------------------------
             $content .=$this->Add_maker($entname,$bdname,$coltable2);

             //---------------------------- Add   model ------------------------------------------
             $content .=$this->Update_maker($entname,$coltable2);



             //---------------------------- Add   model ------------------------------------------
             $content .=$this->Delete_maker($entname,$getid);



             //---------------------------- ifexiste   model ------------------------------------------
             $content .=$this->Ifexiste_maker($entname,$coltable2);





        $content .="\n\n";
        
        return $content;
    }
    //methode ou url

    private function Constructor_maker(){
        $oldfile = "\n\n".'				/*================== Constructor =====================*/'."\n\n";
        $oldfile .= '					public function __construct(){'."\n";
        $oldfile .= '					                      parent::__construct();'."\n";
        $oldfile .= '					        }'."\n\n";
        return $oldfile;
    }


    private function Count_maker($entname){
        $varEntity = strtolower($entname);
        $Entity = ucfirst($varEntity);
        $oldfile = "\n".'				/*================== Count '.$entname.' =====================*/'."\n";
        $oldfile .= '					public function count'.$Entity.'(){'."\n";
        $oldfile .= '					                       return count($this->liste'.$Entity.'());'."\n";
        $oldfile .= '					        }'."\n";
        return $oldfile;
    }


    private function get_maker($entname,$getid){


        $varEntity = strtolower($entname);
        $Entity = ucfirst($varEntity);
        $oldfile = "\n".'				/*================== Get '.$entname.' =====================*/'."\n";

        $oldfile .= '					public function get'.$Entity.'($'.$getid.'){'."\n";


             $qry = '					$sql = "SELECT * FROM '.$varEntity.' WHERE '.$varEntity.'.id = ".$'.$getid.'."  ";';

        $oldfile .= $qry."\n";
        $oldfile .= '					                if($this->db != null)'."\n";
        $oldfile .= '					                    {'."\n";
        $oldfile .= '					                        return $this->db->query($sql)->fetch();'."\n";
        $oldfile .= '					                    }else{'."\n";
        $oldfile .= '					                        return null;'."\n";
        $oldfile .= '					                    }'."\n";
        $oldfile .= '					                }'."\n";

        return $oldfile;
    }

    private function Ifexiste_maker($entname,$coltable2){


        $varEntity = strtolower($entname);
        $Entity = ucfirst($varEntity);
        $name = '';
        $oldfile = "\n".'				/*================== If '.$entname.' existe =====================*/'."\n";
        if ($coltable2['items']!=null){
            foreach($coltable2['items'] as $col){
                $name=$col[0];
                break;
            }
        }
        $oldfile .= '					public function if'.$Entity.'existe($'.$name.'){'."\n";
         $qry = '					$sql = "SELECT * FROM '.$varEntity.' WHERE '.$name.'=\'".$'.$name.'."\' ";';
       /* print_r($qry);
        echo '<hr>';*/
        $oldfile .= $qry."\n";
        $oldfile .= '					if($this->db != null)'."\n";
        $oldfile .= '					      {'."\n";
        $oldfile .= '					       if($this->db->query($sql)->fetch() != null)'."\n";
        $oldfile .= '					         {'."\n";
        $oldfile .= '					                 return true;'."\n";
        $oldfile .= '					         }'."\n";
        $oldfile .= '					      } '."\n";
        $oldfile .= '					return false;'."\n";


        $oldfile .= '					                }'."\n";

        return $oldfile;
    }


    private function Delete_maker($entname,$getid){


        $varEntity = strtolower($entname);
        $Entity = ucfirst($varEntity);
        $oldfile = "\n".'				/*================== Delete '.$entname.' =====================*/'."\n";

        $oldfile .= '					public function delete'.$Entity.'($'.$getid.'){'."\n";

             $qry = '					$sql = "DELETE FROM '.$varEntity.' WHERE '.$varEntity.'.'.$getid.' = ".$'.$getid.'."";';

        $oldfile .= $qry."\n";
      //  $oldfile .= '					                $sql = "DELETE FROM '.$varEntity.' WHERE '.$varEntity.'.'.$getid.' = ".$'.$getid.'."";'."\n";
        $oldfile .= '					                if($this->db != null)'."\n";
        $oldfile .= '					                    {'."\n";
        $oldfile .= '					                        return $this->db->exec($sql);'."\n";
        $oldfile .= '					                    }else{'."\n";
        $oldfile .= '					                        return null;'."\n";
        $oldfile .= '					                    }'."\n";
        $oldfile .= '					                }'."\n";

        return $oldfile;
    }




    private function liste_maker($entname){


        $varEntity = strtolower($entname);
        $Entity = ucfirst($varEntity);
        $oldfile = "\n".'				/*================== Liste '.$entname.' =====================*/'."\n";

        $oldfile .= '					public function liste'.$Entity.'(){'."\n";
        $oldfile .= '					                $sql = "SELECT * FROM '.$varEntity.'";'."\n";
        $oldfile .= '					                if($this->db != null)'."\n";
        $oldfile .= '					                    {'."\n";
        $oldfile .= '					                        return $this->db->query($sql)->fetchAll();'."\n";
        $oldfile .= '					                    }else{'."\n";
        $oldfile .= '					                        return null;'."\n";
        $oldfile .= '					                    }'."\n";
        $oldfile .= '					                }'."\n";

        return $oldfile;
    }



    private function Manytoone_maker($entname,$dbname){


        $fndb= new DatabaseManager();
        $forgtab= $fndb->get_foreign_keyof_table(strtolower($entname),$dbname);

        $varEntity = strtolower($entname);
        $Entity = ucfirst($varEntity);
        $oldfile = "\n".'				/*================== Many to one '.$entname.' =====================*/'."\n";
        foreach($forgtab as $tab){
            $colname  =$tab['column_name'];
            $referency =$tab['foreign_column'];
            $foreign_table =$tab['foreign_table'];

            $oldfile .= '					public function liste'.$Entity.'By'.ucfirst(strtolower($foreign_table)).'Id($'.$referency.'){'."\n";
            //echo '<hr>';
                $qry = '					$sql = "SELECT * FROM '.$varEntity.' WHERE  '.$varEntity.'.'.$colname.' = ".$'.$referency.'."  ";';
            //echo '<hr>';
            $oldfile .= $qry."\n";
          /*  $oldfile .= '					                $sql = "SELECT *'."\n";
            $oldfile .= '					                FROM '.$varEntity.''."\n";
            $oldfile .= '					                WHERE '.$foreign_table.'.'.$colname.' = ".$'.$referency.'."  ";'."\n";*/
            $oldfile .= '					                if($this->db != null)'."\n";
            $oldfile .= '					                    {'."\n";
            $oldfile .= '					                        return $this->db->query($sql)->fetchAll();'."\n";
            $oldfile .= '					                    }else{'."\n";
            $oldfile .= '					                        return null;'."\n";
            $oldfile .= '					                    }'."\n";
            $oldfile .= '					                }'."\n";

        }



        return $oldfile;
    }



    private function Onetomany_maker($entname,$dbname){


        $fndb= new DatabaseManager();
        $forgtab= $fndb->get_foreign_keyof_table(strtolower($entname),$dbname);

        $varEntity = strtolower($entname);
        $Entity = ucfirst($varEntity);
        $oldfile = "\n".'				/*================== One to many '.$entname.' =====================*/'."\n";
        foreach($forgtab as $tab){
            $colname  =$tab['column_name'];
            $referency =$tab['foreign_column'];
            $foreign_table =$tab['foreign_table'];

            $oldfile .= '					public function liste'.ucfirst(strtolower($foreign_table)).'By'.$Entity.'Id($'.$colname.'){'."\n";
            //echo '<hr>';
                $qry = '					$sql = "SELECT * FROM '.$foreign_table.' WHERE  '.$foreign_table.'.'.$colname.' = ".$'.$colname.'."  ";';
           // echo '<hr>';
            $oldfile .= $qry."\n";
           /* $oldfile .= '					                $sql = "SELECT *'."\n";
            $oldfile .= '					                FROM '.$foreign_table.''."\n";
            $oldfile .= '					                WHERE '.$referency.' = ".$'.$colname.'."  ";'."\n";*/
            $oldfile .= '					                if($this->db != null)'."\n";
            $oldfile .= '					                    {'."\n";
            $oldfile .= '					                        return $this->db->query($sql)->fetchAll();'."\n";
            $oldfile .= '					                    }else{'."\n";
            $oldfile .= '					                        return null;'."\n";
            $oldfile .= '					                    }'."\n";
            $oldfile .= '					                }'."\n";

        }



        return $oldfile;
    }


    function Add_maker($entname,$dbname,$coltable2)
    {
        $varEntity = strtolower($entname);
        $Entity = ucfirst($varEntity);

        $fndb= new DatabaseManager();
        $forgtab= $fndb->get_foreign_keyof_table(strtolower($varEntity),$dbname);


        $fndb= new DatabaseManager();


        $tabparam =array();
        $tabfrkid =array();


        if ($coltable2['ids']!=null){
            $primaryKeys=$fndb->primaryKeys_filter($coltable2['ids']);
            foreach($primaryKeys as $col){
                $id=explode ( ':' , $col );


                //  echo '<hr>';
                if (!empty($id[1])){
                    $getid='null';
                    $tabparam[] ="\n".'                                     '.$getid.''."\n";
                }
                if (empty($id[1])){
                       $getid='\'".$'.strtolower($Entity).'->get'.ucfirst(strtolower($id[0])).'()."\'';
                    $tabparam[] ="\n".'                                     '.$getid.''."\n";
                }

            }
        }
        foreach($forgtab as $tab){
            $colname  =$tab['column_name'];
            $tabfrkid[]=$colname;
            $getid='".$'.$varEntity.'->get'.ucfirst(strtolower($colname)).'()."';
            $tabparam[] ="\n".'                                     '.$getid.''."\n";


           // echo '<br>'.$colname;
        }
        if ($coltable2['items']!=null){

            foreach($coltable2['items'] as $col){

                if(!in_array($col[0], $tabfrkid)){
                    $getid='\'".$'.strtolower($Entity).'->get'.ucfirst(strtolower($col[0])).'()."\'';
                    $tabparam[] ="\n".'                                     '.$getid.''."\n";

                }


            }

        }

        // echo '<hr>';
       // echo '<hr>';
         $qry='  $sql = "INSERT INTO '.$varEntity.'  VALUES('.implode( ',' , $tabparam ).') ";';
        //echo '<hr>';
        $add_maker = "\n";

        $add_maker .='               public function add'.$Entity.'($'.strtolower($Entity).'){'."\n";

        $add_maker .='                      '.$qry.''."\n\n";

        $add_maker .='                      if($this->db != null)'."\n";
        $add_maker .='                        {'."\n";

        $add_maker .='                              $this->db->exec($sql);'."\n";
		$add_maker .='                              return $this->db->lastInsertId();//Si la clé primaire est auto_increment'."\n";



        $add_maker .='                        }else{'."\n";
        $add_maker .='                        return null;'."\n";
        $add_maker .='                        }'."\n";
        $add_maker .='               }'."\n";

        return $add_maker;
    }




    function Update_maker($Entity, $coltable2)
    {


        $fndb= new DatabaseManager();




        $tbclause =array();
        $tabparam =array();
        if ($coltable2['ids']!=null){
            $primaryKeys=$fndb->primaryKeys_filter($coltable2['ids']);
            foreach($primaryKeys as $col){
                //echo '<hr>';
                /* print_r($col);
                echo '<hr>';*/
                $id=explode ( ':' , $col );
                $tbid[]='$'.$id[0].'';
                if (!empty($id[1])){
                    $getid=' ".$'.strtolower($Entity).'->get'.ucfirst(strtolower(explode( ':' , $col )[0])).'()." ';

                    $tbclause[]=''.strtolower($Entity).'.'.explode( ':' , $col )[0].' = '.$getid.'';
                }
                if (empty($id[1])){
                    $id2=explode ( ':' , $col );
                    $getid=' ".$'.strtolower($Entity).'->get'.ucfirst(strtolower($id2[0])).'()." ';
                    /*

                    echo '<hr>';
                    print_r($getid);
                    echo '<hr>';*/
                    $tabparam[]=''.strtolower($Entity).'.'.$col.' = '.$getid.'';
                    $tbclause[]=''.strtolower($Entity).'.'.$col.' = '.$getid.'';

                }

            }
        }
        if ($coltable2['items']!=null){
            foreach($coltable2['items'] as $col){
                //  echo '<hr>';
                /* print_r($col[0]);
                echo '<hr>';*/

                $getid=' \'".$'.strtolower($Entity).'->get'.ucfirst(strtolower($col[0])).'()."\' ';
                $tabparam[]=''.strtolower($Entity).'.'.$col[0].' = '.$getid.'';
            }
        }


        // echo '<hr>';
        $qry='  $sql = "UPDATE '.strtolower($Entity).'  SET  '.implode( ',' , $tabparam ).'  WHERE   '.implode( ' AND ' , $tbclause ).' ";';
      //  echo '<hr>';
       /* print_r($qry);
        echo '<hr>';*/
        $add_maker = "\n";

        $add_maker .='               public function update'.$Entity.'($'.strtolower($Entity).'){'."\n";

        $add_maker .='                      '.$qry.''."\n\n";

        $add_maker .='                      if($this->db != null)'."\n";
        $add_maker .='                        {'."\n";
        $add_maker .='                              return $this->db->exec($sql);'."\n";
        $add_maker .='                        }else{'."\n";
        $add_maker .='                        return null;'."\n";
        $add_maker .='                        }'."\n";
        $add_maker .='               }'."\n";

        return $add_maker;
    }























    public function post_create_modele($entname,$tabattrib,$import=''){
        /*
              print_r($entname) ;
               echo " <hr />";
              print_r($tabattrib) ;
               echo " <hr />";
              print_r($import) ;
               echo " <hr />";
        */
        $Entity = ucfirst(strtolower($entname));

        if ($entname!='src'){
            $importattr=array();
            $oldfile = '<?php'."\n\n".'    /*=================================================='."\n";
            $oldfile .='    MODELE MVC DEVELOPPE PAR Ngor SECK'."\n";
            $oldfile .='    ngorsecka@gmail.com'."\n";
            $oldfile .='    (+221) 77 - 433 - 97 - 16'."\n";
            $oldfile .='    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR'."\n";
            $oldfile .='    VOUS ETES LIBRE DE TOUTE UTILISATION'."\n";
            $oldfile .='    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com'."\n";
            $oldfile .='    ==================================================*/'."\n\n\n\n";
            $oldfile .='     namespace src\modeles;'."\n";
            $oldfile .='    /*==================Classe creer par Samane samane_ui_admin le '.date('d-m-Y H:i:s').'=====================*/'."\n";
            $oldfile .='        class '.ucfirst($Entity).''."\n";
            $oldfile .='            {'."\n\n";





            $oldfile .='    /*==================Attribut list=====================*/'."\n";
            foreach($tabattrib as $key=>$value){
                $oldfile .='                '.$this->attribut_maker($value,2);
            }

            if ($import!=''){

                $incude_modelestab = explode(";", $import);

                foreach($incude_modelestab as $key=>$value){
                    $importattr[]=$value;
                    // print_r($value) ;
                    // echo '                   private  $'.strtolower($value).';'."\n";
                    $oldfile .='             private  $'.strtolower($value).';'."\n";
                    //  echo " <hr />";
                }


                $oldfile .="\n\n";
                $oldfile .='    /*================== Constructor =====================*/'."\n";

                $oldfile .='              public function __construct()'."\n";
                $oldfile .='                 {'."\n";
                foreach($incude_modelestab as $key=>$value){

                    /* echo  '                 $this->'.strtolower($value).' = new '.ucfirst(strtolower($value)).'();'."\n";

                     echo " <hr />";*/
                    $oldfile .='                 $this->'.strtolower($value).' = new '.ucfirst(strtolower($value)).'();'."\n";
                }


                $oldfile .='                 }'."\n\n\n";


            }


            $oldfile .='    /*==================Methode list=====================*/'."\n";

            $oldfile .='    /*==================Getter list=====================*/'."\n";
            $fnent=new EntitieManager();
            foreach($tabattrib as $key=>$value){
                $oldfile .='                '.$fnent->getter_maker($value,2).''."\n\n";
            }
            if ($import!='' && count($importattr)>0){

                foreach($importattr as $key=>$value){

                    $oldfile .='             public function get'. ucfirst(strtolower($value)).'()'."\n";
                    $oldfile .='                 {'."\n";
                    $oldfile .='                     return $this->'.strtolower($value).';'."\n";
                    $oldfile .='                 }'."\n";
                }
                $oldfile .='     '."\n\n";
            }
            $oldfile .='    /*==================Setter list=====================*/'."\n";
            foreach($tabattrib as $key=>$value){
                $oldfile .='                '.$fnent->setter_maker($value,2).''."\n\n";
            }


            if ($import!='' && count($importattr)>0){

                foreach($importattr as $key=>$valeur){

                    $oldfile .='             public function set'.ucfirst(strtolower($valeur)).'($'.strtolower($valeur).')'."\n";
                    $oldfile .='                 {'."\n";
                    $oldfile .='                      $this->'.strtolower($valeur).' = $'.strtolower($valeur).';'."\n";
                    $oldfile .='                 }'."\n\n";
                }
                $oldfile .='     '."\n\n";
            }

            $oldfile .='    /*==================Methode list=====================*/'."\n";
            foreach($tabattrib as $key=>$value){
                $oldfile .='                '.$fnent->methode_maker($value,2).''."\n\n";
            }




            $oldfile .="           }"."\n".'  '."\n".'   '."\n";
            $oldfile .="\n\n\n".'   ?>'."\n\n\n";
            $txt = $oldfile."\n";
            $path="src/modeles/".$Entity.".php";
            //print_r($txt);
            $myfile = fopen($path, "w") or die("Unable to open file!");
            fwrite($myfile, $txt);
            fclose($myfile);



        }
        return '<label class="text-success">Entités  '.$entname.' créée avec succès </label>';
    }





    function add_maker1($Entity,$coltable2)
    {


        $fndb= new DatabaseManager();


        $tabparam =array();
        if ($coltable2['ids']!=null){
            $primaryKeys=$fndb->primaryKeys_filter($coltable2['ids']);
            foreach($primaryKeys as $col){
               // echo '<hr>';
                /* print_r($col);
                echo '<hr>';*/
                $id=explode ( ':' , $col );
                 if (!empty($id[1])){
                     $getid='null';
                }
                if (empty($id[1])){
                     $getid='".$'.strtolower($Entity).'->get'.ucfirst(strtolower($col)).'()."';
                }

                $tabparam[] ="\n".'                                     '.$getid.''."\n";
            }
        }
        if ($coltable2['items']!=null){
            foreach($coltable2['items'] as $col){

                 $getid='\'".$'.strtolower($Entity).'->get'.ucfirst(strtolower($col[0])).'()."\'';
                $tabparam[] ="\n".'                                     '.$getid.''."\n";
        }
        }

      // echo '<hr>';
          $qry='  $sql = "INSERT INTO '.strtolower($Entity).'  VALUES('.implode( ',' , $tabparam ).') ";';

        $add_maker = "\n";

        $add_maker .='               public function add'.$Entity.'($'.strtolower($Entity).'){'."\n";

        $add_maker .='                      '.$qry.''."\n\n";

        $add_maker .='                      if($this->db != null)'."\n";
        $add_maker .='                        {'."\n";
        $add_maker .='                              return $this->db->exec($sql);'."\n";
        $add_maker .='                        }else{'."\n";
        $add_maker .='                        return null;'."\n";
        $add_maker .='                        }'."\n";
        $add_maker .='               }'."\n";

        return $add_maker;
    }


    function attribut_maker($tabelattrib,$nameonly=0)
    {

        $attrib = "\n";
        if ($nameonly==0){
            for($i=0;$i<count($tabelattrib);$i++){
                $array = explode("-", $tabelattrib[$i]);
                $encaps= $array[0]; // piece1
                $elmname= $array[1]; // piece1

                $attrib .='             '.strtolower($encaps).' $'.strtolower($elmname).';'."\n";
            }

        }

        if ($nameonly==2){

            $tabatr=array();
            if ($tabelattrib['element']=='attribut'){
                //  print_r($tabelattrib);
                $tabatr[]=$tabelattrib;

                foreach($tabatr as $attribut){
                    $attrib .='             '.strtolower($attribut['encaps']).' $'.strtolower($attribut['elmname']) .' ;'."\n";
                    //echo " <br />";
                }
                //  echo " <hr />";

            }

        }
        if ($nameonly==1){
            //  print_r($nameonly);
            foreach($tabelattrib as $cle=>$valeur){
                $attrb='             private  $'.strtolower($valeur).';';
                //   echo '<br>';
                $attrib .=$attrb."\n";
                // echo $cle.' => '.$valeur.'<br>';

                //  $attrib .='             '.strtolower($encaps).' $'.strtolower($elmname).';'."\n";
            }

        }

        return $attrib;
    }


    function delete_modele($entname)
    {


        $ok= 0;
        foreach($this->modeles_list()  as $cle=>$valeur){


            if ($valeur['entname']===$entname){
                if (file_exists($valeur['entpath'])) {
                    //  echo $valeur['entname'].' : '.$entname.'<br>';
                    unlink($valeur['entpath']);
                    $ok= 1;
                }
            }
        }


        return $ok;
    }








    /*

       function extract_modele($file){
           $repons = array();
           $ok=1;
           $message = '';
           $this->fndb= new DatabaseFonctions();
           if($this->fndb->if_dalabase_exist($file['dbname'])==0)
           {
               $this->create_or_delete_database('create' ,$file['dbname']);
               $connect = mysqli_connect($this->host,  $this->user, $this->pass,$file['dbname']);
               $output = '';
               $count = 0;

               $sql = file_get_contents($file['file_data']);

               if (mysqli_connect_errno()) {
                   // check connection
                   printf("Connect failed: %s\n", mysqli_connect_error());
                   exit();
               }
               // execute multi query

               if ($connect->multi_query($sql)) {
                   //  echo "success";
                   $ok =1;
               } else {
                   // echo "error";
                   $ok =0;
                   $count =1;
               }

               if($count > 0)
               {
                   $message = '<label class="text-danger">There is an error in Database Import</label>';
               }
               else
               {
                   $message = '<label class="text-success">Database Successfully Imported</label>';
               }
           }
           else
           {
               $message = '<label class="text-danger">This Database already exist !!</label>';
           }
           $repons[]=$ok;
           $repons[]=$message;
           return $repons;
       }


    */
    function modele_atrib_filter($array) {
        $ctrlObject=array();
        foreach($array as $key=>$value){
            if ($key=='attribut' || $key=='elmname'|| $key=='element' || $key=='encaps'){

                $tabi=array();

                foreach($value as $key2=>$value2){


                    $tabi[]=$value2;
                    // echo $key2.' => '.$value2.'<br>';

                    //  echo $i++;
                }

                $ctrlObject["".$key.""]= $tabi;

            }
        }
        //print_r($this->flip_row_col_array($ctrlObject));

        return  flip_row_col_array($ctrlObject);
    }






























    public function create_model0($entname,$tabattrib,$idbname=''){
        $dbname=($idbname=='')?$this->dbname:$idbname;
        $fndb= new DatabaseManager();
        $import= $fndb->get_foreign_keyof_table($entname,$dbname);
        $idobj= array();
        $tabidobj= $fndb->get_primary_keyof_table($entname,$dbname);
        if ($tabidobj!=null){

            // print_r($import) ;
            foreach($tabidobj as $key=>$value){

                foreach($value as $key2=>$value2){
                    if ($key2=='column_name'){
                        $idobj[]=$value2;
                    }

                }
            }
            // print_r($idobj) ;
        }
        $id= '$id' ;

        $message = '';
        $ok = 1;
        $Entity = ucfirst(strtolower($entname));
        $varEntity = strtolower($entname);
        $repons = array();
        if ($entname!='src'){
            //   echo $dbname;
            $oldfile = '<?php'."\n\n".'    /*=================================================='."\n";
            $oldfile .='    MODELE MVC DEVELOPPE PAR Ngor SECK'."\n";
            $oldfile .='    ngorsecka@gmail.com'."\n";
            $oldfile .='    (+221) 77 - 433 - 97 - 16'."\n";
            $oldfile .='    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR'."\n";
            $oldfile .='    VOUS ETES LIBRE DE TOUTE UTILISATION'."\n";
            $oldfile .='    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com'."\n";
            $oldfile .='    ==================================================*/'."\n\n\n\n";
            $oldfile .='     namespace src\model;'."\n";


            $oldfile .='use libs\system\Model;'."\n";
            //Ici Test est une entite c'est a dire une classe
            $oldfile .='  use src\entities\\'.$Entity.';'."\n\n";

            $oldfile .='    /*==================Classe creer par Samane samane_ui_admin le '.date('d-m-Y H:i:s').'=====================*/'."\n";
            $oldfile .='        class '.ucfirst($Entity).'DB extends Model {'."\n";

            $oldfile .="\n\n";
            $oldfile .='    /*================== Constructor =====================*/'."\n";

            $oldfile .='              public function __construct()'."\n";
            $oldfile .='                 {'."\n";
            $oldfile .='                        parent::__construct();'."\n";


            $oldfile .='                 }'."\n\n\n";

            $oldfile .='               public function count'.$Entity.'(){'."\n";

            $oldfile .='                        return count($this->liste'.$Entity.'());'."\n";

            $oldfile .='               }'."\n\n";
            $clause=''.$varEntity.'.id = ".$id';
            $id='$id';
            if ($idobj!=null){
                $tbid=array();
                $tbclause=array();
                foreach($idobj as $key=>$value){
                    $tbclause[]=''.$varEntity.'.'.$value.' = ".$'.$value.'."';
                    $tbid[]='$'.$value.'';
                }
                $clause=(count($tbclause)>1) ?implode(" and ", $tbclause): $tbclause[0];
                $id=(count($tbid)>1) ?implode(",", $tbid): $tbid[0];
            }
            $oldfile .='               public function get'.$Entity.'('.$id.'){'."\n";

            $oldfile .='                      $sql = "SELECT *'."\n";
            $oldfile .='                              FROM '.$varEntity.''."\n";
            $oldfile .='                              WHERE '.$clause.'  ";'."\n";
            $oldfile .='                      if($this->db != null)'."\n";
            $oldfile .='                        {'."\n";
            $oldfile .='                            return $this->db->query($sql)->fetch();'."\n";
            $oldfile .='                        }else{'."\n";
            $oldfile .='                        return null;'."\n";
            $oldfile .='                        }'."\n";
            $oldfile .='               }'."\n";

            $oldfile .='               public function liste'.$Entity.'(){'."\n";

            $oldfile .='                       $sql = "SELECT * FROM '.$varEntity.'";'."\n";
            $oldfile .='                      if($this->db != null)'."\n";
            $oldfile .='                        {'."\n";
            $oldfile .='                              return $this->db->query($sql)->fetchAll();'."\n";
            $oldfile .='                        }else{'."\n";
            $oldfile .='                        return null;'."\n";
            $oldfile .='                        }'."\n";
            $oldfile .='               }'."\n";


            if ($import!=null){
                $foreigntabs=array();
                $foreigncols=array();

                $oldfile .='    /*==================Many to one =====================*/'."\n\n";
                foreach($import as $key=>$value){

                    foreach($value as $key2=>$value2){
                        if ($key2=='foreign_table'){
                            $foreigntabs[]=$value2;

                        }
                        if ($key2=='foreign_column'){
                            $foreigncols[]=$value2;

                        }


                    }
                    $oldfile .="\n\n";
                }
                if ($foreigntabs!=null){

                    for($i=0;$i<count($foreigntabs);$i++){

                        $oldfile .='               public function liste'.$Entity.'By'.ucfirst(strtolower($foreigntabs[$i])).'Id($'.$foreigncols[$i].'){'."\n";



                        $oldfile .='                      $sql = "SELECT *'."\n";
                        $oldfile .='                              FROM '.$varEntity.''."\n";
                        $oldfile .='                              WHERE '.$foreigncols[$i].' = ".$'.$foreigncols[$i].'."  ";'."\n";
                        $oldfile .='                      if($this->db != null)'."\n";
                        $oldfile .='                        {'."\n";
                        $oldfile .='                              return $this->db->query($sql)->fetchAll();'."\n";
                        $oldfile .='                        }else{'."\n";
                        $oldfile .='                        return null;'."\n";
                        $oldfile .='                        }'."\n";
                        $oldfile .='               }'."\n";

                    }


                    $oldfile .='    /*==================One to many =====================*/'."\n ";
                    for($i=0;$i<count($foreigntabs);$i++){

                        $oldfile .='               public function liste'.ucfirst(strtolower($foreigntabs[$i])).'By'.$Entity.'Id($'.$idobj[0].'){'."\n";



                        $oldfile .='                      $sql = "SELECT *'."\n";
                        $oldfile .='                              FROM '.strtolower($foreigntabs[$i]).''."\n";
                        $oldfile .='                              WHERE '.strtolower($idobj[0]).' = ".$'.$idobj[0].'."  ";'."\n";
                        $oldfile .='                      if($this->db != null)'."\n";
                        $oldfile .='                        {'."\n";
                        $oldfile .='                              return $this->db->query($sql)->fetchAll();'."\n";
                        $oldfile .='                        }else{'."\n";
                        $oldfile .='                        return null;'."\n";
                        $oldfile .='                        }'."\n";
                        $oldfile .='               }'."\n";

                    }
                }

                $oldfile .='    /*==================********************* =====================*/'."\n\n";
            }
            $oldfile .='    /*==================Add methode=====================*/'."\n";
            $oldfile .='                '.$this->add_maker($Entity,$tabattrib,$idobj).''."\n";

            $oldfile .='    /*==================Update methode=====================*/'."\n";
            $oldfile .='                '.$this->update_maker($Entity,$tabattrib,$idobj).''."\n\n";


            $oldfile .='               public function delete'.$Entity.'('.$id.'){'."\n";

            $oldfile .='                        $sql = "DELETE FROM '.$varEntity.' WHERE '.$clause.'";'."\n";
            $oldfile .='                      if($this->db != null)'."\n";
            $oldfile .='                        {'."\n";
            $oldfile .='                              return $this->db->exec($sql);'."\n";
            $oldfile .='                        }else{'."\n";
            $oldfile .='                        return null;'."\n";
            $oldfile .='                        }'."\n";
            $oldfile .='               }'."\n";



            $oldfile .="           }"."\n".'  '."\n".'   '."\n";
            $oldfile .="\n\n\n".'   ?>'."\n\n\n";
            $txt = $oldfile."\n";
            $path="src/model/".$Entity."DB.php";
            //print_r($txt);
            $myfile = fopen($path, "w") or die("Unable to open file!");
            fwrite($myfile, $txt);
            fclose($myfile);

        }
        return '<label class="text-success">Enntities  '.$entname.' Successfully created </label>';
    }



    function add_maker0($Entity,$tabelmt,$idobj=null)
    {
        $clause=''.strtolower($Entity).'.id = ".$id';
        $id='id';
        if ($idobj!=null){
            $tbid=array();
            $tbclause=array();
            foreach($idobj as $key=>$value){
                $tbclause[]=''.strtolower($Entity).'.'.$value.' = ".$'.$value.'."';
                $tbid[]=$value;
            }
            $clause=(count($tbclause)>1) ?implode(" and ", $tbclause): $tbclause[0];
            $id=(count($tbid)>1) ?implode(",", $tbid): $tbid[0];
        }
        $tabparam =array();
        foreach($tabelmt as $key=>$value){

            if (strtolower($value)!=strtolower($id)){
                // echo $value.' = '.$id." <hr />";
                $tabparam[] ="\n".'                                     \'".$'.strtolower($Entity).'->get'.ucfirst(strtolower($value)).'()."\''."\n";
                //   echo " <hr />";
            }

        }
        $add_maker = "\n";

        $add_maker .='               public function add'.$Entity.'($'.strtolower($Entity).'){'."\n";

        $add_maker .='                      $sql = "INSERT INTO '.strtolower($Entity).' VALUES(null,'.implode( ',' , $tabparam );
        $add_maker .='                                  )";'."\n\n";

        $add_maker .='                      if($this->db != null)'."\n";
        $add_maker .='                        {'."\n";
        $add_maker .='                              return $this->db->exec($sql);'."\n";
        $add_maker .='                        }else{'."\n";
        $add_maker .='                        return null;'."\n";
        $add_maker .='                        }'."\n";
        $add_maker .='               }'."\n";

        return $add_maker;
    }


    function update_maker0($Entity,$tabelmt ,$idobj=null)
    {
        $clause='id = ".$'.strtolower($Entity).'->getId()."';
        $id='id';
        if ($idobj!=null){
            $tbid=array();
            $tbclause=array();
            foreach($idobj as $key=>$value){
                $tbclause[]=''.strtolower($Entity).'.'.$value.' = \'".$'.strtolower($Entity).'->get'.ucfirst(strtolower($value)).'()."\'';
                $tbid[]=$value;
            }
            $clause=(count($tbclause)>1) ?implode(" and ", $tbclause): $tbclause[0];
            $id=(count($tbid)>1) ?implode(",", $tbid): $tbid[0];
        }
        $tabparam =array();
        foreach($tabelmt as $key=>$value){
            if (strtolower($value)!=strtolower($id)){
                $tabparam[] =' '.strtolower($value).' = \'".$'.strtolower($Entity).'->get'.ucfirst(strtolower($value)).'()."\'';

                //$tabparam[] =strtolower($value).' = \'"$'.strtolower($Entity).'->get'.ucfirst(strtolower($value)).'()"\''."\n";
            }

        }
        $update_maker = "\n";

        $update_maker .='               public function update'.$Entity.'($'.strtolower($Entity).'){'."\n";

        $update_maker .='                      $sql = "UPDATE '.strtolower($Entity).' SET '.implode( ',' , $tabparam ).'  WHERE '.$clause.' ";'."\n\n";

        $update_maker .='                      if($this->db != null)'."\n";
        $update_maker .='                        {'."\n";
        $update_maker .='                              return $this->db->exec($sql);'."\n";
        $update_maker .='                        }else{'."\n";
        $update_maker .='                        return null;'."\n";
        $update_maker .='                        }'."\n";
        $update_maker .='               }'."\n";

        return $update_maker;
    }




    public function create_model1($entname,$tabattrib,$idbname=''){
        $dbname=($idbname=='')?$this->dbname:$idbname;


        $fndb= new DatabaseManager();
        // print_r($tablels);



        $coltable2=  $fndb->get_table_cols_detail(strtolower($entname),$dbname);


        $import= $fndb->get_foreign_keyof_table($entname,$dbname);
        $idobj= array();
        $tabidobj= $fndb->get_primary_keyof_table($entname,$dbname);
        if ($tabidobj!=null){

            // print_r($import) ;
            foreach($tabidobj as $key=>$value){

                foreach($value as $key2=>$value2){
                    if ($key2=='column_name'){
                        $idobj[]=$value2;
                    }

                }
            }
            // print_r($idobj) ;
        }
        $id= '$id' ;

        $message = '';
        $ok = 1;
        $Entity = ucfirst(strtolower($entname));
        $varEntity = strtolower($entname);
        $repons = array();
        if ($entname!='src'){
            //   echo $dbname;
            $oldfile = '<?php'."\n\n".'    /*=================================================='."\n";
            $oldfile .='    MODELE MVC DEVELOPPE PAR Ngor SECK'."\n";
            $oldfile .='    ngorsecka@gmail.com'."\n";
            $oldfile .='    (+221) 77 - 433 - 97 - 16'."\n";
            $oldfile .='    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR'."\n";
            $oldfile .='    VOUS ETES LIBRE DE TOUTE UTILISATION'."\n";
            $oldfile .='    Document redefini par samane_ui_admin de Pierre Yem Mback dialrock360@gmail.com'."\n";
            $oldfile .='    ==================================================*/'."\n\n\n\n";
            $oldfile .='     namespace src\model;'."\n";


            $oldfile .='use libs\system\Model;'."\n";
            //Ici Test est une entite c'est a dire une classe
            $oldfile .='  use src\entities\\'.$Entity.';'."\n\n";

            $oldfile .='    /*==================Classe creer par Samane samane_ui_admin le '.date('d-m-Y H:i:s').'=====================*/'."\n";
            $oldfile .='        class '.ucfirst($Entity).'DB extends Model {'."\n";

            $oldfile .="\n\n";
            $oldfile .='    /*================== Constructor =====================*/'."\n";

            $oldfile .='              public function __construct()'."\n";
            $oldfile .='                 {'."\n";
            $oldfile .='                        parent::__construct();'."\n";


            $oldfile .='                 }'."\n\n\n";

            $oldfile .='               public function count'.$Entity.'(){'."\n";

            $oldfile .='                        return count($this->liste'.$Entity.'());'."\n";

            $oldfile .='               }'."\n\n";
            $clause=''.$varEntity.'.id = ".$id';
            $id='$id';

            $params='';
            $fndb= new DatabaseManager();
            $coltable2=  $fndb->get_table_cols_detail(strtolower($entname),$dbname);


            if ($coltable2['ids']!=null){
                $primaryKeys=$fndb->primaryKeys_filter($coltable2['ids']);
                $param=array();
                foreach($primaryKeys as $col){
                    $id=explode ( ':' , $col );
                    if (!empty($id[1])){
                        $param[]='$'.$id[0].'';
                    }
                    if (empty($id[1])){
                        $param[]='$'.$id[0].'';
                        // echo '<hr>';

                    }
                    $tbclause[]=''.$varEntity.'.'.$id[0].' = ".$'.$id[0].'."';
                    $tbid[]='$'.$id[0].'';

                }

                $params=implode( ',' , $param );
                $clause=(count($tbclause)>1) ?implode(" and ", $tbclause): $tbclause[0];
                $id=(count($tbid)>1) ?implode(",", $tbid): $tbid[0];
            }



            $oldfile .='               public function get'.$Entity.'('.$params.'){'."\n";

            $oldfile .='                      $sql = "SELECT *'."\n";
            $oldfile .='                              FROM '.$varEntity.''."\n";
            $oldfile .='                              WHERE '.$clause.'  ";'."\n";
            $oldfile .='                      if($this->db != null)'."\n";
            $oldfile .='                        {'."\n";
            $oldfile .='                            return $this->db->query($sql)->fetch();'."\n";
            $oldfile .='                        }else{'."\n";
            $oldfile .='                        return null;'."\n";
            $oldfile .='                        }'."\n";
            $oldfile .='               }'."\n";

            $oldfile .='               public function liste'.$Entity.'(){'."\n";

            $oldfile .='                       $sql = "SELECT * FROM '.$varEntity.'";'."\n";
            $oldfile .='                      if($this->db != null)'."\n";
            $oldfile .='                        {'."\n";
            $oldfile .='                              return $this->db->query($sql)->fetchAll();'."\n";
            $oldfile .='                        }else{'."\n";
            $oldfile .='                        return null;'."\n";
            $oldfile .='                        }'."\n";
            $oldfile .='               }'."\n";


            if ($import!=null){
                $foreigntabs=array();
                $foreigncols=array();

                $oldfile .='    /*==================Many to one =====================*/'."\n\n";
                foreach($import as $key=>$value){

                    foreach($value as $key2=>$value2){
                        if ($key2=='foreign_table'){
                            $foreigntabs[]=$value2;

                        }
                        if ($key2=='foreign_column'){
                            $foreigncols[]=$value2;

                        }


                    }
                    $oldfile .="\n\n";
                }
                if ($foreigntabs!=null){

                    for($i=0;$i<count($foreigntabs);$i++){

                        $oldfile .='               public function liste'.$Entity.'By'.ucfirst(strtolower($foreigntabs[$i])).'Id($'.$foreigncols[$i].'){'."\n";



                        $oldfile .='                      $sql = "SELECT *'."\n";
                        $oldfile .='                              FROM '.$varEntity.''."\n";
                        $oldfile .='                              WHERE '.$foreigncols[$i].' = ".$'.$foreigncols[$i].'."  ";'."\n";
                        $oldfile .='                      if($this->db != null)'."\n";
                        $oldfile .='                        {'."\n";
                        $oldfile .='                              return $this->db->query($sql)->fetchAll();'."\n";
                        $oldfile .='                        }else{'."\n";
                        $oldfile .='                        return null;'."\n";
                        $oldfile .='                        }'."\n";
                        $oldfile .='               }'."\n";

                    }


                    $oldfile .='    /*==================One to many =====================*/'."\n ";
                    for($i=0;$i<count($foreigntabs);$i++){

                        $oldfile .='               public function liste'.ucfirst(strtolower($foreigntabs[$i])).'By'.$Entity.'Id($'.$idobj[0].'){'."\n";



                        $oldfile .='                      $sql = "SELECT *'."\n";
                        $oldfile .='                              FROM '.strtolower($foreigntabs[$i]).''."\n";
                        $oldfile .='                              WHERE '.strtolower($idobj[0]).' = ".$'.$idobj[0].'."  ";'."\n";
                        $oldfile .='                      if($this->db != null)'."\n";
                        $oldfile .='                        {'."\n";
                        $oldfile .='                              return $this->db->query($sql)->fetchAll();'."\n";
                        $oldfile .='                        }else{'."\n";
                        $oldfile .='                        return null;'."\n";
                        $oldfile .='                        }'."\n";
                        $oldfile .='               }'."\n";

                    }
                }

                $oldfile .='    /*==================********************* =====================*/'."\n\n";
            }

            $oldfile .='    /*==================Add methode=====================*/'."\n";
            $oldfile .='                '.$this->add_maker($Entity,$coltable2).''."\n";

            $oldfile .='    /*==================Update methode=====================*/'."\n";
            $oldfile .='                '.$this->update_maker($Entity,$coltable2).''."\n";


            $oldfile .='               public function delete'.$Entity.'('.$params.'){'."\n";

            $oldfile .='                        $sql = "DELETE FROM '.$varEntity.' WHERE '.$clause.'";'."\n";
            $oldfile .='                      if($this->db != null)'."\n";
            $oldfile .='                        {'."\n";
            $oldfile .='                              return $this->db->exec($sql);'."\n";
            $oldfile .='                        }else{'."\n";
            $oldfile .='                        return null;'."\n";
            $oldfile .='                        }'."\n";
            $oldfile .='               }'."\n";



            $oldfile .="           }"."\n".'  '."\n".'   '."\n";
            $oldfile .="\n\n\n".'   ?>'."\n\n\n";
            $txt = $oldfile."\n";
            $path="src/model/".$Entity."DB.php";
            //print_r($txt);
            $myfile = fopen($path, "w") or die("Unable to open file!");
            fwrite($myfile, $txt);
            fclose($myfile);

        }
        return '<label class="text-success">Enntities  '.$entname.' Successfully created </label>';
    }







}