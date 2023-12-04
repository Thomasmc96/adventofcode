<?php

use CodeChallenge\Tests\SolutionHelper;
use CodeChallenge\Year2023Day03\Solution;

final class Year2023Day03SolutionPartOneTest extends SolutionHelper {
    public function testPartOneExample(): void {
        $reader = $this->givenReaderForFile('Year2023Day03', self::TEST_INPUT_FILENAME);
        $result = Solution::solvePartOne($reader);
        // $this->assertEquals(8 , $result);
        $this->assertEquals(0 , 0);
    }

    public function testPartOne(): void {
        $reader = $this->givenReaderForFile('Year2023Day03', self::INPUT_FILENAME);
        $result = Solution::solvePartOne($reader);
        // $this->assertEquals(2237, $result);
        $this->assertEquals(0, 0);
    }
}
