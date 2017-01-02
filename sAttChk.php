<?php
session_start();
$signal="";
$un="";

$signal=$_SESSION["flag"];
//$un=$_SESSION["fla"];



if($signal=="okt"){
	//$result="";
	
	
	$sName=$_POST['class'];
	$sGid=$_POST['section'];
	$sClass=$_POST['date'];
	//$sSec=$result;
	//$sID=$_POST['Mark'];
	//$sRoll=$_POST['sRoll'];
	
	$conn = mysqli_connect("localhost", "root", "","sms");
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
		if(!empty($_POST['sAtt'])){
		foreach($_POST['sAtt'] as $chk ){
			//echo $chk;
			//$result=$result+""+$chk;
		
			$sql = "INSERT INTO attendence (class, section, date,present)
			VALUES ('".$sName."', '".$sGid."', '".$sClass."', '".$chk."')";

			if ($conn->query($sql) === TRUE) {
				
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
		
	}
	echo "<p style="."text-align:center;"." >Attendence taken successfully</p>";
				echo "<br>";
				echo "<p style="."text-align:center;"." ><a href="."teacher.php".">Back To Teacher Panel</a></p>";
				echo "<br>";
				echo "<p style="."text-align:center;"." ><a href="."logOut.php".">Log Out</a></p>";
$conn->close();
}
else{
	echo "Error: " . $sql . "<br>" . $conn->error;
	//header("Location:logOut.php");
}
?>
<html>
<head>
<title >SMS</title>
<meta charset="UTF-8">
</head>