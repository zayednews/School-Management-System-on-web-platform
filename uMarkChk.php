<?php
session_start();
$signal="";
$un="";

$signal=$_SESSION["flag"];
//$un=$_SESSION["fla"];



if($signal=="okt"){
	
	$sName=$_POST['sid'];
	$sGid=$_POST['gid'];
	$sClass=$_POST['sub'];
	$sSec=$_POST['term'];
	$sID=$_POST['Mark'];
	//$sRoll=$_POST['sRoll'];
	
	$conn = mysqli_connect("localhost", "root", "","sms");
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO marksheet (SID, GID, Sub,Term,Mark)
VALUES ('".$sName."', '".$sGid."', '".$sClass."', '".$sSec."', '".$sID."')";

if ($conn->query($sql) === TRUE) {
    echo "<p style="."text-align:center;"." >Mark Uploaded successfully</p>";
	echo "<br>";
	echo "<p style="."text-align:center;"." ><a href="."uMark.php".">Upload Another</a></p>";
	echo "<br>";
	echo "<p style="."text-align:center;"." ><a href="."teacher.php".">Back To Teacher Panel</a></p>";
	echo "<br>";
	echo "<p style="."text-align:center;"." ><a href="."logOut.php".">Log Out</a></p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
else{
	echo "Error: " . $sql . "<br>" . $conn->error;
	//header("Location:logOut.php");
}
?>