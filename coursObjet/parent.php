<?php

include_once "class/Boat.php";

$boat1 = new Boat(brand: 'Peugeot', width: '5 mètres');

var_dump($boat1);

$boat1->test();
$boat1->info();

var_dump($boat1);