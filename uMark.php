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



if($signal=="okt"){
?>
<script>
	function ssId()
	{
		
		sid=document.getElementById('sid').value;
		var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		//alert("alert");
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			resp=JSON.parse(xmlhttp.responseText);
			//alert(xmlhttp.responseText);
			msg="";
			for(i=0;i<resp.length;i++){
				msg=msg+resp[i].gID;
			}
			document.getElementById("gid").value = msg;
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
	var url="valueChk.php?signal=read&id="+sid;
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

<h1 style="text-align:center;color:blue">Student Mark Upload</h1>


</body>
</html>

<form style="text-align:center;" action="uMarkChk.php" method="post">
<span>

	Student ID: <input type="text" name="sid" id="sid" value="" onkeyup="ssId()">
	   <span id="sideMsg">Not Given</span><br>
	Guardian ID: <input type="text" id="gid" name="gid" placeholder="Not Provided"><br>
	 Subject:<select name="sub" id="sub" onkeyup="sId()">
				  <option value="Bangla">Bangla</option>
				  <option value="English">English</option>
				  <option value="Math">Math</option>
				  
				  
				</select><br>
				
		Term: <select name="term" id="term" onkeyup="sId()">
				  <option value="1st Term">1st Term</option>
				  <option value="2nd Term">2nd Term</option>
				  <option value="Final Term">Final Term</option>
				  
				</select><br>
	
	   Mark: <input type="text" name="Mark" value=""><br>
	  
	   
	  
		
	<input type="submit" name="sbt" value="Upload" color="blue">
</span>
</form>
<p style="text-align:center;" ><a href="teacher.php">Back</a></p>
<p style="text-align:center;" ><a href="logOut.php">Logout</a></p>
<?php
}
else{
	header("Location:logOut.php");
}
?>
