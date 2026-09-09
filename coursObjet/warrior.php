<?php

include 'class/Warrior.php';

$gandalf = new Warrior("Gandalf");
var_dump($gandalf);

$sauron = new Warrior("Sauron");
var_dump($sauron);

// Première attaque
$gandalf->attack($sauron);

echo "Nom : " . $sauron->getName() . "<br>";
echo "PV : " . $sauron->getPv() . "/" . $sauron->getPvMax() . "<br>";
echo "Force : " . $sauron->getStrength() . "<br>";

var_dump($sauron);

echo "<br>--- Test des setters ---<br><br>";

// Modification de la force de Gandalf via le setter
$gandalf->setStrength(20);
echo "Nouvelle force de Gandalf : " . $gandalf->getStrength() . "<br>";

// Modification du nom via le setter
$gandalf->setName("Gandalf le Blanc");
echo "Nouveau nom : " . $gandalf->getName() . "<br>";

// Deuxième attaque avec la force augmentée
$gandalf->attack($sauron);
var_dump($sauron);

// Modification directe des PV via le setter (par exemple pour simuler un soin)
$sauron->setPv(50);
echo "<br>PV de Sauron forcés à 50 : " . $sauron->getPv() . "<br>";
var_dump($sauron);