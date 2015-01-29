<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("project", $con);


$var1= $_POST['firstname'];
$var2= $_POST['lastname'];
$varx= $_POST['uid'];
$var3= $_POST['dno'];
$var4= $_POST['street'];
$var5= $_POST['city'];
$var6= $_POST['state'];
$var7= $_POST['pin'];

$day1 = $_POST['day1'];
$month1 = $_POST['month1'];
$year1 = $_POST['year1'];

$date1 = "$year1-$month1-$day1"; 

$day2 = $_POST['day2'];
$month2 = $_POST['month2'];
$year2 = $_POST['year2'];

$date2 = "$year2-$month2-$day2"; 

$time= $_POST['time'];

$advance=$_POST['advance'];
$today= date("Y-m-d");
 
 

if((strtotime($today) >strtotime($date1))||(strtotime($today) >strtotime($date2)))
{ 
echo "<script Language='javaScript'>alert('Ur In/out date is expired booking not available');onclick=history.go(-2);</SCRIPT> ";

    
}
else
{

        $con = mysql_connect("localhost","root","");
	if (!$con)
		{
		die('Could not connect: ' . mysql_error());
		}
        mysql_select_db("project", $con);
//	mysql_query("update roomtype set uid = '$varx' WHERE type= (select roomtype from checking where no=(select max(no) from checking)))");
	//echo "registration successfullly";

$sql="INSERT INTO userdata(fname,lname,dno,street,city,state,pincode,indate,outdate,time,advance)VALUES('$var1','$var2','$var3','$var4','$var5','$var6','$var7','$date1','$date2','$time','$advance')";



header("location:roomno.php");

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "your details successfully taken";

mysql_close($con);

}
?> 