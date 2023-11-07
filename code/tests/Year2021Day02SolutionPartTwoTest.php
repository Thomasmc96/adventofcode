<?php

use CodeChallenge\Tests\SolutionHelper;
use CodeChallenge\Year2021Day02\Solution;

final class Year2021Day02SolutionPartTwoTest extends SolutionHelper {
    public function testPartTwoExample(): void {
        $reader = $this->givenReaderForFile('Year2021Day02', self::TEST_INPUT_FILENAME);
        $this->expectExceptionMessageMatches('/not implemented yet/');
        $result = Solution::solvePartTwo($reader);
    }
}
