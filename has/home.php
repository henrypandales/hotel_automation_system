<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("project", $con);
$var1= $_POST['roomtype'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];

$date = "$year-$month-$day"; 


$var2=$_POST['room'];
$var3=$_POST['adults'];

$var4= $_POST['child'];
$today= date("Y-m-d");
 
 

if(strtotime($today) >strtotime($date)){ 
echo "<script Language='javaScript'>alert('Ur date is expired booking not available');onclick=history.go(-2);</SCRIPT> ";

    
}

else
{

$sql="INSERT INTO checking(roomtype,date,room,adults,child)VALUES('$var1','$date','$var2','$var3','$var4')";
header("location:form.html");

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "Reservation is available";

mysql_close($con);
}
?> 
