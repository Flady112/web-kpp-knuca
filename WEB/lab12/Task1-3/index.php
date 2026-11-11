<?php
$age = filter_input(INPUT_POST, "age");
$isSubmitted = ($_SERVER["REQUEST_METHOD"] === "POST");
$errors = [];
if ($isSubmitted) {
    if (!is_Numeric($age) && $age !== "") {
        $errors[] = "Age can't be text!";
    };
    if (!filter_var($age, FILTER_VALIDATE_INT)) {
        $errors[] = "Your age must be a whole number (integer)!";
    }
    if ($age == "") {
        $errors[] = "Please, write your age!";
    }
};
$isValid = empty($errors);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age page</title>
</head>
<body>
    <h1>Write your age</h1>
    <form method="POST">
        <p>Your age: <input name ="age" value="<?=$age?>"></p>
        <p><input type="submit"></p>
        <?php if ($isSubmitted && !$isValid): ?>
            <div class="error">
                <p>Error list:</p>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?=$error?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php if ($isSubmitted && $isValid): ?>
            <div class="Success">
                <p>Great! Your age after next birthday will be: <?= $age + 1 ?></p>
            </div>
        <?php endif; ?>
    </form>
</body>
</html>