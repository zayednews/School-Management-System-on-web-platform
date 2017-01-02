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

<h1 style="text-align:center;color:blue">Teacher Registration</h1>


</body>
</html>

<form style="text-align:center;" action="rTeaChk.php" onsubmit="return passChk()" method="post">
<span>

	
	
	   Teacher Name: <input type="text" name="tname" value=""><br>
	  
	   
	   Teacher Email: <input type="text" name="tEmail" id="email" value=""><br>
	   
	   
	  
				
		Password: &nbsp&nbsp &nbsp &nbsp&nbsp  <input type="password" name="tPass" value=""><br>
		
		<script>

			//document.getElementById("email").onkeyup = function() {myFunction()};

					function passChk()
					{
						
						
						var e = document.getElementById("email").value;
						var atpos = e.indexOf("@");
						var dotpos = e.lastIndexOf(".");
						
						 if (atpos<1 || dotpos<atpos+2 || dotpos+2>=e.length) {
							alert("Not a valid e-mail address");
							
							return false;
						}
						else
							return true;
							
					}
</script>
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
