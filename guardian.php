<?php
session_start();
$signal="";
$un="";

$signal=$_SESSION["flag"];
//$un=$_SESSION["fla"];



if($signal=="ok"){
?>
<!DOCTYPE html>
<html>
<head>
<title >Guardian</title>
<meta charset="UTF-8">
</head>
<body>

<h1 style="text-align:center;color:blue">Welcome Guardian</h1>
<p style="text-align:center;" ><a href="markShow.php">See Your Student Progress</a></p>
<p style="text-align:center;" ><a href="mailBox.php">Mail Box</a></p>
<p style="text-align:center;" ><a href="mail.php">Send Message</a></p>
<p style="text-align:center;" ><a href="logOut.php">Logout</a></p>


</body>
</html>
<?php
}
else{
	header("Location:logOut.php");
}
?>