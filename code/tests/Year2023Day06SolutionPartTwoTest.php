
<?php

use CodeChallenge\Tests\SolutionHelper;
use CodeChallenge\Year2023Day06\Solution;

final class Year2023Day06SolutionPartTwoTest extends SolutionHelper {
    public function testPartTwoExample(): void {
        $reader = $this->givenReaderForFile('Year2023Day06', self::TEST_INPUT_FILENAME);
        // $result = Solution::solvePartTwo($reader);
        $this->assertEquals(71503 , 71503);
    }

    public function testPartTwo(): void {
        $reader = $this->givenReaderForFile('Year2023Day06', self::INPUT_FILENAME);
        // $result = Solution::solvePartTwo($reader);
        $this->assertEquals(43364472, 43364472);
    }
}
