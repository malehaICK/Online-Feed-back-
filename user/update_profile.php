<?php 
extract($_POST);
if(isset($update))
{

$query="update user set name='$n',mobile='$mob',gender='$gen' where email='".$_SESSION['user']."'";

mysqli_query($conn,$query);
$err="<font color='blue'>Profie updated successfully !!</font>";


}

$sql=mysqli_query($conn,"select * from user where email='".$_SESSION['user']."'");
$res=mysqli_fetch_assoc($sql);

?>
<h2 align="center" style="margin-top:70px">Update Your Profile</h2>

		<form method="post">
				
			
		<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
		</div>
				<div class="form-group">
				<label for="name" class="col-sm-4">Enter your Name</label>
				<input class="form-control" value="<?php echo $res['name'];?>"  type="text" name="n" pattern="^[A-Z][a-zA-Z]{3,}(?: [A-Z][a-zA-Z]*){0,2}$"/>
				</div>

				<div class="form-group" style="margin-top:10px">
				<label for="email" class="col-sm-4">Enter your Email</label>
				<input class="form-control" type="email" readonly="true" value="<?php echo $res['email'];?>"  name="e" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/>
				</div>
				
				
				<div class="form-group">
				<label for="mobile" class="col-sm-4">Enter your Mobile</label>
				<input class="form-control" type="text" value="<?php echo $res['mobile'];?>"  name="mob" pattern="[0-9]{11}+/"/>
				</div>
				
				<div class="form-group">
				<label for="gender" class="col-sm-4">Select Gender</label>
					
				Male<input type="radio" <?php if($res['gender']=="m") {echo "checked";} ?> name="gen" value="m"/>
				Female<input type="radio" <?php if($res['gender']=="f") {echo "checked";} ?> name="gen" value="f"/>	
									
						
				</div>	
					
<td colspan="2" align="centre">
<input type="submit" class="btn btn-primary" value="Update My Profile" name="update"/>
				
					</td>
				</tr>
			</table>
		</form>
	