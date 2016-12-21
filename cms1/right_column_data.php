
<p style="text-align: justify;">
<pre style="text-align: justify;font-family:Arial, Helvetica, sans-serif;font-size:14px;color: #333;font-weight:500;">
<?php
							$pa_contain=mysql_query("select * from pages where page_title='home'");
							while($row=mysql_fetch_array($pa_contain))
							{
							echo $row['page_des'];
							}
							?>

</pre>

</p>
