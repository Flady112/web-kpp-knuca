<?php
print '123';
require_once 'file2.php';
print '789';

require_once __DIR__ . "\my_functions.php";
$result = which_is_larger(4, 5); // Only Int
print "\nThe larger of 4 and 5: {$result}\n";
var_dump($result);
$result = which_is_larger(6, 5.5); // Only Int
print "The larger of 6 and 5.5: {$result}\n";
var_dump($result);
$result = which_is_larger(21.1, 19.5, false); // Only Float
print "The larger of 21.1 and 19.5: {$result}\n";
var_dump($result);
$result = which_is_larger(16.3, 8, false); // Only Float
print "The larger of 16.3 and 19: {$result}\n";
var_dump($result);
$result = which_is_larger(3, 3); // Int
print "The larger of 3 and 3: {$result}\n"; // In a result we'll have 3 before modification
var_dump($result);

capital_k();
capital_k("","#");
capital_k("#","");
?>