<?php


use App\Service\Arena;
use App\Service\SummonCharacter;
use App\Utility\Constants;

require_once __DIR__ . '/vendor/autoload.php';

$summonCharacter = new SummonCharacter();
$playerOne = $summonCharacter->summonOrderus();
$playerTwo = $summonCharacter->summonWildBeasts();
$arena = new Arena($playerOne, $playerTwo);
$arena->battle();

echo 'END GAME' . Constants::BREAK_LINE;