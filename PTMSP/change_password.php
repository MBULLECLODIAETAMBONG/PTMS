
<?php
include('includes/session.php');
include('includes/dbconnection.php');
error_reporting(0);

// if (strlen($_SESSION['ptmsaid']==0)) {
//   header('location:logout.php');
//   } else{
if(isset($_POST['submit']))
{
$adminid=$_SESSION['admin'];
$currentpassword=md5($_POST['currentpassword']);
$newpassword=md5($_POST['newpassword']);

$query=mysqli_query($con,"SELECT id FROM admin WHERE id='$adminid' AND   password='$currentpassword'");
$row=mysqli_fetch_array($query);

if($row>0){
$ret=mysqli_query($con,"UPDATE admin SET password='$newpassword' WHERE id='$adminid'");

echo '<script>alert("Your password successully changed")</script>';
} else {

echo '<script>alert("Your current password is wrong")</script>';
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
    <!--dashboard stylesheet-->
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <!--password stylesheet-->
    <link rel="stylesheet" href="assets/css/password.css">

    <!--offline fontawesome-->
<link rel="stylesheet" href="assets/font/fontawesome-free-5.15.3-web/css/all.css">
    
</head>
  <body>
  <?php include('includes/sidebar.php');
  ?>
        <!-- end of side bar-->
         <!-- nav start-->
        <div class="main-content">
             <?php include('includes/navbar.php');
             ?>
     <!-- main content begins-->
              <main>
                  
                   <!-- basic form start -->

                            <div class="password-container">
                              
                                    <div class="card-body">
                                        <h4 class="header-title">Change Password</h4>


   
                                        <form method="post" action="" name="changepassword" onsubmit="return checkpass();">
                                             <div class="form-group">

                                                <label for="Current Password">Current Password</label>
                                                <input type="password"  id="currentpassword" name="currentpassword" placeholder="Current Password" value="" required="true">
                                                
                                            </div>
                                            <div class="form-group">

                                                <label for="New Password">New Password</label>
                                                <input type="password" id="newpassword" name="newpassword"  placeholder="New Password" value="" required="true">
                                                
                                            </div>
                                             <div class="form-group">

                                                <label for="Comfire Password">Confirm Password</label>
                                                <input type="password" id="confirmpassword" name="confirmpassword"  placeholder="Confirm Password" value="" required="true">
                                                
                                            </div>

                                          
                                            <button id="bt" type="submit" name="submit">Change</button>
                                        </form>
                                    </div>
                                
                            </div>

                            <!-- basic form end -->
                         
                      <div class="footer">
                        <hr>
                           <p><span>&copy;</span> 2021 Park Ticket Management System.</p>
                      </div>
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