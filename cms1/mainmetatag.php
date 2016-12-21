<?php

if(isset($_GET['id']))
{
		$id=intval($_GET['id']);
		
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
