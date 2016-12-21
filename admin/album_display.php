<?php
include("../dataconnection/config.php");
include("header.php");
include("product_box.php");
?>

<html>
<head>
<title>DISPLAY ALL ALBUM LIST</title>
</head>
<body>
<b><a href="album_create.php">Create New Album</a></b>

<br>
<br>
<br>
<table border='2' cellpadding="5" cellspacing="5" bgcolor="azure" bordercolor="#00FF33">
<tr><b><i>
<th>Album No</th>
<th>Album Name</th>
<th>Event Date</th>
<th>Create Date</th>
<th>Remarks</th>
<th>Show Photo</th>
<th>Edit Album</th>
<th>Delete Album</th></i></b>
</tr>

<?php
	$no=$_GET["no"];
	include("../dataconnection/config.php");

	$query="select * from albums";
	$result=mysql_query($query);
	
		while($row=mysql_fetch_array($result))
		{
			?>
		
		
		<tr>
		<td><?php echo $no=$row[0] ?></td>
		<td><?php echo $name=$row[1] ?></td>
		<td><?php echo $row[2] ?></td>
		<td><?php echo $row[3] ?></td>
		<td><?php echo $row[4] ?></td>
			
		<td><a href="album_view.php?no=<?php echo $no;?>">View Album</a></td>
		<td><a href="album_update.php?no=<?php echo $no;?>"><img src="images/edit.png" border="0"></a></td>
		<td><a href="album_delete.php?no=<?php echo $no;?>"><img src="images/drop.png" border="0"></a></td>		
		</tr>				
<?php
		}
?>
	

</table>
</body>
</html>

