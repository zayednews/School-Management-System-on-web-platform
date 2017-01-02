<?php
function getData($sql){
	$conn = mysqli_connect("localhost", "root", "","sms");
	
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error());
	$arr=array();
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	return json_encode($arr);
}

if($_REQUEST['signal']=="readjson"){
	$sql="select * from guardian where id=".$_REQUEST['id'];
	//echo $sql."<br/>";
	echo getData($sql);
}
else if($_REQUEST['signal']=="read"){
	$sql="select * from student where sID=".$_REQUEST['id'];
	//echo $sql."<br/>";
	echo getData($sql);
}
else if($_REQUEST['signal']=="readjs"){
	$sql="select * from teacher where id=".$_REQUEST['id'];
	//echo $sql."<br/>";
	echo getData($sql);
}
else if($_REQUEST['signal']=="readM"){
	$sql="select * from marksheet where marID=".$_REQUEST['id'];
	//echo $sql."<br/>";
	echo getData($sql);
}
	
?>