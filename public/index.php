<?php

use App\Player;
use App\Game;

require_once("../vendor/autoload.php");

$p1 = new Player('Bob', 32);
$p2 = new Player('Stas', 60);

$game = new Game($p1, $p2);

$game->start();