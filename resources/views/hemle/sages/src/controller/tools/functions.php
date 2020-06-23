<?php
/*********************************************************************************************************************************************************************/
/**********************************************************dELETERS////////////////////////////////////////////////////***********************************************************************************************************/

function DELETMV() {
	include 'bd.php';
	$base->query("DELETE FROM `MOUVEMENT` WHERE FLAG=0 ");
}
function DELETINV() {
	include 'bd.php';
	$base->query("DELETE FROM `INVENTAIRE`");
}
function DELETLOG() {
	include 'bd.php';
	$base->query("DELETE FROM `LOG` WHERE flag=0 ");
}
function DELETPRO() {
	include 'bd.php';
	$base->query("DELETE FROM `PRODUIT` WHERE FLAG=2");
}
/*********************************************************************************************************************************************************************/
/**********************************************************SELECT TEXT CONVERT TO TABLE////////////////////////////////////////////////////***********************************************************************************************************/



	/*********************************************************************************************************************************************************************/
/****************************************************************************************TAB ASSOC ECHO************************************************************************//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*****/


function Keyval($tab){
	foreach ($tab as $key => $value) {
		echo $key .'/'. $value;

	}

}
					
/*********************************************************************************************************************************************************************/
/****************************************************************************************CATEGORIE************************************************************************//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*****/

function colorFnam($code){

    if ($code=='#FFFFFF' || $code=='#fffff') {$nom='Vide';}
    if ($code=='#F5F5DC') {$nom='Belge';}
    if ($code=='#0000FF') {$nom='Bleu';}
    if ($code=='#00CED1') {$nom='Bleu Claire';}
    if ($code=='#1E90FF') {$nom='Bleu Ciel';}
    if ($code=='#00FFFF') {$nom='Bleu Marin';}
    if ($code=='#BDB76B') {$nom='Dnaki';}
    if ($code=='#708090') {$nom='Gris';}
    if ($code=='#FFFF33') {$nom='Jaune';}
    if ($code=='#8B4513') {$nom='Maron';}
    if ($code=='#CD853F') {$nom='Maron Claire';}
    if ($code=='#000000') {$nom='Noir';}
    if ($code=='#FFD700') {$nom='Orange';}
    if ($code=='#FF4500') {$nom='Orange Foncé';}
    if ($code=='#FF33CC') {$nom='Rose';}
    if ($code=='#FF3399') {$nom='Rose  Claire';}
    if ($code=='#FF69B4') {$nom='Rose Sombre';}
    if ($code=='#FF1493') {$nom='Rose Vif';}
    if ($code=='#FF0000') {$nom='Rouge';}
    if ($code=='#F08080') {$nom='Rouge Claire';}
    if ($code=='#800000') {$nom='Rouge Sombre';}
    if ($code=='#008000') {$nom='Vert';}
    if ($code=='#90EE90') {$nom='Vert Claire';}
    if ($code=='#808000') {$nom='Vert Olive';}
    if ($code=='#FFC0CB') {$nom='Violet';}
    if ($code=='#DA70D6') {$nom='Violet  Claire';}
    if ($code=='#9400D3') {$nom='Violet Vif';}
    if ($code=='#660066') {$nom='Violet Sombre';}


    return $nom;
}

function colorFbg($code){

    if ($code=='#FFFFFF' || $code=='#fffff') {$val='#FFFFFF';}
    if ($code=='#F5F5DC') {$val='#F5F5DC';}
    if ($code=='#0000FF') {$val='#0000FF';}
    if ($code=='#00CED1') {$val='#00CED1';}
    if ($code=='#1E90FF') {$val='#1E90FF';}
    if ($code=='#00FFFF') {$val='#00FFFF';}
    if ($code=='#BDB76B') {$val='#BDB76B';}
    if ($code=='#708090') {$val='#708090';}
    if ($code=='#FFFF33') {$val='#FFFF33';}
    if ($code=='#8B4513') {$val='#8B4513';}
    if ($code=='#CD853F') {$val='#CD853F';}
    if ($code=='#000000') {$val='#000000';}
    if ($code=='#FFD700') {$val='#FFD700';}
    if ($code=='#FF4500') {$val='#FF4500';}
    if ($code=='#FF33CC') {$val='#FF33CC';}
    if ($code=='#FF3399') {$val='#FF3399';}
    if ($code=='#FF69B4') {$val='#FF69B4';}
    if ($code=='#FF1493') {$val='#FF1493';}
    if ($code=='#FF0000') {$val='#FF0000';}
    if ($code=='#F08080') {$val='#F08080';}
    if ($code=='#800000') {$val='#800000';}
    if ($code=='#008000') {$val='#008000';}
    if ($code=='#90EE90') {$val='#90EE90';}
    if ($code=='#808000') {$val='#808000';}
    if ($code=='#FFC0CB') {$val='#FFC0CB';}
    if ($code=='#DA70D6') {$val='#DA70D6';}
    if ($code=='#9400D3') {$val='#9400D3';}
    if ($code=='#660066') {$val='#660066';}


    return $code;
}

/*********************************************************************************************************************************************************************/
/****************************************************************************************IDFACTURE************************************************************************//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*****/


/*********************************************************************************************************************************************************************/
/*********************************************************************************************************************************************************************/

							
	/*********************************************************************************************************************************************************************/
/****************************************************************************************IDUSER************************************************************************//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*****/



/*********************************************************************************************************************************************************************/
/***************************************************************SELECTFACTDEFINITIV******************************************************************************************************/
/*********************************************************************************************************************************************************************/
/*********************************************************************************************************************************************************************/


/*********************************************************************************************************************************************************************/
/*********************************************************************************************************************************************************************/
/*********************************************************************************************************************************************************************/
/*********************************************************************************************************************************************************************/
// FONCTION POUR LA FACTURE DE SURVEILLANCE


/*********************************************************************************************************************************************************************/
/**********************************************************S/////////////////////////////////////////////////////////////////////////////////////***********************************************************************************************************/

/*********************************************************************************************************************************************************************/
/**********************************************************S/////////////////////////////////////////////////////////////////////////////////////***********************************************************************************************************/




function DateFr($date){

	$jour=array('dimanche','lundi','mardi','mercredi','jeudi','vendredi','samedi');
	$mois=array('','janvier','f�vrier','mars','avril','mai','juin','juillet','ao�t','septembre','octobre','novembre','d�cembre');

	$JourFr=$jour[$date['d']];
	/*$NumJour = $date['mday'];
	$MoisFr = $mois[$date['mon']];
	$Annee = $date['year'];*/

	return "$JourFr";

}


function DateAgeFR($DateNaissance)
{
    $DateNaissance = explode("/", $DateNaissance);
    $Date = explode("/", date("d/m/Y"));
       
    if (($DateNaissance[1] <= $Date[1]) && ($DateNaissance[0] <= $Date[0])) $Age = $Date[2] - $DateNaissance[2];
    else $Age = $Date[2] - $DateNaissance[2] - 1;


    return $Age;
}
function age($date) {
    $age = date('Y') - date('Y', strtotime($date));
    if (date('md') < date('md', strtotime($date))) {
        return $age - 1;
    }
    return $age;
}

/*********************************************************************************************************************************************************************/
/**********************************************************S////////////Convertisseur somme en lettres/////////////////////////////////////////////////////////////////////////***********************************************************************************************************/

function convertir($Montant)
{
	$grade = array(0 => "zero ",1=>" milliards ",2=>" millions ",3=>" mille ");
	$Mon = array(0=>" ",1=>" ",2=>" ",3=>" ");

	// Mise au format pour les chéques et le SWI
	$Montant = number_format($Montant,2,".","");

	if ($Montant == 0)
	{
		$result = $grade[0].$Mon[0];
	}else
	{
		$result = "";

		// Calcule des Unités
		$montant = intval($Montant);

		// Calcul des centimes
		$centime = round(($Montant * 100) - ($montant * 100),0);

		// Traitement pour les Milliards
		$nombre = $montant / 1000000000;
		$nombre = intval($nombre);
		if ($nombre > 0)
		{
			if ($nombre > 1)
			{
				$result = $result.cenvtir($nombre).$grade[1];
			}else
			{
				$result = $result." Un ".$grade[1];
				$result = substr($result,0,13)." ";
			}
			$montant = $montant - ($nombre * 1000000000);
		}

		// Traitement pour les Millions
		$nombre = $montant / 1000000;
		$nombre = intval($nombre);
		if ($nombre > 0)
		{
			if ($nombre > 1)
			{
				$result = $result.cenvtir($nombre).$grade[2];
			}else
			{
				$result = $result." Un ".$grade[2];
				$result = substr($result,0,12)." ";
			}
			$montant = $montant - ($nombre * 1000000);
		}

		// Traitement pour les Milliers
		$nombre = $montant / 1000;
		$nombre = intval($nombre);
		if ($nombre > 0)
		{
			if ($nombre > 1)
			{
				$result = $result.cenvtir($nombre).$grade[3];
			}else
			{
				$result = $result.$grade[3];
			}
			$montant = $montant - ($nombre * 1000);
		}

		// Traitement pour les Centaines & centimes
		$nombre = $montant;
		if ($nombre>0)
		{
			$result = $result.cenvtir($nombre);
		}
		// Traitement si le montant = 1
		if ((substr($result,0,7) == " virgule un " and strlen($result) == 7))
		{
			$result = substr($result,3,3);
			$result = $result.$Mon[0];
			if (intval($centime) != 0)
			{
				$differ = cenvtir(intval($centime));
				if (substr($differ,0,7) == " virgule un ")
				{
					if ($result == "")
					{
						$differ = substr($differ,3);
					}
					$result = $result." ".$differ.$Mon[2];
				}else
				{
					$result = $result." virgule ".$differ.$Mon[3];
				}
			}
			// Traitement si le montant > 1 ou = 0
		}else
		{
			if ($result != "")
			{
				$result = $result.$Mon[1];
			}
			if (intval($centime) != 0)
			{
				$differ = cenvtir(intval($centime));
				if (substr($differ,0,7) == " virgule un ")
				{
					if ($result == "")
					{
						$differ = substr($differ,3);
					}
					$result = $result." ".$differ.$Mon[2];
				}else
				{
					if ($result != "")
					{
						$result = $result." virgule ".$differ.$Mon[3];
					}else
					{
						$result = $differ.$Mon[3];
					}
				}
			}
		}
	}
	return $result;
}

// fonction de convertion d'un chiffre à 3 digits en lettre
function cenvtir($Valeur)
{

	$code = "";
	//texte en clair
	$SUnit = array(1=>"et un ", 2=>"deux ", 3=>"trois ", 4=>"quatre ", 5=>"cinq ", 6=>"six ", 7=>"sept ", 8=>"huit ", 9=>"neuf ", 10=>"dix ", 11=>"onze ", 12=>"douze ", 13=>"treize ", 14=>"quatorze ", 15=>"quinze ", 16=>"seize ", 17=>"dix-sept ", 18=>"dix-huit ", 19=>"dix_neuf ");
	$sDiz = array(20=> "vingt ", 30=> "trente ", 40=>"quarante ", 50=>"cinquante ", 60=>"soixante ", 70=>"soixante dix ", 80=>"quatre vingt ", 90=>"quatre vingt dix ");

	if ($Valeur>99)
	{
		$N1= intval($Valeur/100);
		if ($N1>1)
		{
			$code = $code.$SUnit[$N1];
		}
		$Valeur = $Valeur - ($N1*100);
		if ($code != "")
		{
			if ($Valeur == 0)
			{
				$code = $code." cents ";
			}else
			{
				$code = $code." cent ";
			}
		}else
		{
			$code = " cent ";
		}
	}
	if ($Valeur != 0)
	{
		if ($Valeur > 19)
		{
			$N1 = intval($Valeur/10)*10;
			$code = $code.$sDiz[$N1];
			if (($Valeur>=70) and($Valeur<80)or($Valeur>=90))
			{
				$Valeur = $Valeur + 10;
			}
			$Valeur = $Valeur - $N1;
		}
		if ($Valeur > 0)
		{
			$code = $code." ".$SUnit[$Valeur];
		}
	}
	return $code;
}



//$str="condis/30 condis/25 condis/3 condis/4 condis/24 prd/49 prd/39 prd/26 prd/27 prd/33";

function explode2($str) {
    $d_tuple=',';
         $d_var='/';
    $t = explode($d_tuple, $str);
    foreach($t as $e) {
        list($k, $v) = explode($d_var, $e);
        $tab[$k] = $v;
    }
    return $tab;
}


function moyenne($tab) {

    $i=1;
    $somme=0;
    foreach($tab as $e) {

        $somme = $somme+$e;

        $i++;
    }
    $i--;
    $moy=$somme/$i;
    return $moy;
}
function minval($tab) {

    $ret=0;
    $tempo=10000000000000000000000000000000000000000;
    foreach($tab as $e) {

        if($tempo > $e)
        {
            $tempo=$e;
        }

    }
    $ret= $tempo;
    return intval($ret);
}

function divtabval($tab,$tab2) {

    $ret=0;

    $i=0;
    $tempo=10000000000000000000000000000000000000000;
    for ($i = 0; $i < count($tab); $i++) {

        $e=$tab[$i]/$tab2[$i];

        if($tempo > $e)
        {
            $tempo=$e;
        }
        $i++;
    }
    $ret= $tempo;
    return intval($ret);
}

function realval($tab,$constante) {

    $ret=0;

    $i=0;
    $tempo=10000000000000000000000000000000000000000;
    foreach($tab as $e) {
        $val=$constante/$e;

        if($tempo > $val)
        {
            $tempo=$e;
        }

    }
    $ret= $tempo;
    return intval($ret);
}

/*********************************************************************************************************************************************************************/
/**********************************************************S////////////Convertisseur de date  en francais/////////////////////////////////////////////////////////////////////////***********************************************************************************************************/



function removefile($path) {
    unlink($path);
}

function filename($name,$size,$objame='') {
    return strtolower(trim(($objame=='')?explode('.',$name)[0]:$objame))."_".$size."_".date("Ymd").".".strtolower(pathinfo($name,PATHINFO_EXTENSION));
}

function fichier($name,$tmp,$size,$target,$objame='',$autofilename='') {

    $userpic ='...';
    $errMSG='0';
    if(!empty($name)){
        $upload_dir = $target; // upload directory

        $imgExt = strtolower(pathinfo($name,PATHINFO_EXTENSION)); // get image extension

        // valid image extensions
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

        // rename uploading image
        if ($objame==''){
            $userpic=$autofilename;
        }else{
            $userpic=($autofilename=='')?filename($name,$size,$objame):$autofilename;
        }
       // $userpic = filename($name,$size,$objame);
        // allow valid image file formats
        if(in_array($imgExt, $valid_extensions)){
            // Check file size '5MB'
            if($size < 6000000)				{
               // echo $userpic.' => '.$tmp.' => '.$size.'<hr>';
               move_uploaded_file($tmp,$upload_dir.$userpic);
                $errMSG=0;
            }
            else{
                $errMSG = "Sorry, your file is too large.";
            }
        }
        else{
            $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
    }
    $tab['sms'] = $errMSG;
    $tab['filename'] = $userpic;
    return $tab;
}

function valid_extension($filename,$valid_extensions=array()) {

          $isvalide=1;
          $ext = pathinfo($filename, PATHINFO_EXTENSION);
          if(!in_array($ext, $valid_extensions)){
              $isvalide=0;
          }
          $objfile= explode('.',$filename);
          $objfile[0]="";
          foreach ($objfile as $file){

              if(!in_array($file, $valid_extensions)){
                  $isvalide=0;
              }
          }
        return $isvalide;

      }

function tri_selection($tableau)
{
    $t=count($tableau) - 1;

    for ($i = 0; $i < count($tableau) - 1; $i++)
    {
        $n = $i;
        for ($j = $i; $j < $t; $j++)
            if ($tableau[$j] < $tableau[$n]){
                $n = $j;
            }

        $temp = $tableau[$i];
        $tableau[$i] = $tableau[$n];
        $tableau[$n] = $temp;
    }
    return $tableau;
}

function tri_bulle($tableau)
{
    $passage = 0;
    $permutation = true;

    while ( $permutation) {
        $permutation = false;
        $passage ++;
        for ($i=0;$i<count($tableau)-$passage;$i++) {
            if ($tableau[$i]>$tableau[$i+1]){
                $permutation = true;
                // on echange les deux elements
                $temp = $tableau[$i];
                $tableau[$i] = $tableau[$i+1];
                $tableau[$i+1] = $temp;
            }
        }
    }
    return $tableau;
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

function explodestrtoupper($string){
          $pieces = explode(" ", $string);
          $firstCharacter =strtoupper($string[0]);
          if (count($pieces)>1){
              $firstCharacter ='';
              foreach ($pieces as $value){
                  //commandes
                  $firstCharacter .= strtoupper($value[0]);
              }
          }
          return $firstCharacter;

      }














?>


