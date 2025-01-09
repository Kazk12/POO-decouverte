<?php 

include_once('../utils/autoloader.php');

$dog = new Chien(20, 5, 'pitbull');

// $dog -> info()->infoPlus()->crie();

echo $dog -> info();
echo '<br>';
echo $dog -> infoPlus();
echo '<br>';
echo $dog -> crie();
echo '<br>';

