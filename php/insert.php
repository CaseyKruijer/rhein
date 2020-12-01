<?php
include($_SERVER['DOCUMENT_ROOT']."/rhein/php/bin/session.php");
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "rhein");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$a = mysqli_real_escape_string($link, $_REQUEST['draadbreuk']);
$a2 = mysqli_real_escape_string($link, $_REQUEST['draadbreuk2']);
$b = mysqli_real_escape_string($link, $_REQUEST['buitendrade']);
$c = mysqli_real_escape_string($link, $_REQUEST['roest']);
$d = mysqli_real_escape_string($link, $_REQUEST['kabelvermindring']);
$e = mysqli_real_escape_string($link, $_REQUEST['meetpunt']);
$f = mysqli_real_escape_string($link, $_REQUEST['totaal']);
$g = mysqli_real_escape_string($link, $_REQUEST['vervorming']);
$h = mysqli_real_escape_string($link, $_REQUEST['datum']);
$i = mysqli_real_escape_string($link, $_REQUEST['levrancier']);
$j = mysqli_real_escape_string($link, $_REQUEST['overig']);
$k = mysqli_real_escape_string($link, $_REQUEST['handtekening']);
$l = mysqli_real_escape_string($link, $_REQUEST['uren']);
$m = mysqli_real_escape_string($link, $_REQUEST['afleg']);
 
// Attempt insert query execution
$query= "INSERT INTO kabelchacklist (`draadbreuk.AMEL`, `draadbreuk.AMEL2`, `buitendrade.MVB`, `roest.NVB`, `kabelvermindring`, `meetpunt`, `totaal.MVB`, `vervormingen.TYPE`, `datum`, `kabel_levrancier`, `overig`, `handtekening`, `uren`, `afleg_reden`) 
VALUES('$a', '$a2', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m')";

if ($link->query($query) === TRUE) {
    echo "Inserted into products successfully";
} else {
    echo "Error inserting into table: " . $link->error;
}
 
// Close connection
mysqli_close($link);
?>