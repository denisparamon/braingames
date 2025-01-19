<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function greetUser()
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, $name");
    return $name;
}

function playGame(string $name, string $description, callable $questionGenerator)
{
    line($description);

    $countCorrectAnswers = 0;
    do {
        ['question' => $question, 'rightAnswer' => $rightAnswer] = $questionGenerator();
        $userAnswer = prompt("Question: $question");

        if ($userAnswer === $rightAnswer) {
            line("Correct!");
            $countCorrectAnswers++;
        } else {
            line("'$userAnswer' is wrong answer ;(. Correct answer was '$rightAnswer'.\nLet's try again, $name!");
            $countCorrectAnswers = 0;
        }
    } while ($countCorrectAnswers < 3 && $countCorrectAnswers > 0);

    if ($countCorrectAnswers === 3) {
        line("Congratulations, $name!");
    }
}