<?php
session_start();
$signal="";
$un="";

$signal=$_SESSION["flag"];
//$un=$_SESSION["fla"];



if($signal=="oka"){
	
	$gID=$_POST['sid'];
	$gName=$_POST['name'];
	$gEmail=$_POST['class'];
	$gPass=$_POST['section'];
	$id=$_POST['gid'];
	$roll=$_POST['roll'];
	
	
	$conn = mysqli_connect("localhost", "root", "","sms");
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$sql = "INSERT INTO guardian (name, email, pass)
//VALUES ('".$gName."', '".$gEmail."', '".$gPass."')";
$sql="UPDATE student
SET stuName='".$gName."', class='".$gEmail."',section='".$gPass."',roll='".$roll."',gID='".$id."'
WHERE sID='".$gID."'";

if ($conn->query($sql) === TRUE) {
    echo "<p style="."text-align:center;"." >New record Updated successfully</p>";
	echo "<br>";
	echo "<p style="."text-align:center;"." ><a href="."GurEdit.php".">Update Another</a></p>";
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