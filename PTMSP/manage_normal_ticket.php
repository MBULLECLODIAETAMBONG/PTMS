<?php

include('includes/session.php');
error_reporting(0);
include('includes/dbconnection.php');

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
		  <!--offline bootstrap-->
		  
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
	           <div class="Manage-ticket-container">
					<div class="Management">
						<h4 class="manage">Manage Ticket</h4>
						<table id="Manage-ticket" class="table-data" border="2px">
							<div>
								<thead>
									<tr>
										<th>S.NO</th>
                                        <th>Ticket ID</th>
                                        <th>Generating Ticket Date</th>
                                        <th>Action</th>
									</tr>
								</thead>
							</div>
							
                               <tbody class="tbody">
           
           <!-- selecting all data from the database table of ticket-type-->
                               	<?php
$ret=mysqli_query($con,"SELECT * FROM india_ticket");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
	                             <tr>
	                                 <td><?php echo $cnt;?></td>
	                                 <td><?php  echo $row['ticket_id'];?></td>
	                                 <td><?php  echo $row['posting_date'];?></td>
	                                 <td><a href="view_normal_ticket.php?viewid=<?php echo $row['id']; ?>">view</a></td>
	                             </tr>
                <?php 
$cnt=$cnt+1;
}?>
                                         </tbody>							
						</table>
				   </div>

		        </div>

	            <!-- end of second row cards-->
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


