<?php
session_start();
$signal="";
$un="";

$signal=$_SESSION["flag"];
$un=$_SESSION["mail"];



if($signal=="oka" ||$signal=="okt"||$signal=="ok"){
?>
<html>
<head>
<title >SMS</title>
<meta charset="UTF-8">
<script>
function showHint() {
	str="<?php echo trim($un); ?>";
	//document.getElementById("spinner").style.visibility= "visible";
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			resp=JSON.parse(xmlhttp.responseText);
			msg="";
			//msgC="";
			for(i=0;i<resp.length;i++){
				msg=msg+"Sender: "+resp[i].sender+"<br>"+" Message: "+resp[i].msg+"<br><br><br>";
				//msgC=msgC+resp[i].cgpa+"<br>";
			}
			document.getElementById("txtHint").innerHTML = msg;
			//document.getElementById("spinner").style.visibility= "hidden";
		}
	};
	var url="mailBoxChk.php?signal=readCGPA&cgpa="+str;
	//var url="mailBoxChk.php?signal=readCGPA";
	//alert(url);
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}
function showAll() {
	str="<?php echo trim($un); ?>";
	//document.getElementById("spinner").style.visibility= "visible";
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			resp=JSON.parse(xmlhttp.responseText);
			msg="";
			//msgC="";
			for(i=0;i<resp.length;i++){
				msg=msg+"Receiver: "+resp[i].receiver+"<br>"+"Message: "+resp[i].msg+"<br><br><br>";
				//msgC=msgC+resp[i].cgpa+"<br>";
			}
			document.getElementById("txtHint").innerHTML = msg;
			document.getElementById("spinner").style.visibility= "hidden";
		}
	};
	var url="mailBoxChk.php?signal=read&cgpa="+str;
	//alert(url);
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}
function showData() {
	//str="<?php echo trim($un); ?>";
	//document.getElementById("spinner").style.visibility= "visible";
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			resp=JSON.parse(xmlhttp.responseText);
			msg="";
			//msgC="";
			for(i=0;i<resp.length;i++){
				msg=msg+"Sender: "+resp[i].sender+"<br>"+"Receiver: "+resp[i].receiver+"<br>"+"Message: "+resp[i].msg+"<br><br><br>";
				//msgC=msgC+resp[i].cgpa+"<br>";
			}
			document.getElementById("txtHint").innerHTML = msg;
			document.getElementById("spinner").style.visibility= "hidden";
		}
	};
	var url="mailBoxChk.php?signal=readAll";
	//alert(url);
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}
</script>
</head>
<body style="text-align:center;">

<input type="button" value="Inbox" onclick="showHint()">
<input type="button" value="Sent Item" onclick="showAll()">
<?php 
	if($signal=="oka" ){
		?>
	<input type="button" value="All Message in Database" onclick="showData()">
	<?php
	}
?>

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