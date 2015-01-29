<?php
if(array_key_exists("sub",$_POST))
{
	  $con=mysql_connect("localhost","root","");
	    if(!$con)
		      {
			              die("mysql not connected".mysql_error());
		       }
	           mysql_select_db("project",$con);
            

					if($_POST['type']=='manager')
					{
					$result3=mysql_query("select * from login1");
					$k=0;
					while($row3=mysql_fetch_array($result3))
					{
		

						if($row3['username']==$_POST['username']&& $row3['password']==$_POST['password'])
						{
							$k=1;
						//header("location:admin3.php");
							  $_SESSION['username']=300;
							  $_SESSION['password']=400;

							break;
						}
					}
				       	if($k==1)
					{
                                          header("location:rhorizon.html");
						
                                        }
                                        
                                        else
					{
						//echo"<script type=text/javascript>Its not a valid manager ID</script>";
                                                echo "<script Language='javaScript'>alert('It is not a existing manager');onclick=history.go(-1);</SCRIPT> ";

					}
										
}





					if($_POST['type']=='reception')
					{
					$result3=mysql_query("select * from login2");
					$k=0;
					while($row3=mysql_fetch_array($result3))
					{
		

						if($row3['username']==$_POST['username']&& $row3['password']==$_POST['password'])
						{
							$k=1;
						//header("location:admin3.php");
							  $_SESSION['username']=300;
							  $_SESSION['password']=400;

							break;
						}
					}
				       	if($k==1)
					{
                                          header("location:rhorizon1.html");
						
                                        }
                                        
                                        else
					{
						//echo"<script type=text/javascript>'Its not a valid reception ID'</script>";
                                                 echo "<script Language='javaScript'>alert('It is not a existing receptionist');onclick=history.go(-1);</SCRIPT> ";
					}




                    }

					
					
					
					if($_POST['type']=='catering')
					{
					$result3=mysql_query("select * from login3");
					$k=0;
					while($row3=mysql_fetch_array($result3))
					{
		

						if($row3['username']==$_POST['username']&& $row3['password']==$_POST['password'])
						{
							$k=1;
						//header("location:admin3.php");
							  $_SESSION['username']=300;
							  $_SESSION['password']=400;

							break;
						}
					}
				       	if($k==1)
					{
                                          header("location:food.html");
						
                                        }
                                        
                                        else
					{
						//echo"<script type=text/javascript>Its not a valid manager ID</script>";
                                                echo "<script Language='javaScript'>alert('It is not a existing catering manager');onclick=history.go(-1);</SCRIPT> ";

					}
                    }
					
}					