
<?php
include('includes/dbconnection.php');
include('includes/session.php');
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
    <link rel="stylesheet" href="assets/css/normal_report.css">

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
                          
                                <div class="normal_report_container">
                                    <div class="content">
                                        <h4 class="header-title">Between Dates Reports of Ticket Generating</h4>

                                        <form method="post" name="normal_report" action="normal_report_details.php">
                                             <div class="date">
                                                <label>From Date</label><br>
                                                <input type="date" id="fromdate" name="fromdate" value="">
                                              </div>
                                            
                                         <div class="date">
                                                <label>To Date</label><br>
                                               <input type="date" id="todate" name="todate" value="">  
                                            </div>
                                          
                                            <button type="submit"  name="submit_normal_report">Submit</button>
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

  <script src="assets/js/dropdown.js"></script>
  <script src="assets/js/jquery.nicescroll.js"></script>
  <script src="assets/js/scripts.js"></script>
  <!--<script src="./sidedrop.js"></script>-->
  </body>
</html>