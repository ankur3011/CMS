<?php
include("./dataconnection/config.php");
include'uptoslider.php';
include'main_content_start.php';
include'rightcolumn.php';
 
 
if(isset($_REQUEST['submit']))
{



  $sql="insert into inquiry values
  (NULL,
  '".$_REQUEST['c_name']."',
  '".$_REQUEST['p_name']."',
  '".$_REQUEST['address']."',
  '".$_REQUEST['country']."',
  '".$_REQUEST['state']."',
  '".$_REQUEST['city']."',
  
  '".$_REQUEST['contactno']."',
  '".$_REQUEST['email']."',
  '".$_REQUEST['u_type']."',
  '".$_REQUEST['p_type']."',
  '".$_REQUEST['discription']."')";
  $result=mysql_query($sql);
  
 
 // if($result==false)
	//{
	//	echo "Data insert is failed..";
	//}
	//else
	//{
	//	echo "Data inserted successfull..";
		
	//}
	$to  = 'info@averestindia.com' . ', '; // note the comma
$to .= $_REQUEST['email'];

   $subject = 'Inquiry';
   
   $headers ="From:info@cctv-import.com \r\n";
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
   
  
       
    $message1 = '<html><body>';

$message1 .= 'Following Inquiry Was Generated from cctv-import.com<br><br><br>';
$message1 .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message1 .= "<tr style='background: #eee;'><td><strong>Company Name:</strong> </td><td>" . strip_tags($_REQUEST['c_name']) . "</td></tr>";
$message1 .= "<tr><td><strong>Person Name:</strong> </td><td>" . strip_tags($_REQUEST['p_name']) . "</td></tr>";
$message1 .= "<tr><td><strong>Address:</strong> </td><td>" . strip_tags($_REQUEST['address']) . "</td></tr>";
$message1 .= "<tr><td><strong>Country:</strong> </td><td>" . strip_tags($_REQUEST['country']) . "</td></tr>";
$message1 .= "<tr><td><strong>State:</strong> </td><td>" . strip_tags($_REQUEST['state']) . "</td></tr>";
$message1 .= "<tr><td><strong>City:</strong> </td><td>" . strip_tags($_REQUEST['city']) . "</td></tr>";
$message1 .= "<tr><td><strong>ContactNo:</strong> </td><td>" . strip_tags($_REQUEST['contactno']) . "</td></tr>";
$message1 .= "<tr><td><strong>Email</strong> </td><td>" . strip_tags($_REQUEST['email']) . "</td></tr>";
$message1 .= "<tr><td><strong>User Type:</strong> </td><td>" . strip_tags($_REQUEST['u_type']) . "</td></tr>";
$message1 .= "<tr><td><strong>Product Type:</strong> </td><td>" . strip_tags($_REQUEST['p_type']). "</td></tr>";
$message1 .= "<tr><td><strong>Discription:</strong> </td><td>" . strip_tags($_REQUEST['discription']) . "</td></tr>";
$message1 .= "</table>";
$message1 .= "</body></html>";

   
   $retval = mail ($to,$subject,$message1,$headers);
   



$message = "Dear ".$_REQUEST['p_name'].", Thank you very much for visit our Website. Welcome to our company. We Offer Quality Products, Multiple Range At Affordable Rate With Unique Service Support To Win Million's Heart. For More Detail Pleas to Call +91-9909777223, www.cctv-import.com";

$mobileNumber=$_REQUEST['contactno'];

$url1="http://alerts.sinfini.com/api/web2sms.php?workingkey=405115jgk1k9x6nr2q6d&sender=AVERES&to=".$mobileNumber."&message=".urlencode($message);
//$url="http://alerts.sinfini.com/api/web2sms.php?workingkey=405115jgk1k9x6nr2q6d&sender=AVERES&to".$mobileNumber."&message=".urlencode($message);
$response = file_get_contents($url1);
//echo $response;


if($result)
{
print '<script type="text/javascript">'; 
print 'alert("your inquiry was succssessfully submitted")'; 
print '</script>'; 

}



}


?>

<h1 class="componentheading">
 Online inquiry<br>
</h1>

<form action="" method="post" name="inquiry" id="inquiry">
<p style="text-align: justify;">  
	<table cellpadding="0" cellspacing="0">
            <tbody>
			<tr><td  style="width: 135px;">COMPANY NAME<span style="color:red">*</span></td><td>
				<input type="text" name="c_name" required></td></tr>
			<tr><td >CONTACT PERSON<span style="color:red">*</span></td><td>
				<input type="text" name="p_name" required></td></tr>
			<tr><td >ADDRESS</td><td><textarea name="address"></textarea></td></tr>
			<tr>
    <td width="179">Country</td>
    <td><label>
        <select onchange="print_state('state',this.selectedIndex);" id="country" name ="country" required></select>
    </label></td>
  </tr>
  <tr>
    <td width="179">State</td>
    <td><label>
       
		<select name ="state" id ="state" reqired></select>
		<script language="javascript">print_country("country");</script>	
    </label></td>
  </tr>
  <tr>
    <td width="179">City  <em style="color:red">*</em></td>
    <td><label>
      <input name="city" type="text" id="city" required />
    </label></td>
  </tr>
            <tr><td>CONTACT NO.<span style="color:red">*</span></td><td>
				<input type="text" name="contactno" pattern="^\+?[0-9\-]+\*?$"   required title="enter valid 10 digits phone no" ></td></tr>
            <tr><td >E-MAIL<span style="color:red">*</span></td><td>

				<input type="email" name="email" placeholder="Enter a valid email " required  title="enter valid email address"/></td></tr>
				
			 <tr>
                <td >USER TYPE</td>
                <td>
                    <select name="u_type">
                        <option value="0">Select User Type ---</option>
                        <option>DISTRIBUTOR</option>
                        <option>DEALER</option>
                        <option>RETAILER</option>
                        
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td >PRODUCT TYPE</td>
                <td>
                    <select name="p_type">
                        <option value="0">Select Product ---</option>
                        <option>ANALOG CAMERA</option>
                        <option>IP CAMERA</option>
                        <option>DVR</option>
                        <option>NVR</option>
                        <option>VIDEO DOOR PHONE</option>
                        <option>CONSUMERS</option>
                        <option>CABLE</option>
                        <option>HDCVI</option>
                       
                    </select>
                </td>
            </tr>
          
            <tr><td >DESCRIPTION<span style="color:red">*</span></td><td>
				<textarea name="discription" cols="25" rows="5" placeholder="Please enter any description" required></textarea></td></tr>
           <tr align="center">
    			<td colspan="2"><label>
		 		 <input type="submit" name="submit" value="submit" style="background-color:darkcyan;font-size:16px;color:white;  		                    font-weight:bold" />
    			</label></td>
    		</tr>
        </tbody>
	</table>
</p>	
</form>		 
<?php

include'right_column_complete.php';
include'maincontentstop.php';
include'footer.php';

?>