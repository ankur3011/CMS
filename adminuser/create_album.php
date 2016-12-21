<?php
include("../dataconnection/config.php");
include("header.php");
include("product_box.php");

	
?>

<html lang="en">

<form method="post" action="#" enctype="multipart/form-data">
<table>
<tr>
<td>Album Name: </td>
<td><input type="text" name="albumname"></td>
</tr>

<tr>
<td>Event Date: </td>
<td><input type="text" name="eventdate"></td>
</tr>

<tr>
<td>Create Date: </td>
<td><input type="text" name="createdate"></td>
</tr>

<tr>
<td>Remarks: </td>
<td><input type="text" name="remarks"></td>
</tr>

<tr>
<td><input type="submit" name="submit" value="submit"></td>
<td><b><a href="display_album.php">Back</a></b>
</td><br>
<br>

</tr>

</table>

<?php
if(isset($_POST['submit']))
{
include("../dataconnection/config.php");

$albumname=$_POST['albumname'];
$eventdate=$_POST['eventdate'];
$createdate=$_POST['createdate'];
$remarks=$_POST['remarks'];


$query="insert into albums (albumname,eventdate,createdate,remarks)values('$albumname','$eventdate','$createdate','$remarks')";

mysql_query($query);

header("location:display_album.php");
}
?>


</body>
</html>
