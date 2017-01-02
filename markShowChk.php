<?php

function getJSONFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","sms");
	
	//echo "alert($sql)";
	$result = mysqli_query($conn, $sql)or die(mysqli_error());
	$arr=array();
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	return json_encode($arr);
}
if($_REQUEST["signal"]=="readCGPA"){
	//$m=$_REQUEST["cgpa"];
	echo getJSONFromDB("select SID,Sub,Term,Mark from marksheet where GID=".$_REQUEST["cgpa"]);
}

else{
	echo "Invalid request";
}


$str="";for($i=0;$i<100000;$i++){$str.="slowing down";}
?>