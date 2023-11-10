<?php

use CodeChallenge\Tests\SolutionHelper;
use CodeChallenge\Year2020Day01\Solution;

final class Year2020Day01SolutionPartOneTest extends SolutionHelper {
    public function testPartOneExample(): void {
        $reader = $this->givenReaderForFile('Year2020Day01', self::TEST_INPUT_FILENAME);
        $result = Solution::solvePartOne($reader);
        $this->assertEquals(514579, $result);
    }

    public function testPartOne(): void {
        $reader = $this->givenReaderForFile('Year2020Day01', self::INPUT_FILENAME);
        $result = Solution::solvePartOne($reader);
        $this->assertEquals(996996, $result);
    }
}
