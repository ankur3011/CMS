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
?>
<form method="post" action="" enctype="multipart/form-data">
<table >
<tr>
		<td >
			Logo Image:
		</td>
		<td >
		<?php
		$sql1="select * from conf where lab_id=2";
	 	$result1=mysql_query($sql1);
		$query1=mysql_fetch_array($result1);
		?>
			<input name="uploadedimage" type="file" id="uploadedimage" > <?php echo $old=$query1['lab_value']; ?>
		</td>
	</tr>
<tr>
		<td >
			Title Name:
		</td>
		<td >
		<?php
		$sql2="select * from conf where lab_id=3";
	 	$result2=mysql_query($sql2);
		$query2=mysql_fetch_array($result2);
		?>
			<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
		<textarea class="ckeditor" name="tit_name" id="tit_name"><?php echo $query2['lab_value']; ?></textarea>

		</td>
	</tr>
	<tr>
		<td >
			Home Contain:
		</td>
		<td >
			<?php
		$sql3="select * from pages where page_id=3";
	 	$result3=mysql_query($sql3);
		$query3=mysql_fetch_array($result3);
		?>
			<textarea class="ckeditor" name="home_page" id="home_page" wrap="off" cols="50" rows="8"><?php echo $query3['page_des']; ?></textarea>
		</td>
	</tr>
	<tr>
		<td >
			Service Contain:
		</td>
		<td >
		<?php
		$sql4="select * from pages where page_id=1";
	 	$result4=mysql_query($sql4);
		$query4=mysql_fetch_array($result4);
		?>			
			<textarea class="ckeditor" name="service_page" id="service_page" wrap="off" cols="50" rows="8"><?php echo $query4['page_des']; ?></textarea>
		</td>
	</tr>
	<tr>
		<td >
			Contact Contain:
		</td>
		<td >
			<?php
		$sql5="select * from pages where page_id=2";
	 	$result5=mysql_query($sql5);
		$query5=mysql_fetch_array($result5);
		?>
			<textarea class="ckeditor" name="contact_page" id="contact_page" wrap="off" cols="50" rows="8"><?php echo $query5['page_des']; ?></textarea>
		</td>
	</tr>
	<tr>
	<td>
<td><input type="submit" name="submit" value="Submit" class="submit"></td>
</tr>
</table>
</form>

<?php
if(isset($_POST['submit']))
{
$title=mysql_real_escape_string($_POST['tit_name']);
$home=mysql_real_escape_string($_POST['home_page']);
$service=mysql_real_escape_string($_POST['service_page']);
 $contact=mysql_real_escape_string($_POST['contact_page']);
 
 
    $file_name=$_FILES["uploadedimage"]["name"];
	if($file_name!="")
	{
    $temp_name=$_FILES["uploadedimage"]["tmp_name"];
	$imgData =addslashes (file_get_contents($_FILES['uploadedimage']['tmp_name']));
    copy($temp_name,"../itap_files/".$file_name);
	}
	else
	{
	$file_name=$old;
	}	
	
	$imgtype=$_FILES["uploadedimage"]["type"];
    $ext= GetImageExtension($imgtype);
    $imagename=date("d-m-Y")."-".time().$ext;
	$sql="update conf set lab_value='$file_name' where lab_id=2";
	mysql_query($sql);
	$sql1="update conf set lab_value='$title' where lab_id=3";
	mysql_query($sql1);
	$sql2="update pages set page_des='$service' where page_id=1";
	mysql_query($sql2);
	$sql3="update pages set page_des='$contact' where page_id=2";
	mysql_query($sql3);
	$sql4="update pages set page_des='$home' where page_id=3";
	mysql_query($sql4);

		header("location:cmsupdate.php");
}


?>

</div>
</div>
