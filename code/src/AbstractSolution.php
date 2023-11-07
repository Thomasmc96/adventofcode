<?php

namespace CodeChallenge;

abstract class AbstractSolution {
    abstract public static function solvePartOne(Reader $reader): mixed;

    abstract public static function solvePartTwo(Reader $reader): mixed;
}
