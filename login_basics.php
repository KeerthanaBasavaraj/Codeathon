
<?php include('header.php'); ?>

<script>
function form_validation(){
var name=document.forms["log_form"]["u_name"].value;
var passwd=document.forms["log_form"]["u_pwd"].value;

if (name=="shanth" & passwd=="kumar"){
alert("validation succesful");
document.forms["log_form"].action="test_login.php";
}
else if (name=="" & passwd==""){
alert("Please enter correct USERNAME and PASSWORD");
return false;
}
else if (name=="shanth" & passwd ==""){
alert("Please enter your PASSWORD");
return false;
}
else if (name=="" & passwd=="kumar"){
alert("Please enter your USERNAME");
return false;
}
else{
alert("validation faild");
return false;
}

}

</script>

<style>
</style>
<div class="container-fluid">
<div class="row">
<div class="col-md-6 offset-md-3">
 <h1 class="h2_colorchange"><strong>LOG IN FORM</strong></h1>
<form id="log_form" method="post"  onsubmit="return form_validation();">
<center>
  <img  src="images/" width="350px" height="300px"  >

</center>
<div class="form-group row">
  <label for="u_name"  class="control-label col-md">User Name  :</label>
<div class="col-md-9">   
 <input name="u_name" style="font-style:oblique;font-size:15px;color:blue;border-radius:7px;" type="text" placeholder="Enter User name" class="form-control"></div>
</div>
<div class="form-group row">
    <label for="u_pwd" class="control-label col-md">Pass Word : </label>
<div class="col-md-9">
    <input name="u_pwd" style="font-style:oblique;font-size:15px;color:blue;border-radius:7px;" type="password" placeholder="Enter Your Password" class="form-control"></div></div>  
<div class="form-group">    
<button type="reset" class="btn_reset" onclick='document.getElementById("clear_onclick").innerHTML="Your text areas cleared"'>CLEAR</button>

<button  style="background-color: green;color: #fff;border: 2px;box-shadow: 0 10px 20px 0 rgba(0,0,0,0.5), 0 10px 15px 0 rgba(0,0,0,0.40);border-radius:8px;" type="submit" onclick="form_validation()">LOG IN</button>
      </div>                                                                                                    
<p id="clear_onclick">That clear button was used in clear the text areas</p>                                                          

<div>
<label>
<input style="font-family:Arial;" type="checkbox">remember me
</label>
<pre>Forgot <a href="html_basics.html">Password</a></pre>
<!--<button type="button" class="btn_cancel">cancel</button>-->
</div>

</form>

</div>
</div>
</div>
