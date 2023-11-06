<?php

use CodeChallenge\SomeExampleSolution;
use CodeChallenge\Tests\lib\SolutionHelper;

final class SolutionPartTwoTest extends SolutionHelper {
    public function testPartOneExample(): void {
        $reader = $this->givenReaderForFile(self::TEST_INPUT_FILENAME);
        $this->expectExceptionMessageMatches('/not implemented yet/');
        $result = SomeExampleSolution::solvePartTwo($reader);
    }
}
