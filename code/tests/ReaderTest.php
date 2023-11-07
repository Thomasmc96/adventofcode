<?php

use CodeChallenge\Reader;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Reader::class)]
final class ReaderTest extends TestCase {
    private const TEMPORARY_FILENAME = '/tmp/some-file';

    protected function tearDown(): void {
        parent::tearDown();

        $this->assertTrue(unlink(self::TEMPORARY_FILENAME));
    }

    public function testCanReadFileAsLines(): void {
        $input = "Line1\nLine2\nLine3";
        $this->assertNotFalse(file_put_contents(self::TEMPORARY_FILENAME, $input));

        $lines = (new Reader())
            ->readFile(self::TEMPORARY_FILENAME)
            ->getAsLines();

        $this->assertIsArray($lines);
        $this->assertEquals(3, sizeof($lines));
        $this->assertEquals(['Line1', 'Line2', 'Line3'], $lines);
    }

    public function testCanReadFileAsString(): void {
        $input = "Line1\nLine2\nLine3";
        $output = $this->givenReaderWithInput($input)
            ->getAsString();

        $this->assertIsString($output);
        $this->assertEquals(17, strlen($output));
        $this->assertEquals($input, $output);
    }

    public function testGetAsLinesThrowsExceptionOnEmptyFile(): void {
        $this->expectExceptionMessageMatches('/empty contents/');
        $this->givenReaderWithInput('')
            ->getAsLines();
    }

    public function testGetAsStringWithEmptyFile(): void {
        $output = $this->givenReaderWithInput('')
            ->getAsString();

        $this->assertIsString($output);
        $this->assertEquals(0, strlen($output));
    }

    protected function givenReaderWithInput(string $input): Reader {
        $this->assertNotFalse(file_put_contents(self::TEMPORARY_FILENAME, $input));

        return (new Reader())
            ->readFile(self::TEMPORARY_FILENAME);
    }
}
