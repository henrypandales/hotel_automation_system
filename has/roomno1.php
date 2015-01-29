<?php

$var2=$_POST['room1'];
$var3=$_POST['room2'];
$var4=$_POST['room3'];

$con = mysql_connect("localhost","root","");
	if (!$con)
		{
		die('Could not connect: ' . mysql_error());
		}
        mysql_select_db("project", $con);
if($var2>0)
{
	$data="update roomtype set uid =(select max(token) from userdata), available=0 where roomno=$var2";
	$retval1 = mysql_query( $data, $con );
if(! $retval1 )
{
  die('Could not enter data: ' . mysql_error());
}
	
	echo "room1 created successfully";
}
if($var3>0)
{
	$data="update roomtype set uid =(select max(token) from userdata),available=0 where roomno=$var3";
	$retval1 = mysql_query( $data, $con );
if(! $retval1 )
{
  die('Could not enter data: ' . mysql_error());
}
	
	echo "room2 created successfully";
}
if($var4>0)
{
	$data="update roomtype set uid =(select max(token) from userdata), available=0 where roomno=$var4";
	$retval1 = mysql_query( $data, $con );
if(! $retval1 )
{
  die('Could not enter data: ' . mysql_error());
}
	
	echo "room3 created successfully";
}
header("location:token.php");
?>