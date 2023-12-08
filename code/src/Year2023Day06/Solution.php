<?php

namespace CodeChallenge\Year2023Day06;

use CodeChallenge\AbstractSolution;
use CodeChallenge\Reader;

class Solution extends AbstractSolution {
    public static function solvePartOne(Reader $reader): int {
        $lines = $reader->getAsLines();

        $time = [];
        $distance = [];
        foreach ($lines as $pos => $line) {
            if (empty($line)) {
                continue;
            }

            $data = preg_split('/\s+/', $line);
            unset($data[0]);
            $data = array_values($data);
            if($pos === 0) {
            $time = $data;
            } else {
                $distance = $data;
            }
        }

        $waysToWinTotal = 0;

        foreach ($time as $pos => $t) {
            $waysToWin = 0;
            for($i = 0; $i <= intval($t); $i++) {
                $hold = $i;
                $travelTime = $t - $i;
                $travelDistance = $travelTime * $hold;
                if ($travelDistance > $distance[$pos]) {
                    $waysToWin++;
                }
            }

            if ($waysToWinTotal === 0) {
                $waysToWinTotal = $waysToWin;
            } else {
                $waysToWinTotal = $waysToWinTotal * $waysToWin;
            }

        }

        return $waysToWinTotal;
    }

    public static function solvePartTwo(Reader $reader): int {
        $lines = $reader->getAsLines();

        $time = [];
        $distance = [];
        foreach ($lines as $pos => $line) {
            if (empty($line)) {
                continue;
            }

            $data = preg_split('/\s+/', $line);
            unset($data[0]);
            $data = array_values($data);
            if($pos === 0) {
                $time = $data;
            } else {
                $distance = $data;
            }
        }

        $waysToWinTotal = 0;

        foreach ($time as $pos => $t) {
            $waysToWin = 0;
            for($i = 0; $i <= intval($t); $i++) {
                $hold = $i;
                $travelTime = $t - $i;
                $travelDistance = $travelTime * $hold;
                if ($travelDistance > $distance[$pos]) {
                    $waysToWin++;
                }
            }

            if ($waysToWinTotal === 0) {
                $waysToWinTotal = $waysToWin;
            } else {
                $waysToWinTotal = $waysToWinTotal * $waysToWin;
            }

        }

        return $waysToWinTotal;
    }
}
