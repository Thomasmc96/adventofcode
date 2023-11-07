<?php

use CodeChallenge\Tests\SolutionHelper;
use CodeChallenge\Year2021Day02\Solution;

final class Year2021Day02SolutionPartTwoTest extends SolutionHelper {
    public function testPartTwoExample(): void {
        $reader = $this->givenReaderForFile('Year2021Day02', self::TEST_INPUT_FILENAME);
        $result = Solution::solvePartTwo($reader);
        $this->assertEquals(900, $result);
    }

    public function testPartTwo(): void {
        $reader = $this->givenReaderForFile('Year2021Day02', self::INPUT_FILENAME);
        $result = Solution::solvePartTwo($reader);
        $this->assertEquals(1947878632, $result);
    }
}
