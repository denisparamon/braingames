<?php

namespace BrainGames\Games\Gcd;

use BrainGames\Engine;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function getGcd(int $a, int $b): int
{
    if ($b === 0) {
        return $a;
    }
    return getGcd($b, $a % $b);
}

function genRoundData(): array
{
    $number1 = rand(0, 50);
    $number2 = rand(0, 50);
    $question = "{$number1} {$number2}";
    $answer = (string) getGcd($number1, $number2);

    return [$question, $answer];
}

function runGame(): void
{
    $gameData = [];
    for ($i = 0; $i < Engine\ROUNDS_COUNT; $i += 1) {
        $gameData[] = genRoundData();
    }

    Engine\run(DESCRIPTION, $gameData);
}
