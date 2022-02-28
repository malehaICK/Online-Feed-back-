<?php 
include('dbconfig.php');
extract($_POST);
if(isset($save))
{

    $query="insert into contact values('','$n','$e','$msg', now())";
    mysqli_query($conn,$query);

    $err="<font color='green'>Message sent successfull !!</font>";	

}

?>
       <div class="row">
            <div class="col-md-6">
                <h3><font color="0A2FC9">Contact us </font></h3>
                <form name="sentMessage" method="post" id="contactForm" novalidate>
                  <?php echo @$err; ?>
                  <div class="form-group" style="margin-top:10px;margin-bottom:10px">
                <label for="Name" style="margin-top:10px;margin-bottom:5px">Name</label>
                <input type="text" class="form-control" name="n" placeholder="Name" required>
                </div>
                    
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="e" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="msg" class="form-control" rows="5" cols="50" rows="10" placeholder="message"></textarea> 
                    </div>
                    <div id="success"></div>
                    
                    <button type="submit" name="save" class="btn btn-primary">Send Message</button>
					<h1></h1>
                </form>
            </div>


            
			<div class="col-md-6" style="margin-top:100px">
                <h3>Contact Details</h3>
                <p>
                    Aftabnagar<br>Dhaka,Bangladehs<br>
                </p>
                <p> 
                    <label title="Phone">&#x1F4DE;: (123) 456-7890 </label> </p>
                <p> 
                    <label title="Email">&#128231: <a href="mailto:name@gmail.com">name@gmail.com</label></a>
                </p>
                <p>
                    <label title="Hours"> &#128337: Sunday-Thursday: 9:00 AM to 5:00 PM
                    </label>
                </p>
               
            </div>
        </div>

        </div>
        
            
    <br/><br/>
    
    </div>
    
