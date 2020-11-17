<?php

session_start();

$con = mysqli_connect('localhost:3306', 'root', '');

mysqli_select_db($con, 'rhein');

$name = $_POST['user'];
$password = $_POST['password'];

$s = "select * from registreren where gebruiker = '$name' && wachtwoord = '$password'";

$result = mysqli_query($con, $s);

$num = myqli_num_rows($result);

if($num == 1){
    echo"gebruikers naam is al in gebruik";
}
else{
    $reg= "insert into login(`gebruikernaam`, `wachwoord`) values ('$name', '$pass')";
    mysqli_query($con, $reg);
    echo"registratie is gelukt";
}
?>