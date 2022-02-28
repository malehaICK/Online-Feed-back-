<?php 
session_start();
include('../dbconfig.php');
error_reporting(1);
$user= $_SESSION['user'];
if($user=="")
{header('location:../index.php');}
$sql=mysqli_query($conn,"select * from user where email='$user' ");
$users=mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Faculty feedback System</title>

    <!-- Bootstrap CSS -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>

  <body style="background:#C2CBD5">

    <nav class="navbar navbar-inverse navbar-fixed-top" style="background:#1149A5">
      <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            
          </button>
          <a class="navbar-brand" style="color:#FFFFFF" href="index.php">Welcome <?php echo $users['name'];?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
          <ul class="nav navbar-nav navbar-right">
          <li><a style="color:#FFFFFF" href="index.php?page=feedback"><span class="glyphicon glyphicon-thumbs-down"></span> Feedback</a></li>
          <li><a style="color:#FFFFFF" href="index.php?page=update_password"> <span class="glyphicon glyphicon-user"></span> Update Password</a></li>
          <li><a style="color:#FFFFFF" href="index.php?page=update_profile"> <span class="glyphicon glyphicon-asterisk"></span>Update Profile</a></li>
          <li><a href="logout.php"  style="color:#FFFFFF"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
          </ul>
          
        </div>
      </div>
    </nav>
        <div class="col-sm-8 col-sm-offset-1 col-md-10 col-md-offset-1 main">
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
				include('give_feedback.php');
			
			}
      
		  }
		  else
		  {
		  
		  ?>


    <div class="container">

        <div class="row">
            <div >
			<div style="margin-top:80px;">
				<h2 style="color:#094283">About Faculty feedback System</h2>
				constructive feedback allows for many positive opportunities. One important element is that feedback provides a foundation for positive student and teacher relationships. 
        By providing appropriate feedback, the students understand the teacher is genuinely concerned about them and their education.
	
			</div>	
      
      </div>
      </div>      

      <div class="row placeholders">
      <h1 class="page-header" style="margin-top:200px; color:#094283">Dashboard</h1>
        <div class="col-xs-6 col-sm-3 placeholder">
          <img src="images/pic1.jfif" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
          <h4>Label</h4>
          <span class="text-muted">Your feedback Matters! </span>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <img src="images/pic5.jpg" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
          <h4>Label</h4>
          <span class="text-muted">Kindly give your feeback!</span>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <img src="images/pic3.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
          <h4>Label</h4>
          <span class="text-muted">Feedback to teacher helps!</span>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <img src="images/pic4.jfif" width="200" height="400" class="img-responsive" alt="Generic placeholder thumbnail">
          <h4>Label</h4>
          <span class="text-muted">Feedback related course helps!</span>
        </div>
      </div>

<?php } ?>
        
          

    </div>

  </body>
</html>
