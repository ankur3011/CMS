<?php
include("./dataconnection/config.php");
include'uptoslider.php';
include'main_content_start.php';
include'rightcolumn.php';?>

<h1 class="componentheading">
	 	Hdcvi DVR<br>
	</h1><?php
$query1=mysql_query("select p_id, p_name, description, images_path from product where product_category='Hdcvi DVR'");

while($query2=mysql_fetch_array($query1))
{include'productshowdesign.php';
}

include'right_column_complete.php';
include'maincontentstop.php';
include'footer.php';


?>
