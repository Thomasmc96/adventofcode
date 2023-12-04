<?php

namespace CodeChallenge\Year2023Day04;

use CodeChallenge\AbstractSolution;
use CodeChallenge\Reader;

class Solution extends AbstractSolution {
    public static function solvePartOne(Reader $reader): int {
        $lines = $reader->getAsLines();

        $total_points = 0;

        foreach ($lines as $card) {
            if (empty($card)) {
                continue;
            }

            $card_exp = explode(': ', $card);
            $card_id= $card_exp[0];
            $card_numbers = $card_exp[1];
            $card_numbers_exp = explode(' | ', $card_numbers);
            $winning_numbers = $card_numbers_exp[0];
            $my_numbers = $card_numbers_exp[1];

            $winning_numbers_array = explode(' ', $winning_numbers);
            $my_numbers_array = explode(' ', $my_numbers);

            $points = 0;
            $used_numbers = [];

            foreach ($my_numbers_array as $my_number) {
                if (in_array($my_number, $winning_numbers_array) && !in_array($my_number, $used_numbers) && !empty($my_number)) {
                    if($points === 0) {
                        $points = 1;
                    } else {
                        $points = $points * 2;
                    }

                    $used_numbers[] = $my_number;
                }
            }

            $total_points += $points;
        }

        return $total_points;
    }

    public static function solvePartTwo(Reader $reader): int {
        $lines = $reader->getAsLines();

        ini_set('memory_limit', '2228M');
        $extra_cards = [];

        foreach ($lines as $card) {
            if (empty($card)) {
                continue;
            }

            $card_exp = explode(': ', $card);
            $card_id_string = $card_exp[0];

            $card_id_string_split = preg_split("/\D+/", $card_id_string);

            if(empty($card_id_string_split)) {
                continue;
            }

            $filteredNumbers = array_filter($card_id_string_split);
            $card_id = intval(reset($filteredNumbers));

            // if($card_id === 4) {
            //     exit();
            // }
            $card_numbers = $card_exp[1];
            dump($card_id);
            $card_numbers_exp = explode(' | ', $card_numbers);
            $winning_numbers = $card_numbers_exp[0];
            $my_numbers = $card_numbers_exp[1];

            $winning_numbers_array = explode(' ', $winning_numbers);
            $my_numbers_array = explode(' ', $my_numbers);

            $matching_numbers = 0;

            $this_extra_card = [];
            foreach ($my_numbers_array as $my_number) {
                if (in_array($my_number, $winning_numbers_array) && !empty($my_number)) {

                    $matching_numbers++;
                    if($card_id + $matching_numbers > (count($lines) - 1)) {
                        continue;
                    }
                    $extra_cards[] = $card_id + $matching_numbers;
                }
            }



            foreach($extra_cards as $extra_card) {
                $matching_numbers = 0;

                if ($card_id === $extra_card) {
                    foreach ($my_numbers_array as $my_number) {
                        if (in_array($my_number, $winning_numbers_array) && !empty($my_number)) {

                            $matching_numbers++;
                            if ($card_id + $matching_numbers > (count($lines) - 1)) {
                                continue;
                            }
                            $extra_cards[] = $card_id + $matching_numbers;
                        }
                    }
                }
            }
            // dump($card_id);
            // dump($extra_cards);
        }
        //
        // sort($extra_cards);
        // dump($extra_cards);
        // dump(count($extra_cards));
        // dump(count($lines));

        return count($extra_cards) + count($lines) - 1;
    }
}
