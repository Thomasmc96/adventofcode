<?php

namespace CodeChallenge\Year2021Day02;

use CodeChallenge\AbstractSolution;
use CodeChallenge\Reader;
use Exception;

class Solution extends AbstractSolution {
    public static function solvePartOne(Reader $reader): int {
        $lines = $reader->getAsLines();

        $x = 0;
        $y = 0;
        foreach ($lines as $line) {
            $parts = explode(' ', $line);
            $direction = $parts[0];
            $amount = intval($parts[1]);

            switch ($direction) {
                case 'forward':
                    $x += $amount;

                    break;
                case 'up':
                    $y -= $amount;

                    break;
                case 'down':
                    $y += $amount;

                    break;
                default:
                    throw new Exception('unhandled direction: ' . $direction);
            }
        }

        return $x * $y;
    }

    public static function solvePartTwo(Reader $reader): mixed {
        throw new Exception('not implemented yet');
    }
}
