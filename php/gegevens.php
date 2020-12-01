<?php
   include($_SERVER['DOCUMENT_ROOT']."/rhein/php/bin/session.php");
?>
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
            <a href="gegevens.php" class="navtext active">hijskraan gegevens</a>
            <a href="keuring.php" class="navtext">hijskraan keuring</a>
        </div>
        <div class="testbox">
            <form action="insertgegevens.php" method="post">
                <p>
                    <label for="banden">banden</label>
                    <input type="text" name="banden">
                </p>
                <p>
                    <label for="stempels">stempels</label>
                    <input type="text" name="stempels">
                </p>
                <p>
                    <label for="rupsen">rupsen</label>
                    <input type="text" name="rupsen">
                </p>
                <p>
                    <label for="hoofdgiek">hoofdgiek lengte</label>
                    <input type="text" name="hoofdgiek">
                </p>
                <p>
                    <label for="mechanische">mechanische sectie</label>
                    <input type="text" name="mechanische">
                </p>
                <p>
                    <label for="hulpgiek">hulp giek lengte</label>
                    <input type="text" name="hulpgiek">
                </p>
                <p>
                    <label for="totalegiek">totale giek lengte</label>
                    <input type="text" name="totalegiek">
                </p>
                <p>
                    <label for="hoofdgiekhoek">hoofdgiek hoek</label>
                    <input type="text" name="hoofdgiekhoek">
                </p>
                <p>
                    <label for="hulpgiekhoek">hulp giek hoek</label>
                    <input type="text" name="hulpgiekhoek">
                </p>
                <p>
                    <label for="hijskabel">aantal parten hijskabel</label>
                    <input type="text" name="hijskabel">
                </p>
                <p>
                    <label for="RAVZ">RAVZ</label>
                    <input type="text" name="RAVZ">
                </p>
                <p>
                    <label for="EMBLMB">eigen massa ballast LMB</label>
                    <input type="text" name="EMBLMB">
                </p>
                <p>
                    <label for="bedrijfslast">toelaatbare bedrijfslast werking</label>
                    <input type="text" name="bedrijfslast">
                </p>
                <p>
                    <label for="LMB">LMB treed in werking bij</label>
                    <input type="text" name="LMB">
                </p>
                <p>
                    <label for="proeflast">proeflast</label>
                    <input type="text" name="proeflast">
                </p>
                <p>
                    <label for="afwijking">afwijking in %</label>
                    <input type="text" name="afwijking">
                </p>
                <p>
                    <label for="ja">akkoord ja</label>
                    <input type="text" name="ja">
                </p>
                <p>
                    <label for="nee">akkoord nee</label>
                    <input type="text" name="nee">
                </p>
                <input type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>