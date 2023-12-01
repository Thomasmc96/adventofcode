<?php

use CodeChallenge\Tests\SolutionHelper;
use CodeChallenge\Year2023Day01\Solution;

final class Year2023Day01SolutionPartTwoTest extends SolutionHelper {
    public function testPartTwoExample(): void {
        $reader = $this->givenReaderForFile('Year2023Day01', self::TEST_INPUT_FILENAME);
        $result = Solution::solvePartTwo($reader);
        $this->assertEquals(281 , $result);
    }

    public function testPartTwo(): void {
        $reader = $this->givenReaderForFile('Year2023Day01', self::INPUT_FILENAME);
        $result = Solution::solvePartTwo($reader);
        $this->assertEquals(548451, $result);
    }
}
