<?php

namespace BrainGames\GamePrime;

use function BrainGames\Engine\greetUser;
use function BrainGames\Engine\playGame;

function playGamePrime()
{
    $name = greetUser();

    $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $questionGenerator = function () {
        $number = rand(0, 999);
        $isPrime = isPrime($number) ? 'yes' : 'no';

        return ['question' => $number, 'rightAnswer' => $isPrime];
    };

    playGame($name, $description, $questionGenerator);
}

function isPrime(int $number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}