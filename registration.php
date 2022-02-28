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
		
		$temp=substr($n,0,4);
		$temp1=substr($mob,8,11);
		$user_name=$temp.$temp1;
		
$sql=mysqli_query($conn,"select * from user where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'><h3 align='center'>This user already exists</h3></font>";
}
else
{
	$pass=md5($p);
$query="insert into user values('','$user_name' ,'$n','$e','$pass','$mob','$pro','$gen',now())";
mysqli_query($conn,$query);

$subject ="New User Account Creation";
	$from="maleha.ick@gmail.com";
	$message ="User name: ".$user_name." Password ".$pass;
    $headers = "From:".$from;
    mail($email,$subject,$message,$headers);

$err="<font color='green'><h3 align='center'>Registration successfull !!<h3></font>";

}
}
}



?>


		<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<form method="post" enctype="multipart/form-data"  >
		<table class="table table-bordered" style="margin-top:80px;margin-bottom:60px">
	<caption><h2 align = "center" style="color:#094283"><b>Student Registration Form</b></h2></caption>
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Enter Your name</td>
					<Td> <input  type="text" name="n" class="form-control" pattern="^[A-Z][a-zA-Z]{2,}(?: [A-Z][a-zA-Z]*){0,2}$"
					placeholder="First letter should be capital of your name" required/></td>
				</tr>
				<tr>
					<td>Enter Your email </td>
					<Td><input type="email" name="e" class="form-control" pattern="[a-z0-9._+-]+@[a-z.-]+\.[a-z]{2,}$" 
					placeholder="Ex:abc@xyx.com" required/> </td>
				</tr>
				
				<tr>
					<td>Enter Your Password </td>
					<Td><input type="password" name="p" class="form-control" pattern="(?=.*\d)(?=.*[A-Za-z]).{8,}" 
					placeholder="Must contain at least one number and letter and at least 8 or more characters" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your Mobile </td>
					<Td><input type="text" name="mob" class="form-control" pattern="[0-9]{11}+/"
					placeholder="Mobile number should have eleven digit " required/></td>
				</tr>
				
				<tr>
					<td>Select Your Programme</td>
					<Td><select name="pro" class="form-control" required>
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
					</td>
				</tr>
				
				
				<tr>
					<td>Select Your Gender</td>
					<Td>
				Male<input type="radio" name="gen" value="m" required>
				Female<input type="radio" name="gen" value="f"/>	
					</td>
				</tr>
				
				
		
					
					
<Td colspan="2" align="center">
<input type="submit" value="Save" class="btn btn-info" name="save" style="color:#060607"/>
				
					</td>
				</tr>
			</table>
		</form>
		</div>
		<div class="col-sm-2"></div>
		</div>
	</body>
</html>