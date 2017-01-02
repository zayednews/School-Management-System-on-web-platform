<?php
	session_start();
	
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
	$un=$_POST['uname'];
	$pa=$_POST['pass'];
	//echo "1";
	$jsonText=getJSONFromDB("select * from admin where pass='".$pa."' and name='".$un."'");
	$jsonTextT=getJSONFromDB("select * from teacher where pass='".$pa."' and name='".$un."'");
	$jsonTextG=getJSONFromDB("select * from guardian where pass='".$pa."' and id='".$un."'");
	//echo "2";
	$jsonOb=json_decode($jsonText);
	$jsonObT=json_decode($jsonTextT);
	$jsonObG=json_decode($jsonTextG);
	//echo "3";
	//echo $un;
	//echo $pa;
	//echo $jsonOb[0]->name;
	//echo $jsonOb[0]->email;
	
	if ($un=="" || $pa=="")
	{
		
		header("Location:login.php");
	}
	
	else if ( $un==trim($jsonOb[0]->name) && $pa==trim($jsonOb[0]->pass))
	{
		$_SESSION["flag"]="oka";
		$_SESSION["mail"]=$jsonOb[0]->email;
		header("Location:admin.php");
	}
	else if ( $un==trim($jsonObT[0]->name) && $pa==trim($jsonObT[0]->pass))
	{
		$_SESSION["flag"]="okt";
		$_SESSION["mail"]=$jsonObT[0]->email;
		//echo $_SESSION["mail"];
		header("Location:teacher.php");
	}
	else if ( $un==trim($jsonObG[0]->id) && $pa==trim($jsonObG[0]->pass))
	{
		$_SESSION["flag"]="ok";
		$_SESSION["mail"]=$jsonObG[0]->email;
		$_SESSION["id"]=$jsonObG[0]->id;
		header("Location:guardian.php");
	}
	else
	{
		echo "False DATA";
		header("Location:login.php");
	}
?>