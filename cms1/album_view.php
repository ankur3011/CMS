<?php
include("./dataconnection/config.php");
include 'mainhead.php';
include'uptoslider.php';
include'main_content_start.php';
include'rightcolumn.php';
{
  
?>

<html>
<head>

<title>PHOTO</title>
   
    <link rel="stylesheet" href="css/touchTouch.css">
    
	<script src="js/jquery.js"></script>
    <script  src="js/touchTouch.jquery.js"></script>
   
    <script src="js/sForm.js"></script>
    
     <script src='js/camera.js'></script>
    
	<script>	
        $(window).load( function(){
            
            //form1  
     	   $('#form1').sForm({
     	     ownerEmail:'#',
     	     sitename:'sitename.link'
   	        })
            
           //camera 					
    	   jQuery('.camera_wrap').camera();	 
                  
            // TouchTouch
            $('.thumb').touchTouch();   
           	 
        });
    </script>
    
</head>

<body>

<table border='1' cellpadding="2" cellspacing="1" bgcolor="azure">
 
<?php	

include("./dataconnection/config.php");
$no=$_GET['no'];
session_start();
$_SESSION['no']=$no;

	$query="select * from photo where albumno='$no'";
	$result=mysql_query($query);

	$count=0;
	while($row=mysql_fetch_array($result))
	{
		$count++;
		
		$pno=$row[0];
	?>
	
		<a href="../admin/images/<?php echo $row[1]?>" class="thumb"><img src="../admin/images/<?php echo $row[1]?>" width="100" height="100"></a>
		&nbsp;&nbsp;&nbsp;&nbsp;
		</tr>
	<?php 
	}

?>
</table>
<br>
<b><h4><u><a href="album_display.php">Back</h4></u></b></a>
<br>

<?php
}
include'right_column_complete.php';
include'maincontentstop.php';
include'footer.php';

?>

</body>
</html>
