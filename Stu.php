<?php
session_start();
$signal="";
$un="";

$signal=$_SESSION["flag"];
//$un=$_SESSION["fla"];



if($signal=="oka" ||$signal=="okt"){
?>
<html>
<head>
<title >SMS</title>
<meta charset="UTF-8">
<script>
function showHint() {
	str=document.getElementById('mytext').value;
	document.getElementById("spinner").style.visibility= "visible";
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			resp=JSON.parse(xmlhttp.responseText);
			msg="";
			//msgC="";
			for(i=0;i<resp.length;i++){
				msg=msg+"Name: "+resp[i].stuName+" Roll: "+resp[i].roll+" Class: "+resp[i].class+" Section: "+resp[i].section+" Guardian ID: "+resp[i].gID+"<br>";
				//msgC=msgC+resp[i].cgpa+"<br>";
			}
			document.getElementById("txtHint").innerHTML = msg;
			document.getElementById("spinner").style.visibility= "hidden";
		}
	};
	var url="stuChk.php?signal=readCGPA&cgpa="+str;
	//alert(url);
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}
function showAll() {
	//str=document.getElementById('mytext').value;
	//document.getElementById("spinner").style.visibility= "visible";
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			resp=JSON.parse(xmlhttp.responseText);
			msg="";
			//msgC="";
			for(i=0;i<resp.length;i++){
				msg=msg+"Name: "+resp[i].stuName+" Roll: "+resp[i].roll+" Class: "+resp[i].class+" Section: "+resp[i].section+" Guardian ID: "+resp[i].gID+"<br>";
				//msgC=msgC+resp[i].cgpa+"<br>";
			}
			document.getElementById("txtHint").innerHTML = msg;
			document.getElementById("spinner").style.visibility= "hidden";
		}
	};
	var url="stuChk.php?signal=read";
	//alert(url);
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}
</script>
</head>
<body>

<p><b>Start typing a Student ID to find Student</b></p>
Search using SID : <input type="text" id="mytext" onkeyup="showHint()"> <img id="spinner" src="loading.gif" width="20px" height="20px" style="visibility:hidden">
<p>Info of Student:</p><span id="txtHint">No Data Found</span>
<br/>
<input type="button" value="show" onclick="showHint()">
<input type="button" value="show All" onclick="showAll()">
</body>
</html>
<?php
}
else{
	header("Location:logOut.php");
}
?>