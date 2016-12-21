<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>NEW PAGE </title>
<meta name="description" content="cctv camera printing ,camera box packing,camera assembling ">
<meta name="keywords" content="cctv camera printing, cctv camera box packing, cctv camera assembling,600 tvl cctv camera, 700 tvl cctv camera, 1200 tvl cctv camera, 720 tvl cctv camera, 800 tvl cctv camera, dome cctv camera, bullet cctv camera">
</head>
</html>
<?php
include 'mainhead.php';
include'uptoslider.php';
include'main_content_start.php';
include'rightcolumn.php';
{
?>
<h1 class="componentheading">
   <?php 
  $filename=$_GET['name'];
  echo $filename ?> <br>
</h1>
<div style="height:350px; width:100%; margin-top:15px;margin-left:50px">
<p style="text-align: justify; font-size:14px;">	
<pre style="text-align: justify;font-family:Arial, Helvetica, sans-serif;font-size:14px;color: #333;font-weight:500;">
<?php
							$service=mysql_query("select * from newpage where page_title='$filename'");
							while($row=mysql_fetch_array($service))
							{
							echo $row['page_des'];
							}
							?>
</pre>
</p>
<?php
}
include'right_column_complete.php';
include'maincontentstop.php';
include'footer.php';
?>