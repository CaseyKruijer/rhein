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
 
// Attempt insert query execution
$sql = "INSERT INTO kabelchacklist (`draadbreuk.AMEL`, `draadbreuk.AMEL2`) VALUES ('$draadbreuk', '$draadbreuk2')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>