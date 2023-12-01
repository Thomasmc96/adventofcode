<?php

use CodeChallenge\Tests\SolutionHelper;
use CodeChallenge\Year2019Day01\Solution;

final class Year2019Day01SolutionPartOneTest extends SolutionHelper {
    public function testPartOneExample(): void {
        $reader = $this->givenReaderForFile('Year2019Day01', self::TEST_INPUT_FILENAME);
        $result = Solution::solvePartOne($reader);
        $this->assertEquals(34241, $result);
    }

    public function testPartOne(): void {
        $reader = $this->givenReaderForFile('Year2019Day01', self::INPUT_FILENAME);
        $result = Solution::solvePartOne($reader);
        $this->assertEquals(3279287, $result);
    }
}
