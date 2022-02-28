<?php 
session_start();
include('../dbconfig.php');
error_reporting(1);
$user= $_SESSION['faculty_login'];
if($user=="")
{header('location:../index.php');}
			

$sql=mysqli_query($conn,"select * from faculty where email='$user' ");
$users=mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  

    <title>Faculty feedback System</title>

  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>

  <body style="background:#CDB9D4" >

    <nav class="navbar navbar-inverse navbar-fixed-top" style="background:#693E78">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            
          </button>
          <a class="navbar-brand" style="color:#FFFFFF" href="index.php">Hello <?php echo $users['Name'];?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php?page=feedback"style="color:#FFFFFF"><span class="glyphicon glyphicon-thumbs-down"></span> Feedback</a></li>
          <li><a href="index.php?page=update_password"style="color:#FFFFFF"><span class="glyphicon glyphicon-user"></span> Update Password</a></li>
      <li><a href="index.php?page=update_profile"style="color:#FFFFFF"><span class="glyphicon glyphicon-asterisk"></span> Update Profile</a></li>
            <li><a href="logout.php"  style="color:#FFFFFF"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
          
        </div>
      </div>
    </nav>
        <div class="col-sm-5 col-sm-offset-3 col-md-8 col-md-offset-1 main">
          
		  <?php 
		@$page=  $_GET['page'];
		  if($page!="")
		  {
		  	if($page=="update_password")
			{
				include('update_password.php');
			
			}
			
				if($page=="update_profile")
			{
				include('update_profile.php');
			
			}
			if($page=="feedback")
			{
				include('feedback.php');
			
			}
		  }
		  else
		  {
		  
		  ?>

      
		 <h1 class="page-header" style="margin-top:300px" align="left">Dashboard</h1>
		  
	
		  
		  
		  

      <div class="row placeholders">
        <div class="col-xs-6 col-sm-3 placeholder">
          <img src="images/pic1.jfif" width="300" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
          <h4>Label</h4>
          <span class="text-muted">Feedback helps you to improve </span>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <img src="images/pic2.jfif" width="300" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
          <h4>Label</h4>
          <span class="text-muted">Enhance your teaching</span>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <img src="images/pic3.jfif" width="300" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
          <h4>Label</h4>
          <span class="text-muted">Organized curriculum</span>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <img src="images/pic4.jfif" width="300" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
          <h4>Label</h4>
          <span class="text-muted">Helps in growth</span>
        </div>
      </div>
<?php } ?>
        
          
        </div>
      </div>
    </div>
  </body>
</html>
