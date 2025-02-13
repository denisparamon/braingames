<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\runGame;

const DESCRIPTION = 'What is the result of the expression?';
const MIN_NUMBER = 1;
const MAX_NUMBER = 20;
const OPERATORS = ['+', '-', '*'];

function calculateExpression(int $num1, int $num2, string $operator): int
{
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        default:
            throw new \Exception("Unknown operator: {$operator}");
    }
}

function generateGameData(): array
{
    $num1 = rand(MIN_NUMBER, MAX_NUMBER);
    $num2 = rand(MIN_NUMBER, MAX_NUMBER);
    $operator = OPERATORS[array_rand(OPERATORS)];

    $question = "{$num1} {$operator} {$num2}";
    $correctAnswer = (string) calculateExpression($num1, $num2, $operator);

    return [$question, $correctAnswer];
}

function playCalcGame(): void
{
    runGame(DESCRIPTION, 'BrainGames\Games\Calc\generateGameData');
}
