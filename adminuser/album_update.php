<?php
include("../dataconnection/config.php");
include("header.php");
include("product_box.php");
?>
<html>
<head>
<title>UPDATE ALBUM</title>
</head>
<?php
include("../dataconnection/config.php");
$no=$_GET['no'];

$result=mysql_query("select * from albums where albumno='$no'");
$row=mysql_fetch_array($result);

if(isset($_POST['update']))
{
$albumname=$_POST['albumname'];
$eventdate=$_POST['eventdate'];
$createdate=$_POST['createdate'];
$remarks=$_POST['remarks'];

$query="update albums set albumname='$albumname',eventdate='$eventdate',createdate='$createdate',remarks='$remarks' where albumno='$no'";

mysql_query($query);
header("location:album_display.php");
}
?>

<form method="post" action="#" enctype="multipart/form-data">
<table>
<tr>
<td>Album Name: </td>
<td><input type="text" name="albumname" value="<?php echo $row[1];?>"></td>
</tr>

<tr>
<td>Event Date: </td>
<td><input type="text" name="eventdate" value="<?php echo $row[2];?>"></td>
</tr>

<tr>
<td>Create Date: </td>
<td><input type="text" name="createdate" value="<?php echo $row[3];?>"></td>
</tr>

<tr>
<td>Remarks: </td>
<td><input type="text" name="remarks" value="<?php echo $row[4];?>"></td>
</tr>

<tr>
<td><input type="submit" name="update" value="update"></td>
</tr>

<tr>
<td colspan="8" align="right">
<a href="album_display.php">Back</a> 
</td>
</tr>

</table>
</form>
</body>
</html>

