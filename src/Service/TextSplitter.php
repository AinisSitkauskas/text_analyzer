<?php

namespace App\Service;

class TextSplitter
{
    public function splitBySentence(string $text): array
    {
        return preg_split('/(?<=[.?!;:])\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);
    }
}
