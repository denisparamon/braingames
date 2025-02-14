<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\runGame;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';
const MIN_NUMBER = 1;
const MAX_NUMBER = 100;
const FIRST_PRIME = 2;

function isPrime(int $number): bool
{
    if ($number < FIRST_PRIME) {
        return false;
    }
    for ($i = FIRST_PRIME; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function generateGameData(): array
{
    $number = rand(MIN_NUMBER, MAX_NUMBER);
    $question = (string) $number;
    $correctAnswer = isPrime($number) ? 'yes' : 'no';

    return [$question, $correctAnswer];
}

function playPrimeGame(): void
{
    runGame(DESCRIPTION, 'BrainGames\Games\Prime\generateGameData');
}
