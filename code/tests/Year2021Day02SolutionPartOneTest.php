<?php

use CodeChallenge\Tests\SolutionHelper;
use CodeChallenge\Year2021Day02\Solution;

final class Year2021Day02SolutionPartOneTest extends SolutionHelper {
    public function testPartOneExample(): void {
        $reader = $this->givenReaderForFile('Year2021Day02', self::TEST_INPUT_FILENAME);
        $result = Solution::solvePartOne($reader);
        $this->assertEquals(150, $result);
    }

    public function testPartOne(): void {
        $reader = $this->givenReaderForFile('Year2021Day02', self::INPUT_FILENAME);
        $result = Solution::solvePartOne($reader);
        $this->assertEquals(1938402, $result);
    }
}
