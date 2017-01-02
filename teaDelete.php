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
		
		gid=document.getElementById('tid').value;
		var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		//alert("alert");
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			//alert("alert");
			resp=JSON.parse(xmlhttp.responseText);
			//alert(xmlhttp.responseText);
			//msg="";
			msgE="";
			msgP="";
			msgT="";
			//msgM="";
			for(i=0;i<resp.length;i++){
				//msg=msg+resp[i].SID;
				msgE=msgE+resp[i].email;
				msgP=msgP+resp[i].name;
				msgT=msgT+resp[i].pass;
				//msgM=msgM+resp[i].Mark;
			}
			//document.getElementById("sid").value = msg;
			document.getElementById("tEmail").value = msgE;
			document.getElementById("tname").value = msgP;
			
			document.getElementById("pass").value = msgT;
			//document.getElementById("mark").value = msgM;
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
	var url="valueChk.php?signal=readjs&id="+gid;
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

<h1 style="text-align:center;color:blue">Delete Teacher Profile</h1>


</body>
</html>

<form style="text-align:center;" action="teaDeleteChk.php" method="post">
<span>

		Teacher ID: <input type="text" name="tid" id="tid" value="" onkeyup="GuarId()">
	   <span id="sideMsg">Not Given</span><br>
	
	   Teacher Name: <input type="text" name="tname" id="tname" placeholder="Not Provided"><br>
	  
	   
	   Teacher Email: <input type="text" name="tEmail" id="tEmail" placeholder="Not Provided"><br>
	   
	   Pass: <input type="password" name="pass" id="pass" placeholder="Not Provided"><br>
	   
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
