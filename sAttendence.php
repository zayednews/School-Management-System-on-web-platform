<?php
session_start();
$signal="";
$un="";

$signal=$_SESSION["flag"];
//$un=$_SESSION["fla"];



if($signal=="okt"){
?>
<script>
function da()
	{
		document.getElementById("date").value = Date();
	}
</script>

<html>
<head>
<title >SMS</title>
<meta charset="UTF-8">
</head>
<body>

<h1 style="text-align:center;color:blue">Attendence</h1>

</body>
</html>

<form style="text-align:center;" action="sAttChk.php" method="post">
<span>
Class:<select name="class" id="class" >
				  <option value="01">One</option>
				  <option value="02">Two</option>
				  <option value="03">Three</option>
				  <option value="04">Four</option>
				  <option value="05">Five</option>
				  <option value="06">Six</option>
				  <option value="07">Seven</option>
				  <option value="08">Eight</option>
				  <option value="09">Nine</option>
				  <option value="10">Ten</option>
				  
				</select>
				
		Section: <select name="section" id="section" onkeyup="da()">
				  <option value="01">A</option>
				  <option value="02">B</option>
				  <option value="03">C</option>
				  <option value="04">D</option>
				</select>
				Date: <input type="code" id="date" name="date" placeholder="Not Provided"><br>
  <input type="checkbox" name="sAtt[]" value="01" checked> Roll no 1<br>
<input type="checkbox" name="sAtt[]" value="02" checked> Roll no 2<br>
  <input type="checkbox" name="sAtt[]" value="03" checked> Roll no 3<br>
	<input type="checkbox" name="sAtt[]" value="04" checked> Roll no 4<br>
  <input type="checkbox" name="sAtt[]" value="05" checked> Roll no 5<br>
  
	
	     
<input type="submit" name="sbt" value="Submit" color="blue"> <br>
</span>
</form>
<?php




}
else{
	header("Location:logOut.php");
}
?>