<?php

include 'class/Car.php';
// 1. Création d'une voiture Peugeot de 50L
$car = new Car("Peugeot", 50.0);
var_dump($car);

// 2. Tente de rouler sans démarrer (Doit échouer)
$car->drive(20);
var_dump($car);
// 3. Démarre la voiture
$car->start();
var_dump($car);
// 4. Parcourt 100 km (Consomme 5L -> Reste 45L)
$car->drive(100);
var_dump($car);
// 5. Tente un long trajet de 1000 km (Panne sèche après 900 km, moteur cale)
$car->drive(1000);
var_dump($car);
// 6. Tente de redémarrer (Doit refuser car réservoir vide)
$car->start();
var_dump($car);
// 7. Fait le plein et redémarre
$car->refuel();
var_dump($car);
$car->start(); //redémarre
var_dump($car);
