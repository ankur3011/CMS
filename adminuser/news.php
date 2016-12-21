 <?php
include("../dataconnection/config.php");
include("header.php");
include("product_box.php");

if(isset($_POST['submit1']))
{
	$dt=date("Y/m/d H:i:sa");
	
  $data1 = mysql_real_escape_string($_POST['news']);
  $data2 = mysql_real_escape_string($_POST['newsdata']);
  $sql="INSERT into news(id,news,newsdata,newsdate) VALUES('','$data1','$data2','$dt') ";
   
  $result=mysql_query($sql);
  
  if($result)
  {
	print '<script type="text/javascript">'; 
	print 'alert("NEWS ADDED Successfully")'; 
	print '</script>'; 

}
}
?>
<html>
<head>
<title>NEWS</title>
</head>
<body>
<div style="margin:20px;background:white;width:100%;">
<div class="sideheader">
<h3>
&nbsp;&nbsp;&nbsp;&nbsp;Add Latest News 
</h3>
</div> 
 <div style="margin-left:40px;">
<table border="1" width="600" style="margin-bottom:40px;" >
<tr style="background:powderblue; font-weight:bold;" > 
<td width="40">SR No.

<td width="200">News
<td width="50">Edit
<td width="50">Delete
</tr>
<?php 
$query1=mysql_query("select * from news");
$i=1; 
while($query2=mysql_fetch_array($query1))
{
?>

<tr><td><?php echo $i;?></td>
<td><?php echo $query2['news'];?></td>

<td>&nbsp;<a href="newsupdate.php?id=<?php echo $query2['id']?>">&nbsp;&nbsp;Edit&nbsp;&nbsp;</a>&nbsp;</td>
<td>&nbsp;<a href="newsdelete.php?id=<?php echo $query2['id']?>">&nbsp;&nbsp;Delete&nbsp;&nbsp;</a>&nbsp;</td><tr>
<?php
$i++;
}

?>

<form action="" method="post" name="contact" id="contact">
<p style="text-align: justify;">  

	<table cellpadding="0" cellspacing="0">
            <tbody>
	
			<tr><td> News Line:</td><td>
				<textarea name="news" cols="25" rows="5" required style="background:lightsilver;"></textarea></td></tr>
					<tr height="10px">
			</tr>
			<tr><td> News Description:</td><td>
				<textarea name="newsdata" cols="60" rows="15" required style="background:lightsilver;"></textarea></td></tr>
			<tr height="10px">
			</tr>
			 <tr align="center">
    			<td colspan="2">
		 		 <input type="submit" name="submit1" value="submit" style="background-color:darkcyan;font-size:16px;color:white;  		                    font-weight:bold" />
    			</td>
    		</tr>
			<tr height="10px">
			</tr>
        </tbody>
	</table>
	</form>		 
</body>	
</html>
	
	<?php
include("product_boxclose.php");
?>
