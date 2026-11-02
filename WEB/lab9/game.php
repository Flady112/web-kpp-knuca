<?php
$dir = __DIR__ ."/data/";
$fileNamePattern = "*.txt";
$files = glob($dir . $fileNamePattern);

$outputFile = __DIR__ ."/total.txt";
touch($outputFile);
unlink($outputFile);

$total = 0;
foreach ($files as $file) {
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $lines_count = count($lines);
    for ($i = 0; $i < $lines_count; $i = $i + 3) {
        $firstName = $lines[$i];
        $lastName = $lines[$i + 1];
        $scoreString = $lines[$i + 2];
        $score = intval($scoreString);

        $outputFileHandle = fopen($outputFile,"a");
        fwrite($outputFileHandle, "Player = $firstName $lastName / Score = $score\n");
        fclose($outputFileHandle);

        $total += $score;
    }
}

$outputFileHandle = fopen($outputFile, 'a');
fwrite($outputFileHandle,"total of all scores = $total");
fclose($outputFileHandle);

print file_get_contents($outputFile);