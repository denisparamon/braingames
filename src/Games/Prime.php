<?php

namespace BrainGames\Games\Prime;

use function cli\line;
use function cli\prompt;

function greeting(): string
{
    line("Welcome to the Brain Game!");
    $name = prompt('May I have your name?');
    return $name;
}

function getPlayersAnswer(): string
{
    return prompt('Your answer (yes/no)');
}

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

function congratulations(int $numberOfQuestions, string $playerName): void
{
    if ($numberOfQuestions === 3) {
        line("Congratulations, $playerName!");
    }
}
