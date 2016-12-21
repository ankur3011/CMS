<?php

include("./dataconnection/config.php");

if(isset($_REQUEST['forgot']))
{

$sql1="select * from register where  text_user='".$_POST['login_email']."'";

$rec=mysql_query($sql1);

$row=mysql_fetch_array($rec);
$pass= $row['text_pass'];

if($row['text_user']==$_POST['login_email'])

{

		$to =$_POST['login_email'];
		$subject = "Password of CCTV-IMPORT.COM";
		$header1 ="From:info@cctv-import.com \r\n";
   		$header1 .= "MIME-Version: 1.0\r\n";
   		$header1 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
		$message2 = '<html><body>';


$message2 .= '<table>';

$message2 .= "<tr><td><strong>Please Check your  password is:<br/></strong> </td><td>" .$pass. "</td></tr>";

$message2 .= ' To Login into cctv-import.com,<br/> Please,<a href="http://cctv-import.com/login.php"> Click HERE</a><br><br>';

$message2 .= "</table>";
$message2 .= "</body></html>";

  @mail ($to,$subject,$message2,$header1);
  $Message = urlencode("Your password are emailed you...Please check your email");
		header("Location:forgot_password.php?Message=".$Message); 
		
		

}

else
	{
		$Message = urlencode("Your Email are Not Registered in our Website....Please Enter valid associated email address");
		header("Location:forgot_password.php?Message=".$Message); 
	}
}

?>
