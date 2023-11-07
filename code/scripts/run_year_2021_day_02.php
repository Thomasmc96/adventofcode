#!/usr/bin/env php
<?php

use CodeChallenge\Reader;
use CodeChallenge\Year2021Day02\Solution;

require __DIR__ . '/.bootstrap.php';

$reader = (new Reader())
    ->readFile(__DIR__ . '/../input/Year2021Day02/test-input.txt');

$result = $solution = Solution::solvePartOne($reader);

echo sprintf("Result part one: \033[01;31m%d\033[0m\n", $result);
