<?php
  /**
   * Main index file
   *
   * PHP version 5
   *
   * @category Decision_Theater_Software
   * @package  Csf
   * @author   Robert Pahle <robert.pahle@asu.edu>
   * @author   Rahul Salla <rahul.salla@asu.edu>
   * @license  https://github.com/rahulsalla/csf/blob/master/license.txt
   * @link     http://github.com/rahulsalla/csf
   **/

$browser = $_SERVER['HTTP_USER_AGENT'];

if (preg_match('/Chrome/i', $browser) == false) {
#    echo 'Warning: Using a browser other than Chrome is not supported...';
#    echo 'You are currently using '. $browser;
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

require_once "includes/optionFunctions.php";
require_once "includes/functions.php";

if (array_key_exists('dashboard', $_GET)) {
    $dashboard = $_GET['dashboard'];

    start_dashboard();
    put_javascript();
    place_inputs();
    place_vizs();
    stop_dashboard();
} else {
    show_dashboardlist();
}
