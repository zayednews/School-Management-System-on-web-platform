<?php
/*include("loginChk.php");

if(isset($_REQUEST['sbt'])){
	

	//echo $jsn."<br>";

}
*/
session_start();
$signal="";
$un="";

$signal=$_SESSION["flag"];
//$un=$_SESSION["fla"];



if($signal=="oka"||$signal=="okt"||$signal=="ok"){
?>

<!DOCTYPE html>
<html>
<head>
<title >SMS</title>
<meta charset="UTF-8">
</head>
<body>

<h1 style="text-align:center;color:blue">SEND Message</h1>


</body>
</html>

<form style="text-align:center;" action="mailChk.php" method="post">
<span>

	  
	   
	   Receiver Email: <input type="text" name="sendEmail" value=""><br>
	   Message : <input type="text" name="message" value=""><br>
	   
	  
		
	<input type="submit" name="sbt" value="SEND" color="blue">
</span>
</form>
<p style="text-align:center;" ><a href="logOut.php">Logout</a></p>
<?php
}
else{
	header("Location:logOut.php");
}
?>
