<?php
				include("dataconnection/config.php");

$sql2="select * from user where id=1";
	 $result2=mysql_query($sql2);
	 while($query2=mysql_fetch_array($result2)) 
	 {
		$uname=$query2['username'];
		$pass3=$query2['pass'];


	}

if (isset($_POST['submit']))
{//condition kun e click ang button
if($_POST['UserName']==$uname && $_POST['password']==$pass3)
{


session_start();//para mag start ang session
		$_SESSION['w']=$uname;
	

	header('Location:../admin/dashbord.php');
}



		
		
		else
		{
			
$Message = urlencode("Your Username or Password Are Incorrect....Please Try Again");
header("Location:login.php?Message=".$Message);

  
  
	
		}
}




?>