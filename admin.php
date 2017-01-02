<?php
session_start();
$signal="";
$un="";

$signal=$_SESSION["flag"];

//$un=$_SESSION["mail"];
//echo $un;


if($signal=="oka"){
?>
<!DOCTYPE html>
<html>
<head>
<title >Admin</title>
<meta charset="UTF-8">
</head>
<body>

<h1 style="text-align:center;color:blue">Welcome Admin  </h1>
<p style="text-align:center;" ><a href="Gur.php">Guardian Info</a></p>
<p style="text-align:center;" ><a href="rGur.php">Register Guardian</a></p>
<p style="text-align:center;" ><a href="GurProEdit.php">Delete Guardian Profile</a></p>
<p style="text-align:center;" ><a href="Stu.php">Student Info</a></p>
<p style="text-align:center;" ><a href="rStu.php">Register Student</a></p>
<p style="text-align:center;" ><a href="stuEdit.php">Edit Student Profile</a></p>
<p style="text-align:center;" ><a href="stuDelete.php">Delete Student Profile</a></p>
<p style="text-align:center;" ><a href="Tea.php">Teacher Info</a></p>
<p style="text-align:center;" ><a href="rTea.php">Register Teacher</a></p>
<p style="text-align:center;" ><a href="teaDelete.php">Delete Teacher Profile</a></p>
<p style="text-align:center;" ><a href="markShowAll.php">Show Student Mark</a></p>
<p style="text-align:center;" ><a href="markEdit.php">Edit Student Mark</a></p>
<p style="text-align:center;" ><a href="mail.php">Send Notice</a></p>
<p style="text-align:center;" ><a href="mailBox.php">Mail Box</a></p>
<p style="text-align:center;" ><a href="logOut.php">Logout</a></p>

</body>
</html>
<?php
}
else{
	header("Location:logOut.php");
}
?>
