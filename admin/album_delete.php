<html>
<head>
<title>DELETE ALBUM</title>
</head>
</body>
<?php
include("../dataconnection/config.php");
$no=$_GET['no'];

$query="delete from albums where albumno='$no'";
mysql_query($query);
header("location:album_display.php");
?>
</body>
</html>
