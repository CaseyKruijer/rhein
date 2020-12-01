<?php include($_SERVER['DOCUMENT_ROOT']."/rhein/php/bin/session.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport"content="eidth=device-witdth, initial-scale=1-0">
        <link rel="stylesheet" href="../css/main.css">
    </head>
    <body>
        <h1 class="logo">Over de Rhein</h1>  
        <div class="topnav">
            <a href="index.php" class="navtext">home</a>
            <a href="test.php" class="navtext">kabel test</a>
            <a href="gegevens.php" class="navtext">hijskraan gegevens</a>
            <a href="keuring.php" class="navtext">hijskraan keuring</a>
            <a href="registratie.php" class="navtext active">registratie</a>
        </div>
        <div class="loginbox">
            <form action="registervalidation.php" method="post">
                <label>Gebruikersnaam</label>
                <input type="text" name="user" required>
                <label>Wachtwoord</laebl>
                <input type="password" name="password" required>
                <button type="submit" class="registreerbtn">registreer</button>
            </form>
        </div>
    </body>
</html>