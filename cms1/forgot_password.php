<?php
include 'mainhead.php';
include'uptoslider.php';
include'main_content_start.php';
include'rightcolumn.php';




?>		

<h1 class="componentheading">
forgot password<br>
</h1>


	<?php
 if(isset($_GET['Message'])){?>
 <h3 style="color:#CC0000;"><?php  echo $_GET['Message'];
   
}
?></h3>
                     
                   
   
                   
                    
                    	<h2>Forgot Your <span>Password</span> ?</h2>
                       
                    
                        	Enter your user email id associated with your account, 
                                and then click Continue. We provide your password at
                                 your email account.  
                   	
                            <form method="post" name="forgot" id="forgot" action="forgot_password_query.php">
                                <div>
                                    <table cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td  style="padding-left:5px;">User Name :</td>
                                            <td><input type="email" name="login_email" pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?" required placeholder="Email" /></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><input type="submit" name="forgot" value="Continue" style="background-color:darkcyan;font-size:16px;color:white;  		                   width:100px;cursor:pointer; font-weight:bold"/></td>
                                        </tr>
                                    </table>
                                </div>
                                
                            </form>
                           



<?php

include'right_column_complete.php';
include'maincontentstop.php';
include'footer.php';

?>