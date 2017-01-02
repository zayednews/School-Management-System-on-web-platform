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
		
		mid=document.getElementById('mid').value;
		var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		//alert("alert");
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			//alert("alert");
			resp=JSON.parse(xmlhttp.responseText);
			//alert(xmlhttp.responseText);
			msg="";
			msgE="";
			msgP="";
			msgT="";
			msgM="";
			for(i=0;i<resp.length;i++){
				msg=msg+resp[i].SID;
				msgE=msgE+resp[i].GID;
				msgP=msgP+resp[i].Sub;
				msgT=msgT+resp[i].Term;
				msgM=msgM+resp[i].Mark;
			}
			document.getElementById("sid").value = msg;
			document.getElementById("gid").value = msgE;
			document.getElementById("sub").value = msgP;
			
			document.getElementById("term").value = msgT;
			document.getElementById("mark").value = msgM;
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
	var url="valueChk.php?signal=readM&id="+mid;
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

<h1 style="text-align:center;color:blue">Edit Mark</h1>


</body>
</html>

<form style="text-align:center;" action="MarkEditChk.php" method="post">
<span>

		Mark ID: <input type="text" name="mid" id="mid" value="" onkeyup="GuarId()">
	   <span id="sideMsg">Not Given</span><br>
	
	   SID: <input type="text" name="sid" id="sid" placeholder="Not Provided"><br>
	  
	   
	   GID: <input type="text" name="gid" id="gid" placeholder="Not Provided"><br>
	   
	   Subject: <input type="text" name="sub" id="sub" placeholder="Not Provided"><br>
	   
	   Term: <input type="text" name="term" id="term" placeholder="Not Provided"><br>
	   
	  Mark: <input type="text" name="mark" id="mark" placeholder="Not Provided"><br>
				
		
		
	<input type="submit" name="sbt" value="Edit" color="blue">
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
