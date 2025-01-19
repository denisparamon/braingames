<?php

namespace BrainGames\GameProgression;

use function BrainGames\Engine\greetUser;
use function BrainGames\Engine\playGame;

function playGameProgression()
{
    $name = greetUser();

    $description = "What number is missing in the progression?";

    $questionGenerator = function () {
        $progressionData = generateProgressionData();
        $progressionWithPass = $progressionData[0];
        $pass = $progressionData[1];

        return ['question' => implode(" ", $progressionWithPass), 'rightAnswer' => (string)$pass];
    };

    playGame($name, $description, $questionGenerator);
}

function generateProgressionData()
{
    $progression = [];
    $startNumber = rand(0, 20);
    $increase = rand(1, 10);
    $count = rand(5, 10);

    $progression[] = $startNumber;
    for ($i = 1; $i < $count; $i++) {
        $progression[] = $progression[$i - 1] + $increase;
    }

    $randomIndex = rand(0, $count - 1);
    $lostElement = $progression[$randomIndex];
    $progression[$randomIndex] = '..';

    return [$progression, $lostElement];
}