<?php

session_start();

$con = mysqli_connect('localhost:3306', 'root', '');

mysqli_select_db($con, 'rhein');

$name = $_POST['user'];
$password = $_POST['password'];

$s = "SELECT * FROM registreren WHERE user = '$name' && password = '$password'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    header('location:index.php');
}
else{
    header('location:login.php');
}
?>