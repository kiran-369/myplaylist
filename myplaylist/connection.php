<?php  



$host = "localhost";
$username = "root";
$password = "";
$dbname = "mplaylist";

function logindata
($conn)
{
        $userid = $_POST[`userid`];
        $fname =  $_POST[`fname`];
        $lname = $_POST[`lname`];
        $logname =  $_POST[`logname`] ;
        $password =  $_POST[`password`];
 	      $Mnumber = $_POST[`Mnumber`] ;
 	      $Email = $_POST[`email`] ;

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
//else {

	// echo " connection successful";
//}

else {
	$result= "INSERT INTO users (`fname`, `lname`, `logname`, `password`, `Mnumber`, `email`) VALUES (`$fname`, `$lname`, `$logname`, `$password`, `$Mnumber`, `email`)";


}


mysqli_query($conn, $result);

header("Location: login.php");





// Create connection
//$conn = new mysqli_connect($host, $username, $password, $dbname);
//VALUES ('".$_POST[' fname ']."', '".$_POST[' lname ']."', '".$_POST[' logname ']."', '".$_POST['PASSWORD']."', '".$_POST[' Mnumber ']."', '".$_POST[' email ']."')");
}
?>