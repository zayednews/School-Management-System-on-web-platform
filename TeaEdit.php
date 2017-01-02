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
		
		tid=document.getElementById('tid').value;
		var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		//alert("alert");
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			resp=JSON.parse(xmlhttp.responseText);
			//alert(xmlhttp.responseText);
			msg="";
			msgE="";
			msgP="";
			for(i=0;i<resp.length;i++){
				msg=msg+resp[i].name;
				msgE=msgE+resp[i].email;
				msgP=msgP+resp[i].pass;
			}
			document.getElementById("tname").value = msg;
			document.getElementById("tEmail").value = msgE;
			document.getElementById("tPass").value = msgP;
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
	var url="valueChk.php?signal=readjs&id="+tid;
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

<h1 style="text-align:center;color:blue">Teacher Profile Edit</h1>


</body>
</html>

<form style="text-align:center;" action="TeaEditChk.php" method="post">
<span>

		Teacher ID: <input type="text" name="tid" id="tid" value="" onkeyup="GuarId()">
	   <span id="sideMsg">Not Given</span><br>
	
	   Teacher Name: <input type="text" name="tname" id="tname" placeholder="Not Provided"><br>
	  
	   
	   Teacher Email: <input type="text" name="tEmail" id="tEmail" placeholder="Not Provided"><br>
	   
	   
	  
				
		Password: &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp  <input type="password" name="tPass" id="tPass" placeholder="Not Provided"><br>
		
		
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
