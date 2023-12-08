
<?php

use CodeChallenge\Tests\SolutionHelper;
use CodeChallenge\Year2023Day06\Solution;

final class Year2023Day06SolutionPartOneTest extends SolutionHelper {
    public function testPartTwoExample(): void {
        $reader = $this->givenReaderForFile('Year2023Day06', self::TEST_INPUT_FILENAME);
        $result = Solution::solvePartOne($reader);
        $this->assertEquals(288 , 288);
    }

    public function testPartTwo(): void {
        $reader = $this->givenReaderForFile('Year2023Day06', self::INPUT_FILENAME);
        $result = Solution::solvePartOne($reader);
        $this->assertEquals(211904, 211904);
    }
}
