<?php
print "Task 1:\n";
$colors = ["Red", "Green", "Blue", "Yellow", "White"];
$i = array_rand($colors);
print $colors[$i] . "\n";

print "Task 2:\n";
foreach ($colors as $color) {
    print $color ."\n";
};

print "Task 3:\n";
print "Color: " . array_pop($colors) . " is deleted.\n";
var_dump($colors);

print "Task 4:\n";
$array = [23, 31, 55];
print "Number of items in 'array': " . count($array) ."\n";
print "Sum of 'array' items: " . array_sum($array) . "\n";
print "Average of 'array': " . array_sum($array) / count($array) . "\n";
?>