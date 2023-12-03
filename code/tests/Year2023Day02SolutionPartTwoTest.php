<?php

use CodeChallenge\Tests\SolutionHelper;
use CodeChallenge\Year2023Day02\Solution;

final class Year2023Day02SolutionPartTwoTest extends SolutionHelper {
    public function testPartTwoExample(): void {
        $reader = $this->givenReaderForFile('Year2023Day02', self::TEST_INPUT_FILENAME);
        $result = Solution::solvePartTwo($reader);
        $this->assertEquals(2286 , $result);
    }

    public function testPartTwo(): void {
        $reader = $this->givenReaderForFile('Year2023Day02', self::INPUT_FILENAME);
        $result = Solution::solvePartTwo($reader);
        $this->assertEquals(66681, $result);
    }
}
