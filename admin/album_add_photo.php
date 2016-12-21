<?php
include("../dataconnection/config.php");
include("header.php");
include("product_box.php");
?>


<html>
<head>
<title>ADD NEW PHOTO</title>
</head>
<body>

<form method="post" action="#" enctype="multipart/form-data">
<table>

<tr>
<td>Add New Photo: </td>
<td><input type="file" name="img"></td>
</tr>

<tr>
<td><input type="submit" name="submit" value="submit"></td>
</tr>

</table>
</form>
<?php

if(isset($_POST['submit']))
{
include("../dataconnection/config.php");

$no=$_GET['no'];

$img=$_FILES['img']['name'];

$im="image/".$img;

copy($_FILES['img']['tmp_name'],"images/".$img);


$query="insert into photo (photoname,albumno)values('$img','$no')";

mysql_query($query);

mysql_close();
header("location:album_view.php?no=$no");
}
?>

</body>
</html>



