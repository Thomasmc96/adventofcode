<?php

use CodeChallenge\Tests\SolutionHelper;
use CodeChallenge\Year2023Day02\Solution;

final class Year2023Day02SolutionPartOneTest extends SolutionHelper {
    public function testPartOneExample(): void {
        $reader = $this->givenReaderForFile('Year2023Day02', self::TEST_INPUT_FILENAME);
        $result = Solution::solvePartOne($reader);
        $this->assertEquals(8 , $result);
    }

    public function testPartOne(): void {
        $reader = $this->givenReaderForFile('Year2023Day02', self::INPUT_FILENAME);
        $result = Solution::solvePartOne($reader);
        $this->assertEquals(2237, $result);
    }
}
