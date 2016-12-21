<!DOCTYPE html>
<html>
  <head>
<title>oem cctv manufacturing company</title>


<meta name="description" content="oem cctv manufacturing company">
<meta name="keywords" content="oem cctv manufacturing company">

    
<?php
include("./dataconnection/config.php");

include 'mainhead.php';
include'uptoslider.php';
include'main_content_start.php';
include'rightcolumn.php';
 {
  
?>

    <style type="text/css">
    
      #map-canvas { height:  350px; width:650px;  }
	  pre
	  {
	  font-family:Verdana, Arial, Helvetica, sans-serif;
	  }
	 h2
	 {
	 color:darkcyan;
	 }
	 
    </style>
   
   
  </head>
  <body>
  <h1 class="componentheading">
	contact us<br>
  </h1>
<p style="text-align: justify;">  
  

<div style="height:auto; ">
	
</div>	
 <div id="map-canvas">
   <div style="height:auto; width:auto;float:left;margin-top:20px; margin-bottom:20px;">
  <?php
							$service=mysql_query("select * from pages where page_title='contactus'");
							while($row=mysql_fetch_array($service))
							{
							echo $row['page_des'];
							}
							?> 
    	</div>
	
	</div>
</p>
	
  </body>
</html>


  <?php
}
include'right_column_complete.php';
include'maincontentstop.php';
include'footer.php';

?>