<?php
//Exercice 20 : Morpion en console (grille fixe)

$grille = [
    ['X', 'O', 'X'],
    [' ', 'X', ' '],
    ['O', 'O', 'O']
];

// Affichage de la grille
foreach ($grille as $ligne) {
    echo "<pre>";
    echo implode(' | ', $ligne) . "\n";
    echo "<pre>";
}

echo "<pre>";
echo "\n";
echo "<pre>";

$gagnant = null;

// Vérification des lignes
for ($i = 0; $i < 3; $i++) {
    if ($grille[$i][0] != ' ' && $grille[$i][0] == $grille[$i][1] && $grille[$i][1] == $grille[$i][2]) {
        $gagnant = $grille[$i][0];
    }
}

// Vérification des colonnes
for ($j = 0; $j < 3; $j++) {
    if ($grille[0][$j] != ' ' && $grille[0][$j] == $grille[1][$j] && $grille[1][$j] == $grille[2][$j]) {
        $gagnant = $grille[0][$j];
    }
}

// Vérification des diagonales
if ($grille[0][0] != ' ' && $grille[0][0] == $grille[1][1] && $grille[1][1] == $grille[2][2]) {
    $gagnant = $grille[0][0];
}
if ($grille[0][2] != ' ' && $grille[0][2] == $grille[1][1] && $grille[1][1] == $grille[2][0]) {
    $gagnant = $grille[0][2];
}

// Résultat
if ($gagnant !== null) {
    echo "<pre>";
    echo "Le gagnant est : $gagnant";
    echo "<pre>";
} else {
    echo "<pre>";
    echo "Aucun gagnant";
    echo "<pre>";
}

//Explications:
// $grille[$i][$j] : accède à la case en ligne $i, colonne $j (tableau multidimensionnel).
// Lignes : on compare les 3 cases de chaque ligne entre elles.
// Colonnes : on compare les 3 cases de chaque colonne entre elles.
// Diagonales : les 2 cas possibles (haut-gauche→bas-droit, et haut-droit→bas-gauche).
// On ignore les cases vides (' ') pour éviter un faux positif.