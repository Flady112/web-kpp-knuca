<?php
$array = [
    "The limerick packs laughs anatomical",
    "Into space that is quite economical.",
    "But the good ones I’ve seen",
    "So seldom are clean",
    "And the clean ones so seldom are comical."
];
$file = __DIR__ . '\limerick.txt';
$fileHandle = fopen($file,'w');
foreach ($array as $line) {
    fwrite($fileHandle, $line . PHP_EOL);
};
fclose($fileHandle);

//https://jsonplaceholder.typicode.com/posts/1
$json = file_get_contents('https://jsonplaceholder.typicode.com/posts/1');
$data = json_decode($json, true);
var_dump($json);
?>