<?php

namespace BrainGames\Games\Progression;

use function cli\line;
use function cli\prompt;

function greeting(): string
{
    line("Welcome to the Brain Game!");
    $name = prompt('May I have your name?');
    return $name;
}

function getPlayersAnswer(string $progression): string
{
    return prompt("What number is missing in the progression? $progression");
}

function generateProgression(): array
{
    // Генерация прогрессии
    $start = rand(1, 50);
    $step = rand(2, 10);
    $length = rand(5, 10); // Длина прогрессии от 5 до 10 чисел

    // Вычисление прогрессии
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start + $i * $step;
    }

    // Выбираем случайный индекс для скрытого числа
    $missingIndex = rand(0, $length - 1);
    $missingNumber = $progression[$missingIndex];

    // Заменяем скрытое число на '..'
    $progression[$missingIndex] = '..';

    return [
        'progression' => $progression,
        'missing' => $missingNumber
    ];
}

function isCorrect(string $playerAnswer, int $correctAnswer): bool
{
    return (int)$playerAnswer === $correctAnswer;
}

function congratulations(int $numberOfQuestions, string $playerName): void
{
    if ($numberOfQuestions === 3) {
        line("Congratulations, $playerName!");
    }
}
