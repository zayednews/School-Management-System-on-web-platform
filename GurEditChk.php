<?php
session_start();
$signal="";
$un="";

$signal=$_SESSION["flag"];
//$un=$_SESSION["fla"];



if($signal=="oka"){
	
	$gID=$_POST['gid'];
	$gName=$_POST['gname'];
	$gEmail=$_POST['gEmail'];
	$gPass=$_POST['gPass'];
	
	
	$conn = mysqli_connect("localhost", "root", "","sms");
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$sql = "INSERT INTO guardian (name, email, pass)
//VALUES ('".$gName."', '".$gEmail."', '".$gPass."')";
$sql="UPDATE guardian
SET name='".$gName."', email='".$gEmail."',pass='".$gPass."'
WHERE id='".$gID."'";

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