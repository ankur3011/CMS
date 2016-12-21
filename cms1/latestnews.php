<?php
include("./dataconnection/config.php");
include 'mainhead.php';
include'uptoslider.php';
include'main_content_start.php';
include'rightcolumn.php';

?>

<h1 class="componentheading">
Latest News</h1>

<p style="text-align: justify;">	
<pre style="text-align: justify;font-family:Arial, Helvetica, sans-serif;font-size:14px;color: #333;font-weight:500;">
<?php
if(isset($_GET['newsid']))
	{
		$newsid=$_GET['newsid'];
	}

							$query=mysql_query("select * from news where id='$newsid'");
							while($row=mysql_fetch_array($query))
							{
							echo $row[2];
							}
						

?>
</pre>

</p>	

<?php
include'right_column_complete.php';
include'maincontentstop.php';
include'footer.php';

?>
