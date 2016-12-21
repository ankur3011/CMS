
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
           "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>
Rounded Corner website theme courtesy of Abdussamad Abdurrazzaq and WebsiteTheme.com
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="./style.css" />
</head>
<body>
<div id="banner_lc">
<div id="banner_rc">
<div id="banner_tc">
<div id="banner_bc">	
<div id="banner_bl">
<div id="banner_br">
<div id="banner_tl">
<div id="banner_tr">
<div id="banner">
  <br>
 <?php
				include("dataconnection/config.php");
					
				
					$query1="select *from conf where lab_id=3";
					$result1=mysql_query($query1);
					$row1=mysql_fetch_array($result1);
					echo $row1[2];
				
				
				?>
</div>
 <div id="top_nav">
    <a href="home.php">Home</a>
    <a href="service.php">Service</a>
    <a href="contact.php">Contact</a>

     <a href="login.php">Login</a>
    
      </div>


</div></div></div></div></div></div></div></div>
 <div class="left_sidebar_container">
		<div class="sidebar_lc">
		<div class="sidebar_rc">
		<div class="sidebar_tc">
		<div class="sidebar_bc">		
		<div class="sidebar_bl">
		<div class="sidebar_br">
		<div class="sidebar_tl">
		<div class="sidebar_tr">
		<div id="LeftSideBar">	
		<div class="SideBarItem">
			<div class="SideBarTitle">New Page</div>

<?php 

include("dataconnection/config.php");

											$query="select * from newpage";
											$result=mysql_query($query);
											while($row=mysql_fetch_array($result))
											{
												
												$a=$row['page_title'];
											?>
											
											<a href="navigation.php?name=<?php echo $a ?>"> <?php echo $a ?></a><br>
										<?php	
											}
											
											?>
	

</div>
  <div class="SideBarItem">
	<div class="SideBarTitle">Latest News</div>
	
		
	<div class="SideBarItem">
		
	<?php

	$query="select * from news order by newsdate desc";
    $result=mysql_query($query);
	while($row=mysql_fetch_array($result))
	{
												
	$newsid=$row[0];
	$news=$row[1];
	?>
											
	<a href="latestnews.php?newsid=<?php echo $newsid ?>"> <?php echo $news ?></a><br>
	<?php	
	}
											
?>
    <br><br><br><br><br><br><br><br>
	</div>
	</div></div>
        </div></div></div></div></div></div></div></div></div></div>

<?php
				include("dataconnection/config.php");

					
				
				
					$query11="select *from pages where page_id=1";
					$result11=mysql_query($query11);
					$row11=mysql_fetch_array($result11);
					echo $row11[2];
				
				
				?>	
			
<div id="content_left_only_position">
<div id="content_lc">
<div id="content_rc">
<div id="content_tc">
<div id="content_bl">
<div id="content_br">
<div id="content_tl">
</body>
</html>

