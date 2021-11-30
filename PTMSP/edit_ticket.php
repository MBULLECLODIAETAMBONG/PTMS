
<?php
include('incudes/session.php');
include('includes/dbconnection.php');
error_reporting(0);

if(isset($_POST['submit'])) //checking if variable is set or not//
  {
    $tid=$_GET['editid'];
    $ttype=$_POST['ticket_type'];
    $tprice=$_POST['tprice'];
    
    $query=mysqli_query($con, "UPDATE ticket_type SET ticket_type='$ttype',price='$tprice' WHERE id='$tid'");
    if ($query) {
  
    echo '<script>alert("Ticket detail has been Updated.")</script>';
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
		  <link rel="stylesheet" href="assets/css/manage_ticket.css">
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
			    <div class="Manage-ticket-container2">
			        <h4 class="header-title">Update Ticket</h4>
			        	<form method="post" action="" name="">
			                  
		                   <?php
                             $tid=$_GET['editid'];
                             $query = mysqli_query($con, "SELECT * FROM ticket_type WHERE id='$tid'");
                             $cnt=1;
                             while($row=mysqli_fetch_array($query)) {

		                   ?>

					        <div class="Update-ticket">

					        	<div class="t-type">

				                    <label for="Ticket Type">Ticket Type</label><br>
				                    <input type="text" id="ticket_type" name="ticket_type"  value="<?php  echo $row['ticket_type'];?>">
				               </div>
				               
				               <div class="t-cost">
				                    <label for="Ticket Cost">Ticket Cost</label><br>
				                    <input type="text" id="tprice" name="tprice"  value="<?php  echo $row['price'];?>" required="true">
				                    
				               </div>
				                
				          <?php } ?>
				                <button type="submit" class="button" name="submit">Update</button>

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



