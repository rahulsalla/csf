<?php
require_once "FirePHPCore/FirePHP.class.php";

ob_start();

$firephp = FirePHP::getInstance(true);

$var = array('i'=>10, 'j'=>20, 'k'=>23);

$firephp->log($var, 'Poop');
$firephp->log('Some Plain Message');
$firephp->info('Info Message');
$firephp->warn('Warn Message');
$firephp->error('Error: das ist schrecklich du Esel'); 
$firephp->log('Message', 'Some Label');

?>

<P> I am testing firephp
