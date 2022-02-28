<?php
session_start();
if(!isset($_SESSION['user']))
{
header('location:index.php');
}
include('../dbconfig.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



</head>

<body>

    <div id="wrapper">

    
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="background:#0FCA92">
            <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                </button>
                <a class="navbar-brand" style="color:#FFFFFF" href="dashboard.php">Student Feedback<br><br> System</a>
            </div>
            

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                        
                        <li>   
                        <a style="color:#FFFFFF" href="dashboard.php?info=add_faculty"> Add Faculty</a>
                            <a style="color:#FFFFFF" href="dashboard.php?info=show_faculty"> Manage faculty</a>
                        </li>                           
						<li>
                        <a style="color:#FFFFFF" href="dashboard.php?info=show_faculty"> Edit faculty</a>
                            <a style="color:#FFFFFF" href="dashboard.php?info=display_student"><i class="fa fa-eye"></i> Manage Student</a>
                        </li> 

                        <li>
                            <a style="color:#FFFFFF" href="dashboard.php?info=feedback"><i class="fa fa-eye"></i> feedback</a>  
                        
			                <a style="color:#FFFFFF" href="dashboard.php?info=contact"> Contact us</a>
		                </li>
                        <li style="color:#FFFFFF"><a style="color:#FFFFFF" href="dashboard.php?info=update_password">Change Password</a>
                        
                        <a style="color:#FFFFFF" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   
                	<?php 
								@$id=$_GET['id'];
								@$info=$_GET['info'];
								if($info!="")
								{
									if($info=="add_faculty")
										{
											include('add_faculty.php');
										}
										
									elseif($info=="show_faculty")
										{
											include('show_faculty.php');
										}
										
										
									elseif($info=="edit_faculty")
										{
											include('edit_faculty.php');
										}	
										
									elseif($info=="display_student")
										{
											include('display_student.php');
										}
									
										
										
									elseif($info=="contact")
										{
											include('contact.php');
										}	
									elseif($info=="feedback")
										{
											include('feedback.php');
										}
												
										
										else if($info=="update_password")
										{
										include('update_password.php');
										}
									
								}
								else
								{
								include('dashboard_home.php');
								}
							
							
							?>
				
				</div>

            </div>
            

        </div>
    

    </div>
    

</body>

</html>
