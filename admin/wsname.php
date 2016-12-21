 <?php
include("../dataconnection/config.php");
include("header.php");
include("product_box.php");

?>
		<table border="1">
		<tr>
		<td>SR NO</td>
		<td>Website Name</td>
		<td>Date </td>
		<td>Download </td>
		</tr>



<?php
	$query="select * from wsname";
	$result=mysql_query($query);
	
	while($row=mysql_fetch_array($result))
	{
		?>
		
		<tr>
		<td><?php echo $row[0] ?></td>
		<td><?php echo $row[1] ?></td>
		<td><?php echo $row[2] ?></td>
		<td><a href="zipfile/<?php echo $row[1]?>.zip">Download</a></td>
		</tr>				
		
<?php
		}


?>
</table>