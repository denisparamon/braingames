<?php

namespace BrainGames\GameEven;

use function BrainGames\Engine\greetUser;
use function BrainGames\Engine\playGame;

function playGameEven()
{
    $name = greetUser();

    $description = 'Answer "yes" if the number is even, otherwise answer "no".';

    $questionGenerator = function () {
        $number = rand(0, 999);
        $isEven = $number % 2 === 0 ? 'yes' : 'no';

        return ['question' => $number, 'rightAnswer' => $isEven];
    };

    playGame($name, $description, $questionGenerator);
}