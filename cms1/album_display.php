
<?php
include("./dataconnection/config.php");
include 'mainhead.php';
include'uptoslider.php';
include'main_content_start.php';
include'rightcolumn.php';
{
  
?>

<html>
<body>
<h2 align="center">Albums</h2>
	<table align="center" border='1' cellpadding="2" cellspacing="2" bgcolor="azure">
<tr>
  <tr><td colspan="8" align="center"> New Album List</td></tr>
<th>Album No</th>
<th>Album Name</th>
<th>Event Date</th>
<th>Create Date</th>
<th>Remarks</th>
<th>View Album</th>

</tr>
<?php
session_start();
 include("dataconnection\config.php");
	$query="select * from albums";
	$result=mysql_query($query);
	$count=0;
	while($row=mysql_fetch_array($result))
	{	$count++;
		$no=$row[0];
					?>
		
		<tr>
		
		<td><?php echo $count?></td>
		<td><?php echo $name=$row[1]?></td>
		<td><?php echo $row[2]?></td>
		<td><?php echo $row[3]?></td>
		<td><?php echo $row[4]?></td>
	
		<td><a href="album_view.php?no=<?php echo $no?>"><img src="../admin/images/album.jpg" border="0" width="30" height="30"></a></td>
			
		</tr>
	<?php 
	}

?>
</table>

  <?php
}
include'right_column_complete.php';
include'maincontentstop.php';
include'footer.php';

?>
</body>
</html>
