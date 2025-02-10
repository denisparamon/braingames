<?php

namespace BrainGames\Games\Calc;

use BrainGames\Engine;

const DESCRIPTION = 'What is the result of the expression?';

const OPERATORS = ['+', '-', '*'];

function calculate(string $operator, int $a, int $b): int
{
    switch ($operator) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        default:
            throw new \Exception('Operator not found');
    }
}

function genRoundData(): array
{
    $number1 = rand(1, 25);
    $number2 = rand(1, 25);
    $operatorIndex = rand(0, count(OPERATORS) - 1);
    $operator = OPERATORS[$operatorIndex];
    $question = "{$number1} {$operator} {$number2}";
    $answer = (string) calculate($operator, $number1, $number2);

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