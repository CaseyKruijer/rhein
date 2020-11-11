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
            <a href="login.php" class="navtext">uitlog</a>
        </div>
        <div class="kabelbox">
        <?php
            $products = getproduct(); 
            foreach($products as $pd)
            {
             $draadbreuk = $pd['draadbreuk.AMEL'];
        ?>
        <tabel>
            <label>draadbreuk <?php echo $pd["draadbreuk.AMEL"] ?></label><br>
            <label>draadbreuk <?php echo $pd["draadbreuk.AMEL2"] ?></label><br>
            <label>buiten draden <?php echo $pd["buitendrade.MVB"] ?></label><br>
            <label>roest en corrosie <?php echo $pd["roest.NVB"] ?></label><br>
            <label>kabel vermindering in diameter <?php echo $pd["kabelvermindring"] ?></label><br>
            <label> positie van meetpunt <?php echo $pd["meetpunt"] ?></label><br>
            <label>totale beoordeling<?php echo $pd["totaal.MVB"] ?></label><br>
            <label>beschadeging en vorming <?php echo $pd["vervormingen.TYPE"] ?></label><br>
            <label>datum van de test <?php echo $pd["datum"] ?></label><br>
            <label>leverancier van de kabel <?php echo $pd["kabel_levrancier"] ?></label><br>
            <label>overige waarnemingen <?php echo $pd["overig"] ?></label><br>
            <label>handeteking <?php echo $pd["handtekening"] ?></label><br>
            <label>bedrijfs uren<?php echo $pd["uren"] ?></label><br>
            <label>reden voor afleggen <?php echo $pd["afleg_reden"] ?></label>
        </tabel>
            <?php } ?>
        </div>
    </body>
</html>
