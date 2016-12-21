<?php
include("../dataconnection/config.php");
include("header.php");
include("product_box.php");?>

<div class="productdata">
<?php

//image upload
function GetImageExtension($imagetype)

    {

       if(empty($imagetype)) return false;

       switch($imagetype)

       {

           case 'image/bmp': return '.bmp';

           case 'image/gif': return '.gif';

           case 'image/jpeg': return '.jpg';

           case 'image/png': return '.png';

           default: return false;

       }

 
  }
 

//add
if(isset($_POST['submit']))
{
$filename=$_POST['p_title'];
$filecontain=$_POST['page_contain'];

if (!empty($filename)) 
{
	$query="insert into newpage(page_title,page_des)values('$filename','$filecontain')";
	mysql_query($query);
	
}

}
?>
<html>
<body>
<form method="post" action="#" enctype="multipart/form-data">
<table >
<tr>
		<td >
			Page Title:
		</td>
		<td >
		
			<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
		<input type="text" name="p_title" id="p_title" value="" required />

		</td>
	</tr>

	<tr>
		<td >
			Page Contain:
		</td>
		
		<td >
			
			<textarea class="ckeditor" name="page_contain" id="page_contain" wrap="off" cols="50" rows="8"><?php echo $query3['page_des']; ?></textarea>
		</td>
	</tr>
	<tr>
	<td>
<td><input type="submit" name="submit" value="Submit" class="submit"></td>
</tr>
	
</table>
</form>


</div>
</div>
</body>
</html>