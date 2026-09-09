<?php

include_once "class/Employe.php";
include_once "class/Commercial.php";
include_once "class/Manager.php";

$employe = new Employe("Martin", 1000);
$commercial = new Commercial("Najim", 2800, 25000, 0.10);
$manager = new Manager("Violaine", 4000);
$manager2 = new Manager("Sabrina", 3500); 

echo "--- État initial des objets ---<br>";
var_dump($employe);
var_dump($commercial);
var_dump($manager);

$manager->ajouterEmploye($employe);
$manager->ajouterEmploye($commercial);
$manager->ajouterEmploye($manager2); 

echo "<br>--- Manager après ajout de l'équipe ---<br>";
var_dump($manager);

echo "<br>--- Détails et salaires ---<br>";
echo $employe->getDetails() . "<br>";
echo $commercial->getDetails() . "<br>";
echo $manager->getDetails() . "<br>";

echo "<br>--- Total salaires de l'équipe (hors managers) ---<br>";
echo $manager->getTotalSalaires() . " €<br>"; 