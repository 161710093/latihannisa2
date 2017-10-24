<?php
require_once 'robot.php';

$robot1= new robot ('teloletelolet',20);
$robot2= new robot ('teoteoteoteot',40);

$robot1->set_berat(60);
$robot2->set_suara('holalala');

echo 'Berat robot adalah : '.$robot1->get_berat().'<br>';
echo 'Suara robot adalah :'.$robot2->get_suara().'<br>';