<?php
session_start();
$signal="";
$un="";

$signal=$_SESSION["flag"];
//$un=$_SESSION["fla"];



if($signal=="oka"||$signal=="okt"||$signal=="ok"){
	
	$gName=$_POST['sendEmail'];
	$gEmail=$_POST['message'];
	$gPass=$_SESSION["mail"];
	
	
	$conn = mysqli_connect("localhost", "root", "","sms");
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO mailbox (receiver, msg, sender)
VALUES ('".$gName."', '".$gEmail."', '".$gPass."')";

if ($conn->query($sql) === TRUE) {
    echo "<p style="."text-align:center;"." >Message Send Successfully</p>";
	echo "<br>";
	echo "<p style="."text-align:center;"." ><a href="."mail.php".">Send Another</a></p>";
	echo "<br>";
	
	echo "<p style="."text-align:center;"." ><a href="."logOut.php".">Log Out</a></p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
else{
	header("Location:logOut.php");
}
?>