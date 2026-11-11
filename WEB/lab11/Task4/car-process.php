<?php
$answer = filter_input(INPUT_GET, "car");
$result = "";
switch ($answer) {
    case "yes":
        $result = "Electric car!";
        break;
    case "no":
        $result = "Gas car!";
        break;
    default:
        $result = "Something went wrong...";
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Result</title>
</head>
<body>
    <h1>The result of your choice is: <?= $result ?></h1>
</body>
</html>