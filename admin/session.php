
<?php

session_start(); 
if(isset($_SESSION['w']))
  {// echo "yyyyyyyyyyy".$_SESSION['w'];
 
    }
    else
    {  
    echo "<script type='text/javascript'> document.location = '../home.php'; </script>";
    header('Location: ../home.php');
    }
?>