<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\runGame;

const DESCRIPTION = 'What number is missing in the progression?';
const PROGRESSION_LENGTH = 10;
const MIN_START = 1;
const MAX_START = 50;
const MIN_STEP = 1;
const MAX_STEP = 10;
const HIDDEN_SYMBOL = '..';

function generateProgression(int $start, int $step, int $length): array
{
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start + ($i * $step);
    }
    return $progression;
}

function generateGameData(): array
{
    $start = rand(MIN_START, MAX_START);
    $step = rand(MIN_STEP, MAX_STEP);
    $hiddenIndex = rand(0, PROGRESSION_LENGTH - 1);

    $progression = generateProgression($start, $step, PROGRESSION_LENGTH);
    $correctAnswer = (string) $progression[$hiddenIndex];
    $progression[$hiddenIndex] = HIDDEN_SYMBOL;

    $question = implode(' ', $progression);

    return [$question, $correctAnswer];
}

function playProgressionGame(): void
{
    runGame(DESCRIPTION, 'BrainGames\Games\Progression\generateGameData');
}
