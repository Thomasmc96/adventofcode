<?php

namespace CodeChallenge;

abstract class AbstractSolution {
    abstract static public function solvePartOne(Reader $reader): mixed;

    abstract static public function solvePartTwo(Reader $reader): mixed;
}
