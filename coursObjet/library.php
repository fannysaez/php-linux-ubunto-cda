<?php

include 'class/GameLibrary.php';

$julesLibrary = new GameLibrary(['sonic', 'mario'], owner: 'Jules');
$quentinLibrary = new GameLibrary(['kirby', 'pac man'], owner: 'Quentin');

var_dump($julesLibrary);
var_dump($quentinLibrary);

$julesLibrary->addGame(game: "Dark Souls");
var_dump($julesLibrary);

$julesLibrary->removeGame(game: "sonic");
var_dump($julesLibrary);

$julesLibrary->giveGame('mario', $quentinLibrary);

var_dump($julesLibrary);
var_dump($quentinLibrary);