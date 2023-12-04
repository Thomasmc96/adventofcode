<?php

namespace CodeChallenge\Year2023Day03;

use CodeChallenge\AbstractSolution;
use CodeChallenge\Reader;

class Solution extends AbstractSolution {
    public static function solvePartOne(Reader $reader): int {
        // $lines = $reader->getAsLines();
        // $values_and_symbols_pos = [];
        //
        // $splitted_lines = [];
        // foreach ($lines as $pos => $line) {
        //     if ($pos + 1 === count($lines)) {
        //         continue;
        //     }
        //
        //     $splitted_lines[] = str_split($line);
        // }
        // dump($splitted_lines);
        //
        // foreach ($splitted_lines as $line_pos => $line) {
        //     $char_pos_checked = [];
        //     foreach($line as $char_pos => $char) {
        //         if(in_array($char_pos, $char_pos_checked)) {
        //             continue;
        //         }
        //         $number = "";
        //         if (is_numeric($char)) {
        //             $number .= $char;
        //             $next_char = $line[$char_pos + strlen($number)];
        //
        //             while(is_numeric($next_char)) {
        //                 $char_pos_checked[] = $char_pos + strlen($number);
        //
        //                 $number .= $next_char;
        //                 $next_char = $line[$char_pos + strlen($number)];
        //
        //             }
        //             dump($number);
        //         $values_and_symbols_pos[$line_pos][$char_pos] = $number;
        //         }
        //
        //         if (!is_numeric($char) && $char !== '.') {
        //             $values_and_symbols_pos[$line_pos][$char_pos] = $char;
        //
        //         }
        //     }
        // }
        //
        // dump($values_and_symbols_pos);
        //
        // dump('::::::::::::::::::::.');
        //
        // $total = 0;
        // foreach ($values_and_symbols_pos as $line_pos => $line) {
        //     foreach ($line as $value_pos => $value) {
        //         if(is_numeric($value)) {
        //             // dump($value);
        //             $next_char = $value_pos + strlen($value);
        //             // dump($next_char);
        //             if ($splitted_lines[$line_pos][$next_char] !== '.' &&
        //                 !is_numeric($splitted_lines[$line_pos][$next_char]) &&
        //                 !empty($splitted_lines[$line_pos][$next_char])
        //             ) {
        //                 dump($line_pos, $next_char, $splitted_lines[$line_pos][$next_char]);
        //                 dump($value);
        //                 $total += $value;
        //                 continue;
        //             }
        //
        //             if ($splitted_lines[$line_pos][$value_pos - 1] !== '.' &&
        //                 !is_numeric($splitted_lines[$line_pos][$value_pos - 1]) &&
        //                 !empty($splitted_lines[$line_pos][$value_pos - 1])
        //             ) {
        //                 dump($line_pos, $value_pos - 1, $splitted_lines[$line_pos][$value_pos - 1]);
        //                 dump($value);
        //                 $total += $value;
        //                 continue;
        //             }
        //
        //             dump('***************');
        //             foreach (str_split($value) as $value_char_pos => $value_char) {
        //                 $next_line_char = $value_pos + ($value_char_pos + 1);
        //                 if ($splitted_lines[$line_pos + 1][$next_line_char] !== '.' &&
        //                     !is_numeric($splitted_lines[$line_pos+1][$next_line_char]) &&
        //                     !empty($splitted_lines[$line_pos+1][$next_line_char])
        //                 ) {
        //                     dump('yo');
        //                     dump($value);
        //                     dump($splitted_lines[$line_pos + 1][$next_line_char]);
        //                     dump('hey');
        //                     continue;
        //                 }
        //             }
        //
        //
        //         }
        //     }
        // }

        return 0;
    }

    public static function solvePartTwo(Reader $reader): int {
        // $lines = $reader->getAsLines();
        return 0;
    }
}
