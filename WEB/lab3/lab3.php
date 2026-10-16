<?php
$name = 'Kyrylo';
print $name.' is learning PHP';

$fruit = 'apple';
print "\n{$fruit} juice is made from {$fruit}s.\n";
$fruit = 'orange';
print "{$fruit} juice is made from {$fruit}s.\n";

$message = <<<EOT
PHP is fun
\u{1F60A}
\u{1F60A}
EOT;
print $message;

$appleJuice = 'apple juice is made from apples.';
print "\n".$appleJuice;
$grapefruitJuice = str_replace('apple','grapefruit', $appleJuice);
print "\n".$grapefruitJuice;
$grapefruitJuice = ucfirst($grapefruitJuice);
$grapefruitJuice = str_replace('from','of', $grapefruitJuice);
$grapefruitJuice = substr_replace($grapefruitJuice,'', -2, 1);
print "\n".$grapefruitJuice;
?>