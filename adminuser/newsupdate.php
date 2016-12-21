<?php
include("../dataconnection/config.php");
include("header.php");
include("product_box.php");
if(isset($_GET['id']))
	{
		$id=intval($_GET['id']);
}
if(isset($_POST['submit1']))
{
  $data1 = mysql_real_escape_string($_POST['address']);
  $data2 = mysql_real_escape_string($_POST['address2']);
  $sql="update news set news='$data1', newsdata='$data2'
   where id='$id'";
   
  $result=mysql_query($sql);
  
  if($result)
  {
  header('location:news.php'); 

}
}

$sql2="select * from news where id='$id'";
	 $result2=mysql_query($sql2);
	 while($query2=mysql_fetch_array($result2)) {
  
?>

<div style="margin:20px;background:white;width:100%;">
<div class="sideheader">
<h3>
&nbsp;&nbsp;&nbsp;&nbsp;Update Latest News 
</h3>
</div> 

<form action="" method="post" name="contact" id="contact">
<p style="text-align: justify;">  

	<table cellpadding="0" cellspacing="0">
            <tbody>
	
			<tr><td> News Line:</td><td>
				<textarea name="address" cols="25" rows="5" required style="background:lightsilver;"><?php echo $query2['news']; ?></textarea></td></tr>
					<tr height="10px">
			</tr>
			<tr><td> News Line:</td><td>
				<textarea name="address2" cols="65" rows="15" required style="background:lightsilver;"><?php echo $query2['newsdata']; ?></textarea></td></tr>
			<tr height="10px">
			</tr>
			 <tr align="center">
    			<td colspan="2">
		 		 <input type="submit" name="submit1" value="submit" style="background-color:darkcyan;font-size:16px;color:white;  		                    font-weight:bold" />
    			</td>
    		</tr>
        </tbody>
	</table>
	</form>		 
	
	<?php
	
	}
include("product_boxclose.php");
?>

