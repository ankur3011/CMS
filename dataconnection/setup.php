<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Setup page</title>
<?php
if(isset($_POST['submit']))
	{
	$username=$_POST['userid'];
	$password=$_POST['pass'];
	$dbname=$_POST['dbname'];
	$host=$_POST['host'];
	
	$fname = "config.php";
$fhandle = fopen($fname,"r");
$content = fread($fhandle,filesize($fname));
$content = str_replace("localhost", $host, $content);
$fhandle = fopen($fname,"w");
fwrite($fhandle,$content);
fclose($fhandle);
$fhandle = fopen($fname,"r");
$content = fread($fhandle,filesize($fname));
$content = str_replace("root", $username, $content);
$fhandle = fopen($fname,"w");
fwrite($fhandle,$content);
fclose($fhandle);
$fhandle = fopen($fname,"r");
$content = fread($fhandle,filesize($fname));
$content = str_replace("cms", $dbname, $content);
$fhandle = fopen($fname,"w");
fwrite($fhandle,$content);
fclose($fhandle);


//login page change
$fname = "../cms1/login_query.php";
$fhandle = fopen($fname,"r");
$content = fread($fhandle,filesize($fname));
$content = str_replace("admin", "adminuser", $content);
$fhandle = fopen($fname,"w");
fwrite($fhandle,$content);
fclose($fhandle);

//database replace
$fname = "project.sql";
$fhandle = fopen($fname,"r");
$content = fread($fhandle,filesize($fname));
$content = str_replace("cms", $dbname, $content);
$fhandle = fopen($fname,"w");
fwrite($fhandle,$content);
fclose($fhandle);

//cms1 database
$fname = "../cms1/dataconnection/config.php";
$fhandle = fopen($fname,"r");
$content = fread($fhandle,filesize($fname));
$content = str_replace("cms", $dbname, $content);
$fhandle = fopen($fname,"w");
fwrite($fhandle,$content);
fclose($fhandle);


// Name of the file
$filename = 'project.sql';
// MySQL host
$mysql_host = $host;
// MySQL username
$mysql_username = $username;
// MySQL password
$mysql_password = '';
// Database name
$mysql_database = $dbname;

// Connect to MySQL server
mysql_connect($mysql_host, $mysql_username, $mysql_password) or die('Error connecting to MySQL server: ' . mysql_error());
// Select database
mysql_select_db($mysql_database) or die('Error selecting MySQL database: ' . mysql_error());

// Temporary variable, used to store current query
$templine = '';
// Read in entire file
$lines = file($filename);
// Loop through each line
foreach ($lines as $line)
{
// Skip it if it's a comment
if (substr($line, 0, 2) == '--' || $line == '')
    continue;

// Add this line to the current segment
$templine .= $line;
// If it has a semicolon at the end, it's the end of the query
if (substr(trim($line), -1, 1) == ';')
{
    // Perform the query
    mysql_query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
    // Reset temp variable to empty
    $templine = '';
}
}
 


header('location:../../bk');
	}
?>
</head>

<body>
<form name="setu" method="post">
<center><h1>Setup page</h1></center>
<table width="286" height="43">
<tr>
<td>Database name</td>
<td><input type="text"  name="dbname"/></td>
</tr>
<tr>
<td>Host server</td>
<td><input type="text" name="host" /></td>
</tr>
<tr>
<td>User id</td>
<td><input type="text" name="userid" /></td>
</tr>
<tr>
<td>Password</td>
<td><input type="text" name="pass" /></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="submit" value="submit" /></td>
</tr>
</table>
</form>
</body>
</html>
