<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport"content="eidth=device-witdth, initial-scale=1-0">
        <link rel="stylesheet" href="../css/main.css">
    </head>
    <body>
        <h1 class="logo">Over de Rhein</h1> 
        <div class="box">
            <form action="validation.php" method="post">
                <label>Gebruikersnaam</label>
                <input type="text" name="user" required>
                <label>Wachtwoord</laebl>
                <input type="password" name="password" required>
                <button type="submit">login</button>
            </form>
        </div>
    </body>
</html>