
<?php
include ("header.php");
?>

<html>
<script>
function register_form_validation(){
    var fname=document.forms["register_form"]["first_name"].value;
    var lname=document.forms["register_form"]["last_name"].value;
    var mnumber=document.forms["register_form"]["m_number"].value;
    var emailid=document.forms["register_form"]["email_id"].value;
    var u_age=document.forms["register_form"]["age"].value;
    var u_gender=document.forms["register_form"]["gender"].value;
    var state=document.forms["register_form"]["state"].value;
    var district=document.forms["register_form"]["district"].value;
    var city=document.forms["register_form"]["city"].value;
    var pin_code=document.forms["register_form"]["pin_code"].value;   
  
  

    var letters = /^[A-Za-z]+$/;
    var emailletters=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
//    var phoneno = /^\d{16}$/;
         
    if (fname=="" || !fname.match(letters)){
	document.getElementById("firstname").innerHTML="Name is required and please input alphabit";    
				
	errormsg="true";	
    }
    else{
	document.getElementById("firstname").innerHTML="";    
    }    
    
    if (lname=="" || !lname.match(letters)){
	document.getElementById("lastname").innerHTML="Lastname required";
		
	errormsg="true";
    }
    
    else{
	document.getElementById("lastname").innerHTML="";
    }
    
    if (mnumber==""){
	document.getElementById("mobnumber").innerHTML="Mobile number required";
		errormsg="true";   
    }
    else{
	document.getElementById("mobnumber").innerHTML="";
    }
    if (emailid=="" || !emailid.match(emailletters)){
	document.getElementById("mail").innerHTML="Emailid required and please put valid mailid";
	
	errormsg="true";
	
    }
    
    else{
	document.getElementById("mail").innerHTML="";
    }
       
    if (u_age=="" || !u_age.match(ageletters)){
	document.getElementById("ageu").innerHTML="Age required and only accept afters 9 years";
		
	errormsg="true";       
    }
    else{
	document.getElementById("ageu").innerHTML="";
    }
    
    if (u_gender==""){
	document.getElementById("gen").innerHTML="Gender required";
	errormsg="true";   	
    }
    else{
	document.getElementById("gen").innerHTML="";
    }

    
    if (state == ""){
	document.getElementById("val_state").innerHTML="state required";    

	errormsg= "true" ;   
    }
    else{
	document.getElementById("val_state").innerHTML="";	
    }  

    if (district==""){
	document.getElementById("val_district").innerHTML="District required";    

	errormsg="true";   
    }
    else{
	document.getElementById("val_district").innerHTML="";	
    }
    if (city==""){
	document.getElementById("val_city").innerHTML="City address required";    

	errormsg="true";   
    }
    else{
	document.getElementById("val_city").innerHTML="";	
    }

    if (pin_code==""){
	document.getElementById("val_pin").innerHTML="Pin code is required";    

	errormsg="true";   
    }
    else{
	document.getElementById("val_pin").innerHTML="";	
    }
    
    
    if (errormsg=="true"){
	alert("please fill the all field");
	return false;
    }
    
    else{
	
	return true;   
    }
    
};

</script>

<div class="container">
  <div class="row" style="color:red;">
    
    <div class="col-md-6 offset-md-3">   
      <div class="myDiv0">
	<h2><center>REGISTERATION FORM</center></h2>
      </div>	
      
      <div class="myDiv container" style="color:black;background-color:cyan"> 
	<form id="register_form"  method="post" class="form-horizontal" role="form" action="/hospital/action_form.php">   .        	
	  <div style="margin-top:20px;" class="form-group row">
	    <label class="control-label col-md">First Name  :</label>
	    <div class="col-md-9" > 
	      <input name="first_name" id="first_name" placeholder="Enter User FirstName" type="text" class="form-control input_register">
	      <p id="firstname" style="font-style:oblique;color:red"></p>	  
	    </div>      
	  </div>
	  <div style="margin-top:20px" class="form-group row">
	    <label class="control-label col-md">Last Name:</label>
	    <div class="col-md-9">
	      
	      <input name="last_name" id="last_name" placeholder="Enter User LastName" type="text" class="form-control input_register">
	      <p id="lastname" style="font-style:oblique;color:red;"></p>	 
	    </div>
	  </div>
	 <div style="margin-top:20px;" class="form-group row">
	    <label class="control-label col-md">MobileNumber:</label>
	    <div class="col-md-9">
	      <input name="m_number" id="m_number" placeholder="Enter User MobileNumber" type="text" class="form-control input_register">
	      <p id="mobnumber" style="font-style:oblique;color:red;"></p>	 
	    </div>
	  </div>
	  <div style="margin-top:20px;" class="form-group row">
	    <label class="control-label col-md">Email id:</label>
	    <div class="col-md-9">
	      <input name="email_id" id="email_id" placeholder="Enter User Emailid" type="email" class="form-control input_register">
	      <p id="mail" style="font-style:oblique;color:red;"></p>	
	    </div>
	  </div>
	  
	  <div style="margin-top:20px;" class="form-group row">
	    <label class="control-label col-md">Age:</label>
	    <div class="col-md-9">
	      <input name="age" id="age"  placeholder="Enter your Age" type="number" class="form-control input_register">
	      <p id="ageu" style="font-style:oblique;color:red;"></p>	 
	    </div>
	  </div>
	  <div style="margin-top:20px;" class="form-group row">
	    <label class="control-label col-md">Gender: </label>
	    <div class="col-md-9">
	      <input  name="gender" id="male"  type="radio" value="Male" checked=checked>Male<br>
	      <input  name="gender" id="Female" type="radio" value="Female">Female<br>
	      <input  name="gender" id="other" type="radio" value="Others" >Others
	      <p id="gen" style="font-style:oblique;color:red;"></p>	  
	    </div>	
	  </div>
	  <br>
	   
	    
	  <div class="border-top my-5"><h4><center><u>ADDRESS</U></center></h4></div>

	  <div style="margin-top:20px;" class="form-group row">
	    <label class="control-label col-md">State  :</label>
	    <div class="col-md-9">     
	     
	       <input type="text" id="state" name="state"/>
	      <p id="val_state" style="font-style:oblique;color:red"></p>	  
	    </div>      
	  </div>    
	  
	  <div style="margin-top:20px;" class="form-group row">
	    <label class="control-label col-md">District  :</label>
	    <div class="col-md-9" > 
<input type="text" id="district" name="district"/>
	     
      <p id="val_district" style="font-style:oblique;color:red"></p>	  
	    </div>      
	</div>   
	  
	 <div style="margin-top:20px;" class="form-group row">
	    <label class="control-label col-md">City  :</label>
	  <div class="col-md-9" > 
	<input type="text" id="city" name="city"/>
	   
 <p id="val_city" style="font-style:oblique;color:red"></p>	  
	  </div>      
	  </div>
	  
	  <div style="margin-top:20px;" class="form-group row">
	    <label class="control-label col-md">Pin code  :</label>
	    <div class="col-md-9" > 
	      <input name="pin_code" id="pin_code" placeholder="Pin Code" type="text" class="form-control input_register">
	      <p id="val_pin" style="font-style:oblique;color:red"></p>	  
	    </div>      
	  </div>
	  <div class="border-top my-5"></div>
	  <div class="text-center" style="margin-left:10px">      
	    <button type="reset">CLEAR</button>
	  <button onclick="return register_form_validation()" type="submit" name="btn_register">REGISTER </button> 
<!--<button type="submit" name="btn_register">REGISTER </button>-->
<br>
</div> 
         
	</form>
      </div>    
    </div>
  </div>
</div>
</html>