<?php

namespace BrainGames\GameCalc;

use function BrainGames\Engine\greetUser;
use function BrainGames\Engine\playGame;

function playGameCalc()
{
    $name = greetUser();

    $description = "What is the result of the expression?";

    $questionGenerator = function () {
        $operandOne = rand(0, 99);
        $operandTwo = rand(0, 99);
        $operatorsList = ['+', '-', '*'];
        $operator = $operatorsList[array_rand($operatorsList)];
        $expression = "$operandOne $operator $operandTwo";
        $result = (string)eval("return $expression;");

        return ['question' => $expression, 'rightAnswer' => $result];
    };

    playGame($name, $description, $questionGenerator);
}