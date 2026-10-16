<?php
function which_is_larger(int|float $n1, int|float $n2, bool $ifNumbInt = true): int|float|NULL {
    if ($ifNumbInt) {
        if (is_float($n1) or is_float($n2)) {
            return NULL;
        }
    } if (!$ifNumbInt) {
        if (is_int($n1) or is_int($n2)) {
            return NULL;
        }
    } if ($n1 > $n2) {
        return $n1;
    } elseif ($n1 < $n2) {
        return $n2;
    } else {
        return NULL;
    }
}

function capital_k(string $character = "K", string $spacer = " "): void {
    print "\n";
    if ($spacer == "" or $character == "") {
        print "Character and spacer can't be empty!";
        return;
    }
    $spaceLength = 3;
    while ($spaceLength > 0) {
        print str_repeat($character, 2) . str_repeat($spacer, $spaceLength)
        . str_repeat($character, 2) . "\n";
        $spaceLength--;
    }
    while ($spaceLength < 4) {
        print str_repeat($character, 2) . str_repeat($spacer, $spaceLength)
        . str_repeat($character, 2) . "\n";
        $spaceLength++;
    }
}
/*
KK   KK
KK  KK
KK KK
KKKK
KK KK
KK  KK
KK   KK
*/
?>