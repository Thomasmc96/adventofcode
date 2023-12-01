<?php

use CodeChallenge\Tests\SolutionHelper;
use CodeChallenge\Year2023Day01\Solution;

final class Year2023Day01SolutionPartOneTest extends SolutionHelper {
    // public function testPartOneExample(): void {
    //     $reader = $this->givenReaderForFile('Year2023Day01', self::TEST_INPUT_FILENAME);
    //     $result = Solution::solvePartOne($reader);
    //     $this->assertEquals(142 , $result);
    // }

    public function testPartOne(): void {
       $reader = $this->givenReaderForFile('Year2023Day01', self::INPUT_FILENAME);
       $result = Solution::solvePartOne($reader);
       $this->assertEquals(55538, $result);
    }
}
