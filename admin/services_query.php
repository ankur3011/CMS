<?php
include("../dataconnection/config.php");
include("header.php");
include("product_box.php");



if(isset($_POST['submit']))
{
	$data1 = mysql_real_escape_string($_POST['address']);
  $sql="update home set data='$data1'
   where id=2";
   
  $result=mysql_query($sql);
  
  if($result)
  {
  print '<script type="text/javascript">'; 
print 'alert("Service Page Details Changed Successfully")'; 
print '</script>'; 

}
}
  
  
  $sql2="select * from home where id=2";
	 $result2=mysql_query($sql2);
	 while($query2=mysql_fetch_array($result2)) {
  
?>



<form action="" method="post">
<p style="text-align: justify;">  

Here you can change the service Page Information, current details are shown in the text Area.
please fill the address specified format.
	<table cellpadding="0" cellspacing="0">
            <tbody>
			<tr height="10px"></tr>
             <tr><td style="text-align:center;font-weight:bold;"> Service Page Data</td></tr>
			
			 <tr>
			 <td style="padding:20px;">
				<textarea name="address" cols="75" rows="30" required style="background:lightsilver;"><?php echo $query2['data']; ?></textarea></td></tr>
           	<tr height="10px">
			</tr>
		
           <tr align="center">
    			<td colspan="2">
		 		 <input type="submit" name="submit" value="submit" style="background-color:darkcyan;font-size:16px;color:white;  		                    font-weight:bold" />
    			</td>
    		</tr>
			<tr height="20px"></tr>
        </tbody>
	</table>
</p>	
</form>		 

<?php
}
include("product_boxclose.php");
?>
