
<?php
error_reporting(0);
session_start(); 
if(isset($_SESSION['w']))
  { //echo "yyyyyyyyyyy".$_SESSION['w'];
 
    }
    else
    
    {echo "<script type='text/javascript'> document.location = '../home.php'; </script>";
      header("Location: ../home.php");
   // die();
    //echo "not set";
    }
?>


<?php
include("header.php");
include("../dataconnection/config.php");

include("product_box.php");

?>


<?php


include("product_boxclose.php");

?>

