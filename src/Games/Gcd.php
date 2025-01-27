<?php

namespace BrainGames\Games\Gcd;

use function cli\line;
use function cli\prompt;

function greeting(): string
{
    line("Welcome to the Brain Game!");
    $name = prompt('May I have your name?');
    return $name;
}

function getPlayersAnswer(string $expression): string
{
    return prompt("What is the greatest common divisor of the following numbers? $expression");
}

function calculateGcd(int $a, int $b): int
{
    while ($b !== 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function isCorrect(string $playerAnswer, int $correctAnswer): bool
{
    return (int)$playerAnswer === $correctAnswer;
}

function congratulations(int $numberOfQuestions, string $playerName): void
{
    if ($numberOfQuestions === 3) {
        line("Congratulations, $playerName!");
    }
}
