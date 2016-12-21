<?php

include("./dataconnection/config.php");
if(isset($_POST['text_user']))//If a username has been submitted
	{
	$username = mysql_real_escape_string($_POST['text_user']);//Some clean up :)
	 
	$check_for_username = mysql_query("SELECT text_user FROM register WHERE text_user='$username'");
//Query to check if username is available or not
	 
	if(mysql_num_rows($check_for_username))
	{
	echo '1';//If there is a  record match in the Database - Not Available
	}
	else
	{
	echo '0';//No Record Found - Username is available
	}
	}

?>