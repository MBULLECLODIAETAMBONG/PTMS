<?php

include('includes/session.php');
include('includes/dbconnection.php');
error_reporting(0);

//validating the submit button
if(isset($_POST['foreigner_ticket_submit']))
  {  
    $noadult=$_POST['foreigner_adult_ticket'];
    $nochildren=$_POST['foreigner_child_ticket'];
    $aprice=$_POST['adult_price'];
    $cprice=$_POST['child_price'];
    $ticketid=mt_rand(1,999999);//generating random integer between (min, max) inclusive//
   
        $query= "INSERT INTO foreigner_ticket(ticket_id, no_of_adult, no_of_children, adult_price, child_price) VALUES('$ticketid','$noadult','$nochildren','$aprice','$cprice')";
        
        mysqli_query($con, $query);
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
      <link rel="stylesheet" href="assets/css/foreigner_ticket.css">
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
          <div class="add_foreigner_ticket-container">
              <h4 class="header-title">Add Ticket</h4>
                <form method="post" action="" name="">  
                        
                  <div class="normal-ticket">

                       <div class="c-ticket">

                            <label for="Adult">Adult </label><br>
                            <input type="text" placeholder="No Of Adult" id="normal_ticket" name="foreigner_adult_ticket"  value="">
                       </div>

                       
                       <div class="a-ticket">
                            <label for="Children">Children</label><br>
                            <input type="text" placeholder="No Of Children" id="adult_ticket" name="foreigner_child_ticket"  value="">
                            
                       </div>

                       
                       <div>

                       <?php

$ret=mysqli_query($con,"SELECT * FROM ticket_type WHERE ticket_type='foreigner_adult'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                             <input type="hidden" name="adult_price" value="<?php  echo $row['price'];?>">
                                             <?php } ?>
                           </div>

                           <div>

                        <?php

$ret=mysqli_query($con, "SELECT * FROM ticket_type WHERE ticket_type='foreigner_child'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                             <input type="hidden" name="child_price" value="<?php  echo $row['price'];?>">
                                             <?php } ?>
                            </div>
                        
                    
                        <button type="submit" class="button" name="foreigner_ticket_submit">submit</button>

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
     

  <script src="assets/js/dropdown.js"></script>
  <script src="assets/js/jquery.nicescroll.js"></script>
  <script src="assets/js/scripts.js"></script>
  <!--<script src="./sidedrop.js"></script>-->
  </body>
</html>
