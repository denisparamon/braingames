#!/usr/bin/env php
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use function Brain\Games\Engine\greeting;
use function Brain\Games\Engine\getPlayersAnswer;
use function Brain\Games\Engine\concratulations;
use function Brain\Games\Engine\resultArrayCalc;
use function Brain\Games\Engine\isCorrect;

$playerName = greeting();
line('What is the result of the expression?');

for ($numberOfQuestions = 0; $numberOfQuestions < 3; $numberOfQuestions++) {
    $firstNumber = rand(0, 5);
    $secondNumber = rand(0, 5);
    $resultArr = resultArrayCalc($firstNumber, $secondNumber);
    $correctAnswer = $resultArr['correctAnswer'];
    $expression = $resultArr['expression'];

    $playerAnswer = getPlayersAnswer($expression);

    if (isCorrect($playerAnswer, $correctAnswer)) {
        line('Correct!');
    } else {
        line("'{$playerAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
        line("Let's try again, $playerName!");
        break;
    }
}

concratulations($numberOfQuestions, $playerName);
