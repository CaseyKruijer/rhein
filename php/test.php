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
            <a href="test.php" class="navtext active">kabel test</a>
            <a href="gegevens.php" class="navtext">hijskraan gegevens</a>
            <a href="keuring.php" class="navtext">hijskraan keuring</a>
        </div>
        <div class="testbox">
            <form action="insert.php" method="post">
                <p>
                <label for="draadbreuk">zichtbare draadbreuk</label>
                    <input type="text" name="draadbreuk">
                </p>
                <p>
                <label for="draadbreuk">zichtbare draadbreuk</label>
                    <input type="text" name="draadbreuk2">
                </p>
                <input type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>