<!-- main containt -->				
				<div id="ja-container" class="wrap ja-rir1">
					<div class="main clearfix">
						
							
							<!-- left column -->
						<div id="ja-right" class="column sidebar" style="width: 28%">
							<div class="ja-colswrap clearfix ja-r1">	
								<div id="ja-right2" class="ja-col  column" style="width: 100%">
		  						<!-- navigation -->		
									<div class="ja-moduletable moduletable  clearfix" id="Mod100">
											<h3>
											<span>Navigation</span>
											</h3>
											<div class="ja-box-ct clearfix">
											<div>
											<?php 
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
												<!--<ul id="sliding-navigation">
													<li class="sliding-element" style="margin-left: 0px;">
														<a href="home.php">
														<img src="./itap_files/bullet-blue.png" alt="*">
														Home</a>
													</li>
													<li class="sliding-element" style="margin-left: 0px;">
														<a href="650tvl.php">
														<img src="./itap_files/bullet-blue.png" alt="*">
														Product</a>
														
													</li>
													<li class="sliding-element" style="margin-left: 0px;">
														<a href="services.php">
														<img src="./itap_files/bullet-blue.png" alt="*">
														services</a>
													</li>
													<li class="sliding-element" style="margin-left: 0px;">
														<a href="inquiry.php">
														<img src="./itap_files/bullet-blue.png" alt="*">
														Inquiry</a>
													</li>
													<li class="sliding-element" style="margin-left: 0px;">
														<a href="aboutus.php">
														<img src="./itap_files/bullet-blue.png" alt="*">
														About Us</a>
													</li>
													<li class="sliding-element" style="margin-left: 0px;">
														<a href="contactus.php">
														<img src="./itap_files/bullet-blue.png" alt="*">
														Contact Us</a>
													</li>
												</ul>-->
											</div>
											<div class="shadow">
											</div>
									</div>
			  <!-- latest news -->
									<div class="ja-moduletable moduletable  clearfix" id="Mod66">
											<h3>
											<span>Latest News</span>
											</h3>
											<div class="ja-box-ct clearfix">
												


<div id="marqueecontainer" onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=marqueespeed">
<div id="vmarquee" style="position: absolute; width: 98%;">

<!--YOUR SCROLL CONTENT HERE-->
<div>
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
											


</div>
<!--YOUR SCROLL CONTENT HERE-->

</div>
</div>
											</div>
												
									</div>
						  <!-- latest news complete -->	

<!-- CCTV Importer -->



						  </div>
					</div>
				</div>
		<!-- left column complete -->
		
