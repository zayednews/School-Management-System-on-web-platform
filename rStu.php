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
<script>
	function GuarId()
	{
		
		gid=document.getElementById('gid').value;
		var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		//alert("alert");
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			resp=JSON.parse(xmlhttp.responseText);
			//alert(xmlhttp.responseText);
			msg="";
			for(i=0;i<resp.length;i++){
				msg=msg+resp[i].name+"<br>";
			}
			document.getElementById("fname").innerHTML = msg;
			document.getElementById("mname").innerHTML = "Mrs. "+msg;
			
		}
		if (msg=="")
		{
			document.getElementById("sideMsg").innerHTML = "Wrong Input";
		}
		else
		{
			document.getElementById("sideMsg").innerHTML = "Correct Input";
		}
	};
	var url="valueChk.php?signal=readjson&id="+gid;
	//alert(url);
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
	}
	function sId()
	{
		a=document.getElementById('class').value;
		b=document.getElementById('section').value;
		c=document.getElementById('gid').value;
		document.getElementById("sid").value = "2016"+a+b+c;
		
		
		
	
	}
</script>
<!DOCTYPE html>
<html>
<head>
<title >SMS</title>
<meta charset="UTF-8">
</head>
<body>

<h1 style="text-align:center;color:blue">Student Registration</h1>


</body>
</html>

<form style="text-align:center;" action="rStuChk.php" method="post">
<span>

	Guardian ID: <input type="text" name="gid" id="gid" value="" onkeyup="GuarId()">
	   <span id="sideMsg">Not Given</span><br>

	 Class:<select name="class" id="class" onkeyup="sId()">
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
				  
				</select><br>
				
		Section: <select name="section" id="section" onkeyup="sId()">
				  <option value="01">A</option>
				  <option value="02">B</option>
				  <option value="03">C</option>
				  <option value="04">D</option>
				</select><br>
	
	   Student Name: <input type="text" name="sname" value=""><br>
	  
	   
	   Father Name: <span id="fname" name="fname">Not Available in database</span><br>
	   Mother Name: <span id="mname" name="mname">Not Available in database</span><br>
	   
	   
	  
				
		Student ID: <input type="text" id="sid" name="sid" placeholder="Not Provided"><br>
		Student Roll: <input type="text" id="sRoll" name="sRoll" ><br>
		
		
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
