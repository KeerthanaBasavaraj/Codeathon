
<?php
include ("header.php");
$conn = new mysqli("localhost", "root", "", "hospital");
$values="select * from register_form";
if($result = mysqli_query($conn, $values)){
	    
	    while($row = mysqli_fetch_assoc($result)){
$data[]=$row;
	
}

}
?>
<html>
<div class="container">
  
  <h2><center>REGISTRATION LIST</center></h2>
  
  <table class="table">
	 <tr>
	     <th>id</th>
	     <th>First name</th>     
	     <th>Last name</th>
	     <th>Email id</th>
	     <th>Phone Number</th>	    
	     <th>Age</th>
	     <th>Gender</th>
	     <th>city</th>
	     <th>district</th>
	     <th>state</th>
	<th>pincode</th>   
       </tr>
<?php

foreach($data as $value){
?>
		 
<tr>
<td><?php echo $value['user_id']; ?></td>
<td><?php echo $value['first_name']; ?></td>
<td><?php echo $value['last_name']; ?></td>
<td><?php echo $value['email_id']; ?></td>
<td><?php echo $value['phone_number']; ?></td>
<td><?php echo $value['age']; ?></td>
<td><?php echo $value['gender']; ?></td>
<td><?php echo $value['city']; ?></td>
<td><?php echo $value['district']; ?></td>
<td><?php echo $value['state']; ?></td>
<td><?php echo $value['pin_code']; ?></td>
</tr>    
<?php
}
?>
  </table>  
</div>

</html>