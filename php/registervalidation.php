<?php

include($_SERVER['DOCUMENT_ROOT']."/rhein/php/bin/session.php");

session_start();
header('location:registartie.php');

$con = mysqli_connect('localhost:3306', 'root', '');

mysqli_select_db($con, 'rhein');

$name = $_POST['user'];
$password = $_POST['password'];
$role = $_POST['userrole'];
$hash = hash("sha256", "$password");

$s = "SELECT * FROM registreren WHERE user = '$name'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    echo"gebruikersnaam is al bezet";
}
else{
    $reg="INSERT INTO registreren(`user`, `password`, `role`) VALUES('$name', '$hash', '$role')";
    mysqli_query($con, $reg);
    echo"de registratie is gelukt";
}
?>