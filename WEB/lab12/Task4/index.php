<?php
$email = filter_input(INPUT_POST, "email");
$isSubmitted = ($_SERVER["REQUEST_METHOD"] === "POST");
$errors = [];
if ($isSubmitted) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == false && $email !== "") {
        $errors[] = "Your email is not valid";
    };
    if ($email == "") {
        $errors[] = "Please, write your email!";
    }
};
$isValid = empty($errors);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email page</title>
</head>
<body>
    <h1>Write your email</h1>
    <form method="POST">
        <p>Your email: <input name ="email" value="<?=$email?>"></p>
        <p><input type="submit"></p>
        <?php if ($isSubmitted && !$isValid): ?>
            <div class="error">
                <p>Error list:</p>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?= $error?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php if ($isSubmitted && $isValid): ?>
            <div class="Success">
                <p>Great! Your email: <?=$email?> is valid and can be registrated</p>
            </div>
        <?php endif; ?>
    </form>
</body>
</html>