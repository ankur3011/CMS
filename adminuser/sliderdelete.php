<?php

include("../dataconnection/config.php");





error_reporting(0);
session_start(); 
if(!isset($_SESSION['w']))
  { //echo "yyyyyyyyyyy".$_SESSION['w'];
 echo "<script type='text/javascript'> document.location = 'http://cctv-import.com'; </script>";
      header("Location: http://cctv-import.com/home.php");
    }

else
{








//delete
if(isset($_GET['id']))
{
$id=intval($_GET['id']);
//echo $id;
$sql2="select * from images_tbl where images_id='$id'";
	 $result2=mysql_query($sql2);
	 /* if($result2)
	  {
	  echo"yes";
	  }*/
	  while($query2=mysql_fetch_array($result2))
		{
	 //echo $query2['product_category'];
	 $temp_delet=$query2['images_path'];
	 //echo $temp_delet;}
	unlink($temp_delet);
	 }
	 
$query1=mysql_query("delete from images_tbl where images_id='$id'");

if($query1)
{
		
header('location:slider_query.php');
}
}
	}
?>