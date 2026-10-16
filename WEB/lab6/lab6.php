<?php
do {
    $string = (string)readline("Enter your string (do...while): ");
} while(is_numeric($string) or $string !== ucfirst($string));

while(true) {
    $string = readline("Enter your string (while(true)): ");
    if (is_numeric($string)) {
        break;
    }
};

for ($i = 1; $i <= 21; $i++) {
    $result = ($i % 3);
    if ($result != 0) {
        continue;
    } else {
        print "$i\n";
    };
};
?>