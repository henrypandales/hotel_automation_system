<?php
 echo <<<TOP
<center><br><br>
<h1>Total bill</h1>
</center>
TOP;
$token=$_POST['tokenno'];

$con = mysql_connect("localhost","root","");
	if (!$con)
		{
		die('Could not connect: ' . mysql_error());
		}
        mysql_select_db("project", $con);
		
		
		//$days=
$result=mysql_query("select distinct b.token_no,b.amount, (select count(*) from roomtype as r  where r.uid=$token) as ROOM from bill as b, roomtype as r 
                    where b.token_no=$token");
//$days=mysql_query("select count(*) from roomtype as r where r.uid=$token");
					

echo "

		<center>
		<table width='400'>
            <tr><td><font size='3' align='left'>Token number</font></td>
			<td><font size='3' align='left'>Total Amout</font></td>
			<td><font size='3' align='left'>Total Room</font></td>		
		";

while($row=mysql_fetch_array($result))
{

echo "	
            <tr><td><font size='3' color='teal'>$row[0]</font></td>
			<td><font size='3' color='teal'>$row[1]</font></td>
			<td><font size='3' color='teal'>$row[2]</font></td> 
           </tr> 			

		";



}
echo "
  </table>
</center>
   <script>
   window.print();
   </script>
   ";
$checkout=mysql_query("update roomtype set  available=1,uid=0 where uid=$token");
$del1=mysql_query("delete from userdata where token=$token");
   
   echo <<<TOP
<center><br><br>
<a href="rhorizon.html">home</a>
</center>
TOP;
?>