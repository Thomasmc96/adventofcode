<?php

namespace CodeChallenge;

use Exception;

class Reader {
    private string $contents;

    public function readFile(string $path): self {
        $r = file_get_contents($path);
        if ($r === false) {
            throw new Exception('could not read file at path: ' . $path);
        }

        $this->contents = $r;

        return $this;
    }

    /** @return array<string> */
    public function getAsLines(string $separator = "\n"): array {
        if (strlen($this->contents) === 0) {
            throw new Exception('could not get empty contents as lines');
        }

        if (strlen($separator) === 0) {
            throw new Exception('cannot get lines with empty separator');
        }

        return explode($separator, $this->contents);
    }

    public function getAsString(): string {
        return $this->contents;
    }
}
