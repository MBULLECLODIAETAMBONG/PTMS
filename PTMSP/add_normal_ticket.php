<?php

include('includes/session.php');
include('includes/dbconnection.php');
error_reporting(0);
//validating the submit button
if(isset($_POST['normal_ticket_submit']))
  {  
    $noadult=$_POST['normal_adult_ticket'];
    $nochildren=$_POST['normal_child_ticket'];
    $aprice=$_POST['adult_price'];
    $cprice=$_POST['child_price'];
    $ticketid=mt_rand(1,999999);//generating random integer between (min, max) inclusive//
   
        $query= mysqli_query($con, "INSERT INTO india_ticket(ticket_id, no_of_adult, no_of_children, adult_price, child_price) VALUES('$ticketid','$noadult','$nochildren','$aprice','$cprice')");
        
       
    // $query=mysqli_query($con, "INSERT INTO india_ticket(ticket_id, no_of_adult, no_o")
     if ($query) {
    
     echo '<script>alert("Ticket information has been added.")</script>';
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
        <meta name="description" content="PARK TICKETING MANAGEMENT SYSTEM">
        <meta name="keywords" content="Buses, Agency">
        <meta name="author" content="MBULLE CLODIA">
        <title>Park Ticketing Management System | Admin</title>
      <!--custom stylesheet-->
      <link rel="stylesheet" href="assets/css/dashboard.css">
      <!--manage_ticket stylesheet-->
      <link rel="stylesheet" href="assets/css/normal_ticket.css">
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
          <div class="add_normal_ticket-container">
              <h4 class="header-title">Add Ticket</h4>
                <form method="post" action="" name="">  
                        
                  <div class="normal-ticket">

                       <div class="a-ticket">

                            <label for="Adult">Adult </label><br>
                            <input type="text" placeholder="No. Of Adult" id="normal_ticket" name="normal_adult_ticket"  value="">
                       </div>

                       <div class="c-ticket">

                            <label for="Children">Child </label><br>
                            <input type="text" placeholder="No. Of Children" id="normal_ticket" name="normal_child_ticket"  value="">
                       </div>

 <?php

$ret=mysqli_query($con, "SELECT * FROM ticket_type WHERE ticket_type='normal_adult'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                             <input type="hidden" name="adult_price" value="<?php  echo $row['price'];?>">
                                            
                            
<?php } ?>
                           

                          

  <?php

$ret=mysqli_query($con, "SELECT * FROM ticket_type WHERE ticket_type='normal_child'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                             <input type="hidden" name="child_price" value="<?php  echo $row['price'];?>">
                                            
                            
 <?php } ?>
                        
                    
                        <button type="submit" class="button" name="normal_ticket_submit">submit</button>

                  </div>

                </form>
         </div>
                         
                  <!-- end of form-->
                  <div class="footer">
                    <hr>
                      <p><span>&copy;</span> 2021 Park Ticket Management System.</p>

                    </div>
                 
      </main>
                <!-- end of main content-->
  </div>
     

  <script src="assets/js/dropdown.js"></script>
  <script src="assets/js/jquery.nicescroll.js"></script>
  <script src="assets/js/scripts.js"></script>
  <!--<script src="./sidedrop.js"></script>-->
  </body>
</html>


