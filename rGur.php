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



if($signal=="oka"){
?>

<!DOCTYPE html>
<html>
<head>
<title >SMS</title>
<meta charset="UTF-8">
</head>
<body>

<h1 style="text-align:center;color:blue">Guardian Registration</h1>


</body>
</html>

<form style="text-align:center;" action="rGurChk.php" method="post">
<span>

	
	
	   Guardian Name: <input type="text" name="gname" value=""><br>
	  
	   
	   Guardian Email: <input type="text" name="gEmail" value=""><br>
	   
	  
	  
				
		Password: &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp  <input type="password" name="gPass" value=""><br>
		
		
	<input type="submit" name="sbt" value="Register" color="blue">
</span>
</form>
<p style="text-align:center;" ><a href="admin.php">Back</a></p>
<p style="text-align:center;" ><a href="logOut.php">Logout</a></p>
<?php
}
else{
	header("Location:logOut.php");
}
?>
