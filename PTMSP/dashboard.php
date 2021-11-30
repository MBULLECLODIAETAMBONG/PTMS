
<?php
include('includes/dbconnection.php');
include('incudes/session.php');
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
    <!--offline fontawesome-->
<link rel="stylesheet" href="assets/font/fontawesome-free-5.15.3-web/css/all.css">
    <!--offline bootstrap-->
    <link rel="stylesheet" type="text/css" href="./admin/assets/css/bootstrap.css">
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
                   <!--row_1: indian (normal) ticket starts-->
                   <div class="cards">
                       <div class="card-single">
                            <div>

                                                                     <?php
//todays normal(indian) adult visitors                           
 $query=mysqli_query($con,"SELECT sum(no_of_adult) AS totaladult FROM india_ticket WHERE date(posting_date)=CURDATE()");
$result=mysqli_fetch_array($query);
$count_today_avisitors=$result['totaladult'];
 ?>  
                                <span>Today Normal Adult Visitors</span>
                                <p style="font-size: 20px;color: blue; padding:10px;">
                                  <?php 
                                  if($count_today_avisitors==""){
                                         echo '0';
                                     }
                                         else{

                                        echo $count_today_avisitors;
                                          }
                                          ?></p>
                            </div>
                            
                        </div>  

                        <div class="card-single">
                              <div>

                                                                       <?php
//todays normal children visitors
 $query=mysqli_query($con,"SELECT sum(no_of_children) AS totalchild FROM india_ticket WHERE date(posting_date)=CURDATE()");
$result=mysqli_fetch_array($query);
$count_today_cvisitors=$result['totalchild'];
 ?> 
                                  <span>Today Normal Children Visitors</span>
                                   <p style="font-size: 20px;color: blue;padding:10px;">
                                    <?php 
                                    if($count_today_cvisitors==""){
                                         echo '0';
                                     }
                                         else{

                                        echo $count_today_cvisitors;
                                          }
                                          ?></p>
                              </div>
                              
                        </div>

                        <div class="card-single">
                                  <div>

                                                                           <?php
//Yesterday normal(indian) adult visitors
 $query=mysqli_query($con,"SELECT sum(no_of_adult) as totaladulty from india_ticket where date(posting_date)=CURDATE()-1");
$result=mysqli_fetch_array($query);
$count_yest_avisitors=$result['totaladulty'];
 ?>
                                   <span>Yesterday Normal Adult Visitor</span>
                                   <p style="font-size: 20px;color: blue; padding:10px;">
                                    <?php 
                                    if($count_yest_avisitors==""){
                                         echo '0';
                                     }
                                         else{

                                        echo $count_yest_avisitors;
                                          }
                                          ?>
                                        </p>

                                  </div>
                      
                        </div>
                        

                        
                                  <div class="card-single">
                                      <div>

                                        <?php
//Yesterday normal (indian) children visitors
 $query=mysqli_query($con,"SELECT sum(no_of_children) AS totalchildy FROM india_ticket where date(posting_date)=CURDATE()-1");
$result=mysqli_fetch_array($query);
$count_yest_cvisitors=$result['totalchildy'];
 ?>
                                     <span>Yesterday Normal Children Visitor</span>
                                     <p style="font-size: 20px;color: blue; padding:10px;">
                                      <?php 
                                      if($count_yest_cvisitors==""){
                                         echo '0';
                                     }
                                         else{

                                        echo $count_yest_cvisitors;
                                          }
                                          ?></p>
                                      </div>
                                     
                        </div>
                      </div>
                      <!-- end  of  normal(indian) ticket-->

                     <!-- row_2:foreigner ticket starts-->
                <div class="second-card">
                     <div class="cards">
                       <div class="card-single">
                            <div>

                               <?php
//todays Foreigner adult visitors
 $query=mysqli_query($con,"SELECT sum(no_of_adult) AS totaladult FROM foreigner_ticket WHERE date(posting_date)=CURDATE()");
$result=mysqli_fetch_array($query);
$count_today_avisitors=$result['totaladult'];
 ?>  
                                <span>Today Foreigner Adult Visitors</span>
                                <p style="font-size: 20px;color: blue; padding:10px;">
                                  <?php 
                                if($count_today_avisitors==""){
                                         echo '0';
                                     }
                                         else{

                                        echo $count_today_avisitors;
                                          }?></p>
                            </div>
                            
                         </div>  

                          <div class="card-single">
                              <div>

                                <?php
//todays Foreigner children visitors
 $query=mysqli_query($con,"SELECT sum(no_of_children) AS totalchild FROM foreigner_ticket WHERE date(posting_date)=CURDATE()");
$result=mysqli_fetch_array($query);
$count_today_cvisitors=$result['totalchild'];
 ?>  
                                  <span>Today Foreigner Child Visitors</span>
                                   <p style="font-size: 20px;color: blue; padding:10px;">
                                    <?php 
                                    if($count_today_cvisitors==""){
                                         echo '0';
                                     }
                                         else{

                                        echo $count_today_cvisitors;
                                          }
                                          ?>
                              </div>
                              
                          </div>

                              <div class="card-single">
                                  <div>

                                    <?php
//Yesterday foreigner adult visitors
 $query=mysqli_query($con,"SELECT sum(no_of_adult) AS totaladulty FROM foreigner_ticket WHERE date(posting_date)=CURDATE()-1");
$result=mysqli_fetch_array($query);
$count_yest_avisitors=$result['totaladulty'];
 ?>
                                          <span>Yesterday Foreigner Adult Visitors</span>
                                          <p style="font-size: 20px;color: blue; padding:10px;">
                                            <?php 
                                            if($count_yest_avisitors==""){
                                         echo '0';
                                     }
                                         else{

                                        echo $count_yest_avisitors;
                                          }
                                          ?></p>
                                  </div>
                                  
                              </div>

                                  <div class="card-single">
                                      <div>

                                        <?php
//Yesterday Foreigner children visitors
 $query=mysqli_query($con,"SELECT sum(no_of_children) AS totalchildy FROM foreigner_ticket WHERE date(posting_date)=CURDATE()-1");
$result=mysqli_fetch_array($query);
$count_yest_cvisitors=$result['totalchildy'];
 ?>
                                          <span>Yesterday Foreigner child Visitor</span>
                                          <p style="font-size: 20px;color: blue; padding:10px;">
                                            <?php 
                                            if($count_yest_cvisitors==""){
                                         echo '0';
                                     }
                                         else{

                                        echo $count_yest_cvisitors;
                                          }
                                          ?></p>
                                      </div>
                                     
                                 </div>
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