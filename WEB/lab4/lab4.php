<?php
$name = readline('Enter your name: ');
if (strlen($name) < 4) print "That is a short name.\n";

$laundryWeightKg = readline("Enter your laundry weight (kg): ");
if ($laundryWeightKg < 9) {
    print "Fits in standard machine.\n";
} else {
    print "Needs medium to large machine.\n";
};
$vehicle = "asdasd"; //readline("Enter vehicle name (bus, train, car, helicopter, bicycle): ");
switch ($vehicle) {
    default:
        print "You've chosen the road less traveled.\n";
        break;
    case 'bus':
        print "Beep beep.\n";
        break;
    case 'train':
        print "Runs on tracks.\n";
        break;
    case 'car':
        print "Has at least three wheels.\n";
        break;
    case 'helicopter':
        print "Can fly.\n";
        break;
    case 'bicylce':
        print "You never forget once you've learned.\n";
        break;

};
print($result = match($vehicle) {
    'bus' => "Beep beep.\n",
    'train' => "Runs on tracks.\n",
    'car' => "Has at least three wheels.\n",
    'helicopter' => "Can fly.\n",
    'bicylce' => "You never forget once you've learned.\n",
    default => "You've chosen the road less traveled.\n"
});

$userNameOg = 'TrueAdam';
$passwordOg = 'GigaChad';
while (true) {
    $userNameCorrect = NULL;
    $passwordCorrect = NULL;
    $userName = readline("Enter your Username: ");
    $userNameCorrect = ($userName === $userNameOg) ? true : false;
    $password = readline("Enter your Password: ");
    $passwordCorrect = ($password === $passwordOg) ? true : false;
    if ($userNameCorrect && $passwordCorrect) {
        print "You are now logged in!\n";
        break;
    } else {
        print "Invalid credentials, please try again!\n";
    }
};
?>