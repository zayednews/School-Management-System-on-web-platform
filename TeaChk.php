<?php

function getJSONFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","sms");
	
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error());
	$arr=array();
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	return json_encode($arr);
}
if($_REQUEST["signal"]=="readCGPA"){
	echo getJSONFromDB("select name,email,pass from teacher where id=".$_REQUEST["cgpa"]);
}
else if($_REQUEST["signal"]=="read"){
	echo getJSONFromDB("select * from teacher ");
}
else{
	echo "Invalid request";
}


$str="";for($i=0;$i<100000;$i++){$str.="slowing down";}
?>