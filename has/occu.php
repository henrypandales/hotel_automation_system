<html>
<style>
body {background-image:url('paper.gif');}

</style>

<h1>Occupancy Rate</h1>
<center>The hotel occupancy rate is:
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("project", $con);
$sql=mysql_query("select count(*) from roomtype where available=0");
$row=mysql_fetch_array($sql);	
				
echo $row[0]."%";


   echo <<<TOP
<center><br><br>
<a href="rhorizon.html">home</a>
</center>
TOP;
?>
</center>
</html>