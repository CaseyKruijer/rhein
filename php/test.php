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
                <p>
                <label for="buitendrade">afslijping van de aan de buitenzijde gelegen draden</label>
                    <input type="text" name="buitendrade">
                </p>
                <p>
                <label for="buitendrade">roest en corrosie</label>
                    <input type="text" name="roest">
                </p>
                <p>
                <label for="buitendrade">vermindering kabeldiameter</label>
                    <input type="text" name="kabelvermindring">
                </p>
                <p>
                <label for="buitendrade">positie van de meetpunten</label>
                    <input type="text" name="meetpunt">
                </p>
                <p>
                <label for="buitendrade">totale beoordeling</label>
                    <input type="text" name="totaal">
                </p>
                <p>
                <label for="buitendrade">beschadeging en vervorming</label>
                    <input type="text" name="vervorming">
                </p>
                <p>
                <label for="buitendrade">datum</label>
                    <input type="date" name="datum">
                </p>
                <p>
                <label for="buitendrade">kabel levrancier</label>
                    <input type="text" name="levrancier">
                </p>
                <p>
                <label for="buitendrade">overige waarnemingen</label>
                    <input type="text" name="overig">
                </p>
                <p>
                <label for="buitendrade">handtekening</label>
                    <input type="text" name="handtekening">
                </p>
                <p>
                <label for="buitendrade">aantal bedrijfsuren</label>
                    <input type="text" name="uren">
                </p>
                <p>
                <label for="buitendrade">reden voor afleggen</label>
                    <input type="text" name="afleg">
                </p>
                <input type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>