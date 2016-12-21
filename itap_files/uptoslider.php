<?php
include("./dataconnection/config.php");

									 session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="images.jpg" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>OEM</title>
	<link rel="stylesheet" href="./itap_files/Menustyle.css" type="text/css">
	<link rel="stylesheet" href="./itap_files/addons.css" type="text/css">
	<link rel="stylesheet" href="./itap_files/layout.css" type="text/css">
	<link rel="stylesheet" href="./itap_files/template.css" type="text/css">
	<link rel="stylesheet" href="./itap_files/mega.css" type="text/css">
	<link rel="stylesheet" href="./itap_files/template(1).css" type="text/css">
	<link rel="stylesheet" href="./itap_files/css3.css" type="text/css">
	<link rel="stylesheet" href="./itap_files/mega(1).css" type="text/css">
	<link rel="stylesheet" href="./itap_files/default.css" type="text/css" media="screen">
	<link rel="stylesheet" type="text/css" href="./itap_files/stylesMenu.css">
	<link rel="stylesheet" type="text/css" href="./itap_files/js-image-slider.css">

    <script type="text/javascript" src="./itap_files/js-image-slider.js"></script>
	<script type="text/javascript" src="./itap_files/jquery-1.7.1.min.js"></script>
	 
    <script type="text/javascript" src="./itap_files/sliding_effect.js"></script>
	<script type="text/javascript" src="./itap_files/countries.js"> </script>
    <!--<script type="text/javascript" src="jquery.easing.1.3.js"></script>-->

    <script type="text/javascript">
        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            // add a zero in front of numbers<10
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;
            t = setTimeout('startTime()', 500);
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }
    </script>
	<script type="text/javascript" src="./itap_files/gsrs"></script>
	
	
	
	
	 <!-- latest news -->
	  <style type="text/css">

#marqueecontainer{
position: relative;
width: 150px; /*marquee width */
height:200px; /*marquee height */
background-color: white;
overflow: hidden;

padding: 2px;
padding-left: 4px;
}

</style>

<script type="text/javascript">

/***********************************************
* Cross browser Marquee II- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/

var delayb4scroll=2000 //Specify initial delay before marquee starts to scroll on page (2000=2 seconds)
var marqueespeed=1 //Specify marquee scroll speed (larger is faster 1-10)
var pauseit=1 //Pause marquee onMousever (0=no. 1=yes)?

////NO NEED TO EDIT BELOW THIS LINE////////////

var copyspeed=marqueespeed
var pausespeed=(pauseit==0)? copyspeed: 0
var actualheight=''

function scrollmarquee(){
if (parseInt(cross_marquee.style.top)>(actualheight*(-1)+8)) //if scroller hasn't reached the end of its height
cross_marquee.style.top=parseInt(cross_marquee.style.top)-copyspeed+"px" //move scroller upwards
else //else, reset to original position
cross_marquee.style.top=parseInt(marqueeheight)+8+"px"
}

function initializemarquee(){
cross_marquee=document.getElementById("vmarquee")
cross_marquee.style.top=0
marqueeheight=document.getElementById("marqueecontainer").offsetHeight
actualheight=cross_marquee.offsetHeight //height of marquee content (much of which is hidden from view)
if (window.opera || navigator.userAgent.indexOf("Netscape/7")!=-1){ //if Opera or Netscape 7x, add scrollbars to scroll and exit
cross_marquee.style.height=marqueeheight+"px"
cross_marquee.style.overflow="scroll"
return
}
setTimeout('lefttime=setInterval("scrollmarquee()",30)', delayb4scroll)
}

if (window.addEventListener)
window.addEventListener("load", initializemarquee, false)
else if (window.attachEvent)
window.attachEvent("onload", initializemarquee)
else if (document.getElementById)
window.onload=initializemarquee


</script>


 


	
</head>

<body id="bd" class="bd fs3 com_content" onload="startTime()">

<div>
	<div id="ja-wrapper">
           <!-- HEADER -->
            	<div id="ja-header" class="wrap ">
               		<div class="main">
                    	<div class="main-inner1 clearfix">
							<h1 class="logo">
                           	   <img src="./itap_files/logo.jpg" alt="" height="90px" width="300">
                        	</h1>
                      		<div style="margin-top: 5px;">
                            	
							</div>
							<div style="float:right; height:auto; width:200px;">
								<span style="font-size: 18px; font-family: Calibri; color: darkcyan; text-align: left;"><b>CONNECT WITH US:</b>
                                </span><br>
								<a href="" target="_blank">
									<img src="./itap_files/images.jpg" alt="" height="35px" width="35px">
								</a>&nbsp;&nbsp;
								<a href="" target="_blank">
									<img src="./itap_files/download.jpg" alt="" height="35px" width="35px" >
								</a>&nbsp;&nbsp;
								<a href="" target="_blank">
									<img src="./itap_files/gplus1.png" alt="" height="35px" width="35px">
								</a>
							
							<span style="font-size: 14px; font-family: Calibri; color: darkcyan; text-align: left;"><b>Email:info@cctv-import.com</b>
                                </span></div>
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
                                    <span class="sdt_descr">OEM</span> </span></a></li>
									
								<li><a href="aboutus.php">
                         
                                	<span class="sdt_active"></span><span class="sdt_wrap"><span class="sdt_link">About Us</span>
                                    <span class="sdt_descr">Discussion</span> </span></a></li>
									
								<li><a href="">
                               
                                	<span class="sdt_active"></span><span class="sdt_wrap"><span class="sdt_link">Product</span>
                                    <span class="sdt_descr">Our value</span> </span></a>
									
									<ul class="sdt_submenu">
									<?php
											function query($parent_id) { //function to run a query
												$query = mysql_query ( "SELECT * FROM menus WHERE parent_id=$parent_id" );
												return $query;
											}
											function has_child($query) { //This function checks if the menus has childs or not
												$rows = mysql_num_rows ( $query );
												if ($rows > 0) {
													return true;
												} else {
													return false;
												}
											}
											function fetch_menu($query) {
												while ( $result = mysql_fetch_array ( $query ) ) {
													$menu_id = $result ['id'];
													$menu_name = $result ['menu_name'];
													$menu_link = $result ['menu_link'];
													echo "<li class='std_submenu'><a href='{$menu_link}'> <span class='sdt_active'></span><span class='sdt_wrap'>
											<span class='sdt_link'>{$menu_name}</span></a>";
													if (has_child ( query ( $menu_id ) )) {
														echo "<ul class='std_subchilid'>";
														fetch_menu ( query ( $menu_id ) );
														echo "</ul>";
													}
													echo "</li>";
												}
											}
											fetch_menu (query(0)); //call this function with 0 parent id
											?>
											</ul>
                            	</li>
								<li><a href="services.php">
                         
                                	<span class="sdt_active"></span><span class="sdt_wrap"><span class="sdt_link">Services</span>
                                    <span class="sdt_descr">we provide</span> </span></a></li>
                            	<li><a href="inquiry.php">
                             
                                	<span class="sdt_active"></span><span class="sdt_wrap"><span class="sdt_link">Inquiry</span>
                                    <span class="sdt_descr">About product</span></span></a></li>
                            	
                            	
									
								 <?php if(isset($_SESSION["id"]))
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
                                    <span class="sdt_descr">here</span> </span></a></li>
									
									<li><a href="contactus.php">
                                
                                	<span class="sdt_active"></span><span class="sdt_wrap"><span class="sdt_link">Contact
                                    Us</span> <span class="sdt_descr">Where we stand</span> </span></a></li>
									<?php
									}
									?>
                        	</ul>
                    	</div>
                	</div>
           		</div>
 <!-- aftermenu space -->
				<div style="height:5px;">
				</div>
   <!-- slider -->      
   <div id="sliderFrame">
        <div id="slider">
            <a href="./itap_files/images/1.jpg" target="_blank">
                <img src="./itap_files/images/1.jpg" alt="Welcome to CCTV IMPORT" />
            </a>
			<a href="./itap_files/images/2.jpg" target="_blank">
            <img src="./itap_files/images/2.jpg" alt="DVR" /></a>
			<a href="./itap_files/images/3.jpg" target="_blank">
            <img src="./itap_files/images/3.jpg" alt="pcb." /></a>
			<a href="./itap_files/images/4.jpg" target="_blank">
            <img src="./itap_files/images/4.jpg" alt="cctv system" /></a>
			<a href="./itap_files/images/6.jpg" target="_blank">
			<img src="./itap_files/images/6.jpg" alt="cctv cables" /></a>
			<a href="./itap_files/images/5.jpg" target="_blank">
            <img src="./itap_files/images/5.jpg" alt="contact us" /></a>
        </div>
       
    </div>
  <!-- after slider space -->	
				<div style="height:5px;">
				</div>