<?php
include("../dataconnection/config.php");
include("header.php");
include("product_box.php");

	
		
		if(isset($_POST["template1"]))
		{
			$a=$_POST["template1"];
			
			include("../dataconnection/config.php");

			mysql_query("update template set name='$a' where id=1");
					
		}
		
		if(isset($_POST["template2"]))
		{
			$a=$_POST["template2"];
			
			include("../dataconnection/config.php");

			mysql_query("update template set name='$a' where id=1");
					
		}
		
		
		if(isset($_POST["template3"]))
		{
			$a=$_POST["template3"];
			
			include("../dataconnection/config.php");

			mysql_query("update template set name='$a' where id=1");
					
		}
		
?>
<html>
<body>
<div class="productdata">

<html>
<body>
<table>
<form name="template" method="post">

Select Template
	

<br>
<tr>
<td><img src='images/template1.png' width='300' height='300'>&nbsp;&nbsp;&nbsp;</td>
<td><img src='images/Koala.jpg' width='300' height='300'>&nbsp;&nbsp;&nbsp;</td>
<td><img src='images/Tulips.jpg' width='300' height='300'>&nbsp;&nbsp;&nbsp;</td>
</tr>

<tr>
<td align="center"><input type="submit" name="template1" value="template1"></td>
<td align="center"><input type="submit" name="template2" value="template2"></td>
<td align="center"><input type="submit" name="template3" value="template3"></td>
</tr>

</form>
</body>
</html>
</div>