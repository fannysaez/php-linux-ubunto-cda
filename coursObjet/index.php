<?php

include 'class/Animal.php';

$milou = new Animal('toto',5,3);
// var_dump($milou);
$milou->getName();
$milou->setName(newName: 'Fred');
$milou->setNombrePattes(newNombrePattes: 4);
// $milou->name = "Garfield";
// var_dump($milou);

$milou->description();