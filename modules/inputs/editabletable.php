<?
function getsetup_input_editabletable()
{
	$options['_CREDITS']				= 'Main Developters: Robert Pahle, Jaycen Horton.';
	$options['_MODULEDESCRIPTION']		= 'More info will follow.';

	$options[0]['name']					= 'css';
	$options[0]['description']			= 'Please select the CSS';
	$options[0]['detail']				= 'This is the css number that influences the layout';
	$options[0]['type']					= 'Integer';
	$options[0]['link']					= 'link to further information..?';
	$options[0]['lookup']				= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back beeing the selection
	$options[0]['default']				= '';
	$options[0]['optional']				= 'no';
	$options[0]['perdashboard']			= 'yes';
	$options[0]['dependenton']			= '';

	$options[10]['name']				= 'x';
	$options[10]['description']			= 'Please select the x coordinate';
	$options[10]['detail']				= 'This sets the x coordinate to place the element on the dashboard.';
	$options[10]['type']				= 'Integer';
	$options[10]['link']				= 'link to further information..?';
	$options[10]['lookup']				= '';
	$options[10]['default']				= '10';
	$options[10]['optional']			= 'no';
	$options[10]['repeatable']			= 'no';
	$options[10]['perdashboard']		= 'yes';
	$options[10]['dependenton']			= '';

	$options[20]['name']				= 'y';
	$options[20]['description']			= 'Please select the y coordinate';
	$options[20]['detail']				= 'This sets the y coordinate to place the element on the dashboard.';
	$options[20]['type']				= 'Integer';
	$options[20]['link']				= 'link to further information..?';
	$options[20]['lookup']				= ''; 
	$options[20]['default']				= '10';
	$options[20]['optional']			= 'no';
	$options[20]['repeatable']			= 'no';
	$options[20]['perdashboard']		= 'yes';
	$options[20]['dependenton']			= '';

	$options[30]['name']				= 'tablename';
	$options[30]['description']			= 'From this table';
	$options[30]['detail']				= 'This is the table name';
	$options[30]['type']				= 'Table';
	$options[30]['link']				= 'link to further information..?';
	$options[30]['lookup']				= ''; 
	$options[30]['default']				= '';
	$options[30]['optional']			= 'no';
	$options[30]['repeatable']			= 'no';
	$options[30]['perdashboard']		= 'no';
	$options[30]['dependenton']			= '';

	$options[40]['name']				= 'charactersVisible';
	$options[40]['description']			= 'Size of the text for the inputs';
	$options[40]['detail']				= 'This is the size of the text used for the inputs';
	$options[40]['type']				= 'Text';
	$options[40]['link']				= 'link to further information..?';
	$options[40]['lookup']				= ''; 
	$options[40]['default']				= '';
	$options[40]['optional']			= 'no';
	$options[40]['repeatable']			= 'no';
	$options[40]['perdashboard']		= 'yes';
	$options[40]['dependenton']			= '';

	$options[50]['name']				= 'columnName';
	$options[50]['description']			= 'Select from this column';
	$options[50]['detail']				= 'This is the column to select from the table';
	$options[50]['type']				= 'Text';
	$options[50]['link']				= 'link to further information..?';
	$options[50]['lookup']				= ''; 
	$options[50]['default']				= '';
	$options[50]['optional']			= 'no';
	$options[50]['repeatable']			= 'no';
	$options[50]['perdashboard']		= 'no';
	$options[50]['dependenton']			= '';

	$options[60]['name']				= 'lookupTable';
	$options[60]['description']			= 'From this lookup table';
	$options[60]['detail']				= 'This is the table too lookup from';
	$options[60]['type']				= 'Table';
	$options[60]['link']				= 'link to further information..?';
	$options[60]['lookup']				= ''; 
	$options[60]['default']				= '';
	$options[60]['optional']			= 'no';
	$options[60]['repeatable']			= 'no';
	$options[60]['perdashboard']		= 'no';
	$options[60]['dependenton']			= '';

	$options[70]['name']				= 'lookupColumn';
	$options[70]['description']			= 'From this lookup column';
	$options[70]['detail']				= 'This is the column to lookup from the lookup table';
	$options[70]['type']				= 'Text';
	$options[70]['link']				= 'link to further information..?';
	$options[70]['lookup']				= ''; 
	$options[70]['default']				= '';
	$options[70]['optional']			= 'no';
	$options[70]['repeatable']			= 'no';
	$options[70]['perdashboard']		= 'no';
	$options[70]['dependenton']			= '';

	$options[80]['name']				= 'lookupIdColumn';
	$options[80]['description']			= 'From this lookup id column';
	$options[80]['detail']				= 'This is the id column to lookup from the lookup table';
	$options[80]['type']				= 'Text';
	$options[80]['link']				= 'link to further information..?';
	$options[80]['lookup']				= ''; 
	$options[80]['default']				= '';
	$options[80]['optional']			= 'no';
	$options[80]['repeatable']			= 'no';
	$options[80]['perdashboard']		= 'no';
	$options[80]['dependenton']			= '';

	$options[90]['name']				= 'lookupIdValue';
	$options[90]['description']			= 'From this lookup id value';
	$options[90]['detail']				= 'From this lookup if column value';
	$options[90]['type']				= 'Text';
	$options[90]['link']				= 'link to further information..?';
	$options[90]['lookup']				= ''; 
	$options[90]['default']				= '';
	$options[90]['optional']			= 'no';
	$options[90]['repeatable']			= 'no';
	$options[90]['perdashboard']		= 'no';
	$options[90]['dependenton']			= '';

	return($options);
}

function object_2_array($result)
{
	
    $array = array();
    foreach ($result as $key=>$value)
    {
        if (is_object($value))
        {
            $array[$key]=object_2_array($value);
        }
        if (is_array($value))
        {
            $array[$key]=object_2_array($value);
        }
        else
        {
            $array[$key]=$value;
        }
    }
    return $array;
} 

function validate_editabletable($id, $value)
{
	global $db;

	$value = object_2_array($value);
	$options = object_2_array($value['options']);

	$result3 = $db->fetchAll("select column_name from information_schema.columns where table_name ='"  .$options['tablename']."'");
	for($i=0; $i<count($result3); $i++)
	{
		$name_type1[$i][0] = $result3[$i]['column_name'];
		$name_type1[$i][1] = $result3[$i]['column_name'];
		if($i==0) $name_type1[$i][2] = 'string';
		else  $name_type1[$i][2] = 'number';
	}

	for($i=0; $i<count($name_type1);$i++) $data_type[$name_type1[$i][0]]=$name_type1[$i][2];

//commented out by Jaycen
	foreach($value as $key => $data1)
	{
		//key is set to each option, up to and including dashboard_options
		if($key!='sid' and $key!='options')
		{
			$write_columns[substr($key,0,strpos($key,' '))]=1;
			$ids[intval(substr($key,strpos($key,' ')+1))]=1;
			//echo "1 ";
			//var_dump($ids);
		}
	}
	
	foreach($ids as $gid => $data2) {
		foreach($write_columns as $columnname => $data3) {
			$data[$gid][$columnname]=$value[$columnname.' '.$gid];
		}
	}
	foreach($data as $key => $data4) $db->update($options['tablename'],$data4,'gid='.$key);

	//$db->update("station_variables",$columns,'"svid"=\''.$id.'\'');
	//$db->update($value["lookupTable"],$columns,'"svid"=\''.$value["lookupIdValue"].'\'');

	//$result = $db->fetchAll('select sid from station_variables where "svid"=\''.$id.'\'');

	workflow_input($value['sid']);
	return $columns['value'];
}

function place_input_editabletable($sid, $value, $options, $setup)
{

	$dashboard_options = $options['dashboard_options'];

	echo '<div id="cover'.$sid.'">';
	echo reload_input_editabletable($sid, $value, $options, $setup);
	echo '</div>';

	echo '	<script language="JavaScript" type="text/javascript">
				function update'.$sid.'(dashboard, response)
				{
					make_update(response.svid, response.value);
				}
				function reload'.$sid.'(dashboard, response)
				{
					place_input(dashboard, '.$sid.', {\'onUpdate\': function(response,xmlhttp){reload_update'.$sid.'(response)}});
				}
				function mark'.$sid.'(dashboard, response)
				{
					document.getElementById("'.$setup['value_svid'].'").style.border=\'1px solid red\';
				}
				function reload_update'.$sid.'(response)
				{
					document.getElementById("cover'.$sid.'").innerHTML = response;
				}
			</script>';
}

function reload_input_editabletable($sid, $value, $options, $setup)
{
	$content='';
	/* $options array:
	[0] = css = 003;003;005|
	[1] = x,y = 500,500;500,500;200,500|
	[2] = ? = |
	[3] = query = landowner_id,value,result_simple_variables,id,5|
	[4] = table name = harq_crops|
	[5] = Columns(/Rows???) = crop_name:Use:string,start_year:Start Year:string,ac_ft_per_acre:Acre/ft per Acre:number,acre:Acres:number,return_per_year:Annual Gross:number,end_year:End Year:string,investment:Investment:number,return_per_year_per_acre:Return Rate/Acre/ Year:number
	//table column, title, type
	[6] = text size = 15
	*/
	
	$dashboard_options = $options['dashboard_options'];
	global $db;
	$sendvalue = $options;
	unset($sendvalue['dashboard_options']);
	/*removed:
	Use dashboard options instead: 
	$options	= explode('|',$options);
	$xy = explode(',',$options[1]);
	$qrybuilder = explode(',',$options[3]); 
	*/
	
	
	
	//fix this part:
	$result3 = $db->fetchAll("select column_name from information_schema.columns where table_name ='"  .$options['tablename']."'");
	for($i=0; $i<count($result3); $i++)
	{
		$name_type1[$i][0] = $result3[$i]['column_name'];
		$name_type1[$i][1] = $result3[$i]['column_name'];
		if($i==0) $name_type1[$i][2] = 'string';
		else  $name_type1[$i][2] = 'number';
	}
	
	//this part should be good:
	$sql = "select "; 
	for($i=0; $i<count($name_type1);$i++)
		if($i==0) $sql .= '"'.$name_type1[$i][0].'"';
		else $sql .= ', "'.$name_type1[$i][0].'"';
	
	/*qrybuilder array:
	landowner_id,value,result_simple_variables,id,5
	[0] = columnName
	[1] = lookupColumn
	[2] = lookupTable
	[3] = lookupIdColumn
	[4] = lookupIdValue
	*/
	//This part should be good:
	$sql .= ' from '.$options['tablename'].' where '.$options['columnName'].'::text = (select '.$options['lookupColumn'].' from '.$options['lookupTable'].' where '.$options['lookupIdColumn'].' = \''.$options['lookupIdValue'].'\')';
	
	$result	= $db->fetchAll($sql);
		
	//this part should be good:
	$content .= '<div id="element'.$sid.'" style="z-index:10; position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).';"><div id="table'.$dashboard_options['css'].'" style="margin:0px; padding:0px;">';
	$content .= '<table id="tableelement'.$sid.'" border="0" cellpadding="0" cellspacing="0"><tr>';

	//this part should be good:
	for($i=2; $i<count($name_type1);$i++)
	{
		$content .=	'<th>'.$name_type1[$i][1].'</th>';
	}
    $content .= '</tr>';
	//this part should be good:
	$i=0;

	foreach($result as $value )
	{
		$content .= "<tr>";
		for($j=2;$j<count($value);$j++) //-1 to account for selected gid column
		{
			$content .=  "<td>";
			$content .= '<input type="hidden" id="'.$sid.'+'.$i.'+'.$j.'" value="'.$sid.'+'.$name_type1[$j][0].'+'.$value['gid'].'">';
			$content .= '<input  type="text" size="'.$dashboard_options['charactersVisible'].'" id="'.$sid.'+'.$name_type1[$j][0].'+'.$value['gid'].'" value="'.$value[$name_type1[$j][0]].'">';
			$content .= "</td>";
		}
		$content .= "</tr>";
		$i++;
	} 
	$content .= '</table>';
	$content .= '<button onclick="collect_form('.$sid.');"> Submit </button>';
	$content .= '<input type="hidden" id="'.$sid.'+columns" value="'.$j.'">';
	$content .= '</div></div>';
	//This part should be good:
	$content .='
	<script type="text/javascript">
	
	function collect_form(sid)
	{
		var i = 0;
		var j = 0;
		var myArray;
		var result	= new Object;
		result["sid"]=sid;
		result["options"]=eval('.json_encode($sendvalue).');
		
		maxcolumns = document.getElementById(sid+"+columns").value;
		var hidden_id;
		do
			{
			try
				{
					for(j=2; j<maxcolumns; j++)
						{
						
							hidden_id=document.getElementById(sid+"+"+i+"+"+j).value;
							myArray = hidden_id.split("+");
							result[myArray[1].toString() + "+"+ myArray[2].toString()] = document.getElementById(hidden_id).value;
						}
					i++;
				}
			
			catch(err)
				{
					//alert("Catch: " + err);
					break;
				}
			}while (true)
			validate_editabletable('.$sid.', result, {\'onUpdate\': function(response,xmlhttp){}});
			//validate_editabletable('.$sid.', result, {\'onUpdate\': function(response,xmlhttp){make_update(\''.$sid.'\',response)}});
	}
	
	</script>
	';
	
	
	return($content);
}

function editabletable_rtrn_default_value($sid, $options)
{
}
