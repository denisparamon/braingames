<?php

namespace BrainGames\Games\Prime;

use BrainGames\Engine;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    for ($divisor = 2; $divisor <= sqrt($number); $divisor += 1) {
        if ($number % $divisor === 0) {
            return false;
        }
    }

    return true;
}

function genRoundData(): array
{
    $number = rand(0, 99);
    $question = (string) $number;
    $answer = isPrime($number) ? 'yes' : 'no';

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
