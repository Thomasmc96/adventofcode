<?php

use CodeChallenge\Tests\SolutionHelper;
use CodeChallenge\Year2023Day04\Solution;

final class Year2023Day04SolutionPartOneTest extends SolutionHelper {
    public function testPartOneExample(): void {
        $reader = $this->givenReaderForFile('Year2023Day04', self::TEST_INPUT_FILENAME);
        $result = Solution::solvePartOne($reader);
        $this->assertEquals(13 , $result);
    }

    public function testPartOne(): void {
        $reader = $this->givenReaderForFile('Year2023Day04', self::INPUT_FILENAME);
        $result = Solution::solvePartOne($reader);
        $this->assertEquals(25004, $result);
    }
}
