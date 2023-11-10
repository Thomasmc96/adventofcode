<?php

namespace CodeChallenge\Year2020Day01;

use CodeChallenge\AbstractSolution;
use CodeChallenge\Reader;
use Exception;

class Solution extends AbstractSolution {
    public static function solvePartOne(Reader $reader): mixed {
        foreach ($reader->getAsLines() as $line_i) {
            foreach ($reader->getAsLines() as $line_j) {
                if ($line_i + $line_j === 2020) {
                    return $line_i * $line_j;
                }
            }
        }

        throw new Exception('somethings wrong');
    }

    public static function solvePartTwo(Reader $reader): mixed {
        foreach ($reader->getAsLines() as $line_i) {
            foreach ($reader->getAsLines() as $line_j) {
                foreach ($reader->getAsLines() as $line_k) {
                    if ($line_i + $line_j + $line_k === 2020) {
                        return $line_i * $line_j * $line_k;
                    }
                }
            }
        }

        throw new Exception('somethings wrong');
    }
}
