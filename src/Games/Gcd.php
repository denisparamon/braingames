<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\runGame;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';
const MIN_NUMBER = 1;
const MAX_NUMBER = 100;

function calculateGcd(int $a, int $b): int
{
    return $b === 0 ? $a : calculateGcd($b, $a % $b);
}

function generateGameData(): array
{
    $num1 = rand(MIN_NUMBER, MAX_NUMBER);
    $num2 = rand(MIN_NUMBER, MAX_NUMBER);

    $question = "{$num1} {$num2}";
    $correctAnswer = (string) calculateGcd($num1, $num2);

    return [$question, $correctAnswer];
}

function playGcdGame(): void
{
    runGame(DESCRIPTION, 'BrainGames\Games\Gcd\generateGameData');
}
