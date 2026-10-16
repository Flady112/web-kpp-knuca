<?php
print "Task 1:\n";
$array = [
    "Fred" => "1.82",
    "Joelle" => "1.55",
    "Robin" => "1.70"
];
foreach ($array as $key => $value) {
    print str_pad($key, 10) . $value . "\n";
};

print "Task 2:\n";
$multiDimArray = [
    "Back to the Future" => ["duration" => 116, "leadingActor" => "Michael J. Fox"],
    "The Fifth Element" => ["duration" => 126, "leadingActor" => "Bruce Willis"],
    "Alien" => ["duration" => 117, "leadingActor" => "Sigourney Weaver"]
];
foreach ($multiDimArray as $key => $item) {
    print str_pad($key, 50) . "\n";
    foreach ($item as $key => $value) {
        print str_repeat(" ", 4) . str_pad($key, 16) . $value . "\n";
    };
};

print "Task 3:\n";
$arrayOdd = [1, 3, 5, 7, 9];
$arrayEven = [2, 4, 6, 8];
$combArray = [...$arrayOdd, ...$arrayEven];
sort($combArray);
foreach ($combArray as $value) {
    print $value . " ";
};
?>