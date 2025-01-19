<?php

namespace BrainGames\GameGCD;

use function BrainGames\Engine\greetUser;
use function BrainGames\Engine\playGame;

function playGameGCD()
{
    $name = greetUser();

    $description = "Find the greatest common divisor of given numbers.";

    $questionGenerator = function () {
        $numberOne = rand(0, 99);
        $numberTwo = rand(0, 99);
        $numbers = "$numberOne $numberTwo";
        $result = gcd($numberOne, $numberTwo);

        return ['question' => $numbers, 'rightAnswer' => $result];
    };

    playGame($name, $description, $questionGenerator);
}

function gcd(int $a, int $b)
{
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return (string)$a;
}