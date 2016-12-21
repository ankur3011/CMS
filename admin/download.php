<?php 
	$fpath=$_GET["file"];
	header('Content-Disposition:attachment; filename='.$_GET["file"]);
	$fp=fopen($fpath,"rb");
	fpassthru($fp);
	exit();
?>
