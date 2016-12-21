 <script language="javascript" type="text/javascript">
    function validate()
    {
    if(document.getElementById("text_name").value=="")
    {
        alert("Please Enter Your Name");
        document.getElementById("text_name").focus();
        return false;
    }

    if(!(isNaN(document.registration.text_name.value)))
    {
        alert("Name has character only!");
        return false;
    }
 
    if(document.getElementById("text_address").value=="")
    {
        alert("Please Enter Your Address");
        document.getElementById("text_address").focus();
        return false;
    }
 
    if(!(isNaN(document.registration.text_address.value)))
    {
        alert("Address has character only!");
        return false;
    }
 
    if(document.getElementById("text_area").value=="")
    {
        alert("Please Enter Your Area");
        document.getElementById("text_area").focus();
        return false;
    }
 
    if(!(isNaN(document.registration.text_area.value)))
    {
        alert("Area has character only!");
        return false;
    }
 
    if(document.getElementById("text_city").value=="")
    {
        alert("Please Enter Your City");
        document.getElementById("text_city").focus();
        return false;
    }
 
    if(!(isNaN(document.registration.text_city.value)))
    {
        alert("City has character only!");
        return false;
    }
 
    if(document.getElementById("text_pin").value=="")
    {
        alert("Please Enter Your Pin");
        document.getElementById("text_pin").focus();
        return false;
    }
 
    if((isNaN(document.registration.text_pin.value)))
    {
        alert("Pin has numeric only!");
        return false;
    } 

    if(document.getElementById("text_state").value=="")
    {
        alert("Please Enter Your State");
        document.getElementById("text_state").focus();
        return false;
    }

    if(!(isNaN(document.registration.text_state.value)))
    {
        alert("State has character only!");
        return false;
    }

    if(document.getElementById("text_country").value=="")
    {
        alert("Please Enter Your Country");
        document.getElementById("text_country").focus();
        return false;
    }

    if(!(isNaN(document.registration.text_country.value)))
    {
        alert("Country has character only!");
        return false;
    }

    if(document.getElementById("text_mobile").value=="")
    {
        alert("Please Enter Your Mobile Number");
        document.getElementById("text_mobile").focus();
        return false;
    }

    if((isNaN(document.registration.text_mobile.value)))
    {
        alert("Mobile has numeric only!");
        return false;
    }
    var emailPat=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
    var emailid=document.getElementById("text_email").value;
    var matchArray = emailid.match(emailPat);

    if (matchArray == null)
    {
        alert("Your email address seems incorrect. Please try again.");
        document.getElementById("text_email").focus();
        return false;
    }

    if(document.getElementById("text_user").value=="")
    {
        alert("Please Enter User Name");
        document.getElementById("text_user").focus();
        return false;
    }

    if(document.getElementById("text_pass").value=="")
    {
        alert("Please Enter Your Password");
        document.getElementById("text_pass").focus();
        return false;
    }

    if(document.getElementById("text_repass").value=="")
    {
        alert("Please ReEnter Your Password");
        document.getElementById("text_repass").focus();
        return false;
    }
    if(document.getElementById("text_repass").value!="")
    {
          if(document.getElementById("text_repass").value != document.getElementById("text_pass").value)
          {
               alert("Confirm Password doesnot match!");
               document.getElementById("text_repass").focus();

               return false;
          }
    }
    return true;
}
</script>