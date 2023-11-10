<?php

use CodeChallenge\Tests\SolutionHelper;
use CodeChallenge\Year2020Day01\Solution;

final class Year2020Day01SolutionPartTwoTest extends SolutionHelper {
    public function testPartTwoExample(): void {
        $reader = $this->givenReaderForFile('Year2020Day01', self::TEST_INPUT_FILENAME);
        $result = Solution::solvePartTwo($reader);
        $this->assertEquals(241861950, $result);
    }

    public function testPartTwo(): void {
        $reader = $this->givenReaderForFile('Year2020Day01', self::INPUT_FILENAME);
        $result = Solution::solvePartTwo($reader);
        $this->assertEquals(9210402, $result);
    }
}
