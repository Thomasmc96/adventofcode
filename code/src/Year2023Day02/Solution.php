<?php

namespace CodeChallenge\Year2023Day02;

use CodeChallenge\AbstractSolution;
use CodeChallenge\Reader;

class Solution extends AbstractSolution {
    public static function solvePartOne(Reader $reader): int {
        $lines = $reader->getAsLines();

        $game_ids_value = 0;

        foreach ($lines as $pos => $line) {
            if ($pos + 1 === count($lines)) {
                continue;
            }

            $first_exp = explode(': ', $line);
            $game_id_part = $first_exp[0];
            $game_id = explode('Game ', $game_id_part)[1];
            $sets = explode('; ', $first_exp[1]);

            $bad_game = false;
            foreach ($sets as $set) {
                $cubes = explode(', ', $set);

                foreach ($cubes as $cube) {
                    $cube_exp = explode(' ', $cube);
                    $amount = $cube_exp[0];
                    $color = $cube_exp[1];

                    if ($color === 'red' && $amount > 12) {
                        $bad_game = true;
                    }
                    if ($color === 'green' && $amount > 13) {
                        $bad_game = true;
                    }
                    if ($color === 'blue' && $amount > 14) {
                        $bad_game = true;
                    }
                }
            }

            if (!$bad_game) {
                $game_ids_value += intval($game_id);
            }
        }

        return $game_ids_value;
    }

    public static function solvePartTwo(Reader $reader): int {
        $lines = $reader->getAsLines();

        $total = 0;

        foreach ($lines as $pos => $line) {
            if ($pos + 1 === count($lines)) {
                continue;
            }

            $first_exp = explode(': ', $line);
            $sets = explode('; ', $first_exp[1]);

            $red = 0;
            $green = 0;
            $blue = 0;

            foreach ($sets as $set) {
                $cubes = explode(', ', $set);

                foreach ($cubes as $cube) {
                    $cube_exp = explode(' ', $cube);
                    $amount = intval($cube_exp[0]);
                    $color = $cube_exp[1];

                    if ($color === 'red' && ($amount > $red || $red === 0)) {
                        $red = $amount;
                    }
                    if ($color === 'green' && ($amount > $green || $green === 0)) {
                        $green = $amount;
                    }
                    if ($color === 'blue' && ($amount > $blue || $blue === 0)) {
                        $blue = $amount;
                    }
                }
            }

            $total += ($red * $green * $blue);
        }

        return $total;
    }
}
