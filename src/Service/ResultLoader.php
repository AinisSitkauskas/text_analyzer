<?php

namespace App\Service;

class ResultLoader
{
    public function loadResult(array $result)
    {
        foreach ($result['longestSentences'] as $longestSentence) {
            echo 'Longest: ' . $result['longestSentenceCount'] . ' Sentence: ' . $longestSentence . PHP_EOL;
        }

        foreach ($result['shortestSentences'] as $shortestSentence) {
            echo 'Shortest: ' . $result['shortestSentenceCount'] . ' Sentence: ' . $shortestSentence . PHP_EOL;
        }
    }
}
