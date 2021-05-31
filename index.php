<?php

require 'vendor/autoload.php';

use App\Controller\TextAnalyzerController;

$path = $argv[1];

try {
    $commissionFee = new TextAnalyzerController();
    $commissionFee->analyzeText($path);
} catch (\Exception $exception) {
    echo $exception->getMessage();
}
