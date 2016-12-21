<?php
include("./dataconnection/config.php");
include 'mainhead.php';
include'uptoslider.php';
include'main_content_start.php';
include'rightcolumn.php';


   
if(isset($_REQUEST['submit']))
{

  $sql="insert into register values
  (NULL,
  '".$_REQUEST['text_name']."',
  '".$_REQUEST['text_user']."',
  '".$_REQUEST['text_pass']."',
  '".$_REQUEST['text_address']."',
  '".$_REQUEST['country']."',
  '".$_REQUEST['state']."',
  '".$_REQUEST['text_city']."',
  '".$_REQUEST['text_mobile']."',
  '".$_REQUEST['text_email']."',
  '".$_REQUEST['u_type']."')";
  $result=mysql_query($sql);
   if($result)
{
 // if($result==false)
	//{
	//	echo "Data insert is failed..";
	//}
	//else
	//{
	//	echo "Data inserted successfull..";
		
	//}
/*$to  = 'info@averestindia.com' . ', '; // note the comma
$to .= $_REQUEST['email'];
   $subject = "Registration Details";
   $message = "Registration details in cctv-import.com<br>
   				Person name:".$_REQUEST['text_name'].
				"<br>User Name:".$_REQUEST['text_user'].
				"<br>Password:".$_REQUEST['text_pass'].
				"<br>Address:".$_REQUEST['text_address'].
				"<br>Country:".$_REQUEST['country'].
				"<br>State:".$_REQUEST['state'].
				"<br>City:".$_REQUEST['text_city'].
				"<br>Mobile NO:".$_REQUEST['text_mobile'].
				"<br>Email:".$_REQUEST['text_email'].
				"<br>User Type:".$_REQUEST['u_type'];
   				
   
   
   $header = "From:info@averestindia.com \r\n";
   $retval =@mail ($to,$subject,$message,$header);
  
  */
  
 
$to= $_REQUEST['text_user'];
   $subject = "Registration Details in CCTV Import";
 
   $header ="From:info@cctv-import.com \r\n";
   $header .= "MIME-Version: 1.0\r\n";
   $header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
       
    $message2 = '<html><body>';
$message2.="<img src='"."http://www.cctv-import.com/mimg.jpg"."'/><br /><br />";

$message2 .= "Dear User,<br/>";
$message2 .= "Thank You for Register in Our Company. <br/><br/>";
$message2 .= '<h2>Registration details<br/><br/></h2>';
$message2 .= "<strong>Person name:</strong> " . strip_tags($_REQUEST['text_name']) . "<br/>";
$message2 .= "<strong>User Name:</strong>" . strip_tags($_REQUEST['text_user']) . "<br/>";
$message2 .= "<strong>Password:</strong>" . strip_tags($_REQUEST['text_pass']) . "<br/>";
$message2 .= "<strong>Address:</strong> " . strip_tags($_REQUEST['text_address']) . "<br/>";
$message2 .= "<strong>Country:</strong> " . strip_tags($_REQUEST['country']) . "<br/>";
$message2 .= "<strong>State:</strong>" . strip_tags($_REQUEST['state']) . "<br/>";
$message2 .= "<strong>City:</strong>" . strip_tags($_REQUEST['text_city']) . "<br/>";
$message2 .= "<strong>Mobile No:</strong> " . strip_tags($_REQUEST['text_mobile']) . "<br/>";
$message2 .= "<strong>User Type:</strong>" . strip_tags($_REQUEST['u_type']). "<br/><br/>";
$message2 .= "<strong>Thanks and Regards,</strong> <br/>";
$message2 .= "<strong>cctv-import.com</strong> <br/><br/>";
$message2 .= "<strong>CORPORATE OFFICE: </strong> 9,10 Jalu Complex, Mohanni Chal, Varachha Road, SURAT-395006.GUJARAT,INDIA<br/>";
$message2 .= "<strong>HEAD OFFICE:</strong>A-52 Pushp Industrial Park & arcade, Rakhial Road, AHMEDABAD-380021 GUJARAT, INDIA <br/><br/>";
$message2 .= "<strong>DIVYESH LAKKAD</strong> <br/>";
$message2 .= "<strong><b>MOB:</strong>+91-9327738220 <br/>";
$message2 .= "<strong><b>Web:</strong>www.cctv-import.com <br/><br/><br/>";
$message2 .= "<a href='cctv-import.com/admin/excelinquiry.php'> Download Excel File Here</a>";
$message2 .= "</body></html>";



//$to4= $_REQUEST['text_email'];
//$ret = @mail ($to4,$subject,$message2,$header);

$ret = @mail ($to,$subject,$message2,$header);
  


$to1  = 'divyesh.averest@gmail.com'; // note the comma
$to2  = 'vikas.averest@gmail.com';
 $message3 = '<html><body>';

$message3 .= '<h2>Registration details in cctv-import.com<br/><br/><br/></h2>';
$message3 .= "<strong>Person name:</strong> " . strip_tags($_REQUEST['text_name']) . "<br/>";
$message3 .= "<strong>User Name:</strong>" . strip_tags($_REQUEST['text_user']) . "<br/>";
$message3 .= "<strong>Password:</strong>" . strip_tags($_REQUEST['text_pass']) . "<br/>";
$message3 .= "<strong>Address:</strong> " . strip_tags($_REQUEST['text_address']) . "<br/>";
$message3 .= "<strong>Country:</strong> " . strip_tags($_REQUEST['country']) . "<br/>";
$message3 .= "<strong>State:</strong>" . strip_tags($_REQUEST['state']) . "<br/>";
$message3 .= "<strong>City:</strong>" . strip_tags($_REQUEST['text_city']) . "<br/>";
$message3 .= "<strong>Mobile No:</strong> " . strip_tags($_REQUEST['text_mobile']) . "<br/>";
$message3 .= "<strong>User Type:</strong>" . strip_tags($_REQUEST['u_type']). "<br/><br/><br/><br/>";
$message3 .= "<a href='cctv-import.com/admin/excelinquiry.php'> Download Excel File Here</a>";
$message3 .= "</body></html>";

 $retval1 = @mail ($to1,$subject,$message3,$header);
 $retval2 = @mail ($to2,$subject,$message3,$header);
   
$message = "Dear ".$_REQUEST['text_name'].", Thank you very much for visit our Website. Welcome to ACTIVE Family. We Offer Quality Products, Multiple Range At Affordable Rate With Unique Service Support To Win Million's Heart. For More Detail Pleas to Call +91-9909777223, www.activecctv.in";

$mobileNumber=$_REQUEST['text_mobile'];

$url1="http://alerts.sinfini.com/api/web2sms.php?workingkey=405115jgk1k9x6nr2q6d&sender=AVERES&to=".$mobileNumber."&message=".urlencode($message);
//$url="http://alerts.sinfini.com/api/web2sms.php?workingkey=405115jgk1k9x6nr2q6d&sender=AVERES&to".$mobileNumber."&message=".urlencode($message);
$response = file_get_contents($url1);
//echo $response;
   
  
echo "<script type=\"text/javascript\">\n"; 
echo "alert('Thank you for submitting our form.');\n"; 
echo "window.location = ('login.php');\n"; 
echo "</script>";  

}
   
   
}

?>


                                   
<h1 class="componentheading">
 Registration<br>
</h1>
<p style="text-align: justify;">     

       
		
 <form name="registration" action="" method="post" >
        <center>
    <table border="1">
      <tr>
            <td colspan="2"><h2>User Registration Form</h2> </td>
     </tr>
	 <tr>
        <td width="179">Name<em style="color:red">*</em></td>
    <td><label>
      <input name="text_name" type="text" id="text_name" required/>
    </label></td>
  </tr>
      <tr>
    <td>User Name<em style="color:red">*</em></td>
    <td><label>
      <input class="valid1" name="text_user" type="email" id="text_user" required  placeholder="Enter a valid email " pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?" title="enter valid email address" />
    </label></td><td><span id="emailError"></span>
  </tr>
  <tr>
    <td>Password <em style="color:red">*</em></td>
    <td><label>
      <input name="text_pass" type="password" id="text_pass" required />
    </label></td>
  </tr>
  <tr>
    <td>Confirm Password <em style="color:red">*</em></td>
    <td><label>
      <input name="text_repass" type="password" id="text_repass"  
/>
    </label></td><td><span id="message"></span>
  </tr>
  <tr>
    <td width="179">Address </td>
    <td><label>
      <input name="text_address" type="text" id="text_address" required />
    </label></td>
  </tr>
 
  <tr>
    <td width="179">Country</td>
    <td><label>
        <select onchange="print_state('state',this.selectedIndex);" id="country" name ="country" ></select>
    </label></td>
  </tr>
  <tr>
    <td width="179">State</td>
    <td><label>
       
		<select name ="state" id ="state" ></select>
		<script language="javascript">print_country("country");</script>	
    </label></td>
  </tr>
  <tr>
    <td width="179">City  <em style="color:red">*</em></td>
    <td><label>
      <input name="text_city" type="text" id="text_city" required />
    </label></td>
  </tr>
  <tr>
    <td width="179">Phone/Mobile<em style="color:red">*</em></td>
    <td><label>
      <input name="text_mobile" type="text" id="text_mobile" pattern="^\s*(?:\d{10})\s*$"   required title="enter valid 10 digit phone no"  />
    </label></td>
  </tr>
            <tr>
    <td width="179">Another Email address <em style="color:red">*</em></td>
    <td><label>
      
	  <input type="email" name="text_email"  id="text_email"                    pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?" >
    </label></td>
  </tr>
  <tr>
                <td class="label">User Type</td>
                <td>
                    <select name="u_type" >
                        <option value="0">Select User Type ---</option>
                        <option>DISTRIBUTOR</option>
                        <option>DEALER</option>
                        <option>RETAILER</option>
                       
                        
                    </select>
                </td>
            </tr>
  
   <tr align="center">
    			<td colspan="2"><label>
		 		 <input type="submit" name="submit" value="submit" style="background-color:darkcyan;font-size:16px;color:white;  		                    width:100px;cursor:pointer;font-weight:bold" />
    			</label></td>
    		</tr>
</table>
</center>
</form>

<!--
	<tr>
		<td>
			Country:
			</td><td>
        <select onchange="print_state('state',this.selectedIndex);" id="country" name ="country"></select>
		<br /></td>
		<tr>
		<td>
		State:</td>
        <td><select name ="state" id ="state"></select>
		<script language="javascript">print_country("country");</script>	

		</td>
	
	</tr> -->
</table>
</form>

<script type="text/javascript">

$('#text_repass').on('keyup', function () {
    if ($(this).val() == $('#text_pass').val()) {
        $('#message').html('Your Password are matched').css('color', 'green');
    } else $('#message').html('Your Password are Not matched').css('color', 'red');
});


</script>
</p>
<?php

include'right_column_complete.php';
include'maincontentstop.php';
include'footer.php';

?>