<?php

include($_SERVER['DOCUMENT_ROOT']."/rhein/php/bin/config.php");

if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
    session_start();
}
$serverLink = mysqli_connect($host, $username, $password, $db1);

$username = mysqli_real_escape_string($serverLink, $_POST['user']);
$password = mysqli_real_escape_string($serverLink, $_POST['password']);

$select = mysqli_query($serverLink, "SELECT * FROM `registreren` WHERE `user` = '$username' AND `password` = '$password'") or exit(mysqli_error($serverLink));
if(mysqli_num_rows($select) == 0) {
    array_push($errors, "UsNotFound");
    echo("Username not found!");
}

if (count($errors) == 0) {
    $_SESSION['username'] = $username;
    header('location: index.php '); //NAAR USER INTERFACE!
} else {
    header('location: login.php');
}
?>