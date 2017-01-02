<?php
session_start();
$signal="";
$un="";

$signal=$_SESSION["flag"];
//$un=$_SESSION["mail"];

$id=$_SESSION["id"];


if($signal=="ok"){
?>
<html>
<head>
<title >SMS</title>
<meta charset="UTF-8">
<script>
function showHint() {
	str="<?php echo trim($id); ?>";
	//document.getElementById("spinner").style.visibility= "visible";
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			resp=JSON.parse(xmlhttp.responseText);
			msg="";
			//msgC="";
			for(i=0;i<resp.length;i++){
				msg=msg+"SID: "+resp[i].SID+" Sub: "+resp[i].Sub+" Term: "+resp[i].Term+" Mark: "+resp[i].Mark+"<br><br><br>";
				//msgC=msgC+resp[i].cgpa+"<br>";
			}
			document.getElementById("txtHint").innerHTML = msg;
			//document.getElementById("spinner").style.visibility= "hidden";
		}
	};
	var url="markShowChk.php?signal=readCGPA&cgpa="+str;
	//var url="mailBoxChk.php?signal=readCGPA";
	//alert(url);
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}
</script>
</head>
<body style="text-align:center;">

<input type="button" value="Result" onclick="showHint()">


<br/>

<span id="txtHint"></span>
<br/>

<br/>
</body>
</html>
<?php
}
else{
	header("Location:logOut.php");
}
?>