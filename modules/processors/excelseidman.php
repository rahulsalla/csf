

<?
if(isset($dashboard_setup)) {
    function getsetup_module_excelseidman() {
#---------- set the parameters that you want here -------

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
#file has to be adapted for the new version
/*
        $a = mt_rand();
        $t = filemtime ('/home/htdocs/projects/azsmart/intercom/newupdatedone.csv');
        $fp = fopen('/home/htdocs/projects/azsmart/intercom/newupdate.csv', 'w');
        fwrite($fp, $a);
        fclose($fp);
        $m = filemtime ('/home/htdocs/projects/azsmart/intercom/newupdatedone.csv');
        while($t == $m)
        {
                sleep(1);
                clearstatcache();
                $m = filemtime ('/home/htdocs/projects/azsmart/intercom/newupdatedone.csv');
        }
*/

# Make sure to write the data into a table 
#---------- end of userdefined content ------------------

workflow_done($sid);
}