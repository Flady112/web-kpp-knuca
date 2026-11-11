<?php
$answer = filter_input(INPUT_GET, "check", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
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
    <?php
    foreach ($answer as $item) {
        print "* " . $item .": added<br>";
    }
    ?>
</body>
</html>