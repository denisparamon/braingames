<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\runGame;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';
const MIN_NUMBER = 1;
const MAX_NUMBER = 100;

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function generateGameData(): array
{
    $number = rand(MIN_NUMBER, MAX_NUMBER);
    $question = (string) $number;
    $correctAnswer = isEven($number) ? 'yes' : 'no';

    return [$question, $correctAnswer];
}

function playEvenGame(): void
{
    runGame(DESCRIPTION, 'BrainGames\Games\Even\generateGameData');
}
