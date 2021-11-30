<?php
include('includes/session.php');
include('includes/dbconnection.php');
error_reporting(0);

if(isset($_POST['reset']))
  {
    $contactno=$_SESSION['contactno'];
    $email=$_SESSION['email'];
    $password=md5($_POST['newpassword']);

        $query=mysqli_query($con,"UPDATE admin SET password='$password'  WHERE  email='$email' AND  contact='$contactno' ");
   if($query)
   {
echo "<script>alert('Password successfully changed');</script>";
session_destroy();
   }
  
  }
  ?>

  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="description" content="PARK TICKETING MANAGEMENT SYSTEM">
      <meta name="keywords" content="Buses, Agency">
      <meta name="author" content="MBULLE CLODIA">
      <title>CHANGE PASSWORD</title>
  
    <!--password stylesheet-->
    <link rel="stylesheet" href="assets/css/password.css">

    <!--offline fontawesome-->
<link rel="stylesheet" href="assets/font/fontawesome-free-5.15.3-web/css/all.css">
    
</head>
  <body   style="background-image: url(assets/image/bus.jpg); background-repeat: no-repeat;
  background-size: 100%;">
             
     <!-- main content begins-->
              <main>
                  
                   <!-- basic form start -->
               <div class="container-form">
                <form action="" method="post" name="changepassword" onsubmit="return checkpass();">
                    <div class="form-header">
                        <h4>Reset Password</h4>
                        <p>Hello there, Reset Your Password</p>
                    </div>
                    <div class="form-content">
                         <div class="form-name">
                            <label for="New Password">New Password</label>
                            <input type="password" id="password" name="newpassword" required="true">
                            <i class="ti-lock"></i>
                        </div>

                        <div class="form-name">
                            <label for="Confirm Password">Confirm Password</label>
                            <input type="password" id="password" name="confirmpassword" required="true">
                            <i class="ti-lock"></i>
                        </div>

                            <div class="login">
                                <a href="login.php">Login</a>
                            </div>
                        </div>
                        <div class="Reset">
                            <button id="bt" type="submit" name="reset">Reset <i class="ti-arrow-right"></i></button>
                            
                        </div>
                       
                   </div>
                </form>
            </div>

                 <!-- basic form end -->
                         
                      
              </main>
              <!-- end of main content-->
          </div>
          <script type="text/javascript">
    function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
} 
</script>
  <script src="assets/js/dropdown.js"></script>
  <script src="assets/js/jquery.nicescroll.js"></script>
  <script src="assets/js/scripts.js"></script>
  <!--<script src="./sidedrop.js"></script>-->
  </body>
</html>