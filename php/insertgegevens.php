<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "rhein");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$a = mysqli_real_escape_string($link, $_REQUEST['banden']);
$b = mysqli_real_escape_string($link, $_REQUEST['stempels']);
$c = mysqli_real_escape_string($link, $_REQUEST['rupsen']);
$d = mysqli_real_escape_string($link, $_REQUEST['hoofdgiek']);
$e = mysqli_real_escape_string($link, $_REQUEST['mechanische']);
$f = mysqli_real_escape_string($link, $_REQUEST['hulpgiek']);
$g = mysqli_real_escape_string($link, $_REQUEST['totalegiek']);
$h = mysqli_real_escape_string($link, $_REQUEST['hoofdgiekhoek']);
$i = mysqli_real_escape_string($link, $_REQUEST['hulpgiekhoek']);
$j = mysqli_real_escape_string($link, $_REQUEST['hijskabel']);
$k = mysqli_real_escape_string($link, $_REQUEST['RAVZ']);
$l = mysqli_real_escape_string($link, $_REQUEST['EMBLMB']);
$m = mysqli_real_escape_string($link, $_REQUEST['bedrijfslast']);
$n = mysqli_real_escape_string($link, $_REQUEST['proeflast']);
$o = mysqli_real_escape_string($link, $_REQUEST['afwijking']);
$p = mysqli_real_escape_string($link, $_REQUEST['LMB']);
$q = mysqli_real_escape_string($link, $_REQUEST['ja']);
$r = mysqli_real_escape_string($link, $_REQUEST['nee']);
 
// Attempt insert query execution
$query= "INSERT INTO hijskraangegevens (`banden`, `stempels`, `rupsen`, `hoofdgiek_lengte`, `mechanischesectie`, `hulpgiek_lengte`, `gieklengte_hoek`, `hoofdgiek_hoek`, `hulpgiek`, `hijskabels`, `RAZV`, `EMBLMB`, `bedrijfslast`, `LMB`, `proeflast`, `afwijking`, `ja`, `nee`) 
VALUES('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q', '$r')";

if ($link->query($query) === TRUE) {
    echo "Inserted into products successfully";
} else {
    echo "Error inserting into table: " . $link->error;
}
 
// Close connection
mysqli_close($link);
?>