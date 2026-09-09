<?php

// Simule un combat complet entre deux guerriers jusqu'à la victoire de l'un des deux
include 'class/Warrior.php';

$gandalf = new Warrior("Gandalf");
$sauron = new Warrior("Sauron");

$round = 1;

// Le combat continue tant que les deux guerriers sont en vie
while ($gandalf->isAlive() && $sauron->isAlive()) {
    echo "<br>--------------------------<br><br>";

    // Alterne les attaques : tour impair = Gandalf, tour pair = Sauron
    if ($round % 2 !== 0) {
        $gandalf->attack($sauron);
    } else {
        $sauron->attack($gandalf);
    }

    $round++;

    // Sécurité anti-boucle infinie (au cas où les deux survivent trop longtemps)
    if ($round > 100) {
        echo "<br>Match nul, trop de rounds !<br>";
        break;
    }
}

echo "<br>--------------------------<br><br>";

// Annonce le gagnant final
if ($gandalf->isAlive()) {
    echo "<b>{$gandalf->name} a gagné !!</b>";
} else {
    echo "<b>{$sauron->name} a gagné !!</b>";
}