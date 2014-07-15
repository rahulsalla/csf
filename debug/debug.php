<?php
require_once "FirePHPCore/FirePHP.class.php";

ob_start();

$firephp = FirePHP::getInstance(true);

$firephp->log('Debugging to FirePhp is enabled');

?>
