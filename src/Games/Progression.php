<?php

namespace BrainGames\Games\Progression;

use BrainGames\Engine;

const DESCRIPTION = 'What number is missing in the progression?';
const PROGRESSION_LENGTH = 10;

function genRoundData(): array
{
    $firstMember = rand(1, 25);
    $difference = rand(2, 15);
    $lastMemberIndex = PROGRESSION_LENGTH - 1;
    $hiddenMemberIndex = rand(0, $lastMemberIndex);
    $lastMember = $firstMember + $difference * $lastMemberIndex;
    $progression = range($firstMember, $lastMember, $difference);

    $answer = (string) $progression[$hiddenMemberIndex];
    $progression[$hiddenMemberIndex] = '..';
    $question = implode(' ', $progression);

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
