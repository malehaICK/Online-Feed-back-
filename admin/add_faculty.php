<?php
error_reporting(1);
	include('../dbconfig.php');
	extract($_POST);
	if(isset($save))
	{	
		if(strlen($mob)<11 || strlen($mob)>11)
		{
		$err="<font color='red'>Mobile number must be 11 digit</font>";
		}
		else
		{
		
		$temp=substr($name,0,4);
		$temp1=substr($mob,8,11);
		$user_name=$temp.$temp1;
		
	$q=mysqli_query($conn,"select * from faculty where email='$email'");
	$r=mysqli_num_rows($q);	
	if($r)
	{
	$err="<font color='red'>This email already exists choose diff email.</font>";
	}
	else
	{	
		mysqli_query($conn,"insert into faculty values('','$user_name','$name','$Designation','$prg','$email','$pass','$mob',now())");
		
	$subject ="New User Account Creation";
	$from="maleha@gmail.com";
	$message ="User name: ".$user_name." Password ".$pass;
    $headers = "From:".$from;
    mail($email,$subject,$message,$headers);
		
	$err="<font color='green'>New Faculty Successfully Added.</font>";
	}
	}
}	

?>


<h1 class="page-header">Add Faculty</h1>
<div class="col-lg-8" style="margin:15px;">
	<form method="post">
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Name:</label>
            	<input type="text" value="<?php echo @$name;?>" name="name" class="form-control" required>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Designation:</label>
            	<select value="<?php echo @$Designation;?>" name="Designation" class="form-control" required>
				<option>Lecturer </option>
					<option>Senior lecturer</option>
					<option>Proffesor</option>
</select>
				
        </div>
   	</div>
 	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Email :</label>
            	<input type="email" value="<?php echo @$email;?>"  name="email" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Password :</label>
            	<input type="password" value="<?php echo @$pass;?>"  name="pass" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Programme:</label>
  
  <select name="prg" value="<?php echo @$prg;?>" class="form-control" required>
					
					<option>Python Data Analysis & Visualization Masterclass</option>
					<option>Complete Python Bootcamp</option>
					<option>Web Development Bootcamp</option>
					<option>Java Programming Masterclass</option>
					<option>Python for Data Science and Machine Learning Bootcamp</option>
					<option>100 Days of Code: The Complete Python Pro Bootcamp</option>
					<option>The Complete Web Developer Course</option>
					<option>Cyber Security Course</option>
					<option>Learn Ethical Hacking From Scratch</option>
					<option>The Complete Oracle SQL</option>
					<option>Google Cloud Platform (GCP) Fundamentals</option>
					<option>Microcontroller and Embedded Driver Development</option>
					<option>Arduino Programming and Hardware Fundamentals</option>
					</select>
					

        </div>
    </div>
                  
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Mobile Number:</label>
            	<input type="number" id="mob" value="<?php echo @$mob;?>" class="form-control" maxlength="11" name="mob"  required>
        </div>
  	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-success" name="save" value="Add New Faculty">
        </div>
  	</div>
	</form>


</div>