<?php
/*include("loginChk.php");

if(isset($_REQUEST['sbt'])){
	

	//echo $jsn."<br>";

}
*/
?>
<!DOCTYPE html>
<html>
<head>
<title >SMS</title>
<meta charset="UTF-8">
</head>
<body>

<h1 style="text-align:center;color:blue">LOGIN</h1>
<p style="color:red;"><marquee>*Login Panel for Administration, Teacher & Gurdian ! ! !</marquee></p>

</body>
</html>

<form style="text-align:center;" action="loginChk.php" method="post">
<span>
	
	   User Name / ID: <input type="text" name="uname" value=""><br>
	Password:&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp <input type="password" name="pass" value=""><br>
	<input type="submit" name="sbt" value="Login" color="blue">
</span>
</form>