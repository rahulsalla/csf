<?php
//include_once("cabeza.php");
//include_once("menus.php");
//******************************************************************************************
//**				CSV (EXCELL) 2 MySQL Table		25/07/04				**
//**															**
//**	CVS TO MYSQL CONVERTER V.1.0 										**
//**		by Ing. Aldo Ortega Flores (roldan@seltenmedia.com)					**
//**															**
//**	This tool was designed for fast creation of tables into any MySQL DB from		**
//**	CSV files (MS Excell* , Open Ofice* created). The programs upload the file		**
//**	to the server, is procesed with the options selected (creation of a new table		**
//**	or introduce new data). 					 					**
//**															**	
//**	You only need to configure the config.inc.php file for seerver conection		**
//**	the program search for the list DB you could have running to work with			**
//**	The code for the moment only support "," as separator and "'" as text			**
//**	delimiter. It support multiple "," inside text fields with out recognice		**
//**	them as new values. for the name of the table, it take it from the name			**
//**	of the CSV file												**
//**															**
//**	Based on the need of work faster and efficient. This code has taken part of		**
//**	another codes as:												**
//**															**
//**		CSV MySQL Converter    V1.5 Matt Garden (matt@cyangarden.com)			**
//**		Mysql Admin												**
//**															**
//**	Created by Ing. Aldo F. Ortega Flores (roldan@seltenmedia.com)				**
//**		The Best and Cheap Hosting	http://www.seltenemedia.com				**
//**															**
//******************************************************************************************
//**				TERMS OF USAGE	OR LICENCE							**
//**															**
//**	You are free to use this script in any way you want, no warranties			**
//**	are expressed or implied. This works for me, but I don't guarantee			**
//**	that it works for you, USE AT YOUR OWN RISK. 							**
//**															**
//**	You can modify it for your use, if U think is a good fix plz let me know		**
//**	if U are happy and want to support free work plz come to my site to buy/donate	**
//******************************************************************************************


//Delete
if($action=="delete"){
	$deleteIt=mysql_query("DROP TABLE $table"); 
	if($deleteIt)
	{
		echo "The table \"";
		echo "$table\" has been deleted with succes!<br>";
	}else{
		echo "An error has occured...please try again<br>";
	}
}



if(!$userfile || $uploadfile != ""){

}else{
	$uploaddir = 'D:\\Programas\\appserver\\www\\nutricion\\excell\\';
	$filename=$_FILES['userfile']['name'];
	$uploadfile = $uploaddir . $_FILES['userfile']['name'];
	//echo $uploadfile."]   [". $_FILES['userfile']['error'];

	//print "<pre>";
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile))
	{
	    print "Archivo validado y enviado.<br>";
	    // print "Here's some more debugging info:\n";
	    //print_r($_FILES);
	}else{
	    print "Error al enviar el archivo.\n";
	    //print_r($_FILES);
	}
	//print "</pre>";
}


echo "<p align=\"left\">";
include_once("config.inc.php");
    //Conexion a la base de datos
	include_once("config.inc.php");
	mysql_pconnect($host, $user, $passwd) 
		or die ( 'Unable to connect to server.' );
	mysql_select_db($name)
		or die ( 'Unable to select database.' );

$db_list = mysql_list_dbs();

while ($row = mysql_fetch_object($db_list)) {
	$cr .= "<option value=".$row->Database.">".$row->Database."</option>";
	//echo $row->Database . "\n";
}
	$db_select="<select Name=dbname class=formulario><option value=".$dbname.">".$dbname."</option>$cr</select>";



echo "	<table><tr>
      <td width=\"80\" class=\"p3\"><form name=\"seleccion datos\" method=\"post\" action=".$_SERVER["PHP_SELF"]."><nobr>Base de datos:</nobr>$db_select<input type=submit value=Selecciona></form></td>";

//echo $dbname;

if(!$dbname) exit;

$result = mysql_list_tables($dbname);


while ($row = mysql_fetch_array($result)) {
	$cr1 .= "<option value=".$row[0].">".$row[0]."</option>";
	//echo $row->Database . "\n";
}
	$table_select="<select Name=tablename class=formulario><option value=".$tablename.">".$tablename."</option><option value=\"\">Tabla Nueva</option>$cr1</select>";

	echo "  <td width=\"80\" class=\"p3\"><form name=\"seleccion tabla\" method=\"post\" action=".$_SERVER["PHP_SELF"]."><nobr>Base de datos:</nobr>$table_select<input type=submit value=Selecciona><input type=hidden name=dbname value=$dbname></form></td>
		<td><form enctype=\"multipart/form-data\" action=".$_SERVER["PHP_SELF"]." method=\"post\">
<input type=hidden name=dbname value=$dbname><input type=hidden name=tablename value=$tablename>
 <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"30000000\" >
 Send this file: <input name=\"userfile\" type=\"file\" >
 <input type=\"submit\" name=\"submit\" value=\"Enviar\" >
</form>
     </tr></table>";

if(!$tablename ) {}else{


echo "<table width=\"75%\" border=\"1\" align=\"center\">";
echo "<tr bgcolor=\"#993333\"> ";
echo "<td><font face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"-1\" color=\"#FFFFFF\">Table name:</font></td>";
//echo "<td><font face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"-1\" color=\"#FFFFFF\">Delete?</font></td>";
echo "</tr>";

if (!$result) {
print "DB Error, could not list tables\n";
print 'MySQL Error: ' . mysql_error();
exit;
}

//while ($row = mys246ql_fetch_row($result)) {
	echo "<tr bgcolor=\"#CCCCCC\">";
	echo "<td>";
	//print "$row[0]\n";
	echo $tablename;
	echo "</td>";
	
	//echo "<td>";
	//echo "<a href=\"$PHP_SELF?action=delete&table=";
	//print "$row[0]\n";
	//echo "\">Yes?</a>";
 
	//echo "</td>";

	echo "</tr>";

	echo "<tr><td align=center>";

	//$campos = mysql_list_fields($dbname,$row[0]);
	$campos = mysql_list_fields($dbname,$tablename);

	echo "<table width=\"75%\" border=\"0\">";
	echo "<tr bgcolor=\"blue\"> ";
	echo "<td><font face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"-1\" color=\"#FFFFFF\">Field Name:</font></td>";
	echo "</tr>";

//	while ($row = mysql_fetch_row($campos) ) {
//	foreach($campos as $row){
		//print "mysql_field_name($row[0])\n";
		$columns = mysql_num_fields($campos);
		//echo $columns;
		for ($i = 0; $i < $columns; $i++){
			echo "<tr bgcolor=\"#aaaaaa\">";
			echo "<td>";
			//echo $i;
			echo mysql_field_name($campos,$i);
			echo "</td>";
			echo "</td></tr>";
		}


		
	//}

	echo "</table>";

//}

echo "</td></tr></table>";
mysql_free_result($result);
mysql_free_result($campos);
}

list( $nombrearchivo , $extensionarchivo ) = split("[.]", $_FILES['userfile']['name']);
//echo $_FILES['userfile']['name']." , ".$nombrearchivo." , ".$extensionarchivo;


if($submit == "Enviar" || $submit == "Crear Tabla"){
// ======================================================================
//  Create the SQL Insert Query for Fields
// ======================================================================
	//CREATE TABLE `prueba` (
	//			 `uno` VARCHAR( 1 ) NOT NULL ,
	//			 `dos` VARCHAR( 1 ) NOT NULL ,
	//			 `tres` VARCHAR( 1 ) NOT NULL
	//			);
		


	// Value Separator used in CSV file
	$csv_file['sepa'] = ",";


	$file_contents_line = @file($uploadfile)
		or die ("CSV file not found.");


	$values = explode($csv_file['sepa'], $file_contents_line[0]);
	
if($submit == "Crear Tabla"){
	$newtablequery = "CREATE TABLE `".$tablenament."` (`id` INT AUTO_INCREMENT,\n";
		for ($j = 0; $j <= count($values)-1; $j++){
			$field_length[$j] = str_replace('\\','',$field_length[$j]);
				$newtablequery .= "`".addslashes(utf8_decode(trim($values[$j],"[\r\t\n\v\' ]")))."` $field_type[$j]".(($field_length[$j] != "") ? "( $field_length[$j] )":"")." $field_null[$j] $field_extra[$j]".(($j != (count($values) - 1)) ? " ," : "")."\n";
			}
			$newtablequery .= ", PRIMARY KEY ( `id` )) ;";
			//echo $newtablequery;
			//mysql_query($newtablequery) or print(mysql_error());
}elseif(!$tablename && $submit == "Enviar"){
	$newtable = "<form name=\"newtable\" method=\"post\" action=".$_SERVER["PHP_SELF"]." onsubmit=\"return checkTableEditForm(this, 1)\"><table border=1><tr><th colspan=6>Tabla: $nombrearchivo </th></tr><tr><th>Campo</th><th>Tipo de Campo</th><th>Valor/Tamaño</th><th>Nulo?</th><th>Extra</th><th>Principal</th></tr>";


	for ($j = 0; $j < count($values); $j++){
		$i=0;
			$newtable .= "<tr><th>$values[$j]</th><td><select name=\"field_type[]\" id=\"field_$j_".$i++."\">
                <option value=\"VARCHAR\">VARCHAR</option>

                <option value=\"TINYINT\">TINYINT</option>
                <option value=\"TEXT\">TEXT</option>
                <option value=\"DATE\">DATE</option>
                <option value=\"SMALLINT\">SMALLINT</option>
                <option value=\"MEDIUMINT\">MEDIUMINT</option>
                <option value=\"INT\">INT</option>

                <option value=\"BIGINT\">BIGINT</option>
                <option value=\"FLOAT\">FLOAT</option>
                <option value=\"DOUBLE\">DOUBLE</option>
                <option value=\"DECIMAL\">DECIMAL</option>
                <option value=\"DATETIME\">DATETIME</option>
                <option value=\"TIMESTAMP\">TIMESTAMP</option>

                <option value=\"TIME\">TIME</option>
                <option value=\"YEAR\">YEAR</option>
                <option value=\"CHAR\">CHAR</option>
                <option value=\"TINYBLOB\">TINYBLOB</option>
                <option value=\"TINYTEXT\">TINYTEXT</option>
                <option value=\"BLOB\">BLOB</option>

                <option value=\"MEDIUMBLOB\">MEDIUMBLOB</option>
                <option value=\"MEDIUMTEXT\">MEDIUMTEXT</option>
                <option value=\"LONGBLOB\">LONGBLOB</option>
                <option value=\"LONGTEXT\">LONGTEXT</option>
                <option value=\"ENUM\">ENUM</option>
                <option value=\"SET\">SET</option></select></td> <td><input id=\"field_$j_".$i++."\" type=\"text\" name=\"field_length[]\" size=\"8\" value=\"\"></td>
			<td>
				<select name=\"field_null[]\" id=\"field_$j_".$i++."\">
						<option value=\"NULL\">null</option>
						<option value=\"NOT NULL\">not null</option>
				</select>
			</td>
			<td>
				<select name=\"field_extra[]\" id=\"field_$j_".$i++."\">
						<option value=\"\">&nbsp;</option>
						<option value=\"AUTO_INCREMENT\">AUTO_INCREMENT</option>
				</select>
			</td><td  align=center><input type=radio value=$values[$j] name=key></td></tr>";


		}
$newtable .= "<tr><td colspan=4 align=right><input type=hidden name=uploadfile value=$uploadfile><input type=hidden name=dbname value=$dbname><input type=hidden name=tablenament value=$nombrearchivo><input type=\"submit\" name=\"submit\" value=\"Crear Tabla\" ></td></tr></table></form>";
		echo $newtable;

}


if($submit == "Enviar" || $submit=="Crear Tabla"){

//echo "tablename: $tablename<br>";
//echo "tablenament: $tablenament<br>";
// ======================================================================
//  Create the SQL Insert Query
// ======================================================================


//INSERT INTO `alimentos` ( `nombre` , `cant1` , `med1` , `cant2` , `med2` , `categoria` )
//VALUES ('a', 'a', 'a', 'a', 'a', 'a');


// Value Separator used in CSV file
$csv_file['sepa'] = ",";
$csv_file['sepatxt'] = "'";

$file_contents_line = @file($uploadfile)
	or die ("CSV file not found.");

$field1=0;



foreach ($file_contents_line as $key => $val){
	//$val = $val.$csv_file['sepa'];

	$field1++; //skip field names or first line
	if (empty($val) || $field1 == 1) continue; 	// Skip empty lines
	
	$inserts .= ( ($key >= 2) ? ", " : "") ."('";
	
		$prevalues = explode($csv_file['sepatxt'], $val);
	
	for ($j = 0; $j < count($prevalues); $j++){
				$pos = strpos($prevalues[$j], ",");
				//echo $pos;
				if ($pos === false ) { 
					 $val1 .= $prevalues[$j];
					 
				}elseif($pos > 0){
					$val1 .= str_replace(",","~",$prevalues[$j]);
					//echo $val."\n";
				}else{ $val1 .= $prevalues[$j];}

			}
	
		
	//echo $field1." - ".$val1."\n<br>";
	
	$values = explode($csv_file['sepa'], $val1);


	for ($j = 0; $j <= count($values)-1; $j++)
	{

		$inserts .= addslashes(utf8_decode(trim(str_replace("~",",",$values[$j]),"[\r\t\n\v\' ]"))).(($j != (count($values) - 1)) ? "','" : "");
	$val=$val1="";}

	$inserts .= "')";
}

$inserts .=" ;";

//echo ($field1)."<br>".str_replace('),','),<br>',$inserts);
// ======================================================================
//  Store all data into our database4
// ======================================================================

$uno = $file_contents_line[0];

$values = explode($csv_file['sepa'], $uno );

$inserts2 .= "(`";

	for ($j = 0; $j <= count($values)-1; $j++)
	{
		$inserts2 .= addslashes(utf8_decode(trim(str_replace("'","",$values[$j]),"[\r\t\n\v\' ]" ))).(($j != (count($values)-1)) ? "`,`" : "");
	}
	$inserts2 .= "`)";
	
if($inserts == " ;"){}else{	
	$sql = "INSERT INTO `".( (!$tablenament) ? $tablename : $tablenament)."` ".$inserts2."
		VALUES ".$inserts;
}

echo "[ ".str_replace(',',',<br>',$newtablequery)." ]\n<br>\n[ ".str_replace('),','),<br>',$sql)." ]\n<br>\n<br>\n<br>";
if(  !$tablename && $submit == "Enviar" ){}else{
//}elseif($submit == "Crear Tabla" || ($tablename != "" && $submit == "Enviar") ){

if(!$newtablequery){}else{
	$res = mysql_query($newtablequery) or die(mysql_error());
}
if($inserts == " ;"){}else{	
	$res = mysql_query($sql) or die(mysql_error());
}

echo "Conversion existosa.\n";
}
}


}


?> 
