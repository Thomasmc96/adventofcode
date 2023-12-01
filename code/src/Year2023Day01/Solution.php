<?php

namespace CodeChallenge\Year2023Day01;

use CodeChallenge\AbstractSolution;
use CodeChallenge\Reader;
use Exception;

class Solution extends AbstractSolution {
    public static function solvePartOne(Reader $reader): int {
        $lines = $reader->getAsLines();

        $calibration_values = [];
        $calibration_sum = 0;

        foreach($lines as $line) {
            $numbers_in_line = [];
            $chars = str_split($line);
            foreach ($chars as $char) {
                if (is_numeric($char)) {
                    $numbers_in_line[] = $char;
                }
            }
            $first = (string)current($numbers_in_line);
            $last = (string)end($numbers_in_line);

            $calibration_values[] = $first . $last;
        }

        foreach($calibration_values as $value) {
            $calibration_sum += (int)$value;
        }

        return $calibration_sum;
            
    }

    public static function solvePartTwo(Reader $reader): int {
        $lines = $reader->getAsLines();

        $calibration_values = [];
        $calibration_sum = 0;

        foreach($lines as $line) {
            $line = "x" . $line;

            $numbers_in_line = [];
            $chars = str_split($line);
            foreach ($chars as $pos => $char) {
                if (is_numeric($char)) {
                    $numbers_in_line[$pos] = $char;
                }
            }

            $offset = 0;
            [$numbers_in_line, $offset] = self::findWord($line, 'one', '1', $numbers_in_line, $offset);
            [$numbers_in_line, $offset] = self::findWord($line, 'two', '2', $numbers_in_line, $offset);
            [$numbers_in_line, $offset] = self::findWord($line, 'three', '3', $numbers_in_line, $offset);
            [$numbers_in_line, $offset] = self::findWord($line, 'four', '4', $numbers_in_line, $offset);
            [$numbers_in_line, $offset] = self::findWord($line, 'five', '5', $numbers_in_line, $offset);
            [$numbers_in_line, $offset] = self::findWord($line, 'six', '6', $numbers_in_line, $offset);
            [$numbers_in_line, $offset] = self::findWord($line, 'seven', '7', $numbers_in_line, $offset);
            [$numbers_in_line, $offset] = self::findWord($line, 'eight', '8', $numbers_in_line, $offset);
            [$numbers_in_line, $offset] = self::findWord($line, 'nine', '9', $numbers_in_line, $offset);


            if(empty($numbers_in_line)) {
                continue;
            }

            $first = strval($numbers_in_line[min(array_keys($numbers_in_line))]);
            $last = strval($numbers_in_line[max(array_keys($numbers_in_line))]);

            $calibration_values[] = $first . $last;
        }

        foreach($calibration_values as $value) {
            $calibration_sum += intval($value);
        }

        return $calibration_sum;
    }

    /**
     * @param array<string>  $numbers_in_line
     * @return array{0: array<string>, 1: int}
     */
    private static function findWord(string $line, string $word, string $word_as_number, array $numbers_in_line, int $offset): array {
        if (strpos($line, $word)) {
            $pos = strpos($line, $word);
            $offset = $pos + strlen($word);
            $numbers_in_line[$pos] = $word_as_number;

            if ($pos && strpos($line, $word, $pos+1)) {
                $pos2 = strpos($line, $word, $pos+1);
                $offset = $pos2 + strlen($word);
                $numbers_in_line[$pos2] = $word_as_number;

                if ($pos2 && strpos($line, $word, $pos2+1)) {
                    $pos3 = strpos($line, $word, $pos2+1);
                    $offset = $pos3 + strlen($word);
                    $numbers_in_line[$pos3] = $word_as_number;
                    if ($pos3 && strpos($line, $word, $pos3+1)) {
                        $pos4 = strpos($line, $word, $pos3+1);
                        $offset = $pos4 + strlen($word);
                        $numbers_in_line[$pos4] = $word_as_number;

                        if ($pos4 && strpos($line, $word, $pos4+1)) {
                            $pos5 = strpos($line, $word, $pos4+1);
                            $offset = $pos5 + strlen($word);
                            $numbers_in_line[$pos5] = $word_as_number;
                        }
                    }
                }
            }
        }
        return [$numbers_in_line, $offset];
    }
}
