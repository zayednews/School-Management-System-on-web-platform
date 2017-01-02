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
			msgE="";
			msgP="";
			for(i=0;i<resp.length;i++){
				msg=msg+resp[i].name;
				msgE=msgE+resp[i].email;
				msgP=msgP+resp[i].pass;
			}
			document.getElementById("gname").value = msg;
			document.getElementById("gEmail").value = msgE;
			document.getElementById("gPass").value = msgP;
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
	var url="valueChk.php?signal=readjson&id="+gid;
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

<h1 style="text-align:center;color:blue">Guardian Profile Edit</h1>


</body>
</html>

<form style="text-align:center;" action="GurEditChk.php" method="post">
<span>

		Guardian ID: <input type="text" name="gid" id="gid" value="" onkeyup="GuarId()">
	   <span id="sideMsg">Not Given</span><br>
	
	   Guardian Name: <input type="text" name="gname" id="gname" placeholder="Not Provided"><br>
	  
	   
	   Guardian Email: <input type="text" name="gEmail" id="gEmail" placeholder="Not Provided"><br>
	   
	   
	  
				
		Password: &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp  <input type="password" name="gPass" id="gPass" placeholder="Not Provided"><br>
		
		
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
