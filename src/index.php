<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    if (isset($_SESSION['user'])) {
        var_dump($_SESSION['user']['email']); ?>
    <a href="logout.php" class="text-white-50 fw-bold">Logout</a>
    <?php } else {
    ?>
    <a href="login.php" class="text-white-50 fw-bold">Login</a>
    <a href="signup.php" class="text-white-50 fw-bold">SignUp</a>
    <?php } ?>
</body>

</html>