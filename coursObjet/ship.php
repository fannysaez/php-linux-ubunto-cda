<?php

include_once "class/StartWarsShip.php";
include_once "class/InterstellarShip.php";

$shipA = new StartWarsShip();
$shipB = new InterstellarShip();

echo "--- État initial ---<br>";

var_dump($shipA);
var_dump($shipB);

$shipA->moveLeft();
$shipB->moveLeft();
echo "Après moveLeft<br>";
var_dump($shipA);
var_dump($shipB);

$shipA->moveBackWard();
$shipB->moveBackWard();
echo "Après moveBackWard<br>";
var_dump($shipA);
var_dump($shipB);

$shipA->moveForward();
$shipB->moveForward();
echo "Après moveForward (1)<br>";
var_dump($shipA);
var_dump($shipB);

$shipA->moveForward();
$shipB->moveForward();
echo "Après moveForward (2)<br>";
var_dump($shipA);
var_dump($shipB);

$shipA->moveLeft();
$shipB->moveLeft();
echo "Après moveLeft (2)<br>";
var_dump($shipA);
var_dump($shipB);

echo "<br>--- Positions finales ---<br>";
$shipA->checkPosition();
$shipB->checkPosition();