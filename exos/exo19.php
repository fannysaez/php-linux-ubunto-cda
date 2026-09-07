<?php
//Exercice 19 : Calculs successifs avec tableau d’opérations

$a = 12;
$b = 4;
$operations = ['+', '-', '*', '/'];

foreach ($operations as $operation) {
    $resultat = null;
    switch ($operation) {
        case '+':
            $resultat = $a + $b;
            break;
        case '-':
            $resultat = $a - $b;
            break;
        case '*':
            $resultat = $a * $b;
            break;
        case '/':
            if ($b != 0) {
                $resultat = $a / $b;
            } else {
                $resultat = "Erreur : division par zéro";
            }
            break;
    }
    echo "<pre>";
    echo "$a $operation $b = $resultat\n";
    echo "<pre>";
}

//Explications : 
// $resultat = null; ajouté au début de chaque tour de boucle : évite l'avertissement de VS Code et garantit que la variable existe toujours, même en théorie.
// Le switch calcule ensuite $resultat selon l'opération.
// L'echo est bien en dehors du switch, donc il s'exécute à chaque tour.