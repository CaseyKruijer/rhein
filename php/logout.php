<?php
include($_SERVER['DOCUMENT_ROOT']."/rhein/php/bin/session.php");
  if(session_destroy()) {
    header("Location: login.php");
  }
?>