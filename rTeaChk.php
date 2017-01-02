<?php
session_start();
$signal="";
$un="";

$signal=$_SESSION["flag"];
//$un=$_SESSION["fla"];



if($signal=="oka"){
	
	$gName=$_POST['tname'];
	$gEmail=$_POST['tEmail'];
	$gPass=$_POST['tPass'];
	
	
	$conn = mysqli_connect("localhost", "root", "","sms");
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO teacher (name, email, pass)
VALUES ('".$gName."', '".$gEmail."', '".$gPass."')";

if ($conn->query($sql) === TRUE) {
    echo "<p style="."text-align:center;"." >New record created successfully</p>";
	echo "<br>";
	echo "<p style="."text-align:center;"." ><a href="."rTea.php".">Add Another</a></p>";
	echo "<br>";
	echo "<p style="."text-align:center;"." ><a href="."admin.php".">Back To Admin Panel</a></p>";
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