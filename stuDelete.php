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
		
		gid=document.getElementById('sid').value;
		var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		//alert("alert");
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			resp=JSON.parse(xmlhttp.responseText);
			//alert(xmlhttp.responseText);
			msg="";
			msgE="";
			msgP="";
			msgS="";
			msgR="";
			for(i=0;i<resp.length;i++){
				msg=msg+resp[i].stuName;
				msgE=msgE+resp[i].gID;
				msgP=msgP+resp[i].class;
				msgS=msgS+resp[i].section;
				msgR=msgR+resp[i].roll;
			}
			document.getElementById("name").value = msg;
			document.getElementById("gid").value = msgE;
			document.getElementById("class").value = msgP;
			document.getElementById("section").value = msgS;
			document.getElementById("roll").value = msgR;
			//document.getElementById("mname").innerHTML = "Mrs. "+msg;
			
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
	var url="valueChk.php?signal=read&id="+gid;
	//alert(url);
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
	}
</script>	
<!DOCTYPE html>
<html>
<head>
<title >SMS</title>
<meta charset="UTF-8">
</head>
<body>

<h1 style="text-align:center;color:blue">Student Profile Delete</h1>


</body>
</html>

<form style="text-align:center;" action="stuDeleteChk.php" method="post">
<span>

		SID: <input type="text" name="sid" id="sid" value="" onkeyup="GuarId()">
	   <span id="sideMsg">Not Given</span><br>
	
	   Student Name: <input type="text" name="name" id="name" placeholder="Not Provided"><br>
	  
	   
	   Class: <input type="text" name="class" id="class" placeholder="Not Provided"><br>
	   Section: <input type="text" name="section" id="section" placeholder="Not Provided"><br>
	   GID:	<input type="text" name="gid" id="gid" placeholder="Not Provided"><br>
	   Roll:	<input type="text" name="roll" id="roll" placeholder="Not Provided"><br>
	   
	  
		
		
	<input type="submit" name="sbt" value="Delete" color="blue">
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
