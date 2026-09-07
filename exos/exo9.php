<?php
//Exercice 9 : Compter les voyelles
$phrase = 'Bonjour tout le monde';

$phrase = strtolower($phrase);
$lettres = str_split($phrase);
$voyelles = ['a','e','i','o','u','y'];
$compteur = 0;

foreach ($lettres as $lettre) {
    if (in_array($lettre, $voyelles)){
        $compteur++;
    }
}

echo "Nombre de voyelles : " . $compteur;

// Explications : 
// strtolower($phrase) : met en minuscules.
// str_split($phrase) : découpe la chaîne en tableau de lettres.
// $voyelles : tableau des lettres recherchées.
// foreach : parcourt chaque lettre.
// in_array() : vérifie si la lettre est une voyelle, incrémente $compteur si oui.