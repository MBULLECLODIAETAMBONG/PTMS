<?php

include('includes/dbconnection.php');
include('includes/session.php');
error_reporting(0);
if(isset($_POST['submit']))
  {
    $adminid=$_SESSION['admin'];
    $adminname=$_POST['adminname'];
  //$contact=$_POST['contactnumber'];
  
     $query=mysqli_query($con, "UPDATE admin SET admin_name ='$adminname' WHERE id='$adminid'");
    if ($query) {
    
    echo '<script>alert("Profile has been updated")</script>';
    header('location: dashboard.php');
  }
  else
    {
     
      echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/css/password.css">
        <title>ADMIN PROFILE </title>
    </head>

    <body  style="background-image: url(assets/image/bus.jpg); background-repeat: no-repeat;
  background-size: 100%;">
        
                            <div class="admin-container">
                  
                                 <h4 class="admin-header">Admin Profile</h4>

   <?php
$adminid=$_SESSION['admin'];
$ret=mysqli_query($con,"select * from admin where id='$adminid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>                                      <form method="post" action="">

                                             <div class="admin-content">

                                                <label for="Admin Name">Admin Name</label><br>
                                                <input type="text"  id="adminname" name="adminname" placeholder="Admin Name"  value="<?php  echo $row['admin_name'];?>">
                                                
                                            </div>

                                             

                                            <div class="admin-content">

                                                <label for="Contact Number">Contact Number</label><br>
                                                <input type="text"  id="contactnumber" name="contactnumber"  readonly="true" value="<?php  echo $row['contact'];?>">
                                                
                                            </div>

                                            <div class="admin-content">

                                                <label for="Email Address">Email Address</label><br>
                                                <input type="email" id="email" name="email" readonly="true"  value="<?php  echo $row['email'];?>">
                                                <br>
                                                <small id="protection" class="form-text">We'll never share your
                                                    email with anyone else.</small>
                                            </div>
                                            
                                            <!-- <p>readonly="true" means it cannot be modify but can only be read</p> -->

                                         
                                            <?php }  ?>
                                            <button type="submit" class="bt" name="submit">Update</button>
                                        </form>
                                 
                                </div>
                            
                            <!-- basic form end -->
            
    </body>
</html>