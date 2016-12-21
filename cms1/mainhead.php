<?php 
//session_start();
include'metatitle.php';
?>
	<link rel="stylesheet" href="./itap_files/Menustyle.css" type="text/css">
	<link rel="stylesheet" href="./itap_files/addons.css" type="text/css">
	<link rel="stylesheet" href="./itap_files/layout.css" type="text/css">
	<link rel="stylesheet" href="./itap_files/template.css" type="text/css">
	<link rel="stylesheet" href="./itap_files/template(1).css" type="text/css">
	<link rel="stylesheet" href="./itap_files/css3.css" type="text/css">
	
	<link rel="stylesheet" type="text/css" href="./itap_files/stylesMenu.css">
	<link rel="stylesheet" type="text/css" href="./itap_files/js-image-slider.css">

    <script type="text/javascript" src="./itap_files/js-image-slider.js"></script>
	<script type="text/javascript" src="./itap_files/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="./itap_files/menu.js"></script>
    <script type="text/javascript" src="./itap_files/sliding_effect.js"></script>
	<script type="text/javascript" src="./itap_files/countries.js"> </script>
	<link rel="stylesheet" type="text/css" href="./itap_files/styles1sidemenu.css" />
	<script src="./itap_files/jquery-latest.min.js" type="text/javascript"></script>
  <script src="./itap_files/mainsidemenu.js" type="text/javascript"></script>
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
	
	<!-- right click disable-->
	
    <script type="text/javascript">
<!--
var message="Sorry, right-click has been disabled";
///////////////////////////////////
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers)
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}
document.oncontextmenu=new Function("return false")
// -->
    </script>
	
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

<!-- inquiry textbox -->
 <script type="text/javascript">
function checkValue() {
	var linkemail=document.forms["inquiry"]["day"].checked
	if (linkemail) {
		document.getElementById('xtraInfo').style.display='';
	} else {
		document.getElementById('xtraInfo').style.display='none';
	}	
}	
</script>


</head>