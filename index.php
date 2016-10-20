<?php
  /**
   * Main index file
   *
   * PHP version 5
   *
   * @package  Csf
   * @author   Robert Pahle <robert.pahle@asu.edu>
   * @author   Rahul Salla <rahul.salla@asu.edu>
   * @license  https://gdta.asu.edu/license.txt
   * @link     http://gdta.asu.edu/csf
   **/

$browser = $_SERVER['HTTP_USER_AGENT'];

if (preg_match('/Chrome/i', $browser) == false) {
#    echo 'Warning: Using a browser other than Chrome is not supported...';
#    echo 'You are currently using '. $browser;
}

if (!array_key_exists('id', $_GET)) {
    header('Location: '.$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'].'&id='.time());
}

if (array_key_exists('dashboard', $_GET)) {
    $dashboard = $_GET['dashboard'];
} else {
    $dashboard = '';
}

if (array_key_exists('setup', $_GET)) {
    $setup = $_GET['setup'];
} else {
    $setup = '';
}

if (array_key_exists('id', $_GET)) {
    $idvalue = $_GET['id'];
} else {
    $idvalue = '';
}

if (array_key_exists('uid', $_GET)) {
    $uid = $_GET['uid'];
} else {
    $uid = '';
}


require_once "includes/optionFunctions.php";
require_once "includes/functions.php";

#$_SESSION['demo'] = 'test';


#var_dump($_SESSION);
#die();


if (array_key_exists('dashboard', $_GET)) {
    $dashboard = $_GET['dashboard'];
    
    require_once("includes/user.php");
    checkauth('dashboard='.$dashboard);

    start_dashboard();
    start_options_javascript();
    put_javascript();
    echo place_inputs();
    echo place_vizs();
    stop_dashboard();
} else {

    require_once("includes/user.php");
    checkauth('dashboard_list');

    show_dashboardlist();
}
