<?php
//Exercice 17 : Deviner une lettre dans un mot

$mot = 'ordinateur';
$lettre = 'r';

$mot = strtolower($mot);
$lettre = strtolower($lettre);
$positions = [];

for ($i = 0; $i < strlen($mot); $i++) {
    if (substr($mot, $i, 1) == $lettre) {
        $positions[] = $i;
    }
}

//**Fonctions utiles** : 
//`strlen()`, `substr()`, boucle `for`, `strtolower()`