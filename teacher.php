<?php
session_start();
$signal="";
$un="";

$signal=$_SESSION["flag"];
//$un=$_SESSION["mail"];

//echo $un;

if($signal=="okt"){
?>
<!DOCTYPE html>
<html>
<head>
<title >Teacher</title>
<meta charset="UTF-8">
</head>
<body>

<h1 style="text-align:center;color:blue">Welcome Teacher</h1>
<p style="text-align:center;" ><a href="sAttendence.php">Attendence</a></p>
<p style="text-align:center;" ><a href="uMark.php">Mark Upload</a></p>
<p style="text-align:center;" ><a href="Stu.php">Student</a></p>
<p style="text-align:center;" ><a href="mailBox.php">Mail Box</a></p>
<p style="text-align:center;" ><a href="mail.php">Send Notice</a></p>
<p style="text-align:center;" ><a href="logOut.php">Logout</a></p>

</body>
</html>
<?php
}
else{
	header("Location:logOut.php");
}
?>