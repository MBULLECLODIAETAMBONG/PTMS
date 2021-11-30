
<?php

include('includes/session.php');
include('includes/dbconnection.php');
error_reporting(0);
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
    <!--dashboard stylesheet-->
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <!--report stylesheet-->
    <link rel="stylesheet" href="assets/css/foreigner_report.css">

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
                  
                    <!-- data table start -->
                    <div class="foreigner-report-details-container">
                        <div class="details">
                            <div class="details-body">
                                <h4 class="header-title">Between Dates Reports</h4>
                                <?php
$fdate=$_POST['fromdate'];
$tdate=$_POST['todate'];

?>
<h5 class="between-dates">Between Dates Report  from <?php echo $fdate?> to <?php echo $tdate?> of Ticket Generating</h5>
                          <div class="data-table">
                             <table class="table" border="2px">
                                        <thead class="thead">
                                            <tr>
                                                <th>S.NO</th>
                                                <th>Ticket ID</th>
                                                <th>Generating Ticket Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <?php
$ret=mysqli_query($con,"SELECT * FROM foreigner_ticket WHERE  date(posting_date) BETWEEN '$fdate' AND '$tdate'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                        <tbody class="tbody">
          <tr>
            <td><?php echo $cnt;?></td>
              
                  <td><?php  echo $row['ticket_id'];?></td>
                  <td><?php  echo $row['posting_date'];?></td>
                  <td><a href="view_foreigner_ticket.php?viewid=<?php echo $row['id'];?>">View</a>
                </tr>
                <?php 
$cnt=$cnt+1;
}?>
                                      </tbody>
                     </table>
                  </div>
               </div>
            </div>
          </div>
                    <!-- data table end -->
                         
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