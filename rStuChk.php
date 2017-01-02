<?php
session_start();
$signal="";
$un="";

$signal=$_SESSION["flag"];
//$un=$_SESSION["fla"];



if($signal=="oka"){
	
	$sName=$_POST['sname'];
	$sGid=$_POST['gid'];
	$sClass=$_POST['class'];
	$sSec=$_POST['section'];
	$sID=$_POST['sid'];
	$sRoll=$_POST['sRoll'];
	
	$conn = mysqli_connect("localhost", "root", "","sms");
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO student (stuName, gID, class,section,sID,roll)
VALUES ('".$sName."', '".$sGid."', '".$sClass."', '".$sSec."', '".$sID."', '".$sRoll."')";

if ($conn->query($sql) === TRUE) {
    echo "<p style="."text-align:center;"." >New record created successfully</p>";
	echo "<br>";
	echo "<p style="."text-align:center;"." ><a href="."rStu.php".">Add Another</a></p>";
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