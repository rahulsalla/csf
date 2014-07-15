<?
if(isset($dashboard_setup)) {
    function getsetup_module_test() {

/* example options:
	$options['_CREDITS']				= 'Please place your credits here. For more information go to <a href="http://dt.asu.edu">Decision Theater</a> homepage';

	$options['_MODULEDESCRIPTION']			= 'This a template module. Please place a detailed description here';

        $options[10]['name']                            = 'tablename';
        $options[10]['description']                     = 'table name';
        $options[10]['detail']                          = 'Run LISAS from this table';
        $options[10]['type']                            = 'Text';
        $options[10]['link']                            = 'link to further information..?';
        $options[10]['lookup']                          = '';
        $options[10]['default']                         = '';
        $options[10]['optional']                        = 'no';
        $options[10]['repeatable']			= 'no';
        $options[10]['perdashboard']			= 'no';
        $options[10]['dependenton']                     = '';
*/

#---------- set the parameters that you want here -------

#---------- end setting parameters ----------------------
	return($options);
    }
} else {
    if(isset($_GET['id'])) {
	require_once('../../includes/environment.php');
	$sid	 = $_GET['id'];
    } else {
	require_once('includes/environment.php');
	$sid	 = $argv[1];
    }

# get current options, inputs and simple results
    $data	 = get_inputs($db, $sid);
    $options     = $data['_OPTIONS'];
    $variables	 = get_simple_results($db);

#---------- add your content here -----------------------



# Make sure to write the data into a table 
#---------- end of userdefined content ------------------

    workflow_done($sid);
}
