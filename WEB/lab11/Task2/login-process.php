<?php
$username = filter_input(INPUT_POST, "username");
$password = filter_input(INPUT_POST,"password");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Login</title>
</head>
<body>
    <h1>You have successfully loged in, <?= $username ?>!</h1>
</body>
</html>