<?php
$scoreFloat = (float)55.9;
$scoreInt = (int)$scoreFloat;
print gettype($scoreFloat)." scoreFloat = {$scoreFloat}\n";
print gettype($scoreInt)." scoreInt = {$scoreInt}\n";

$age = (int)21;
var_dump($age);
$age = NULL;
var_dump($age);
unset($age);
var_dump($age);
?>