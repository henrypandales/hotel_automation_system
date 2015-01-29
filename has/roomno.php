<html>
<style>
body {background-image:url('paper.gif');}

</style>
<h1>For your roomtype availabe room numbers are:</h1>
<center> U can select any room number</center>


<?php

        $con = mysql_connect("localhost","root","");
	if (!$con)
		{
		die('Could not connect: ' . mysql_error());
		}
        mysql_select_db("project", $con);
		
		$sql = "select roomtype from checking where no=(select max(no) from checking)";

		$retval = mysql_query( $sql, $con );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
while($info = mysql_fetch_array( $retval  )) 
{ 
	$xxx = $info['roomtype'];
}

 
$data="select roomno from roomtype where type='".$xxx."' and available=1";
  $retval1 = mysql_query( $data, $con );
if(! $retval1 )
{
  die('Could not enter data: ' . mysql_error());
}

echo "<table border cellpadding=3>" ; 

while($info = mysql_fetch_array( $retval1  )) 
 { 
   echo "<th>Room nos</th> <td>".$info['roomno'] . "</td>  </tr>"; 
 } 
 echo "</table>";
mysql_close($con);
?>
<form action="roomno1.php" method="post" style="background-color:;"><br>
<center>

<font face="room1:" color="#6495ed" size="4">Room1: &nbsp;&nbsp;&nbsp;<input type="text" name="room1"><br><br>
<font face="room2:" color="#6495ed" size="4">Room2: &nbsp;&nbsp;&nbsp;<input type="text" name="room2"><br><br>
<font face="room3:" color="#6495ed" size="4">Room3: &nbsp;&nbsp;&nbsp;<input type="text" name="room3"><br><br>

<input type="submit" value="submit">
</center>
</form>
</html>