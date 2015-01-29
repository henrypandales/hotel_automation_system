<style>
body {background-image:url('paper.gif');}

</style>
 <html>
 <body>
<?
include('sess.php');
?>
<table width='500' bgcolor='#73B4D9' align='center'><tr align='center'><td><font color='white'><big><b>Room allotment</b></big></font></td></tr></table><br /></center>
<br><br>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("project", $con); 

$result=mysql_query("select  u.token,u.fname,u.lname,r.roomno,u.indate,u.outdate from userdata as u, roomtype as r where u.token=r.uid 
					AND u.token = ( SELECT MAX( token ) FROM userdata )");

$token=mysql_query("select max(token) from userdata");
$row2=mysql_fetch_array($token);					
					
$remain=mysql_query("select r.rent*(day(u.outdate)-day(u.indate)) as TOTAL_RENT, u.fname,r.roomno,u.advance ,
				(r.rent*(day(u.outdate)-day(u.indate)))-u.advance as remain, day(u.outdate)-day(u.indate) as DAYS 
				from userdata as u,roomtype as r where u.token=r.uid and u.token=$row2[0]");
$row1=mysql_fetch_array($remain);				



//echo " token".$row1[4].$row1[0].$row1[3].$row1[5].$row2[0];

$y=mysql_query("insert into bill values ($row2[0],$row1[4])");				

echo "

		<center>
		<table width='400'>
            <tr><td><font size='3' align='left'>Token number</font></td>
			<td><font size='3' align='left'>First name</font></td>
			<td><font size='3' align='left'>Last name</font></td>
			<td><font size='3' align='left'>Room No</font></td>

			<td><font size='3'>In date</font></td>
		
			<td><font size='3'>Out date</font></td></tr>
		
		

		";

while($row=mysql_fetch_array($result))
{



echo "	
            <tr><td><font size='3' color='teal'>$row[0]</font></td>
			<td><font size='3' color='teal'>$row[1]</font></td>
			<td><font size='3' color='teal'>$row[2]</font></td> 
			<td><font size='3' color='teal'>$row[3]</font></td> 		

			<td><font size='3' color='teal'>$row[4]</font></td> 
		
			<td><font size='3' color='teal'>$row[5]</font></td></tr> 
		
		

		";



}
echo "
   </table>
   </center>
   ";
//if (!mysql_query($sql,$con))
  //{
 // die('Error: ' . mysql_error());
  //}
//echo "Unique token number";

mysql_close($con);

echo <<<TOP
<center>
<a href="rhorizon.html">home</a>
</center>
TOP;
//<a href="rhorizon.html">home</a>
?> 
