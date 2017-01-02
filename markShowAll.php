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
				msg=msg+"SID: "+resp[i].SID+" GID: "+resp[i].GID+" Sub: "+resp[i].Sub+" Term: "+resp[i].Term+" Mark ID: "+resp[i].marID+" Mark : "+resp[i].Mark+"<br>";
				//msgC=msgC+resp[i].cgpa+"<br>";
			}
			document.getElementById("txtHint").innerHTML = msg;
			document.getElementById("spinner").style.visibility= "hidden";
		}
	};
	var url="markShowAllChk.php?signal=readCGPA&cgpa="+str;
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
				msg=msg+"SID: "+resp[i].SID+" GID: "+resp[i].GID+" Sub: "+resp[i].Sub+" Term: "+resp[i].Term+" Mark ID: "+resp[i].marID+" Mark : "+resp[i].Mark+"<br>";
				//msgC=msgC+resp[i].cgpa+"<br>";
			}
			document.getElementById("txtHint").innerHTML = msg;
			document.getElementById("spinner").style.visibility= "hidden";
		}
	};
	var url="markShowAllChk.php?signal=read";
	//alert(url);
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}
</script>
</head>
<body>

<p><b>Start typing a Mark ID to find Specific Student Result</b></p>
Search using Mark ID : <input type="text" id="mytext" onkeyup="showHint()"> <img id="spinner" src="loading.gif" width="20px" height="20px" style="visibility:hidden">
<p>Mark of Student:</p><span id="txtHint">No Data Found</span>
<br/>
<input type="button" value="show" onclick="showHint()">
<input type="button" value="show All Student Mark" onclick="showAll()">
</body>
</html>
<?php
}
else{
	header("Location:logOut.php");
}
?>