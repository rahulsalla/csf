<?php
function start_options_javascript() {
  $content = "<script language='JavaScript' type='text/javascript'>
    function toObject(arr) {
      var rv = {};
      for (var i=0; i<arr.length; ++i)
	rv[i]=arr[i];
      return(rv);
}
function convert(str) {
  //var a=str.replace(/\"/g,\"'\");
  //alert(str);
  document.getElementById('csv').value=str;
}
function convertandReturn(str) {
  //var a=str.replace(/\'/g,\"\\\"\");
  return str;
}
function csv_table_generator(layer,result1,result2,i_count,dashboardList,moduleName) {
  var countCheck=document.getElementById('deleteR');
  var tab=document.getElementById('myTable');
  //var txtVal=convertandReturn(document.getElementById('csv').value);
  var txtVal=document.getElementById('csv').value;
  var cellvalue='';
  var lookup=layer;
  dbtable=JSON.stringify(result1);
  dbcolumn=JSON.stringify(result2);
  dbtable=JSON.parse(dbtable);
  dbcolumn=JSON.parse(dbcolumn);
  dashboardList=JSON.stringify(dashboardList);
  dashboardList=JSON.parse(dashboardList);
  moduleName=JSON.stringify(moduleName);
  moduleName=JSON.parse(moduleName);


  if(txtVal){
    var elem=JSON.parse(txtVal);}

do
{				var reportCounter=tab.rows.length;
row=tab.insertRow(tab.rows.length);
rowCheck=countCheck.insertRow(countCheck.rows.length);
rowCheck.style.height='30px';

var t=document.createElement('input');
t.type='checkbox';
t.value=cellvalue;
t.checked=false;
rowCheck.insertCell(0).appendChild(t);
cellvalue='';
// This loops down is for inserting cell as per its type
var dList=new Array();
var moduleList=new Array();
for(var i=0;i<i_count;i++)
{ 
  var cell=row.insertCell(i);
  cell.style.height='30px';
  if(elem && elem.length>=tab.rows.length){
    cellvalue=elem[tab.rows.length-1][i];}
//alert(lookup[i]);
switch(lookup[i])
{
case 'Color' :
  var t=document.createElement('input');
  t.value=cellvalue;
  t.type='color';
  cell.appendChild(t);
  break;
case 'Tablename' :
  var t=document.createElement('select');
  var op=document.createElement('option'); 
  op.text=cellvalue;
  op.value=cellvalue;
  t.options.add(op);
  for(k=0;k<dbtable.length;k++)
  {if(cellvalue!=dbtable[k].table_name){
    var op=document.createElement('option'); 
    op.text=dbtable[k].table_name;
    op.value=dbtable[k].table_name;
    t.options.add(op);
}
}
cell.appendChild(t);
break;
//Case Column and Operation Type Added by Shrijal  	
case 'Columnname' :
  var t=document.createElement('select');
  var op=document.createElement('option');
  op.text=cellvalue;
  op.value=cellvalue;
  t.options.add(op);
  for(k=0;k<dbcolumn.length;k++)
  {if(cellvalue!=dbcolumn[k].table_name){
    var op=document.createElement('option');
    op.text=dbcolumn[k].table_name+' --> '+dbcolumn[k].column_name;
    op.value=dbcolumn[k].column_name;
    t.options.add(op);
}
}
cell.appendChild(t);
break;



case 'OperationType':
  var t=document.createElement('select');
  var op=document.createElement('option');
  op.text=cellvalue;
  op.value=cellvalue;

  t.options.add(op);
  var layers = new Array('Join','Sort','Transpose','Aggregation');
  for(k=0;k<layers.length;k++)
  {if(cellvalue!=layers[k]){
    var op=document.createElement('option');
    op.text=layers[k];
    op.value=layers[k];
    t.options.add(op);
}
}
cell.appendChild(t);

break;	
case 'Layertype' :
  var t=document.createElement('select');
  var op=document.createElement('option'); 
  op.text=cellvalue;
  op.value=cellvalue;

  t.options.add(op);
  var layers = new Array('local features','WMS','WFS');
  for(k=0;k<layers.length;k++)
  {if(cellvalue!=layers[k]){
    var op=document.createElement('option'); 
    op.text=layers[k];
    op.value=layers[k];
    t.options.add(op);
}
}
cell.appendChild(t);
break;
case 'delete' :
  var t=document.createElement('input');
  t.type='checkbox';
  t.value=cellvalue;
  t.checked=false;
  cell.appendChild(t);
  break;
  i--;
case 'Dashboard Number':
  dList[i]=document.createElement('select');
  dList[i].id=reportCounter;

  var op=document.createElement('option'); 
											/*
											if(cellvalue!='')
											{*/
  op.text='';
  op.value='';
  dList[i].options.add(op);
  //}
  var sel=0;
  for(k=0;k<dashboardList.length;k++)
  {	

    var op=document.createElement('option'); 
    op.text=dashboardList[k];
    op.value=dashboardList[k];
    dList[i].options.add(op);
    if(cellvalue==dashboardList[k]){sel=k;dList[i].selectedIndex=k+1;}

}
//


dList[i].onchange=changeHandler;
function changeHandler(){

  var e = document.getElementById(this.id);
  var selectedDashboard = e.selectedIndex;
  var selectedValue=e.selectedIndex.value;

  var id=parseInt(this.id);
  var test='moduleList'+id;
  var module=document.getElementById(test);
  module.innerHTML ='';

  var temp=selectedDashboard-1;
  for(k=0;k<moduleName[temp].length;k++)
  {	if(cellvalue!=moduleName[temp][k])
  {
    var op=document.createElement('option'); 
    op.text=moduleName[temp][k];
    op.value=moduleName[temp][k];
    module.options.add(op);
}
}



}
cell.appendChild(dList[i]);	

break;
case 'Sid:Modules':
  console.log(tab.rows.length+'--<');
  moduleList[i]=document.createElement('select');
  //moduleList[i].multiple=true;
  var op=document.createElement('option'); 
  moduleList[i].id='moduleList'+reportCounter;
  op.value=cellvalue;
  op.text=cellvalue;
  moduleList[i].options.add(op);
												/*
												for(l=0;l<dashboardList.length;l++)
												{	var temp=l;

												for(k=0;k<moduleName[temp].length;k++)
												{if(cellvalue!=moduleName[temp][k]){
												var op=document.createElement('option'); 
												op.text=moduleName[temp][k];
												op.value=moduleName[temp][k];
												moduleList[i].options.add(op);
												}
												}
												}*/
  cell.appendChild(moduleList[i]);

  break;
case 'Geometry Columnname':
  var t=document.createElement('input');
  t.value='the_geom';
  t.type='text';
  cell.appendChild(t);break;											
case 'Opacity':
  var t=document.createElement('select');
  var op=document.createElement('option'); 
  op.text=cellvalue;
  op.value=cellvalue;
  t.options.add(op);
  //var layers = new Array('1','WMS','WFS');
  for(k=1;k<=10;k++)
  {	if(cellvalue!=(k/10)){
    var op=document.createElement('option'); 
    op.text=k/10;
    op.value=k/10;
    t.options.add(op);
}
}
cell.appendChild(t);break;	
default:
  var t=document.createElement('input');
  t.value=cellvalue;
  t.type='text';
  cell.appendChild(t);
  break;

}
}

}while(elem && elem.length>tab.rows.length);

}</script>
  ";
return($content);
}
function update_options($options) {
  $values['options']['data'] = $options;
}
function place_input_dependencies($type, $name, $value, $lookup, $default) {
  global $db;
  $key = '';

  $content	= '';

  if((!isset($value)) or ($value=='')) $value = $default;
  switch($type) {
  case "Integer":
    $content	= "<input id='".$name."' type='text' value='".$value."' size='2' style='width:400'/>";
    break;
  case "Table":
    $content='';
    $result = $db->fetchAll("select table_name from information_schema.tables where table_schema='public' and table_name not in ('station','station_template','station_variables','station_variables_template','spatial_ref_sys','geometry_columns','geography_columns','inter_process','clients','users') order by table_name");
    $content	= "<select id='".$name."' name='".$name."'  style='width:400'>";
    $content .= "<option value = \"\">".$key['table_name']."</option>";
    foreach($result as $key) {
      $content .= "<option value = \"".$key['table_name']."\" ";
      if($value == $key['table_name']) $content .= "selected";
      $content	.= ">".$key['table_name']."</option>";
    }
    $content	.= "</select>";
    break;
  case "Text":
    $content	= "<input id='".$name."' type='text' value='".$value."' size='12'  style='width:400'/>";
    break;
    //Case Column added by Shrijal

  case "Column":
    $content='';
    //$result = $db->fetchAll("select table_name from information_schema.tables where table_schema='public' and table_name not in ('station','station_template','station_variables','station_variables_template','spatial_ref_sys','geometry_columns','geography_columns','inter_process','clients','users') order by table_name");
    //$content    = "<select id='".$name."' name='".$name."'  style='width:400'>";
    //$content .= "<option value = \"\">".$key['table_name']."</option>";
    //foreach($result as $key) {
    //  $content .= "<option value = \"".$key['table_name']."\" ";
    //if($value == $key['table_name']) 
    //	{
    //	$content .= "selected";
    //	$columnVal = $key['table_name'];
    //	}
    //  $content    .= ">".$key['table_name']."</option>";
    //}
    // $content    .= "</select>";
    $col_query = $db->fetchAll("select table_name,column_name from information_schema.columns where table_schema='public' and table_name not in ('station','station_template','station_variables','station_variables_template','spatial_ref_sys','geometry_columns','geography_columns','inter_process','clients','users') order by column_name" );
    $content    .= "<select id='".$name."' name='".$name."'  style='width:400'>";
    $content .= "<option value = \"\">".$key1['column_name']."</option>";
    foreach($col_query as $key1) {
      $content .= "<option value = \"".$key1['column_name']."\" ";
      if($value == $key1['column_name'])
      {
	$content .= "selected";
      }
      $content    .= ">".$key1['table_name']."-->".$key1['column_name']."</option>";
    }
    $content    .= "</select>";


    break;
  case "Json":
    $value = json_encode($value);
    $content	= "<input id='".$name."' type='text' value='".$value."' size='12'  style='width:400'/>";
    break;
  case "Color":
    $content	= "<input id='".$name."' value='".$value."' class=\"color {hash:true,pickerFaceColor:transparent,pickerFace:3,pickerBorder:0,pickerInsetColor:black,adjust:false}\" size=12  style='width:400'/>";
    break;
  case "Dropdown":
    $lookup_options	 = explode('|',$lookup);
    $content		 = "<select id='".$name."' name='".$name."'  style='width:400'>";
    foreach($lookup_options as $key => $lookup_setup) {
      $content .= "<option value = \"".$lookup_setup."\" ";
      if($value == $lookup_setup) $content .= "selected";
      $content	.= ">".$lookup_setup."</option>";
    }
    break;
  case "csv":
    $content='';
    $txtvalue=str_replace("'","&#39;",$value);
    $txtvalue=json_encode($value);

    $header	 = explode('|',$lookup);
    $result1 = $db->fetchAll("select table_name from information_schema.tables where table_schema='public' and table_name not in ('station','station_template','station_variables','station_variables_template','spatial_ref_sys','geometry_columns','geography_columns','inter_process','clients','users') order by table_name");
    $result2 = $db->fetchAll("select table_name,column_name from information_schema.columns where table_schema='public' and table_name not in ('station','station_template','station_variables','station_variables_template','spatial_ref_sys','geometry_columns','geography_columns','inter_process','clients','users') order by column_name");
    $dashboardNumber=array();	

    // Report Module
    $resultReport = $db->fetchAll("select station.sid, value, station_variables.name as name from station, station_variables where (station_variables.name='options' or station_variables.name='name') and station.sid = station_variables.sid");

    #encode moduels into array
    foreach ($resultReport as $valueReport) {
      $modules[$valueReport['sid']][$valueReport['name']] = $valueReport['value'];
    }

    #find all the dashboards that are used in a specific modules
    if(isset($modules)){
      foreach ($modules as $sid => $valueM) {

	//var_dump($option_field);
	$option_fieldR = json_decode($valueM['options'], true);
	if(isset($option_fieldR)) 
	{
	  foreach ($option_fieldR as $dashboard => $options)
	  {
	    if(is_int($dashboard))
	    {
	      $dashboardlist[$dashboard][$sid]=$valueM['name'];
	    }
	  }
	}
      }
    }

    $moduleName=array();
    $moduleName['sid']=array();
    #list all the dashboards with their respective 



    //Report Ends
    /*
     */
    $layer = array();
    foreach($header as $key => $header_elements) {
      array_push($layer,$header_elements);

    }
    $content.= "<input id='".$name."' type='text' value='".$txtvalue."' size='12' />";
    if(isset($dashboardlist))
    {
      ksort($dashboardlist);

      $k=0;$complete='';
      foreach ($dashboardlist as $dashboard => $valueK)
      {	$dashboardNumber[$k]=$dashboard;
      $i=0;

      $moduleName[$k]=array();

      $all='';
      foreach($valueK as $sid => $name)
      {
	$moduleName[$k][$i++]=$sid.':'.$name;
	$all.=$sid.',';
	//$content.=$sid+'<br>';
      }

      if($i>1){
	$complete.=$all;
	$all=rtrim($all, ",");
	$moduleName[$k][$i]=$all;}

	$k++;
      }

    }
    //$dashboardNumber[$k]='ALL';

    $complete=rtrim($complete, ",");
    $moduleName[$k][0]=$complete;

    $content.= "<div id='enable' style='display:block;'><input name='buttonAdd' type='button' value='Edit' size='12'  onclick='document.getElementById(\"hiddencsv\").style.display = \"block\";
    csv_table_generator(".json_encode($layer).",".json_encode($result1).",".json_encode($result2).",".count($header).",".json_encode($dashboardNumber).",".json_encode($moduleName).");
    //this.disabled = \"true\";	
    document.getElementById(\"enable\").style.display = \"none\";
    ";
    $content.="'/> </div>";
    $content.="<div id='hiddencsv' style='display:none;width:1500px overflow-x:scroll;'>";

    $content.="<div class='minwidth' style='white-space: nowrap;'><table  id='deleteR' class='ieh-fl' border ='1' style='display:inline-block;float: left;white-space: normal;'><th><span>Delete</span></th></table>";
    $content.= "<table id='myTable' class='csv' border ='1' float='left' display: inline-block; style='display: inline-block; float: right;vertical-align: top; border: 1px solid;' > <tr>";
    foreach($header as $key => $header_elements) {
      $content.= '<th><span>'.$header_elements.'</span></th>';
      $i++;
    }
    $content.="  </tr></table></div>

      <input type='button' name='button+' value='+' onmouseup='";

    $content.="
      csv_table_generator(".json_encode($layer).",".json_encode($result1).",".json_encode($result2).",".count($header).",".json_encode($dashboardNumber).",".json_encode($moduleName).");
    ";

    $content.=" '/> ";


    $content.='<input type="button" value="Done" onclick="';
    $content.=" document.getElementById('enable').style.display = 'block';

    document.getElementById('hiddencsv').style.display = 'none';

    var refTab = document.getElementById('myTable');
    var elements = [];

    for ( var i = 0, row; row = refTab.rows[i]; i++ ) {
      row = refTab.rows[i];
      elements[i]= [];
      for ( var j = 0, col; col = row.cells[j]; j++ ) {
	if(i==0){
	  elements[i][j]=col.firstChild.innerHTML;
  } else {
    elements[i][j]=col.firstChild.value;
  }
  }
  }
  //toJsonObject(elements);
  //elements = toObject(elements);
  //alert(typeof elements);
  elements=JSON.stringify(elements);
  //alert(elements);
  //elements=JSON.stringify(elements);
  //document.getElementById('csv').value=elements;
  convert(elements);
  ";

  $content.='">';
  $content.='<input type="button" name="deletecsv" value="Delete" onclick="';
  $content.="var deleteTab = document.getElementById('deleteR');
  var myTable = document.getElementById('myTable');
  var rowCount=deleteTab.rows.length;
  var txtVal=convertandReturn(document.getElementById('csv').value);
  var elem=JSON.parse(txtVal);
  //alert(elem[1]);
  for(var i=1; i<=rowCount; i++) {
    var row = deleteTab.rows[i];
    var chkbox = row.cells[0].childNodes[0];
    if(null != chkbox && true == chkbox.checked) {
      if (confirm('Are you sure you want to delete Row '+i)){
	deleteTab.deleteRow(i);
	myTable.deleteRow(i);
	if(elem[i]){
	  delete elem[i];
	  //alert(JSON.stringify(elem));
  }
  rowCount--;
  i--;}
  }
  }
  //document.getElementById('csv').value=JSON.stringify(elem);
  ";

  $content.='">';



  $content.="</div>";
  $value=str_replace("\"","'",$value);		

  break;
  case "InputModule":
    $content='';
    $result = $db->fetchAll("select sid, value from station_variables  where (name='name') and(sid in (select sid from station_variables where value='input' and name='moduletype')) order by value;");
    $content	= "<select id='".$name."' name='".$name."'>";
    $content .= "<option value = \"\">".$key['value']."</option>";
    foreach($result as $key) {
      $content .= "<option value = \"".$key['sid']."\" ";
      if($value == $key['sid']) $content .= "selected";
      $content	.= ">".$key['value']."</option>";
    }
    $content	.= "</select>";
    break;
  default: break;
  }
  return ($content);
}

function unpack_general_options($option_field, $options_setup)
{
  $option_field = json_decode($option_field, true); 

  $content = "<table id=\"general_options\">";
  $j = 0;
  foreach($options_setup as $key => $option_setup)
  { //if($option_setup['donotrender']!= 'yes'){
    if($option_setup['perdashboard']== 'no')
    {	
      if($option_setup['repeatable']== 'yes')
      {
	$i=0;
	foreach( $option_field[$option_setup['name']] as $repeatablevalue)
	{
	  $i++;
	  $content .= "<tr><td>"."</td><td>&nbsp;&nbsp;</td><td>".$option_setup['description']."</td><td> ". (($option_setup['detail']=="") ? "" : "<img width='14px' title='".$option_setup['detail']."' src='images/blue_info.png' />")."</td><td>".place_input_dependencies($option_setup['type'],$option_setup['name'].($i),$repeatablevalue,$option_setup['lookup'],$option_setup['default'])."</td></tr>";
	  $j++;
	}
	$i++;
	$content .= "<tr><td></td><td></td><td><span style='background-color:#FF9966;' onmouseup='alert(\"columns".$i."\");'>&nbsp;Add Element..&nbsp;</span></td><td></td><td></td>";
	$j++;
      }
      else
      {
	$content .= "<tr><td>"."</td><td>&nbsp;&nbsp;</td><td>".$option_setup['description']."</td><td> ". (($option_setup['detail']=="") ? "" : "<img width='14px' title='".$option_setup['detail']."' src='images/blue_info.png' />")."</td><td>".place_input_dependencies($option_setup['type'],$option_setup['name'],$option_field[$option_setup['name']],$option_setup['lookup'],$option_setup['default'])."</td></tr>";
	$j++;
      }

    }
    //}
  }
  $content .= "</table><br />";
  return($content);
}

function unpack_per_dashboard_options($option_field, $options_setup)
{
  $option_field = json_decode($option_field, true); 
  $i = 0;
  $content = '';

  foreach ($option_field as $dashboard => $options)
  {
    if(is_int($dashboard))
    {
      $i++;
      $content .= "<br><b><span style='text-decoration:underline;'><a href = \"index.php?dashboard=".$dashboard."\" target = \"_blank\">Dashboard: ".$dashboard."</a></span><input type=\"hidden\" id=\"dashboard".$i."\" value=\"".$dashboard."\"></b>";
      $content .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copy to&nbsp;<input type='text' value='' size='3' name='copyfrom".$dashboard."' id='copyfrom".$dashboard."'><input type='button' value='&nbsp;&#x2713&nbsp;'onmouseup='copyDashboard(".$dashboard.",document.getElementById(\"copyfrom".$dashboard."\").value);'></span>";
      $content .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = 'button' value = '&nbsp;Delete&nbsp;' size = '3' name = 'delete' id='delete' onmouseup='deleteDashboard(".$dashboard.");'><br>";
      //$content .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = 'button' value = '&nbsp;Delete&nbsp;' size = '3' name = 'delete' id='delete' onmouseup='deleteDashboard(".$dashboard.");'><br>";
      //document.getElementById(\"options_div\").innerHTML=JSON.stringify(combine())
      //updateOptionsBox(JSON.stringify(combine())

      $content .= "<table>";
      foreach($options_setup as $key => $option_setup)
      {
	if($option_setup['perdashboard']== "yes")
	  $content .= "<tr><td>"."</td><td>&nbsp;&nbsp;</td><td>".$option_setup['description']."</td><td> ". (($option_setup['detail']=="") ? "" : "<img width='14px' title='".$option_setup['detail']."' src='images/blue_info.png' />")."</td><td>".place_input_dependencies($option_setup['type'],$option_setup['name']."+".$dashboard,$options[$option_setup['name']],$option_setup['lookup'],$option_setup['default'])."</td></tr>";
      }
      $content .= "</table><br />";
    }
  }
  return ($content);
}

function validate ($id, $value, $type)
{ 
  $ex	= explode('_',$id);

  global $db;
  global $schema;

  //alert($value);
  $value = stripslashes($value);
  if($type=="option") {
    $result = $db->fetchAll("select value, sid from station_variables where svid='".$ex[1]."'");
    $option_field = json_decode($result[0]['value'], true);
    if(isset($option_field)) {
      foreach ($option_field as $dashboard => $options) {
	if(is_int($dashboard)) {
	  $dashboardlistold[$dashboard]= true;
	}
      }
    }
    $option_field = json_decode($value, true);
    if(isset($option_field)) {
      foreach ($option_field as $dashboard => $options) {
	if(is_int($dashboard)) {
	  $dashboardlistnew[$dashboard]= true;
	}
      }
    }
    foreach($dashboardlistold as $dashboard => $info) {
      if(!isset($dashboardlistnew[$dashboard])) {
	$db->fetchAll('insert into inter_process ("value", "function", "sid") values (\''.$dashboard.'\',\'delete\',\''.$result[0]['sid'].'\');');
      }
    }
  }


  if($type=="integer") $value=intval($value);
  $columns['value']= $value;

  $db->update($schema."station_variables",$columns,'"svid"='.$ex[1]);

  return $value; 
}

function get_options($sid)
{
  $option_field ="";
  $content  = '<font face="arial">';
  $content .= '<div style="cursor:hand; position:fixed; right:65px;" id="close"  onmouseup="document.getElementById(\'options_div\').style.visibility = \'hidden\';"><img src="images/close_button.png" position=relative width="40px" align="right"></div><br><font size="5" color="#2F4F4F"><b>Options Editor:</b></font><br><br>';
  global $db;
  $content.="";
  $content .= $sid." - ";
  $sql	= "select svid,name,value from station_variables where sid=".$sid." and (name='show' or name='xc' or name='yc' or name='options' or name='type' or name='moduletype' or name='phpfile')";
  $result	= $db->fetchAll($sql);

  foreach($result as $value) {
    if(($value['name']=='options') or ($value['name']=='type') or ($value['name']=='moduletype') or ($value['name']=='phpfile'))
      $values[$value['name']]['data']	= $value['value'];
    else $values[$value['name']]['data']	= explode(';',$value['value']);
    $values[$value['name']]['svid']	= $value['svid'];
  }
  $content = '<font face="arial">';
  $content .= '<div style="cursor:hand; position:fixed; right:65px; top:55px;" id="close"  onmouseup="document.getElementById(\'options_div\').style.visibility = \'hidden\';"><img src="images/close_button_new.png" position=relative width="40px" align="right"></div>

    <div style="cursor:hand; position:fixed; right:65px; top:100px;" id="save" onmouseup="updateOptionsBox(JSON.stringify(combine()),'.$values['options']['svid'].', 1);"><img src="images/save_button.png" position=absolute width="40px" align="right"></div><br><font size="5" color="#2F4F4F"><b>Options Editor:</b></font><br><br>';

  if(isset($_POST['option_field']) and ($_POST['option_field']!='')) $option_field = stripslashes($_POST['option_field']);
  else {
    $option_field = $values['options']['data'];
    //$option_field = 
    //$option_field ='{"title":"This is a title","columns":{"1":"column1","2":"column2"},"11":{"css":1,"width":45,"height":50},"12":{"css":2,"width":145,"height":150}}';
    //$option_field = stripslashes($option_field); 
  }
  if(isset($values['phpfile']['data']))
    $values['type']['data']=$values['phpfile']['data'];
  $type = $values['type']['data'];
  $content .= "<br><span style='font-weight:bold;color:339966'>Module Type:</span><br><br>";
  $content .= $type.'<br>';

  if(function_exists("getsetup_".$values['moduletype']['data']."_".$values['type']['data'])) {
    $options = call_user_func("getsetup_".$values['moduletype']['data']."_".$values['type']['data']);
    if(isset($options['_MODULEDESCRIPTION'])) {
      $content .= "<br><span style='font-weight:bold;color:339966'>Module Description:</span><br><br>";
      $content .= $options['_MODULEDESCRIPTION'].'<br><br>';
    }
    /* if(isset($options['_CREDITS'])) { */
    /* 	$content .= "<br><span style='font-weight:bold;color:339966'>Credits:</span><br><br>"; */
	    /* 	$content .= $options['_CREDITS'].
	    '<br>'; */
    /* } */
  }
  else $content .= "No Setup Function "."getsetup_".$values['moduletype']['data']."_".$values['type']['data']."<br>";
  //make a function that has below content, and then always call that function

  $content .= "<br><span style='font-weight:bold;color:339966'>General Options:</span><br><br>";
  $content .= unpack_general_options($option_field, $options);
  if(!isset($values['phpfile']['data'])) {
    $content .= "<br><span style='font-weight:bold;color:336699'>per Dashboard Options:</span><br/>";
    $content .= "<br>Add to dashboard&nbsp;<input type='text' value='' size='3' name='newDashboardBox' id='newDashboardBox'><input type='button' value = '+' name='newdashboard' onmouseup='newDashboard(document.getElementById(\"newDashboardBox\").value);'><br>";
    $content .= unpack_per_dashboard_options($option_field, $options);
    ### this javascript adds another dashboard
  }

  ### this javascript collects the info and creates a proper json string

  /*$content .= "<input type='button' value ='&nbsp;Save&nbsp;' style='color:0066CC;' onmouseup='updateOptionsBox(JSON.stringify(combine()),".$values['options']['svid'].", 1);'><br>";*/

  $content .= '<form name="hiddenForm" method="POST" target=""><input type="hidden" id="option_field" name="option_field" value="">
    <input type="hidden" id="elements" name="elements" value="">
    </form>';

  $return[1] = $content;
  $return[2] = $options;
  return($return);
}
// Fetch options from db and add a new dashboard number in options and validate it
function report_copy_dashboard($toDashboard,$fromDashboard)
{	
  global $db;
  $content='';
	/*
	$content='
	csv=document.getElementById(\'csv\').value;
	csv=convertandReturn(csv);
	csv=eval(\'(\' + csv + \')\');
	var test=new String(csv[1][1]);
	test=test.substring(0,test.indexOf(\':\'));
	console.log(test);
	';
	$result=$db->fetchAll('select * from station_variables');
	$content.=count($result);
	$content.='document.getElementById(\'copy_div\').style.visibility = \'hidden\';';
	return $content;
	 */


}
// Get options for report module
function get_options_report($dashboard)
{
  $option_field ="";
  $content  = '<font face="arial">';
  $content .= '<div style="cursor:hand; position:fixed; right:65px;" id="close"  onmouseup="document.getElementById(\'copy_div\').style.visibility = \'hidden\';"><img src="images/close_button.png" position=relative width="40px" align="right"></div><br><font size="5" color="#2F4F4F"><b>Options Editor:</b></font><br><br>';

  $content.="";
  //$content .= $sid." - ";
  //$sql	= "select svid,name,value from station_variables where sid=".$sid." and (name='show' or name='xc' or name='yc' or name='options' or name='type' or name='moduletype' or name='phpfile')";
  //$result	= $db->fetchAll($sql);


  $content = '<font face="arial">';
  $content .= '<div style="cursor:hand; position:fixed; right:65px; top:55px;" id="close"  onmouseup="document.getElementById(\'copy_div\').style.visibility = \'hidden\';"><img src="images/close_button_new.png" position=relative width="40px" align="right"></div>
    <span id="pr" style="visibility:hidden;"><i>Validating...</i></span> 
    <span id="msg" style="visibility:hidden;">></span>  

    <span id="dashboard" style="visibility:hidden;">'.$dashboard.'</span>
    <div style="cursor:hand; position:fixed; right:65px; top:100px;" id="save" 
    onClick="
    pr=\'copied\';
  var dashbNumber=document.getElementById(\'dashboard\').innerHTML;
  console.log(\'here\'+pr);	
  csv=document.getElementById(\'csv\').value;
  var from,to;
  if(csv!=\'\'){
    csv=convertandReturn(document.getElementById(\'csv\').value);
    csv=eval(\'(\' + csv + \')\');
    for(var i=1;i<csv.length;i++)
    {
      j=1;

      from=new String(csv[i][j]);
      if(from.indexOf(\':\')!=-1){
	from=from.substring(0,from.indexOf(\':\'));console.log(from);
	report_copyDashboard(csv[i][0],dashbNumber,from, {\'target\':\'msg\',\'preloader\':\'pr\'});

}
else
{
  var x=from.split(\',\');

  var k=0;
  while(k<x.length){console.log()

    report_copyDashboard(csv[i][0],dashbNumber,x[k++], {\'target\':\'msg\',\'preloader\':\'pr\'});

};

}

}
}

document.getElementById(\'copy_div\').style.visibility = \'hidden\';	
"><img src="images/save_button.png" position=absolute width="40px" align="right"></div><br><font size="5" color="#2F4F4F"><b>Copy Module:</b></font><br><br>';

if(isset($_POST['option_field']) and ($_POST['option_field']!='')) $option_field = stripslashes($_POST['option_field']);
else {
  // $option_field = $values['options']['data'];
  //$option_field = 
  //$option_field ='{"title":"This is a title","columns":{"1":"column1","2":"column2"},"11":{"css":1,"width":45,"height":50},"12":{"css":2,"width":145,"height":150}}';
  //$option_field = stripslashes($option_field); 
  //$content.=$option_field;
}
if(isset($values['phpfile']['data']))
  $values['type']['data']=$values['phpfile']['data'];
//$type = $values['type']['data'];
$content .= "<br><span style='font-weight:bold;color:339966'>Copy Type:</span><br><br>";
$content .= 'This module will copy elements from different dashboards here br<br>';


//make a function that has below content, and then always call that function
$options['_CREDITS']				= 'Main Developters: .';
$options['_MODULEDESCRIPTION']		= '<p>This module will generate a report .</p>'

  ;
$options[10]['name']				= 'csv';
$options[10]['description']			= 'Select Dashboard and the corresponding element to be in report ';
$options[10]['detail']				= '';
$options[10]['type']				= 'csv';
$options[10]['link']				= 'link to further information..?';
$options[10]['lookup']				= 'Dashboard Number|Sid:Modules'; 
$options[10]['default']				= '';
$options[10]['optional']			= 'no';
$options[10]['repeatable']			= 'no';
$options[10]['perdashboard']		= 'no';
$options[10]['dependenton']			= '';
$options[10]['donotrender']			= '';
$content .= "<br><span style='font-weight:bold;color:339966'>General Options:</span><br><br>";
$content .= unpack_general_options($option_field, $options);
if(!isset($values['phpfile']['data'])) {
  // $content .= "<br><span style='font-weight:bold;color:336699'>per Dashboard Options:</span><br/>";
  // $content .= "<br>Add to dashboard&nbsp;<input type='text' value='' size='3' name='newDashboardBox' id='newDashboardBox'><input type='button' value = '+' name='newdashboard' onmouseup='newDashboard(document.getElementById(\"newDashboardBox\").value);'><br>";
  // $content .= unpack_per_dashboard_options($option_field, $options);
  ### this javascript adds another dashboard
}

### this javascript collects the info and creates a proper json string

/*$content .= "<input type='button' value ='&nbsp;Save&nbsp;' style='color:0066CC;' onmouseup='updateOptionsBox(JSON.stringify(combine()),".$values['options']['svid'].", 1);'><br>";*/
//$csv_value='<script> console.log(document.getElementById(\'csv\').value);</script>';
$content .= '<form name="hiddenForm" method="POST" target=""><input type="hidden" id="option_field" name="option_field" value="">
  <input type="hidden" id="elements" name="elements" value="">
  </form>';

$return[1] = $content;
$return[2] = $options;
//echo $options;
return ($content);
}?>
