<?php

use CodeChallenge\Reader;
use CodeChallenge\SomeExampleSolution;

require __DIR__ . '/vendor/autoload.php';

$test_input = "test-input.txt";
$reader = (new Reader())
    ->readFile(__DIR__ . '/input/' . $test_input);

$result = $solution = SomeExampleSolution::solvePartOne($reader);

echo sprintf("Result: \033[01;31m%d\033[0m\n", $result);
