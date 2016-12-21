<?php
include("../dataconnection/config.php");
include("header.php");
include("product_box.php");
?>

<html>
<head>
<title>VIEW ALBUM PHOTO</title>

    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts/font-awesome.css">
    <link rel="stylesheet" href="css/camera.css">
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
<table>


 <a href="album_add_photo.php?no=<?php echo $_GET['no'];?>">Add New Photo</a>
<?php	

include("../dataconnection/config.php");

$no=$_GET['no'];
session_start();
$_SESSION['no']=$no;

	$query="select * from photo where albumno='$no'";
	$result=mysql_query($query);

	$count=0;
	?>
	<tr>
	
	<?php 	
	while($row=mysql_fetch_array($result))
	{
		$pno=$row[0]; ?>
		
		<td><a href="images/<?php echo $row[1]?>" class="thumb"><img src="images/<?php echo $row[1]?>" width="100" height="100"></a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<?php	
	}
	?>
	</tr>
	<?php 
$query1="select * from photo where albumno='$no'";
	$result1=mysql_query($query1);?>
	<tr>
	<?php 
while($row1=mysql_fetch_array($result1))
	{	
		
		$pno=$row1[0];?>
		
	<td align="center"><a href="album_delete_photo.php?pno=<?php echo $pno?>">Delete</a></td>		
	<?php 		
	}
	?>
	</tr>
	

<tr>
<td colspan="8" align="right">
<a href="album_display.php">Back</a> 
</td>
</tr>

</table>
</body>
</html>
