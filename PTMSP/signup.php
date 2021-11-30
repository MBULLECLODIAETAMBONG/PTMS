<?php

include('includes/session.php');
include('includes/dbconnection.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/css/index.css">
        <title>SIGNUP </title>
    </head>

   <body  style="background-image: url(assets/image/bus.jpg); background-repeat: no-repeat;
  background-size: 100%;">
    <div class="container-form1">
        
        <div class="form-header">
            <h3>
                Enter the following information to add an admin.
            </h3>
        </div>
        <?php 
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            // getting data and storing //
            $adminname=$_POST['name'];
            $email=$_POST['email'];
            $country=$_POST['country'];
            $gender=$_POST['gender'];
            $usercontact=$_POST['contact'];
            $userpassword=$_POST['password'];
            
            
            $userpassword=md5($userpassword);

            //saving the data into the  database//
            $query= "insert into admin ( admin_name, email, password, country, gender, contact) values ('$adminname', '$email', '$userpassword', '$country', '$gender', '$usercontact' )";

            mysqli_query($con, $query);



            if ($query){
            echo '<script>alert("Admin has been successfully added.")</script>';
        }
        else{
            echo '<script>alert("Fail to add admin.")</script>';
        }


        
    } 



        ?>

        <div class="form-info">
            <form action="" method="POST">
                <div class="form-name">
                    <label for="fullName">
                        Full Name
                    </label>
                   <input type="text" name="name" placeholder="Enter Full Name">
                </div>
                
                <div class="form-name">
                      <label for="Email">
                      Email
                      </label>
                      <input type="email" name="email" placeholder="Enter Email">
                </div>

               <div class="form-name">
                    <label for="gender" >  Gender</label>
                    <br>
                    <select name="gender">
                    <option value="gender">Female</option>
                    <option value="gender">Male</option>
                    <option value="gender">other</option>

                </select>
               </div>

                <div class="form-name">
                    <label for=" Contact">
                    contact
                    </label>
                    <input type="contact" name="contact" id="contact" placeholder="Enter Contact">
                </div>

                <divclass="form-name">
                    <label for=" password">
                    Password
                    </label>
                    <input type="password" name="password" placeholder="Enter Password">
                </div>

                <div class="form-name">
                    <label for=" admin_reg_date">
                    country
                    </label>
                    <input type="text" name="country" id="">
                </div>

                <div class="admin_panel">
                    <a href="dashboard.php">Return To Admin Panel</a>
                </div>

                <button class="form-name" name="submit">Add Admin</a></button>

            </form>
        </div>
    </div>
</body>
</html>