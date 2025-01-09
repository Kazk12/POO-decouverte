<?php

include_once('../utils/autoloader.php');

$myFormule1 = new Formule1(0);

// $myFormule1 -> drive()->shiftGear(4)->drive();

echo $myFormule1 ->drive();
$myFormule1 -> shiftGear(40);
echo $myFormule1 ->drive();

$myFormule1 -> shiftGear(50);
echo $myFormule1 ->drive();






