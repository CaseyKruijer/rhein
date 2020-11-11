<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "rhein");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$draadbreuk = mysqli_real_escape_string($link, $_REQUEST['draadbreuk']);
$draadbreuk2 = mysqli_real_escape_string($link, $_REQUEST['draadbreuk2']);
$buitendrade = mysqli_real_escape_string($link, $_REQUEST['buitendrade']);
$roest = mysqli_real_escape_string($link, $_REQUEST['roest']);
$kabelvermindring = mysqli_real_escape_string($link, $_REQUEST['kabelvermindring']);
$meetpunt = mysqli_real_escape_string($link, $_REQUEST['meetpunt']);
$totaal = mysqli_real_escape_string($link, $_REQUEST['totaal']);
$vervorming = mysqli_real_escape_string($link, $_REQUEST['vervorming']);
$levrancier = mysqli_real_escape_string($link, $_REQUEST['levrancier']);
$overig = mysqli_real_escape_string($link, $_REQUEST['overig']);
$handtekening = mysqli_real_escape_string($link, $_REQUEST['handtekening']);
$uren = mysqli_real_escape_string($link, $_REQUEST['uren']);
$afleg = mysqli_real_escape_string($link, $_REQUEST['afleg']);
 
// Attempt insert query execution
$sql = "INSERT INTO kabelchacklist (`draadbreuk.AMEL`, `draadbreuk.AMEL2`, `buitendrade.MVB`, `roest.NVB`, kabelvermindring, meetpunt, `totaal.MVB`, `vervormingen.TYPE`, kabel_levrancier, overig, handtekening, uren, afleg_reden) VALUES ('$draadbreuk', '$draadbreuk2', '$buitendrade', '$roest', '$kabelvermindring', '$meetpunt', '$totaal', '$vervorming', '$levrancier' '$overig', '$handtekening', '$uren', '$afleg')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>