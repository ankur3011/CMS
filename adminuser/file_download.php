
<?php 
	$fpath=$_GET["files"];

header('Content-Description:File Transfer');
header('Content-Type:application/sql');
header('Content-Length:'.filesize($fpath));
header('Content-Disposition:attachment;filename='.$_GET["files"]);
$fp=fopen($fpath,"rb");
fpassthru($fp);
exit();
?>
