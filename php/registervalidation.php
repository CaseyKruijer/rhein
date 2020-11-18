<?php

session_start();

$con = mysqli_connect('localhost:3306', 'root', '');

mysqli_select_db($con, 'rhein');

$name = $_POST['user'];
$password = $_POST['password'];

$s = "SELECT * FROM registreren WHERE user = '$name'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    echo"gebruikersnaam is al bezet";
}
else{
    $reg="INSERT INTO registreren(`user`, `password`) VALUES('$name', '$password')";
    mysqli_query($con, $reg);
    echo"de registratie is gelukt";
}
?>