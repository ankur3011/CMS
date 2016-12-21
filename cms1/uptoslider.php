

<body id="bd" class="bd fs3 com_content" onLoad="startTime()">

<div>
	<div id="ja-wrapper">
           <!-- HEADER -->
            	<div id="ja-header" class="wrap ">
               		<div class="main">
                    	<div class="main-inner1 clearfix">
							<h1 class="logo">
							<?php
							
							$logo=mysql_query("select * from conf where lab_id=2");
							 while($row=mysql_fetch_array($logo))
								 { 
                           		   echo "<img src='itap_files/".$row['lab_value']."' height='95' width='220'>";
                        		}
								?>
							</h1>
                      		<div style="margin-top: 5px;">
                            </div>
							<div style="float:right; height:auto; width:200px;">
								<span style="font-size: 18px; font-family: Calibri; color: darkcyan; text-align: left;"><b>CONNECT WITH US:</b>
                                </span><br>
								<a href="#" target="_blank">
									<img src="./itap_files/images.jpg" alt="" height="35px" width="35px">
								</a>&nbsp;&nbsp;
								<a href="#" target="_blank">
									<img src="./itap_files/download.jpg" alt="" height="35px" width="35px" >
								</a>&nbsp;&nbsp;
								<a href="#" target="_blank">
									<img src="./itap_files/gplus1.png" alt="" height="35px" width="35px">
								</a>
							
							</div>
                    	  <div style="float: left; margin-left:120px;">
							<span style="font-size:24px; color:darkcyan;">
							<?php
							$tit=mysql_query("select * from conf where lab_id=3");
							$row=mysql_fetch_array($tit);
							echo $row['lab_value'];
							?>
							</span>
							</div>
						</div>
               		 </div>
           		</div>
		  <!-- menu -->	
            	<div id="ja-mainnav" class="wrap ">
					<div class="main clearfix">
                    	<div class="ja-megamenu clearfix" id="ja-megamenu">
							<ul id="sdt_menu" class="sdt_menu">
                            	<li><a href="home.php">
                               
                                	<span class="sdt_active"></span><span class="sdt_wrap"><span class="sdt_link">Home</span>
                                    <span class="sdt_descr">CMS</span> </span></a></li>
									
								<li><a href="aboutus.php">
                         
                                	<span class="sdt_active"></span><span class="sdt_wrap"><span class="sdt_link">About Us</span>
                                    <span class="sdt_descr">Discussion</span> </span></a></li>
									
								<li><a href="album_display.php">
                               
                                	<span class="sdt_active"></span><span class="sdt_wrap"><span class="sdt_link">Album</span>
                                    <span class="sdt_descr">Our Gallary</span> </span></a>
									
                            	</li>
								<li><a href="services.php">
                         
                                	<span class="sdt_active"></span><span class="sdt_wrap"><span class="sdt_link">Services</span>
                                    <span class="sdt_descr">we provide</span> </span></a></li>
                            	
                             
                                	
                            	
									
								 <?php 
if(isset($_SESSION["id"]))
								 { 
								 ?>
								 <li><a href="logout.php">
                               
                                	<span class="sdt_active"></span><span class="sdt_wrap"><span class="sdt_link">logout</span>
                                    <span class="sdt_descr">here</span> </span></a></li>
									<?php }
									else
									{
									?>
									 <li><a href="login.php">
                               
                                	<span class="sdt_active"></span><span class="sdt_wrap"><span class="sdt_link">login</span>
                                    <span class="sdt_descr">here</span> </span></a></li><?php
									}
									?>
									
									<li><a href="contactus.php">
                                
                                	<span class="sdt_active"></span><span class="sdt_wrap"><span class="sdt_link">Contact
                                    Us</span> <span class="sdt_descr">Where we stand</span> </span></a></li>
									
                        	</ul>
                    	</div>
                	</div>
           		</div>
 <!-- aftermenu space -->
				<div style="height:5px;">
				</div>
  <!-- after slider space -->	
				<div style="height:5px;">
				</div>