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
      <!--custom stylesheet-->
      <link rel="stylesheet" href="assets/css/dashboard.css">
      <!--manage_ticket stylesheet-->
      <link rel="stylesheet" href="assets/css/normal_ticket_search.css">
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
                    
                            <div class="search-container">
                              <div class="main-search">
                                <form method="post">
                                <div class="search-content">
                                    <label>Search by Ticket ID</label><br>
                                    <input id="searchdata" type="text" name="searchdata" required="true"  placeholder="Ticket ID"></div>
                                
                                <br>
                                <button type="submit" name="search" id="submit">Search</button>
                              
                            </form>  
                            <?php
if(isset($_POST['search']))
{ 

$searchdata=$_POST['searchdata'];
  ?>
  <h4>Result for "<?php echo $searchdata;?>" id_number </h4>  

                                <div class="data-tables">
                                  <table class="table" >
                                        <thead >
                                            <tr>
                                                <th>S.NO</th>
                                                <th>Ticket ID</th>
                                                <th>Generating Ticket Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <?php
$ret=mysqli_query($con,"SELECT * FROM india_ticket WHERE ticket_id like '$searchdata'");
$num=mysqli_num_rows($ret);
if($num>0){
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                        <tbody>
          <tr >
            <td><?php echo $cnt;?></td>
              
                  <td><?php  echo $row['ticket_id'];?></td>
                  <td><?php  echo $row['posting_date'];?></td>
                  <td><a href="view_normal_ticket.php?viewid=<?php echo $row['id'];?>">View</a>
                </tr>
                 <?php 
$cnt=$cnt+1;} } else { ?>
  <tr>
    <td colspan="8" style="font-weight: bold;"> No record found against this search</td>

  </tr>
   

<?php }} ?>
 </tbody>
                                    </table>
                                </div>
                              </div>
                         
                    <!-- data table end -->
                         
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


