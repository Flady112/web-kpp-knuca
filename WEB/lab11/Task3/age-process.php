<?php
$age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
if ($age === false) {
    $age = "You can't be that old";
} else {
    $age = $age + 1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your age after</title>
</head>
<body>
    <h1>Next year, your age will be: <?= $age ?>!</h1>
</body>
</html>