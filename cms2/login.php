<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>Solutions  by Free CSS Templates</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
	<div id="logo">
		
		<?php
				include("dataconnection/config.php");
					
				
					$query1="select *from conf where lab_id=3";
					$result1=mysql_query($query1);
					$row1=mysql_fetch_array($result1);
					echo $row1[2];
				
				
				?>
	
	</div>
	<hr />
	<!-- end #logo -->
	<div id="header">
		<div id="menu">
			<ul>
				<li><a href="home.php" class="first">Home</a></li>
				<li class="current_page_item"><a href="service.php">service</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="login.php">login</a></li>
				
			</ul>
		</div>
		<!-- end #menu -->
		<!-- end #search -->
	</div>
	<!-- end #header -->
	<!-- end #header-wrapper -->
	<div id="page">
		<div id="content">
			<div class="post">

<?php
include("./dataconnection/config.php");



if(isset($_GET['Message'])){
   
}

?>		
<h1 class="componentheading">
 Login here<br>
</h1>
<?php
 if(isset($_GET['Message'])){?>
 <h3 style="color:#CC0000;"><?php  echo $_GET['Message'];
   
}
?></h3>
<p style="text-align: justify;"> 

		<form method="post"  action="login_query.php">
		<table cellpadding="0" cellspacing="0">
            <tbody>
			<tr>
			<td>User Name:
			<td><input class="valid1" name="UserName" type="email"  required  placeholder="Enter a valid email " pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?" title="enter valid email address" /></tr>
			<tr>
			<td>Password:
			<td><input type="Password" text-input" name="password" placeholder="Password" required />
			</tr>
			
			<tr>
			<td></td>
			<td><input type="submit" value="Login" name="submit"  style="background-color:darkcyan;font-size:16px;color:white;  		                   width:80px;cursor:pointer; font-weight:bold"/><tr>
			</table>
</p>
</div>
			
		</div><!-- end #content -->
		<div id="sidebar">
			<ul>
				
				<li>
					<h2>New Page </h2>
					<ul>
						<li>
							<?php 
											$query="select * from newpage";
											$result=mysql_query($query);
											while($row=mysql_fetch_array($result))
											{
												
												$a=$row['page_title'];
											?>
											
											<a href="navigation.php?name=<?php echo $a ?>"> <?php echo $a ?></a><br>
									<br>
									<?php	
											}
											
											?>
										
				</li>
					</ul>
				</li>
				
			</ul>
				
					<ul>
				
				<li>
					<h2>Latest News</h2>
					<ul>
							<li>
	
			<?php

	$query="select * from news order by newsdate desc";
    $result=mysql_query($query);
	while($row=mysql_fetch_array($result))
											{
												
												$newsid=$row[0];
												$news=$row[1];
											?>
											
											<a href="latestnews.php?newsid=<?php echo $newsid ?>"> <?php echo $news ?></a><br>
											<br>
									<?php	
											}
											
											?>
											


			
			</li>
					</ul>
				</li>
				
			</ul>
		
		</div>

		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
	<div id="footer">
		<p>Copyright (c) 2008 cms.com. All rights reserved..</p>
		</div>
	<!-- end #footer -->
</body>
</html>
