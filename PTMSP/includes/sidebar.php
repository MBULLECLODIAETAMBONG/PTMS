        <!-- sidebar start-->
        <input type="checkbox" id="nav-toggle">
        <div class="sidebar">
             <div class="sidebar-brand">
                 <h2><span class="fab fa-accusoft"></span><span>PTMS || Admin</span></h2>
             </div>

               <div class="sidebar-menu">
                   <ul>
                       <li>
                           <a href="Dashboard.php"><span class="fas fa-home"></span>
                            <span>Dashboard</span></a>
                       </li>

                       <li>
                        <a href="manage_ticket.php"><span class="fas fa-ticket-alt"></span>
                         <span>MANAGE TYPE TICKET</span></a>
                    </li>

                       <li class="dropdown-1">
                        <a href="#"><span class="fas fa-ticket-alt"></span>
                         <span>NORMAL TICKET<i class="fa fa-caret-down"></i></span></a>
                              <ul class="dropdown-container ">
                                 <li><a href="add_normal_ticket.php">Add Ticket</a></li>
                                 <li><a href="manage_normal_ticket.php">Manage Ticket</a></li>
                              </ul>
                      </li>

                    <li class="dropdown-1">
                        <a href="#"><span class="fa fa-book"></span>
                         <span>Foreigner Ticket<i class="fa fa-caret-down"></i></span></a>
                                <ul class="dropdown-container ">
                                 <li><a href="add_foreigner_ticket.php">Add Ticket</a></li>
                                 <li><a href="manage_foreigner_ticket.php">Manage Ticket</a></li>
                              </ul>
                    </li>

                    <li class="dropdown-1">
                        <a href="#"><span class="fas fa-file"></span>
                         <span>REPORT<i class="fa fa-caret-down"></i></span></a>
                                <ul class="dropdown-container ">
                                 <li><a href="normal_report.php">NORMAL PEOPLE REPORT</a></li>
                                 <li><a href="foreigner_report.php">FOREIGNER PEOPLE REPORT</a></li>
                              </ul>
                    </li>

                    <li class="dropdown-1">
                        <a href="#"><span class="fa fa-search"></span>
                         <span>SEARCH<i class="fa fa-caret-down"></i></span></a>
                                <ul class="dropdown-container ">
                                 <li><a href="normal_ticket_search.php">NORMAL TICKET SEARCH</a></li>
                                 <li><a href="foreigner_ticket_search.php">FOREIGNER TICKET SEARCH</a></li>
                              </ul>
                    </li>
                     
                    <li>
                        <a href="signup.php"><span class=""></span>
                         <span>ADD ADMIN</span></a>
                    </li>
                    
                   </ul>
               </div>
        </div>
