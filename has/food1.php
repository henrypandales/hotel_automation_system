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
//$var1= $_POST['room'];
$var2= $_POST['token'];

$var3= $_POST['Appetizer'];
$var4= $_POST['Beverage'];
$var5= $_POST['Rice'];
$var6= $_POST['Veg'];
//$var7= $_POST['Cur'];
$var8=$var3+$var4+$var5+$var6;

$sql="update bill set amount=amount+$var8 where  token_no=$var2";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "The bill is updated for this food items";

mysql_close($con);
?> 
