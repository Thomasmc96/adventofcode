<?php

namespace CodeChallenge\Year2019Day01;

use CodeChallenge\AbstractSolution;
use CodeChallenge\Reader;
use Exception;

class Solution extends AbstractSolution {
    public static function solvePartOne(Reader $reader): mixed {
        $mass = [];
        $fuel = 0;
        foreach ($reader->getAsLines() as $line) {
            $line = intval($line);
            $line = floor($line / 3) - 2;
            $mass[] = $line;
        }

        foreach ($mass as $m) {
            $fuel += $m;
        }

        return $fuel + 2;
    }

    public static function solvePartTwo(Reader $reader): mixed {
        $mass = [];
        $fuel = 0;
        foreach ($reader->getAsLines() as $line) {
            $line = intval($line);
            $line = floor($line / 3) - 2;
            $mass[] = $line;

            while ($line > 0) {
                $line = floor($line / 3) - 2;
                if ($line <= 0) {
                    continue;
                }
                $mass[] = $line;
            }
        }

        foreach ($mass as $m) {
            $fuel += $m;
        }

        return $fuel + 2;
    }
}
