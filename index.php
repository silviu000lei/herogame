<?php

use App\Arena;
use App\Constants;
use App\SummonCharacter;

require_once __DIR__ . '/vendor/autoload.php';

$summonCharacter = new SummonCharacter();
$playerOne = $summonCharacter->summonOrderus();
$playerTwo = $summonCharacter->summonWildBeasts();
$arena = new Arena($playerOne, $playerTwo);
$arena->battle();

echo 'END GAME' . Constants::BREAK_LINE;