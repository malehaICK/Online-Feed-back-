<?php 
extract($_POST);
if(isset($save))
{

	if($np=="" || $cp=="" || $op=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
$op=md5($op);	

$sql=mysqli_query($conn,"select * from user where pass='$op'");
$r=mysqli_num_rows($sql);
if($r==true)
{

	if($np==$cp)
	{
	$np=md5($np);
	$sql=mysqli_query($conn,"update user set pass='$np' where email='$user'");
	
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
<h2 align="center" style="margin-top:70px">Update Password</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter Your Old</div>
		<div class="col-sm-5">
		<input type="password" name="op" class="form-control" pattern="(?=.*\d)(?=.*[A-Za-z]).{8,}"/></div>
	</div>
	
	<div class="row" style="margin-top:20px">
		<div class="col-sm-4">Enter Your New Password</div>
		<div class="col-sm-5">
		<input type="password" name="np" class="form-control" pattern="(?=.*\d)(?=.*[A-Za-z]).{8,}"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter Your Confirm Password</div>
		<div class="col-sm-5">
		<input type="password" name="cp" class="form-control" pattern="(?=.*\d)(?=.*[A-Za-z]).{8,}"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4"></div>
		<div class="col-sm-5">
		<input type="submit" value="Update Password" name="save" class="btn btn-primary"/>
		</div>
	</div>
</form>	