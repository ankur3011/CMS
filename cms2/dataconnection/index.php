<?php
include("config.php");

// include("header.php");
//session_destroy();


 // session_unset();
   //header("location:../cms/index.php");
		 	
	//header('Location:../home.php');
	
	$sql=mysql_query("select *from template where id=1");
		
		$row=mysql_fetch_array($sql);
		
		if($row[1]==temp1)
		{
				header("location:../cms2/home.php");
		
		}
		
		if($row[1]==temp2)
		{
			header("location:../cms/index.php");
		}
	
?>