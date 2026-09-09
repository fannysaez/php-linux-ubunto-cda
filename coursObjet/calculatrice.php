<?php

include 'class/Calculatrice.php';

$calc = new Calculatrice(10, 5);

echo "Addition : " . $calc->add() . "<br>";
echo "Soustraction : " . $calc->subtract() . "<br>";
echo "Multiplication : " . $calc->multiply() . "<br>";
echo "Division : " . $calc->divide() . "<br>";
