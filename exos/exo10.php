<?php
//Exercice 10 : Mot palindrome

$mot = 'radar';

$mot = strtolower($mot);
$mot_inverse = strrev($mot); //inverse la chaîne de caractères

if ($mot == $mot_inverse) {
    echo "$mot est un palindrome";
} else {
    echo "$mot n'est pas un palindrome";
}

//Explications :
// strtolower() : met en minuscules.
// Comparaison == : si le mot égale (inverse), c'est un palindrome.