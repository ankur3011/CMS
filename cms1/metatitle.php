<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="images.jpg" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<?php
include("./dataconnection/config.php");
if(isset($_GET['id']))
{
		$id=$_GET['id'];
		
		$sel3=mysql_query("select * from meta where meta_id='$id'");
	
	 while($f1=mysql_fetch_array($sel3))
	 {
		 	 $p_title=$f1['title'];
			 $keyword=$f1['keyword'];
	 		 $description=$f1['description'];
			
	 }
?>


<title><?php echo $p_title;?></title>


<meta name="description" content="<?php echo $keyword; ?>">
<meta name="keywords" content="<?php echo $description;?>">

<?php } 
else
{ ?>


<?php
}



?>