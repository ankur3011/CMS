<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>oem cctv wholesaler in india</title>


<meta name="description" content="oem cctv wholesaler in india ">
<meta name="keywords" content="oem cctv wholesaler in india, cctv wholesaler in india">
</head>
</html>
<?php
include("./dataconnection/config.php");
include 'mainhead.php';
include'uptoslider.php';
include'main_content_start.php';
include'rightcolumn.php';



if(isset($_GET['Message'])){
   
}

?>		
<h1 class="componentheading">
 Login here<br>
</h1>
<?php
 if(isset($_GET['Message'])){?>
 <h3 style="color:#CC0000;"><?php  echo $_GET['Message'];
   
}
?></h3>
<p style="text-align: justify;"> 

		<form method="post"  action="login_query.php">
		<table cellpadding="0" cellspacing="0">
            <tbody>
			<tr>
			<td>User Name:
			<td><input class="valid1" name="UserName" type="email"  required  placeholder="Enter a valid email " pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?" title="enter valid email address" /></tr>
			<tr>
			<td>Password:
			<td><input type="Password" text-input" name="password" placeholder="Password" required />
			</tr>
			
			<tr>
			<td></td>
			<td><input type="submit" value="Login" name="submit"  style="background-color:darkcyan;font-size:16px;color:white;  		                   width:80px;cursor:pointer; font-weight:bold"/><tr>
			<tr><td><a href="forgot_password.php">Forgot your password ?</a>
			
			<td><p>Don`t have an account ? <a href="inquiry.php">Sign Up</a> !</p></tr></table>
</p>
<?php

include'right_column_complete.php';
include'maincontentstop.php';
include'footer.php';

?>