<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport"content="eidth=device-witdth, initial-scale=1-0">
        <link rel="stylesheet" href="../css/main.css">
    </head>
    <body>
        <h1 class="logo">Over de Rhein</h1> 
        <div class="box">
            <form action="validation.php" method="post" class="login">
                <label>Gebruikersnaam</label>
                <input type="text" name="user" required>
                <label>Wachtwoord</laebl>
                <input type="password" name="password" required><br>
                <input type="radio" name="userrole" value="admin" required>admin
                <input type="radio" name="userrole" value="tester" required>tester
                <button type="submit" class="loginbtn">login</button> <br> 
                <?php if(isset($_GET['error'])){
						echo "Er is een fout in uw username of wachtwoorrd of role is fout";
						}
						?>
            </form>
        </div>
    </body>
</html>