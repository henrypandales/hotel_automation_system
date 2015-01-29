<?php
echo <<<TOP
<center>
<a href="rhorizon.html">home</a>
</center>
TOP;
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("project", $con);
$roomtype= $_POST['type'];
$rent= $_POST['rent'];
$sql="update roomtype set rent=$rent where type='$roomtype'";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "The rent is updated for this roomtype";

mysql_close($con);
?> 
