<?php
error_reporting(E_ALL & !E_NOTICE & !E_DEPRECATED);
session_start();

$pgconfig=true;
require_once("../../includes/config.php"); 
$shapefiles=$_SESSION["shapefiles"];
$tmp_dir = $configuration ['tmp_path'];

$shapefiles=$_SESSION["shapefiles"];

function dropline($content,$k)
{
        echo "<tr>";
        for($j=0;$j<$k;$j++)
        {
            echo "<td>";
            echo $content[$j]."<br>";
            echo "</td>";
        }
        echo "</tr>";
}

function checktype($old, $data)
{
    $data=trim($data);
    if(is_scalar($data))
    {
        if(is_numeric($data))
        {
            if (strpos($data,".") === false) 
            {
                if(!isset($old)) return("integer");
                switch($old)
                {
                    case "integer" : return("integer");
                    case "float"   : return("float");
                    case "text"  : return("text");
                }
            }
            else
            {
                if(!isset($old)) return("float");
                switch($old)
                {
                    case "integer" : return("float");
                    case "float"   : return("float");
                    case "text"    : return("text");
                }
            }
        }
        else    return("text");
    }
    else
    {
        die("not a proper datasetb");
    }
}

function checkcsv($csv,$delimiter)
{
   global $shapefiles;
   $fname = $csv;
   $fhandle = fopen($fname,"r");
   
   #Skip amount of rows
   for($i=0;$i<$_SESSION["skip"];$i++)
   {
       $content=fgets($fhandle);
   }
   
   #get head
   $contenth = fgetcsv($fhandle,0,$_SESSION["delimiter"],$_SESSION["quote"],$_SESSION["escape"]);
   echo "<br><table border='1'>";
   
   #find the amount of columns
   $k=count($contenth);
   dropline($contenth,$k);
   for($i=1;$i<100000;$i++)
   {
        $content=fgetcsv($fhandle,0,$_SESSION["delimiter"],$_SESSION["quote"],$_SESSION["escape"]);
        if($content!==false)
        {
            for($j=0;$j<$k;$j++) $check[$j]= checktype($check[$j], $content[$j]);
        }
        else $i=100000;
   }
   $elementsh=$contenth;
   $content='';
   for($j=0;$j<$k;$j++)
   {
       $datareturn[$j]["type"]=$check[$j];
       $datareturn[$j]["name"]=trim($elementsh[$j]);
       $content[$j]=$check[$j];
   }
   
   dropline($content,$k);
   fclose($fhandle);
   $fhandle = fopen($fname,"r");

   for($i=0;$i<$_SESSION["skip"];$i++)
   {
       $content=fgets($fhandle);
   }
   
   $content = fgets($fhandle);
   for($i=1;$i<20;$i++)
   {
        $content=fgetcsv($fhandle,0,$_SESSION["delimiter"],$_SESSION["quote"],$_SESSION["escape"]);
        dropline($content,$k);
   }
   echo "</table>";
   fclose($fhandle);
   return($datareturn);
}

?>
<html>
    <body>

<?

if(isset($_POST["id"]))
{
    if(isset($_POST['type1']))
    {
        #echo ">".$_POST['type1']."<";
        switch($_POST['type1'])
        {
            case 'space' :  $_SESSION["delimiter"]=" ";
                            break;
            case 'comma' :  $_SESSION["delimiter"]=",";
                            break;
            case 'tab'   :  $_SESSION["delimiter"]="	";
                            break;
        }
        $_SESSION['skip']=$_POST['skip'];
        #echo ">".$_SESSION["delimiter"]."<";
    }
    else
    {
	    $_SESSION['tbl']=$_POST['tbl'];
        $_SESSION['tbl_t']=$_POST['tbl_t'];
        $_SESSION['tbl_m']=$_POST['tbl_m'];
        if(!isset($_SESSION["delimiter"])) $_SESSION["delimiter"]="	";
	}
    if(isset($_POST['type2']))
    {
        #echo ">".$_POST['type2']."<";
        switch($_POST['type2'])
        {
            case 'none'		:  $_SESSION["quote"]="none";
                            break;
            case 'single'	:  $_SESSION["quote"]="'";
                            break;
            case 'quote'	:  $_SESSION["quote"]='"';
                            break;
        }
        $_SESSION['skip']=$_POST['skip'];
        #echo ">".$_SESSION["delimiter"]."<";
    }
    else
    {
        if(!isset($_SESSION["quote"])) $_SESSION["quote"]='"';
	}
    if(isset($_POST['type3']))
    {
        #echo ">".$_POST['type3']."<";
        switch($_POST['type3'])
        {
            case '\\'		:  $_SESSION["escape"]="\\";
                            break;
        }
    }
    else
    {
        if(!isset($_SESSION["escape"])) $_SESSION["escape"]='\\';
	}

	
	echo ' Loading CSV '.$shapefiles[$_POST["id"]]['csv'].' :';
?>
    <input type="button" name="load" value="load" onclick="document.location='load.php?id=<? echo $_POST["id"]; ?>';">
    <br><br>
    <form action='load.php' method="POST" enctype="multipart/form-data">
    Select column separator: 
                <input type="radio" name="type1" value="space" id="space" onclick="toggleControl(this);" <? if($_SESSION['delimiter']==' ') echo 'checked="checked"'; ?> />
                <label for="noneToggle">space</label> &nbsp;&nbsp;
                <input type="radio" name="type1" value="comma" id="comma" onclick="toggleControl(this);" <? if($_SESSION['delimiter']==',') echo 'checked="checked"'; ?>/>
                <label for="createToggle">comma</label> &nbsp;
                <input type="radio" name="type1" value="tab" id="tab" onclick="toggleControl(this);" <? if($_SESSION['delimiter']=='	') echo 'checked="checked"'; ?>/>
                <label for="editToggle">tab</label>
				<br>
	Select enclosure:
                <input type="radio" name="type2" value="quote" id="quote" onclick="toggleControl(this);" <? if($_SESSION['quote']=='"') echo 'checked="checked"'; ?>/>
                <label for="createToggle">"</label> &nbsp;
                <input type="radio" name="type2" value="single" id="single" onclick="toggleControl(this);" <? if($_SESSION['quote']=="'") echo 'checked="checked"'; ?>/>
                <label for="editToggle">'</label>
                <input type="radio" name="type2" value="none" id="none" onclick="toggleControl(this);" <? if($_SESSION['quote']=='none') echo 'checked="checked"'; ?> />
                <label for="noneToggle">none</label> &nbsp;&nbsp;
				<br>
	Select escape character:
                <input type="radio" name="type3" value="backslash" id="backslash" onclick="toggleControl(this);" <? if($_SESSION['escape']=='\\') echo 'checked="checked"'; ?>/>
                <label for="createToggle">\</label> &nbsp;
				<br>
                <input type="hidden" name="id" value="<? echo $_POST["id"]; ?>"><br>
                Skip over <input type="text" name="skip" size="3" value="<? echo $_SESSION["skip"]; ?>">
                <input type="submit" name="Update" value="Update">
    </form>
<?    
    if(file_exists($tmp_dir."/tmp_".session_id()."/".$shapefiles[$i]['csv']))
    {
        $dataarray=checkcsv($tmp_dir."/tmp_".session_id()."/".$shapefiles[$_POST["id"]]['csv'],$_SESSION["delimiter"]);
        var_dump($dataarray);
        $_SESSION["dataarray"]=$dataarray;
    }    
}
if(isset($_GET["id"]))
{

/*
!!!!!!!!!!!!!!!!!   copy

CREATE TABLE doc
(
  gid serial NOT NULL,
  "name" character varying(80),
  description character varying(80),
  the_geom geometry,
  ident text,
  CONSTRAINT doc_prim_key PRIMARY KEY (gid)
)
WITH (OIDS=FALSE);
*/    

    if(file_exists($tmp_dir."/tmp_".session_id()."/".$shapefiles[$_GET["id"]]['csv']))
    {
#        passthru('chgrp postgres '."/home/tmp/tmp_".session_id()."/*");
#        passthru('chmod 660 '."/home/tmp/tmp_".session_id()."/*");
#        echo "<pre>";
#        passthru('ls -ls '."/home/tmp/tmp_".session_id()."/");
#        echo "</pre>";
        echo "Writing table<br>";
        $dbconn = pg_connect("host=".$database['host']." dbname=".$database['dbname']." user=".$database['username']." password=".$database['password']) or die('Could not connect: ' . pg_last_error());
#        $sql="copy ".$_SESSION["tbl"]." from '".$shapefiles[$_GET["id"]]['csv']."'  DELIMITER '".$_SESSION["delimiter"]."' CSV HEADER";
#        $sql="copy ".$_SESSION["tbl"]." from '".$shapefiles[$_GET["id"]]['csv']."'  CSV HEADER";
        $sql="CREATE TABLE ".$_SESSION["tbl"]." ( ";
        $dataarray=$_SESSION['dataarray'];
        $k=count($dataarray);
        for($i=0;$i<$k;$i++)
        {
            $sql.= " \"".$dataarray[$i]['name']."\" ".$dataarray[$i]['type'];
            if($i==$k-1) $sql.=" )";
            else $sql.=", ";
        }
        echo $sql."<br>";
        $result = pg_query($sql) or die('Query 0 failed: ' . pg_last_error());
        $fname = $tmp_dir."/tmp_".session_id()."/".$shapefiles[$_GET["id"]]['csv'];
        $fhandle = fopen($fname,"r");
        $sqlstart='INSERT INTO '.$_SESSION["tbl"].' ( ';
        
        for($i=0;$i<$k;$i++)
        {
            $sqlstart.= " \"".$dataarray[$i]['name']."\"";
            if($i==$k-1) $sqlstart.=" ) VALUES (";
            else $sqlstart.=", ";
        }
        echo "<br>Importing...<br>";

        for($i=0;$i<=$_SESSION["skip"];$i++) $content=fgets($fhandle);
        $count=0;
        $skip=$_SESSION["skip"];
        while($content = fgetcsv($fhandle,0,$_SESSION["delimiter"],$_SESSION["quote"],$_SESSION["escape"]))
        {
            $elements=$content;
            $sql=$sqlstart;
            for($j=0;$j<$k;$j++)
            {
                if($dataarray[$j]['type']=='text') $sql.="'";
                $sql.=str_replace("'","\\'",$elements[$j]);
                if($dataarray[$j]['type']=='text') $sql.="'";
                if($j==$k-1) $sql.=')';
                else $sql.=', ';
            }
            #echo $sql.'<br>';
            $count++;
            if($count/5000==ceil($count/5000)) echo $count.'<br>';
            flush();
            $result = pg_query($sql) or die('Query 0 failed: ' . pg_last_error());
        }
        echo "Total records imported: ".$count.'<br>';
    }
}
?>
    </body>
</html>
