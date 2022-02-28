<?php 
echo $_SESSION['faculty_login'];
extract($_POST);
if(isset($save))
{

	if($np=="" || $cp=="" || $op=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{

$sql=mysqli_query($conn,"select * from faculty where password='$op' and email='".$_SESSION['faculty_login']."'");
$r=mysqli_num_rows($sql);
if($r==true)
{

	if($np==$cp)
	{
	$sql=mysqli_query($conn,"update faculty set password='$np' where email='".$_SESSION['faculty_login']."'");
	
	$err="<font color='blue'>Password updated </font>";
	}
	else
	{
	$err="<font color='red'>New  password not matched with Confirm Password </font>";
	}
}

else
{

$err="<font color='red'>Wrong Old Password </font>";

}
}
}

?>
<h2 align="center" style="margin-top:50px">Update Password</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter YOur Old</div>
		<div class="col-sm-5">
		<input type="password" name="op" class="form-control"require/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter YOur New Password</div>
		<div class="col-sm-5">
		<input placeholder="Must contain at least one number and letter and at least 8 or more characters" 
		type="password" name="np" class="form-control"pattern="(?=.*\d)(?=.*[A-Za-z]).{8,}"require/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter YOur Confirm Password</div>
		<div class="col-sm-5">
		<input placeholder="Must contain at least one number and letter and at least 8 or more characters" 
		type="password" name="cp" class="form-control"pattern="(?=.*\d)(?=.*[A-Za-z]).{8,}" require/></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		
		
		<input type="submit" value="Update Password" name="save" class="btn btn-secondary"/>
		</div>
	</div>
</form>	