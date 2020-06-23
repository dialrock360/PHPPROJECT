<?php




require_once 'config/database.php';

function extract_database($db,$download=false)
{
    $host= connexion_params()["host"];
    $user=connexion_params()["user"];
    $pass=connexion_params()["password"];
    $dbname=$db;
    $date = date('d-m-Y H:i:s');
    $ref = date('dmYHis');

    $tables=false; $backup_name=false;

    set_time_limit(3000); $mysqli = new mysqli($host,$user,$pass,$dbname); $mysqli->select_db($dbname); $mysqli->query("SET NAMES 'utf8'");
    $queryTables = $mysqli->query('SHOW TABLES'); while($row = $queryTables->fetch_row()) { $target_tables[] = $row[0]; }	if($tables !== false) { $target_tables = array_intersect( $target_tables, $tables); }
    $content = "SET SQL_MODE = \"NO_AUTO_VALUE_ON_ZERO\";\r\nSET time_zone = \"+00:00\";\r\n\r\n\r\n/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;\r\n/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;\r\n/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;\r\n/*!40101 SET NAMES utf8 */;\r\n--\r\n-- Database: `".$dbname."`\r\n--\r\n\r\n\r\n";
    foreach($target_tables as $table){
        if (empty($table)){ continue; }

        $result	= $mysqli->query('SELECT * FROM `'.$table.'`');  	$fields_amount=$result->field_count;  $rows_num=$mysqli->affected_rows; 	$res = $mysqli->query('SHOW CREATE TABLE '.$table);	$TableMLine=$res->fetch_row();

        $content .= "\n\n".$TableMLine[1].";\n\n";   $TableMLine[1]=str_ireplace('CREATE TABLE `','CREATE TABLE IF NOT EXISTS `',$TableMLine[1]);
        for ($i = 0, $st_counter = 0; $i < $fields_amount;   $i++, $st_counter=0) {
            while($row = $result->fetch_row())	{ //when started (and every after 100 command cycle):
                if ($st_counter%100 == 0 || $st_counter == 0 )	{$content .= "\nINSERT INTO ".$table." VALUES";}
                $content .= "\n(";    for($j=0; $j<$fields_amount; $j++){ $row[$j] = str_replace("\n","\\n", addslashes($row[$j]) ); if (isset($row[$j])){$content .= '"'.$row[$j].'"' ;}  else{$content .= '""';}	   if ($j<($fields_amount-1)){$content.= ',';}   }        $content .=")";
                //every after 100 command cycle [or at last line] ....p.s. but should be inserted 1 cycle eariler
                if ( (($st_counter+1)%100==0 && $st_counter!=0) || $st_counter+1==$rows_num) {$content .= ";";} else {$content .= ",";}	$st_counter=$st_counter+1;
            }
        } $content .="\n\n\n";
    }
    $content .= "\r\n\r\n/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;\r\n/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;\r\n/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;";
    $backup_name = $ref.'-'.$dbname.'-'.$date.'.sql';
    ob_get_clean();
    $directory='src/view/sm-sdmin/database/backup';

    if($download==true)
    {
        header('Content-Type: application/octet-stream');
        header("Content-Transfer-Encoding: Binary");
        header('Content-Length: '. (function_exists('mb_strlen') ? mb_strlen($content, '8bit'): strlen($content)) );
        header("Content-disposition: attachment; filename=\"".$backup_name."\"");

    }else{

        if (file_exists('src/view/sm-sdmin/database/backup/ping.txt')) {
            $file = $directory.'/'.$backup_name;
            // Ouvre un fichier pour lire un contenu existant
            //   $current = file_get_contents($file);
            // Ajoute une personne
            $current = $content." \n";
            // Écrit le résultat dans le fichier
            file_put_contents($file, $current);
        }
    }
    return $content; exit;
}


function flip_row_col_array($array) {
    $out = array();
    foreach ($array as  $rowkey => $row) {
        foreach($row as $colkey => $col){
            $out[$colkey][$rowkey]=$col;
        }
    }
    return $out;
}


  function get_table_details($tbl_name,$idbname=''){
    $dbname=($idbname=='')?connexion_params()["database_name"]:$idbname;

    $host= connexion_params()["host"];
    $user=connexion_params()["user"];
    $pass=connexion_params()["password"];


    $ids=null;
    $item=null;
    $ret=null;
    set_time_limit(3000);
    $mysqli = new mysqli($host,$user,$pass,$dbname);
    $mysqli->select_db($dbname);
    $mysqli->query("SET NAMES 'utf8'");
    $queryTables = $mysqli->query('DESCRIBE '.$tbl_name.'');

    while($rows = $queryTables->fetch_row()) {
       // echo "id: " . $row["Field"]. " - Key: " . $row["Key"]. "  - Extra: " . $row["Extra"]. "<br>";

      //  echo '<hr>';
        if (isset($rows[3]) && $rows[3]=='PRI'){
            $ids[]=$rows;

        }else{

            $item[]=$rows;
        }

    }

      $ret['ids']=$ids;
      $ret['items']=$item;

     /* print_r($ret);
      echo '<hr>';*/

      return $ret;
}

function startsWith ($string, $startString)
{
    $len = strlen($startString);
    return (substr($string, 0, $len) === $startString);
}

function endsWith($string, $endString)
{
    $len = strlen($endString);
    if ($len == 0) {
        return true;
    }
    return (substr($string, -$len) === $endString);
}
function mathDatatipe($string,$type='num')
{




    $patternemail ="/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/";
    $pattern0399 ="/^[varchar]+\([0-399]+\)$/i";
    $patternP400 ="/^[varchar]+\([400-10000]+\)$/i";
    $patternnum  ="/int|decimal|double|numeric|float|real/i";
    $patternbin  ="/bit|binary|blob/i";
    $patterntext  ="/text|tinytext|longtext|mediumtext/i";
    $patternbool ="/bool|boolean|enum|set/i";
    $patterndate ="/date|timestamp|year|datetime/i";
    $pattern=($type=='num')?$patternnum:(
    ($type=='bin')?$patternbin:(
    ($type=='text')?$patterntext:(
    ($type=='bool')?$patternbool:(
    ($type=='date')?$patterndate:(
    ($type=='p400')?$patternP400:(
    ($type=='p399')?$pattern0399:(
    ($type=='email')?$patternemail:""
    )
    )
    )
    )
    )

    ));

    if ($type=='p400' || $type=='p399'){
        if (startsWith ($string, 'varchar')){

            $var1 =  substr($string,7);
            $var2 =  substr("$var1",1);
            $val =   (substr($var2,0,3));
            if ($val<399){
                if ($type=='p399'){
                    return true;
                }
            }else{

                if ($type=='p400'){
                    return true;
                }
            }

            //echo $val."<br>";
        }
    }else{
        if (preg_match($pattern, $string)) {
            // echo '<hr>'.$string.'<hr>';
            return true;
        }
    }



    return false;
}
function manfield_count()
{
    $mysqli = new mysqli("localhost", "root", "", "babayaga");

    $mysqli->query( "DROP TABLE IF EXISTS friends");
    $mysqli->query( "CREATE TABLE friends (id int, name varchar(20),age int)");

    $mysqli->query( "INSERT INTO friends VALUES (1,'Hartmut',20), (2, 'Ulf',32), (3, 'Ulf360',50)");

    $mysqli->real_query("SELECT * FROM friends");

    //print_r($mysqli->field_count);echo  '<hr/>';
    if ($mysqli->field_count) {
        /* Une requête SELECT, SHOW ou DESCRIBE */
        $result = $mysqli->store_result();

        /* Récupération du jeu de résultats */
        $row = $result->fetch_row();
        /* Libération du jeu de résultats */
        $result->close();
    }

    /* Fermeture de la connexion */
    $mysqli->close();
}
function manfaffected_row()
{

    $mysqli = new mysqli("localhost", "root", "", "test");

    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }

// Perform queries and print out affected rows
    $mysqli -> query("SELECT * FROM friends");
    echo "Affected rows: " . $mysqli -> affected_rows;
    echo  '<br/>';
    $mysqli -> query("DELETE FROM friends WHERE age>32");
    echo "Affected rows: " . $mysqli -> affected_rows;
    echo  '<br/>';
    $mysqli -> close();
}
class foo {
    private $a;
    private $d;
    public function test() {
        var_dump(get_object_vars($this));
    }

    private function FROM($ade) {
        return $ade;
    }
}

function manoReflectionClass()
{

    $reflect = new ReflectionClass('foo');

    echo $reflect.'<hr/><hr/>';

    foreach($reflect->getProperties() as $reflectpropertie) {
        echo "  {$reflectpropertie->getName()}".'<br/>';


    }
    echo '<hr/>';
    foreach($reflect->getMethods() as $reflectmethod) {
        echo "  {$reflectmethod->getName()}".'<br/>';
        echo "============================================".'<br/>';
        foreach($reflectmethod->getParameters() as $num => $param) {
            echo "    Param ".$param->getName().'<br/>';
        }

        echo '<hr/>';
    }




}

function mathDatatisset($table,$row,$forgtab,$add=true)
{


     $champ = strtolower($row['name']);
     $datatype =  strtolower($row['data_type']);
     $type =  strtolower($row['type']);
     $key =  strtolower($row['key']) ;
     $auto =  strtolower($row['auto']) ;


    $patternnum  ="/bit|tinyint|smallint|int|bigint|float|decimal|numeric|float|double|real|bool|boolean/i";
    $patternbin  ="/bit|binary|blob|CLOB|IMAGE/i";
    $patternvarchar  ="/CHAR|VARCHAR|NCHAR|NVARCHAR/i";
    $patterntext  ="/text|tinytext|longtext|mediumtext|NTEXT/i";
    $patternset ="/enum|set/i";
    $patterndate ="/DATE|TIME|DATETIME|TIMESTAMP|YEAR|month|week/i";


    $my_url=array();


    $editvalue='{if isset($'.$table.')} {$'.$table.'[\''.$champ.'\']} {/if}';
    $value=($add==true)?"" :$editvalue;



    $dolar="$";


    $cnd=(strtolower($auto)==strtolower('auto_increment'))?"(".$dolar."this->".$champ." == 0 || ".$dolar."this->".$champ." == 'null')  ? ":"(".$dolar."this->".$champ." == 0 )  ? ";
    $intcnd=$cnd.$dolar."OldTable['".$champ."']:".$dolar."this->".$champ;

    $bincnd="(".$dolar."this->".$champ." == null )  ? ".$dolar."OldTable['".$champ."']:".$dolar."this->".$champ;
    $enumcnd="(!isset(".$dolar."this->".$champ.") || empty(".$dolar."this->".$champ.") )  ? ".$dolar."OldTable['".$champ."']:".$dolar."this->".$champ;
    $stringcnd="(!isset(".$dolar."this->".$champ.") || empty(".$dolar."this->".$champ.") )  ? ".$dolar."OldTable['".$champ."']:".$dolar."this->".$champ;

    if(preg_match(strtolower($patterntext), strtolower($datatype)))
    {

        $my_url['isset']=$stringcnd ;
        $my_url['input']='<textarea rows="5" name="'.$champ.'" id="'.$champ.'"> '.$value.' </textarea>'."\n";
        $my_url['default']='""' ;
        //echo $my_url['input'].'<hr>';
    }
    if(preg_match(strtolower($patternvarchar), strtolower($datatype)))
    {
        $my_url['isset']=$stringcnd ;
        $my_url['input']=' <input class="form-control" type="text" name="'.$champ.'"  value="'.$value.'"  id="'.$champ.'" placeholder="'.$champ.'"   />'."\n";

        $my_url['default']='""' ;
        //echo $my_url['input'].'<hr>';
    }
    if(preg_match(strtolower($patternnum), strtolower($datatype)))
    {

        $value=($add==true)?0 :$editvalue;
        $my_url['isset']=$intcnd ;
        $input = '';
        $default = 0;
        if(strtolower($key)==strtolower('pri') || strtolower($key)==strtolower('ras'))
        {
                    if(strtolower($key)==strtolower('pri') && strtolower($auto)==strtolower('auto_increment'))
                    {

                        $default = "'null'";

                        $input .=' <input class="form-control" type="hidden" name="'.$champ.'" value="'.$value.'"  id="'.$champ.'" placeholder="'.$champ.'"   />'."\n";
                    }else{

                        $input .=' <input class="form-control" type="number" name="'.$champ.'" value="'.$value.'"  id="'.$champ.'" placeholder="'.$champ.'"   />'."\n";
                    }
        }
        if(strtolower($key)==strtolower('mul'))
        {
            $input .= '<select name="'.$champ.'" class="form-control champ" id="'.$champ.'">   '."\n";

            $input .= '<option selected value="'.$value.'">'.$value.'</option>'."\n";

            foreach($forgtab as $col){
                $input .= '{if isset($'.strtolower($col['foreign_table']).'s)}  '."\n";
                if(strtolower($col['column_name'])==strtolower($champ))
                {
                    $input .= '{foreach from=$'.strtolower($col['foreign_table']).'s item=champ}'."\n";
                    $svalue= "value={".$dolar."champ['".strtolower($col['foreign_column'])."']}"."\n";
                    $stext= "{".$dolar."champ['".strtolower($col['foreign_column'])."']}"."\n";
                    $input .= '<option  '.$svalue.'>'.$stext.'</option>'."\n";

                    $input .= '{/foreach}'."\n";
                }
                $input .= '{/if}'."\n";
            }

         //   $input .= '<option value="{$champ['id']}">{$champ['nom_service']}  </option>';
            $input .=' </select>';

            $my_url['input']=$input;


        }

        $my_url['input']=$input;
        $my_url['default']=$default;

      //  print_r($input);echo '<hr>';
        //echo $my_url['input'].'<hr>';
    }
    if (preg_match(strtolower($patternbin), strtolower($datatype)))
    {
        $value=($add==true)?0 :$editvalue;

        $my_url['isset']=$bincnd ;
        $my_url['input']=' <input class="form-control" type="file" name="'.$champ.'" value="'.$value.'"  id="'.$champ.'" placeholder="'.$champ.'"   />' ."\n";
        $my_url['default']='null' ;
        //echo $my_url['input'].'<hr>';
    }
    if (preg_match(strtolower($patterndate), strtolower($datatype)))
    {


        $type_html= (strtolower($datatype)==strtolower('DATE'))?"date":
            ((strtolower($datatype)==strtolower('YEAR'))?"number":(
            (strtolower($datatype)==strtolower('TIME'))?"time":(
            (strtolower($datatype)==strtolower('DATETIME'))?"datetime-local":(
            (strtolower($datatype)==strtolower('TIMESTAMP'))?"datetime-local":(
                (strtolower($datatype)==strtolower('month')||$datatype)==strtolower('week'))?"number":'date'
            )
            )
            )
            );
        $default_val= (strtolower($datatype)==strtolower('DATE'))?date("Y-m-d"):
            ((strtolower($datatype)==strtolower('YEAR'))?date("Y"):(
            (strtolower($datatype)==strtolower('TIME'))?date("h:i:s"):(
            (strtolower($datatype)==strtolower('DATETIME'))?"Y-m-d h:i:s":(
            (strtolower($datatype)==strtolower('TIMESTAMP'))?"Y-m-d h:i:s":(
            (strtolower($datatype)==strtolower('month')?date("m"):(
                ($datatype)==strtolower('week'))?date("W"):date("Y-m-d")
            )
            )
            )
            )
            ));
        $value=($add==true)?$default_val :$editvalue;

        $my_url['isset']=$bincnd ;
        $my_url['input']=' <input class="form-control" type="'.$type_html.'" name="'.$champ.'" value="'.$value.'"  id="'.$champ.'" placeholder="'.$champ.'"   />' ."\n";
        $my_url['default']=$default_val ;
        //echo $my_url['input'].'<hr>';
    }
    if (preg_match(strtolower($patternset), strtolower($datatype)))
    {

        $my_url['isset']=$enumcnd ;
        $my_url['default']="";
        $patternrereplace ="/enum\(|set\(|\)/i";
        /*

                                                        {foreach from=$services item=champ}
                                                        <option value="{$champ['id']}">{$champ['nom_service']}  </option>
                                                       {/foreach}

         */
        $input = '<select name="'.$champ.'" class="form-control champ" id="'.$champ.'">   '."\n";
        $input .= '<option selected value="'.$value.'">'.$value.'</option>'."\n";
        $replacement = '';
        $str1= preg_replace($patternrereplace, $replacement, $type);
        $str =   str_replace("'","",$str1);
        $pieces = explode(",", $str);
        foreach($pieces as $col){

            $input .= '<option selected value="'.$col.'">'.$col.'</option>'."\n";
            //echo $col['name'].'<hr>';
        }
        $input .=' </select>'."\n";

        $my_url['input']=$input;
        //echo $my_url['input'].'<hr>';
    }


    return $my_url;

}