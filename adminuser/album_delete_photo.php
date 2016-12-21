<html>
<head>
<title>DELETE PHOTO</title>
</head>
</body>
<?php
include("../dataconnection/config.php");
$pno=$_GET['pno'];
session_start();
$no=$_SESSION['no'];
$query="delete from photo where photono='$pno'";
mysql_query($query);
header("location:album_view.php?no=$no");
?>
</body>
</html>
