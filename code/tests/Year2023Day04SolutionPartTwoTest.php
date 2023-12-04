
<?php

use CodeChallenge\Tests\SolutionHelper;
use CodeChallenge\Year2023Day04\Solution;

final class Year2023Day04SolutionPartTwoTest extends SolutionHelper {
    public function testPartTwoExample(): void {
        $reader = $this->givenReaderForFile('Year2023Day04', self::TEST_INPUT_FILENAME);
        $result = Solution::solvePartTwo($reader);
        $this->assertEquals(13 , $result);
    }

    public function testPartTwo(): void {
        $reader = $this->givenReaderForFile('Year2023Day04', self::INPUT_FILENAME);
        $result = Solution::solvePartTwo($reader);
        $this->assertEquals(25004, $result);
    }
}
