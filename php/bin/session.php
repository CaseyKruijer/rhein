<?php
   include($_SERVER['DOCUMENT_ROOT']."/rhein/php/bin/config.php");
   if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
    session_start();
   }
  
   if(isset($_SESSION['username'])){
      $serverLink = mysqli_connect($host, $username, $password, $db1);
      $user_check = $_SESSION['username'];
      $id_sql = mysqli_query($serverLink, "SELECT `user` FROM `registreren` WHERE `USER_ID` = '$user_check' ");
      $userid = mysqli_fetch_array($id_sql,MYSQLI_ASSOC);

   } else {
       header('location: login.php');
   }
?>