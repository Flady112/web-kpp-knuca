<?php
$paint = filter_input(INPUT_GET, "paint");
if ($paint == NULL) {
    $paint = "-";
}
$roof = filter_input(INPUT_GET, "roof");
if ($roof == NULL) {
    $roof = "-";
}
$camera = filter_input(INPUT_GET, "camera");
if ($camera == NULL) {
    $camera = "-";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car checked</title>
</head>
<body>
    <h1>Your order is:</h1>
    <p>Metallic Paint: <?= $paint; ?></p>
    <p>Sunroof: <?= $roof; ?></p>
    <p>Back and Front Camera: <?= $camera; ?></p>
</body>
</html>