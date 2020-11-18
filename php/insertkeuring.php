<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "rhein");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$a = mysqli_real_escape_string($link, $_REQUEST['draadbreuk']);

 
// Attempt insert query execution
$query= "INSERT INTO kabelchacklist (`draadbreuk.AMEL`) 
VALUES('$a')";

if ($link->query($query) === TRUE) {
    echo "Inserted into keuring successfully";
} else {
    echo "Error inserting into table: " . $link->error;
}
 
// Close connection
mysqli_close($link);
?>