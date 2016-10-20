<?
    function getsetup_input_viewtable()
    {
	$options['_CREDITS'] = 'Main Developters: Robert Pahle, Jaycen Horton.';
	$options['_MODULEDESCRIPTION'] = 'More info will follow.';

	$options[1]['name'] = 'x';
	$options[1]['description'] = 'Please select the x coordinate';
	$options[1]['detail'] = 'This sets the x coordinate to place the element on the dashboard.';
	$options[1]['type'] = 'Integer';
	$options[1]['link'] = 'link to further information..?';
	$options[1]['lookup'] = ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
	$options[1]['default'] = '10';
	$options[1]['optional']	= 'no';
	$options[1]['repeatable'] = 'no';
	$options[1]['perdashboard'] = 'yes';
	$options[1]['dependenton'] = '';

	$options[2]['name'] = 'y';
	$options[2]['description'] = 'Please select the y coordinate';
	$options[2]['detail'] = 'This sets the y coordinate to place the element on the dashboard.';
	$options[2]['type'] = 'Integer';
	$options[2]['link'] = 'link to further information..?';
	$options[2]['lookup'] = ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
	$options[2]['default'] = '10';
	$options[2]['optional']	= 'no';
	$options[2]['repeatable'] = 'no';
	$options[2]['perdashboard'] = 'yes';
	$options[2]['dependenton'] = '';
	
	$options[3]['name'] = 'width';
	$options[3]['description'] = 'Field width';
	$options[3]['detail'] = 'This sets the y coordinate to place the element on the dashboard.';
	$options[3]['type'] = 'Integer';
	$options[3]['link'] = 'link to further information..?';
	$options[3]['lookup'] = ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
	$options[3]['default'] = '100px';
	$options[3]['optional'] = 'no';
	$options[3]['repeatable'] = 'no';
	$options[3]['perdashboard'] = 'yes';
	$options[3]['dependenton'] = '';
	
	$options[4]['name'] = 'valuefield';
	$options[4]['description'] = 'Select this column';
	$options[4]['detail'] = 'This is column that has the value to read';
	$options[4]['type'] = 'Column';
	$options[4]['link'] = 'link to further information..?';
	$options[4]['lookup'] = ''; 
	$options[4]['default'] = '';
	$options[4]['optional']	= 'no';
	$options[4]['repeatable'] = 'no';
	$options[4]['perdashboard'] = 'no';
	$options[4]['dependenton'] = '';


	$options[5]['name'] = 'tablename';
	$options[5]['description'] = 'From this table';
	$options[5]['detail'] = 'This is the table name';
	$options[5]['type'] = 'Table';
	$options[5]['link'] = 'link to further information..?';
	$options[5]['lookup'] = ''; 
	$options[5]['default'] = '';
	$options[5]['optional']	= 'no';
	$options[5]['repeatable'] = 'no';
	$options[5]['perdashboard'] = 'no';
	$options[5]['dependenton'] = '';

	
	$options[6]['name'] = 'ViewName';
	$options[6]['description'] = 'Where View name ';
	$options[6]['detail'] = 'This is name of the view';
	$options[6]['type'] = 'Text';
	$options[6]['link'] = 'link to further information..?';
	$options[6]['lookup'] = ''; 
	$options[6]['default']	= '';
	$options[6]['optional']	= 'no';
	$options[6]['repeatable'] = 'no';
	$options[6]['perdashboard'] = 'yes';
	$options[6]['dependenton'] = '';

	$options[7]['name'] = 'orderby';
	$options[7]['description'] = 'Specify Join on the column(if left blank it orders by first column)';
	$options[7]['detail'] = 'This is the id that you are looking for';
	$options[7]['type'] = 'Column';
	$options[7]['link'] = 'link to further information..?';
	$options[7]['lookup'] = ''; 
	$options[7]['default'] = '';
	$options[7]['optional'] = 'no';
	$options[7]['repeatable'] = 'no';
	$options[7]['perdashboard'] = 'yes';
	$options[7]['dependenton'] = '';	
	
	$options[8]['name'] = 'height';
	$options[8]['description'] = 'Field height (if left blank, the field will be as high as the text)';
	$options[8]['detail'] = 'Default: 20';
	$options[8]['type'] = 'Integer';
	$options[8]['link'] = 'link to further information..?';
	$options[8]['lookup'] = ''; 
	$options[8]['default']	= '20px';
	$options[8]['optional']	= 'no';
	$options[8]['repeatable'] = 'no';
	$options[8]['perdashboard'] = 'yes';
	$options[8]['dependenton'] = '';
	
	$options[9]['name'] = 'loadingHighlightColor';
	$options[9]['description'] = 'Color of the highlight box that is shown when a module is loading';
	$options[9]['detail'] = 'This is the color of the highlight box that is shown when a module is loading. Default: red';
	$options[9]['type'] = 'Color';
	$options[9]['link'] = 'link to further information..?';
	$options[9]['lookup'] = ''; 
	$options[9]['default']	= 'red';
	$options[9]['optional']	= 'no';
	$options[9]['repeatable'] = 'no';
	$options[9]['perdashboard'] = 'yes';
	$options[9]['dependenton'] = '';
	

	$options[10]['name'] = 'loadingHighlightThickness';
	$options[10]['description'] = 'Thickness of the highlight box that is shown when a module is loading (in pixels)';
	$options[10]['detail'] = 'This is the thickness of the highlight box that is shown when a module is loading (in pixels). Default: 2';
	$options[10]['type'] = 'Text';
	$options[10]['link'] = 'link to further information..?';
	$options[10]['lookup'] = ''; 
	$options[10]['default'] = '2';
	$options[10]['optional'] = 'no';
	$options[10]['repeatable'] = 'no';
	$options[10]['perdashboard'] = 'yes';
	$options[10]['dependenton'] = '';
	
	
	$options[11]['name'] = 'TitleOfTable';
        $options[11]['description'] = 'Set the title of your table';
        $options[11]['detail'] = 'This is column that has the value to read';
        $options[11]['type'] = 'Text';
        $options[11]['link'] = 'link to further information..?';
        $options[11]['lookup'] = ''; 
        $options[11]['default'] = '';
        $options[11]['optional'] = 'no';
        $options[11]['repeatable'] = 'no';
        $options[11]['perdashboard']  = 'yes';
        $options[11]['dependenton'] = '';

	

	$options[12]['name'] = 'csv';
        $options[12]['description'] = 'Select table Name';
        $options[12]['detail'] = 'Select a table to perform operations';
        $options[12]['type'] = 'csv';
        $options[12]['link']  = 'link to further information..?';
        $options[12]['lookup'] = 'Tablename|Color|OperationType|Columnname';
        $options[12]['default'] = '';
        $options[12]['optional'] = 'yes';
        $options[12]['repeatable'] = 'no';
        $options[12]['perdashboard'] = 'no';
        $options[12]['dependenton'] = '';

	$options[13]['name'] = 'HeaderColor';
	$options[13]['description'] = 'Set the Header Color for your table';
	$options[13]['detail'] = 'Sets only the header color of your table, it is optional';
	$options[13]['type'] = 'Color';
	$options[13]['link'] = 'link to further information..';
	$options[13]['lookup'] = '';
	$options[13]['default'] = 'blue';
	$options[13]['optional'] = 'yes';
	$options[13]['repeatable'] = 'no';
	$options[13]['perdashboard'] = 'yes';
	$options[13]['dependenton'] = '';
	
	
 	$options[14]['name'] = 'RowColor';
        $options[14]['description'] = 'Set the Row Color for your table';
        $options[14]['detail'] = 'Sets the row color of your table, it is optional';
        $options[14]['type'] = 'Color';
        $options[14]['link'] = 'link to further information..';
        $options[14]['lookup'] = '';
        $options[14]['default'] = '';
        $options[14]['optional'] = 'yes';
        $options[14]['repeatable'] = 'no';
        $options[14]['perdashboard'] = 'yes';
        $options[14]['dependenton'] = '';

 	$options[15]['name'] = 'RowWidth';
        $options[15]['description'] = 'Set the width of rows for your table';
        $options[15]['detail'] = 'Sets the width of rows of your table, it is optional';
        $options[15]['type'] = 'Text';
        $options[15]['link'] = 'link to further information..';
        $options[15]['lookup'] = '';
        $options[15]['default'] = '100';
        $options[15]['optional'] = 'yes';
        $options[15]['repeatable'] = 'no';
        $options[15]['perdashboard'] = 'yes';
        $options[15]['dependenton'] = '';


	$options[16]['name'] = 'TableWidth';
        $options[16]['description'] = 'Set the width for your table';
        $options[16]['detail'] = 'Sets the width of your table, it is optional';
        $options[16]['type'] = 'Text';
        $options[16]['link'] = 'link to further information..';
        $options[16]['lookup'] = '';
        $options[16]['default'] = '100';
        $options[16]['optional'] = 'yes';
        $options[16]['repeatable'] = 'no';
        $options[16]['perdashboard'] = 'yes';
        $options[16]['dependenton'] = '';



	return($options);
    }




    function val_viewtable($id, $value)
    {  
	global $db;


	$size = json_encode($value);
	echo "It is is It".$size[1]."It is is It";
	//$select = $db->select();
        //$columns['value'] = $value;
//	
//	$db->fetchAll("update station_variables set value = 2 where svid = 2350");	
        //$db->update("station_variables",$columns,'"svid"=\''.$id.'\'');//^M
//	return (sizeof($value));
	for($i = 0 ; $i<sizeof($size); $i++)

	{
		echo $size[$i]."<br>";		
	}


    }

    function validate_viewtable($id, $value,$options,$orderOn,$TableLike,$toggled)
    {	
	global $db;
	global $valueview;
	global $markview;
	global $indexesview;	
	global $concatOptions;
	global $rowMapper;
	$concatOptions = "";
	$nameOfColumns = "select column_name from information_schema.columns where table_name = '".$TableLike."'";
        $nameOfSelectedTable = $db->fetchAll($nameOfColumns);
//Mapping Column Names	

	$resultid = $db->fetchAll('select svid from station_variables where name = \'value\' and sid='.$id);//^M

	$resultid = $resultid[0]['svid'];
	
	for ($k = 0;$k<sizeOf($nameOfSelectedTable);$k++)
            $evalCol[$k] = $nameOfSelectedTable[$k]['column_name'];
	
	if($orderOn == $nameOfSelectedTable[0]['column_name'])

	{

 	    $orderOfColumns = "select \"$orderOn\" from \"$TableLike\"";
            $orderOfTable = $db->fetchAll($orderOfColumns);

    //Just Map It first

	    for($i = 0; $i<sizeof($orderOfTable); $i++)
	    {
	    	$rowMapper[$i] = $orderOfTable[$i][$orderOn];
	    }


	    $valueprice = explode(",",$value);
	    $slice  = sizeof($valueprice);	
	    
	    for($k = 0; $k < ($slice-1) ; $k++)
	        $rowI[$k] = $rowMapper[$valueprice[$k]];

/*	for($k =0; $k<strlen($value);$k++)
	    for($i =0; $i<=sizeof($orderOfTable);$i++)
	        if($i == $value[$k]) 
	        $rowI[$k] = $orderOfTable[$i][$orderOn];
*/
	}	
	if($options != "")
	{
	    for($i =0; $i<($slice-1);$i++)
            {
                //$insertSQL = "insert into $options select * from \"$TableLike\" where $orderOn = $value[$i];";
		//For id as a  year the only $order thing doesnt work so we need to pass it in the DOUBLE QUOTES 
                $insertSQL = "insert into $options select * from \"$TableLike\" where \"$orderOn\" = '$rowI[$i]';";
                $insertDB = $db->fetchAll($insertSQL);
		//$indexesview[$value[$i]] = 1;
		$indexesview[$rowI[$i]] = 1;
		//$indexesview[$valueprice[$i]] = 1;
		$concatOptions .= $rowI[$i].",";
            }
	}
	//$db->fetchAll("update station_variables set value = '$concatOptions' where svid = 2350");	
	$db->fetchAll("update station_variables set value = '$concatOptions' where svid = 2350");	


	//The structure after explode has information of one cell in 3 consecutive locations
	//The first one is the Name of the Column
	// the second one is the Name of the Row, Row Number
	// The third one is the Value which is changed
	$toggledOP = explode(",",$toggled);
	
	for($i = 0;$i<sizeof($toggledOP);$i = ($i+3))
	{
	    $toggledCol = $toggledOP[$i];
	
 	

	   $toggledCol = $evalCol[$toggledCol];
	   //$toggledCol = str_replace('_', '\_ ', $toggledCol);
	    //$db->fetchAll("update jobfinaldisplay set valuejob = '$toggledCol' where id = 8");	


	    //See the result of the toggled input, It behaves differently with text and integer <Single Quotes with and without >


	    $x = ($i+1);
	    $y= ($i+2);
	    $db->fetchAll("update jobfinaldisplay set valuejob = $resultid where id = 8");	
	    //$rowname = $rowI[$toggledOP[$x]];
	    $rowIndex = $toggledOP[$x];
	    $rowname  = $rowMapper[$rowIndex];
	//$answers = $indexesview[$valueprice[$toggledOP[$x]]];
	    $answers = $indexesview[$toggledOP[$x]];
	    
	    $db->fetchAll("update jobfinaldisplay set valuejob = '$indexesview[$rowname]' where id = 1");	
	    if($toggledOP[$y ] == "")
		$colvalue = 0;
	    else
	    $colvalue = $toggledOP[$y];
 //$insSQL = "update $options set \'$toggledCol\' = ".$toggledOP[$i+2]." where \'$orderOn\' = ".$toggledOP[$i+1];

            if($indexesview[$rowname] == 1)
	    {	// First we delete the existing row from the table if any, 
		//insert the row from the actual table
		// and then update the new value
		
		$indexesview[$rowname] = 0;
		$delSQL = "delete from  $options where \"$orderOn\" = '$rowname'";
         	$delDB = $db->fetchAll($delSQL);

		
  		$toggleSQL = "insert into $options select * from \"$TableLike\" where	\"$orderOn\" = '$rowname'";
        	$toggleDB = $db->fetchAll($toggleSQL);
	    }

	// $insSQL = "update $options set profit = 5 where prod =".$rowname;
	     $insSQL = "update $options set \"$toggledCol\" = '$colvalue' where \"$orderOn\" = '$rowname'";
             $insDB = $db->fetchAll($insSQL);
  	}	
//	$db->fetchAll("update station_variables set value = $reversedVal where svid = 2350");	
//	$db->fetchAll("update jobfinaldisplay set valuejob = '$toggledCol' where id = 1");	
	//$db->fetchAll("update station_variables set value = '$options' where svid = 2350");	
	$db->fetchAll("update jobfinaldisplay set valuejob = ".$valueprice." where id = 1");	
 //$result = $db->fetchAll('select sid from station_variables where "svid"=\'2350\'');//^M
       // workflow_input($result[0]['sid']);//^M
        //^M
        //return $concatOptions;//^M


   }
	
	// Creates a view and adds the entry in the existing table, if the name has   A MATCH it doesnt create any 
	// Also  if the viewtable is empty 
    function debug_print($val,$tablename,$viewname)
    {	
	global $db;
	//echo sizeof($val);
	//label1 : echo 'exiting'; 
	
	// Getting the names of the existing table view names created
	$querySQL = "select existingname from \"existingnames\"";
        $querydb = $db->fetchAll($querySQL);

	// Storing the size of the size of the exiting views table
	$sizequerydb = sizeof($querydb)+1;
	//$viewname ="view";
	

	if(($viewname)== "" || ($tablename==""))
	    goto label1;
	for($i = 0;$i< sizeof($querydb);$i++)
	{

	// Using the String compare method to check whether the existing table name is greater than equal to the new view name
	   $var = strcmp($viewname,($querydb[$i]['existingname']));
		//echo "Var".$var;
	    if($var == 0)
	        goto label1;
	}
	$newSQL = "create table $viewname (Like \"$tablename\" Including constraints);";
        $newDB = $db->fetchAll($newSQL);

	//adding the view name at the end of the table
	$insertSQL = "insert into existingnames values ($sizequerydb,'$viewname');";

        $insertDB = $db->fetchAll($insertSQL);
	//echo $tablename.$viewname;
	//echo "Yes Printing Successfully";
	//	else echo "<br>Shrijal Exits without making noise<br>";

	label1 : return; 
    }

    function place_input_viewtable($sid, $value, $options, $setup)	//function place_input_text($name, $value, $x, $y, $options, $sid)
    {
	global $db;
	global $markview;
	global $valueview;
	//Getting the table name to perform all the operations and printing it in Standard Format	
	$nameOfColumns = "select column_name from information_schema.columns where table_name = '".$options['tablename']."'";
        $nameOfSelectedTable = $db->fetchAll($nameOfColumns);

	//Fetching all the rows from the selected table	
	$table = $options['tablename'];	 
	$queryValues = "select * from \"$table\"";
	$val = $db->fetchAll($queryValues);


	//from the csv options taking/fetching all the options selected
	$fromSelectionCSV = $options['csv'];


	$dashboard_options = $options['dashboard_options'];
	$dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
	$dashboard_options['y'] = str_replace('px','',$dashboard_options['y']);
	$content = '<div id="cover'.$sid.'">';
//
//	echo '<div id="celement'.$sid.'" style=" border:'.$dashboard_options['loadingHighlightThickness'].' px solid 
//	'.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:20;
//	 top:'.($dashboard_options['y']+3).'px; left:'.($dashboard_options['x']+4).'px; 
//	width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; 
//	height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
	
//For Joining <can convert everything into a switch after finalizing>


	// This Number of columns are required for the final Join result 

	$join_length_query = "select count(*) from information_schema.columns where table_name = '".$options['tablename']."'";
	$join_length = $db->fetchAll($join_length_query);
	$numOfColsJoin = $join_length[0]['count'];
	
	
	$join_cols_query = "select column_name from information_schema.columns where table_name = '".$options['tablename']."'";
	$join_cols = $db->fetchAll($join_cols_query);
	
	for($i = 1 ; $i < count($fromSelectionCSV) ; $i++ )
	    for($j = 0 ; $j < 4 ; $j++)
           {
	 	if ($fromSelectionCSV[$i][$j]=="Join" && ($options['tablename'] != $fromSelectionCSV[$i][0] ))
		{ 
		    $tableNo1 = $options['tablename'];
		    $tableNo2 = $fromSelectionCSV[$i][0];
		    $OnClause = $fromSelectionCSV[$i][3];
			
	   	    for ($k = 0;$k<sizeOf($nameOfSelectedTable);$k++)
		    {
		        if ($nameOfSelectedTable[$k]['column_name']==$OnClause)
		            break;
		
		    }
		    if($k == (sizeOf($nameOfSelectedTable)))
		        break;
		    //can design the on clause and the type of join to be specified by the user	
	            $join_query = "select * from \"$tableNo1\" join \"$tableNo2\" on \"$tableNo1\".$OnClause = \"$tableNo2\".$OnClause";
	    	    $join_result = $db->fetchAll($join_query);
		    printTable($join_result,$join_cols); 
	        
		}
//For Sorting
		// it checks if the method name is Sort and 
		//the table name is different in the selection so that join is not on the same table
		if ($fromSelectionCSV[$i][$j]=="Sort" && ($options['tablename'] != $fromSelectionCSV[$i][0] ))
                {       $tableNo1 = $options['tablename'];
                        $tableNo2 = $fromSelectionCSV[$i][0];
                        $OnClause = $fromSelectionCSV[$i][3];
		
		//Checks if the column Name exists
                    for ($k = 0;$k<sizeOf($nameOfSelectedTable);$k++)
                    {
                        if ($nameOfSelectedTable[$k]['column_name']==$OnClause)
                            break;

                    }
                // If it reaches the size of the table their is no such column on which Sorting can be performed
		    if($k == (sizeOf($nameOfSelectedTable)))
                        break;
		
		// Returns the join result on the defined Clause 
                    $join_query = "select * from \"$tableNo1\" order by $OnClause";
                    $join_result = $db->fetchAll($join_query);
                    printTable($join_result,$join_cols);
       //         echo ($join_query);
                }

// For Transpose

		if($fromSelectionCSV[$i][$j]=="Transpose")
		    printTranspose($val,$nameOfSelectedTable);
			
	   }   
	
// the valueview and the markview array are used respectively  for specifying the field and the checkmark on it	

	for ($i = 0;$i<sizeOf($val);$i++)	
	{
	    $valueview[$i] = "n";
	    $markview[$i] = '';
//	    echo $valueview[$i];
	}	
// Need to pass the json encoded string into the particular svid sid combination
        $value = json_encode($valueview);
 	$select = $db->select();
        $columns['value']       = $value;
	$id = $setup['value_svid'];


        //$db->update("station_variables",$columns,'"svid"=\''.$id.'\'');//^M

// for debugging purposes
// 	    echo '<br>SVID =='.($id);  


/*

	    echo '<br><br><style> table,td {border:1px solid black;border-collapse:collapse}</style>';
	    echo '<table style ="width:350px">';
	    echo '<caption>'.$dashboard_options['TitleOfTable'].'</caption>';
	    echo '<tr bgcolor="'.$dashboard_options['HeaderColor'].'">';
	
		for ($i = 0;$i<sizeOf($nameOfSelectedTable);$i++)
	    	    echo '<td>'.$nameOfSelectedTable[$i]['column_name'].'</td>';
	
	    echo '</tr>';

	

	    for($j = 0; $j<sizeOf($val);$j++)	
	    {	
	        echo '<tr>';
  	    
	      	    for ($i = 0;$i<sizeOf($nameOfSelectedTable);$i++)	
	    		{
	        	echo '<td><input type = "text" value="'.$val[$j][$nameOfSelectedTable[$i]['column_name']].'"></td>';
	    		}	
	    
   	    	    if($valueview[$i] == "y")
			$markview[$i] = 'checked';
	            else
		 	$markview[$i] = '';
	    
	        echo '<td><input type = "checkbox" value="'.$valueview[$i].'" '.$markview[$i].'></td></tr>';
		
	    }	


	
	    echo '</table>';//
*/
     // val_viewtable(304,'0');
	    $content .= reload_input_viewtable($sid, $value, $options, $setup,$markview,$nameOfSelectedTable,$val);//
	    $content .=  '</div>';
//	    echo '</div>';
	
	    $content .= '	<script language="JavaScript" type="text/javascript">
				document.getElementById("celement'.$sid.'").style.border=\''.$dashboard_options['loadingHighlightThickness'].'px solid '.$dashboard_options['loadingHighlightColor'].'\';
				function update'.$sid.'(dashboard, response)
				{
					make_update(response.svid, response.value);
					reload_input_viewtable($sid, $value, $options, $setup,$markview,$nameOfSelectedTable,$val);//
				}
				function reload'.$sid.'(dashboard, response)
				{
					place_input(dashboard, '.$sid.', {\'onUpdate\': function(response,xmlhttp){reload_update'.$sid.'(response)}});
					make_update(response.svid, response.value);
					reload_input_viewtable($sid, $value, $options, $setup,$markview,$nameOfSelectedTable,$val);//
				}
				function mark'.$sid.'(dashboard, response)
				{
				//	document.getElementById("celement'.$sid.'").style.visibility=\'visible\';
	    				//reload_input_viewtable($sid, $value, $options, $setup,$markview,$nameOfSelectedTable,$val);//
				}
				function reload_update'.$sid.'(response)
				{	document.getElementById("cover'.$sid.'").innerHTML = response;
				//	document.getElementById("celement'.$sid.'").style.visibility=\'visible\';
					

	    				reload_input_viewtable($sid, $value, $options, $setup,$markview,$nameOfSelectedTable,$val);//
				}
			</script>';

	

	echo $content;



    }
    function printer_viewtable($val)
    {	
	global $db;
 	
	$db->fetchAll("update jobsfinaldisplay set valuejob = $val where id = 1");
//	echo $val;
    }


//the function printTable() prints a table the signature being function_name(RowName, ColumnName)
    function printTable($row,$col)
    {
	//Inside the Printing table function 
	//echo "Starting to print the table".$name;

        $concat  = '<br><br><style> table,td {border:1px solid black;border-collapse:collapse}</style>';
        $concat .= '<table style ="width:350px">';
        $concat .= '<tr>';
        
	    for ($i = 0;$i < sizeOf($col); $i++)
                $concat .= '<td><input type = "checkbox" value="'.$col[$i]['column_name'].'">'.$col[$i]['column_name'].'</td>';
        
	$concat .= '</tr>';
        
	    for($j = 0; $j<sizeOf($row);$j++)
            {
                $concat .= '<tr>';
        
	        for ($i = 0;$i<sizeOf($col);$i++)
                {
                    $concat .= '<td>'.$row[$j][$col[$i]['column_name']].'</td>';

                }
                $concat .= '</tr>';
            }

        $concat .= '</table>';//^M
	
	echo $concat;
    }

    //Printing Transpose of the function the signature accepts (RowName,ColumnName) 

    function printTranspose($val,$name)
    {

	$concat = 'printing in a Concatenated Style ';
        $concat .= 'Inside the Transpose function';

        $concat .= '<br><br><style> table,td {border:1px solid black;border-collapse:collapse}</style>';
        $concat .=  '<table style ="width:350px"><tr>';
     

            for($j = 0; $j<sizeOf($name);$j++)
            {
                $concat .= '<tr>';
        	    for ($i = 0;$i<sizeOf($val);$i++)
        	    {
            	        $concat .='<td>'.$val[$i][$name[$j]['column_name']].'</td>';

        	    }
                $concat .='</tr>';
            }

        $concat .='</table>';//^M
        echo $concat;
    }


    function reload_input_viewtable($sid, $value, $options, $setup, $markview, $nameOfSelectedTable,$val)	//function reload_input_text($name, $value, $x, $y, $options, $sid)k
    {
    //Toggle Logic
	
	//echo "Entering reload Input Table";

	global $db; 
        global $valueview;
        $dashboard_options = $options['dashboard_options'];
    //Need to capture the markers yes and no and based on that create a view
        $decodedArray = json_decode($value);
	$sendValue = $options;
	unset($sendValue['dashboard_options']);
	/*
	*/
	//echo $options['dashboard_options']; 
	
      	//validate_viewtable(304,2);
	$sendingArray = json_encode($decodedArray);
        //$content = '<div id="element'.$sid.'" style="'.($dashboard_options['css']).'z-index:10;  
	//top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; ">
        //<INPUT CLASS=SmallInput STYLE="'.($dashboard_options['css']).'text-align: left;width:'.$dashboard_options['width'].'px;
	//height:'.$dashboard_options['height'].'px; TYPE="text" id="'.$setup['value_svid'].'" value="'.($decodedArray[2]).'" 
	//onchange="validate_viewtable(this.id, this.value, {\'onUpdate\': function(response,xmlhttp)});">
        //</div>';
 
        
	



        $nameOfColumns = "select column_name from information_schema.columns where table_name = '".$options['tablename']."'";
        $nameOfSelectedTable = $db->fetchAll($nameOfColumns);

        $table = $options['tablename'];

	$orderOn = $nameOfSelectedTable[0]['column_name'];

	
	//echo "Before the OrderOn Checks";

        $orderOfColumns = "select \"$orderOn\" from \"$table\"";
        $orderOfTable = $db->fetchAll($orderOfColumns);

    //Just Map It first

    //
        for($i = 0; $i<sizeof($orderOfTable); $i++)
        {
            $rowMapper[$i] = $orderOfTable[$i][$orderOn];
        }



	







	//echo "Before the string Checks";
////////////////////////uncomment this for ORDER BY /////////////////////////////*
	$dashboard_options = $options['dashboard_options'];
	    if($dashboard_options['orderby'] == "")
	
        	$queryValues = "select * from \"$table\"";
       //         $queryValues = "select * from \"$table\" order by ".$nameOfSelectedTable[0]['column_name'];
        
	    else
	    	$queryValues = "select * from \"$table\" order by $dashboard_options[orderby]";
        
	$val = $db->fetchAll($queryValues);
///////////////////uncomment this for ORDER BY ///////////////////////////////
	
	// Parses the string of which table row is checked or unchecked and depending
	// on the length of the String gets the already marked value	
 

	// The variable resultid contains the correct svid of the input which is currently hardcoded

	$resultid = $db->fetchAll('select svid from station_variables where name = \'value\' and sid='.$sid);//^M

        $resultid = $resultid[0]['svid'];
//	echo $resultid;

	$checkSQL = "select value from station_variables where sid = $sid and svid = 2350";		
	$checkDB = $db->fetchAll($checkSQL);

	$stringCheck = $checkDB[0]["value"];

	echo '<br>'.$stringCheck.'<br>';
	//First it checks if Nothing is marked it exits
            if($stringCheck != "99999")
            {
//      echo $stringCheck[0];
		$explodedString = explode(",",$stringCheck);
                //$lengthOfCheck = (strlen($checkDB[0]["value"]));
                $lengthOfCheck = sizeof($explodedString);
        // As when storing it is stored in reverse
        //for($k = 0; $k<sizeof($orderOfTable); $k++)
                for($i = $lengthOfCheck ; $i > 0; $i --)
        	    for($k = 0; $k<sizeof($orderOfTable); $k++)
                    {
                    	$valueChecked = $explodedString[$i-1];
			//echo $valueChecked;
			    	if($valueChecked == $rowMapper[$k])
            

				{	

		    		    $valueview[$k] = 'y';
                    		    $markview[$k] = 'checked';
                		}
          	    }	

    	    }/**/

/*	



*/
	/*
	
	*/


	// the javascript function handleClick does check which values are check marked
	// check.id does store the id mark
	// check.checked stores the boolen true or false



	//function caller takes care of which text values are changed
	// the index 0 and 1 stores the i and the j value
	// and text.value stores the changed value


	// Stores the View Name Here 


	//CONSTRUCTION SECTION +++
	//aDD++
	// THE FUNCTION PARAMETERS CAN BE SOMETIMES PASSED AS NULLS
	//THE CHECKED IN STATUSES CAN BE PASSED AS A COMMA SEPARATED STRING
	//sUB--
	// the dependencies if any
	// unwanted code and DB Connections

	//echo "Passing the string Checks";
    	$viewname = $dashboard_options['ViewName'];
        
	$content = '	
		<script language="JavaScript" type="text/javascript">
        	var array = new Array();
		var toggledHandler = new Array(2);
		var counter = 0;
		
		function handleClick(cb) 
		{
 		    displayEvent("Toggled "+ cb.id +" to "+ cb.checked);
		    array[cb.id] = cb.checked;
		
		    //document.write(array[cb.id]);
		
			if(cb.checked == "true") return 1;
			else return 0;
		
		    //return(cb.checked);
		}
		
		function displayEvent(clickedEvent) 
		{
		    var p = document.createElement(\'p\');
  		    p.innerHTML = clickedEvent;
  		    document.body.appendChild(p);
 		}
		
		function caller(text)
		{	
		    var i ="" ,j="";
		    var splitt = text.id.indexOf(",");
		    
		    // document.write("Split is"+splitt);
	   	    //var splitt = (sub).split(",");

			for(var k = 0; k < splitt; k++)
		    	    i += text.id[k];
		
			for(var k = splitt+1; k < text.id.length; k++)
		    	    j += text.id[k];
		   
		    // document.write("Split is"+splitt);
		    toggledHandler[counter] = new Array(2);
			
		    // it stores the values in a 2 dimensional format with row name as selected values and 3 cols
		    // having the row column and the value	
		    
		    toggledHandler[counter][0]= i;	
		    toggledHandler[counter][1]= j;	
		    toggledHandler[counter][2]= text.value;
		    
		    counter = counter+1;
		 
		    //document.write(i+" and "+j+"and the text value is "+text.value+"Counter"+counter);
		}
		
		function sleep(milliseconds) 
		{   // checks the current time stores it in the start variable
		    var i;
  		    var start = new Date().getTime();
  		    for (i = 0; i < 1e7; i++)
		    {   // loops till a high number(1e7) and ticks(i++) every millisecond to check when is the limit exceeded
    		    	if ((new Date().getTime() - start) > milliseconds)
      			    break;
    		
  		    }
		}
	
		</script>';
       // $content .= "Value going into validation is ".$sendingArray;
        $content .= '<br><br><style> table,td {border:1px solid black;border-collapse:collapse}</style>';

 	$content .= '<div id="element'.$sid.'" style="z-index:10; position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).';"><div id="table'.$dashboard_options['css'].'" style="margin:0px; padding:0px;">';//^M




        $content.= '<table id = "tableelement'.$sid.'" width = "'.$dashboard_options['TableWidth'].'" border = "0" cellpadding = "1" cellspacing = "0">';
        //$content.= '<table id = "element'.$sid.'" width = "400px">';
	// This sets the title of the table
	$content .= '<caption>'.$dashboard_options['TitleOfTable'].'</caption>';
        $content .= '<tr bgcolor="'.$dashboard_options['HeaderColor'].'">';

            for ($i = 0;$i<sizeOf($nameOfSelectedTable);$i++)
                $content .= '<td>'.$nameOfSelectedTable[$i]['column_name'].'</td>';

        $content .= '</tr>';



            for($j = 0; $j<sizeOf($val);$j++)
            {
                $content .= '<tr bgcolor = "'.$dashboard_options['RowColor'].'">';
                //$content .= '<tr>';

                for ($i = 0;$i<sizeOf($nameOfSelectedTable);$i++)
                {
                    //To Set a particular column width uncomment the line below
		    //$content .= '<td width="100"><input type = "text" value="'.$val[$j][$nameOfSelectedTable[$i]['column_name']].'"></td>';
                    $content .= '<td width = "'.$dashboard_options['RowWidth'].'"><input id ="'.$i.','.$j.'" type = "text" style = "width : '.$dashboard_options['RowWidth'].'" value="'.$val[$j][$nameOfSelectedTable[$i]['column_name']].'" onChange = "caller(this)"></td>';
                }


                $content .= '<td><label for="cb"><input id ="'.$j.'" type = "checkbox" '.$markview[$j].' onClick = "var result = handleClick(this); "></label></td></tr>';

            }

	$tableLike = $options['tablename'];
	
	if(($dashboard_options['orderby']) != "")
	    $orderOn = $dashboard_options['orderby'];
	else
	    $orderOn = $nameOfSelectedTable[0]['column_name']; 
	
 	$name = $viewname;
        $content .= '</table></div></div>';//^M
	
	// Pass two variables size of view and viewname as parameters to the onClick function
	// The function stores each row id and passes it to be entered as a row in the view table through validate function
	//The row list is passed as a string and can be indexed by simply their positions
	//Incorporate the sid with the id in the input field to update the id each time


	$content .= '<button onClick ="output('.sizeof($val).',\''.$name.'\',\''.$orderOn.'\',\''.$tableLike.'\');">Invoke</button>';
        $content .= '<script type = "text/javascript">
		
	
	    function output(val,viewname,orderOn,tableLike)
	    {	
    	 	//alert(document.getElementById(1).id);
		var res = "";
		var view = viewname[0];
		//document.write(view);
		//document.write(orderOn);
		//document.write(tableLike);
		

		//Storing it as a string and retreiving the values by exploding the string 
		// Check exploding Vs Json encode <--> decode
	
	    	for(var i = 0 ;i < val ; i++)
		    {   
			if(document.getElementById(i).checked)
		        //res += i+"-->" + (document.getElementById(i).checked);
		        res +=  i+",";
		        //else
			//res += "";
		    }
		
		//res +=  (document.getElementById(i).checked);
		//document.write(toggledHandler[counter-1][2]);
		//document.write(toggledHandler);
		//document.write(orderOn);
		//document.write(val);
		//document.write(res);
		//var splitstring = res.split(",");
		//document.write(splitstring[7]);
		var toggle="";
		
	
		// Retrieving the values from the 2 dimensional array OF TOGGLEHANDLER
		for(var i = 0; i < counter; i++)	
		    for(var j = 0; j <= 2; j++)
			toggle += toggledHandler[i][j]+",";


		//document.write(toggle);		     
     		//validate_viewtable(304,res,{\'onUpdate\' : function(response,xmlhttp){make_update(\''.$sid.'\',response)}});
     		//validate_viewtable(304,viewname,{\'onUpdate\' : function(response,xmlhttp){make_update(\''.$sid.'\',response)}});

		//sleep(1000);
		// see various methods to reduce the parameter list. 1 is declaring function params as null
     		validate_viewtable(304,res,viewname,orderOn,tableLike,toggle,{\'onUpdate\' : function(response,xmlhttp){make_update(\''.$sid.'\',response)}});
	     	//validate_viewtable(304,splitstring[1],{\'onUpdate\' : function(response,xmlhttp){make_update(\''.$sid.'\',response)}});
	     	//validate_viewtable(304,splitstring[2],{\'onUpdate\' : function(response,xmlhttp){make_update(\''.$sid.'\',response)}});
	       	//validate_viewtable(304,0);
		
	    }
            </script>';
  
  	//$content = '<div id="element'.$sid.'" style="'.($dashboard_options['css']).'z-index:10;
        //top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; ">
        //<INPUT CLASS=SmallInput STYLE="'.($dashboard_options['css']).'text-align: left;width:'.$dashboard_options['width'].'px;
        //height:'.$dashboard_options['height'].'px; TYPE="text" id="'.$setup['value_svid'].'" value="'.($decodedArray[2]).'"
        //onchange="validate_viewtable(this.id, this.value, {\'onUpdate\': function(response,xmlhttp)});">
        //</div>';



	// $content .=  validate_viewtable(304,5,{\'onUpdate\' : function(response,xmlhttp){});';

	/*      for($j = 0; $j<sizeOf($val);$j++)
	*/




	$content .= debug_print($val,$options['tablename'],$dashboard_options['ViewName']);


        return($content);

    }

    function viewtable_rtrn_default_value($sid, $options)
    {
	global $db;	
	
    }
