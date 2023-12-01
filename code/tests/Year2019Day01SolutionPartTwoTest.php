<?php

use CodeChallenge\Tests\SolutionHelper;
use CodeChallenge\Year2019Day01\Solution;

final class Year2019Day01SolutionPartTwoTest extends SolutionHelper {
    public function testPartTwoExample(): void {
        $reader = $this->givenReaderForFile('Year2019Day01', self::TEST_INPUT_FILENAME);
        $result = Solution::solvePartTwo($reader);
        $this->assertEquals(51316, $result);
    }

    public function testPartTwo(): void {
        $reader = $this->givenReaderForFile('Year2019Day01', self::INPUT_FILENAME);
        $result = Solution::solvePartTwo($reader);
        $this->assertEquals(4916076, $result);
    }
}
