<?php

namespace App\Service;

class SentenceCalculator
{
    public function calculateSentences(array $sentences): array
    {
        $longestSentenceCont = 0;
        $shortestSentenceCont = INF;
        $longestSentences = [];
        $shortestSentences = [];

        foreach ($sentences as $sentence) {
            $wordsCount = str_word_count($sentence);

            if ($wordsCount > $longestSentenceCont) {
                $longestSentenceCont = $wordsCount;
                $longestSentences = [$sentence];
            } elseif ($wordsCount == $longestSentenceCont) {
                $longestSentences[] = $sentence;
            }

            if ($wordsCount < $shortestSentenceCont) {
                $shortestSentenceCont = $wordsCount;
                $shortestSentences = [$sentence];
            } elseif ($wordsCount == $shortestSentenceCont) {
                $shortestSentences[] = $sentence;
            }
        }

        return [
            'longestSentenceCount' => $longestSentenceCont,
            'longestSentences' => $longestSentences,
            'shortestSentenceCount' => $shortestSentenceCont,
            'shortestSentences' => $shortestSentences,
        ];
    }
}
