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
  
  
  if(isset($_POST['submit']))
{
 
	
	$alter=$_POST['a_tag']; 

 if (!empty($_FILES["uploadedimage"]["name"])) {
    $file_name=$_FILES["uploadedimage"]["name"];

    $temp_name=$_FILES["uploadedimage"]["tmp_name"];

    $imgtype=$_FILES["uploadedimage"]["type"];

    $ext= GetImageExtension($imgtype);

    $imagename=date("d-m-Y")."-".time().$ext;

    $target_path = "slider/".$imagename;
if(move_uploaded_file($temp_name, $target_path)) {

$query_upload="INSERT into images_tbl(images_id,images_path,alt) VALUES('','".$target_path."','$alter')";

    mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error()); 


}else{

 

   exit("Error While uploading image on the server");
}
}

if($query_upload)
{
print '<script type="text/javascript">'; 
print 'alert("Slider Image added successfully")'; 
print '</script>'; 
}
}


?>
<form method="post" action="" enctype="multipart/form-data">
 
<table >
<tr><td colspan="2"> <h4>&nbsp;&nbsp;Upload New Slider Image which SIZE must be Width:1000px and Height:270px&nbsp;&nbsp;</h4></td></tr>
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
			SLIDER Below Tag:
		</td>
		<td >
			<input type="text" name="a_tag" id="a_tag" required />
		</td>
	</tr>
	<tr>
	<td>
<td><input type="submit" name="submit" value="Submit" class="submit"></td>
</tr>
<tr style="height:10px;"></tr>
</table>
</form>

 <div class="space">
</div>

<div>
 
<table border='1' width="650">

<tr style="background:powderblue; font-weight:bolder; font-size:18px;"><td>&nbsp;&nbsp;Sr.&nbsp;&nbsp;</td><td>&nbsp;&nbsp;images&nbsp;&nbsp;</td><td>&nbsp;&nbsp;edit &nbsp;&nbsp;</td><td>&nbsp;&nbsp;Delete&nbsp;&nbsp;</td></tr>
<?php

$i=1; 
$query1=mysql_query("select * from images_tbl");
while($query2=mysql_fetch_array($query1))
{

?>


 <tr><td><?php echo $i;?></td>
 <td><img src="<?php echo $query2['images_path'];?>" alt="" height="100" width="300" /></td>


<?php echo "<td><a href='slideredit.php?id=".$query2['images_id']."'>&nbsp;&nbsp;edit&nbsp;&nbsp;</a></td>";?>
  
<?php echo "<td><a href='sliderdelete.php?id=".$query2['images_id']."'>&nbsp;&nbsp;Delete&nbsp;&nbsp;</a></td>";?>
  
 
  
<?php

$i++;
}
?>
</tr>
</table>
 </div>


<?php
include("product_boxclose.php");

?>

