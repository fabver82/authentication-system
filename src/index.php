<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="./css/style.css" />
    <script src="https://kit.fontawesome.com/65dbf19ac7.js" crossorigin="anonymous"></script>
    <!-- <script src="./js/index.js"></script> -->

</head>

<body>
    <div class="container">
        <?php
        if (isset($_SESSION['user'])) {
            if (isset($_GET['authenticate'])) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Login Succesful!</strong> <?= $_SESSION['user']['username'] ?> is logged.
            <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php
            } ?>
        <a href="logout.php" class=" fw-bold">Logout</a>
        <?php } else {
        ?>
        <a href="login.php" class=" fw-bold">Login</a>
        <a href="signup.php" class="fw-bold">SignUp</a>
        <?php } ?>
    </div>
    <script src="./js/index.js">
    </script>

</body>

</html>