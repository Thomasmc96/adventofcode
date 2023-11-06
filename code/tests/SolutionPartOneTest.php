<?php

use CodeChallenge\SomeExampleSolution;
use CodeChallenge\Tests\lib\SolutionHelper;

final class SolutionPartOneTest extends SolutionHelper {
    public function testPartOneExample(): void {
        $reader = $this->givenReaderForFile(self::TEST_INPUT_FILENAME);
        $this->expectExceptionMessageMatches('/not implemented yet/');
        $result = SomeExampleSolution::solvePartOne($reader);
        // $this->assertEquals(150, $result);
    }

    public function testPartOne(): void {
        $reader = $this->givenReaderForFile(self::INPUT_FILENAME);
        $this->expectExceptionMessageMatches('/not implemented yet/');
        $result = SomeExampleSolution::solvePartOne($reader);
        // $this->assertEquals(1938402, $result);
    }
}
