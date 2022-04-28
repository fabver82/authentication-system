<?php
session_start();
if (!empty($_POST)) {
    // 1. Check all the inputs exist
    // 2. We check also if the $_POST are not empty because we load the page, the form is empty
    if (
        isset($_POST["username"], $_POST["password"])
        && !empty($_POST["username"]) && !empty($_POST["password"])
    ) {

        $username = strip_tags($_POST["username"]);

        //SQL part
        require_once "connexion.php";
        $q = $db->prepare("SELECT * FROM users WHERE username=:username");

        // bindParam() accepte uniquement une variable qui est interprétée au moment de l'execute()
        $q->bindParam(":username", $username, PDO::PARAM_STR);

        // execute return a boolean
        if (!$q->execute()) {
            die("form not sent to the db");
            header("location: login.php");
        }

        $user = $q->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            die("user doesn't exist &/or password incorrect");
        }

        // check the password input with the password in db
        if (!password_verify($_POST["password"], $user["password"])) {
            die("user doesn't exist &/or password incorrect");
        }


        // store data of user in $_SESSION
        $_SESSION["user"] = [
            "id" => $user["id"],
            "username" => $user["username"],
            "email" => $user["email"]
        ];

        header("location: index.php?authenticate=true");
    }
}