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
            <label><?php echo $pd["draadbreuk.AMEL"] ?></label>
            <label><?php echo $pd["draadbreuk.AMEL2"] ?></label>
            <label><?php echo $pd["buitendrade.MVB"] ?></label>
            <label><?php echo $pd["roest.NVB"] ?></label>
            <label><?php echo $pd["kabelvermindring"] ?></label>
            <label><?php echo $pd["meetpunt"] ?></label>
            <label><?php echo $pd["totaal.MVB"] ?></label>
            <label><?php echo $pd["vervormingen.TYPE"] ?></label>
            <label><?php echo $pd["datum"] ?></label>
            <label><?php echo $pd["kabel_levrancier"] ?></label>
            <label><?php echo $pd["overig"] ?></label>
            <label><?php echo $pd["handtekening"] ?></label>
            <label><?php echo $pd["uren"] ?></label>
            <label><?php echo $pd["afleg_reden"] ?></label>
        </tabel>
            <?php } ?>
        </div>
    </body>
</html>
