<?php
$con=mysql_connect("localhost","root","");
if(!$con){header('Location:dataconnection/setup.php');}
$db=mysql_select_db("cms",$con);
if(!$db) {header('Location:dataconnection/setup.php');}
?>