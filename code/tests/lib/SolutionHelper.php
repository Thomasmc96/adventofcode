<?php

namespace CodeChallenge\Tests;

use CodeChallenge\Reader;
use PHPUnit\Framework\TestCase;

class SolutionHelper extends TestCase {
    public const TEST_INPUT_FILENAME = 'test-input.txt';
    public const INPUT_FILENAME = 'input.txt';

    protected function givenReaderForInputFile(string $input_file): Reader {
        $reader = new Reader();
        $reader->readFile(__DIR__ . '/../../input/' . $input_file);

        return $reader;
    }

    public function givenReaderForFile(string $input_file): Reader {
        return $this->givenReaderForInputFile($input_file);
    }
}
