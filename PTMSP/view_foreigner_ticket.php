
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
		  <link rel="stylesheet" href="assets/css/foreigner_ticket.css">
		  <!--offline fontawesome-->
		  <link rel="stylesheet" href="assets/font/fontawesome-free-5.15.3-web/css/all.css">
		  
	</head>

    <body>
    	<!-- sidebar start -->
  <?php include('includes/sidebar.php');
  ?>
        <!-- end of side bar-->

         <!-- nav start-->
	    <div class="main-content">
	             <?php include('includes/navbar.php');
	             ?>
	       <!-- navbar ends -->
	             
	        <!-- main content begins-->
	    <main>
			     <div class="foreigner-view-container">
                                <div class="card">
                                    <div class="card-body" id="exampl">
                                        <?php
 $vfid=$_GET['viewid'];
$ret=mysqli_query($con,"SELECT * FROM foreigner_ticket WHERE id ='$vfid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                <h4 class="header-title" style="color: blue">View Detail of Ticket ID: <?php  echo $row['ticket_id'];?></h4>
                                <h5 class="header-title" style="color: black">Visiting Date: <?php  echo $row['posting_date'];?></h5>


                            <table border="1" class="table-head" >
                                <tr>
                                    <th>#</th>
                                    <th>No of Tickets</th>
                                    <th>Price per unit</th>
                                    <th>Total</th>
                                </tr>
                                <tr>
                                    <th >Number of Adult </th>
                                    <td style="padding-left: 10px"><?php  echo $noadult=$row['no_of_adult'];?></td>
                                     <td style="padding-left: 10px">$<?php  echo $ap=$row['adult_price'];?></td>
                                     <td style="padding-left: 10px">$<?php  echo $tadult=$ap*$noadult;?></td>
                                </tr>
                                <tr>
                                    <th>Number of Chlidren </th>
                                    <td style="padding-left: 10px"><?php  echo $nochild=$row['no_of_children'];?></td>
                                    <td style="padding-left: 10px">$<?php  echo $cp=$row['child_price'];?></td>
                                     <td style="padding-left: 10px">$<?php  echo $tchildren=$cp*$nochild;?></td>
                                </tr>
     
                                 <tr>
                                    <th style="text-align: center;color: blue;font-size: 15px" colspan="3">Total Ticket Price</th>
                                    <td style="padding-left: 10px;">$<?php  echo ($tadult+$tchildren);?></td>
                                </tr>
                            </table>
                         </div>
                                
                                    <?php } ?>

                                     <p style="margin-top:1%"  align="center">
  <i class="fas fa-print fa-2x" style="cursor: pointer;"  OnClick="CallPrint(this.value)" ></i>
</p>
                               
               </div>
                            <!-- basic form end -->
                         
				                 
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
 
 <!-- function which opens another window to print the document or not --> 
    <script>
  function CallPrint(strid) {
  var prtContent = document.getElementById("exampl");
  var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
  WinPrint.document.write(prtContent.innerHTML);
  WinPrint.document.close();
  WinPrint.focus();
  WinPrint.print();
  WinPrint.close();
  }

</script>
	</body>
</html>
