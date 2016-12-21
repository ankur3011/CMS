
<?php
include("../dataconnection/config.php");
include("header.php");
include("product_box.php");

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
  
  
  if(isset($_GET['id']))
	{
		$id=intval($_GET['id']);
		$query1=mysql_query("select * from images_tbl where images_id='$id'");
		while($query2=mysql_fetch_array($query1))
	  {
		$delete=$query2['images_path'];


		if(isset($_POST['submit']))
			{
				
				$alter=$_POST['a_tag'];
			
				if (!empty($_FILES['uploadedimage']['name']))
				 {
 
					$file_name=$_FILES["uploadedimage"]["name"];
				
					$temp_name=$_FILES["uploadedimage"]["tmp_name"];
				
					$imgtype=$_FILES["uploadedimage"]["type"];
				
					$ext= GetImageExtension($imgtype);
				
					$imagename=date("d-m-Y")."-".time().$ext;
				
					$target_path = "slider/".$imagename;
					//echo $target_path;
					unlink($delete);
					if(move_uploaded_file($temp_name, $target_path))
					{
				
				$query3=mysql_query("update images_tbl set images_path='$target_path' alt='$alter' where images_id='$id'");
					}
  				 } 
  
  				else
  				{
  					$query3=mysql_query("update images_tbl set  alt='$alter' where images_id='$id'");
 				}
  
 				 
				if($query3)
					{
					
						
         header('location:slider_query.php');
					}

			
   }
 
 

?>

<form method="post" action="" enctype="multipart/form-data">
 
<table >
<tr><td colspan="2"> <h4>&nbsp;&nbsp;Edit Slider Image which SIZE must be Width:1000px and Height:270px&nbsp;&nbsp;</h4></td></tr>
<tr style="height:10px;"></tr>
<tr>
		<td >
			Upload  Image:
		</td>
		<td >
			<input name="uploadedimage" type="file" id="uploadedimage">
		</td>
	</tr>
	
	<tr>
		<td >
			Alter Tag:
		</td>
		<td >
			<input type="text" name="a_tag" id="a_tag" value="<?php echo $query2['alt'];?>"/>
		</td>
	</tr>
	<tr>
	
	<td>
<td><input type="submit" name="submit" value="Submit" class="submit"></td>
</tr>
<tr style="height:10px;"></tr>
</table>
</form>

<?php
}
}
include("product_boxclose.php");

?>


