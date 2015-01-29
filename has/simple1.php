<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("project", $con);


$var1= $_POST['username'];
$var2= $_POST['password'];
$var3= $_POST['newpassword'];
$var4= $_POST['type'];


if($var2==$var3)
{
    if($var4="Manager")
    {   
      
	$con = mysql_connect("localhost","root","");
	if (!$con)
		{
		die('Could not connect: ' . mysql_error());
		}
        mysql_select_db("project", $con);
	mysql_query("INSERT INTO login1 VALUES ('$var1','$var2')");

	echo "registration successfull";
        header("location:index.php");
	mysql_close($con);

    }





    if($var4="Reception")
    {

	$con = mysql_connect("localhost","root","");
	if (!$con)
		{
		die('Could not connect: ' . mysql_error());
		}
        mysql_select_db("project", $con);
	mysql_query("INSERT INTO login2 VALUES ('$var1','$var2')");

	echo "registration successfull";
        header("location:index.php");
	mysql_close($con);

     }
 if($var4="Catering")
    {

	$con = mysql_connect("localhost","root","");
	if (!$con)
		{
		die('Could not connect: ' . mysql_error());
		}
        mysql_select_db("project", $con);
	mysql_query("INSERT INTO login3 VALUES ('$var1','$var2')");

	echo "registration successfull";
        header("location:index.php");
	mysql_close($con);

     }



}
else
{
   echo "<script Language='javaScript'>alert('Your passwords are not matching,correct your passwords');onclick=history.go(-1);</SCRIPT> ";
}

?>