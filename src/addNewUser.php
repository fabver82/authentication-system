<?php

// open the $_SESSION
session_start();

// Check if $_POST is not empty
if (!empty($_POST)) {
    // 1. Check all the inputs exist
    // 2. Check also if the $_POST are not empty because we load the page, the form is empty
    if (
        isset($_POST["username"], $_POST["email"], $_POST["password"]) &&
        !empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["password"])
    ) {

        // strip_tags for the login
        $login = strip_tags($_POST["username"]);

        // check valid email
        if (!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
            die("email invalid");
        }

        // hash the password
        $pass = password_hash($_POST["password"], PASSWORD_BCRYPT);

        //SQL part
        require_once "connexion.php";
        $q = $db->prepare("INSERT INTO users(username, email, password) VALUES (:username, :email, :password)");

        // bindParam() accepte uniquement une variable qui est interprétée au moment de l'execute()
        $q->bindParam(":username", $login, PDO::PARAM_STR);
        $q->bindParam(":email", $_POST["email"], PDO::PARAM_STR);
        $q->bindParam(":password", $pass, PDO::PARAM_STR);

        // check the execute() -> return a boolean
        if (!$q->execute()) {
            die("form not sent to the db");
        }

        // retreive the last ID
        $id = $db->lastInsertId();

        // store data of user in $_SESSION
        $_SESSION["user"] = [
            "id" => $id,
            "username" => $login,
            "email" => $_POST["email"]
        ];

        // redirect to index when done
        header("location: index.php");
    } else {
        die("form incomplete");
    }
}