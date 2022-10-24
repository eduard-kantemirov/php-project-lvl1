<?php

use function cli\line;
use function cli\prompt;

function greeting() {
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

/**
 * @throws Exception
 */
function even(string $name) {
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $lose = false;
    for ($count = 0; $count < 3; $count++) {
        $number      = random_int(0, 9999);
        $even        = $number % 2;
        $rightAnswer = $even === 0 ? 'yes' : 'no';
        $answer      = prompt('Question: ' . $number);

        line("Your answer: %s", $answer);

        if ($answer === $rightAnswer) {
            line("Correct!");
        } else {
            line($answer . " is wrong answer ;(. Correct answer was " . $rightAnswer . ".");
            $lose = true;
            break;
        }
    }
    if (!$lose) {
        line("Congratulations, " . $name . "!");
    }
}