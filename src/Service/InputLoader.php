<?php

namespace App\Service;

class InputLoader
{
    public function loadFile(string $path): string
    {
        $filePath = 'files/' . $path;

        if (!file_exists($filePath)) {
            throw new \Exception('File ' . $filePath . ' was not found');
        }

        return file_get_contents($filePath);
    }
}
