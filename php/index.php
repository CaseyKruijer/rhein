<?php
        function getproduct()
        {
            $serverLink = mysqli_connect("localhost:3306", "root", "", "rhein");
            $ret = array();
            $product_sql = "SELECT * FROM kabelchacklist";
            $res = mysqli_query($serverLink, $product_sql);
    
            while($ar = mysqli_fetch_assoc($res))
            {
                $ret[] = $ar;
            }
            return $ret;
        }

        function getgegevens()
        {
            $serverLink = mysqli_connect("localhost:3306", "root", "", "rhein");
            $ret = array();
            $gegevens_sql = "SELECT * FROM hijskraangegevens";
            $res = mysqli_query($serverLink, $gegevens_sql);
    
            while($ar = mysqli_fetch_assoc($res))
            {
                $ret[] = $ar;
            }
            return $ret;
        }
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
            <a href="index.php" class="navtext active">home</a>
            <a href="test.php" class="navtext">kabel test</a>
            <a href="gegevens.php" class="navtext">hijskraan gegevens</a>
            <a href="keuring.php" class="navtext">hijskraan keuring</a>
            <a href="registartie.php" class="navtext">registratie</a>
            <a href="logout.php" class="navtext">logout</a>
        </div>
        <div class="kabelbox">
        <h2>kabel test </h2>
        <?php
            $products = getproduct();
            foreach(array_slice($products, 0, 5) as $pd)
            {
        ?>
                <tabel class="left">
                    <label>draadbreuk: <?php echo $pd["draadbreuk.AMEL"] ?></label><br>
                    <label>draadbreuk: <?php echo $pd["draadbreuk.AMEL2"] ?></label><br>
                    <label>buiten draden: <?php echo $pd["buitendrade.MVB"] ?></label><br>
                    <label>roest en corrosie: <?php echo $pd["roest.NVB"] ?></label><br>
                    <label>kabel vermindering in diameter: <?php echo $pd["kabelvermindring"] ?></label><br>
                    <label>positie van meetpunt: <?php echo $pd["meetpunt"] ?></label><br>
                    <label>totale beoordeling: <?php echo $pd["totaal.MVB"] ?></label><br>
                    <label>beschadeging en vorming: <?php echo $pd["vervormingen.TYPE"] ?></label><br>
                    <label>datum van de test: <?php echo $pd["datum"] ?></label><br>
                    <label>leverancier van de kabel: <?php echo $pd["kabel_levrancier"] ?></label><br>
                    <label>overige waarnemingen: <?php echo $pd["overig"] ?></label><br>
                    <label>handeteking: <?php echo $pd["handtekening"] ?></label><br>
                    <label>bedrijfs uren: <?php echo $pd["uren"] ?></label><br>
                    <label>reden voor afleggen: <?php echo $pd["afleg_reden"] ?></label><br><br>
                </tabel>
            <?php } ?>
            </div>

        <div class="gegevensbox">
        <h2>hijskraan gegevens </h2>
        <?php
            $products = getgegevens();
            foreach(array_slice($products, 0, 5) as $pd)
            {
        ?>
                <tabel class="left">
                    <label>banden: <?php echo $pd["banden"] ?></label><br>
                    <label>stempels: <?php echo $pd["stempels"] ?></label><br>
                    <label>rupsen: <?php echo $pd["rupsen"] ?></label><br>
                    <label>hoofdgiek lengte: <?php echo $pd["hoofdgiek_lengte"] ?></label><br>
                    <label>mechanischesectie: <?php echo $pd["mechanischesectie"] ?></label><br>
                    <label>hulpgiek lengte: <?php echo $pd["hulpgiek_lengte"] ?></label><br>
                    <label>totale giek lengte: <?php echo $pd["gieklengte_hoek"] ?></label><br>
                    <label>hoofdgiek hoek: <?php echo $pd["hoofdgiek_hoek"] ?></label><br>
                    <label>hulpgiek hoek: <?php echo $pd["hulpgiek"] ?></label><br>
                    <label>aantal parten hijskabel: <?php echo $pd["hijskabels"] ?></label><br>
                    <label>RAVZ: <?php echo $pd["RAZV"] ?></label><br>
                    <label>eigen massa ballast LMB: <?php echo $pd["EMBLMB"] ?></label><br>
                    <label>toelaatbare bedrijfslast bij inwerking: <?php echo $pd["bedrijfslast"] ?></label><br>
                    <label>LMB treed in werking bij: <?php echo $pd["LMB"] ?></label><br>
                    <label>proeflast: <?php echo $pd["proeflast"] ?></label><br>
                    <label>afwijking in %: <?php echo $pd["afwijking"] ?></label><br>
                    <label>ja: <?php echo $pd["ja"] ?></label><br>
                    <label>nee: <?php echo $pd["nee"] ?></label><br>
                </tabel>
            <?php } ?>
            </div>
    </body>
</html>
