<?php

namespace App\Controller;

use App\Service\ResultLoader;
use App\Service\SentenceCalculator;
use App\Service\InputLoader;
use App\Service\TextSplitter;

class TextAnalyzerController
{
    private InputLoader $inputLoader;

    private ResultLoader $resultLoader;

    private SentenceCalculator $sentenceCalculator;

    private TextSplitter $textSplitter;

    public function __construct()
    {
        $this->inputLoader = new InputLoader();
        $this->resultLoader = new ResultLoader();
        $this->sentenceCalculator = new SentenceCalculator();
        $this->textSplitter = new TextSplitter();
    }

    public function analyzeText(string $path)
    {
        $text = $this->inputLoader->loadFile($path);
        $sentences = $this->textSplitter->splitBySentence($text);
        $result = $this->sentenceCalculator->calculateSentences($sentences);
        $this->resultLoader->loadResult($result);
    }
}