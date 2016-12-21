<?php
include("dataconnection/config.php");

// include("header.php");
//session_destroy();


 // session_unset();
   //header("location:../cms/index.php");
		 	
	//header('Location:../home.php');
	
	$sql=mysql_query("select *from template where id=1");
		
		$row=mysql_fetch_array($sql);
		
		if($row[1]==template1)
		{
				header("location:cms1/home.php");
		
		}
		
		if($row[1]==template2)
		{
			header("location:cms2/index.php");
		}
		
		if($row[1]==template3)
		{
			header("location:cms3/index.php");
		}
	
?>