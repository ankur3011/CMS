<?php
include("../dataconnection/config.php");

error_reporting(0);
session_start(); 
if(!isset($_SESSION['w']))
  { 
 echo "<script type='text/javascript'> document.location = 'http://cctv-import.com'; </script>";
      header("Location:home.php");
    }

else
{
//delete
if(isset($_GET['id']))
{
$id=intval($_GET['id']);
	 
$query1=mysql_query("delete from news where id='$id'");

if($query1)
{	
header('location:news.php');
}
}
}
?>