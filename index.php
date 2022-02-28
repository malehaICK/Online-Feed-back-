<?php
session_start();
 require('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Online feedback System</title>

    <!-- Bootstrap CSS -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body style="background:#E6E8EC">

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:#175A93">
        <div class="container" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    
                </button>
                <a class="navbar-brand" href="index.php" style="color:#FFFFFF"><span class="glyphicon glyphicon-tasks"></span> Online feedback System</a>
				
				
            </div>
            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
					
					<li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="index.php?info=about"><span class="glyphicon glyphicon-list-alt"></span> About</a>
                    </li>
					
					<li><a style="color:#FFFFFF" href="index.php?info=registration"><span class="glyphicon glyphicon-folder-open"> </span> Registration</a></li>
				
                    <li><a style="color:#FFFFFF" href="index.php?info=login"></i><span class="glyphicon glyphicon-log-in"></span> Student Login</a></li>
                    <li><a style="color:#FFFFFF" href="index.php?info=faculty_login"><span class="glyphicon glyphicon-log-in"></span> Faculty Login</a></li>
                    <li><a style="color:#FFFFFF" href="admin"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
	                <li>
                        <a style="color:#FFFFFF" href="index.php?info=contact"><span class="glyphicon glyphicon-earphone"></span> Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="col-sm-8 col-sm-offset-1 col-md-10 col-md-offset-1 main">
<?php 
					@$info=$_GET['info'];
					if($info!="")
					{
											
						 if($info=="about")
						 {
						 include('about.php');
						 }
						 else if($info=="contact")
						 {
						 include('contact.php');
						 } 
						 else if($info=="login")
						 {
						 include('login.php');
						 }
						 
						  else if($info=="faculty_login")
						 {
						 include('faculty_login.php');
						 }
						 
						 
						 else if($info=="registration")
						 {
						 	include('registration.php');
						 }
					}
					else
					{
				?>

   <header>
         
         <div id="top-header">
             <div id="logo">
                 <img src="images/pic2.jpg" alt="Feedback" width="1100" height="350">
             </div>   
                    </div>
                    </header>
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
			<div class="col-sm-10" style="margin-top:80px;margin-bottom:80px">
				<h2 style="color:#094283">About Faculty feedback System</h2>
				Nowadays we have so much Complex situation in real life which can be handled by PHP or HTML. 
                Student feedback system is a dynamic problem that what every Educational Institute faced in their procedural periods.
                As students are the consumer so any Educational Institute the need to get feedback from the students.
	
			</div>	
				<?php } ?>
            </div>
            
    </div>
                    </div>    
</body>

</html>
