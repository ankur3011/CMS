<?php
include("./dataconnection/config.php");
if(isset($_GET['id']))
{
$id=intval($_GET['id']);
//echo $id;
$sql2="select * from product where p_id='$id'";
	 $result2=mysql_query($sql2);
	 while($query2=mysql_fetch_array($result2)) {
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>cctv import image</title>
</head>

<body>
<img src="./admin/<?php echo $query2['images_path'];?>"  alt="<?php echo $query2['a_tag']; ?>"  title="<?php echo $query2['p_name']; ?>" style="" />


</body>
</html>
<?php
}
}
?>