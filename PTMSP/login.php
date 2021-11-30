<?php
include('includes/dbconnection.php');
session_start();
error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="assets/css/index.css">

<title>LOGIN</title>
</head>

<body  style="background-image: url(assets/image/bus.jpg); background-repeat: no-repeat;
  background-size: 100%;">

      <?php 
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            // getting data and storing //
            $adminname=$_POST['name'];
            $userpassword=$_POST['password'];
            
            
            $userpassword=md5($userpassword);

            //selecting the data into the  database//
            $query= mysqli_query($con,"select * from admin where admin_name='$adminname' && password='$userpassword' ");
            $req = mysqli_fetch_array($query);

            if($req > 0)
            {
                $_SESSION['admin']= $req['id'];
                header('location: dashboard.php');
            }
            else
            {
                echo "<script>alert('Invalid Information');</script>";
            }
            

           
        }



        ?>
<div class="container-form">
        
        <div class="form-header">
            <h3>
                PARK TICKETING MANAGEMENT SYSTEM.
            </h3>
            <p>Hello there, login and start managing your admin panel.</p>
        </div>

        <div class="form-info">
            <form action="" method="POST">
                <div class="form-name">
                    <label for="fullName">
                       User Name
                    </label>
                   <input type="text" name="name" placeholder="Enter Full Name">
                </div>

                <divclass="form-name">
                    <label for=" password">
                    Password
                    </label>
                    <input type="password" name="password" placeholder="Enter Password">
                </div>

                <div class="forgot">
                    <p><a href="forgot_password.php">Forgot Password?</a></p>
                </div>

                <button class="form-name">login</button>


            </form>
        </div>
    </div>

</body>
</html>