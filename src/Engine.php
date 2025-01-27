<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function greeting(): string
{
    line("Welcome to the Brain Game!");
    $name = prompt('May I have your name?');
    return $name;
}

function getPlayersAnswer(string $expression): string
{
    return prompt("What is the result of the expression? $expression");
}

function resultArrayCalc(int $first, int $second): array
{
    $expression = "$first + $second";
    $correctAnswer = $first + $second;
    return ['expression' => $expression, 'correctAnswer' => $correctAnswer];
}

function isCorrect(string $playerAnswer, int $correctAnswer): bool
{
    return (int)$playerAnswer === $correctAnswer;
}

function concratulations(int $numberOfQuestions, string $playerName): void
{
    if ($numberOfQuestions === 3) {
        line("Congratulations, $playerName!");
    }
}
