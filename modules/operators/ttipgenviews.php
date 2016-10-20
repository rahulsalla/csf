<?
if(isset($dashboard_setup)) {
    function getsetup_module_ttipgenviews() {
        #---------- set the parameters that you want here -------
        $options['_CREDITS']				= 'Developed by Rahul Salla for DTN';

        $options['_MODULEDESCRIPTION']			= 'This module generates and feeds various table views for the hungry visualizations';

        $options[10]['name']                            = 'set the type';
        $options[10]['description']                     = 'Enter the Type number 1-GDP 2-Jobs 3-Exports';
        $options[10]['detail']                          = 'Run the views based on the type of data you are exporting to';
        $options[10]['type']                            = 'Integer';
        $options[10]['link']                            = 'link to further information..?';
        $options[10]['lookup']                          = '';
        $options[10]['default']                         = '1';
        $options[10]['optional']                        = 'no';
        $options[10]['repeatable']			            = 'no';
        $options[10]['perdashboard']			        = 'no';
        $options[10]['dependenton']                     = '';
    }
}
else {
    if(isset($_GET['id'])) {
        require_once('../../includes/environment.php');
        $sid	 = $_GET['id'];
    }
    else {
        require_once('includes/environment.php');
        $sid	 = $argv[1];
    }

    # get current inputs	
    $data	 = get_inputs($db);
    $variables	 = get_simple_results($db);

    #---------- add your content here -----------------------
    # Get relavant data 
    $state = $data['StateSelect'];
    $stateResult = $db->fetchAll("SELECT abbr FROM states WHERE id=$state");
    $stateText = $stateResult[0]["abbr"];

    $sector = $data['SectorSelect'];
    $sectorResult = $db->fetchAll("SELECT sector FROM sectors WHERE id=$sector");
    $sectorText = $sectorResult[0]["sector"];

    $scenario = $data['ScenarioSelect'];
    $absPer = $data['AbsPerSelect'];

    $scenario_lookup = array("2" => "val_ttip", "3" => "val_ttip_cars", "4" => "val_ttip_chems", "5" => "val_ttip_food", "6" => "val_ttip_fin");

    $tables = array("state_gdp_values", "state_jobs_values", "state_exports_values", "outcomes_text", "top_gdp", "top_jobs", "top_exports");
    
    foreach ($tables as $iter) {
        $db->fetchAll('delete from '.$iter);
    }
    
    $scenario_db_name = $scenario_lookup[$scenario];

    if($absPer == '0')
	$scenario_db_name_per = $scenario_db_name.'_per';
    else
	$scenario_db_name_per = $scenario_db_name;


    for($type = 1; $type < 4; $type ++) {
	$metricParts = explode("_", $tables[$type + 3]);
	$metric = $metricParts[1];
	$metricDescription = "(For $sectorText in $stateText)";
	$metricDescriptionSql = "UPDATE metric_bargraph_labels SET description='$metricDescription' WHERE metric='$metric'";

	switch($metric){
	case 'gdp':
	  $metricTitleText = "GDP ";
	  break;
	case 'jobs':
	  $metricTitleText = "Jobs Gained ";
	  break;
	case 'exports':
	  $metricTitleText = "Exports ";
	  break;
	default:
	  $metricTitleText = "Unknown ";
	}

	if($absPer == '0'){
	  $metricTitleText .= '(by %)';
	}
	else{
	  if($metric != 'jobs'){
	    $metricTitleText .= '(in USD)';
	  }
	}

	$visible = 'Negligible Impact on Top 5 ';

        if($state == 52) {
	    $metricTitleSql = "UPDATE metric_bargraph_labels SET graph_title='Top 5 States by $metricTitleText' WHERE metric='$metric'";
            # National View - Top 5 states graphs for GDP, Jobs and Exports
            $sql = 'insert into '.$tables[$type + 3].' select name,'.$scenario_db_name_per.' from (select state_id, '.$scenario_db_name_per.' from ttipall where type_id='.$type.' and sector_id='.$sector.' and state_id < 52 order by '.$scenario_db_name_per.' desc limit 5) p INNER JOIN states t on t.id = p.state_id';
           // var_dump($sql);
	  $db->fetchAll($sql);
	    $visible .= "States";
        }
        else if($state < 52) {
	    $metricTitleSql = "UPDATE metric_bargraph_labels SET graph_title='Top 5 Sectors by $metricTitleText' WHERE metric='$metric'";
            # State View - Top 5 sector graphs for GDP, Jobs and Exports
            $sql = 'insert into '.$tables[$type + 3].' select sector,'.$scenario_db_name_per.' from (select sector_id, '.$scenario_db_name_per.' from ttipall where state_id='.$state.' and type_id='.$type.' and sector_id < 21 order by '.$scenario_db_name_per.' desc limit 5) p INNER JOIN sectors t on t.id = p.sector_id';
	    #var_dump($sql);
	    $db->fetchAll($sql);
	    $visible .= "Sectors";
        }


	$visibleSql = 'select value from '.$tables[$type + 3];
	$results = $db->fetchAll($visibleSql);

	foreach($results as $result){
	  if($result['value'] != 0){
	    $visible = '';
	    break;
	  }
	}

	$visibleSql = "UPDATE notification_label_visible SET visible='$visible' WHERE metric='$metric'";
	$db->fetchAll($visibleSql);

	$db->fetchAll($metricTitleSql);
	$db->fetchAll($metricDescriptionSql);

        # Populate the table that the text outcomes use

	$stateSummSql = "SELECT val_today, fut_nottip, type_id, ".$scenario_db_name."_tot FROM state_summaries WHERE type_id=$type and state_id=$state";
	$stateSummResult = $db->fetchAll($stateSummSql);
	$stateSummVals = $stateSummResult[0];

	$ttipAllSql = "SELECT $scenario_db_name, ".$scenario_db_name."_per FROM ttipall WHERE type_id=$type and state_id=$state and sector_id=$sector";
	$ttipAllResult = $db->fetchAll($ttipAllSql);
	$ttipAllVals = $ttipAllResult[0];

	$sql = "INSERT INTO outcomes_text (val_today, val_fut_nottip, val_ttip, id, val_ttip_per, val_fut_ttip) VALUES (".$stateSummVals["val_today"].", ".$stateSummVals["fut_nottip"].", ".$ttipAllVals[$scenario_db_name].", ".$stateSummVals["type_id"].", ".$ttipAllVals[$scenario_db_name."_per"].", ".$stateSummVals[$scenario_db_name."_tot"].")";
	$db->fetchAll($sql);

        # Populate the values tables for the state heat map to use
        $sql = 'insert into '.$tables[$type - 1].' select state_id, '.$scenario_db_name_per.' from ttipall where sector_id='.$sector.' and type_id='.$type.' and state_id<52';
        $db->fetchAll($sql);
    }
    #---------- end of userdefined content ------------------

    workflow_done($sid);
}
