<?php
session_start();
$signal="";
$un="";

$signal=$_SESSION["flag"];
//$un=$_SESSION["fla"];



if($signal=="oka"){
	
	$gID=$_POST['mid'];
	$gName=$_POST['sid'];
	$gEmail=$_POST['gid'];
	$gPass=$_POST['sub'];
	$gTerm=$_POST['term'];
	$gMark=$_POST['mark'];
	
	
	$conn = mysqli_connect("localhost", "root", "","sms");
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$sql = "INSERT INTO guardian (name, email, pass)
//VALUES ('".$gName."', '".$gEmail."', '".$gPass."')";
$sql="UPDATE marksheet
SET SID='".$gName."', GID='".$gEmail."',Sub='".$gPass."',Term='".$gTerm."',Mark='".$gMark."'
WHERE marID='".$gID."'";

if ($conn->query($sql) === TRUE) {
    echo "<p style="."text-align:center;"." >New record Updated successfully</p>";
	echo "<br>";
	echo "<p style="."text-align:center;"." ><a href="."markEdit.php".">Update Another</a></p>";
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