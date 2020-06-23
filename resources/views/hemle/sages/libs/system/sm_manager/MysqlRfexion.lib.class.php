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


namespace libs\system;
require_once 'config/database.php';

class MysqlRfexion{
	
	//DataBase settings
	private $host;
	private $user;
	private $pass;
	private $dbname;
	private $connection;
	
	//functions Settings
	private $construct = true; 
	private $geters = true;
	private $seters = true;
	private $load_row_from_key = true; 
	private $delete_row_from_key = true; 
	private $save_active_row = true; 
	private $save_active_row_as_new = true;
	private $Order_Keys = true; 
	
	//tables name and variables names and setings of variables
	private $classe_name = array(array('name', 'total_vars'));
	private $classe_variables = array(array('var_name', 'lenght', 'key'));
	
	//statistics
	private $num_of_tables = 0;
	private $num_of_total_variables = 0;
	
	
	/**
     * Connects to Mysql. Use DataBase Name to convert into tables. This param will be use
     * on classes to connect again to mysql. You can change on DataBaseMysql.class.php
     * 
     * @param string $host
     * @param string $user
     * @param string $password
     * @param string $dbname
     */
	/*public function MysqlRfexion(){

        $this->host = connexion_params()["host"];
        $this->user = connexion_params()["user"];
        $this->pass = connexion_params()["password"];
        $this->dbname = connexion_params()["database_name"];

        $this->connection = new mysqli( $this->host,  $this->user, $this->pass,  $this->dbname);
        if($this->connection->connect_error){
            echo "Error connect!"; die;
        }else{
            echo 'ok';
        }
	}*/

    public function __construct(){
        $this->host = connexion_params()["host"];
        $this->user = connexion_params()["user"];
        $this->pass = connexion_params()["password"];
        $this->dbname = connexion_params()["database_name"];

        $this->connection = new mysqli( $this->host,  $this->user, $this->pass,  $this->dbname);
        if($this->connection->connect_error){
            echo "Error connect!"; die;
        }else{
            echo 'ok';
        }
    }

	/**
     * This is the unic function public. You just need to run this function
     * to have you classes src/controller/Tools
     * This gonne read all tables and columns and save it into class vars array
     * After read one complete table, create the file
     * 
     */
	public function CreateClassesFiles(){
	$loop = $this->connection->query("SHOW tables FROM ".$this->dbname."");	
		while($row = $loop->fetch_row()){			
			$this->classe_name[$this->num_of_tables]['name'] = $row[0]; //get the name of the table/class
			$this->classe_name[$this->num_of_tables]['total_vars'] = 0;		
				$loop2 = $this->connection->query("SHOW columns FROM ". $row[0]);				
				$j = 0;
				while ($row2 = $loop2->fetch_row()){		
					$this->classe_variables[$j]['var_name'] = $row2[0];
					$this->classe_variables[$j]['lenght']= $row2[1];
					$row2[3] == "PRI" ? $this->classe_variables[$j]['key'] = 1 : $this->classe_variables[$j]['key'] = 0;
					$this->num_of_total_variables += 1;
					$this->classe_name[$this->num_of_tables]['total_vars'] += 1;
					$j++;
				}	
			$this->CreatFiles();	
			$this->num_of_tables += 1;				
		}		
		$this->CreateDataBaseClass();	
	}
	
	
	/**
     * By using the class vars, will be now create what file will be have inside, and what functions
     * will be able to use
     * 
     */
	private function CreatFiles(){
		$file_in = "<?php\n";
		$file_in .= $this->Copyright();
		$file_in .= "\nrequire_once 'DataBaseMysql.class.php';\n";
		$file_in .="\nClass ".$this->classe_name[$this->num_of_tables]['name']." {\n\n";
	
		$file_in = $this->CreateVars($file_in);
		
		$file_in .="	public function ".$this->classe_name[$this->num_of_tables]['name']."(){
		\$this->connection = new DataBaseMysql();
	}";

		if($this->construct) $file_in = $this->CreateConstruct($file_in);
		
		if($this->load_row_from_key) $file_in = $this->CreateFunctionLoad_from_key($file_in);		
		
		if($this->delete_row_from_key) $file_in = $this->CreateFunctionDeleteFromKey($file_in);
	
		if($this->save_active_row) $file_in = $this->CreateFunctionSaveActiveRow($file_in);

		if($this->save_active_row_as_new) $file_in = $this->CreateFunctionSaveActiveRowAsNew($file_in);
		
		if($this->Order_Keys) $file_in = $this->CreateFunctionGetKeysOrder($file_in);
		
		if($this->seters) $file_in = $this->CreateFunctionGetters($file_in);
			
		if($this->geters) $file_in = $this->CreateFunctionSetters($file_in);

		$file_in = $this->CreateFunctionCloseSQL($file_in);
			
		$file_in .= "\n}";
		
		$this->SaveFile($this->classe_name[$this->num_of_tables]['name'].".class.php", $file_in);
	}
	
	
	/**
     * Create function Oder Keys inside the file, to use to order rows
     * 
     * @param string $file
     */
	private function CreateFunctionGetKeysOrder($file){
		$file .="\n    /**
     * Returns array of keys order by \$column -> name of column \$order -> desc or acs
     *
     * @param string \$column
     * @param string \$order
     */";
		$file .="\n	public function GetKeysOrderBy(\$column, \$order){\n";
		$file .="		\$keys = array(); \$i = 0;\n";
		$file .="		\$result = \$this->connection->RunQuery(\"SELECT ".$this->classe_variables[$this->GetKeyOf_table()]['var_name']." from ".$this->classe_name[$this->num_of_tables]['name']." order by \$column \$order\");\n";
		$file .="			while(\$row = \$result->fetch_array(MYSQLI_ASSOC)){\n";
		$file .="				\$keys[\$i] = \$row[\"".$this->classe_variables[$this->GetKeyOf_table()]['var_name']."\"];\n";
		$file .="				\$i++;\n";
		$file .="			}\n";
		$file .="	return \$keys;\n";
		$file .="	}\n";
		return $file;
	}
	
	
	/**
     * Create function Get_var_name into your class
     * 
     * @param string $file
     */
	private function CreateFunctionGetters($file){
		for($i=0; $i!= $this->classe_name[$this->num_of_tables]['total_vars']; $i++){
			$file .= "\n	/**
	 * @return ".$this->classe_variables[$i]['var_name']." - ".$this->classe_variables[$i]['lenght']."
	 */";
			$file .= "\n	public function get".$this->classe_variables[$i]['var_name']."(){\n";
			$file .= "		return \$this->".$this->classe_variables[$i]['var_name'].";\n";
			$file .= "	}\n";
		}
		return $file;
	}
	
	
	/**
     * Create function Set_var_name into your class
     * You can�t set Keys
     * 
     * @param string $file
     */	
	private function CreateFunctionSetters($file){
		for($i=0; $i!= $this->classe_name[$this->num_of_tables]['total_vars']; $i++){
			if($this->classe_variables[$i]['var_name'] != 1){
				$file .="\n	/**
	 * @param Type: ".$this->classe_variables[$i]['lenght']."
	 */";
				$file .= "\n	public function set".$this->classe_variables[$i]['var_name']."($".$this->classe_variables[$i]['var_name']."){\n";
				$file .= "		\$this->".$this->classe_variables[$i]['var_name']." = $".$this->classe_variables[$i]['var_name'].";\n";
				$file .= "	}\n";
			}
		}
		return $file;
	}
	
	
	/**
     * Create function to close connection to mysql
     * 
     * @param string $file
     */
	private function CreateFunctionCloseSQL($file){
		$file .="\n    /**
     * Close mysql connection
     */";
		$file .= "\n	public function end".$this->classe_name[$this->num_of_tables]['name']."(){\n";
		$file .= "		\$this->connection->CloseMysql();\n";
		$file .= "	}\n";
		return $file;
	}

	
	/**
     * Create function Save the Active Row as new in table
     * 
     * @param string $file
     */	
	private function CreateFunctionSaveActiveRowAsNew($file_in){
				$file_in .="\n    /**
     * Save the active var class as a new row on table
     */";
		$file_in .= "\n	public function Save_Active_Row_as_New(){\n";
		$file_in .= "		\$this->connection->RunQuery(\"Insert into ".$this->classe_name[$this->num_of_tables]['name']." (";
		
		for($i=0; $i!= $this->classe_name[$this->num_of_tables]['total_vars']; $i++){
			if($this->classe_variables[$i]['key'] != 1){
				$file_in .= $this->classe_variables[$i]['var_name'];
					if($i+1 != $this->classe_name[$this->num_of_tables]['total_vars']){
						$file_in .=", ";
					}
			}	
		}
		$file_in .= ") values (";
		for($i=0; $i!= $this->classe_name[$this->num_of_tables]['total_vars']; $i++){
			if($this->classe_variables[$i]['key'] != 1){
				$file_in .= "\\\"\$this->".$this->classe_variables[$i]['var_name']."\\\"";
					if($i+1 != $this->classe_name[$this->num_of_tables]['total_vars']){
						$file_in .=", ";
					}
			}	
		}
		$file_in .=")\");\n";	
		$file_in .= "	}\n";
		return $file_in;
	}
	
	
	/**
     * Create function Save Active row, just to update
     * 
     * @param string $file
     */	
	private function CreateFunctionSaveActiveRow($file_in){
	$file_in .="\n    /**
     * Update the active row table on table
     */";
		$file_in .= "\n	public function Save_Active_Row(){\n";
		$file_in .= "		\$this->connection->RunQuery(\"UPDATE ".$this->classe_name[$this->num_of_tables]['name']." set ";
		for($i=0; $i!= $this->classe_name[$this->num_of_tables]['total_vars']; $i++){
			if($this->classe_variables[$i]['key'] != 1){
				$file_in .= $this->classe_variables[$i]['var_name']." = \\\"\$this->".$this->classe_variables[$i]['var_name']."\\\"";
					if($i+1 != $this->classe_name[$this->num_of_tables]['total_vars']){
						$file_in .=", ";
					}
			}	
		}
		$file_in .=" where ".$this->classe_variables[$this->GetKeyOf_table()]['var_name']." = \\\"\$this->".$this->classe_variables[$this->GetKeyOf_table()]['var_name']."\\\"\");\n";	
		$file_in .= "	}\n";
		return $file_in;
	}
	
	
	/**
     * Create function Delete a row from key
     * 
     * @param string $file
     */	
	private function CreateFunctionDeleteFromKey($file_in){
		$file_in .="\n\n    /**
     * Delete the row by using the key as arg
     *
     * @param key_table_type \$key_row
     *
     */";
		$file_in .= "\n	public function Delete_row_from_key(\$key_row){\n";
		$file_in .= "		\$this->connection->RunQuery(\"DELETE FROM ".$this->classe_name[$this->num_of_tables]['name']." WHERE ".$this->classe_variables[$this->GetKeyOf_table()]['var_name']." = \$key_row\");\n";
		$file_in .= "	}\n";	
		return $file_in;
	}
	
	
	/**
     * Create function Load row into var by using a key
     * 
     * @param string $file
     */	
	private function CreateFunctionLoad_from_key($file_in){
			$key_name = $this->classe_variables[$this->GetKeyOf_table()]['var_name'];
				$file_in .="\n    /**
     * Load one row into var_class. To use the vars use for exemple echo \$class->getVar_name; 
     *
     * @param key_table_type \$key_row
     * 
     */";
				$file_in .="\n	public function Load_from_key(\$key_row){\n";
				$file_in .= "		\$result = \$this->connection->RunQuery(\"Select * from ".$this->classe_name[$this->num_of_tables]['name']." where ".$key_name." = \\\"\$key_row\\\" \");\n";
				$file_in .= "		while(\$row = \$result->fetch_array(MYSQLI_ASSOC)){\n";

				for($k=0; $k!= $this->classe_name[$this->num_of_tables]['total_vars']; $k++){
				 	$file_in .="			\$this->".$this->classe_variables[$k]['var_name']." = \$row[\"".$this->classe_variables[$k]['var_name']."\"];\n";
				}
				$file_in .="		}" ;
				$file_in .="\n	}" ;	
	return $file_in;			
	}
	
	
	/**
     * Create class vars with type coments
     * 
     * @param string $file
     */
	private function CreateVars($file){
		$this->seters == true ? $type = "private" : $type = "public";
	
		for($i = 0; $i != $this->classe_name[$this->num_of_tables]['total_vars']; $i++){
			$file .="	$type $".$this->classe_variables[$i]['var_name']."; //".$this->classe_variables[$i]['lenght']."\n";	
		}
		$file .= "	$type \$connection;\n\n";		
		return $file;
	}
	
	
	/**
     * Create function Construct
     * 
     * @param string $file
     */
	private function CreateConstruct($file){
				$file .="\n\n    /**
     * New object to the class. Don�t forget to save this new object \"as new\" by using the function \$class->Save_Active_Row_as_New(); 
     *
     */";
		$file .= "\n	public function New_".$this->classe_name[$this->num_of_tables]['name']."(";

		for($i = 0; $i != $this->classe_name[$this->num_of_tables]['total_vars']; $i++){
			if($this->classe_variables[$i]['key'] != 1){
				$file .= "$".$this->classe_variables[$i]['var_name']."";
					if( $i+1 != $this->classe_name[$this->num_of_tables]['total_vars']){
						$file .=",";	
					}
			}	
		}
		$file .="){\n";
		
		for($i = 0; $i != $this->classe_name[$this->num_of_tables]['total_vars']; $i++){
			if($this->classe_variables[$i]['key'] != 1){
				$file .= "		\$this->".$this->classe_variables[$i]['var_name']." = $".$this->classe_variables[$i]['var_name'].";\n";
			}
		}
		$file .="	}\n";	
	return $file;		
	}
	
	
	/**
     * Return a key of the last table in var_array
     * 
     * @param string $file
     */
	private function GetKeyOf_table(){
		for($z = 0; $z != $this->classe_name[$this->num_of_tables]['total_vars']; $z++){
			if($this->classe_variables[$z]['key'] == 1) return $z;
		}
		return 0;
	}
	
	
	/**
     * Create file DataBaseMysql.class.php to others class can connect
     * 
     */
	private function CreateDataBaseClass(){
$file = "<?php\n
".$this->Copyright()."\n		
Class DataBaseMysql {\n
	public \$conn;\n
	public function DataBaseMysql(){
		\$this->conn = new mysqli(\"".$this->host."\", \"".$this->user."\", \"".$this->pass."\", \"".$this->dbname."\");
		if(\$this->conn->connect_error){
			echo \"Error connect to mysql\";die;
		}
	}
	
	public function RunQuery(\$query_tag){
		\$result = \$this->conn->query(\$query_tag) or die(\"Erro SQL query-> \$query_tag  \". mysql_error());
		return \$result;
	}

	public function TotalOfRows(\$table_name){
		\$result = \$this->RunQuery(\"Select * from \$table_name\");
		return \$result->num_rows;
	}

	public function CloseMysql(){
		\$this->conn->close();
	}

}

?>"; 
		$this->SaveFile("DataBaseMysql.class.php", $file);
	}
	
	
	/**
     * Create file and put inside your code
     * 
     * @param string $filename
     * @param string $text
     * 
     */	
	private function SaveFile($filename, $text){
		if($this->VerifyDirectory()){
			$file = fopen("src/controller/Tools/".$filename, "w");
			fwrite($file, $text);
			fclose($file);
		}
	}
	
	
	/**
     * Create Directory to save the src/controller/Tools if don�t exist
     * 
     */
	private function VerifyDirectory(){
		if(is_dir("src/controller/Tools")){
			return true;
		}else{
			mkdir("src/controller/Tools", "0777", true);
			return true;
		}
	}
	
	
	/**
     * You can�t change this!
     * 
     */
	private function Copyright(){
		return "/*
 * Author: Rafael Rocha - www.rafaelrocha.net - info@rafaelrocha.net
 * 
 * Create Date: ".date("j-m-Y")."
 * 
 * Version of MYSQL_to_PHP: 1.1
 * 
 * License: LGPL 
 * 
 */";
	}

	
	/**
	 * @return Total of tables
	 */
	public function getNum_of_tables() {
		return $this->num_of_tables;
	}
	
	
	/**
	 * @return Total of variables
	 */
	public function getNum_of_total_variables() {
		return $this->num_of_total_variables;
	}
	
	
	/**
	 * @param True to active Getters Functions, or false
	 */
	public function setGeters($geters) {
		$this->geters = $geters;
	}
	
	
	/**
	 * @param True to active Function query("Select * from table where id=$i), or false
	 */
	public function setLoad_row_from_key($load_row_from_key) {
		$this->load_row_from_key = $load_row_from_key;
	}
	
	
	/**
	 * @param boolean $save_active_row
	 */
	public function setSave_active_row($save_active_row) {
		$this->save_active_row = $save_active_row;
	}
	
	
	/**
	 * @param boolean $save_active_row_as_new
	 */
	public function setSave_active_row_as_new($save_active_row_as_new) {
		$this->save_active_row_as_new = $save_active_row_as_new;
	}
	
	
	/**
	 * @param boolean $seters
	 */
	public function setSeters($seters) {
		$this->seters = $seters;
	}
	
	/**
	 * @return array table names and total of variables
	 */
	public function getClasse_name() {
		return $this->classe_name;
	}
	

	/**
	 * @param boolean $construct
	 */
	public function setConstruct($construct) {
		$this->construct = $construct;
	}
	
	/**
	 * @param boolean $delete_row_from_key
	 */
	public function setDelete_row_from_key($delete_row_from_key) {
		$this->delete_row_from_key = $delete_row_from_key;
	}
	
	/**
	 * @param boolean $Order_Keys
	 */
	public function setOrder_Keys($Order_Keys) {
		$this->Order_Keys = $Order_Keys;
	}


	public function endMySQL_to_PHP(){
		$this->connection->close();
	}
	
}

?>